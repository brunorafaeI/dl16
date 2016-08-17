<?php 
namespace app\database;

use app\database\Conexion;

Class DB extends Conexion {
	
	private $select = NULL;
	private $from 	= NULL;
	private $where 	= NULL;
	private $champ 	= NULL;
	private $value 	= NULL;
	private $join;
	private $order 	= NULL;



	public function select(){
		$selects = func_get_args();
			if(count($selects) > 0):
				$this->select = implode(',', $selects);
			endif;
			return $this;
	}


	public function from(){
		$from = func_get_args();
			if(count($from) > 0):
				$this->from = implode(',', $from);
			endif;
			return $this;
	}

public function where($field, $value){
		$this->where = $field.'='.$value;
		return $this;
	}

	public function join($table, $join){
		if(func_num_args() != 2):
			trigger_error('Le méthode JOIN a besoin des 2 paramètres');
		endif;
		//$this->join = ['table' => $table, 'join' => $join];
		//return $this;
		$this->join[$table] = $join;
		//dump($this->join);
		return $this;


	}

	public function order($field, $order){
		$this->order = $field.' = '.$order;
		return  $this;
	}

	public  function queryBuilder(){
		
		$query = 'SELECT ';
		
		if(is_null($this->select)):
			$query .= '*';
		endif;

		$query .= $this->select . ' FROM ';

	
		if(is_null($this->from)):
			$this->from = 'personnel';

		endif;
	

		$query .= $this->from;

		if(!is_null($this->join)):
			//dump($this->join);
			foreach ($this->join as $table => $value) {
				$query .= ' INNER JOIN ' . $table . ' ON ' . $value;
			}
			

		endif;

		if(!is_null($this->where)):
			$query .= ' WHERE '.$this->where;	
		endif;

		
		

		return $query;
	}
	
	public function lister(){
		
		$pdo = parent::getDB();
		$result = $pdo->prepare(self::queryBuilder());
		$result->execute();
		return $result->fetchAll();	
		
		// dump($result);


	
	}
	public function insert($table, $champs, $values){
		$this->champ = $champs;
		$this->value = $values;


		$query = 'INSERT INTO '.$table.' ('.$this->champ.')'.' VALUES ('.$this->value.');';

		 	$pdo = parent::getDB();
			$insert = $pdo->query($query);
			header('location: exerc07.php?ajout');

			

	}

	public function update($table, $champs, $id){
		$query = 'UPDATE '.$table.' SET '.$champs.' WHERE IdPerso='.$id.';';
		
		$pdo = parent::getDB();
		$update = $pdo->query($query);
		
		
		
	}

	public function delete($table, $id){
		$query = 'DELETE FROM '.$table.' WHERE IdPerso='.$id.';';
		$pdo = parent::getDB();
		$delete = $pdo->query($query);
		header('location: liste.php?del');
	}

}//fin class.
