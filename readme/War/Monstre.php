<?php
namespace War;
/**
 * Created by PhpStorm.
 * User: tiw
 * Date: 17/10/2016
 * Time: 10:09
 */
class Monstre extends Personnage
{



    public function __construct($nom, $atk, $vie)
    {
        parent::__construct($nom, $atk);
        $this->vie = $vie;
    }

}