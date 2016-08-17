<?php 
ini_set("display_errors", 1);


require_once('classes/Student.php');
require_once('classes/Dog.php');

$student = new Student("Jhon", "Snow", 33);
$dog = new Dog("Medor", 5);


var_dump($student);



$student->eat();
$dog->eat();

echo Student::getNbStudent();