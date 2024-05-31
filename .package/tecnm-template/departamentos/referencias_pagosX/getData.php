<?php
include'php/conexion.php';
/*
 *      getData.php
 *      
 *      Copyright 2012  <>
 *      
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 2 of the License, or
 *      (at your option) any later version.
 *      
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *      
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 *      
 *      
 */
 
 	
    function getData($nc,$conc,$factura=0,$monto)
 { 
	  echo $nc.$conc.$factura.$monto;
	 /* $nc='05490519';
	 $conc='105';
	 $factura=0;
	 $monto='1050';*/
	 
	include("inc/mod22.php");
	try{
	$sql = "SELECT ALU_CTR,ALU_NOM,STATUS FROM daluPagos WHERE ALU_CTR = '".$nc."'";
 echo $sql;
	  $stmt = $conn->query($sql);	 
$row = $stmt->fetch(PDO::FETCH_ASSOC);
 
 
	 
	
	if($monto>0){
	$sql="SELECT ".$monto." as CONC_MONTO, CONC_NOM FROM conceptos WHERE CONC_CVE = '$conc'";
	}
	else
	{
		$sql = "SELECT CONC_MONTO, CONC_NOM FROM conceptos WHERE CONC_CVE = '$conc'";
	
	}
	
	  
  $stmt2 = $conn->query($sql);
  $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
    
		switch($row['STATUS'])
   {
	case 'N':
		?>
        <div class="container">
                <div class="container">
        <?php
		
		echo " <h4>Numero de Control: <b>" .  $row['ALU_CTR'] . "</b></h4>" ;
		echo "  <h4>Nombre del Alumno: <b>" .  $row['ALU_NOM'] . "</b></h4>";
		echo "  <h4>Concepto: <b>" . $row2['CONC_NOM'] . "</b></h4>";
		echo "  <h4>Monto: <b> $" . $row2['CONC_MONTO'] . ".00</b></h4>";
		$condensacioncita=$factura.$conc;
        $linea = mod22($row['ALU_CTR'],$condensacioncita,$row2['CONC_MONTO']);
        
         echo " <h4><font size=\"5\"><b>Linea :<div  id='lineaPHP'>".$linea . "</div></b></font>";
        ?>
     </h4>
        <img style="max-width:350px" alt="The Real David Tufts" src="code/barcode.php?text=<?php echo $linea;?>&size=40" />
    
    
        </div>
        
        <h2 class="container text-center"><strong>AVISO</strong></h2>
      </div>
      <div class="container text-center">
        <h3><strong>No. De CONVENIO 2092 Banco SANTANDER</strong></h3>
       
<div class="text-left">


<h4><li>El comprobante de pago (Recibo Oficial) se envía al Correo Institucional (En caso de no contar con usuario y clave de acceso, acude al centro de cómputo para obtenerlos).
</li></h4>
</div>

<h3 class="text-center"><strong>
 IMPORTANTE  </strong></h3>
<div class="text-left">
<h4><li>
Si el pago del servicio se realizará con cheque,  elaborarlo a nombre de:
<b>TECNM/INSTITUTO TECNOLOGICO DE MEXICALI</b></li></h4>
<h4><li>
Si requieren <b>FACTURA</b> por el servicio que se está pagando es necesario que acuda al Departamento de Recursos Financieros en el área de ventanilla el MISMO DIA en que se realiza el pago, presentando:
</li>
</h4>

<div class="row">
    <div class="col-md-5 col-md-offset-4">
<h4 >
<ul class="list-unstyled ">
  <li>&diams;&nbsp;Ficha de depósito banco (azul)</li>
<li>&diams;&nbsp;RFC y/o Cédula de identificación fiscal (SAT-Hacienda)</li>
<li>&diams;&nbsp;Correo electrónico para su envío</li>
</ul>
</h4></div>
</div>
 
<h4>
De no atender esta indicación, se expedirá Recibo Oficial a nombre de quien está solicitando el servicio, el Instituto Tecnológico de Mexicali por ningún motivo podrá Cancelar Facturas ni podrá hacer la devolución del dinero.
</h4>
</div>
<h3>
<strong>
Atentamente: Recursos Financieros. 
</strong>
</h3>
</div>
        
        <?php
	break;
	
      default:  
	  echo "<br /> <font size=\"5\"><b>Teclea tu numero de control correctamente"."</b></font>";	
	  echo "<br /> <font size=\"6\"><b>No puedes realizar ningún trámite, favor de pasar a Tesorería para aclaraciones"."</b></font>";	
	}	
		
		
//		$linea = mod22($res['ALU_CTR'],"00000000000000",$res1['CONC_MONTO']);  linea original
		//$lineafinal = substr($linea, 4);
		//$lineafinal = $factura . $conc . $lineafinal;
		//echo "<br/><font size=\"6\"><b>Linea :".$lineafinal . "</b></font>";
}
 

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
} 
$conn = null;


}
  ?>
