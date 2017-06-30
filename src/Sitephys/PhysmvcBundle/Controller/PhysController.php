<?php

namespace Sitephys\PhysmvcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class PhysController extends Controller
{

  public function homeAction(Request $request)
  {
  	$em = $this->getDoctrine()->getManager();
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');

    $evolutionBy = ['Questions (-dim > 1)','Questions (-dim = 1)', 'Etats (dim = 0)', 'Solutions (dim = 1)', 'Solutions (dim > 1)'];
    $evolutionsampleBy = ['Questions (simple)', 'Etats (simple)', 'Solutions (simple)'];
    $domId = $domainRep->findDomId();
    $domTitle = $domainRep->findIdTitleDomain();

    foreach ($evolutionBy as $keyType => $typeTop) {
      foreach ($domId as $kex => $domIdx) {
      	$tabDom = $topicRep->findIdTitleTopic($keyType, $domIdx["id"]);
      	$tabTopPerDom[$keyType][$domIdx["id"]] = $tabDom;
      }
    }

    foreach ($evolutionsampleBy as $keyTypesa => $typeTopsa) {
      foreach ($domId as $kexsa => $domIdxsa) {
      	$tabDomsa = $topicRep->findIdTitleTopic($keyTypesa + 5, $domIdxsa["id"]);
      	$tabTopPerDomSample[$keyTypesa][$domIdxsa["id"]] = $tabDomsa;
      }
    }

    $lastTenTop = $topicRep->findIdTitleModeLastTopic();
    if (null === $lastTenTop) {
      return $this->redirectToRoute('sitephys_physmvc_home');
    }

    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
    } else {
      $userconnect = $userconnectx->getUsername();
    }

    return $this->render('SitephysPhysmvcBundle:Phys:home.html.twig', array(
      'userconnect' => $userconnect,
      'domtitle' => $domTitle,
      'tabtopperdom' => $tabTopPerDom,
      'tabtopperdomsa' => $tabTopPerDomSample,
      'evol' => $evolutionBy,
      'evolsample' => $evolutionsampleBy,
      'lasttentop' => $lastTenTop,
      )
    );
  }


  public function presentationAction()
  {
    $em = $this->getDoctrine()->getManager();
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');

    $presDomain = $domainRep->findAll();

        $tabL[1] = array(1,4,5,6);
    	$tabL[2] = array(43,44,45);
    	$tabL[3] = array(49,50,51);
    	$tabL[4] = array(16,17,18,73);
    	$tabL[5] = array(46,47,48,74);
    	$tabL[6] = array(52,53,54,75);
    	for ($intLevp = 1; $intLevp <= 6; $intLevp++) {
    		$tabIL = $tabL[$intLevp];
    		$intLevpMod = $intLevp + ($intLevp > 3) * 69;
    		$levelObjec = $levelRep->find($intLevpMod);
    		$levelObject[$intLevp] = $levelObjec;
    		foreach ($tabIL as $idL) {
    			$symbolizationObject[$intLevp] = $symbolizationRep->findBy(
    				array (
    					'levelkey' => $idL,
    				));
    			foreach ($symbolizationObject[$intLevp] as $key => $symbol) {
    				$symbolizationContent[$intLevp][] = $symbol->getContent();
    			}
    		}
    	}

    $userconnectx = $this->getUser();
    if (null === $userconnectx) {
      $userconnect = 'Connexion';
    } else {
      $userconnect = $userconnectx->getUsername();
    }

    return $this->render('SitephysPhysmvcBundle:Phys:presentation.html.twig', array(
      'userconnect' => $userconnect,
      'domain' => $presDomain,
      'level' => $levelObject,
      'symcontent' => $symbolizationContent,
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

        $rto = "";
        $levsymMod = $levsym;
        if ($levsym > 54) {
          $rto = "Retour - ";
          if ($levsym > 54 && $levsym < 58) {
              $levsymMod = $levsym - 51;
          }
          if ($levsym > 57 && $levsym < 61) {
              $levsymMod = $levsym - 42;
          }
          if ($levsym > 60 && $levsym < 73) {
              $levsymMod = $levsym - 18;
          }
          if ($levsym > 72 && $levsym < 76) {
              $levsymMod = $levsym - 72;
          }
          $levsym = $levsymMod;
        }

        $symbolizationLevel = $symbolizationRep->findBy(
          array('levelkey' => $levsym)
          );
        if (null === $symbolizationLevel && $intBase <= 3) {
            $bsSymbolContent[$intBase][$intSub] = "aucune symbolisation";
        } else {
          $bsSymbolContent[$intBase][$intSub] = $rto;
          $symCpt = 0;
          foreach ($symbolizationLevel as $symbolizationLevelx) {
            $symCpt ++;
            $bsSymbolContent[$intBase][$intSub] .= 'Symbol' . $symCpt . ' : ' . $symbolizationLevelx->getContent() . '. ';
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
    if (null === $topEvalObject) {
      return $this->redirectToRoute('sitephys_physmvc_home');
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
        $eva = $physEv->getEvaluation();
        if (null !== $eva) {
          $levEv = $physEv->getLevel();
          if (null !== $levEv) {
            $levObj = $levelRep->findPhysLevelIdContent($levEv);
            $levObject = $levObj[0];
            $lesym = $levObject["id"];

        $rty = "";
        $lesymMod = $lesym;
        if ($lesym > 54) {
          $rty = "Retour - ";
          if ($lesym > 54 && $lesym < 58) {
              $lesymMod = $lesym - 51;
          }
          if ($lesym > 57 && $lesym < 61) {
              $lesymMod = $lesym - 42;
          }
          if ($lesym > 60 && $lesym < 73) {
              $lesymMod = $lesym - 18;
          }
          if ($lesym > 72 && $lesym < 76) {
              $lesymMod = $lesym - 72;
          }
          $lesym = $lesymMod;
        }

            $symObject = $symbolizationRep->findBy(
              array (
                'levelkey' => $lesym
              )
            );
            $levb = $levObject["levelBase"];
            $levs = $levObject["levelSub"];
            $tabSym[$levb][$levs] = $rty . $symObject[0]->getContent();
            $tabBool[$levb][$levs] = true;
            $tabEval[$levb][$levs] = $eva;
            $tabLevel[$levb][$levs] = $levObject["content"];
          }
        }
      }

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
        $rto = "";
        $levelIdMod = $levelId;
        if ($levelId > 54) {
          $rto = "Retour - ";
          if ($levelId > 54 && $levelId < 58) {
              $levelIdMod = $levelId - 51;
          }
          if ($levelId > 57 && $levelId < 61) {
              $levelIdMod = $levelId - 42;
          }
          if ($levelId > 60 && $levelId < 73) {
              $levelIdMod = $levelId - 18;
          }
          if ($levelId > 72 && $levelId < 76) {
              $levelIdMod = $levelId - 72;
          }
          $levelId = $levelIdMod;
        }
        $symbolizationObject = $symbolizationRep->findBy(
          array (
            'levelkey' => $levelId
            ));
        $symbolContent[$ielp] = $rto;
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
      return $this->redirectToRoute('sitephys_physmvc_home');
    } else {
      $physLevel = $phys->getLevel();
      $levelObjec = $levelRep->findPhysLevelIdContent($physLevel);
      $levelObject = $levelObjec[0];
      $levelId = $levelObject["id"];
      $rto = "";
      $levelIdMod = $levelId;
        if ($levelId > 54) {
          $rto = "Retour - ";
          if ($levelId > 54 && $levelId < 58) {
              $levelIdMod = $levelId - 51;
          }
          if ($levelId > 57 && $levelId < 61) {
              $levelIdMod = $levelId - 42;
          }
          if ($levelId > 60 && $levelId < 73) {
              $levelIdMod = $levelId - 18;
          }
          if ($levelId > 72 && $levelId < 76) {
              $levelIdMod = $levelId - 72;
          }
          $levelId = $levelIdMod;
        }
      $symbolizationObject = $symbolizationRep->findBy(
        array (
          'levelkey' => $levelId,
          ));
      $symbolizationContent = [];
      foreach ($symbolizationObject as $key => $symboly) {
        $symbolizationContent[] = $rto . $symboly->getContent();
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
    } else {
      $physe = $physGlobal[0];
      $physLevel = $physe->getLevel();
      $levelObjec = $levelRep->findPhysLevelIdContent($physLevel);
      $levelObject = $levelObjec[0];
      $lId = $levelObject["id"];
      $rtw = "";
      $lIdMod = $lId;
        if ($lId > 54) {
          $rtw = "Retour - ";
          if ($lId > 54 && $lId < 58) {
              $lIdMod = $lId - 51;
          }
          if ($lId > 57 && $lId < 61) {
              $lIdMod = $lId - 42;
          }
          if ($lId > 60 && $lId < 73) {
              $lIdMod = $lId - 18;
          }
          if ($lId > 72 && $lId < 76) {
              $lIdMod = $lId - 72;
          }
        }
      $symbolizationObject = $symbolizationRep->findBy(
        array (
          'levelkey' => $lIdMod,
          ));
      $symbolizationContent = [];
      foreach ($symbolizationObject as $key => $symbol) {
        $symbolizationContent[] = $rtw . $symbol->getContent();
      }
      $physTopicId = $physe->getTopicId();
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
        'physelt' => $physe,
        'domain' => $domainObject,
        'topic' => $topicObject,
        'level' => $levelObject,
        'symcontent' => $symbolizationContent,
        'titlecontref' => $titleContRef,
        ));
    }
  }


  public function sampleAction($idTopic)
  {
    $em = $this->getDoctrine()->getManager();
    $physRep = $em->getRepository('SitephysPhysmvcBundle:Phys'); 
    $levelRep = $em->getRepository('SitephysPhysmvcBundle:Level');
    $domainRep = $em->getRepository('SitephysPhysmvcBundle:Domain');
    $topicRep = $em->getRepository('SitephysPhysmvcBundle:Topic');
    $symbolizationRep = $em->getRepository('SitephysPhysmvcBundle:Symbolization');
    $referenceRep = $em->getRepository('SitephysPhysmvcBundle:Reference');

    // $physGlob = [];
    $topicObject = $topicRep->find($idTopic);
    $topicDomainId = $topicObject->getDomainId();
    $domainObject = $domainRep->find($topicDomainId);
    $domTopicId = $domainObject->getId();
    $titleContRef = $referenceRep->findTitleRefperDom($domTopicId);
    $indkey = [];

    for ($intLev = 1; $intLev <= 6; $intLev++) {
    	$tabBoolElt[$intLev] = false;
    	$strLevel = 'a:2:{i:0;s:1:"' . $intLev . '";i:1;s:1:"0";}';
    	$physsampleTop = $physRep->findBy(
    		array('topicId' => $idTopic, 'level' => $strLevel), 
    		array('date' => 'asc'),
    		1,
    		0
    		);
    	if (null != $physsampleTop) {
    		$physesa[$intLev] = $physsampleTop[0];
    		$tabBoolElt[$intLev] = true;
    		$indkey[] = $intLev;
    	}
    }

    if (null == $physesa) {
        return $this->redirectToRoute('sitephys_physmvc_home');
    } else {
    	$tabL[1] = array(1,4,5,6);
    	$tabL[2] = array(43,44,45);
    	$tabL[3] = array(49,50,51);
    	$tabL[4] = array(16,17,18,73);
    	$tabL[5] = array(46,47,48,74);
    	$tabL[6] = array(52,53,54,75);
    	for ($intLevsa = 1; $intLevsa <= 6; $intLevsa++) {
    		$tabIL = $tabL[$intLevsa];
    		if ($tabBoolElt[$intLevsa]) {
    			$intLevsaMod = $intLevsa + ($intLevsa > 3) * 69;
    			$levelObjec = $levelRep->find($intLevsaMod);
    			$levelObject[$intLevsa] = $levelObjec;
    			foreach ($tabIL as $idL) {
    				$symbolizationObject[$intLevsa] = $symbolizationRep->findBy(
    				array (
    					'levelkey' => $idL,
    					));
    			    foreach ($symbolizationObject[$intLevsa] as $key => $symbol) {
    				    $symbolizationContent[$intLevsa][] = $symbol->getContent();
    				}
    			}
    		}
    	}
    }

      $userconnectx = $this->getUser();
      if (null === $userconnectx) {
        $userconnect = 'Connexion';
      } else {
        $userconnect = $userconnectx->getUsername();
      }
      return $this->render('SitephysPhysmvcBundle:Phys:sample.html.twig', array(
        'userconnect' => $userconnect,
        'physelt' => $physesa,
        'indkey' => $indkey,
        'domain' => $domainObject,
        'topic' => $topicObject,
        'level' => $levelObject,
        'tabboolelt' => $tabBoolElt,
        'symcontent' => $symbolizationContent,
        'titlecontref' => $titleContRef,
      ));
    }


  public function linksAction()
  {
	  return $this->render('SitephysPhysmvcBundle:Phys:links.html.twig');
  }

  public function legalAction()
  {
    return $this->render('SitephysPhysmvcBundle:Phys:legal.html.twig');
  }

}
