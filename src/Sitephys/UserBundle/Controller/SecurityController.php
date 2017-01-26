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

    // Le service authentication_utils permet de récupérer le nom d'utilisateur
    // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
    // (mauvais mot de passe par exemple)
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
      $userUsername = $userObject->getUsername();
      $userEmail = $userObject->getEmail();
      $userPassword = $userObject->getPlainPassword();
      $userRoles = $userObject->getRoles();

      return $this->render('SitephysUserBundle:Security:homeuser.html.twig', array(
        'userobject' => $userObject,
      ));
    } 
  }

  public function adduserAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys'); 
    $userRep = $em->getRepository('SitephysUserBundle:User');

    $userAdd = new User();
    $formAddUserBuilder = $this->get('form.factory')->createBuilder(UserType::class, $userAdd);
    $formAddUserBuilder
      ->add('username',   TextType::class)
      ->add('email',      EmailType::class)
      ->add('plainpassword',      TextType::class)
      ->add('password',      HiddenType::class)  // , array('data' => 'yyy',)
      ->add('salt',      HiddenType::class)
      ->add('roles',    TextType::class)
      ->add('save',      SubmitType::class)
        ;
    $formUserAdd = $formAddUserBuilder->getForm();
    $formUserAdd->handleRequest($request);

    if ($formUserAdd->isSubmitted()) {
      if ($formUserAdd->isValid()) {
        $userAddForm = $formUserAdd->getData();
        $em->persist($userAddForm);
        $em->flush();
        return $this->redirectToRoute('sitephys_physmvc_home');            
      }
    }
 
    return $this->render('SitephysUserBundle:Security:adduser.html.twig', array(
      'formuseradd' => $formUserAdd->createView(),
    ));
  }

  public function viewuserAction($iduser)
  {
    $em = $this->getDoctrine()->getManager();
    $userRep = $em->getRepository('SitephysUserBundle:User');

    $userObject = $userRep->find($iduser); 
    if (!$userObject) {
      throw new NotFoundHttpException('Elément "' . $iduser . '" pas dans la base.');
    } else {
      $userObjectArray = $userObject->getRoles();
      $userRoles = $userObjectArray[0];

      return $this->render('SitephysUserBundle:Security:viewuser.html.twig', array(
        'userobject' => $userObject,
        'userroles' => $userRoles,
      ));
    } 
  }

  public function deleteuserAction($iduser)
  {
    $em = $this->getDoctrine()->getManager();
    $userRep = $em->getRepository('SitephysUserBundle:User');

    $userObject = $userRep->find($iduser); 
    if (!$user) {
      throw new NotFoundHttpException('Elément "' . $iduser . '" pas dans la base.');
    } else {
      $em->remove($userObject);
    }
  }

}