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
                $query = "SELECT * FROM actividades WHERE RFC = :username AND concat(RFC,'x') = :password";  
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
				$_SESSION["rfc"] = $_POST["username"]; 
                     header("location:index_maestro.php"); 
                    
                }  
                else  
                {  
                     $message = '<label>Usuario o Password incorrectos </label>';  
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
      </head>  
      <body>  
      
     <header class="text-center"> 
 <img src="img/encabezado.jpg" class="img-fluid" 
 class="img-rounded" id="encabezado"/>
 </header>
 <hr/>
           <div class="container w-25"   >  
                
                  
                <form method="post">  
                     <label>Usuario</label>  
                     <input type="text" name="username" class="form-control" />  
                     
                     <label>Password</label>  
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