<?php
class Modelo{
	public function __construct(){
		require "../conexion/conexion.php";
		//$this->conexion = new mysqli("localhost", "root", "", "paginaretos");
	}

	public function insertarReto($array){
		//Vaciamos variables para poder añadir nulls en la base de datos, si no da un error
		$nombre="";$dirigido="";$descripcion="";$fechaFinIns="";$fechaInicioIns="";$fechaInicioRet="";$fechaFinRet="";$fechaPublicacion="";
		$idProfesor="";$idCategoria="";$publicado=false;

		if(empty($array["nombre"])){$nombre=null;}else{$nombre=$array["nombre"];}
		if(empty($array["dirigido"])){$dirigido=null;}else{$dirigido=$array["dirigido"];}
		if(empty($array["descripcion"])){$descripcion=null;}else{$descripcion=$array["descripcion"];}
		if(empty($array["fechaFinInscripcion"])){$fechaFinIns=null;}else{$fechaFinIns=$array["fechaFinInscripcion"];}
		if(empty($array["fechaInicioInscripcion"])){$fechaInicioIns=null;}else{$fechaInicioIns=$array["fechaInicioInscripcion"];}
		if(empty($array["fechaInicioReto"])){$fechaInicioRet=null;}else{$fechaInicioRet=$array["fechaInicioReto"];}
		if(empty($array["fechaFinReto"])){$fechaFinRet=null;}else{$fechaFinRet=$array["fechaFinReto"];}
		if(empty($array["fechaPublicacion"])){$fechaPublicacion=null;}else{$fechaPublicacion=$array["fechaPublicacion"];}
		if(empty($array["publicado"])){$publicado=null;}else{$publicado=$array["publicado"];}
		if(empty($array["idProfesor"])){$idProfesor=null;}else{$idProfesor=$array["idProfesor"];}
		if(empty($array["idCategoria"])){$idCategoria=null;}else{$idCategoria=$array["idCategoria"];}
		
		//Primero creamos la consulta por separado
		$sql="INSERT INTO retos (nombre,dirigido,descripcion,fechaFinInscripcion,fechaInicioInscripcion,fechaInicioReto,fechaFinReto,fechaPublicacion,publicado,idProfesor,idCategoria)
		values(?,?,?,?,?,?,?,?,?,?,?)";
		$sentencia = $this->conexion->prepare($sql);	
		$sentencia->bind_param('ssssssssiii', $nombre, $dirigido, $descripcion, $fechaFinIns, $fechaInicioIns, $fechaInicioRet, $fechaFinRet, $fechaPublicacion, $publicado, $idProfesor, $idCategoria);
		try {
			$resultado = $sentencia->execute();
			return "valido";
		}
		catch(Exception $error){
			$error=$this->conexion->errno;
			$error2=$this->conexion->error;	echo $error;
			echo $error2;
			if ($error == 1062){
				return "repetido";
			}
			if ($error == 1452){
				return "ajena";
			}
			
		}
	
	
	
	}
}