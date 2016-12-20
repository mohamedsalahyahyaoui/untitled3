<?php
/**
 * Created by PhpStorm.
 * User: bigbear
 * Date: 16/11/16
 * Time: 22:39
 */

namespace OC\PlatformBundle\DataFixture\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Skill;

class LoadSkill implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $names = array('PHP', 'Symfony2', 'C++', 'Java', 'Photoshop', 'Blender', 'Bloc-note');

        foreach ($names as $name){
            $manager->persist((new Skill())->setName($name));
        }
        $manager->flush();
    }
}