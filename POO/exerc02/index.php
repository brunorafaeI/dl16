<?php 
ini_set("display_errors", 1);

require_once('class/Rectangle.php');
require_once('class/Circle.php');


$rect = new Rectangle();
$circle = new Circle();

$rect->setWidth(2);
$rect->setHeight(4);


echo $rect->area();

var_dump($rect, $circle);