<?php
	session_start();
	$conn = new mysqli("localhost", "root", "Tzuput4r0", "tec40");

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
		header('location:index.php');
	}

	$sql="select rol from roles where id IN (select fk_roles from usuarios where email='".$_SESSION['user']."')";
	$query=$conn->query($sql);
	$rol=$query->fetch_array();

?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TEC40</title>
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
   .red
   {
     border: 1px solid red;
     background-color: pink;
   }
  </style>
 </head>
 <body>
  <div class="container" id="crudApp">
   <br />
   <h3 align="center">Asignacion de Placas y Losetas TEC40</h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-6">
       <h3 class="panel-title">Ubicaciones</h3>
      </div>
			<div class="col-md-6" align="right">
       <a href="logout.php" class="btn btn-primary"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
      </div>
     </div>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label>Selecciona Zona</label>
          <select class="form-control input-lg" v-model="select_zona" @change="fetchArea">
            <option value="">Selecciona Zona</option>
            <option v-for="data in zona_data" :value="data.id_zona">{{ data.zona_name }}</option>
          </select>
      </div>
      <div class="form-group">
        <label>Selecciona Area</label>
          <select class="form-control input-lg" v-model="select_area" @change="fetchDiente">
            <option value="">Selecciona Area</option>
            <option v-for="data in area_data" :value="data.id_area">{{ data.area_name }}</option>
          </select>
      </div>
      <div class="form-group">
        <label>Selecciona Diente</label>
          <select class="form-control input-lg" v-model="select_diente" @change="fetchUbicacion();">
            <option value="">Selecciona Diente</option>
            <option v-for="data in diente_data" :value="data.id_diente">{{ data.diente_name }}</option>
          </select>
      </div>
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <td v-for="data in ubicacion_data" v-if="data.ubicacion.substring(0, 1) == 'A'">
          <button type="button" class="btn btn-default" @click="openModel(data.id, data.fk_estatus, data.fk_donadores);" :class="[makeRed ? 'red' : '']">{{ data.ubicacion }}</button>
          <span style="background-color:rgb(59, 100, 235);; color:white; font-weight: bold;" v-if="data.fk_estatus == 1">D</span>
          <span style="background-color:rgb(227, 103, 50); color:white; font-weight: bold;" v-else-if="data.fk_estatus == 2">R</span>
          <span style="background-color:rgb(18, 2, 1);; color:white; font-weight: bold;" v-else>A</span>
        </td>

      </tr>
      <tr>
       <td v-for="data in ubicacion_data" v-if="data.ubicacion.substring(0, 1) == 'B'">
         <button type="button" class="btn btn-default" @click="openModel(data.id, data.fk_estatus, data.fk_donadores);">{{ data.ubicacion }}</button>
         <span style="background-color:rgb(59, 100, 235);; color:white; font-weight: bold;" v-if="data.fk_estatus == 1">D</span>
         <span style="background-color:rgb(227, 103, 50); color:white; font-weight: bold;" v-else-if="data.fk_estatus == 2">R</span>
         <span style="background-color:rgb(18, 2, 1);; color:white; font-weight: bold;" v-else>A</span>
       </td>
     </tr>
     <tr>
       <td v-for="data in ubicacion_data" v-if="data.ubicacion.substring(0, 1) == 'C'">
         <button type="button" class="btn btn-default" @click="openModel(data.id, data.fk_estatus, data.fk_donadores);">{{ data.ubicacion }}</button>
         <span style="background-color:rgb(59, 100, 235);; color:white; font-weight: bold;" v-if="data.fk_estatus == 1">D</span>
         <span style="background-color:rgb(227, 103, 50); color:white; font-weight: bold;" v-else-if="data.fk_estatus == 2">R</span>
         <span style="background-color:rgb(18, 2, 1);; color:white; font-weight: bold;" v-else>A</span>
       </td>
    </tr>
    <tr>
      <td v-for="data in ubicacion_data" v-if="data.ubicacion.substring(0, 1) == 'D'">
        <button type="button" class="btn btn-default" @click="openModel(data.id, data.fk_estatus, data.fk_donadores);">{{ data.ubicacion }}</button>
        <span style="background-color:rgb(59, 100, 235);; color:white; font-weight: bold;" v-if="data.fk_estatus == 1">D</span>
        <span style="background-color:rgb(227, 103, 50); color:white; font-weight: bold;" v-else-if="data.fk_estatus == 2">R</span>
        <span style="background-color:rgb(18, 2, 1);; color:white; font-weight: bold;" v-else>A</span>
      </td>
   </tr>
   <tr>
     <td v-for="data in ubicacion_data" v-if="data.ubicacion.substring(0, 1) == 'E'">
       <button type="button" class="btn btn-default" @click="openModel(data.id, data.fk_estatus, data.fk_donadores);">{{ data.ubicacion }}</button>
       <span style="background-color:rgb(59, 100, 235);; color:white; font-weight: bold;" v-if="data.fk_estatus == 1">D</span>
       <span style="background-color:rgb(227, 103, 50); color:white; font-weight: bold;" v-else-if="data.fk_estatus == 2">R</span>
       <span style="background-color:rgb(18, 2, 1);; color:white; font-weight: bold;" v-else>A</span>
     </td>
  </tr>
  <tr>
    <td v-for="data in ubicacion_data" v-if="data.ubicacion.substring(0, 1) == 'F'">
      <button type="button" class="btn btn-default" @click="openModel(data.id, data.fk_estatus, data.fk_donadores);">{{ data.ubicacion }}</button>
      <span style="background-color:rgb(59, 100, 235);; color:white; font-weight: bold;" v-if="data.fk_estatus == 1">D</span>
      <span style="background-color:rgb(227, 103, 50); color:white; font-weight: bold;" v-else-if="data.fk_estatus == 2">R</span>
      <span style="background-color:rgb(18, 2, 1);; color:white; font-weight: bold;" v-else>A</span>
    </td>
 </tr>
 <tr>
   <td v-for="data in ubicacion_data" v-if="data.ubicacion.substring(0, 1) == 'G'">
     <button type="button" class="btn btn-default" @click="openModel(data.id, data.fk_estatus, data.fk_donadores);">{{ data.ubicacion }}</button>
     <span style="background-color:rgb(59, 100, 235);; color:white; font-weight: bold;" v-if="data.fk_estatus == 1">D</span>
     <span style="background-color:rgb(227, 103, 50); color:white; font-weight: bold;" v-else-if="data.fk_estatus == 2">R</span>
     <span style="background-color:rgb(18, 2, 1);; color:white; font-weight: bold;" v-else>A</span>
   </td>
</tr>
<tr>
  <td v-for="data in ubicacion_data" v-if="data.ubicacion.substring(0, 1) == 'H'">
    <button type="button" class="btn btn-default" @click="openModel(data.id, data.fk_estatus, data.fk_donadores);">{{ data.ubicacion }}</button>
    <span style="background-color:rgb(59, 100, 235);; color:white; font-weight: bold;" v-if="data.fk_estatus == 1">D</span>
    <span style="background-color:rgb(227, 103, 50); color:white; font-weight: bold;" v-else-if="data.fk_estatus == 2">R</span>
    <span style="background-color:rgb(18, 2, 1);; color:white; font-weight: bold;" v-else>A</span>
  </td>
</tr>
<tr>
  <td v-for="data in ubicacion_data" v-if="data.ubicacion.substring(0, 1) == 'I'">
    <button type="button" class="btn btn-default" @click="openModel(data.id, data.fk_estatus, data.fk_donadores);">{{ data.ubicacion }}</button>
    <span style="background-color:rgb(59, 100, 235);; color:white; font-weight: bold;" v-if="data.fk_estatus == 1">D</span>
    <span style="background-color:rgb(227, 103, 50); color:white; font-weight: bold;" v-else-if="data.fk_estatus == 2">R</span>
    <span style="background-color:rgb(18, 2, 1);; color:white; font-weight: bold;" v-else>A</span>
  </td>
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
           <label>Nombre</label>
           <input type="text" class="form-control" v-model="donador_name" />
          </div>
          <div class="form-group">
           <label>Contacto</label>
           <input type="text" class="form-control" v-model="contact_name" />
          </div>
          <div class="form-group">
           <label>Email</label>
           <input type="email" class="form-control" v-model="contact_email" required/>
           <input type="hidden" v-model="msgErrEmail"/>
           <span style="color: red" v-if="msgErrEmail.contact_email">{{msgErrEmail.contact_email}}</span>
          </div>
          <div class="form-group">
           <label>Telefono</label>
           <input type="text" class="form-control" v-model="contact_phone" />
          </div>
          <div class="form-group">
          <select class="form-control input-lg" v-model="select_estatus">
            <option value="">Selecciona Estatus</option>
            <option value="1">Disponible</option>
            <option value="2">Reservada</option>
						<?php
							if($rol['rol'] == "Administrador"){
								echo '<option value="3">Asignado</option>';
							}
						?>
          </select>
          </div>
          <div class="form-group">
           <!--<label>{{id_ubicacion}}</label>-->
           <input type="hidden" class="form-control" v-model="id_ubicacion" value="id_ubicacion"/>
          </div>
          <br />
          <div align="center">
           <input type="hidden" v-model="hiddenId" />
           <input type="button" class="btn btn-success btn-xs" v-model="actionButton" @click="submitData();" />
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
  active:false,
  select_zona:'',
  zona_data:'',
  select_area:'',
  area_data:'',
  select_ubicacion:'',
  ubicacion_data:'',
  ubicacion_dataB:'',
  select_diente:'',
  diente_data:'',
  id_estatus:'',
  hiddenId:'',
  contact_email:'',
  msgErrEmail:[],
	rol:'',
  allData:'',
  myModel:false,
  actionButton:'Guardar',
  dynamicTitle:'Datos Donador',
 },
 computed:{
   makeRed:function(){
     return application.id_estatus === '2'
   }
 },
 watch: {
    contact_email(value){
      // binding this to the data value in the email input
      application.contact_email = value;
      application.validateEmail(value);
    }
  },
 methods:{
   validateEmail(value){
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value))
    {
      application.msgErrEmail['contact_email'] = '';
    } else{
      application.msgErrEmail['contact_email'] = 'Correo Electronico Invalido!!!';
    }
  },
   cambioStatus:function(fk_estatus){
     application.id_estatus = fk_estatus;
   },
   fetchZona:function(){
   axios.post('action.php', {
    action:'zonas'
   }).then(function(response){
    application.zona_data = response.data;
    application.select_area = '';
    application.area_data = '';
    application.select_ubicacion = '';
    application.ubicacion_data = '';
   });
  },
  fetchArea:function(){
   axios.post("action.php", {
    action:'areas',
    id_zona:this.select_zona
   }).then(function(response){
    application.area_data = response.data;
    application.select_area = '';
    application.select_ubicacion = '';
    application.ubicacion_data = '';
   });
  },
  fetchDiente:function(){
   axios.post("action.php", {
    action:'dientes',
    id_area:this.select_area
   }).then(function(response){
    application.diente_data = response.data;
    application.select_diente = '';
    application.select_ubicacion = '';
    application.ubicacion_data = '';
   });
  },
  fetchUbicacion:function(){
   axios.post("action.php", {
    action:'ubicaciones',
    id_diente:this.select_diente
   }).then(function(response){
     //split array for rows
    application.ubicacion_data = response.data;
    application.select_ubicacion = '';
   });
  },
  fetchAllData:function(){
   axios.post('action.php', {
    action:'fetchall'
   }).then(function(response){
    application.allData = response.data;
   });
  },
  openModel:function(id_ubicacion, fk_estatus, fk_donadores){
   application.donador_name = '';
   application.contact_name = '';
   application.contact_email = '';
   application.contact_phone = '';
   application.select_estatus = '';
   application.id_ubicacion = id_ubicacion;
   if(fk_estatus == 2 || fk_estatus == 3){
      application.actionButton = "Actualizar";
      application.fetchData(fk_donadores, fk_estatus, id_ubicacion);
   }else{
      application.actionButton = "Guardar";
   }
   application.dynamicTitle = "Datos Donador";
   application.myModel = true;
  },
  submitData:function(){
   if(application.donador_name != '' && application.contact_name != '' && application.contact_email != '' && application.contact_phone != '' && application.select_estatus != '')
   {
    if(application.actionButton == 'Guardar')
    {
     axios.post('action.php', {
      action:'insert',
      donadorName:application.donador_name,
      contactName:application.contact_name,
      contactEmail:application.contact_email,
      contactPhone:application.contact_phone,
      selectEstatus:application.select_estatus,
      ubicacionId:application.id_ubicacion
     }).then(function(response){
      application.myModel = false;
      application.donador_name = '';
      application.contact_name = '';
      application.contact_email = '';
      application.contact_phone = '';
      application.select_estatus = '';
      application.id_ubicacion = '';
      alert(response.data.message);
      application.fetchUbicacion();
     });
    }
    if(application.actionButton == 'Actualizar')
    {
     axios.post('action.php', {
      action:'update',
      donadorName:application.donador_name,
      contactName:application.contact_name,
      contactEmail:application.contact_email,
      contactPhone:application.contact_phone,
      selectEstatus:application.select_estatus,
      ubicacionId:application.id_ubicacion,
      hiddenId : application.hiddenId
     }).then(function(response){
      application.myModel = false;
      //application.fetchAllData();
      application.donador_name = '';
      application.contact_name = '';
      application.contact_email = '';
      application.contact_phone = '';
      application.select_estatus = '';
      application.id_ubicacion = '';
      application.hiddenId = '';
      alert(response.data.message);
      application.fetchUbicacion();
     });
    }
   }
   else
   {
    alert("Todos los campos son requeridos!!!");
   }
  },
  fetchData:function(fk_donadores, fk_estatus, id_ubicacion){
   axios.post('action.php', {
    action:'fetchSingle',
    idDonador:fk_donadores
   }).then(function(response){
    application.donador_name = response.data.nombreDonador;
    application.contact_name = response.data.contactoDonador;
    application.contact_email = response.data.emailDonador;
    application.contact_phone = response.data.telDonador;
    application.select_estatus = fk_estatus;
    application.id_ubicacion = id_ubicacion;
    application.hiddenId = response.data.idDonador;
    application.myModel = true;
    application.actionButton = 'Actualizar';
    application.dynamicTitle = 'Actualizar Datos Donador';
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
  this.fetchZona();
 }
});

</script>
