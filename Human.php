<?php
/**
 * Created by PhpStorm.
 * User: Lizus
 * Date: 06.05.2018
 * Time: 13:51
 */

class Human
{

    public $country = "Страна";
    public $humanrace = "Раса";
    public function __construct($a, $b)
    {
        $this->country = $a;
        $this->humanrace = $b;
    }

    public $name = "";
    private $age;
    public function getAge($manage){
        $this->age = $manage;
    }

}
