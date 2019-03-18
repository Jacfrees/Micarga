<?php
require_once("Conexion.php");

require_once "Modelos/Vehiculo.php";


class Documento extends Conexion{

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
	$stm->bindparam(":Vehiculo_idVehiculo",$this->Vehiculo_idVehiculo);
	$stm->bindparam(":id",$this->idDocumento);

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

				$vehic = new Vehiculo();
				$vehic->findBypk($obj->Vehiculo_idVehiculo);
				$obj->vehi = $vehic;
			$Documento[]=$obj;
	}
			
			return $Documento;

}

	public function view($Id) { 
            $Conexion =$this->getConexion(); 
			$stm = $Conexion->prepare("SELECT * FROM Documento WHERE Numero = :id"); 
            $stm->bindParam(":id", $id); 
			$stm->setFetchMode(PDO::FETCH_CLASS,'Documento'); 
 
			$Usuario = array(); 
			$stm->execute(); 
 
			while ($obj = $stm->fetch()) { 
				$Documento[]=$obj; 
			} 
			return $Documento; 
                
		}

}

?>
