<?php 

Abstract Class Mammal {

	private $firstname;
	private $age;

	public function __construct($firstname, $age = null){
		$this->setFirstname($firstname);		
		$this->setAge($age);
	}

	public function eat(){
		echo "Grumph Grumph... <br/>";
	}

	protected function normalize($name){
		return ucfirst(strtolower($name));
	}
	public function getFirstname(){
		return $this->firstname;
	}
	public function setFirstname($firstname){
		$this->firstname = $this->normalize($firstname);
	}

		
	public function getAge(){
		return $this->age;
	}

	public function setAge($age){
		($age > 0) ? $this->age = $age : $this->age = 0;
	}

}//fin de la classe.