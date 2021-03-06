<?php
require_once("Conexion.php");

require_once "Modelos/Conductor.php";


class Vehiculo extends Conexion{

	Public $idVehiculo;
	public $PlacaCabezote;
	Public $Modelo;
	public $Color;
	public $PlacaRemolque;
	public $CapacidadTanque;
	public $CartaPropiedad;
	public $Conductor_idConductor;
	

	public function __construct(){
	parent::__construct();
}

public function save($pc,$m,$c,$pr,$ct,$cp,$idc){

	$this->PlacaCabezote=$pc;
	$this->Modelo=$m;
	$this->Color=$c;
	$this->PlacaRemolque=$pr;
	$this->CapacidadTanque=$ct;
	$this->CartaPropiedad=$cp;
	$this->Conductor_idConductor=$idc;
	

	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("INSERT INTO Vehiculo VALUES (:idVehiculo, :PlacaCabezote, :Modelo, :Color, :PlacaRemolque, :CapacidadTanque, :CartaPropiedad, :Conductor_idConductor)");
	
	try{
			return $stm->execute((array)$this);
			return true;

	}catch(Exception $e){
		return false;
	}

	}
	
	


    public function update (){
	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("UPDATE Vehiculo SET PlacaCabezote=:PlacaCabezote, Modelo=:Modelo, Color=:Color, PlacaRemolque=:PlacaRemolque, CapacidadTanque=:CapacidadTanque, CartaPropiedad=:CartaPropiedad WHERE idVehiculo=:id");

	$stm->bindparam(":PlacaCabezote",$this->PlacaCabezote);
	$stm->bindparam(":Modelo",$this->Modelo);
	$stm->bindparam(":Color",$this->Color);
	$stm->bindparam(":PlacaRemolque",$this->PlacaRemolque);
	$stm->bindparam(":CapacidadTanque",$this->CapacidadTanque);
	$stm->bindParam("cond",$this->Conductor_idConductor);
	$stm->bindparam(":id",$this->idVehiculo);

	$stm->execute();


}

    public function findBypk($id){
	$Conexion =$this->getConexion();
	$stm = $Conexion->prepare("SELECT *FROM Vehiculo WHERE idVehiculo = :id");
	$stm->setFetchMode(PDO::FETCH_INTO,$this);

	$stm->bindParam(":id",$id);
	$stm-> execute();
	$stm->fetch();
}

    public function delete($id){
	$Conexion =$this->getConexion();
	$stm = $Conexion->prepare("DELETE FROM Vehiculo WHERE idVehiculo = :id");
	$stm->bindParam(":id",$id);
	$stm->execute();

}

	public function admin(){
	$conexion = $this->getConexion();
	$stm =$conexion->prepare("SELECT * FROM Vehiculo ");
	$stm->setFetchMode(PDO::FETCH_CLASS,'Vehiculo');
	$Vehiculo = array();	
	$stm->execute();

			
			while ($obj = $stm->fetch()) {

			$conduid = new Conductor();
			$conduid->findByPk($obj->Conductor_idConductor);
			$obj->idc = $conduid;


			$Vehiculo[]=$obj;
	}
			
			return $Vehiculo;

}
}



?>