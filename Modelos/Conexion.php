<?php 
	class Conexion{
		static $connection;

		public function __construct(){
			 $server = "localhost";
			 $db = "bdmicarga";
			 $user = "root";
			 $password = ""; //aqui la clase conexion el server es localhost el nombre de la base de datos es dbalquileresautos y el user es root y password no se puso ! 

			try {
				Conexion::$connection = new PDO(
					"mysql:host=$server; dbname=$db",
					$user,
					$password
				);
				Conexion::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
			} catch (PDOException $ex) {
				echo "Ha ocurrido un error al conectar al servidor de base de datos: ". $ex->getMessage();
			}
		}
		public function getConexion(){
			return Conexion::$connection;
		}
	}

 ?>