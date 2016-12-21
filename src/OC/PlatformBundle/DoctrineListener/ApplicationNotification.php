<?php
/**
 * Created by PhpStorm.
 * User: bigbear
 * Date: 21/12/16
 * Time: 11:26
 */

namespace OC\PlatformBundle\DoctrineListener;


use Doctrine\ORM\Event\LifecycleEventArgs;
use OC\PlatformBundle\Entity\Application;

class ApplicationNotification
{
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Application) {
            return;
        }

        $message = new \Swift_Message('Nouvelle Candidature', 'Vous avez une nouvelle candidature');

        $message->addTo($entity->getAdvert()->getAuthor());
        $message->addFrom("admin@mysite.com");

        $this->mailer->send($message);
    }

}