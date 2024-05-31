<?php
$dbHost = 'localhost';
$dbUsername = 'biblioteca';
$dbPassword = 'biblioteca2015';
$dbName = 'circulo';

$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

$searchTerm = $_GET['term'];

$query = $db->query("SELECT concat(Titulo,' ','(',Enlace,')') as Titulos FROM cv_Libro WHERE Titulo LIKE '%".$searchTerm."%' ORDER BY Titulo ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['Titulos'];
    // $data[] = $row['Enlace'];
}
echo json_encode($data);
?>
