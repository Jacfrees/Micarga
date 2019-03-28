<?php
require_once("Modelos/Vehiculo.php");
require_once("Modelos/Conductor.php");

class VehiculoController{
	public static function main($action){

		$_this = new VehiculoController();
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
			
		}

	}
		private function create(){
			if(isset($_POST["Vehiculo"])){

				$pc=$_POST["Vehiculo"]["PlacaCabezote"];
				$m= $_POST["Vehiculo"]["Modelo"];
				$c= $_POST["Vehiculo"]["Color"];
				$pr= $_POST["Vehiculo"]["PlacaRemolque"];
				$ct= $_POST["Vehiculo"]["CapacidadTanque"];
				$sec=$_POST["Vehiculo"]["Seccional"];
				$idc= $_POST["Vehiculo"]["Conductor_idConductor"];
				


			$vehiculo = new Vehiculo();
			$guardo = $vehiculo->save($pc,$m,$c,$pr,$ct,$sec,$idc);
			if ($guardo){
			    header("location:index.php?c=Vehiculo&a=admin");
			}else{
				echo"ocurrio un error al guardar";
			}

					require "Vistas/Vehiculo/admin.php";
			}else{
			
	   		 		$con = new Conductor();
					$conductor = $con->admin();

				require "Vistas/Vehiculo/create.php";
			}

		}
			private function admin (){
				// se consulta listado de la BBDD
				$veh = new Vehiculo();
				$vehiculo = $veh->admin();

				$con = new Conductor();
				$conductor = $con->admin();


				require"Vistas/Vehiculo/admin.php";
			}

	   		 private function update(){
	   		 	$Vehiculo = new Vehiculo();
	   		 	$Vehiculo->findByPk($_GET["id"]);
	   		 	
	   		 	$con = new Conductor();
	   		 	$con->findByPk($Vehiculo->Conductor_idConductor);
				$conductor = $con->admin();

				//$con = new Conductor();
	   		 	//$con->idVeh($_GET["id"]);


	   		 	if (isset($_POST["Vehiculo"])){
	   		 		$Vehiculo->PlacaCabezote=$_POST["Vehiculo"]["PlacaCabezote"];
	   		 		$Vehiculo->Modelo=$_POST["Vehiculo"]["Modelo"];
	   		 		$Vehiculo->Color=$_POST["Vehiculo"]["Color"];
	   		 		$Vehiculo->PlacaRemolque=$_POST["Vehiculo"]["PlacaRemolque"];
	   		 		$Vehiculo->CapacidadTanque=$_POST["Vehiculo"]["CapacidadTanque"];
	   		 		$Vehiculo->Seccional=$_POST["Vehiculo"]["Seccional"];
	   		 	    $Vehiculo->Conductor_idConductor=$_POST["Vehiculo"]["Conductor_idConductor"];



	   		 		$Vehiculo-> update();
	   		 		header("Location:index.php?c=Vehiculo&a=admin");

	   		 	}else{

	   		 		

	   		 		require "Vistas/Vehiculo/Update.php";
	   		 	}
	   		 }

	   		 private function delete(){
	   		 	$Vehiculo= new Vehiculo();
	   		 	if(isset($_GET["id"])){
	   		 		$Vehiculo->delete($_GET["id"]);
	   		 	header("Location:index.php?c=Vehiculo&a=admin");
	   		 	}else{
	   		 		header("Location:index.php?c=Vehiculo&a=admin");
	   		 	}
	   		 		
	   		 }

	   		
    }

	
?>