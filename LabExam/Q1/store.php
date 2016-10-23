<?php

include_once "calculator.php";


$cal = new calculator();

$cal->setData($_POST);

$cal->getData();

?>