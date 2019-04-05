<?php
require_once("Modelos/Propietario.php");
require_once("Modelos/Vehiculo.php");
class PropietarioController{
	public static function main($action){

		$_this = new PropietarioController();
		switch ($action) {
			case 'create':
			$_this->create();
				break;
			case 'delete':
			$_this->delete();
				break;
			case 'update':
			$_this->update();
				break;
			case 'view':
			$_this->view();
				break;
			case 'admin':
			$_this->admin();
				break;

			
			default:
			throw new Exception("Accion no definida");
			break;
		}

	}
		private function create(){
			if(isset($_POST["Propietario"])){
				$nom= $_POST["Propietario"]["Nombre"];
				$dir= $_POST["Propietario"]["Direccion"];
				$doc= $_POST["Propietario"]["Documento"];
				$cel= $_POST["Propietario"]["Celular"];
				

			$Propietario = new Propietario();
			$guardo = $Propietario->save($nom,$dir,$doc,$cel);
			if ($guardo){
			 	header("location:index.php?c=Propietario&a=admin");
			}else{
				echo"ocurrio un error al guardar";
			}

				require "Vistas/Propietario/admin.php";
				
				}else{

				require "Vistas/Propietario/create.php";
					
			}

		}
			private function admin (){
				// se consulta listado de la BBDD
				$pro = new Propietario();
				$Propietario = $pro->admin();

				$veh = new Vehiculo();
				$vehiculo = $veh->admin();
				

				require"Vistas/Propietario/admin.php";
			}

	   		 private function update(){
	   		 	$Propietario = new Propietario();
	   		 	$Propietario->findByPk($_GET["id"]);

	   		 	if (isset($_POST["Propietario"])){
	   		 		$Propietario->Nombre=$_POST["Propietario"]["Nombre"];
	   		 		$Propietario->Direccion=$_POST["Propietario"]["Direccion"];
	   		 		$Propietario->Documento=$_POST["Propietario"]["Documento"];
	   		 		$Propietario->Celular=$_POST["Propietario"]["Celular"];

	   		 		
	   		 		$Propietario-> update();
	   		 		header("Location:index.php?c=Propietario&a=admin");

	   		 	}else{

	   		 		
	   		 		
	   		 		require "Vistas/Propietario/Update.php";
	   		 	}
	   		 }

	   		 private function delete(){
	   		 	$Propietario= new Propietario();
	   		 	if(isset($_GET["id"])){
	   		 		$Propietario->delete($_GET["id"]);
	   		 	header("Location:index.php?c=Propietario&a=admin");
	   		 	}else{
	   		 		header("Location:index.php?c=Propietario&a=admin");
	   		 	}
	   		 }
	   		


	}
?>