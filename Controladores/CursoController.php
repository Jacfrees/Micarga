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
				$conductor = $con->admin();

				$con = new Conductor();
	   		 	$con->idVeh($_GET["id"]);


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
	   		 private function view(){ 
				$Curso= new Curso(); 
				$Curso = $Curso->view ($_POST['nhab']); 
			require "Vistas/Curso/Consultar.php"; 
			}


	}
?>