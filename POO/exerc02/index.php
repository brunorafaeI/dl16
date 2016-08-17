<?php 
ini_set("display_errors", 1);

require_once('class/Rectangle.php');
require_once('class/Circle.php');


$rect = new Rectangle();
$circle = new Circle();

$rect->setWidth(2);
$rect->setHeight(4);

$circle->setRadius(1);

echo "L'aire d'un rectangle est de: " .$rect->area()."<br/>";
echo "Le perimetre du rectangle est de: " .$rect->perimeter()."<br/>";


echo "L'aire d'un circle est de: " .$circle->area()."<br/>";
echo "Le perimetre du circle est de: " .$circle->perimeter()."<br/>";

// var_dump($rect, $circle);