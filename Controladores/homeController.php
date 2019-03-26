<?php 
require_once("Modelos/Usuario.php"); //requerimos todo el modelo usuarios para poder hacer funcion de sus campos como el documento y la contraseña!!
	class homeController{

		public static function main($action){

	        $_this = new homeController();
	        
			switch ($action) { //aqui depediendo de la accion que se utilize nos manda al home o al login  o logout si no encuentra ninguna nos va a parecer accion no definida!  
				case "home":
					$_this->home();
					break;
				case "login":
				    $_this->login();
				    break;	
				case "logout":
					$_this->logout();
					break;	
				default:
				throw new Exception("Accion no definida");	
				
			}
		}
		private function home(){
			require "Vistas/home.php";//aqui requerimos todo la vista de home!
		}
		
		private function Login(){
			session_start();
			if (isset($_POST["Login"])) { //aqui el login si el documento y la contraseña son verdaderos entonces nos dejara ingresar al home!
				$documento = $_POST["Login"]["documento"];
				$Contrasena = $_POST["Login"]["Contrasena"];

				$Usuario = new Usuario();
				$Usuario->findByDocument($documento);
				if (password_verify( $Contrasena,$Usuario->Contrasena)) {
					$_SESSION["Usuario"]= $Usuario;
					$_SESSION["Perfil"]= $Usuario->perfil;
					if ($_SESSION["Perfil"]!="Administrador"  ) {
						header("location:index.php?c=home&a=home");
	
				}else{
					$_SESSION["Perfil"] != "Empleado";
					header("location: index.php?c=home&a=home"); 
				}
			}else{
				header("location:index.php?$c=home&a=Login&error=true");//y si es incorrecta la contraseña  entonces nos dara error y nos volvera al login!
			}
		}else{
			require "Vistas/home/Login.html";
		}
	}	
		private function logout(){
			session_destroy();
			header("location: index.php?c=home&a=login");
		}
	
}
?>