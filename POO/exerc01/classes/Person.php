<?php 

Class Person {

	private $name;

	public function __construct($name){
		$this->setName($name);

	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function sayHello(){
		echo "Hello, my name is " . $this->name;
	}

	public function wave(Person $p){
		echo "-" . $this->name . " dit:  Bonjour, " . $p->getName()."!";
		$p->sayHello();
	}


	

}//fin de la classe.