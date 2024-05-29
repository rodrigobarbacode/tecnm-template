<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "Tzuput4r0";  
 $database = "extraescolares";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>Todos los campos son necesarios</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM alumnos WHERE ALU_CTR = :username AND NIP = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"]; 
					 
					  $query = "SELECT * FROM actividades_alumno  WHERE id_alumno = :username";  
                $statement2 = $connect->prepare($query);  
                $statement2->execute(  
                     array(  
                          'username'     =>     $_POST["username"]   
                     )  
                );  
                $count2 = $statement2->rowCount();  
                if($count2 > 0)  
                {   
                     header("location:action_view.php");  
                }  
                else  
                {  
                    header("location:index_alu.php");  
                }   
                    
                }  
                else  
                {  
                     $message = '<label>No. de control o NIP incorrectos </label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Actividades Extraescolares</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  
  <style>
  .form {
    max-width: 25% !important;
  }
  @media screen and (max-width: 600px) {
  .form {
    max-width: 50% !important;
  }
}
</style>
      </head>  
      <body>  
       <header class="text-center"> 
 <img src="img/encabezado.jpg" class="img-fluid" 
 class="img-rounded" id="encabezado"/>
 </header>
 
<hr/>
           <div class="container form"   >  
                
                  
                <form method="post">  
                     <label>No. Control</label>  
                     <input type="text" name="username" class="form-control" placeholder="No. Control" />  
                     
                     <label>Password (Primeras 3 letras de tu apellido paterno, en minusculas, y los &uacute;ltimos 4 dígitos de tu n&uacute;mero de control)</small></label>  
                     <input type="password" name="password" class="form-control" />  
                      <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?> 
                     <div  class="text-right" style="padding-top:4px" >  
                     <input type="submit" name="login" class="btn btn-primary" value="Entrar" />  
                </div>
                </form>  
           </div>  
            
      </body>  
 </html>  