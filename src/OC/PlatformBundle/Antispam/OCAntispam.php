<?php
/**
 * Created by PhpStorm.
 * User: bigbear
 * Date: 08/11/16
 * Time: 13:58
 */

namespace OC\PlatformBundle\Antispam;


class OCAntispam
{
    private $mailer;
    private $locale;
    private $minLength;

    /**
     * OCAntispam constructor.
     * @param $mailer
     * @param $locale
     * @param $minLength
     */
    public function __construct($mailer, $locale, $minLength)
    {
        $this->mailer = $mailer;
        $this->locale = $locale;
        $this->minLength = (int)$minLength;
    }


    public function isSpam($text){
        return strlen($text) < $this->minLength;
    }
}