<?php
require_once("Conexion.php");

require_once "Modelos/Conductor.php";
class Curso extends Conexion{

	Public $idCurso;
	public $Nombre;
	Public $FechaInicio;
	public $FechaVencimiento;
	public $Conductor_idConductor;

	public function __construct(){
	parent::__construct();
}

public function save($nom,$fein,$feve,$idc){

	$this->Nombre=$nom;
	$this->FechaInicio=$fein;
	$this->FechaVencimiento=$feve;
	$this->Conductor_idConductor=$idc;

	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("INSERT INTO Curso VALUES (:idCurso, :Nombre, :FechaInicio, :FechaVencimiento, :Conductor_idConductor)");
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

	$stm = $Conexion->prepare("UPDATE Curso SET Nombre=:Nombre, FechaInicio=:FechaInicio, FechaVencimiento=:FechaVencimiento, Conductor_idConductor=:Conductor_idConductor  WHERE idCurso= :id");

	$stm->bindparam(":Nombre",$this->Nombre);
	$stm->bindparam(":FechaInicio",$this->FechaInicio);
	$stm->bindparam(":FechaVencimiento",$this->FechaVencimiento);
	$stm->bindparam(":Conductor_idConductor",$this->Conductor_idConductor);
	$stm->bindparam(":id",$this->idCurso);
    $stm->execute();
}

public function findBypk($id){
	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("SELECT *FROM Curso WHERE idCurso = :id");
	$stm->setFetchMode(PDO::FETCH_INTO,$this);

	$stm->bindParam(":id",$id);
	$stm-> execute();
	$stm->fetch();
}

public function delete($id){
			$Conexion =$this->getConexion();
			$stm = $Conexion->prepare("DELETE  FROM Curso WHERE idCurso = :id");
			$stm->bindParam(":id",$id);
			$stm->execute();

}

	public function admin(){
		$conexion = $this->getConexion();
		$stm =$conexion->prepare("SELECT * FROM Curso ");
		$stm->setFetchMode(PDO::FETCH_CLASS,'Curso');
		$Curso = array();	
		$stm->execute();

			
			while ($obj = $stm->fetch()) {

				$cond = new Conductor();
				$cond->findBypk($obj->Conductor_idConductor );
				$obj->Conduc = $cond;  	
				$Curso[]=$obj;
			}
			
			return $Curso;
}

  
}

?>
