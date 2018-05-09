<?php

function autoLoader($class){
    $class = str_replace('\\', '/', $class).'.php';
    if(file_exists($class)){
        require_once $class;
    }
}
spl_autoload_register('autoLoader');


$sergey = new Human("РФ", "Европеец");

echo $sergey->name = "Сергей";

$sergey->getAge(22);

print_r($sergey);
// СЕЙЧАС СДЕЛАЮ КОММИТ ИЗ ШТОРМА