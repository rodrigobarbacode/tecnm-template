<?php
class grupos
{
    

    public function traerID()
    {
        $c = new conectar();
        $conexion = $c -> conexion();

        $sql = "SELECT Id FROM extraescolar";

        $result = mysqli_query($conexion,$sql);

        return mysqli_fetch_row($result)[0];
    }



    public function obtenerDatoGrupo($idGrupo)
    {
        $c= new conectar();
        $conexion=$c->conexion();

        $sql = "SELECT Id, Actividad, Grupo, Horario, Docente from extraescolar WHERE Id='$idGrupo'";

        $result = mysqli_query($conexion,$sql);

        $ver = mysqli_fetch_row($result);

        $datos = array(
            "Id" => $ver[0],
            "Actividad"=> $ver[1],
            "Grupo" => $ver[2],
            'Horario' => $ver[3],
            'Docente' => $ver[4]
        );

        return $datos;
    }


    
}
?>