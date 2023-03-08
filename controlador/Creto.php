<?php
include "../modelo/Mmodelo.php";
class Controlador{

	public function __construct(){
		
		if ($_POST["submit"]="alta" and !empty($_POST["submit"])){
			$this->insertarReto();
		}
	
	}
	public function insertarReto(){
		
		$this->objReto = new Modelo();
		$resultado=$this->objReto->insertarReto($_POST);
		if($resultado == "repetido"){
			$_GET["repetido"]=$resultado;
		}
		if($resultado == "ajena"){
			$_GET["ajena"]=$resultado;
		}
		if($resultado == "valido"){
			$_GET["valido"]=$resultado;
		}
		include_once "../vistas/alta_reto.php";
	}
	
}
$controlador = new Controlador();
