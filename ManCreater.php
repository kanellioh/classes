<?php

function autoLoader($class){
    $class = str_replace('\\', '/', $class).'.php';
    if(file_exists($class)){
        require_once $class;
    }
}
spl_autoload_register('autoLoader');

use Human;

$sergey = new Human();

$sergey->name = "Сергей";

$sergey->getAge(22);

