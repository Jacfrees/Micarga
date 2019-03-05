<?php 


$action = "admin";//accion por defecto
$controller = "Conductor";//controlador por defecto 
if (isset($_GET["a"])) 
	$action = $_GET["a"];


if (isset($_GET["c"])) 
	$controller = $_GET["c"];


switch ($controller) {
		
	case "Conductor":
		require "Controladores/ConductorController.php";
		ConductorController::main($action);
	    break;

	case "Vehiculo":
		require "Controladores/VehiculoController.php";
		VehiculoController::main($action);
	    break;

	case "Usuario":
		require "Controladores/UsuarioController.php";
		UsuarioController::main($action);
	    break;
		
	}

 ?>
 