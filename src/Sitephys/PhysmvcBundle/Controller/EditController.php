<?php

namespace Sitephys\PhysmvcBundle\Controller;

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
use Sitephys\PhysmvcBundle\Entity\Phys;
use Sitephys\PhysmvcBundle\Entity\Domain;
use Sitephys\PhysmvcBundle\Entity\Topic;
use Sitephys\PhysmvcBundle\Entity\Level;
use Sitephys\PhysmvcBundle\Entity\Symbolization;
use Sitephys\PhysmvcBundle\Form\TopicType;
use Sitephys\PhysmvcBundle\Form\PhysType;
use Sitephys\PhysmvcBundle\Entity\Physupdate;
use Sitephys\PhysmvcBundle\Entity\Physadd;
use Sitephys\PhysmvcBundle\Entity\Physaddtopic;
use Sitephys\PhysmvcBundle\Form\PhysupdateType;
use Sitephys\PhysmvcBundle\Form\PhysaddType;
use Sitephys\PhysmvcBundle\Form\PhysaddtopicType;
use Doctrine\ORM\QueryBuilder;


class EditController extends Controller
{  

  public function homeeditAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    
    $physUpPhys = $em->getRepository('SitephysPhysmvcBundle:Phys')->findAllPhysUp();
    if (null === $physUpPhys) {
      throw new NotFoundHttpException("Aucun élément modifié dans la base.");
    }
    $physLevels = $em->getRepository('SitephysPhysmvcBundle:Level')->findIdLevelsLevel();
    if (null === $physLevels) {
      throw new NotFoundHttpException("Aucun niveau dans la base.");
    }

    $physDomains = $em->getRepository('SitephysPhysmvcBundle:Domain')->findIdTitleDomain();
    if (null === $physDomains) {
      throw new NotFoundHttpException("Aucun domaine dans la base.");
    }

    $physPhyss = $em->getRepository('SitephysPhysmvcBundle:Phys')->findIdTitlePhys();

    if (null === $physPhyss) {
      throw new NotFoundHttpException("Aucun élément dans la base.");
    }

    $physPhysadds = $em->getRepository('SitephysPhysmvcBundle:Physadd')->findIdTitlePhysadd();
    if (null === $physPhysadds) {
      throw new NotFoundHttpException("Aucun ajout dans la base.");
    }

    $physPhysaddtopics = $em->getRepository('SitephysPhysmvcBundle:Physaddtopic')->findIdTitlePhysaddtopic();
    if (null === $physPhysaddtopics) {
      throw new NotFoundHttpException("Aucun ajout dans la base.");
    }

  /*
      $em = $this->getDoctrine()->getManager();
      $userRep = $em->getRepository('SitephysUserBundle:User');
      $userAuth = $userRep->findByEmail($uemail);
      $userAuth[0]->getAuthorized();
  */

    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
      $authorized = false;
    } else {
      $userconnect = $userconnectx->getUsername();
      $authorized = $userconnectx->getAuthorized();
      if (null == $authorized) {
        $authorized = false;
      }
    }

    return $this->render('SitephysPhysmvcBundle:Edit:homeedit.html.twig', array(
      'userconnect' => $userconnect,
      'authorized' => $authorized,
      'physphyss' => $physPhyss,
      'physupphys' => $physUpPhys,
      'physlevels' => $physLevels,
      'physdomains' => $physDomains,
      'physphysadds' => $physPhysadds,
      'physphysaddtopics' => $physPhysaddtopics,
    ));
  }


  public function addAction(Request $request)
  { 
    $em = $this->getDoctrine()->getManager();

    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
    } else {
      $userconnect = $userconnectx->getUsername();
      $useremail = $userconnectx->getEmail();
    }

    $physAdd = new Physadd();
    $formAddBuilder = $this->get('form.factory')->createBuilder(PhysaddType::class, $physAdd);
    $formAddBuilder
      ->add('title',      TextType::class)
      ->add('username',      TextType::class, array('data' => $userconnect,))
      ->add('email',      EmailType::class, array('data' => $useremail,))
      ->add('date',      DateType::class)
      ->add('content',      TextareaType::class)
      ->add('document',     FileType::class, array('required' => false))
      ->add('weblink',     UrlType::class, array('required' => false))
      ->add('save',      SubmitType::class);

    $formPhysAdd = $formAddBuilder->getForm();
    $formPhysAdd->handleRequest($request);

    if ($formPhysAdd->isSubmitted()) {
      if ($formPhysAdd->isValid()) {
        $physAddForm = $formPhysAdd->getData();
        $em->persist($physAddForm);
        $em->flush();
        return $this->redirectToRoute('sitephys_physmvc_edition');            
      }
    }
 
    return $this->render('SitephysPhysmvcBundle:Edit:add.html.twig', array(
      'userconnect' => $userconnect,
      'formphysadd' => $formPhysAdd->createView(),
    ));
  }


  public function addtopicAction($iddom, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');

    $domtopObject = $domainRep->find($iddom);

    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
      return $this->redirectToRoute('sitephys_physmvc_edition');
    } else {
      $userconnect = $userconnectx->getUsername();
      $useremail = $userconnectx->getEmail();
      $physAddtopic = new Physaddtopic();
      $formAddtopicBuilder = $this->get('form.factory')->createBuilder(PhysaddtopicType::class, $physAddtopic);
      $formAddtopicBuilder
        ->add('domainid',      HiddenType::class, array('data' => $iddom))
        ->add('mode',      IntegerType::class)
        ->add('title',      TextType::class)
        ->add('username',   TextType::class, array('required' => false))
        ->add('email',      EmailType::class, array('data' => $useremail))
        ->add('date',      DateType::class)
        ->add('contentexpin',      TextareaType::class)
        ->add('contentth',      TextareaType::class)
        ->add('contentexpout',      TextareaType::class)
        ->add('contentretexpin',      TextareaType::class)
        ->add('contentretth',      TextareaType::class)
        ->add('contentretexpout',      TextareaType::class)
        ->add('document',     FileType::class, array('required' => false))
        ->add('weblink',     UrlType::class, array('required' => false))
        ->add('save',      SubmitType::class);

      $formPhysAddtopic = $formAddtopicBuilder->getForm();
      $formPhysAddtopic->handleRequest($request);

      if ($formPhysAddtopic->isSubmitted()) {
        if ($formPhysAddtopic->isValid()) {
          $physAddtopicForm = $formPhysAddtopic->getData();
          $em->persist($physAddtopicForm);
          $em->flush();
          return $this->redirectToRoute('sitephys_physmvc_edition');
        }
      }

        return $this->render('SitephysPhysmvcBundle:Edit:addtopic.html.twig', array(
          'userconnect' => $userconnect,
          'domtop' => $domtopObject,
          'formphysaddtopic' => $formPhysAddtopic->createView(),
        ));
      }
  }

  public function updateAction($id, Request $request)
  {
  	$em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys');
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');

    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
    } else {
      $userconnect = $userconnectx->getUsername();
      $useremail = $userconnectx->getEmail();
    }

    $physupdate = $physRep->find($id);
    if (null === $physupdate) {
      // throw new NotFoundHttpException('Elément "' . $id . '" pas dans la base.');
      return $this->redirectToRoute('sitephys_physmvc_edition');
    } else {
      $physupdateLevel = $physupdate->getLevel();
      $physupdatelevelObjec = $levelRep->findPhysLevelIdContent($physupdateLevel);
      $physupdatelevelObject = $physupdatelevelObjec[0];
      $physupdatelevelId = $physupdatelevelObject["id"];
      $physupdatesymbolizationObject = $symbolizationRep->findBy(
        array (
          'levelkey' => $physupdatelevelId,
          ));
      $physupdatesymbolizationContent = [];
      foreach ($physupdatesymbolizationObject as $key => $symbol) {
        $physupdatesymbolizationContent[] = $symbol->getContent();
      }
    $physupdateTopicId = $physupdate->getTopicId();
    $physupdatetopicObject = $topicRep->find($physupdateTopicId);
    $physupdatetopicDomainId = $physupdatetopicObject->getDomainId();
    $physupdatedomainObject = $domainRep->find($physupdatetopicDomainId);

    $formPhysUpdate = new Physupdate();
    $formUpdateBuilder = $this->get('form.factory')->createBuilder(PhysupdateType::class, $formPhysUpdate);
    $formUpdateBuilder
      ->add('idphys',      HiddenType::class, array('data' => $id,))
      ->add('title',      TextType::class)
      ->add('username',      TextType::class, array('data' => $userconnect,))
      ->add('email',      EmailType::class, array('data' => $useremail,))
      ->add('date',      DateType::class)
      ->add('content',      TextareaType::class)
      ->add('evaluation',     TextareaType::class, array('required' => false))
      ->add('document',     FileType::class, array('required' => false))
      ->add('save',      SubmitType::class)
    ;
    $formPhysUpdate = $formUpdateBuilder->getForm();
    $formPhysUpdate->handleRequest($request);

    if ($formPhysUpdate->isSubmitted()) {
      if ($formPhysUpdate->isValid()) {
        $physupdateForm = $formPhysUpdate->getData();
        $em->persist($physupdateForm);
        $em->flush();
        return $this->redirectToRoute('sitephys_physmvc_edition');            
      }
    }

    return $this->render('SitephysPhysmvcBundle:Edit:update.html.twig', array(
      'userconnect' => $userconnect,
      'physupdate' => $physupdate,
      'physupdatelevel' => $physupdatelevelObject,
      'physupdatedomain' => $physupdatedomainObject,
      'physupdatetopic' => $physupdatetopicObject,
      'formphysupdate' => $formPhysUpdate->createView(),
      ));
    } 
  }


  public function viewupdAction($idphys)
  {
    $em = $this->getDoctrine()->getManager();
    $physupdRep = $em->getRepository('SitephysPhysmvcBundle:Physupdate'); 
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys');
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');

    $physupdObject = $physupdRep->findBy(
      array (
        'idphys' => $idphys,
        ));

    if (null === $physupdObject) {
      // throw new NotFoundHttpException('Aucun élément modifié dans la base.');
      return $this->redirectToRoute('sitephys_physmvc_edition');
    } else {
      $phys = $physRep->find($idphys); 
      if (null === $phys) {
        // throw new NotFoundHttpException('Elément "' . $idphys . '" pas dans la base.');
        return $this->redirectToRoute('sitephys_physmvc_edition');
      } else {
        $physLevel = $phys->getLevel();
        $physlevelObjec = $levelRep->findPhysLevelIdContent($physLevel);
        $physlevelObject = $physlevelObjec[0];
        $levelId = $physlevelObject["id"];
        $symbolizationObject = $symbolizationRep->findBy(
          array (
            'levelkey' => $levelId,
            ));
        $symbolizationContent = [];
        foreach ($symbolizationObject as $key => $symbol) {
          $symbolizationContent[] = $symbol->getContent();
        }

        $physTopicId = $phys->getTopicId();
        $topicObject = $topicRep->find($physTopicId);
        $topicDomainId = $topicObject->getDomainId();
        $domainObject = $domainRep->find($topicDomainId);

        $userconnectx = $this->getUser();
        if (null === $userconnectx) {
          $userconnect = 'Connexion';
        } else {
          $userconnect = $userconnectx->getUsername();
        }

        return $this->render('SitephysPhysmvcBundle:Edit:viewupd.html.twig', array(
          'userconnect' => $userconnect,
          'physupd' => $physupdObject,
          'phys' => $phys,
          'physlevel' => $physlevelObject,
          'domain' => $domainObject,
          'topic' => $topicObject,
          'symbol' => $symbolizationContent,
        ));
      }
    } 
  }


  public function viewaddAction($idadd)
  {
    $em = $this->getDoctrine()->getManager();
    $physaddRep = $em->getRepository('SitephysPhysmvcBundle:Physadd');

    $physadd = $physaddRep->find($idadd); 
    if (null === $physadd) {
      // throw new NotFoundHttpException('Domaine "' . $idadd . '" pas dans la base.');
      return $this->redirectToRoute('sitephys_physmvc_edition');
    } else {
      $userconnectx = $this->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userconnectx->getUsername();
      }

      return $this->render('SitephysPhysmvcBundle:Edit:viewadd.html.twig', array(
        'userconnect' => $userconnect,
        'physadd' => $physadd,
      ));
    } 
  }


  public function viewaddtopicAction($idaddtopic)
  {
    $em = $this->getDoctrine()->getManager();
    $physaddtopicRep = $em->getRepository('SitephysPhysmvcBundle:Physaddtopic');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');

    $physaddtopic = $physaddtopicRep->findobj($idaddtopic); 
    
    if (null === $physaddtopic) {
      // throw new NotFoundHttpException('Thème ' . $idaddtopic . ' pas dans la base.');
      return $this->redirectToRoute('sitephys_physmvc_edition');
    } else {
      $paddtopic = $physaddtopic[0];
      $idDom = $paddtopic->getDomainid();
      if (null === $idDom) {
        $domtopadded = 'Domaine non défini.';
        // throw new NotFoundHttpException('Domaine inconnu.');
        return $this->redirectToRoute('sitephys_physmvc_edition');
      } else {
        $domtopadd = $domainRep->findDomTitleById($idDom);
        if (null == $domtopadd) {
          $domtopadded = 'Domaine inconnu.';
          return $this->redirectToRoute('sitephys_physmvc_edition');
        } else {
          $domtopadded = $domtopadd[0];
        }
      }
    }
    
    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
    } else {
      $userconnect = $userconnectx->getUsername();
    }

    return $this->render('SitephysPhysmvcBundle:Edit:viewaddtopic.html.twig', array(
      'userconnect' => $userconnect,
      'physaddtopic' => $paddtopic,
      'domtopadded' => $domtopadded,
    ));
  }

}