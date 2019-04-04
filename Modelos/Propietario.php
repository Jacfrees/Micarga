<?php
require_once("Conexion.php");

require_once "Modelos/Propietario.php";
class Propietario extends Conexion{

	Public $idPropietario;
	public $Nombre;
	Public $Direccion;
	public $Documento;
	public $Celular;
	public $id_vehiculo;

	public function __construct(){
	parent::__construct();
}

public function save($nom,$dir,$doc,$cel,$idv){

	$this->Nombre=$nom;
	$this->Direccion=$dir;
	$this->Documento=$doc;
	$this->Celular=$cel;
	$this->id_vehiculo=$idv;

	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("INSERT INTO Propietario VALUES (:idPropietario, :Nombre, :Direccion, :Documento, :Celular, :id_vehiculo)");
	try{
		return $stm->execute((array)$this);
		return true;

	}catch(Exception $e){
		echo $e;
		return false;
	}
	

}

public function update (){
	$Conexion = $this->getConexion();

	$stm = $Conexion->prepare("UPDATE Propietario SET Nombre=:Nombre, Direccion=:Direccion, Documento=:Documento, Celular=:Celular, _
		id_vehiculo=:id_vehiculo  WHERE idPropietario= :id");

	$stm->bindparam(":Nombre",$this->Nombre);
	$stm->bindparam(":Direccion",$this->Direccion);
	$stm->bindparam(":Documento",$this->Documento);
	$stm->bindparam(":Celular",$this->Celular);
	$stm->bindparam(":id_vehiculo",$this->_idvehiculo);
	$stm->bindparam(":id",$this->idPropietario);
    $stm->execute();
}

public function findBypk($id){
	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("SELECT *FROM Propietario WHERE idPropietario = :id");
	$stm->setFetchMode(PDO::FETCH_INTO,$this);

	$stm->bindParam(":id",$id);
	$stm-> execute();
	$stm->fetch();
}

public function delete($id){
			$Conexion =$this->getConexion();
			$stm = $Conexion->prepare("DELETE  FROM Propietario WHERE idPropietario = :id");
			$stm->bindParam(":id",$id);
			$stm->execute();

}

	public function admin(){
		$conexion = $this->getConexion();
		$stm =$conexion->prepare("SELECT * FROM Propietario ");
		$stm->setFetchMode(PDO::FETCH_CLASS,'Propietario');
		$Propietario = array();	
		$stm->execute();

			
			while ($obj = $stm->fetch()) {

				$vehic = new Vehiculo();
				$vehic->findBypk($obj->id_Vehiculo);
				$obj->vehi = $vehic;
			    $Propietario[]=$obj;
			}
	
			return $Propietario;
}

  
}

?>
