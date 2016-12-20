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
    public function isSpam($text){
        return strlen($text) < 50;
    }
}