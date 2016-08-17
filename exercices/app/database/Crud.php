<?php

namespace app\database;

use app\database\Conexion;

Abstract Class Crud extends Conexion {
	protected $table;

	abstract public function insert();
	abstract public function update();
	abstract public function delete();

	
}