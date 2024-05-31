<?php
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
 	 
function getData($nc,$conc,$factura=0)
{
	include("inc/mod22.php");
	
	
	try{
		$servername = "localhost";
$username = "itm";
$password = "Parh1kun1";
$dbname = "santander";
$conni = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$conni->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 
	$sql = "SELECT * FROM nuevoingreso WHERE ALU_CTR = '".$nc."'";
 echo $sql;
	  $stmt = $conni->query($sql);	 
$row = $stmt->fetch(PDO::FETCH_ASSOC);
 
 
	 $servername = "localhost";
$username = "root";
$password = "Tzuput4r0";
$dbname = "pagosbanco_new";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
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
	case 'A':
		?>
        <div class="container">
                <div class="container">
        <?php
		
           echo "<br /> CONVENIO SANTANDER 2092<b>";		
		    echo "<br /> N&uacute;mero de Ficha: <b>" .  $row['ALU_CTR'] . "</b>" ;
            echo "<br /> Nombre del aspirante: <b>" .  $row['ALU_NOM'] . "</b>";
            echo "<br /> Concepto: <b>" . $row2['CONC_NOM'] . "</b>";
            echo "<br /> Monto: <b> $" . $row2['CONC_MONTO'] . ".00</b>";
            echo "<br /> Fecha de Pago: 21 Diciembre 2019";
            $condensacioncita=$factura.$conc;
            $linea = mod22($res['ALU_CTR'],$condensacioncita,$res1['CONC_MONTO']);
            echo "<br/><font size=\"5\"><b>Linea :".$linea . "</b></font>";
			echo "<br /> </b>";
			echo "<br /> <font color=BLUE>Carrera: : <b> " . $res['ALU_OBS'] . ".</b></font>";

			echo "<br /> <font color=RED>Tu fecha de inscripción en Biblioteca con toda la documentación indicada en las instrucciones es el día : <b> " . $res['ALU_INSCRIBE'] . ".</b></font>";
			
			
			
		    
			?>
     </h4>
	 	 <br></br>
		   <h3><strong>Linea Referenciada Codigo Barra</strong></h3>
        <img style="max-width:350px" alt="The Real David Tufts" src="code/barcode.php?text=<?php echo $linea;?>&size=40" />
    
        </div>
        
        <h2 class="container text-center"><strong>AVISO</strong></h2>
      </div>
      <div class="container text-center">
        <h3><strong>No. DE CONVENIO 2092</strong></h3>
        <h3> <strong>BANCO SANTANDER</strong></h3>
<div class="text-left">
<h4>**Vigencia:  Del 08 al 10 de Enero de 2020</h4>

<h4> 
</h4>
</div>

<h3 class="text-center"><strong>
* *  IMPORTANTE  * *</strong></h3>

<h3 class="text-center"><strong>
* *   * *</strong></h3>
<div class="text-left">
<h4>
**Alumnos que requieren FACTURA del servicio(R.F.C.).</h4>
<h4>
**Pagarán en el banco y deberán presentar <strong>el mismo día</strong> en el departamento de Recursos Financieros la ficha de depósito azul, junto con la cedula de identificación fiscal y un Correo Electrónico para su envió.
</h4>
 
<h4>
**Si haces caso omiso a las instrucciones y pagas la reinscripción, será tu responsabilidad, por lo que el Instituto Tecnológico de Mexicali no se hace responsable de hacer válida tu inscripción, ni de la devolución del dinero.
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
	  echo "<br /> <font size=\"4\"><b>Teclea tu número de ficha correctamente"."</b></font>";	
	  echo "<br /> <font size=\"3\"><b>No puedes descargar tu línea de pago, verifica si eres aspirante aceptado"."</b></font>";	
	  
	}	
		
		
}
 

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
$conni = null;



}
?>
