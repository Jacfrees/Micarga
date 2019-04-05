<?php
require_once("Conexion.php");

require_once ("Modelos/Conductor.php");


class Vehiculo extends Conexion{

	Public $idVehiculo;
	public $PlacaCabezote;
	Public $Modelo;
	public $Color;
	public $PlacaRemolque;
	public $CapacidadTanque;
	public $Seccional;
	public $Conductor_idConductor;
	Public $Propietario_idPropietario;
	

	public function __construct(){
	parent::__construct();
}

public function save($pc,$m,$c,$pr,$ct,$sec,$idc,$idp){

	$this->PlacaCabezote=$pc;
	$this->Modelo=$m;
	$this->Color=$c;
	$this->PlacaRemolque=$pr;
	$this->CapacidadTanque=$ct;
	$this->Seccional=$sec;
	$this->Conductor_idConductor=$idc;
	$this->Propietario_idPropietario=$idp;
	

	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("INSERT INTO Vehiculo VALUES (:idVehiculo, :PlacaCabezote, :Modelo, :Color, :PlacaRemolque, :CapacidadTanque , :Seccional, :Conductor_idConductor, :Propietario_idPropietario)");
	
	try{
			return $stm->execute((array)$this);
			return true;

	}catch(Exception $e){
		return false;
	}

	}
	

    public function update (){
	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("UPDATE Vehiculo SET PlacaCabezote=:PlacaCabezote, Modelo=:Modelo, Color=:Color, PlacaRemolque=:PlacaRemolque, CapacidadTanque=:CapacidadTanque, Seccional=:Seccional, Conductor_idConductor=:Conductor_idConductor, Propietario_idPropietario=:Propietario_idPropietario WHERE idVehiculo=:id");

	$stm->bindparam(":PlacaCabezote",$this->PlacaCabezote);
	$stm->bindparam(":Modelo",$this->Modelo);
	$stm->bindparam(":Color",$this->Color);
	$stm->bindparam(":PlacaRemolque",$this->PlacaRemolque);
	$stm->bindparam(":CapacidadTanque",$this->CapacidadTanque);
	$stm->bindparam(":Seccional",$this->Seccional);
	$stm->bindparam(":Conductor_idConductor",$this->Conductor_idConductor);
	$stm->bindparam(":Propietario_idPropietario",$this->Propietario_idPropietario);
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
	public function idPro($id){
	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("SELECT * FROM Propietario inner join Vehiculo 
		on propietario.idPropietario = Vehiculo.Propietario_idPropietario =:id");
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
	$stm =$conexion->prepare("SELECT * FROM Vehiculo");
	$stm->setFetchMode(PDO::FETCH_CLASS,'Vehiculo');
	$Vehiculo = array();	
	$stm->execute();

			
			while ($obj = $stm->fetch()) {
				$cond = new Conductor();
				$cond->findBypk($obj->Conductor_idConductor );
				$obj->Conduc = $cond;  

				$pop = new Propietario();
				$pop->findBypk($obj->Propietario_idPropietario );
				$obj->pp = $pop; 
			$Vehiculo[]=$obj;
	}
			
			return $Vehiculo;

}
	
}

?>