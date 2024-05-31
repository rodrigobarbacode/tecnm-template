<?php
	function sumadigital($n){
		return $n != 0? $n % 10 + sumadigital($n/10): 0;
	}
	
	function verificador($resultado){
		$resultado = str_split($resultado);
		$suma = 0;
		foreach($resultado as $digito){
			$suma = $suma + $digito;
		}
		return (10 - ($suma % 10)) % 10;
	}
	
	function linea($id,$factor='2121212121212121212',$fecha='20070807',$constante='015'){
		$referencia = str_split($id . $fecha . $constante);
		$factor = str_split($factor);
		$k = 0;
		$resultado = '';
		foreach($referencia as $digito){
			$resultado .= sumadigital($digito*$factor[$k++]);
		}
		return $id . $fecha . $constante . verificador($resultado);
	}
?>