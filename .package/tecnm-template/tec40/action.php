<?php

//action.php
session_start();
$connect = new PDO("mysql:host=localhost;dbname=tec40", "root", "Tzuput4r0");

if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
  header('location:index.php');
}

$sql="select * from usuarios where email='".$_SESSION['user']."'";
$query=$connect->prepare($sql);
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$fk_usuario = $row['id'];
$fk_roles = $row['fk_roles'];

$received_data = json_decode(file_get_contents("php://input"));
$data = array();
if($received_data->action == 'zonas')
{
 $query = "
 SELECT * FROM zonas
 ORDER BY id_zona ASC
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}
if($received_data->action == 'areas')
{
 $query = "
 SELECT * FROM areas
 WHERE fk_zonas = '".$received_data->id_zona."'
 ORDER BY id_area ASC
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}
if($received_data->action == 'dientes')
{
 $query = "
 SELECT * FROM dientes
 WHERE fk_areas = '".$received_data->id_area."'
 ORDER BY id_diente ASC
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}
if($received_data->action == 'ubicaciones')
{
 $query = "
 SELECT * FROM ubicaciones
 WHERE fk_dientes = '".$received_data->id_diente."'
 ORDER BY ubicacion ASC
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 //$statement->bind_result($id, $ubicacion);
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
      $data[] = $row;
 }
 echo json_encode($data);
}//fin ubicaciones
if($received_data->action == 'fetchall')
{
 $query = "
 SELECT * FROM tbl_sample
 ORDER BY id DESC
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}
if($received_data->action == 'insert')
{
 $data = array(
  ':donador_name' => $received_data->donadorName,
  ':contact_name' => $received_data->contactName,
  ':contact_email' => $received_data->contactEmail,
  ':contact_phone' => $received_data->contactPhone,
  ':ubicacion_id' => $received_data->ubicacionId
 );

 $query = "
 INSERT INTO donadores
 (nombre, contacto, email, telefono, fk_ubicacion)
 VALUES (:donador_name, :contact_name, :contact_email, :contact_phone, :ubicacion_id)
 ";

 $statement = $connect->prepare($query);

 $statement->execute($data);

 $data2 = array(
  ':contact_email' => $received_data->contactEmail,
  ':ubicacion_id' => $received_data->ubicacionId,
  ':select_estatus' => $received_data->selectEstatus,
 );
 //validar con if de usuario
 $queryUpdateUbicacion = "
 UPDATE ubicaciones SET fk_usuarios = $fk_usuario, fk_donadores =
 (SELECT id FROM donadores WHERE email = :contact_email and fk_ubicacion = :ubicacion_id ),
 fk_estatus = :select_estatus
 WHERE ubicaciones.id IN (SELECT fk_ubicacion FROM donadores WHERE email = :contact_email and fk_ubicacion = :ubicacion_id)
 ";
 $statement = $connect->prepare($queryUpdateUbicacion);

 $statement->execute($data2);

 $output = array(
  'message' => 'Ubicacion Reservada!'
 );

 echo json_encode($output);
}
if($received_data->action == 'fetchSingle')
{
 $query = "
 SELECT * FROM donadores
 WHERE id = '".$received_data->idDonador."'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $data['idDonador'] = $row['id'];
  $data['nombreDonador'] = $row['nombre'];
  $data['contactoDonador'] = $row['contacto'];
  $data['emailDonador'] = $row['email'];
  $data['telDonador'] = $row['telefono'];
 }

 echo json_encode($data);
}
if($received_data->action == 'update')
{
  $ubicacionFK = $received_data->ubicacionId;
  $sqlGetUsuarioFK="select * from ubicaciones where fk_usuarios = $fk_usuario and id = $ubicacionFK";
  $queryGetUsuarioFK=$connect->prepare($sqlGetUsuarioFK);
  $queryGetUsuarioFK->execute();
  $rowGetUsuarioFK = $queryGetUsuarioFK->fetch(PDO::FETCH_ASSOC);
  $fk_ubicacion = $rowGetUsuarioFK['id'];

 $data = array(
   ':donador_name' => $received_data->donadorName,
   ':contact_name' => $received_data->contactName,
   ':contact_email' => $received_data->contactEmail,
   ':contact_phone' => $received_data->contactPhone,
   ':ubicacion_id' => $received_data->ubicacionId,
   ':idDonador' => $received_data->hiddenId
 );

 if($fk_ubicacion == $ubicacionFK || $fk_roles != 3){
   $query = "
   UPDATE donadores
   SET nombre = :donador_name,
   contacto = :contact_name,
   email = :contact_email,
   telefono = :contact_phone,
   fk_ubicacion = :ubicacion_id
   WHERE id = :idDonador
   ";

   $statement = $connect->prepare($query);

   $statement->execute($data);

   $data2 = array(
    ':contact_email' => $received_data->contactEmail,
    ':ubicacion_id' => $received_data->ubicacionId,
    ':select_estatus' => $received_data->selectEstatus,
   );
   $disponible = $received_data->selectEstatus;
   if($disponible == 1){
     $queryUpdateUbicacion = "
     UPDATE ubicaciones SET fk_usuarios = $fk_usuario, fk_donadores = NULL,
     fk_estatus = :select_estatus
     WHERE ubicaciones.id IN (SELECT fk_ubicacion FROM donadores WHERE email = :contact_email and fk_ubicacion = :ubicacion_id)
     ";
   }else{
     $queryUpdateUbicacion = "
     UPDATE ubicaciones SET fk_usuarios = $fk_usuario, fk_donadores =
     (SELECT id FROM donadores WHERE email = :contact_email and fk_ubicacion = :ubicacion_id ),
     fk_estatus = :select_estatus
     WHERE ubicaciones.id IN (SELECT fk_ubicacion FROM donadores WHERE email = :contact_email and fk_ubicacion = :ubicacion_id)
     ";
   }
   $statement = $connect->prepare($queryUpdateUbicacion);

   $statement->execute($data2);

   $output = array(
    'message' => 'Datos del Donador Actualizados!!!'
   );
 }else{
   $output = array(
    'message' => 'La ubicacion no te corresponde!!!'
    );
 }
 echo json_encode($output);
}

if($received_data->action == 'delete')
{
 $query = "
 DELETE FROM tbl_sample
 WHERE id = '".$received_data->id."'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $output = array(
  'message' => 'Data Deleted'
 );

 echo json_encode($output);
}
