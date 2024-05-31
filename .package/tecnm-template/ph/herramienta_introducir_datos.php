<?php
class Herramienta{
	private $conexion;

	function __construct(){
		require_once("conexion_privada.php");
		$this->conexion = new conexion();
		$this->conexion->conectar();
	}

	public function ingresar_datos($Po_php){
		$sql = " insert into lectura values (null, ?, now()) ";
		$stmt = $this->conexion->conexion->prepare($sql);

		$stmt->bindValue(1, $Po_php);
		

		if($stmt->execute()){
			echo "Ingreso Exitoso";
		}else{
			echo "no se pudo registrar dattttosssss";
		}
	}
}
?>