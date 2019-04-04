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

				$folder = "uploadsdocumento/"; // Carpeta a la que queremos subir los archivos 
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

				$tip=$_POST["Documento"]["Tipo"];
				$fere= $_POST["Documento"]["FechaRenovacion"];
				$feve= $_POST["Documento"]["FechaVencimiento"];
				$num= $_POST["Documento"]["Numero"];
				$idv= $_POST["Documento"]["Vehiculo_idVehiculo"];
				


			$Documento = new Documento();
			$guardo = $Documento->save($tip,$fere,$feve,$num,$idv);
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
	   		 	$veh->findByPk($Documento->Vehiculo_idVehiculo);
				$vehiculo = $veh->admin();

				//$veh = new Vehiculo();
				//$veh->idVeh($_GET["id"]);



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

