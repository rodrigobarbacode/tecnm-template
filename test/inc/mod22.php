<?php
//este modulo es para los semestres normales   fecha año//mes//dia
	function mod22($id,$ref = '00000000000000',$importe,$fecha = '2020/12/30',$div = 10,$fijo = 1,$const = 2){							
		$ref = "$ref$id";
		$fc = mod22_fecha_condensada($fecha);
		$ic = mod22_importe_condensado($importe,$div);
		$verif = mod22_verificadores($ref,$fc,$ic,$fijo,$const);
		return "$ref$fc$ic$const$verif";
	}
	
	function mod22_fecha_condensada($date){
		list($year,$month,$day) = explode('/',$date);
		return 372*($year - 2009) + 31*($month - 1) + ($day - 1);
	}
	
	function mod22_importe_condensado($importe,$div){
		$importe = (int)(100*$importe);
		$importe = str_split(strrev($importe));
		$num = array(7,3,1);
		$suma = 0;
		foreach($importe as $d => $digito){
			$suma += $digito*$num[$d % 3];
		}
		return $suma % $div;
	}
	
	function mod22_verificadores($ref,$fc,$ic,$fijo,$const){
		$integrada = "$ref$fc$ic$const";
		$integrada = str_split(strrev($integrada));
		$num = array(11,13,17,19,23);
		$suma = 0;
		foreach($integrada as $d => $digito){
			$suma += $digito*$num[$d % 5];
		}
		$v = $suma % 97 + $fijo;
		return $v < 10 ? "0$v" : $v;
	}

?>
