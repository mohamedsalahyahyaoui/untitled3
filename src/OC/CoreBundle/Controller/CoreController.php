<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CoreController extends Controller
{


    public function indexAction()
    {
        return $this->render(
            'OCPlatformBundle:Advert:index.html.twig'
        );
    }
}
