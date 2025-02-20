<?php
$connect = new PDO("mysql:host=localhost;dbname=aoc", "root", "Tzuput4r0");

for ($folio = 1002; $folio <= 1297; $folio++){

$query = "
    INSERT INTO oficios
    (oficio)
    VALUES ($folio)";
/* $query = "
 INSERT INTO folios
 (tipo, folio, dirigido, fecha, asunto, fk_usuario, fk_departamento, estatus)
 VALUES ('OFICIO', $folio, 'Recursos Humanos', '2023-05-24 07:00:22pm', 'DECLARACION PATRIMONIAL 2023', 1, 'Recursos Humanos', 'Asignado')";*/

 $statement = $connect->prepare($query);

 $statement->execute();

}
 ?>
