<?php

namespace OC\PlatformBundle\Controller;


use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\AdvertSkill;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class AdvertController extends Controller
{
    /*
     *
     * indexAction: index page generation
     */
    public function indexAction($page)
    {

        if ($page < 1) {
            throw  new NotFoundHttpException("Page '".$page."' inexsitante");
        }

        $em = $this->getDoctrine()->getManager();

        //$listAdverts = $em->getRepository("OCPlatformBundle:Advert")->findAll();
        //$listAdverts = $em->getRepository("OCPlatformBundle:Advert")->getAdvertWithApplicationsOnDate( new \DateTime('2017-01-01'));
        //$listAdverts = $em->getRepository("OCPlatformBundle:Application")->getAppsWithAdverts(20);
        $listAdverts = $em->getRepository("OCPlatformBundle:Advert")->getAdvertWithCategories(array("Integration"));

        // $listAdverts2 = $em->getRepository("OCPlatformBundle:Advert")->findById(1);
        return $this->render(
            "OCPlatformBundle:Advert:index.html.twig",
            array('listAdverts' => $listAdverts
                /*,'listAdverts2' => $listAdverts2*/)
        );
    }


    /*
     *
     * viewAction : Viewing an advert logic
     */

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $advert = $em->find("OCPlatformBundle:Advert", $id);

        if ($advert === null) {
            throw new NotFoundHttpException();
        }

        $apps = $em
            ->getRepository('OCPlatformBundle:Application')
            ->findBy(array("advert" => $advert));

        $skills = $em->getRepository("OCPlatformBundle:AdvertSkill")
            ->findBy(array("advert" => $advert));

        return $this->render(
            'OCPlatformBundle:Advert:view.html.twig',
            array(

                'advert' => $advert,
                'apps' => $apps,
                'skills' => $skills
            )
        );
    }


    /*
     *
     * addAction : Adding Logic
     */
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $advert = new Advert();

        $advert->setTitle('Recherching');
        $advert->setAuthor('Alexander');
        $advert->setContent('blablabla');


        $image = new Image();

        $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
        $image->setAlt('Job de rêve');

        $advert->setImage($image);

        $listSkills = $em->getRepository("OCPlatformBundle:Skill")->findAll();

        foreach ($listSkills as $skill)  {
            $advertSkill = new AdvertSkill();

            $advertSkill->setAdvert($advert);
            $advertSkill->setSkill($skill);
            $advertSkill->setLevel("Medium");

            $em->persist($advertSkill);
        }


        for ($i = 0; $i < 5; $i++) {
            $app = new Application();
            $app->setAuthor("Author N°".$i);
            $app->setContent("Content N°".$i);
            $app->setAdvert($advert);
            $em->persist($app);
        }


        $em->persist($advert);
        $em->flush();


        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistré');

            return $this->redirectToRoute('oc_platform_view', array('id' => 5));
        }

        return $this->render('OCPlatformBundle:Advert:add.html.twig');
    }


    /*
     *
     * deleteAction: deleting an advert logic
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $advert = $em->getRepository("OCPlatformBundle:Advert")
            ->find($id);
        if ($advert === null) {
            throw  new NotFoundHttpException();
        }


        foreach ($advert->getCategories() as $category) {
            $advert->removeCategory($category);
        }

        $em->flush();

        return $this->render('OCPlatformBundle:Advert:delete.html.twig');
    }


    /*
     * EditAction: Editing Logic
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $advert = $em->getRepository("OCPlatformBundle:Advert")
            ->find($id);
        if ($advert === null) {
            throw  new NotFoundHttpException();
        }

        $categories = $em->getRepository("OCPlatformBundle:Category")
            ->findAll();
        foreach ($categories as $category) {
            $advert->addCategory($category);
        }

        $em->flush();

        return $this->render(
            'OCPlatformBundle:Advert:edit.html.twig',
            array(

                'advert' => $advert,

            )
        );
    }

    /*
     *
     * menuAction: generating the navigation menu data
     */

    public function menuAction()

    {
        $listAdverts = array(
            array('id' => 2, 'title' => 'Recherche développeur Symfony2'),
            array('id' => 5, 'title' => 'Mission de webmaster'),
            array('id' => 1, 'title' => 'Offre de stage webdesigner'),
        );

        return $this->render(
            'OCPlatformBundle:Advert:menu.html.twig',
            array('listAdverts' => $listAdverts)
        );

    }


    public function testSlugAction()
    {

        //création d'un advert
        $advert = new Advert();
        $advert->setTitle('Recherche dev');
        $advert->setAuthor('me');
        $advert->setContent('we need a dev goddamnit');

        //persistance de l'advert
        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->flush();

        return new Response('Slug généré : '.$advert->getSlug());

    }
}
