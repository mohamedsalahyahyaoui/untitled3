<?php

namespace OC\PlatformBundle\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{

    public function indexAction($page)
    {
        if ($page < 1) {
            throw  new NotFoundHttpException("Page '".$page."' inexsitante");
        }
        $listAdverts = array(

            array(

                'title' => 'Recherche développpeur Symfony2',

                'id' => 1,

                'author' => 'Alexandre',

                'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',

                'date' => new Datetime(),
            ),

            array(

                'title' => 'Mission de webmaster',

                'id' => 2,

                'author' => 'Hugo',

                'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',

                'date' => new Datetime(),
            ),

            array(

                'title' => 'Offre de stage webdesigner',

                'id' => 3,

                'author' => 'Mathieu',

                'content' => 'Nous proposons un poste pour webdesigner. Blabla…',

                'date' => new Datetime(),
            ),

        );

        return $this->render(
            'OCPlatformBundle:Advert:index.html.twig',
            $listAdverts
        );
    }

    public function viewAction($id, Request $request)
    {
        $advert = array(

            'title' => 'Recherche développpeur Symfony2',

            'id' => $id,

            'author' => 'Alexandre',

            'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',

            'date' => new \Datetime(),

        );


        return $this->render(
            'OCPlatformBundle:Advert:view.html.twig',
            array(

                'advert' => $advert,

            )
        );
    }

    public function addAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistré');

            return $this->redirectToRoute('oc_platform_view', array('id' => 5));
        }

        return $this->render('OCPlatformBundle:Advert:add.html.twig');
    }

    public function deleteAction($id)
    {
        return $this->render('OCPlatformBundle:Advert:delete.html.twig');
    }

    public function editAction($id, Request $request)
    {
        $advert = array(

            'title' => 'Recherche développpeur Symfony2',

            'id' => $id,

            'author' => 'Alexandre',

            'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',

            'date' => new \Datetime(),

        );


        return $this->render(
            'OCPlatformBundle:Advert:edit.html.twig',
            array(

                'advert' => $advert,

            )
        );
    }

    public function menuAction()

    {
        $listAdverts = array(
            array('id' => 2, 'title' => 'Recherche développeur Symfony2'),
            array('id' => 5, 'title' => 'Mission de webmaster'),
            array('id' => 9, 'title' => 'Offre de stage webdesigner'),
        );

        return $this->render(
            'OCPlatformBundle:Advert:menu.html.twig',
            array('listAdverts' => $listAdverts)
        );

    }
}
