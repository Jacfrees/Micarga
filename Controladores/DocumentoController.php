<?php
require_once("Modelos/Documento.php");
require_once("Modelos/Vehiculo.php");

class DocumentoController{
	public static function main($action){

		$_this = new DocumentoController();
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
			if(isset($_POST["Documento"])){

				$tip=$_POST["Documento"]["Tipo"];
				$fere= $_POST["Documento"]["FechaRenovacion"];
				$feve= $_POST["Documento"]["FechaVencimiento"];
				$idv= $_POST["Documento"]["Vehiculo_idVehiculo"];
				


			$Documento = new Documento();
			$guardo = $Documento->save($tip,$fere,$feve,$idv);
			if ($guardo){
			    header("location:index.php?c=Documento&a=admin");
			}else{
				echo"ocurrio un error al guardar";
			}

					require "Vistas/Documento/admin.php";
			}else{
			
	   		 	$veh = new Vehiculo();
				$vehiculo = $veh->admin();

				require "Vistas/Documento/create.php";
			}

		}
			private function admin (){
				// se consulta listado de la BBDD
				$doc = new Documento();
				$Documento = $doc->admin();

				$veh = new Vehiculo();
				$vehiculo = $veh->admin();
				


				require"Vistas/Documento/admin.php";
			}

	   		 private function update(){
	   		 	$Documento = new Documento();
	   		 	$Documento->findByPk($_GET["id"]);

	   		 	$veh = new Vehiculo();
				$vehiculo = $veh->admin();

				$veh = new Vehiculo();
				$veh->idDoc($_GET["id"]);



	   		 	if (isset($_POST["Documento"])){
	   		 		$Documento->Tipo=$_POST["Documento"]["Tipo"];
	   		 		$Documento->FechaRenovacion=$_POST["Documento"]["FechaRenovacion"];
	   		 		$Documento->FechaVencimiento=$_POST["Documento"]["FechaVencimiento"];
	   		 		$Documento->Numero=$_POST["Documento"]["Numero"];
	   		 	    $Documento->Vehiculo_idVehiculo = $_POST["Documento"]["Vehiculo_idVehiculo"];



	   		 		$Documento-> update();
	   		 		header("Location:index.php?c=Documento&a=admin");

	   		 	}else{

	   		 		
	   		 		require "Vistas/Documento/Update.php";
	   		 	}
	   		 }

	   		 private function delete(){
	   		 	$Documento= new Documento();
	   		 	if(isset($_GET["id"])){
	   		 		$Documento->delete($_GET["id"]);
	   		 	header("Location:index.php?c=Documento&a=admin");
	   		 	}else{
	   		 		header("Location:index.php?c=Documento&a=admin");
	   		 	}
	   		 		
	   		 }
    }

	
?>

