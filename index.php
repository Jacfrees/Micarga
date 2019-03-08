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

	case "Curso":
		require "Controladores/CursoController.php";
		CursoController::main($action);
	    break;
	}

 ?>
 