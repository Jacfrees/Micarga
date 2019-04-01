<?php
require_once("Modelos/Usuario.php");

class UsuarioController{
	public static function main($action){

		$_this = new UsuarioController();
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
			if(isset($_POST["Usuario"])){
				$nom= $_POST["Usuario"]["Nombre"];
				$doc= $_POST["Usuario"]["Documento"];
				$tel= $_POST["Usuario"]["Telefono"];
				$per= $_POST["Usuario"]["Perfil"];
				$pass= $_POST["Usuario"]["Password"];


			$Usuario = new Usuario();
			$encrip = password_hash($pass, PASSWORD_DEFAULT);
			$guardo = $Usuario->save($nom,$doc,$tel,$per,$encrip);
			//GUARDA EN LA BD
			if ($guardo){
				//$_SESSION["Documento"]=$Documento;
			 	header("location:index.php?c=Usuario&a=admin");
			}else{
				header("location:index.php?c=Usuario&a=admin&error=true");
				echo"ocurrio un error al guardar";
			}
				
				}else{
					require "Vistas/Usuario/create.php";
			}

		}
			private function admin (){
				// se consulta listado de la BBDD
				$usu = new Usuario();
				$usua = $usu->admin();

				require"Vistas/Usuario/admin.php";
			}

	   		 private function update(){
	   		 	$Usuario = new Usuario();
	   		 	$Usuario->findByPk($_GET["id"]);

	   		 	if (isset($_POST["Usuario"])){
	   		 		$Usuario->Nombre=$_POST["Usuario"]["Nombre"];
	   		 		$Usuario->Documento=$_POST["Usuario"]["Documento"];
	   		 		$Usuario->Telefono=$_POST["Usuario"]["Telefono"];
	   		 		$Usuario->Perfil=$_POST["Usuario"]["Perfil"];
	   		 		$Usuario->Password= password_hash($_POST["Usuario"]["Password"], PASSWORD_DEFAULT);

	   		 		$Usuario-> update();
	   		 		header("Location:index.php?c=Usuario&a=admin");

	   		 	}else{
	   		 		require "Vistas/Usuario/Update.php";
	   		 	}
	   		 }

	   		 private function delete(){
	   		 	$Usuario= new Usuario();
	   		 	if(isset($_GET["id"])){
	   		 		$Usuario->delete($_GET["id"]);
	   		 	header("Location:index.php?c=Usuario&a=admin");
	   		 	}else{
	   		 		header("Location:index.php?c=Usuario&a=admin");
	   		 	}
	   		 }

	   		 
		

	}
?>