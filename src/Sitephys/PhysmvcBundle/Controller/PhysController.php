<?php

namespace Sitephys\PhysmvcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
use Doctrine\ORM\EntityRepository;
use Sitephys\PhysmvcBundle\Entity\Phys;
use Sitephys\PhysmvcBundle\Entity\Domain;
use Sitephys\PhysmvcBundle\Entity\Topic;
use Sitephys\PhysmvcBundle\Entity\Level;
use Sitephys\PhysmvcBundle\Entity\Symbolization;
use Sitephys\PhysmvcBundle\Form\PhysType;
use Doctrine\ORM\QueryBuilder;


class PhysController extends Controller
{

  public function homeAction(Request $request)
  {
  	$em = $this->getDoctrine()->getManager();
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');

    $topicAll = $topicRep->findAll();
    $domainAll = $domainRep->findAll();

      if (!$topicAll OR !$domainAll) {
      throw new NotFoundHttpException('Aucun élément dans la base.');
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
      return $this->render('SitephysPhysmvcBundle:Phys:home.html.twig', array(
        'tabdom' => $tabDom,
        'tabtopperdom' => $tabTopDomContent,
        )
      );
    } 
  }


  public function hometopicAction($idTopic,Request $request)
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


  public function topAction(Request $request)
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


  public function symAction(Request $request)
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
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');

    $cptEval = 0;
    for ($ibool=1; $ibool <= 6 ; $ibool++) { 
    	for ($jbool=1; $jbool <= 6 ; $jbool++) { 
    		$tabBool[$ibool][$jbool] = false;
    	}
    }
    $physEval = $physRep->findBy(
    	array('topicId' => $idTopic), 
        array(),
        50,
        0
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
    					));
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
        'tabbool' => $tabBool,
        'tablevel' => $tabLevel,
        'tabsym' => $tabSym,
        'tabeval' => $tabEval,
        ));
    } 
  }


  public function viewAction($id,Request $request)
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
      $topicDomainId = $topicObject->getDomainId();
      $domainObject = $domainRep->find($topicDomainId);
      $domainContent = $domainObject->getContent();
      $photo = "photoTopic";

      return $this->render('SitephysPhysmvcBundle:Phys:view.html.twig', array(
        'id' => $id,
        'phystitle' => $physTitle,
        'physauthor' => $physAuthor,
        'physdate' => $physDate,
        'physcontent' => $physContent,
        'physlevel' => $physLevel,
        'physleveltab' => $physLevelTab,
        'domaincontent' => $domainContent,
        'topiccontent' => $topicContent,
        'levelcontent' => $levelContent,
        'symbolizationcontent' => $symbolizationContent,
        'photo' => $photo,
        ));
    } 
  }


  public function globalAction($idTopic,$intLevel,Request $request)
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


  public function elementAction($idTopic,$intLevel,$intEltLevel,Request $request)
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
        $physEvaluation = $phys->getEvaluation();
        $physTitle = $phys->getTitle();
        $physAuthor = $phys->getAuthor();
        $physDate = $phys->getDate();
        $physDate = $phys->getDate();
        $physContent = $phys->getContent();
        $physLevel = $phys->getLevel();
        $physLevelTab = unserialize($physLevel);
        $physLevelObject = $levelRep->findBy(
          array (
            'levelBase' => $physLevelTab[0],
            'levelSub' => $physLevelTab[1],
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
        $physTopicId = $phys->getTopicId();
        $physTopic = $topicRep->find($physTopicId);
        $physTopicContent = $physTopic->getContent();
        $physDomainId = $physTopic->getDomainId();
        $physDomain = $domainRep->find($physDomainId);
        $physDomainContent = $physDomain->getContent();
      }

      return $this->render('SitephysPhysmvcBundle:Phys:element.html.twig', array(
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
        'levelcontent' => $physLevelContent,
        'symbolizationcontent' => $symbolizationContent,
        'physevaluation' => $physEvaluation,
        ));
    } 


  public function addAction(Request $request)
  {
    $phys = new Phys();

    $formBuilder = $this->get('form.factory')->createBuilder(PhysType::class, $phys);

    $formBuilder
      ->add('topic_id',      IntegerType::class)
      ->add('level',      TextType::class)
      ->add('title',      TextType::class)
      ->add('author',      EmailType::class)
      ->add('date',      DateType::class)
      ->add('content',      TextareaType::class)
      ->add('evaluation',     TextareaType::class)
      ->add('document',     FileType::class)
      ->add('updated_at',   DateType::class)
      ->add('web_links', UrlType::class)
      ->add('save',      SubmitType::class)
    ;

    $form = $formBuilder->getForm();

    return $this->render('SitephysPhysmvcBundle:phys:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }


  public function insertAction(Request $request)
  {
    $phys = new Phys();
    $form   = $this->get('form.factory')->create(PhysType::class, $phys);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($phys);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Elément inséré.');

      return $this->redirectToRoute('sitephys_physmvc_edition');
    }

    return $this->render('SitephysPhysmvcBundle:Phys:insert.html.twig', array(
      'form' => $form->createView(),
    ));
  }


  public function updateAction($id, Request $request)
  {
  	$em = $this->getDoctrine()->getManager();
    $physupdate = $em->getRepository('SitephysPhysmvcBundle:Phys')->find($id);

    if (!$physupdate) {
      throw new NotFoundHttpException('Elément "' . $id . '" pas dans la base.');
    } else {
          $physupdateTitle = $physupdate->getTitle();
          $physupdateLevel = $physupdate->getLevel();
          $physupdateLevelTab = unserialize($physupdateLevel);
      $formupdate = $this->get('form.factory')->create(PhysType::class, $physupdate);
        if ($request->isMethod('POST') && $formupdate->handleRequest($request)->isValid()) {
          $em->persist($physupdate);
          $em->flush();
          
          $request->getSession()->getFlashBag()->add('notice', 'Elément modifié.');
          return $this->redirectToRoute('sitephys_physmvc_edition');
        }

      return $this->render('SitephysPhysmvcBundle:Phys:update.html.twig', array(
        'id' => $id,
        'physupdate' => $physupdate,
        'physupdatetitle' => $physupdateTitle,
        'physupdatelevel' => $physupdateLevel,
        'physupdateleveltab' => $physupdateLevelTab,
        ));
    } 
  }


  public function homeeditAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $physAll = $em->getRepository('SitephysPhysmvcBundle:Phys')->findAll();

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
    return $this->render('SitephysPhysmvcBundle:Phys:homeedit.html.twig', array(
      'physid' => $physId,
      'physedit' => $physEdit,
      'cptedit' => $cptPhys,
    ));
  }

}
