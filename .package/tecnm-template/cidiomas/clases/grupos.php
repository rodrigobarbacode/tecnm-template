<?php
class grupos
{
    public function agregarGrupo($datos)
    {
        $c= new conectar();
        $conexion=$c->conexion();
        //$idFolio = self::traerID();
        //$nombre = self::traerNombre();

        if ($result = mysqli_query($conexion,"SELECT * FROM grupos WHERE Nombre = '$datos[0]' ")) {

            /* determinar el número de filas del resultado */
            $row_cnt = $result->num_rows;
            if($row_cnt == 0)
            {
                $sql = "INSERT INTO grupos(Nombre,Nivel,Horario)
                values(
                    '$datos[0]',
                    '$datos[1]',    
                    '$datos[2]'
                )";
                return mysqli_query($conexion,$sql);
            }

            $result->close();
        }
        
    }

    public function traerID()
    {
        $c = new conectar();
        $conexion = $c -> conexion();

        $sql = "SELECT idGrupo FROM grupos";

        $result = mysqli_query($conexion,$sql);

        return mysqli_fetch_row($result)[0];
    }

    public function traerNombre()
    {
        $c = new conectar();
        $conexion = $c -> conexion();

        $sql = "SELECT Nombre FROM grupos";

        $result = mysqli_query($conexion,$sql);

        return mysqli_fetch_row($result)[0];
    }

    public function traerNivel()
    {
        $c = new conectar();
        $conexion = $c -> conexion();

        $sql = "SELECT grupos.Nivel FROM grupos inner join cursos on grupos.idGrupo = cursos.idGrupo
        WHERE noControl='12600048'";

        $result = mysqli_query($conexion,$sql);

        return mysqli_fetch_row($result)[0];
    }

    public function actualizarGrupo($datos)
    {
        $c= new conectar();
        $conexion=$c->conexion();
        $idFolio = self::traerID();
        if ($result = mysqli_query($conexion,"SELECT idGrupo FROM cursos WHERE idGrupo = '$datos[0]' ")) {

            /* determinar el número de filas del resultado */
            $row_cnt = $result->num_rows;
        
            //printf("Result set has %d rows.\n", $row_cnt);

            if($row_cnt ==0 )
            {
                
                $sql = "UPDATE grupos SET 
                Nombre='$datos[1]',
                Nivel='$datos[2]',
                Horario='$datos[3]'
                WHERE idGrupo='$idFolio'";

        
                return mysqli_query($conexion,$sql);
            }
        
            /* cerrar el resultset */
            $result->close();
        }
    }

    public function obtenerDatoGrupo($idGrupo)
    {
        $c= new conectar();
        $conexion=$c->conexion();

        $sql = "SELECT idGrupo, Nombre, Nivel, Horario from grupos WHERE idGrupo='$idGrupo'";

        $result = mysqli_query($conexion,$sql);

        $ver = mysqli_fetch_row($result);

        $datos = array(
            "idGrupo" => $ver[0],
            "Nombre" => $ver[1],
            "Nivel" => $ver[2],
            "Horario" => $ver[3],
        );

        return $datos;
    }

    public function eliminarGrupo($idGrupo)
    {
        $c= new conectar();
        $conexion=$c->conexion();

		$sql="DELETE FROM grupos WHERE idGrupo='$idGrupo'";
                                
        $result = mysqli_query($conexion,$sql);
         return $result;
    }

    
}
?>