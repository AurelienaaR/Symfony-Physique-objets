<?php

namespace Sitephys\PhysmvcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
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

    $topicAll = $topicRep->findAll();
    $domainAll = $domainRep->findAll();

      if (!$topicAll OR !$domainAll) {
        throw new NotFoundHttpException('Aucun thème dans la base.');
      } else {
        foreach ($domainAll as $ke => $physDom) {
          $physDomId = $physDom->getId();
          $physDomContent = $physDom->getContent();
          $tabDom[] = [$physDomId, $physDomContent];
          $physTopObject = $topicRep->findBy(
            array(
              'domainId' => $physDomId,
            ));
          foreach ($physTopObject as $key => $physTopi) {
            $idTopicElt = $physTopi->getId();
            $physTopiContent = $physTopi->getContent();
            $tabTopDomContent[$physDomId][] = [$idTopicElt, $physTopiContent];
          }
        }

        $lastTenTop = $topicRep->findBy(
          array(), 
          array('date' => 'desc'), 
          10, 
          0 
          );
        $idTenLastTop = [];
        $titleTop = [];
        foreach ($lastTenTop as $keyElt => $lastTTop) {
          $idtt = $lastTTop->getId();
          $idTenLastTop[] = $idtt;
          $titleTop[$idtt] = $lastTTop->getTitle();
        }

        $lastTwentyElt = $physRep->findBy(
          array(), 
          array('date' => 'desc'), 
          20, 
          0 
          );
        if (!$lastTwentyElt) {
          throw new NotFoundHttpException('Aucun élément dans la base.');
        } else {
          $idTwentyLastElt = [];
          $titleElt = [];
          foreach ($lastTwentyElt as $keyElt => $lastTElt) {
            $idtw = $lastTElt->getId();
            $idTwentyLastElt[] = $idtw;
            $titleElt[$idtw] = $lastTElt->getTitle();
          }

          return $this->render('SitephysPhysmvcBundle:Phys:home.html.twig', array(
            'tabdom' => $tabDom,
            'tabtopperdom' => $tabTopDomContent,
            'idtenlasttop' => $idTenLastTop,
            'titletop' => $titleTop,
            'idtwentylastelt' => $idTwentyLastElt,
            'titleelt' => $titleElt,
          )
        );
      }
    } 
  }


  public function hometopicAction($idTopic)
  {
    $em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys'); 
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');
    $listPhys = $physRep->findBy(
      array('topicId' => $idTopic), 
      array('date' => 'desc'), 
      10, 
      0 
      );

    if (!$listPhys) {
      throw new NotFoundHttpException('Aucun élément dans la base.');
    } else {
      $cpt = 0;
      $physTitle = [];
      $physLevelContent = [];
      $physDomainContent = [];
      $physAuthor = [];
      $physDate = [];
      $physTopicContent = [];
      $physContent = [];
      $topicTitle = $topicRep->find($idTopic)->getTitle();
      $tabBoolBase = [];
      for ($iBase=1; $iBase <= 6; $iBase++) {
        $tabBoolBase[$iBase] = false;
      }
      foreach ($listPhys as $phys) {
        $physTitle[$cpt] = $phys->getTitle();
        $physLevel = $phys->getLevel();
        $physLevelTab = unserialize($physLevel);
        $tabBoolBase[$physLevelTab[0]] = true;
        $levelObject = $levelRep->findBy(
          array (
            'levelBase' => $physLevelTab[0],
            'levelSub' => $physLevelTab[1],
            ));
        $levelContent[$cpt] = $levelObject[0]->getContent();
        $physTopicId = $phys->getTopicId();
        $physAuthor[$cpt] = $phys->getAuthor();
        $physDate[$cpt] = $phys->getDate();
        $physTopic = $topicRep->find($physTopicId);
        $physTopicContent[$cpt] = $physTopic->getContent();
        $physContent[$cpt] = $phys->getContent();
        $physDomainId = $physTopic->getDomainId();
        $physDomain = $domainRep->find($physDomainId);
        $physDomainContent[$cpt] = $physDomain->getContent();
        $cpt ++;
      }

      return $this->render('SitephysPhysmvcBundle:Phys:hometopic.html.twig', array(
        'idtop' => $idTopic,
        'toptitle' => $topicTitle,
        'physauthor' => $physAuthor,
        'physdate' => $physDate,
        'tabboolbase' => $tabBoolBase,
        'cptMax' => $cpt,
        'phystitle' => $physTitle,
        'doma' => $physDomain,
        'topi' => $physTopic,
        'levelcontent' => $levelContent,
        'physcontent' => $physContent,
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
    return $this->render('SitephysPhysmvcBundle:Phys:top.html.twig', array(
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

    for ($intBase=1; $intBase <= 3; $intBase++) { 
      for ($intSub=1; $intSub <= 3; $intSub++) {
        $bsLevel = $levelRep->findBy(
          array('levelBase' => $intBase, 'levelSub' => $intSub),
          array('id' => 'asc'),
          50,
          0
          );

        $bsLevelContent[$intBase][$intSub] = $bsLevel[0]->getContent();
        $levsym = $bsLevel[0]->getId();
        $symbolizationLevel = $symbolizationRep->findBy(
          array('levelkey' => $levsym), 
          array(),
          50,
          0
          );
        $bsSymbolContent[$intBase][$intSub] = $symbolizationLevel[0]->getContent();
      }
    }

    if (!$bsLevelContent) {
      throw new NotFoundHttpException('Base incomplète en niveaux ou en symbolisations.');
    } else {
      $dataLevel = array("Exp. in", "Theory", "Exp. out", "Return Exp. in", "Return Theory", "Return Exp. out");
      return $this->render('SitephysPhysmvcBundle:Phys:sym.html.twig', array(
        'bslevel' => $bsLevelContent,
        'bssymb' => $bsSymbolContent,
        'datalevel' => $dataLevel
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

        return $this->render('SitephysPhysmvcBundle:Phys:eval.html.twig', array(
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
        $physTopicId = $physg->getTopicId();
        $physTopic = $topicRep->find($physTopicId);
        $physTopicContent[$intEltLevelPos] = $physTopic->getContent();
        $physDomainId = $physTopic->getDomainId();
        $physDomain = $domainRep->find($physDomainId);
        $physDomainContent[$intEltLevelPos] = $physDomain->getContent();
      }
    }
      return $this->render('SitephysPhysmvcBundle:Phys:global.html.twig', array(
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
      $physTitle = $phys->getTitle();
      $physAuthor = $phys->getAuthor();
      $physDate = $phys->getDate();
      $physContent = $phys->getContent();
      $physEvaluation = $phys->getEvaluation();
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

      return $this->render('SitephysPhysmvcBundle:Phys:element.html.twig', array(
        'id' => $id,
        'idtop' => $physTopicId,
        'phystitle' => $physTitle,
        'physauthor' => $physAuthor,
        'physdate' => $physDate,
        'physcontent' => $physContent,
        'physlevel' => $physLevel,
        'physleveltab' => $physLevelTab,
        'intlevel' => $physLevelTab[0],
        'domaincontent' => $domainContent,
        'topiccontent' => $topicContent,
        'topicmode' => $topicMode,
        'levelcontent' => $levelContent,
        'symbolizationcontent' => $symbolizationContent,
        'physevaluation' => $physEvaluation,
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
        $physEvaluation = $phys->getEvaluation();
        $physTitle = $phys->getTitle();
        $physAuthor = $phys->getAuthor();
        $physDate = $phys->getDate();
        $physContent = $phys->getContent();
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

      return $this->render('SitephysPhysmvcBundle:Phys:element.html.twig', array(
        'id' => $physId,
        'idtop' => $idTopic,
        'intlevel' => $intLevel,
        'physauthor' => $physAuthor,
        'physdate' => $physDate,
        'phystitle' => $physTitle,
        'physlevel' => $physLevel,
        'physleveltab' => $physLevelTab,
        'physcontent' => $physContent,
        'domaincontent' => $physDomainContent,
        'topiccontent' => $physTopicContent,
        'topicmode' => $physTopicMode,
        'levelcontent' => $physLevelContent,
        'symbolizationcontent' => $symbolizationContent,
        'physevaluation' => $physEvaluation,
        ));
    } 


  public function homeeditAction()
  {
    $em = $this->getDoctrine()->getManager();
    $physAll = $em->getRepository('SitephysPhysmvcBundle:Phys')->findAll();
    $domainAll = $em->getRepository('SitephysPhysmvcBundle:Domain')->findAll();
    $levelAll = $em->getRepository('SitephysPhysmvcBundle:Level')->findAll();

    if (null === $physAll) {
      throw new NotFoundHttpException("L'élément d'id ".$id." n'est pas dans la base.");
    }
    $cptPhys = 0;
    $physId = [];
    $physEdit = [];
    foreach ($physAll as $key => $physPhys) {
        $physId[$cptPhys] = $physPhys->getId();
        $physEdit[$cptPhys] = $physPhys->getTitle();
        $cptPhys ++;
      }
    $cptPhys --;

    if (null === $domainAll) {
      throw new NotFoundHttpException("L'élément d'id ".$id." n'est pas dans la base.");
    }
    $cptDomain = 0;
    $domainId = [];
    $domainEdit = [];
    foreach ($domainAll as $key => $domainDomain) {
        $domainId[$cptDomain] = $domainDomain->getId();
        $domainEdit[$cptDomain] = $domainDomain->getTitle();
        $cptDomain ++;
      }
    $cptDomain --;

    if (null === $levelAll) {
      throw new NotFoundHttpException("L'élément d'id ".$id." n'est pas dans la base.");
    }
    $cptLevel = 0;
    $levelId = [];
    $levelEdit = [];
    foreach ($levelAll as $key => $levelLevel) {
        $levelId[$cptLevel] = $levelLevel->getId();
        $levBase = $levelLevel->getLevelBase();
        $levSub = $levelLevel->getLevelSub();
        $levelEdit[$cptLevel] = $levBase . " - " . $levSub;
        $cptLevel ++;
      }
    $cptLevel --;

    return $this->render('SitephysPhysmvcBundle:Phys:homeedit.html.twig', array(
      'physid' => $physId,
      'physedit' => $physEdit,
      'cptphys' => $cptPhys,
      'domainid' => $domainId,
      'domainedit' => $domainEdit,
      'cptdomain' => $cptDomain,
      'levelid' => $levelId,
      'leveledit' => $levelEdit,
      'cptlevel' => $cptLevel,
    ));
  }


  public function addAction($idthing)
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
      ->add('author',      EmailType::class)
      ->add('date',      DateType::class)
      ->add('content',      TextareaType::class)
      ->add('document',     FileType::class)
      ->add('weblink',     UrlType::class)
      ->add('save',      SubmitType::class)
        ;
    $formPhysAdd = $formAddBuilder->getForm();
     
    return $this->render('SitephysPhysmvcBundle:phys:add.html.twig', array(
      'thing' => $thing,
      'domainexist' => $titleDomain,
      'topicexist' => $titleTopic,
      'physexist' => $titlePhys,
      'formphysadd' => $formPhysAdd->createView(),
    ));
  }


  public function updateAction($id)
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
      $physupdateTitle = $physupdate->getTitle();
      $physupdateLevel = $physupdate->getLevel();
      $physupdateAuthor = $physupdate->getAuthor();
      $physupdateDate = $physupdate->getDate();
      $physupdateContent = $physupdate->getContent();
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
    $formPhysBuilderUpdate = $this->get('form.factory')->createBuilder(PhysupdateType::class, $formPhysUpdate);
    $formPhysBuilderUpdate
      ->add('author',      EmailType::class)
      ->add('date',      DateType::class)
      ->add('content',      TextareaType::class)
      ->add('evaluation',     TextareaType::class)
      ->add('document',     FileType::class)
      ->add('save',      SubmitType::class)
    ;
    $formPhysUpdate = $formPhysBuilderUpdate->getForm();

      return $this->render('SitephysPhysmvcBundle:Phys:update.html.twig', array(
        'id' => $id,
        'physupdate' => $physupdate,
        'physupdatetitle' => $physupdateTitle,
        'physupdatelevel' => $physupdateLevel,
        'physupdateleveltab' => $physupdateLevelTab,
        'physupdatelevelcontent' => $physupdatelevelContent,
        'physupdatedomain' => $physupdatedomainContent,
        'physupdatetopic' => $physupdatetopicContent,
        'formphysupdate' => $formPhysUpdate->createView(),
        ));
    } 
  }

}
