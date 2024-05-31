<?php
$mysqli = new mysqli("localhost", "root", "", "tec");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}


if ($result = $mysqli->query("SELECT noControl FROM cursos WHERE idGrupo = '1' ")) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    printf("Result set has %d rows.\n", $row_cnt);

    /* cerrar el resultset */
    $result->close();
}

/* cerrar la conexión */
$mysqli->close();

?>