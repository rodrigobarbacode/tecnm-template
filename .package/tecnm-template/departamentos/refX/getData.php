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
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 
 
	$sql = "SELECT * from nuevoingreso WHERE ALU_CTR = '".$nc."'";
 //echo $sql;
	  $stmt = $conn->query($sql);	 
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
 
		switch($row['STATUS'])
   {
case 'A':
		?>
        <div class="container">
                <div class="container">
        <?php
		
           echo "<br /> CONVENIO SANTANDER 2092<b>";		
		    echo "<br /> N&uacute;mero de Solicitud: <b>" .  $row['ALU_CTR'] . "</b>" ;
            echo "<br /> Nombre del Aspirante: <b>" .  $row['ALU_NOM'] . "</b>";
            echo "<br /> Concepto: <b>" . $row['ALU_CONCEPTO'] . "</b>";
			echo "<br /> Carrera: <b>" . $row['ALU_CARRERA'] . "</b>";
            echo "<br /> Monto: <b> $" . $row['ALU_MONTO'] . ".00</b>";
            echo "<br /> Fecha de pago: <b>" . $row['ALU_PERIODO'] . "</b>";
            $condensacioncita=$factura.$row['CLAVE_PAGO'];
            $linea = mod22($row['ALU_CTR'],$condensacioncita,$row['ALU_MONTO']);
             echo "  <br /><b>Linea:<div  id='lineaPHP'>".$linea . "</div></b> ";
			echo "<br /> </b>";		
			echo "<br /> </b>";	
			echo "<br /> </b>";				
			echo "<br /> Hora de tu inscripción en Biblioteca Planta Alta con todos tus documentos: 15 ENERO 2020 <b>" . $row['ALU_INSCRIBE'] . "</b>";
		
			?>
     </h4>
	 	 <br></br>
		   <h3><strong>Linea Referenciada Codigo Barra, puedes pagar en banco, cajeros automáticos santander </strong></h3>
		   <h3><strong>NO PAGES EN OXXO!!!</strong></h3>
        <img style="max-width:350px" alt="The Real David Tufts" src="code/barcode.php?text=<?php echo $linea;?>&size=40" />
    
        </div>
        
        <h2 class="container text-center"><strong>AVISO</strong></h2>
      </div>
      <div class="container text-center">
        <h3><strong>No. DE CONVENIO 2092</strong></h3>
        <h3> <strong>BANCO SANTANDER</strong></h3>
<div class="text-left">

<h4> 
</h4>
</div>

<h3 class="text-center"><strong>
* *  IMPORTANTE  * *</strong></h3>

<h3 class="text-center"><strong>
* *</strong></h3>
<div class="text-left">
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
	
	
	case 'X':
	  ?>
        <div class="container">
                <div class="container">
        <?php
		
           echo "<br /> CONVENIO SANTANDER 2092<b>";	
echo "<br /> </b>";
echo "<br /> </b>";		   
		    echo "<br /> No eres aspirante aceptado, verifica tu situación en Desarrollo Académico o teclea ien tu número de ficha";
						echo "<br /> </b>";
			echo "<br /> </b>";
		  
			?>
     </h4>
	 	 <br></br>
		   
           
        </div>
        
        <h2 class="container text-center"><strong>AVISO</strong></h2>
      </div>
      <div class="container text-center">
        <h3><strong>No. DE CONVENIO 2092</strong></h3>
        <h3> <strong>BANCO SANTANDER</strong></h3>
<div class="text-left">
<h4>**Vigencia: 21 al 22 agosto 2019</h4>

<h4> 
</h4>
</div>

<h3 class="text-center"><strong>
* *  IMPORTANTE  * *</strong></h3>

<h3 class="text-center"><strong>
* *</strong></h3>
<div class="text-left">
<h4>
**Alumnos que requieren FACTURA del servicio(R.F.C.).</h4>
<h4>
Si requieren FACTURA por el servicio que se está pagando en necesario que acuda  al Departamento de Recursos Financieros en el área de ventanilla el MISMO DÍA en el que se está llevando a cabo el pago presentando:
-Ficha de depósito banco, RFC y/o Cédula de identificación fiscal (SAT-Hacienda), Correo electrónico para su envío, No de Cuenta Banco, en caso de ser por medio de cheque y/o transferencia electrónica.
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
	  echo "<br /> <font size=\"4\"><b>Teclea tu número de control correctamente."."</b></font>";	
	  echo "<br /> <font color=RED> Si tuviste cambio de carrera, quita la C para generar tu ficha<b> " . ".</b></font>";
	  echo "<br /> <font size=\"3\"><b>ó Verifica tu situación en el SGE"."</b></font>";	
	}	
		
		
}
 

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
} 
$conn = null;


}
?>
