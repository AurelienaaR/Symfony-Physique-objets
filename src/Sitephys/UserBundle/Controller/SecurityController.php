<?php
// src/Sitephys/UserBundle/Controller/SecurityController.php;

namespace Sitephys\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Doctrine\ORM\EntityRepository;
use Sitephys\UserBundle\Entity\User;
use Sitephys\UserBundle\Form\UserType;
use Doctrine\ORM\QueryBuilder;


class SecurityController extends Controller
{
  
  public function loginAction(Request $request)
  {
    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('sitephys_physmvc_home');
    }

    $authenticationUtils = $this->get('security.authentication_utils');

    return $this->render('SitephysUserBundle:Security:login.html.twig', array(
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));
  }


  public function homeuserAction()
  {
    $em = $this->getDoctrine()->getManager();
    $userRep = $em->getRepository('SitephysUserBundle:User');
  /*  if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
    }
  */
    $userObject = $this->getUser();
    if (null === $userObject) {
      throw new NotFoundHttpException('Non connecté');
    } else {

      $userObjectArray = $userObject->getRoles();
      $userRoles = $userObjectArray[0];

      return $this->render('SitephysUserBundle:Security:homeuser.html.twig', array(
        // 'passworduser' => $passwordUser,
        'userobject' => $userObject,
        'userroles' => $userRoles,
      ));
    } 
  }


  public function adduserAction($roleuser, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys'); 
    $userRep = $em->getRepository('SitephysUserBundle:User');

    $userAdd = new User();

    $formAddUserBuilder = $this->get('form.factory')->createBuilder(UserType::class, $userAdd);
    if ($roleuser == "author") {
      $formAddUserBuilder
        ->add('username',   TextType::class)
        ->add('email',      EmailType::class)
        ->add('password',      PasswordType::class)
        ->add('salt',      HiddenType::class)
        ->add('roles',    HiddenType::class, array('data' => 'a:1:{i:0;s:11:"ROLE_AUTHOR";}'))
        ->add('save',      SubmitType::class)
        ;
      } else {
        $formAddUserBuilder
        ->add('username',   TextType::class)
        ->add('email',      EmailType::class)
        ->add('password',      PasswordType::class)
        ->add('salt',      HiddenType::class)
        ->add('roles',    HiddenType::class, array('data' => 'a:1:{i:0;s:9:"ROLE_USER";}'))
        ->add('save',      SubmitType::class)
        ;
      }

    $formUserAdd = $formAddUserBuilder->getForm();
    $formUserAdd->handleRequest($request);

    if ($formUserAdd->isSubmitted()) {
      if ($formUserAdd->isValid()) {
        $factory = $this->get('security.encoder_factory');
        $encoder = $factory->getEncoder($userAdd);
        $password = $encoder->encodePassword($formUserAdd->get('password')->getData(), $userAdd->getSalt());
        $userAdd->setPassword($password);
        $roleArray = unserialize($formUserAdd->get('roles')->getData());
        $userAdd->setRoles($roleArray);
 
        $em = $this->getDoctrine()->getManager();
        $em->persist($userAdd);
        $em->flush();
 
        return $this->redirectToRoute('sitephys_physmvc_home');            
      }
    }
 
    return $this->render('SitephysUserBundle:Security:adduser.html.twig', array(
      'roleuser' => $roleuser,
      'formuseradd' => $formUserAdd->createView(),
    ));
  }


  public function deleteuserAction($iduser)
  {
    $em = $this->getDoctrine()->getManager();
    $userRep = $em->getRepository('SitephysUserBundle:User');

    $userObject = $userRep->find($iduser); 
    if (!$userObject) {
      throw new NotFoundHttpException('Utilisateur "' . $iduser . '" pas dans la base.');
    } else {
      $em->remove($userObject);
      $em->flush();
      return $this->render('SitephysUserBundle:Security:deleteuser.html.twig');
    }
  }

}