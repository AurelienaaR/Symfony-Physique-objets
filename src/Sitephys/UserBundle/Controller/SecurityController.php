<?php

namespace Sitephys\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Sitephys\UserBundle\Entity\User;
use Sitephys\UserBundle\Form\UserType;


class SecurityController extends Controller
{

  public function loginAction(Request $request)
  {
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) 
    { 
      return $this->redirectToRoute('sitephys_physmvc_home');
    } else {
      $userLogin = $this->getUser();
      if (null === $userLogin) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userLogin->getUsername();
      }
      
      $authenticationUtils = $this->get('security.authentication_utils');

      return $this->render('SitephysUserBundle:Security:login.html.twig', array(
        'userconnect' => $userconnect,
        'last_username' => $authenticationUtils->getLastUsername(),
        'error'         => $authenticationUtils->getLastAuthenticationError(),
      ));            
    }
  }


  public function homeuserAction(Request $request)
  { 
    $userObject = $this->getUser();

    if (null === $userObject) {
      $userconnect = 'Connexion';
      $userRoles = 'non connecté';
      return $this->redirectToRoute('sitephys_physmvc_home');
    } else {
      $userconnect = $userObject->getUsername();
      $userObjectArray = $userObject->getRoles();
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


  public function adduserAction($roleuser, Request $request)
  {
    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
    } else {
      $userconnect = $userconnectx->getUsername();
    }
    
    $userAdd = new User();

    $formAddUserBuilder = $this->get('form.factory')->createBuilder(UserType::class, $userAdd);
    if ($roleuser == "author") {
      $formAddUserBuilder
        ->add('username',   TextType::class)
        ->add('email',      EmailType::class)
        ->add('password',      PasswordType::class)
        ->add('interest',   TextareaType::class)
        ->add('salt',      HiddenType::class)
        ->add('roles',    HiddenType::class, array('data' => 'a:1:{i:0;s:11:"ROLE_AUTHOR";}'))
        ->add('authorized',    HiddenType::class)
        ->add('save',      SubmitType::class)
        ;
      } else {
        $formAddUserBuilder
        ->add('username',   TextType::class)
        ->add('email',      EmailType::class)
        ->add('password',      PasswordType::class)
        ->add('salt',      HiddenType::class)
        ->add('roles',    HiddenType::class, array('data' => 'a:1:{i:0;s:9:"ROLE_USER";}'))
        ->add('authorized',    HiddenType::class)
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
        $usEmail = $formUserAdd->get('email')->getData();

        if ($roleuser == "author") {
          $interest = $formUserAdd->get('interest')->getData();
          if (strlen($interest) >= 500) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userAdd);
            $em->flush();
          } else {
            return $this->render('SitephysUserBundle:Security:adduser.html.twig', 
              array(
                'userconnect' => $userconnect,
                'userroles' => $roleuser,
                'formuseradd' => $formUserAdd->createView(),
            ));
          } 
        } else {
          $em = $this->getDoctrine()->getManager();
          $em->persist($userAdd);
          $em->flush();
        }

        $xx = $this->setCookieAction($usEmail);
        $toklinked = $this->readCookieAction($xx);

        return $this->render('SitephysUserBundle:Security:expemailuser.html.twig', 
          array(
            'userconnect' => $userconnect,
            'uemail' => $usEmail,
            'toklink' => $toklinked,
          ));
      }
    }

    return $this->render('SitephysUserBundle:Security:adduser.html.twig', 
      array(
        'userconnect' => $userconnect,
        'userroles' => $roleuser,
        'formuseradd' => $formUserAdd->createView(),
    ));
  }


  public function authenAction($uemail, $toklink, Request $request)
  {
    $yy = $this->setCookieAction($uemail);
    $tok = $this->readCookieAction($yy);

    if ((null !== $toklink) && ($tok == $toklink)) {
      $em = $this->getDoctrine()->getManager();
      $userRep = $em->getRepository('SitephysUserBundle:User');
      $userAuth = $userRep->findByEmail($uemail);
      $userAuth[0]->setAuthorized(true);
      $em->persist($userAuth[0]);
      $em->flush();

      $userconnectx = $this->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userconnectx->getUsername();
      }

    return $this->render('SitephysUserBundle:Security:authen.html.twig', 
      array(
        'userconnect' => $userconnect,
        'tok' => $tok,
        'toklink' => $toklink,
      ));
    } else {
      return $this->redirectToRoute('sitephys_physmvc_home');
    }
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

    if (null === $userObject) {
      return $this->redirectToRoute('sitephys_physmvc_home');
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


  public function setCookieAction($userEmail)
    {
      $hashEmail = hash('sha512', $userEmail, false);
      $response = new Response();          
      $response->headers->setCookie(new Cookie('tokenUser', $hashEmail, time() + 3600)); 
      $response->send();
      return $response; 
    }


  public function readCookieAction($respons) 
    {
      $resp = $respons->headers->getCookies();
      $respCookie = $resp[0]->getValue('tokenUser');
      return $respCookie;         
    }


  public function emailuserAction($uemail, $toklink)
  {
    $message = \Swift_Message::newInstance()
      ->setSubject('Confirmation de votre courriel pour la demande de compte')
      ->setFrom('xxx@yyy.fr')
      ->setTo($uemail)
      ->setBody(
        $this->renderView(
          'Emails/registration.html.twig',
          array('uemail' => $uemail,
            'toklink' => $toklink)
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
  return $this->render('SitephysUserBundle:Security:emailuser.html.twig', 
    array(
      'uemail' => $uemail,
      'toklink' => $toklink,
    ));
  }
}
