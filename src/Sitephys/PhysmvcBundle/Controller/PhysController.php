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
use Sitephys\PhysmvcBundle\Entity\Physupdate;
use Sitephys\PhysmvcBundle\Entity\Physadd;
use Sitephys\PhysmvcBundle\Form\TopicType;
use Sitephys\PhysmvcBundle\Form\PhysType;
use Sitephys\PhysmvcBundle\Form\PhysupdateType;
use Sitephys\PhysmvcBundle\Form\PhysaddType;
use Doctrine\ORM\QueryBuilder;


class PhysController extends Controller
{

  public function homeAction()
  {
  	$em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');

    $evolutionBy = ['Questions (mode < -1)','Questions (mode = -1)', 'Etats (mode = 0)', 'Solutions (mode = 1)', 'Solutions (mode > 1)'];
    $domId = $domainRep->findDomId();
    $domContent = $domainRep->findIdContentDomain();

    foreach ($evolutionBy as $keyType => $typeTop) {
      foreach ($domId as $kex => $domIdx) {
        $tabTopPerDom[$keyType][$domIdx["id"]] = $topicRep->findIdContentTopic($keyType, $domIdx["id"]);
      }
    }

    $lastTenTop = $topicRep->findIdTitleLastTopic();
    if (!$lastTenTop) {
      throw new NotFoundHttpException('Aucun thème dans la base.');
    }

    $lastTwentyElt = $physRep->findIdTitleLastPhys();
    if (!$lastTwentyElt) {
      throw new NotFoundHttpException('Aucun élément dans la base.');
    }

    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
    } else {
      $userconnect = $userconnectx->getUsername();
    }

    return $this->render('SitephysPhysmvcBundle:Phys:home.html.twig', array(
      'userconnect' => $userconnect,
      'domcontent' => $domContent,
      'tabtopperdom' => $tabTopPerDom,
      'evol' => $evolutionBy,
      'lasttentop' => $lastTenTop,
      'lasttwentyelt' => $lastTwentyElt,
      )
    );
  }


  public function hometopicAction($idTopic)
  {
    $em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys'); 
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');
    
    $listPhys = $physRep->findBy(
      array('topicId' => $idTopic), 
      array('date' => 'desc') 
      );

    if (!$listPhys) {
      throw new NotFoundHttpException('Aucun élément dans la base.');
    } else {
      $physTopic = $topicRep->find($idTopic);
      $domTopId = $physTopic->getDomainId();
      $physDomain = $domainRep->find($domTopId);
      $tabBoolBase = [];
      for ($iBase=1; $iBase <= 6; $iBase++) {
        $tabBoolBase[$iBase] = false;
      }
      foreach ($listPhys as $phys) {
        $physId = $phys->getId();
        $physLevel = $phys->getLevel();
        $levelContentBase = $levelRep->findPhysLevelContent($physLevel)[0];
        $levelContent[$physId] = $levelContentBase['content'];
        $tabBoolBase[$levelContentBase['levelBase']] = true;
      }

      $userconnectx = $this->getUser();
        if (null === $userconnectx) {
          $userconnect = 'Connexion';
        } else {
          $userconnect = $userconnectx->getUsername();
        }

      return $this->render('SitephysPhysmvcBundle:Phys:hometopic.html.twig', array(
        'userconnect' => $userconnect,
        'idtop' => $idTopic,
        'listphys' => $listPhys,
        'doma' => $physDomain,
        'topi' => $physTopic,
        'levelcontent' => $levelContent,
        'tabboolbase' => $tabBoolBase,
        )
      );
    }
  } 


  public function topAction()
  {
    $em = $this->getDoctrine()->getManager();
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic'); 
    $domObject = $domainRep->findAll();
    foreach (range(1, count($domObject)) as $i)
    { 
      $topObject = $topicRep->findBy(
          array(
            'domainId' => $i
          ));

    if ($topObject) {
      foreach ($topObject as $key => $topObj) {
        $topicId[$i][] = $topObj;
      }
    }
  }
  $cptDom = 0;
  if (!$domObject) {
      throw new NotFoundHttpException('Aucun élément dans la base.');
    } else {
      foreach ($domObject as $ke => $domObj) {
        $domTitle[] = $domObj->getTitle();
        $cptDom ++;        
      }
    }

    $userconnectx = $this->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userconnectx->getUsername();
      }

    return $this->render('SitephysPhysmvcBundle:Phys:top.html.twig', array(
      'userconnect' => $userconnect,
      'listdomain' => $domTitle,
      'listtopic' => $topicId,
      'cptdom' => $cptDom,
      )
    );
  }


  public function symAction()
  {
    $em = $this->getDoctrine()->getManager();
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');

    for ($intBase = 1; $intBase <= 3; $intBase++) { 
      for ($intSub = 0; $intSub <= 3; $intSub++) {
        $bsLevel = $levelRep->findBy(
          array('levelBase' => $intBase, 'levelSub' => $intSub),
          array('id' => 'asc')
          );
        $bsLevelContent[$intBase][$intSub] = $bsLevel[0]->getContent();
        $levsym = $bsLevel[0]->getId();
        $symbolizationLevel = $symbolizationRep->findBy(
          array('levelkey' => $levsym)
          );
        $bsSymbolContent[$intBase][$intSub] = $symbolizationLevel[0]->getContent();
      }
    }

    if (!$bsLevelContent) {
      throw new NotFoundHttpException('Base incomplète en niveaux ou en symbolisations.');
    } else {
      $dataLevel = array("Exp. in", "Theory", "Exp. out", "Return Exp. in", "Return Theory", "Return Exp. out");

      $userconnectx = $this->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userconnectx->getUsername();
      }

      return $this->render('SitephysPhysmvcBundle:Phys:sym.html.twig', array(
        'userconnect' => $userconnect,
        'bslevel' => $bsLevelContent,
        'bssymb' => $bsSymbolContent,
        'datalevel' => $dataLevel,
        ));
    } 
  }


  public function evalAction($idTopic)
  {
    $em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys');
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');

    $topEvalObject = $topicRep->find($idTopic);
    if (!$topEvalObject) {
      throw new NotFoundHttpException('Base sans ce thème.');
    } else {
      $topTitle = $topEvalObject->getTitle();
      $cptEval = 0;
      for ($ibool=1; $ibool <= 6 ; $ibool++) { 
        for ($jbool=1; $jbool <= 6 ; $jbool++) { 
          $tabBool[$ibool][$jbool] = false;
        }
      }
      $physEval = $physRep->findBy(
        array(
          'topicId' => $idTopic
        ) 
      );

      foreach ($physEval as $keyEv => $physEv) {
        $idEval = $physEv->getId();
        $eva = $physEv->getEvaluation();
        if ($eva) {
          $levEv = $physEv->getLevel();
          if ($levEv) {
            $levTab = unserialize($levEv);
            $levb = $levTab[0];
            $levs = $levTab[1];
            $levObject = $levelRep->findBy(
              array (
                'levelBase' => $levb,
                'levelSub' => $levs,
              )
            );
            $levContent = $levObject[0]->getContent();
            $levId = $levObject[0]->getId();
            $symObject = $symbolizationRep->findBy(
              array (
                'levelkey' => $levId
              )
            );
            $tabSym[$levb][$levs] = $symObject[0]->getContent();
            $tabBool[$levb][$levs] = true;
            $tabEval[$levb][$levs] = $eva;
            $tabLevel[$levb][$levs] = $levContent;
            $cptEval ++;
          }
        }
      }

      if ($cptEval == 0) {
        throw new NotFoundHttpException('Base sans évaluation.');
      } else {
        $dataEval = array("Exp. in", "Theory", "Exp. out", "Return Exp. in", "Return Theory", "Return Exp. out");
        $cptEval --;

        $userconnectx = $this->getUser();
        if (null === $userconnectx) {
          $userconnect = 'Connexion';
        } else {
          $userconnect = $userconnectx->getUsername();
        }

        return $this->render('SitephysPhysmvcBundle:Phys:eval.html.twig', array(
          'userconnect' => $userconnect,
          'toptitle' => $topTitle,
          'tabbool' => $tabBool,
          'tablevel' => $tabLevel,
          'tabsym' => $tabSym,
          'tabeval' => $tabEval,
          ));
      }
    } 
  }


  public function globalAction($idTopic,$intLevel)
  {
    $em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys'); 
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');

    $keyElt = false;
    $tabBoolElt = [];
    $physGlobal = [];
    $physLevelTab = [];
    $physSymbolizationContent = [];
    $physTopicContent = [];
    $physDomainContent = [];
    $topicTitle = $topicRep->find($idTopic)->getTitle();

    $physGal = $levelRep->findBy(
      array(
        'levelBase' => $intLevel, 
        'levelSub' => 0,
        ));
    $physIniGlobal = $physGal[0];
    $physIniGlobalContent = $physIniGlobal->getContent();
    for ($iElt=1; $iElt <= 6; $iElt++) {
          $tabBoolElt[$iElt] = false;
        }
    for ($intEltLevelPos = 1; $intEltLevelPos <= 6; $intEltLevelPos++) {
      $strLevel = 'a:2:{i:0;s:1:"' . $intLevel . '";i:1;s:1:"' . $intEltLevelPos . '";}';
      $physGlobal = $physRep->findBy(
        array('topicId' => $idTopic, 'level' => $strLevel), 
        array('date' => 'asc'),        
        1,
        0
        ); 
      if ($physGlobal) {
        // throw new NotFoundHttpException('Aucun élément pour le thème ' . $idTopic . ' et le premier niveau ' . $intLevel . '.');
        $keyElt = true;
        $tabBoolElt[$intEltLevelPos] = true;
        $physg = $physGlobal[0];
        $physTitle[$intEltLevelPos] = $physg->getTitle(); 
        $physContent[$intEltLevelPos] = $physg->getContent(); 
        $physEvaluation[$intEltLevelPos] = $physg->getEvaluation();
        $physLevel = $physg->getLevel();
        $physLevelT = unserialize($physLevel);
        $physLevelTab[$intEltLevelPos] = $physLevelT;
        $levelObject = $levelRep->findBy(
          array (
            'levelBase' => $physLevelT[0],
            'levelSub' => $physLevelT[1],
            ));
        $levelContent[$intEltLevelPos] = $levelObject[0]->getContent();
        $levelId = $levelObject[0]->getId();
        $symbolizationObject = $symbolizationRep->findBy(
          array (
            'levelkey' => $levelId
            ));
        $symbolizationContent[$intEltLevelPos] = "";
        foreach ($symbolizationObject as $key => $symbol) {
          $symbolizationContent[$intEltLevelPos] .= $symbol->getContent();
        }
      }
    }

    $physTopicId = $idTopic; // $physg->getTopicId();
    $physTopic = $topicRep->find($physTopicId);
    $physTopicContent = $physTopic->getContent();
    $physTopicMode = $physTopic->getMode();
    $physDomainId = $physTopic->getDomainId();
    $physDomain = $domainRep->find($physDomainId);
    $physDomainContent = $physDomain->getContent();

    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
    } else {
      $userconnect = $userconnectx->getUsername();
    }

      return $this->render('SitephysPhysmvcBundle:Phys:global.html.twig', array(
        'userconnect' => $userconnect,
        'idtop' => $idTopic,
        'toptitle' => $topicTitle,
        'intlevel' => $intLevel,
        'physiniglobalcontent' => $physIniGlobalContent,
        'tabboolelt' => $tabBoolElt,
        'phystitle' => $physTitle,
        'physleveltab' => $physLevelTab,
        'physcontent' => $physContent,
        'physevaluation' => $physEvaluation,
        'domaincontent' => $physDomainContent,
        'topiccontent' => $physTopicContent,
        'topicmode' => $physTopicMode,
        'levelcontent' => $levelContent,
        'symbolizationcontent' => $symbolizationContent,
        ));
    }


  public function viewAction($id)
  {
    $em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys'); 
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');

    $phys = $physRep->find($id); 
    if (!$phys) {
      throw new NotFoundHttpException('Elément "' . $id . '" pas dans la base.');
    } else {
      $physLevel = $phys->getLevel();
      $physLevelTab = unserialize($physLevel);
      $levelObject = $levelRep->findBy(
        array (
          'levelBase' => $physLevelTab[0],
          'levelSub' => $physLevelTab[1],
          ));
      $levelContent = $levelObject[0]->getContent();
      $levelId = $levelObject[0]->getId();
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
      $topicContent = $topicObject->getContent();
      $topicMode = $topicObject->getMode();
      $topicDomainId = $topicObject->getDomainId();
      $domainObject = $domainRep->find($topicDomainId);
      $domainContent = $domainObject->getContent();

      $userconnectx = $this->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userconnectx->getUsername();
      }

      return $this->render('SitephysPhysmvcBundle:Phys:element.html.twig', array(
        'userconnect' => $userconnect,
        'id' => $id,
        'idtop' => $physTopicId,
        'physelt' => $phys,
        'physlevel' => $physLevel,
        'physleveltab' => $physLevelTab,
        'intlevel' => $physLevelTab[0],
        'domaincontent' => $domainContent,
        'topiccontent' => $topicContent,
        'topicmode' => $topicMode,
        'levelcontent' => $levelContent,
        'symbolizationcontent' => $symbolizationContent,
        ));
    } 
  }


  public function elementAction($idTopic,$intLevel,$intEltLevel)
  {
    $em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys'); 
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');

    $strLevel = 'a:2:{i:0;s:1:"' . $intLevel . '";i:1;s:1:"' . $intEltLevel . '";}';
    $physGlobal = $physRep->findBy(
      array('topicId' => $idTopic, 'level' => $strLevel), 
      array('date' => 'asc'),        
      1,
      0
      ); 

    if (!$physGlobal) {
      throw new NotFoundHttpException('Aucun élément pour le thème ' . $idTopic . ' et le niveau ' . $strLevel . '.');

    } else {

        $phys = $physGlobal[0];
        $physId = $phys->getId();
        $physLevel = $strLevel;
        $physLevelTab = unserialize($physLevel);
        $physLevelObject = $levelRep->findBy(
          array (
            'levelBase' => $intLevel,
            'levelSub' => $intEltLevel,
            ));
        $physLevelContent = $physLevelObject[0]->getContent();
        $levelId = $physLevelObject[0]->getId();
        $symbolizationObject = $symbolizationRep->findBy(
          array (
            'levelkey' => $levelId,
            ));
        foreach ($symbolizationObject as $key => $symbol) {
          $symbolizationContent[] = $symbol->getContent();
        }
        $physTopicId = $idTopic;
        $physTopic = $topicRep->find($physTopicId);
        $physTopicContent = $physTopic->getContent();
        $physTopicMode = $physTopic->getMode();
        $physDomainId = $physTopic->getDomainId();
        $physDomain = $domainRep->find($physDomainId);
        $physDomainContent = $physDomain->getContent();
      }

      $userconnectx = $this->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userconnectx->getUsername();
      }

      return $this->render('SitephysPhysmvcBundle:Phys:element.html.twig', array(
        'userconnect' => $userconnect,
        'id' => $physId,
        'idtop' => $idTopic,
        'intlevel' => $intLevel,
        'physelt' => $phys,
        'physlevel' => $physLevel,
        'physleveltab' => $physLevelTab,
        'domaincontent' => $physDomainContent,
        'topiccontent' => $physTopicContent,
        'topicmode' => $physTopicMode,
        'levelcontent' => $physLevelContent,
        'symbolizationcontent' => $symbolizationContent,
        ));
    }


  public function homeeditAction()
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

    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
    } else {
      $userconnect = $userconnectx->getUsername();
    }

    return $this->render('SitephysPhysmvcBundle:Phys:homeedit.html.twig', array(
      'userconnect' => $userconnect,
      'physphyss' => $physPhyss,
      'physupphys' => $physUpPhys,
      'physlevels' => $physLevels,
      'physdomains' => $physDomains,
      'physphysadds' => $physPhysadds,
    ));
  }


  public function addAction($idthing, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys'); 
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');

    $titleDomain = [];
    $titleTopic = [];
    $titlePhys = [];

    switch ($idthing) {

      case 'domain':
        $domainExistObject = $domainRep->findAll();
        foreach ($domainExistObject as $key => $domainExist) {
          $titleDomain[] = $domainExist->getTitle();
        }
        $thing = "domaine";
        break;

      case 'topic':
        $topicExistObject = $topicRep->findAll();
        foreach ($topicExistObject as $key => $topicExist) {
          $titleTopic[] = $topicExist->getTitle();
        }
        $thing = "thème";
        break;

      case 'element':
        $physExistObject = $physRep->findAll();
        foreach ($physExistObject as $key => $physExist) {
          $titlePhys[] = $physExist->getTitle();
        }
        $thing = "élément";
        break;

      default:
        break;

    }

    $physAdd = new Physadd();
    $formAddBuilder = $this->get('form.factory')->createBuilder(PhysaddType::class, $physAdd);
    $formAddBuilder
      ->add('thing',   HiddenType::class, array('data' => $idthing,))
      ->add('title',      TextType::class)
      ->add('author',      EmailType::class)
      ->add('date',      DateType::class)
      ->add('content',      TextareaType::class)
      ->add('document',     FileType::class, array('required' => false))
      ->add('weblink',     UrlType::class, array('required' => false))
      ->add('save',      SubmitType::class)
        ;
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

    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
    } else {
      $userconnect = $userconnectx->getUsername();
    }
 
    return $this->render('SitephysPhysmvcBundle:Phys:add.html.twig', array(
      'userconnect' => $userconnect,
      'thing' => $thing,
      'domainexist' => $titleDomain,
      'topicexist' => $titleTopic,
      'physexist' => $titlePhys,
      'formphysadd' => $formPhysAdd->createView(),
    ));
  }


  public function updateAction($id, Request $request)
  {
  	$em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys');
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');

    $physupdate = $physRep->find($id);
    if (!$physupdate) {
      throw new NotFoundHttpException('Elément "' . $id . '" pas dans la base.');
    } else {
      $physupdateLevel = $physupdate->getLevel();
      $physupdateLevelTab = unserialize($physupdateLevel);
      $physupdatelevelObject = $levelRep->findBy(
        array (
          'levelBase' => $physupdateLevelTab[0],
          'levelSub' => $physupdateLevelTab[1],
          ));
      $physupdatelevelContent = $physupdatelevelObject[0]->getContent();
      $physupdatelevelId = $physupdatelevelObject[0]->getId();
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
      $physupdatetopicContent = $physupdatetopicObject->getContent();
      $physupdatetopicDomainId = $physupdatetopicObject->getDomainId();
      $physupdatedomainObject = $domainRep->find($physupdatetopicDomainId);
      $physupdatedomainContent = $physupdatedomainObject->getContent();
      $photo = "photoTopic";

    $formPhysUpdate = new Physupdate();
    $formUpdateBuilder = $this->get('form.factory')->createBuilder(PhysupdateType::class, $formPhysUpdate);
    $formUpdateBuilder
      ->add('idphys',      HiddenType::class, array('data' => $id,))
      ->add('title',      TextType::class)
      ->add('author',      EmailType::class)
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

    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
    } else {
      $userconnect = $userconnectx->getUsername();
    }

    return $this->render('SitephysPhysmvcBundle:Phys:update.html.twig', array(
      'userconnect' => $userconnect,
      'id' => $id,
      'physupdate' => $physupdate,
      'physupdatelevel' => $physupdateLevel,
      'physupdateleveltab' => $physupdateLevelTab,
      'physupdatelevelcontent' => $physupdatelevelContent,
      'physupdatedomain' => $physupdatedomainContent,
      'physupdatetopic' => $physupdatetopicContent,
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

    if (!$physupdObject) {
      throw new NotFoundHttpException('Aucun élément modifié dans la base.');
    } else {

      $phys = $physRep->find($idphys); 
      if (!$phys) {
        throw new NotFoundHttpException('Elément "' . $idphys . '" pas dans la base.');
      } else {
        $physLevel = $phys->getLevel();
        $physLevelTab = unserialize($physLevel);
        $levelObject = $levelRep->findBy(
          array (
            'levelBase' => $physLevelTab[0],
            'levelSub' => $physLevelTab[1],
            ));
        $levelContent = $levelObject[0]->getContent();
        $levelId = $levelObject[0]->getId();
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
        $topicContent = $topicObject->getContent();
        $topicMode = $topicObject->getMode();
        $topicDomainId = $topicObject->getDomainId();
        $domainObject = $domainRep->find($topicDomainId);
        $domainContent = $domainObject->getContent();

        $userconnectx = $this->getUser();
        if (null === $userconnectx) {
          $userconnect = 'Connexion';
        } else {
          $userconnect = $userconnectx->getUsername();
        }

        return $this->render('SitephysPhysmvcBundle:Phys:viewupd.html.twig', array(
          'userconnect' => $userconnect,
          'physupd' => $physupdObject,
          'phys' => $phys,
          'physlevel' => $physLevel,
          'physleveltab' => $physLevelTab,
          'intlevel' => $physLevelTab[0],
          'domaincontent' => $domainContent,
          'topiccontent' => $topicContent,
          'topicmode' => $topicMode,
          'levelcontent' => $levelContent,
          'symbolizationcontent' => $symbolizationContent,
        ));
      }
    } 
  }


  public function viewaddAction($idadd)
  {
    $em = $this->getDoctrine()->getManager();
    $physaddRep = $em->getRepository('SitephysPhysmvcBundle:Physadd');

    $physadd = $physaddRep->find($idadd); 
    if (!$physadd) {
      throw new NotFoundHttpException('Elément "' . $idadd . '" pas dans la base.');
    } else {
      $userconnectx = $this->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userconnectx->getUsername();
      }

      return $this->render('SitephysPhysmvcBundle:Phys:viewadd.html.twig', array(
        'userconnect' => $userconnect,
        'physadd' => $physadd,
      ));
    } 
  }

}