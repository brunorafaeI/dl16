<?php 
ini_set("display_errors", 1);


require_once("classes/Student.php");
require_once("classes/Professor.php");

$student = new Student("Xavier");
$prof = new Professor("Paul", 1200);
$alice = new Person("Alice");

$alice->sayHello();
echo "<br/>";
$prof->sayHello();

echo "<br/>";
$prof->wave($student);


// var_dump($prof, $student);

