<?php

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
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) 
    { 
      return $this->redirectToRoute('sitephys_physmvc_home');
    } else {

    $userLogin = $this->get('security.token_storage')->getToken()->getUser();
         // var_dump($userLogin);
    if(null != $userLogin && 'anon.' != $userLogin) {

         $roleuser = $this->get('security.token_storage')->getToken()->getRoles();

      if (null === $userLogin) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userLogin;
      }

      return $this->render('SitephysUserBundle:Security:homeuser.html.twig', array(
        'userconnect' => $userconnect,
        'userobject' => $userLogin,
        'userroles' => $roleuser,
      ));            
    }

    $authenticationUtils = $this->get('security.authentication_utils');
    // var_dump($authenticationUtils);
    // $this->get('security.token_storage')->getToken()->setUser('jklm');

    $userconnectx = $this->get('security.token_storage')->getToken()->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userconnectx;
      }
      
if (null !== $request->headers->get('X-Auth-Token')) {
  var_dump($request->headers->get('X-Auth-Token'));
}

    return $this->render('SitephysUserBundle:Security:login.html.twig', array(
      'userconnect' => $userconnect,
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));
  }
}


  public function homeuserAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $userRep = $em->getRepository('SitephysUserBundle:User');
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      $userObject = $this->get('security.token_storage')->getToken(); // ->getUser();
      if (null === $userObject) {
        $userconnect = 'Connexion';
        $userRoles = 'non connecté';
        throw new NotFoundHttpException('Non connecté');
      } else {
        // var_dump($userObject);
        $userRoles = 'non connecté';
        $userconnect = $userObject->getUser();
        $userObjectArray = $userObject->getRoles();
        if (null != $userObjectArray)
        {
          $userRolesX = $userObjectArray[0];
          switch ($userRolesX) {
            case 'ROLE_USER':
              $userRoles = 'utilisateur (consultation)';
            break;
            case 'ROLE_AUTHOR':
              $userRoles = 'auteur (consultation, modification et ajout)';
            break;
            case 'ROLE_ADMIN':
              $userRoles = 'administrateur (édition complète)';
            break;
            default:
              $userRoles = 'non connecté';
            break;
            }
          }

        return $this->render('SitephysUserBundle:Security:homeuser.html.twig', array(
          'userconnect' => $userconnect,
          'userobject' => $userObject,
          'userroles' => $userRoles,
        ));
      }
    }
    return $this->redirectToRoute('sitephys_physmvc_home'); 
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
  //      ->add('plainPassword',      HiddenType::class)
        ->add('interest',   TextareaType::class)
        ->add('salt',      HiddenType::class)
        ->add('roles',    HiddenType::class, array('data' => 'a:1:{i:0;s:11:"ROLE_AUTHOR";}'))
        ->add('save',      SubmitType::class)
        ;
      } else {
        $formAddUserBuilder
        ->add('username',   TextType::class)
        ->add('email',      EmailType::class)
        ->add('password',      PasswordType::class)
  //      ->add('plainPassword',      HiddenType::class)
        ->add('salt',      HiddenType::class)
        ->add('roles',    HiddenType::class, array('data' => 'a:1:{i:0;s:8:"ROLE_API";}'))
        ->add('save',      SubmitType::class)
        ;
      }

    $formUserAdd = $formAddUserBuilder->getForm();
    $formUserAdd->handleRequest($request);

    if ($formUserAdd->isSubmitted()) {
      if ($formUserAdd->isValid()) {
        $plainPassword = $formUserAdd->get('password')->getData();
        $userAdd->setPlainPassword($plainPassword);
        $factory = $this->get('security.encoder_factory');
        $encoder = $factory->getEncoder($userAdd);
        $password = $encoder->encodePassword($formUserAdd->get('password')->getData(), $userAdd->getSalt());
        
        $userAdd->setPassword($password);
        $roleArray = unserialize($formUserAdd->get('roles')->getData());
        $userAdd->setRoles($roleArray);

        if ($roleuser == "author") {
          $interest = $formUserAdd->get('interest')->getData();
          if (strlen($interest) >= 20) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userAdd);
            $em->flush();
          } else {
            throw new NotFoundHttpException('Le champ Intérêts doit contenir au moins 20 caractères.');
          }
        } else {
          $em = $this->getDoctrine()->getManager();
          $em->persist($userAdd);
          $em->flush();
        }

      $this->get('security.token_storage')->getToken()->setUser($userAdd);
      $this->get('security.token_storage')->getToken()->getUser()->setRoles($roleArray);

      if (null === $userAdd) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userAdd->getUsername();
      }

      return $this->render('SitephysUserBundle:Security:homeuser.html.twig', array(
        'userconnect' => $userconnect,
        'userobject' => $userAdd,
        'userroles' => $roleuser,
      ));            
      }
    }

    $userconnectx = $this->get('security.token_storage')->getToken()->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userconnectx;
      }
 
    return $this->render('SitephysUserBundle:Security:adduser.html.twig', 
      array(
        'userconnect' => $userconnect,
        'roleuser' => $roleuser,
        'formuseradd' => $formUserAdd->createView(),
    ));
  }


  public function deleteuserAction($iduser)
  {
    $em = $this->getDoctrine()->getManager();
    $userRep = $em->getRepository('SitephysUserBundle:User');

    $userObject = $userRep->find($iduser); 
    $usernameDeletedAccount = $userObject->getUsername();
    $tabRolesDeletedAccount = $userObject->getRoles();
    $roleDeletedAccountX = $tabRolesDeletedAccount[0];

    switch ($roleDeletedAccountX) {

      case 'ROLE_USER':
        $roleDeletedAccount = 'utilisateur (consultation)';
        break;
      case 'ROLE_AUTHOR':
        $roleDeletedAccount = 'auteur (consultation, modification et ajout)';
        break;
      case 'ROLE_ADMIN':
        $roleDeletedAccount = 'administrateur (édition complète)';
        break;
      default:
        $roleDeletedAccount = 'non connecté';
        break;

    }

    if (!$userObject) {
      throw new NotFoundHttpException('Utilisateur "' . $iduser . '" pas dans la base.');
    } else {
      $em->remove($userObject);
      $em->flush();

      $userconnectx = $this->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userconnectx->getUsername();
      }
      return $this->render('SitephysUserBundle:Security:deleteuser.html.twig', array(
        'userconnect' => $userconnect,
        'usernamedeletedaccount' => $usernameDeletedAccount,
        'roledeletedaccount' => $roleDeletedAccount,
        ));
    }
  }

public function emailuserAction($name)
{
    $message = \Swift_Message::newInstance()
        ->setSubject('Demande de compte auteur')
        ->setFrom('xxx@xxx.com')
        ->setTo('yyy@xxx.com')
        ->setBody(
            $this->renderView(
                'Emails/registration.html.twig',
                array('name' => $name)
            ),
            'text/html'
        )
        /*
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        ) */
    ;

    $this->get('mailer')->send($message);
    return $this->redirectToRoute('sitephys_physmvc_home');
}

}
