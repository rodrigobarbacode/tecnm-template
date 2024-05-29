<?php
class alumnos
{
    public function loginUser($datos)
    {
        $c = new conectar();
        $conexion = $c -> conexion();
        $password = $datos[1];

        $_SESSION['nombre'] = $datos[0];
        $_SESSION['iduser'] = self::traerID($datos);

        $sql = "SELECT * FROM alumno WHERE noControl= '$datos[0]' AND fecha= '$password'";

        $result = mysqli_query($conexion,$sql);

        if(mysqli_num_rows($result) > 0  )
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    public function loginProfe($datos)
    {
        $c = new conectar();
        $conexion = $c -> conexion();
        $password = sha1($datos[1]);

        $_SESSION['nombre'] = $datos[0];
        $_SESSION['iduser'] = self::traerIDProfe($datos);

        $sql = "SELECT * FROM usuarios WHERE noEmpleado= '$datos[0]' AND Contrasena= '$password'";

        $result = mysqli_query($conexion,$sql);

        if(mysqli_num_rows($result) > 0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    public function traerID($datos)
    {
        $c = new conectar();
        $conexion = $c -> conexion();
        $password = $datos[1];

        $sql = "SELECT nombre FROM alumno WHERE noControl='$datos[0]' AND fecha='$password'";

        $result = mysqli_query($conexion,$sql);

        return mysqli_fetch_row($result)[0];
    }
    
    public function traerIDProfe($datos)
    {
        $c = new conectar();
        $conexion = $c -> conexion();
        $password =sha1($datos[1]);

        $sql = "SELECT Nombre FROM usuarios WHERE noEmpleado='$datos[0]' AND Contrasena='$password'";

        $result = mysqli_query($conexion,$sql);

        return mysqli_fetch_row($result)[0];
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

    public function agregarAlumno($datos)
    {
        $c= new conectar();
        $conexion=$c->conexion();

                $sql = "INSERT INTO alumno(noControl, paterno, materno, nombre, carrera, fecha)
                values(
                    '$datos[0]',
                    '$datos[1]',
                    '$datos[2]',
                    '$datos[3]',
                    '$datos[4]',
                    '$datos[5]'
                )";

        
                return mysqli_query($conexion,$sql);
    }

    public function actualizarAlumno($datos)
    {
        $c= new conectar();
        $conexion=$c->conexion();
        //$curso = self::traerID();
        
                
                $sql = "UPDATE alumno SET 
                fecha = '$datos[1]'
                WHERE noControl='$datos[0]'";

        
                return mysqli_query($conexion,$sql);
    }
}
?>