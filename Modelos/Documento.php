<?php
require_once("Conexion.php");

require_once "Modelos/Vehiculo.php";


class Vehiculo extends Conexion{

	Public $idDocumento;
	public $Tipo;
	Public $FechaRenovacion;
	public $FechaVencimiento;
	public $Numero;
	public $Vehiculo_idVehiculo;
	

	public function __construct(){
	parent::__construct();
}

public function save($tip,$fere,$feve,$num,$idv){

	$this->Tipo=$tip;
	$this->FechaRenovacion=$fere;
	$this->FechaVencimiento=$feve;
	$this->Numero=$num;
	$this->Vehiculo_idVehiculo=$idv;
	

	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("INSERT INTO Documento VALUES (:idDocumento, :Tipo, :FechaRenovacion, :FechaVencimiento, :Numero, :Vehiculo_idVehiculo)");
	
	try{
			return $stm->execute((array)$this);
			return true;

	}catch(Exception $e){
		return false;
	}

	}
	

    public function update (){
	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("UPDATE Documento SET Tipo=:Tipo, FechaRenovacion=:FechaRenovacion, FechaVencimiento=:FechaVencimiento, Numero=:Numero, Vehiculo_idVehiculo=:Vehiculo_idVehiculo WHERE idDocumento=:id");

	$stm->bindparam(":Tipo",$this->Tipo);
	$stm->bindparam(":FechaRenovacion",$this->FechaRenovacion);
	$stm->bindparam(":FechaVencimiento",$this->FechaVencimiento);
	$stm->bindparam(":Numero",$this->Numero);
	$stm->bindparam(":Conductor_idConductor",$this->Vehiculo_idVehiculo);

	$stm->execute();


}

    public function findBypk($id){
	$Conexion =$this->getConexion();
	$stm = $Conexion->prepare("SELECT *FROM Documento WHERE idDocumento = :id");
	$stm->setFetchMode(PDO::FETCH_INTO,$this);

	$stm->bindParam(":id",$id);
	$stm-> execute();
	$stm->fetch();
}

    public function delete($id){
	$Conexion =$this->getConexion();
	$stm = $Conexion->prepare("DELETE FROM Documento WHERE idDocumento = :id");
	$stm->bindParam(":id",$id);
	$stm->execute();

}

	public function admin(){
	$conexion = $this->getConexion();
	$stm =$conexion->prepare("SELECT * FROM Documento");
	$stm->setFetchMode(PDO::FETCH_CLASS,'Documento');
	$Vehiculo = array();	
	$stm->execute();

			
			while ($obj = $stm->fetch()) {
			$Documento[]=$obj;
	}
			
			return $Documento;

}
}



?>
