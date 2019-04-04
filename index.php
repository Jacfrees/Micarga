<?php

$action = "home";//accion por defecto
$controller = "home";//controlador por defecto 
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

	case "Usuario":
		require "Controladores/UsuarioController.php";
		UsuarioController::main($action);
	    break;

	case "Documento":
		require "Controladores/DocumentoController.php";
		DocumentoController::main($action);
	    break;

	case "Propietario":
		require "Controladores/PropietarioController.php";
		PropietarioController::main($action);
	    break;

	default://controlador de inicio
			require "Controladores/homeController.php";
			//accion estatica ::
			homeController::main($action);
	}

 ?>