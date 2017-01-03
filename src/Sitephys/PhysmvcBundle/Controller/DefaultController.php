<?php

namespace Sitephys\PhysmvcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SitephysPhysmvcBundle:Default:index.html.twig');
    }
}
