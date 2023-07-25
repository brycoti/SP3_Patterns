<?php
include "classTigger.php";

$tigre1 = Tigger::getInstance();
$tigre2 = Tigger::getInstance();
$tigre3 = Tigger::getInstance();

if (($tigre3 == $tigre1) && ($tigre1 == $tigre2) && ($tigre2 == $tigre3)){
    echo "Todos los tigres somos el mismo Singleton";
} else {
    echo "No somos el mismo Singleton";
}

$tigre1->roar();
$tigre2->roar();
$tigre3->roar();

$tigre1->getCounter();

?>