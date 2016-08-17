<?php 
require_once('Mammal.php');

Class Dog extends Mammal{
	

	public function __construct($firstname = "Medor", $age = null){
		parent::__construct($firstname, $age);
	}

	public function bark(){
		echo "Bwouf <br/>";
	}

	public function sit(){
		echo "*th";
	}

}//fin de la classe.