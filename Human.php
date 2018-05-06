<?php
/**
 * Created by PhpStorm.
 * User: Lizus
 * Date: 06.05.2018
 * Time: 13:51
 */

class Human
{
    public $name = "";
    private $age;
    private function getAge($manage){
        $this->age = $manage;
    }
}
