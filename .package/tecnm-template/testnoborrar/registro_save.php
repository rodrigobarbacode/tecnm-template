<html>
<head>

</head>
<body>

<?php

 require_once ('conexion.php');
 require_once('usuario_save.php');
  
  $registro=$_POST['registrar'];
  
  if($registro=='Registrar Estudiante')save_student();
  else if($registro=="Registrar Asesor")save_teacher();
  else save_judge();
  
  ?>
  <script>

   
   window.location = 'index.php';

 

	
</script>
  <?php

 //header("Location:index.html");
  
  function save_student(){
	 try	{
		 
		 $con=dbConnect();
 
 
 

 $name = $_POST["InputName"];
 $lastNameP = $_POST["InputApellidoP"];
 $lastNameM = $_POST["InputApellidoM"];
 $institute = $_POST["InputInstituciones"];
 $semester = $_POST["InputSemestre"];
 $average = $_POST["InputPromedio"];
 $email = $_POST["InputCorreo"];
 $phone = $_POST["InputTelefono"];
 $birthday_date = $_POST["InputNacimiento"];
 if(empty($_POST["InputTalla"])) $size = null;else $size=$_POST["InputTalla"];


if(validaCorreo("estudiantes",$email)== 0){
 
 $sentencia = $con->prepare("INSERT INTO estudiantes(nombre, apellido_paterno, apellido_materno, id_institucion, semestre,  promedio, correo, telefono, fecha_nacimiento, talla) VALUES(:name, :lastNameP, :lastNameM, :institute, :semester, :average,
 :email, :phone, :birthday_date, :size)");


 $sentencia->bindParam(":name", $name);
 $sentencia->bindParam(":lastNameP", $lastNameP);
 $sentencia->bindParam(":lastNameM", $lastNameM);
 $sentencia->bindParam(":institute", $institute);
 $sentencia->bindParam(":semester", $semester);
 $sentencia->bindParam(":average", $average);
 $sentencia->bindParam(":email", $email);
 $sentencia->bindParam(":phone", $phone);
 $sentencia->bindParam(":birthday_date", $birthday_date);
 $sentencia->bindParam(":size", $size);


 
 $sentencia->execute();
 
 $text=insert_usuarioStudent($email, $con->lastInsertId());
 
   echo "
		<script>alert('Registro exitoso ".$text."');</script>
		
		";
}
 
 

 
  $con = null; 
 
 }
  
catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String. 
    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
	
}



}

function save_teacher(){
	 try	{
		 
		 $con=dbConnect();
 
 
 

 $tittle = $_POST["InputTitulo"];
 $name = $_POST["InputName"];
 $lastNameP = $_POST["InputApellidoP"];
 $lastNameM = $_POST["InputApellidoM"];
 $institute = $_POST["InputInstituciones"];
 $email = $_POST["InputCorreo"];
 $phone = $_POST["InputTelefono"];


if(validaCorreo("asesores",$email)== 0){
 
 $sentencia = $con->prepare("INSERT INTO asesores(titulo, nombre, apellido_paterno, apellido_materno, id_institucion, correo, telefono) VALUES(:tittle, :name, :lastNameP, :lastNameM, :institute,:email, :phone)");

 $sentencia->bindParam(":tittle", $tittle);
 $sentencia->bindParam(":name", $name);
 $sentencia->bindParam(":lastNameP", $lastNameP);
 $sentencia->bindParam(":lastNameM", $lastNameM);
 $sentencia->bindParam(":institute", $institute);
 $sentencia->bindParam(":email", $email);
 $sentencia->bindParam(":phone", $phone);

 $sentencia->execute();
 $text=insert_usuarioTeacher($email, $con->lastInsertId());
 
   echo "
		<script>alert('Registro exitoso ".$text."');</script>
		
		";

}
 $con = null; 
 }
  
catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String. 
    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
	
}



}

function save_judge(){
	 try	{
		 
		 $con=dbConnect();
 
 
 

 $tittle = $_POST["InputTitulo"];
 $name = $_POST["InputName"];
 $lastNameP = $_POST["InputApellidoP"];
 $lastNameM = $_POST["InputApellidoM"];
 $institute = $_POST["InputInstituciones"];
 $email = $_POST["InputCorreo"];
 $phone = $_POST["InputTelefono"];


 if(validaCorreo("jurado",$email)== 0){
 $sentencia = $con->prepare("INSERT INTO jurado(titulo, nombre, apellido_paterno, apellido_materno, id_institucion, correo, telefono) VALUES(:tittle, :name, :lastNameP, :lastNameM, :institute,:email, :phone)");

 $sentencia->bindParam(":tittle", $tittle);
 $sentencia->bindParam(":name", $name);
 $sentencia->bindParam(":lastNameP", $lastNameP);
 $sentencia->bindParam(":lastNameM", $lastNameM);
 $sentencia->bindParam(":institute", $institute);
 $sentencia->bindParam(":email", $email);
 $sentencia->bindParam(":phone", $phone);

 $sentencia->execute();
 $text=insert_usuarioJudge($email, $con->lastInsertId());
 
   echo "
		<script>alert('Registro exitoso ".$text."');</script>
		
		";
 }
 $con = null;

 }
  
catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String. 
    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
	
}



}


function validaCorreo($type, $correo){

	$conn = dbConnect();
	 $flag=0;	

    // Create the query
    $sql = "select correo from ".$type." where correo='".$correo."'";
    // we have to tell the PDO that we are going to send values to the query
    $stmt = $conn->query($sql);
    // Extract the values from $stmt
    $rows = $stmt->rowCount();
	
	if ($rows>0) {
      $flag=1;
	  echo "
		<script>alert('Lo sentimos su registro no pudo proceder, el correo electronico ".$correo." ya se encuentra registrado.');</script>
		
		";
    }
	
	$conn=null;
	return $flag;
}


?>
</body>
</html>