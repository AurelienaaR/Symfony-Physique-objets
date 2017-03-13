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
use Doctrine\ORM\QueryBuilder;


class PhysController extends Controller
{

  public function homeAction(Request $request)
  {
  	$em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');

    $evolutionBy = ['Questions (dim > 1)','Questions (dim = 1)', 'Etats (dim = 0)', 'Solutions (dim = 1)', 'Solutions (dim > 1)'];
    $domId = $domainRep->findDomId();
    $domContent = $domainRep->findIdContentDomain();

    foreach ($evolutionBy as $keyType => $typeTop) {
      foreach ($domId as $kex => $domIdx) {
        $tabTopPerDom[$keyType][$domIdx["id"]] = $topicRep->findIdContentTopic($keyType, $domIdx["id"]);
      }
    }

    $lastTenTop = $topicRep->findIdTitleLastTopic();
    if (null == $lastTenTop) {
      return $this->redirectToRoute('sitephys_physmvc_home');
      // throw new NotFoundHttpException('Aucun thème dans la base.');
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
      )
    );
  }


  public function presentationAction()
  {
    $em = $this->getDoctrine()->getManager();
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');

    $presDomain = $domainRep->findAll();
    $presSymbol = $symbolizationRep->findAll();

    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
    } else {
      $userconnect = $userconnectx->getUsername();
    }

    return $this->render('SitephysPhysmvcBundle:Phys:presentation.html.twig', array(
      'userconnect' => $userconnect,
      'domain' => $presDomain,
      'symbol' => $presSymbol,
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

    if (null == $listPhys) {
      return $this->redirectToRoute('sitephys_physmvc_home');
      // throw new NotFoundHttpException('Aucun élément pour ce thème dans la base.');
    } else {
      $physTopic = $topicRep->find($idTopic);
      $domTopId = $physTopic->getDomainId();
      $physDomain = $domainRep->find($domTopId);
      $tabBoolBase = [];
      for ($iBase = 1; $iBase <= 6; $iBase++) {
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
    $referenceRep = $em->getRepository('SitephysPhysmvcBundle:Reference');

    $idDomObject = $domainRep->findDomIdTitle();

    foreach ($idDomObject as $key => $idD)
    {
      $idDo = $idD["id"];
      $listTopic[$idDo] = $topicRep->findBy(
          array(
            'domainId' => $idDo
          ));
    }

    $titleContRef = $referenceRep->findTitleContentRefDom();

    $userconnectx = $this->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else { 
        $userconnect = $userconnectx->getUsername();
      }

    return $this->render('SitephysPhysmvcBundle:Phys:top.html.twig', array(
      'userconnect' => $userconnect,
      'iddomobject' => $idDomObject,
      'listtopic' => $listTopic,
      'titlecontref' => $titleContRef,
      )
    );
  }


  public function symAction()
  {
    $em = $this->getDoctrine()->getManager();
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');
    $referenceRep = $em->getRepository('SitephysPhysmvcBundle:Reference');
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');

    for ($intBase = 1; $intBase <= 6; $intBase++) { 
      for ($intSub = 0; $intSub <= 6; $intSub++) {
        $bsLevel = $levelRep->findBy(
          array('levelBase' => $intBase, 'levelSub' => $intSub),
          array('id' => 'asc')
          );
        $bsLevelContent[$intBase][$intSub] = $bsLevel[0]->getContent();
        $levsym = $bsLevel[0]->getId();
        $symbolizationLevel = $symbolizationRep->findBy(
          array('levelkey' => $levsym)
          );
        if (null == $symbolizationLevel && $intBase <= 3) {
            $bsSymbolContent[$intBase][$intSub] = "aucune symbolisation";
        } else {
          if ($intBase <= 3) {
            $bsSymbolContent[$intBase][$intSub] = "";
            $symCpt = 0;
            foreach ($symbolizationLevel as $symbolizationLevelx) {
              $symCpt ++;
              $bsSymbolContent[$intBase][$intSub] .= 'Symbol' . $symCpt . ' : ' . $symbolizationLevelx->getContent() . '. ';
            }
          } else {
            $bsSymbolContent[$intBase][$intSub] = "Retour - " . $bsSymbolContent[$intBase - 3][$intSub];
          }
        }
      }
    }

    $titleRefDom = $referenceRep->findTitleContentRefDom();

    $dataLevel = array("Exp. in", "Theory", "Exp. out", "Return - Exp. in", "Return - Theory", "Return - Exp. out");

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
      'titlerefdom' => $titleRefDom,
      'datalevel' => $dataLevel,
    ));
  }


  public function evalAction($idTopic)
  {
    $em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys');
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');

    $topEvalObject = $topicRep->find($idTopic);
    if (null == $topEvalObject) {
      return $this->redirectToRoute('sitephys_physmvc_home');
      // throw new NotFoundHttpException('Base sans ce thème.');
    } else {
      $topTitle = $topEvalObject->getTitle();
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
        if (null != $eva) {
          $levEv = $physEv->getLevel();
          if (null != $levEv) {
            $levObj = $levelRep->findPhysLevelIdContent($levEv);
            $levObject = $levObj[0];
            $symObject = $symbolizationRep->findBy(
              array (
                'levelkey' => $levObject["id"]
              )
            );
            $levb = $levObject["levelBase"];
            $levs = $levObject["levelSub"];
            $tabSym[$levb][$levs] = $symObject[0]->getContent();
            $tabBool[$levb][$levs] = true;
            $tabEval[$levb][$levs] = $eva;
            $tabLevel[$levb][$levs] = $levObject["content"];
          }
        }
      }

        $dataEval = array("Exp. in", "Theory", "Exp. out", "Return Exp. in", "Return Theory", "Return Exp. out");

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


  public function globalAction($idTopic,$intLevel)
  {
    $em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys'); 
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');

    $tabBoolElt = [];
    $physGlobal = [];
    $symbolContent = [];

    $physGal = $levelRep->findBy(
      array('levelBase' => $intLevel, 'levelSub' => 0)
    );
    $physIniGlobal = $physGal[0];
    $physIniGlobalContent = $physIniGlobal->getContent();
    for ($iElt=1; $iElt <= 6; $iElt++) {
          $tabBoolElt[$iElt] = false;
        }
    for ($ielp = 1; $ielp <= 6; $ielp++) {
      $strLevel = 'a:2:{i:0;s:1:"' . $intLevel . '";i:1;s:1:"' . $ielp . '";}';
      $physGlobal = $physRep->findBy(
        array('topicId' => $idTopic, 'level' => $strLevel), 
        array('date' => 'asc'),        
        1,
        0
        ); 

      if (null != $physGlobal) {
        $tabBoolElt[$ielp] = true;
        $physg[$ielp] = $physGlobal[0];
        $physLevel = $physGlobal[0]->getLevel();
        $levelObject = $levelRep->findPhysLevelIdContent($physLevel);
        $levelId = $levelObject[0]["id"];
        $symbolizationObject = $symbolizationRep->findBy(
          array (
            'levelkey' => $levelId
            ));
        $symbolContent[$ielp] = "";
        foreach ($symbolizationObject as $key => $symbolx) {
          $symbolContent[$ielp] .= $symbolx->getContent();
          $symbolContent[$ielp] .= "  * ";
        }
      }
    }

    $physTopic = $topicRep->find($idTopic);
    $physDomainId = $physTopic->getDomainId();
    $physDomain = $domainRep->find($physDomainId);

    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
    } else {
      $userconnect = $userconnectx->getUsername();
    }

      return $this->render('SitephysPhysmvcBundle:Phys:global.html.twig', array(
        'userconnect' => $userconnect,
        'idtop' => $idTopic,
        'intlevel' => $intLevel,
        'physiniglobalcontent' => $physIniGlobalContent,
        'tabboolelt' => $tabBoolElt,
        'phys' => $physg,
        'domain' => $physDomain,
        'topic' => $physTopic,
        'symbol' => $symbolContent,
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
    $referenceRep = $em->getRepository('SitephysPhysmvcBundle:Reference');

    $phys = $physRep->find($id); 
    if (null === $phys) {
      throw new NotFoundHttpException('Elément "' . $id . '" pas dans la base.');
    } else {
      $physLevel = $phys->getLevel();
      $levelObjec = $levelRep->findPhysLevelIdContent($physLevel);
      $levelObject = $levelObjec[0];
      $levelId = $levelObject["id"];
      $symbolizationObject = $symbolizationRep->findBy(
        array (
          'levelkey' => $levelId,
          ));
      $symbolizationContent = [];
      foreach ($symbolizationObject as $key => $symboly) {
        $symbolizationContent[] = $symboly->getContent();
      }

      $physTopicId = $phys->getTopicId();
      $topicObject = $topicRep->find($physTopicId);
      $topicDomainId = $topicObject->getDomainId();
      $domainObject = $domainRep->find($topicDomainId);

      $domTopicId = $domainObject->getId();
      $titleContRef = $referenceRep->findTitleRefperDom($domTopicId);

      $userconnectx = $this->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userconnectx->getUsername();
      }

      return $this->render('SitephysPhysmvcBundle:Phys:element.html.twig', array(
        'userconnect' => $userconnect,
        'physelt' => $phys,
        'domain' => $domainObject,
        'topic' => $topicObject,
        'level' => $levelObject,
        'symcontent' => $symbolizationContent,
        'titlecontref' => $titleContRef,
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
    $referenceRep = $em->getRepository('SitephysPhysmvcBundle:Reference');

    $strLevel = 'a:2:{i:0;s:1:"' . $intLevel . '";i:1;s:1:"' . $intEltLevel . '";}';
    $physGlobal = $physRep->findBy(
      array('topicId' => $idTopic, 'level' => $strLevel), 
      array('date' => 'asc'),        
      1,
      0
      ); 

    if (null === $physGlobal) {
      return $this->redirectToRoute('sitephys_physmvc_home');
      // throw new NotFoundHttpException('Aucun élément pour le thème ' . $idTopic . ' et le niveau ' . $strLevel . '.');
    } else {
      $phys = $physGlobal[0];
      $physLevel = $phys->getLevel();
      $levelObjec = $levelRep->findPhysLevelIdContent($physLevel);
      $levelObject = $levelObjec[0];
      $levelId = $levelObject["id"];
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

      $domTopicId = $domainObject->getId();
      $titleContRef = $referenceRep->findTitleRefperDom($domTopicId);

      $userconnectx = $this->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userconnectx->getUsername();
      }
      return $this->render('SitephysPhysmvcBundle:Phys:element.html.twig', array(
        'userconnect' => $userconnect,
        'physelt' => $phys,
        'domain' => $domainObject,
        'topic' => $topicObject,
        'level' => $levelObject,
        'symcontent' => $symbolizationContent,
        'titlecontref' => $titleContRef,
        ));
    }
  }

}