<?php
class acreditacion
{
    public function traerID()
    {
        $c = new conectar();
        $conexion = $c -> conexion();

        $sql = "SELECT Id FROM actividades ";

        $result = mysqli_query($conexion,$sql);

        return mysqli_fetch_row($result)[0];
    }

    public function obtenerDatoCurso($idCurso)
    {
        $c= new conectar();
        $conexion=$c->conexion();

        $sql = "SELECT Id, noControl, IdExtraescolar, Estatus, Periodo from actividades WHERE Id='$idCurso'";

        $result = mysqli_query($conexion,$sql);

        $ver = mysqli_fetch_row($result);

        $datos = array(
            "Id" => $ver[0],
            "noControl"=> $ver[1],
            "IdExtraescolar" => $ver[2],
            'Estatus' => $ver[3],
            'Periodo' => $ver[4]
        );

        return $datos;
    }

    public function actualizarCursos($datos)
    {
        $c= new conectar();
        $conexion=$c->conexion();
        $fecha=date('Y-m-d');
        //$curso = self::traerID();
        
                
                $sql = "UPDATE actividades SET 
                noControl = '$datos[1]',
                IdExtraescolar = '$datos[2]',
                Estatus= '$datos[3]',
                FechaTerminacion = '$fecha',
                Periodo = '$datos[4]'
                WHERE Id='$datos[0]'";

        
                return mysqli_query($conexion,$sql);
    }
}
?>