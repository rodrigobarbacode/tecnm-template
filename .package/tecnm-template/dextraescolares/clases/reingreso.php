<?php
class reingreso
{
    public function traerID($datos)
    {
        $c = new conectar();
        $conexion = $c -> conexion();

        $sql = "SELECT noControl FROM alumno WHERE noControl='$datos'";

        $result = mysqli_query($conexion,$sql);

        $ver = mysqli_fetch_row($result);

        $datos = array(
            "noControl"=> $ver[0]
        );

        return $datos;
    }

    public function agregarRegistro($datos)
    {
        $c= new conectar();
        $conexion=$c->conexion();

        //$fecha=date('Y-m-d');
        $estatus = 'Cursando';
        $idCurso = '';
        //$nivel = self::traerNivel($datos);
        $validarNivel;

        if ($result = mysqli_query($conexion,"SELECT noControl FROM actividades WHERE IdExtraescolar = '$datos[1]' ")) {

            /* determinar el número de filas del resultado */
            $row_cnt = $result->num_rows;
        
            //printf("Result set has %d rows.\n", $row_cnt);

            if($row_cnt !=30 )
            {
                $sql = "INSERT INTO actividades(noControl,IdExtraescolar,Estatus,Periodo)
                values(
                    '$datos[0]',
                    '$datos[1]',   
                    '$estatus',
                    '$datos[2]'
                )";

        
                return mysqli_query($conexion,$sql);
            }
        
            /* cerrar el resultset */
            $result->close();
        }
    }
}
?>