<?php
/**
 * Created by PhpStorm.
 * User: bigbear
 * Date: 16/11/16
 * Time: 12:21
 */

namespace OC\PlatformBundle\DataFixture\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Category;

class LoadCategory implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $names = array(
            'Dev Web',
            'Dev Mobile',
            'Graphic design',
            'Integration',
            'Réseau'
        );
        foreach ($names as $name){
            $category = new Category();
            $category->setName($name);
            $manager->persist($category);
        }
        $manager->flush();
    }
}