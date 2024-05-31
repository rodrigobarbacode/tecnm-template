<?php 
include("../funciones/login.php");
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""> 
    <title>Datos Grupos
 <?php
  if(isset($_SESSION['k_se'])) {
      echo $user = $_SESSION['k_se'];
    }else {
      header("Location: index.php"); 
      exit; 
    } 
?>
<?php
if(isset($_SESSION["k_idu"])) {
      echo $nom = $_SESSION["k_idu"];
 }
?></title>

    <link rel='stylesheet' href='css/e/normalize.css'>
    <link rel="stylesheet" type="text/css" href="css/e/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/e/bootstrap-datetimepicker.css">
    <link href="css/registro.css" rel="stylesheet">
    <link href="css/principal.css" rel="stylesheet">
    <link rel="stylesheet" href="css/e/bootstrap-theme.min.css">
    <link href="css/font/css/font-awesome.css" rel="stylesheet" media="screen"> 
    <link href="css/triangulos.css" rel="stylesheet"> 

    <script src="css/e/jquery-ui.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src="css/e/bootstrap-datetimepicker.js"></script>
    <script src='css/e/angular.min.js'></script>
    <script src="css/e/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.6.min.js"></script>
    
<style type="text/css">
 hr {
    background: #E38D13 none repeat scroll 0% 0%;
    height: 5px;
    border: medium none;
    margin-bottom: 20px;
}
* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
body {
  font-family: arial, helvetica, sans-serif;
}
hr.hr2 { 
   border: 2px solid #168CCC; 
   border-radius: 300px ; 
   height: 0px; 
   text-align: center;
   width: 80%; 
 }
.modaltext{
  color: #7E7D76;
}
.myBackground{
  position: inherit;
  display: inline-table;
  border-radius: 5px;
  box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.3);
  padding: 7px;
  text-align: center;
  box-sizing: border-box;
  text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.4);
  transition: box-shadow 0.3s ease 0s;
  }
  .myBackground2{
  position: inherit;
  display: inline-table;
  border-radius: 5px;
  box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.3);
  padding: 7px;
  text-align: center;
  box-sizing: border-box;
  text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.4);
  transition: box-shadow 0.3s ease 0s;
  width: 100%;
  height: 100px;
  }
.wrap {
  margin: auto;
  max-width: 800px;
  width: 90%;
}
.principal {
  color: #fff;
  padding: 50px 0;
  width: 100%;
}
.principal .formulario {
  color: #212121;
  text-align: center;
}
.principal .formulario input[type=text] {
  margin-bottom: 20px;
  padding: 10px;
  width: 100%;
}
.principal .formulario input[type=text].error {
  border: 5px solid #D32F2F;
  color: red;
}
.principal .formulario .boton {
  background: none;
  border: 1px solid #D32F2F;
  color: #fff;
  display: inline-block;
  font-size: 16px;
  padding: 15px;
}
.principal .formulario .boton:hover {
  border: 1px solid #fff;
}
.tareas .lista {
  list-style: none;
}
.tareas .lista li {
  border-bottom: 1px solid #B6B6B6;
}
.tareas .lista li a {
  color: #FFF;
  display: block;
  padding: 20px 0;
  text-decoration: none;
}
.tareas .lista li a:hover {
  text-decoration: line-through;
}
    </style>
  <body>
    <!-- Navigation -->
<nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" class="glow" ><label class="glow">CLV</label></a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapsible">
      <ul class="nav navbar-nav navbar-left">
      <li><a href="index.php">Inicio</a></li>
        <li><a href="biblioteca.php">Biblioteca</a></li>
         <li><a href="#section2">Datos de Grupo</a></li>
         <li><a href="#section5">Temas</a></li>
        <?php 

if(isset($_SESSION['k_id'])){
  $id   = $_SESSION['k_id'];
      if ($id == 1) {
       echo '<li><a href="nuevo.php">Panel de Administracion</a></li>';
      }

}
?>
        <li>&nbsp;</li>
      </ul>
      <form class="navbar-form">
        <div class="form-group" style="display:inline;">
          <div class="input-group"> 
            <div class="input-group-btn">
            </div>
             
<?php 
if(!isset($_SESSION['k_se'])){
echo '<button type="button" class="btn btn-warning "  data-toggle="modal" data-target=".accesoUsuarios">  <span class="glyphicon glyphicon-user"></span> Acceder</button>';

}else{
    echo '<div class="btn-group">
  <button type="button" class="btn btn-warning">'.$user.'</button>
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="biblioteca.php">Biblioteca</a></li>
    <li><a href="http://www.itmexicali.edu.mx/">ITM</a></li>
    <li><a href="http://www.itmexicali.edu.mx/">Centro de Informacion</a></li>
    <li class="divider"></li>
    <li><a href="index.php?cierra=1" id="cierraSesion">Cerrar Sesion</a></li>
  </ul>
</div>';
}
?>
          </div>
        </div>
      </form>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<section class="container-fluid " id="section2">    
<div class="container">
           <div class="jumbotron myBackground blurred-bg tinted glow">
     <h2 class="whitney glow">Datos de Grupos</h2><hr>
      <h4>Aqui podras encontrar toda la informacion correspondiente a los grupos de lectura disponibles en Instituto Tecnologico de Mexicali</h4>
    <p>
    <?php
  if(isset($_SESSION['k_idu'])) {
      $user = $_SESSION['k_idu'];
      $idgrupo = $_GET['url'];
$us = 'http://www.itmexicali.edu.mx/departamentos/cinformacion/CirculoLecturaVirtual/controller/grupoController.php?usuarioid='.$user.'&ugrupoid='.$idgrupo.''; 
$data = file_get_contents($us);
$decode=json_decode($data, true);
 
 if ($decode == 1) {
echo "datoss"; 
 echo '<a class="btn btn-info" data-toggle="modal" data-target="#myModal" role="button">Informacion</a> <button class="btn btn-warning" id="btn-registrate">Estas En Este Grupo</button></p>';
  echo $decode;
}else{
  echo '<a class="btn btn-info" data-toggle="modal" data-target="#myModal" role="button">Informacion</a> <button class="btn btn-warning" onClick=regitrargrupo() id="btn-registrate">Unirme a este grupo</button></p>';
}
} 
?> </div>
   </div>
<?php 
$identificador = $_GET['url'];

$url ='http://www.itmexicali.edu.mx/departamentos/cinformacion/CirculoLecturaVirtual/controller/grupoController.php?g='.$identificador.''; 
$data = file_get_contents($url);
$decode=json_decode($data, true);

?>

<script>
        $(document).ready(function(){

            LibrosCategorias("#section2");
});
    
     function LibrosCategorias(on) {

      var jsondatos = '<?php echo $url; ?>'; 
        $.getJSON(jsondatos, function(data) {
          
          var libro ="";
          var html  ="";
          
         var wi = $( window ).width();
          var max;
              if(wi<=1024){
               max=2;
                }else{ 
                max=4;
              }
           
            $.each(data, function(i, r) {
              var img;
           if(r.img==""){
               img = "img/cover.png";
           }else{
            img = "up/"+r.img;
           }

                      html='<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">'+
                           '<div class="modal-dialog" role="document">'+
                           '<div class="modal-content">'+
                           '<div class="modal-header">'+
                           '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                           '<h4 class="modal-title" id="myModalLabel">Datos de Grupo</h4>'+
                           '</div>'+
                           '<div class="modal-body">'+
                           '<b>Nombre de Grupo: </b>'+r.nombre+
                           '<br><b>Fecha de Creado: </b>'+r.creado+
                           '<br><b>Descripcion: </b>'+r.des+
                           '<br><b>Estado: </b>'+r.estado+
                           '<br><b>Limite: </b>'+r.limite+
                           '</div>'+
                           '<div class="modal-footer">'+
                           '<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>'+
                           '</div>'+
                           '</div>'+
                           '</div>'+
                           '</div>';
                        
                    $(on).append(html);
        });
        });
    }
</script>
</section>

<section class="container-fluid " id="section5" >
<center>
<div class="container-fluid">
<div class="jumbotron myBackground2 blurred-bg tinted glow">
<h2 class="whitney">Temas de Grupo</h2>
<hr></center>
</div>
</div>
<?php 
$identificador = $_GET['url'];

$urltema ='http://www.itmexicali.edu.mx/departamentos/cinformacion/CirculoLecturaVirtual/controller/grupoController.php?temas='.$identificador.''; 
 
 $data = file_get_contents($urltema);
 $decode=json_decode($data, true);
 ?>

<script>

  var x;

    $(document).ready(function(){

        temasgrupos("#section5");


    });
  
     function temasgrupos(on) {

      var jsondatos = '<?php echo $urltema; ?>'; 
        $.getJSON(jsondatos, function(data) {
          
          var html  ="";

           
            $.each(data, function(i, r) {
            
                html= '<br><div class="container-fluid">'+
                      '<div class="jumbotron myBackground2 blurred-bg tinted glow">'+
                      '<h3>'+r.nom+'</h3><hr>'+
                      '<div id="vermasdiv'+r.id+'" style="display:none"></div>'+
                      '<a id="'+r.id+'" onclick="vermas(this.id)">Ver Comentarios</a>'+
                      '<p><a type="button"  id="'+r.id+'" onclick="reply_click(this.id)" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-comment"></span> Comentar</a></p>'+
                      '</div>'+
                      '</div>';
                 $(on).append(html);

            });
            });
    }

    function reply_click(clicked_id){
     x=clicked_id;
    }

    function regitrargrupo () {
    var usuario='<?php if(isset($_SESSION["k_idu"])) { echo $nom = $_SESSION["k_idu"];
    }?>';
    var grupo='<?php $identificador = $_GET['url']; $url=$identificador;   echo $url;
    ?>';
    var estado=1;
    var data = 'usuario=' + usuario+'&grupo='+grupo + '&estado='+estado;

    $.ajax({
      type: "POST",
      url: "RegistrarGrupo.php",
      data: data,
      success: function() {

      alert("Gracias por Registrarte!");
        
        }
    });
    
    return false;
    }

    function myFunction(){
   
    var comentario = $("#message-text").val();
    var user= '<?php if(isset($_SESSION["k_idu"])) {echo $nom = $_SESSION["k_idu"];
    }?>';
    var tema=x;
  
    if (comentario == "") {
      
      $("#message-text").focus();
      return false;
    }
    var dataString = 'comentario=' + comentario+'&user='+user + '&idtema='+tema;

    $.ajax({
      type: "POST",
      url: "RegistraComentario.php",
      data: dataString,
      success: function() {

            $('#modalsuccess').html('<div id="modalsuccess2"class="alert alert-success" role="alert"><center>Gracias por tus Comentarios!</center> </div>').hide()
            .fadeIn(1700,function() {
         var tareaInput = document.getElementById("message-text");
         tareaInput.value='';
          $('#modalsuccess2').html("").hide().fadeOut(1500);

        });
        }
        });
        return false;
        }

      runOnLoad(function(){
      $("#message-text").select().focus();
        });
</script>
    
<script type="text/javascript">
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever')
  var modal = $(this)
});
</script>
 
<div id="textotema"></div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modaltext" >Comenta tema</h4>
      </div>

      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="message-text" class="control-label">Contenido:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer" >
      <div id="modalsuccess"></div>
        <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="myFunction()" class="btn btn-warning">Enviar Comentar</button>
      </div>
    </div>
  </div>
</div>

<div id="textotexto"><!-- 
<?php
$con = mysql_connect('localhost', 'biblioteca', 'biblioteca2015');
mysql_select_db("circulo", $con);
$sql    = mysql_query("SELECT * FROM cv_Comentario",$con);

while($row = mysql_fetch_array($sql)){

echo '<h4>'.$row['Comentario'].'</h4>';
}

?>
 --></div>
    
        
    <script type="text/javascript">
    var y;
        function vermas(id) {
        var eldiv =document.getElementById("vermasdiv"+id);
        eldiv.style.display="block";
        y=id;

       cargarDiv("#vermasdiv"+id,"Comentarios.php?comentariosidtema="+y+"");

        }
      function cargarDiv(div,url){
          $(div).load(url);
    }
        </script>
<div id="hola"></div>
</section>
</body>
</html>
