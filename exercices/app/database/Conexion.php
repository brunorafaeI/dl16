<?php 
namespace app\database;

require_once('Config.php');

use PDO;



Abstract Class Conexion {
		
	private static $instance;

	private static function connect(){
		try {
			if(!isset(self::$instance)):
				$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
				self::$instance = new PDO($dsn, DB_USER, DB_PASS);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

			endif;
			
		} catch (PDOException $e) {
			echo "Erreur: ", $e->getMessage();
			die();
		}
		return self::$instance;

	}

		protected static function getDB(){
			return self::connect();
		}


}//fin class.