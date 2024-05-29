<?php
class conectar
{
    private $servidor = "localhost";
    private $usuario = "Cidiomas";
    private $password = "Sh1l0soft01";
    private $bd = "tec";

    public function conexion()
    {
        $conexion = mysqli_connect($this-> servidor, $this-> usuario, $this-> password, $this-> bd);
        return $conexion;
    }
}
?>