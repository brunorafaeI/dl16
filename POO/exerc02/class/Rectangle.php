<?php 
require_once('Shape.php');

Class Rectangle extends Shape{
	private $width;
	private $height;

	public function ___construct($width = 1, $height = 1){
		$this->width = $this->setWidth($width);
		$this->height = $this->setHeight($height);
	}

	public function setWidth($width){
		$this->width = $width;
	}

	public function getWidth(){
		return $this->width;
	}

	public function setHeight($height){
		$this->height = $height;
	}

	public function getHeight(){
		return $this->height;
	}

	public function area(){
		return($this->width * $this->height);
	}

	public function perimeter(){
		return((2 * $this->width) + (2 * $this->height)); 
	}





}//fin de la classe.