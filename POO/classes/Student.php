<?php 
require_once('Mammal.php');

Class Student extends Mammal{
	
	private $lastname;
	public static $nbStudent = 0;
	const MAX_STUDENTS = 100;
	

	public function __construct($firstname, $lastname, $age = null){
		parent::__construct($firstname, $age);
		$this->setLastname($lastname);
		self::$nbStudent++;
		
	}
	public static function getNbStudent(){
		return self::$nbStudent;
	}


	public function eat(){
		echo "Je prends mon couteau et ma fourchette pour manger. <br/>";
	}

	public function getLastname(){
		return $this->lastname;
	}
	public function setLastname($lastname){
		$this->lastname = $this->normalize($lastname);
	}

	public function getFullname(){
		return $this->getFirstname().' '.$this->getLasname();
	}

	public function sayHello(){
		echo "Bonjour tout le monde!<br/>";
	}

}//fin de la classe.