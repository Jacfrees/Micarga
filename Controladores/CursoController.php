<?php
require_once("Modelos/Curso.php");
require_once("Modelos/Conductor.php");
class CursoController{
	public static function main($action){

		$_this = new CursoController();
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
			if(isset($_POST["Curso"])){

				$folder = "uploadscursos/"; // Carpeta a la que queremos subir los archivos 
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
				$nom= $_POST["Curso"]["Nombre"];
				$fein= $_POST["Curso"]["FechaInicio"];
				$feve= $_POST["Curso"]["FechaVencimiento"];
				$idc= $_POST["Curso"]["Conductor_idConductor"];
				

			$curso = new Curso();
			$guardo = $curso->save($nom,$fein,$feve,$idc);
			if ($guardo){
			 	header("location:index.php?c=Curso&a=admin");
			}else{
				echo"ocurrio un error al guardar";
			}

				require "Vistas/Curso/admin.php";
				
				}else{

					$con = new Conductor();
					$conductor = $con->admin();

				require "Vistas/Curso/create.php";
					
			}

		}
			private function admin (){
				// se consulta listado de la BBDD
				$ss = new Curso();
				$Curso = $ss->admin();

				$con = new Conductor();
				$conductor = $con->admin();

				require"Vistas/Curso/admin.php";
			}

	   		 private function update(){
	   		 	$Curso = new Curso();
	   		 	$Curso->findByPk($_GET["id"]);

	   		 	$con = new Conductor();
	   		 	$con->findByPk($Curso->Conductor_idConductor);
				$conductor = $con->admin();

				//$con = new Conductor();
	   		 	//$con->idVeh($_GET["id"]);


	   		 	if (isset($_POST["Curso"])){
	   		 		$Curso->Nombre=$_POST["Curso"]["Nombre"];
	   		 		$Curso->FechaInicio=$_POST["Curso"]["FechaInicio"];
	   		 		$Curso->FechaVencimiento=$_POST["Curso"]["FechaVencimiento"];
	   		 		$Curso->Conductor_idConductor=$_POST["Curso"]["Conductor_idConductor"];

	   		 		

	   		 		$Curso-> update();
	   		 		header("Location:index.php?c=Curso&a=admin");

	   		 	}else{

	   		 		
	   		 		
	   		 		require "Vistas/Curso/Update.php";
	   		 	}
	   		 }

	   		 private function delete(){
	   		 	$Curso= new Curso();
	   		 	if(isset($_GET["id"])){
	   		 		$Curso->delete($_GET["id"]);
	   		 	header("Location:index.php?c=Curso&a=admin");
	   		 	}else{
	   		 		header("Location:index.php?c=Curso&a=admin");
	   		 	}
	   		 }
	   		


	}
?>