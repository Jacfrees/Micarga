<?php
require_once("Conexion.php");


class Usuario extends Conexion{

	Public $idUsuario;
	public $Nombre;
	Public $Documento;
	public $Telefono;
	public $Perfil;
	public $Password;

	public function __construct(){
	parent::__construct();
}

public function save($nom,$doc,$tel,$per,$pass){

	$this->Nombre=$nom;
	$this->Documento=$doc;
	$this->Telefono=$tel;
	$this->Perfil=$per;
	$this->Password=$pass;

	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("INSERT INTO Usuario VALUES (:idUsuario, :Nombre, :Documento, :Telefono, :Perfil, :Password)");
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

	$stm = $Conexion->prepare("UPDATE Usuario SET Nombre=:Nombre, Documento=:Documento, Telefono=:Telefono, Perfil=:Perfil, Password=:Password WHERE idUsuario= :id");

	$stm->bindparam(":Nombre",$this->Nombre);
	$stm->bindparam(":Documento",$this->Documento);
	$stm->bindparam(":Telefono",$this->Telefono);
	$stm->bindparam(":Perfil",$this->Perfil);
	$stm->bindparam(":Password",$this->Password);
	$stm->bindparam(":id",$this->idUsuario);

		$stm->execute();


}

public function findBypk($id){
	$Conexion = $this->getConexion();
	$stm = $Conexion->prepare("SELECT *FROM Usuario WHERE idUsuario = :id");
	$stm->setFetchMode(PDO::FETCH_INTO,$this);

	$stm->bindParam(":id",$id);
	$stm-> execute();
	$stm->fetch();
}

public function findByDocument($doc){
		$conexion = $this->getConexion();
		$stm = $conexion->prepare("SELECT * FROM Usuario WHERE Documento = :doc");
		$stm ->setFetchMode(PDO::FETCH_INTO,$this);

		$stm->bindParam(":doc",$doc);
		$stm-> execute();
		$stm->fetch();
}

public function delete($id){
			$Conexion =$this->getConexion();
			$stm = $Conexion->prepare("DELETE  FROM Usuario WHERE idUsuario = :id");
			$stm->bindParam(":id",$id);
			$stm->execute();

}

	public function admin(){
		$conexion = $this->getConexion();
		$stm =$conexion->prepare("SELECT * FROM Usuario ");
		$stm->setFetchMode(PDO::FETCH_CLASS,'Usuario');
		$usua = array();	
		$stm->execute();

			
			while ($obj = $stm->fetch()) {
				$usua[]=$obj;
			}
			
			return $usua;

}
		public function view($id) { 
            $Conexion =$this->getConexion(); 
			$stm = $Conexion->prepare("SELECT * FROM Usuario WHERE Documento = :id or Nombre = :id or Telefono = :id or Perfil = :id "); 
            $stm->bindParam(":id", $id); 
			$stm->setFetchMode(PDO::FETCH_CLASS,'Usuario'); 
 
			$Usuario = array(); 
			$stm->execute(); 
 
			while ($obj = $stm->fetch()) { 
				$Usuario[]=$obj; 
			} 
			return $Usuario; 
                
		}
		

}

?>