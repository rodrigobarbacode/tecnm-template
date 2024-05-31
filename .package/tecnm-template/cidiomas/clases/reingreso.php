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

        $estatus = 'Cursando';

        if ($result = mysqli_query($conexion,"SELECT noControl FROM cursos WHERE idGrupo = '$datos[1]' ")) {

            /* determinar el número de filas del resultado */
            $row_cnt = $result->num_rows;
        
            //printf("Result set has %d rows.\n", $row_cnt);

            if($row_cnt !=30 )
            {
                $sql = "INSERT INTO cursos(noControl,idGrupo,Estatus)
                values(
                    '$datos[0]',
                    '$datos[1]',    
                    '$estatus'
                )";

        
                return mysqli_query($conexion,$sql);
            }
        
            /* cerrar el resultset */
            $result->close();
        }
    }
}
?>