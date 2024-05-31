<?php
class actividades
{
    public function agregarActividad($datos)
    {
        $c= new conectar();
        $conexion=$c->conexion();

                $sql = "INSERT INTO extraescolar(Area, Actividad, Grupo, Horario, Docente, RFC, Correo, Moodle, Periodo)
                values(
                    '$datos[0]',
                    '$datos[1]',
                    '$datos[2]',
                    '$datos[3]',
                    '$datos[4]',
                    '$datos[5]',
                    '$datos[6]',
                    '$datos[7]',
                    '$datos[8]'
                )";

        
                return mysqli_query($conexion,$sql);
    }

    public function traerID()
    {
        $c = new conectar();
        $conexion = $c -> conexion();

        $sql = "SELECT Id FROM extraescolar";

        $result = mysqli_query($conexion,$sql);

        return mysqli_fetch_row($result)[0];
    }

    public function traerNombre()
    {
        $c = new conectar();
        $conexion = $c -> conexion();

        $sql = "SELECT Actividad FROM extraescolar";

        $result = mysqli_query($conexion,$sql);

        return mysqli_fetch_row($result)[0];
    }

    
    public function actualizarAactividad($datos)
    {
        $c= new conectar();
        $conexion=$c->conexion();
        //$curso = self::traerID();
        
                
                $sql = "UPDATE extraescolar SET 
                Actividad = '$datos[1]',
                Grupo = '$datos[2]',
                Horario = '$datos[3]',
                Docente = '$datos[4]',
                Correo = '$datos[5]'
                WHERE Id='$datos[0]'";

        
                return mysqli_query($conexion,$sql);
    }

    public function obtenerDatoGrupo($idGrupo)
    {
        $c= new conectar();
        $conexion=$c->conexion();

        $sql = "SELECT Id, Actividad, Grupo, Horario, Docente, Correo from extraescolar WHERE Id='$idGrupo'";

        $result = mysqli_query($conexion,$sql);

        $ver = mysqli_fetch_row($result);

        $datos = array(
            "Id" => $ver[0],
            "Actividad" => $ver[1],
            "Grupo" => $ver[2],
            "Horario" => $ver[3],
            "Docente" => $ver[4],
            "Correo" => $ver[5],
        );

        return $datos;
    }

    public function eliminarGrupo($idGrupo)
    {
        $c= new conectar();
        $conexion=$c->conexion();

		$sql="DELETE FROM extraescolar WHERE Id='$idGrupo'";
                                
        $result = mysqli_query($conexion,$sql);
         return $result;
    }

    
}
?>