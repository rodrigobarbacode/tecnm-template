<?php

//action.php
session_start();
$connect = new PDO("mysql:host=localhost;dbname=aoc", "root", "Tzuput4r0");

if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
    header('location:index.php');
}
$sqlRol="SELECT usuarios.id, usuarios.usuario, usuarios.fk_roles, usuarios.fk_departamentos, roles.rol, departamentos.departamento
FROM usuarios
INNER JOIN roles ON usuarios.fk_roles = roles.id
INNER JOIN departamentos ON usuarios.fk_departamentos = departamentos.id
WHERE usuarios.usuario = '".$_SESSION['user']."'";
$queryRol=$connect->prepare($sqlRol);
$queryRol->execute();
$rowRol = $queryRol->fetch(PDO::FETCH_ASSOC);
$usuario = $rowRol['id'];
$departamento = $rowRol['departamento'];
$rol = $rowRol['fk_roles'];

$received_data = json_decode(file_get_contents("php://input"));
$data = array();
if($received_data->action == 'fetchall')
{
    if($rol == 1){
        $query = "
        SELECT * FROM folios where fecha >= '2022-01-01'
        ORDER BY id_folio DESC
        ";
        $statement = $connect->prepare($query);
        $statement->execute();
        while($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }
    echo json_encode($data);
    }else{
        $query = "
        SELECT * FROM folios
        WHERE  fk_departamento = '".$departamento."'
        ORDER BY id_folio DESC
        ";
        $statement = $connect->prepare($query);
        $statement->execute();
        while($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }
    echo json_encode($data);
    } 
}
if($received_data->action == 'insertAdmin')
{
 $fecha = date("Y-m-d h:i:sa");
 
 if($received_data->Tipo == 'OFICIO'){
    $queryInsertOficio = "INSERT INTO oficios (oficio) VALUES (NULL)"; 
    $statementInsertOficio = $connect->prepare($queryInsertOficio);
    $statementInsertOficio->execute();   

    $queryOficio = "SELECT oficio 
    FROM oficios order by oficio desc limit 1"; 
    $statementOficio = $connect->prepare($queryOficio);
    $statementOficio->execute();
    $rowOficio = $statementOficio->fetch(PDO::FETCH_ASSOC);
    $folio = $rowOficio['oficio'];

 }elseif($received_data->Tipo == 'COMISION'){
    $queryInsertOficio = "INSERT INTO comisiones (comision) VALUES (NULL)"; 
    $statementInsertOficio = $connect->prepare($queryInsertOficio);
    $statementInsertOficio->execute();  

    $queryComision = "SELECT comision 
    FROM comisiones order by comision desc limit 1"; 
    $statementComision = $connect->prepare($queryComision);
    $statementComision->execute();
    $rowComision = $statementComision->fetch(PDO::FETCH_ASSOC);
    $folio = $rowComision['comision'];

 }else{
    $queryInsertOficio = "INSERT INTO comisionesInt (comisionInt) VALUES (NULL)"; 
    $statementInsertOficio = $connect->prepare($queryInsertOficio);
    $statementInsertOficio->execute();  

    $queryComisionInt = "SELECT comisionInt 
    FROM comisionesInt order by comisionInt desc limit 1"; 
    $statementComisionInt = $connect->prepare($queryComisionInt);
    $statementComisionInt->execute();
    $rowComisionInt = $statementComisionInt->fetch(PDO::FETCH_ASSOC);
    $folio = $rowComisionInt['comisionInt'];
 }
 
 $data = array(
  ':select_tipo' => $received_data->Tipo,
  ':folio' => $folio,
  ':dirigido' => $received_data->Dirigido,
  ':fecha' => $fecha,
  ':asunto' => $received_data->Asunto,
  ':fk_usuario' => $received_data->Usuario,
  ':select_depto' => $received_data->Departamento,
  ':estatus' => "Asignado"
 );

 $query = "
 INSERT INTO folios
 (tipo, folio, dirigido, fecha, asunto, fk_usuario, fk_departamento, estatus)
 VALUES (:select_tipo, :folio, :dirigido, :fecha, :asunto, :fk_usuario, :select_depto, :estatus)
 ";

 $statement = $connect->prepare($query);

 $statement->execute($data);

 $output = array(
  'message' => 'No. ' .$received_data->Tipo. ' Asignado ' .$folio
 );

 echo json_encode($output);
}
if($received_data->action == 'insert')
{
    if($received_data->Tipo == 'OFICIO'){
        $queryInsertOficio = "INSERT INTO oficios (oficio) VALUES (NULL)"; 
        $statementInsertOficio = $connect->prepare($queryInsertOficio);
        $statementInsertOficio->execute();   
    
        $queryOficio = "SELECT oficio 
        FROM oficios order by oficio desc limit 1"; 
        $statementOficio = $connect->prepare($queryOficio);
        $statementOficio->execute();
        $rowOficio = $statementOficio->fetch(PDO::FETCH_ASSOC);
        $folio = $rowOficio['oficio'];
    
     }elseif($received_data->Tipo == 'COMISION'){
        $queryInsertOficio = "INSERT INTO comisiones (comision) VALUES (NULL)"; 
        $statementInsertOficio = $connect->prepare($queryInsertOficio);
        $statementInsertOficio->execute();  
    
        $queryComision = "SELECT comision 
        FROM comisiones order by comision desc limit 1"; 
        $statementComision = $connect->prepare($queryComision);
        $statementComision->execute();
        $rowComision = $statementComision->fetch(PDO::FETCH_ASSOC);
        $folio = $rowComision['comision'];

     }else{
        $queryInsertOficio = "INSERT INTO comisionesInt (comisionInt) VALUES (NULL)"; 
        $statementInsertOficio = $connect->prepare($queryInsertOficio);
        $statementInsertOficio->execute();  
    
        $queryComisionInt = "SELECT comisionInt 
        FROM comisionesInt order by comisionInt desc limit 1"; 
        $statementComisionInt = $connect->prepare($queryComisionInt);
        $statementComisionInt->execute();
        $rowComisionInt = $statementComisionInt->fetch(PDO::FETCH_ASSOC);
        $folio = $rowComisionInt['comisionInt'];

     }
 $fecha = date("Y-m-d h:i:sa");
 $queryDepto = "
 SELECT departamento FROM departamentos
 WHERE id = '".$received_data->Departamento."'";
 $statementDepto = $connect->prepare($queryDepto);
 $statementDepto->execute();
 $rowDepto = $statementDepto->fetch(PDO::FETCH_ASSOC);
 $fk_departamento = $rowDepto['departamento'];

 $data = array(
  ':select_tipo' => $received_data->Tipo,
  ':folio' => $folio,
  ':dirigido' => $received_data->Dirigido,
  ':fecha' => $fecha,
  ':asunto' => $received_data->Asunto,
  ':fk_usuario' => $received_data->Usuario,
  ':fk_departamento' => $fk_departamento,
  ':estatus' => "Asignado"
 );

 $query = "
 INSERT INTO folios
 (tipo, folio, dirigido, fecha, asunto, fk_usuario, fk_departamento, estatus)
 VALUES (:select_tipo, :folio, :dirigido, :fecha, :asunto, :fk_usuario, :fk_departamento, :estatus)
 ";

 $statement = $connect->prepare($query);

 $statement->execute($data);

 $output = array(
  'message' => 'No. ' .$received_data->Tipo. ' Asignado ' .$folio
 );

 echo json_encode($output);
}
if($received_data->action == 'fetchSingle')
{
 $query = "
 SELECT * FROM tbl_sample
 WHERE id = '".$received_data->id."'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $data['id'] = $row['id'];
  $data['first_name'] = $row['first_name'];
  $data['last_name'] = $row['last_name'];
 }

 echo json_encode($data);
}
if($received_data->action == 'getDeptoAdmin')
{
 $query = "SELECT * FROM departamentos ORDER BY id";

 $statement = $connect->prepare($query);

 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}
if($received_data->action == 'update')
{
 $data = array(
  ':first_name' => $received_data->firstName,
  ':last_name' => $received_data->lastName,
  ':id'   => $received_data->hiddenId
 );

 $query = "
 UPDATE tbl_sample
 SET first_name = :first_name,
 last_name = :last_name
 WHERE id = :id
 ";

 $statement = $connect->prepare($query);

 $statement->execute($data);

 $output = array(
  'message' => 'Data Updated'
 );

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

?>
