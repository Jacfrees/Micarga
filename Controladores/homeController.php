<?php 
require_once("Modelos/Usuario.php"); //requerimos todo el modelo usuarios para poder hacer funcion de sus campos como el documento y la contraseña!!
	class homeController{

		public static function main($action){
			if (!isset($_SESSION["Documento"]) && $_GET["a"] != "Login" && $_GET["a"] != "home")
			 header("location: index.php?c=home&a=Login"); 
	        $_this = new homeController();
	        
			switch ($action) { //dependiendo la accion que se le de nos envia a cualquiera de ellos.   
				case "home":
					$_this->home();
					break;
				case "homeE":
					$_this->homeE();
					break;
				case "Login":
				    $_this->Login();
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
		private function homeE(){
			require "Vistas/homeE.php";
		}

		private function Login(){
            if (isset($_POST["Login"]) && $_POST["Login"]["Documento"] != "" && $_POST["Login"]["Contrasena"] !=""){
                // Iniciar Sesion
                $Documento = $_POST["Login"]["Documento"];
                $Password = $_POST["Login"]["Contrasena"];
                $usuario = new Usuario();
                $usuario->findByDocument($Documento);

                if (password_verify($Password,$usuario->Password)){
                    $_SESSION["Usuario"] = $usuario;
                    $_SESSION["Perfil"] = $usuario;
                    	if ($_SESSION["Perfil"] != "Administrador"){
 
                    header("location: index.php?c=home&a=home");
                    
                }else{
                    $_SESSION["Perfil"] != "Empleado";
                 header("location:index.php?c=home&a=homeE");
             		}
                }else{
                    header("Location: index.php?c=home&a=Login&error=true");
                	}
                }else{
                
                require "Login.php";
            }
        }

	
		private function logout(){
			session_destroy();
			header("location: index.php?c=home&a=Login");
		}
	
}
?>