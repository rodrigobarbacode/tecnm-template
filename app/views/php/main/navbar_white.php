<!-- Menú Blanco -->

<nav class="navbar navbar-expand-xl navbar-light bg-white" id="main_navbar2" style="font-weight: bolder;">

    <!-- <a class="navbar-brand" href="#">TecNM</a> -->
    <form action='?vista=Buscar' class="navbar-brand ml-1" method='POST'>
        <input class="w-100 h-100 border align-items-center m-1 form-control" type="text" name='buscar' placeholder="Buscar" autocomplete='off' required />
        <input type="hidden" name="btn_busqueda" />
    </form>

    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> Menú
    </button>

    <div class="collapse navbar-collapse pl-5 pl-lx-0" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

            <!-- Menu: Alumnos -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Alumnos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- Opción: Reglamento del Estudiante -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://www.tecnm.mx/normateca/Direcci%C3%B3n%20de%20Asuntos%20Escolares%20y%20Apoyo%20a%20Estudiantes/Reglamento_de_Estudiantes_del_TecNM.pdf">
                            Reglamento del Estudiante
                        </a>
                    </li>

                    <!-- Opción: Repositorio de Formatos -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://drive.google.com/drive/folders/1uVIh7qyC6-1x-r9dHDUcVZlCWVcBTHTE?usp=sharing">
                            Repositorio de Formatos
                        </a>
                    </li>

                    <!-- Opción: Líneas de Pago Nuevo Ingreso y Reinscripción -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://financieros.itmexicali.edu.mx/pagos">
                            Líneas de Pago Nuevo Ingreso y Reinscripción
                        </a>
                    </li>

                    <!-- Opción: Residencia Profesional -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/residencia" target="_blank">
                            Residencia Profesional
                        </a>
                    </li>

                    <!-- Opción: Servicio Social -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/ss" target="_blank">
                            Servicio Social
                        </a>
                    </li>

                    <!-- Opción: Listado de Aportaciones -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/assets/tec-files/documentos/2024/APORTACIONES2024.pdf" target="_blank">
                            Listado de Aportaciones
                        </a>
                    </li>

                    <!-- Opción: Listado de Actividades Complementarias -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://docs.google.com/document/d/1LE4YrtseJwhqbscTY2BnLlIHsigLysxh/edit?usp=sharing&ouid=109390354595918364742&rtpof=true&sd=true" target="_blank">
                            Listado de Actividades Complementarias
                        </a>
                    </li>

                    <!-- Opción: Créditos Complementarios -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="./actividades_complementarias/" target="_blank">
                            Sistema de Créditos Complementarios (<=2020) </a>
                    </li>
                </ul>
            </li>

            <!-- Menu: Academicos -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Académicos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- Opción: Calendario -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/assets/tec-files/documentos/2024/calendario2024-1.pdf">
                            Calendario 2024-1
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Menu: Egresados -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Egresados
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- Opción: Cedula Profesional -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://www.gob.mx/cedulaprofesional">
                            Cédula Profesional en Línea
                        </a>
                    </li>

                    <!-- Opción: Tramite de Titulacion -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://bit.ly/2NkUc3i">
                            Trámite de Titulación
                        </a>
                    </li>

                    <!-- Opción: Tramite de Certificado -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://bit.ly/3oHrrPU">
                            Trámite de Certificado
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Menu: Personal -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Personal
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <!-- Opción: Reglamento de Docente -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/personaldoc">
                            Reglamento Interior de Trabajo de Personal Docente
                        </a>
                    </li>

                    <!-- Opción: Reglamento de No Docente-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/personalnodoc">
                            Reglamento Interior de Trabajo de Personal No Docente
                        </a>
                    </li>

                    <!-- Opción: CAT TecNM-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://cat.tecnm.mx/">
                            CAT TecNM
                        </a>
                    </li>

                    <!-- Opción: CVU TecNM -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://cvu.dpii.tecnm.mx/">
                            CVU TecNM
                        </a>
                    </li>

                    <!-- Opción: Citas ISSSTE -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://web.citamedicaissste.mx/issste/comun/wpu/nuevacita.aspx">
                            Citas ISSSTE
                        </a>
                    </li>

                    <!-- Opción: FOVISSSTE-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://www.gob.mx/fovissste">
                            FOVISSSTE
                        </a>
                    </li>

                    <!-- Opción: DeclaraNET -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://declaranet.gob.mx/">
                            DeclaraNET
                        </a>
                    </li>

                    <!-- Ejemplo de Subniveles en Menu
                    <div class="dropdown-divider"></div>
                    <li class="nav-item dropdown dropleft">
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nivel 2
                        </a>
                        <ul class="dropdown-menu left" aria-labelledby="navbarDropdown1">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="#"> 
                                    Nivel 3 
                                </a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nivel 3
                                </a>
                                <ul class="dropdown-menu left" aria-labelledby="navbarDropdown2">
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item" href="#" target='_blank'>
                                            Nivel 4
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item" href="#" target='_blank'>
                                            Nivel 4
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item" href="#" target='_blank'>
                                            Nivel 4
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Nivel 3
                                </a>
                                <ul class="dropdown-menu left" aria-labelledby="navbarDropdown2">
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item" href="#" target='_blank'>
                                            Nivel 4
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item" href="#" target='_blank'>
                                            Nivel 4
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </li>

            <!-- Menu: Departamentos -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Departamentos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <!-- Opción: Division de Estudios Profesionales -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="./departamentos/dep/">
                            División de Estudios Profesionales
                        </a>
                    </li>

                    <!-- Opción: Servicios Escolares -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/escolares">
                            Servicios Escolares
                        </a>
                    </li>

                    <!-- Opción: Desarrollo Academico -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://sites.google.com/itmexicali.edu.mx/dac/inicio">
                            Desarrollo Académico
                        </a>
                    </li>

                    <!-- Opción: Actividades Extraescolares-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/misc/departamentos/extraescolares/index.html">
                            Actividades Extraescolares
                        </a>
                    </li>

                    <!-- Opción: Recursos Humanos -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/misc/departamentos/rh/index.html">
                            Recursos Humanos
                        </a>
                    </li>

                    <!-- Opción: Planeacion -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://sites.google.com/itmexicali.edu.mx/planeacion/inicio?pli=1">
                            Planeación Programación y Prespuestación
                        </a>
                    </li>

                    <!-- Opción: Centro de Informacion -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/cinformacion" target="_blank">
                            Centro de Información
                        </a>
                    </li>

                    <!-- Opción: Centro de Computo -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/cco">
                            Centro de Cómputo
                        </a>
                    </li>

                    <!-- Opción: Recursos Materiales -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://sites.google.com/itmexicali.edu.mx/materiales/inicio">
                            Recursos Materiales y Servicios
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Menu: Acceso a Sistemas -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Acceso a Sistemas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <!-- Opción: Moodle -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="http://moodle.itmexicali.edu.mx/login/index.php" target="_blank">
                            Moodle
                        </a>
                    </li>

                    <!-- Opción: Mindbox -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="http://www.itmexicali.edu.mx/mindbox/">
                            MindBox
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Menu: Correo -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Correo
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <!-- Opción: Correo itmexicali.edu.mx -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/recuperacion_correo?show=1">
                            Correo @itmexicali.edu.mx
                        </a>
                    </li>

                    <!-- Opción: Correo mexicali.tecnm.mx -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/recuperacion_correo?show=2">
                            Correo @mexicali.tecnm.mx
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>

</nav>