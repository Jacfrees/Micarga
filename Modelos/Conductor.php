<?php
require_once("Conexion.php");


class Conductor extends Conexion{

	Public $idConductor;
	public $Nombre;
	Public $Cedula;
	public $NumCelular;
	public $LicConduccion;
	public $VenLicencia;

	public function __construct(){
	parent::__construct();
}

public function save($nom,$ced,$numcel,$lc,$vl){

	$this->Nombre=$nom;
	$this->Cedula=$ced;
	$this->NumCelular=$numcel;
	$this->LicConduccion=$lc;
	$this->VenLicencia=$vl;

	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("INSERT INTO Conductor VALUES (:idConductor, :Nombre, :Cedula, :NumCelular, :LicConduccion, :VenLicencia)");
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

	$stm = $Conexion->prepare("UPDATE Conductor SET Nombre=:Nombre, Cedula=:Cedula, NumCelular=:NumCelular, LicConduccion=:LicConduccion, VenLicencia=:VenLicencia WHERE idConductor= :id");

	$stm->bindparam(":Nombre",$this->Nombre);
	$stm->bindparam(":Cedula",$this->Cedula);
	$stm->bindparam(":NumCelular",$this->NumCelular);
	$stm->bindparam(":LicConduccion",$this->LicConduccion);
	$stm->bindparam(":VenLicencia",$this->VenLicencia);
	$stm->bindparam(":id",$this->idConductor);

		$stm->execute();


}

public function findBypk($id){
	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("SELECT *FROM Conductor WHERE idConductor = :id");
	$stm->setFetchMode(PDO::FETCH_INTO,$this);

	$stm->bindParam(":id",$id);
	$stm-> execute();
	$stm->fetch();
}

public function idVeh($id){
	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("SELECT *FROM Conductor inner join Vehiculo 
		on Conductor.idConductor = Vehiculo.Conductor_idConductor =:id");
	$stm->setFetchMode(PDO::FETCH_INTO,$this);

	$stm->bindParam(":id",$id);
	$stm-> execute();
	$stm->fetch();
}


public function delete($id){
			$Conexion =$this->getConexion();
			$stm = $Conexion->prepare("DELETE  FROM Conductor WHERE idConductor = :id");
			$stm->bindParam(":id",$id);
			$stm->execute();

}

	public function admin(){
		$conexion = $this->getConexion();
		$stm =$conexion->prepare("SELECT * FROM Conductor ");
		$stm->setFetchMode(PDO::FETCH_CLASS,'Conductor');
		$ms = array();	
		$stm->execute();

			
			while ($obj = $stm->fetch()) {

				$ms[]=$obj;
			}
			
			return $ms;


}
}



?>