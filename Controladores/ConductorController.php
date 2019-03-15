<?php
require_once("Modelos/Conductor.php");

class ConductorController{
	public static function main($action){

		$_this = new ConductorController();
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
			if(isset($_POST["Conductor"])){
				$nom= $_POST["Conductor"]["Nombre"];
				$doc= $_POST["Conductor"]["Documento"];
				$numcel= $_POST["Conductor"]["NumCelular"];
				$lc= $_POST["Conductor"]["LicConduccion"];
				$vl= $_POST["Conductor"]["VenLicencia"];

			$conductor = new Conductor();
			$guardo = $conductor->save($nom,$doc,$numcel,$lc,$vl);
			if ($guardo){
			 	header("location:index.php?c=Conductor&a=admin");
			}else{
				echo"ocurrio un error al guardar";
			}
				
				}else{
					require "Vistas/Conductor/create.php";
			}

		}
			private function admin (){
				// se consulta listado de la BBDD
				$cond = new Conductor();
				$ms = $cond->admin();

				require"Vistas/Conductor/admin.php";
			}

	   		 private function update(){
	   		 	$Conductor = new Conductor();
	   		 	$Conductor->findByPk($_GET["id"]);

	   		 	if (isset($_POST["Conductor"])){
	   		 		$Conductor->Nombre=$_POST["Conductor"]["Nombre"];
	   		 		$Conductor->Documento=$_POST["Conductor"]["Documento"];
	   		 		$Conductor->NumCelular=$_POST["Conductor"]["NumCelular"];
	   		 		$Conductor->LicConduccion=$_POST["Conductor"]["LicConduccion"];
	   		 		$Conductor->VenLicencia=$_POST["Conductor"]["VenLicencia"];

	   		 		$Conductor-> update();
	   		 		header("Location:index.php?c=Conductor&a=admin");

	   		 	}else{
	   		 		require "Vistas/Conductor/Update.php";
	   		 	}
	   		 }

	   		 private function delete(){
	   		 	$Conductor= new Conductor();
	   		 	if(isset($_GET["id"])){
	   		 		$Conductor->delete($_GET["id"]);
	   		 	header("Location:index.php?c=Conductor&a=admin");
	   		 	}else{
	   		 		header("Location:index.php?c=Conductor&a=admin");
	   		 	}
	   		 }

	   		 private function view(){ 
				$Conductor= new Conductor(); 
				$Conductor = $Conductor->view ($_POST['nhab']); 
			require "Vistas/Conductor/Consultar.php"; 
			}


	}
?>