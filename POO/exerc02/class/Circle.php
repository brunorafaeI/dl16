<?php 
require_once('Shape.php');

Class Circle extends Shape{
	private $radius;

	public function setRadius($radius){
		$this->radius = $radius;
	}
	
	public function getRadius(){
		return $this->radius;

	}

	public function area(){
		return pow($this->radius, 2) * pi();
	}

	public function perimeter(){
		return(2 * pi() * $this->radius); 
	}
}//fin de la classe.