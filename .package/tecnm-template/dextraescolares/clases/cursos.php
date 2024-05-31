<?php
class cursos
{
    public function traerID()
    {
        $c = new conectar();
        $conexion = $c -> conexion();

        $sql = "SELECT idCurso FROM cursos ";

        $result = mysqli_query($conexion,$sql);

        return mysqli_fetch_row($result)[0];
    }

    public function obtenerDatoCurso($idCurso)
    {
        $c= new conectar();
        $conexion=$c->conexion();

        $sql = "SELECT idCurso, noControl, idGrupo, Estatus from cursos WHERE idCurso='$idCurso'";

        $result = mysqli_query($conexion,$sql);

        $ver = mysqli_fetch_row($result);

        $datos = array(
            "idCurso" => $ver[0],
            "noControl"=> $ver[1],
            "idGrupo" => $ver[2],
            'Estatus' => $ver[3]
        );

        return $datos;
    }

    public function actualizarCursos($datos)
    {
        $c= new conectar();
        $conexion=$c->conexion();
        $fecha=date('Y-m-d');
        //$curso = self::traerID();
        
                
                $sql = "UPDATE cursos SET 
                noControl = '$datos[1]',
                idGrupo = '$datos[2]',
                Estatus= '$datos[3]',
                fechaTerminacion = '$fecha'
                WHERE idCurso='$datos[0]'";

        
                return mysqli_query($conexion,$sql);
    }
}
?>