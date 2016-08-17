<?php 
require_once("Person.php");

Class Professor extends Person{

	private $salary = 0;

	public function __construct($name, $salary){
		parent::__construct($name);
		$this->salary = $salary;
	}

	public function sayHello(){
		echo	parent::sayHello() . ', et mon salaire est de: ' . $this->salary. '€';
	}
}//fin de la classe.

