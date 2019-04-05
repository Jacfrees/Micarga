<?php
require_once("Modelos/Vehiculo.php");
require_once("Modelos/Conductor.php");
require_once("Modelos/Propietario.php");

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
				
				$folder = "uploadsCP/"; // Carpeta a la que queremos subir los archivos 
				$maxlimit = 50000000; // Máximo límite de tamaño (en bits) 
				$allowed_ext = "pdf,docx,doc,xlsx,xls"; // Extensiones permitidas (usad una coma para separarlas) 
				$overwrite = "no"; // Permitir sobreescritura? (yes/no) 
				// creado por maracaiboenlinea.com 
				$match = "";  
				$error = "";
				$filesize = $_FILES['userfile']['size']; // toma el tamaño del archivo 
				$filename = strtolower($_FILES['userfile']['name']); // toma el nombre del archivo y lo pasa a minúsculas 


				if(!$filename || $filename==""){ // mira si no se ha seleccionado ningún archivo 
				   $error .= "- Ningún archivo selecccionado para subir.<br>"; 
				}elseif(file_exists($folder.$filename) && $overwrite=="no"){ // comprueba si el archivo existe ya 
				   $error = "- El archivo <b>$filename</b> ya existe<br>"; 
				} 

				// comprobar tamaño de archivo 
				if($filesize < 1){ // el archivo está vacío 
				   $error .= "- Archivo vacío.<br>"; 
				}elseif($filesize > $maxlimit){ // el archivo supera el máximo 
				   $error .= "- Este archivo supera el máximo tamaño permitido.<br>"; 
				} 

				$file_ext = preg_split("/\./",$filename); // aquí no tengo claro lo que hace xD 
				$allowed_ext = preg_split("/\,/",$allowed_ext); // ídem, algo con las extensiones 
				foreach($allowed_ext as $ext){ 
				   if($ext==$file_ext[1]) $match = "1"; // Permite el archivo 
				} 

				// Extensión no permitida 
				if(!$match){ 
				   $error .= "- Este tipo de archivo no está permitido: $filename<br>"; 
				} 

				if($error){ 
				   print "Se ha producido el siguiente error al subir el archivo:<br> $error"; // Muestra los errores 
				}else{ 
				   move_uploaded_file($_FILES['userfile']['tmp_name'], $folder.$filename);
				} 

				$pc=$_POST["Vehiculo"]["PlacaCabezote"];
				$m= $_POST["Vehiculo"]["Modelo"];
				$c= $_POST["Vehiculo"]["Color"];
				$pr= $_POST["Vehiculo"]["PlacaRemolque"];
				$ct= $_POST["Vehiculo"]["CapacidadTanque"];
				$sec=$_POST["Vehiculo"]["Seccional"];
				$idc= $_POST["Vehiculo"]["Conductor_idConductor"];
				$idp= $_POST["Vehiculo"]["Propietario_idPropietario"];
				


			$vehiculo = new Vehiculo();
			$guardo = $vehiculo->save($pc,$m,$c,$pr,$ct,$sec,$idc,$idp);
			if ($guardo){
			    header("location:index.php?c=Vehiculo&a=admin");
			}else{
				echo"ocurrio un error al guardar";
			}

					require "Vistas/Vehiculo/admin.php";
			}else{
			
	   		 		$con = new Conductor();
					$conductor = $con->admin();

					$prop = new Propietario();
					$propietario = $prop->admin();

				require "Vistas/Vehiculo/create.php";
			}

		}
			private function admin (){
				// se consulta listado de la BBDD
				$veh = new Vehiculo();
				$vehiculo = $veh->admin();

				$con = new Conductor();
				$conductor = $con->admin();

				$prop = new Propietario();
				$propietario = $prop->admin();


				require"Vistas/Vehiculo/admin.php";
			}

	   		 private function update(){
	   		 	$Vehiculo = new Vehiculo();
	   		 	$Vehiculo->findByPk($_GET["id"]);
	   		 	
	   		 	$con = new Conductor();
	   		 	$con->findByPk($Vehiculo->Conductor_idConductor);
				$conductor = $con->admin();

				$pro = new Propietario();
	   		 	$pro->findByPk($Vehiculo->Propietario_idPropietario);
				$propietario = $pro->admin();

				


	   		 	if (isset($_POST["Vehiculo"])){
	   		 		$Vehiculo->PlacaCabezote=$_POST["Vehiculo"]["PlacaCabezote"];
	   		 		$Vehiculo->Modelo=$_POST["Vehiculo"]["Modelo"];
	   		 		$Vehiculo->Color=$_POST["Vehiculo"]["Color"];
	   		 		$Vehiculo->PlacaRemolque=$_POST["Vehiculo"]["PlacaRemolque"];
	   		 		$Vehiculo->CapacidadTanque=$_POST["Vehiculo"]["CapacidadTanque"];
	   		 		$Vehiculo->Seccional=$_POST["Vehiculo"]["Seccional"];
	   		 	    $Vehiculo->Conductor_idConductor=$_POST["Vehiculo"]["Conductor_idConductor"];
	   		 	    $Vehiculo->Propietario_idPropietario=$_POST["Vehiculo"]["Propietario_idPropietario"];



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