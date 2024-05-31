<?php
class usuarios
{
    public function actualizarUsuario($datos)
    {
        $c= new conectar();
        $conexion=$c->conexion();
                $sql = "UPDATE usuarios SET 
                noEmpleado = '$datos[1]',
                Nombre = '$datos[2]',
                Contrasena= '$datos[3]'
                WHERE Id='$datos[0]'";

        
                return mysqli_query($conexion,$sql);
    }
}
?>