<?php
	session_start();
	//$conn = new mysqli("localhost", "root", "Tzuput4r0", "tec40");
	$connect = new PDO("mysql:host=localhost;dbname=aoc", "root", "Tzuput4r0");

	if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
		header('location:index.php');
	}

$userActivo = $_SESSION['user'];
$sql="SELECT usuarios.id, usuarios.usuario, usuarios.fk_roles, usuarios.fk_departamentos, roles.rol, departamentos.departamento
FROM usuarios
INNER JOIN roles ON usuarios.fk_roles = roles.id
INNER JOIN departamentos ON usuarios.fk_departamentos = departamentos.id
WHERE usuarios.usuario = '".$userActivo."'";
$query=$connect->prepare($sql);
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$usuario = $row['id'];
$departamento = $row['fk_departamentos'];
$rol = $row['fk_roles'];
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Asignacion de Oficios y Comisiones</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <style>
   .modal-mask {
     position: fixed;
     z-index: 9998;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     background-color: rgba(0, 0, 0, .5);
     display: table;
     transition: opacity .3s ease;
   }

   .modal-wrapper {
     display: table-cell;
     vertical-align: middle;
   }
  </style>
 </head>
 <body>
  <div class="container" id="crudApp">
   <br />
   <h3 align="center">Asignacion de Oficios, Comisiones y Comisiones Internas</h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-6" align="right">
      <a href="logout.php" class="btn btn-primary"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
      </div>
     </div>
     <div class="row">
      <div class="col-md-6">
       <h3 class="panel-title">No. de Oficio | No. de Comision | No. de Comisiones Internas</h3>
      </div>
      <div class="col-md-6" align="right">
      <?php
          if($rol == 1){
            echo '
                <div class="row">
                  <div class="col-md-6" align="right">
                    <input type="button" class="btn btn-success btn-xs" @click="openModelAdminOficio" value="Asignar No. Oficio" />
                  </div>
                </div>';
            echo '<div class="row">
                    <div class="col-md-6" align="right">
                      <input type="button" class="btn btn-warning btn-xs" @click="openModelAdminComision" value="Asignar No. Comision" />
                    </div>
                  </div>';
	    echo '<div class="row">
                    <div class="col-md-6" align="right">
                      <input type="button" class="btn btn-danger btn-xs" @click="openModelAdminComisionInt" value="Asignar No. Comision Interna" />
                    </div>
                  </div>';
          }else{
          echo '
          <div class="row">
            <div class="col-md-6" align="right">
              <input type="button" class="btn btn-success btn-xs" @click="openModelOficio" value="Asignar No. Oficio" />
            </div>
          </div>';
          echo 
          '<div class="row">
              <div class="col-md-6" align="right">
                <input type="button" class="btn btn-warning btn-xs" @click="openModelComision" value="Asignar No. Comision" />
              </div>
            </div>';
	  echo 
          '<div class="row">
              <div class="col-md-6" align="right">
                <input type="button" class="btn btn-danger btn-xs" @click="openModelComisionInt" value="Asignar No. Comision Interna" />
              </div>
            </div>';
          }
        ?>       
      </div>
     </div>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th>Tipo</th> 
        <th>No.</th>
        <th>Fecha y Hora</th>
        <th>Dirigido</th>
        <th>Asunto</th>
        <th>Departamento</th>
        <th>Estatus</th>
        <?php
          if($rol == 1){
            echo '<th>Editar</th>
                  <th>Eliminar</th>';
          }
        ?>
       </tr>
       <tr v-for="row in allData">
        <td>{{ row.tipo }}</td> 
        <td>{{ row.folio }}</td>
        <td>{{ row.fecha }}</td>
        <td>{{ row.dirigido }}</td>
        <td>{{ row.asunto }}</td>
        <td>{{ row.fk_departamento }}</td>
        <td>{{ row.estatus }}</td>
        <?php
          if($rol == 1){
            echo '<td><button type="button" name="edit" class="btn btn-primary btn-xs edit" @click="fetchData(row.id)">Editar</button></td>
            <td><button type="button" name="delete" class="btn btn-danger btn-xs delete" @click="deleteData(row.id)">Eliminar</button></td>';
          }
        ?>
        
       </tr>
      </table>
     </div>
    </div>
   </div>
   <div v-if="myModel">
    <transition name="model">
     <div class="modal-mask">
      <div class="modal-wrapper">
       <div class="modal-dialog">
        <div class="modal-content">
         <div class="modal-header">
          <button type="button" class="close" @click="myModel=false"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{ dynamicTitle }}</h4>
         </div>
         <div class="modal-body">
          <div class="form-group">
           <label>Dirigido a:</label>
           <input type="text" class="form-control" v-model="dirigido" />
          </div>
          <div class="form-group">
           <label>Asunto:</label>
           <input type="text" class="form-control" v-model="asunto" />
          </div>
          <?php
          if($rol == 1){
            echo '
          <div class="form-group">
           <label>Departamento:</label>
           <select class="form-control input-lg" v-model="select_depto">
            <option value="">Selecciona Departamento</option>
            <option v-for="data in depto" :value="data.departamento">{{ data.departamento }}</option>
           </select>
          </div>';
          }
          ?>
          <br />
          <div align="center">
           <!--<input type="hidden" v-model="hiddenId" />-->
          <?php
           if($rol == 1){
            echo '<input type="button" class="btn btn-success btn-xs" v-model="actionButton" @click="submitDataAdmin" />';
           }else
           echo '<input type="button" class="btn btn-success btn-xs" v-model="actionButton" @click="submitData" />';
           ?>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </transition>
   </div>
  </div>
 </body>
</html>

<script>

var application = new Vue({
 el:'#crudApp',
 data:{
  allData:'',
  select_depto:'',
  depto:'',
  fk_usuario:'<?php echo $usuario?>',
  fk_departamentos:'<?php echo $departamento?>',
  fk_roles:'<?php echo $rol?>',
  myModel:false,
  actionButton:'Agregar',
  tipo:'',
  dynamicTitle:'No. Oficio | No. Comision | No. Comision Interna',
 },
 methods:{
  fetchAllData:function(){
    axios.post('action.php', {
    action:'fetchall',
   }).then(function(response){
    application.allData = response.data;
   });
  },
  openModelAdminOficio:function(){
   application.tipo = 'OFICIO';
   application.dirigido = '';
   application.asunto = '';
   application.actionButton = "Agregar";
   application.dynamicTitle = "Asignar No. Oficio";
   application.myModel = true;
   axios.post('action.php', {
     action:'getDeptoAdmin'
   }).then(function (response) {
    application.depto = response.data;
   })
  },
  openModelAdminComision:function(){
   application.tipo = 'COMISION';
   application.dirigido = '';
   application.asunto = '';
   application.actionButton = "Agregar";
   application.dynamicTitle = "Asignar No. Comision";
   application.myModel = true;
   axios.post('action.php', {
     action:'getDeptoAdmin',
   }).then(function (response) {
    application.depto = response.data;
   })
  },
  openModelAdminComisionInt:function(){
   application.tipo = 'COMISION INTERNA';
   application.dirigido = '';
   application.asunto = '';
   application.actionButton = "Agregar";
   application.dynamicTitle = "Asignar No. Comision Interna";
   application.myModel = true;
   axios.post('action.php', {
     action:'getDeptoAdmin',
   }).then(function (response) {
    application.depto = response.data;
   })
  },
  openModelOficio:function(){
   application.tipo = 'OFICIO';
   application.dirigido = '';
   application.asunto = '';
   application.actionButton = "Agregar";
   application.dynamicTitle = "Asignar No. Oficio";
   application.myModel = true;
   axios.post('action.php', {
     action:'getDepto',
     Depto : application.depto
   }).then(function (response) {
         
   })
  },
  openModelComision:function(){
   application.tipo = 'COMISION';
   application.dirigido = '';
   application.asunto = '';
   application.actionButton = "Agregar";
   application.dynamicTitle = "Asignar No. Comision";
   application.myModel = true;
   axios.post('action.php', {
     action:'getDepto',
     Depto : application.depto
   }).then(function (response) {
         
   })
  },
  openModelComisionInt:function(){
   application.tipo = 'COMISION INTERNA';
   application.dirigido = '';
   application.asunto = '';
   application.actionButton = "Agregar";
   application.dynamicTitle = "Asignar No. Comision Interna";
   application.myModel = true;
   axios.post('action.php', {
     action:'getDepto',
     Depto : application.depto
   }).then(function (response) {
         
   })
  },
  submitDataAdmin:function(){
   if(application.dirigido != '' && application.asunto != '' && application.select_depto != '')
   {
    if(application.actionButton == 'Agregar')
    {
     axios.post('action.php', {
      action:'insertAdmin',
      Tipo:application.tipo,
      Dirigido:application.dirigido,
      Asunto:application.asunto,
      Usuario:application.fk_usuario,
      Departamento:application.select_depto
     }).then(function(response){
      application.myModel = false;
      application.fetchAllData();
      application.tipo = '';
      application.dirigido = '';
      application.asunto = '';
      application.select_depto = '';
      alert(response.data.message);
     });
    }
    if(application.actionButton == 'Update')
    {
     axios.post('action.php', {
      action:'update',
      firstName : application.first_name,
      lastName : application.last_name,
      hiddenId : application.hiddenId
     }).then(function(response){
      application.myModel = false;
      application.fetchAllData();
      application.first_name = '';
      application.last_name = '';
      application.hiddenId = '';
      alert(response.data.message);
     });
    }
   }
   else
   {
    alert("Todos los campos son requeridos!");
   }
  },
  submitData:function(){
   if(application.dirigido != '' && application.asunto != '')
   {
    if(application.actionButton == 'Agregar')
    {
     axios.post('action.php', {
      action:'insert',
      Tipo:application.tipo,
      Dirigido:application.dirigido,
      Asunto:application.asunto,
      Usuario:application.fk_usuario,
      Departamento:application.fk_departamentos
     }).then(function(response){
      application.myModel = false;
      application.fetchAllData();
      application.tipo = '';
      application.dirigido = '';
      application.asunto = '';
      application.depto = '';
      alert(response.data.message);
     });
    }
    if(application.actionButton == 'Update')
    {
     axios.post('action.php', {
      action:'update',
      firstName : application.first_name,
      lastName : application.last_name,
      hiddenId : application.hiddenId
     }).then(function(response){
      application.myModel = false;
      application.fetchAllData();
      application.first_name = '';
      application.last_name = '';
      application.hiddenId = '';
      alert(response.data.message);
     });
    }
   }
   else
   {
    alert("Todos los campos son requeridos!");
   }
  },
  fetchData:function(id){
   axios.post('action.php', {
    action:'fetchSingle',
    id:id
   }).then(function(response){
    application.first_name = response.data.first_name;
    application.last_name = response.data.last_name;
    application.hiddenId = response.data.id;
    application.myModel = true;
    application.actionButton = 'Update';
    application.dynamicTitle = 'Edit Data';
   });
  },
  deleteData:function(id){
   if(confirm("Are you sure you want to remove this data?"))
   {
    axios.post('action.php', {
     action:'delete',
     id:id
    }).then(function(response){
     application.fetchAllData();
     alert(response.data.message);
    });
   }
  }
 },
 created:function(){
  this.fetchAllData();
 }
});

</script>
