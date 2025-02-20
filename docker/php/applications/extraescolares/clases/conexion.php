<?php
class conectar
{
    private $servidor = "mariadb-php";
    private $usuario = "extraesc";
    private $password = "Aderr43sd";
    private $bd = "tec2";

    public function conexion()
    {
        $conexion = mysqli_connect($this-> servidor, $this-> usuario, $this-> password, $this-> bd);
        return $conexion;
    }
}
?>