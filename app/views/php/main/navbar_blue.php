<!-- Barra Azul encargada de desplegar una variedad de opciones relacionadas a los servicios del Tecnologico de Mexicali -->
<nav class="navbar navbar-expand-xl navbar-dark" style='background-color: #1B396A;' id="main_navbar">
       
    <button class="navbar-toggler border-0 text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
        aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> Menú Principal
    </button>

    <!--Ejemplo de Submenu NO UTILIZADO-->
    <!--
    <li class="nav-item dropdown">
        <a class="dropdown-item dropdown-toggle" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
            Nivel 2 
        </a>						
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <li><a class="dropdown-item" href="#"> Nivel 3 </a></li>
        </ul> 
    </li>
    -->
    <!-- Ejemplo: Opcion sin Menu 
    <li class="nav-item dropdown">
        <a class="nav-link active font-weight-bold" href="TecNM_Virtual">
            Nivel 1
        </a>
    </li>
    -->

    <!-- Elementos de la Barra -->
    <div class="collapse navbar-collapse pl-5 pl-lx-0" id="navbarSupportedContent2">
        <ul class="navbar-nav mr-auto">
            
            <!-- Logo del Tecnm -->
            <div class='d-none d-lg-block' id="tecnmblanco" style="visibility:hidden; ">
                <img loading='lazy' alt="TecNM" style="width: 90px; height:auto;" src="img/logos/tecnm_menu.png" />
            </div>
            
            <li class="nav-item active">
                <a class="nav-link" href="\"> <span class="icon-home"></span></a>
            </li>

            <!-- Menu: Quienes Somos -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ¿Quiénes Somos?
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    <!-- Opción: TecNM -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://www.tecnm.mx/">
                            TecNM
                        </a>
                    </li>
                    <!-- Opción: Directorio -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="http://www.itmexicali.edu.mx/directorio/index.html">
                            Directorio
                        </a>
                    </li>

                    <!-- Opción: Bienvenida -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/bienvenida"> 
                            Bienvenida
                        </a>
                    </li>
                    
                    <!-- Opción: Transparencia y Rendición de Cuentas -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/transparencia">
                            Transparencia Y Rendición de Cuentas
                        </a>
                    </li>
                    
                    <!-- Opción: Licitaciones -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/invitacion">
                            Licitaciones
                        </a>
                    </li>
                    
                    <!-- Opción: SISAD -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://administracion2.tecnm.mx/">
                            SISAD
                        </a>
                    </li>

                    <!-- Opción: SIAPOA -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://itmexicali.siapoa.com.mx/">
                            SIAPOA
                        </a>
                    </li>
                    
                    <!-- Opción: Monitoreo Ambiental -->    
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://ivan-imperial.org/air/map">
                            Monitoreo Ambiental
                        </a>
                    </li>
                    
                    
                    
                </ul>
            </li>
            
            <!-- Menu: Oferta Educativa -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Oferta Educativa
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    <!-- Opción: Ing. Administracion -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/img/carreras/ADMINISTRACION.jpeg">
                            Ing. Administración
                        </a>
                    </li>
                    
                    <!-- Opción: Contador Publico -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/assets/tec-files/carreras/cp/contador.html">
                            Contador Público
                        </a>
                    </li>

                    <!-- Opción: Ing. Sistemas Computacionales -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://sites.google.com/itmexicali.edu.mx/dsc/carreras/ing-sistemas-computacionales">
                            Ing. Sistemas Computacionales
                        </a>
                    </li>

                    <!-- Opción: Ing Electrica -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/assets/tec-files/carreras/electrica/electrica.html">
                            Ing. Eléctrica
                        </a>
                    </li>

                    <!-- Opción: Ing. Electronica -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/img/carreras/ELECTRONICA.jpg">
                            Ing. Electrónica
                        </a>
                    </li>

                    <!-- Opción: Ing. Energias Renovables -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/img/carreras/RENOVABLES.jpg">
                            Ing. Energías Renovables
                        </a>
                    </li>

                    <!-- Opción: Ing. Gestion Empresarial -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://sites.google.com/itmexicali.edu.mx/ingenieria-gestion-empresarial/inicio">
                            Ing. Gestión Empresarial
                        </a>
                    </li>

                    <!-- Opción: Ing. Industrial-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://sites.google.com/itmexicali.edu.mx/ingenieria-industrial/inicio">
                            Ing. Industrial
                        </a>
                    </li>

                    <!-- Opción: Ing. Logistica -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://sites.google.com/itmexicali.edu.mx/ingeniera-logistica/inicio">
                            Ing. Logística
                        </a>
                    </li>

                    <!-- Opción: Ing. Materiales -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/img/carreras/MATERIALES.jpg">
                            Ing. Materiales
                        </a>
                    </li>

                    <!-- Opción: Ing. Mecatronica-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://sites.google.com/d/1xfNACUTz1yk3zSwa_u17nMUqsNsi_Abb/p/1qsl_wsaDRxOeBhqMDVALpamfRUByLEAf/edit">
                            Ing. Mecatrónica
                        </a>
                    </li>

                    <!-- Opción: Ing. Mecanica -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://sites.google.com/d/1xfNACUTz1yk3zSwa_u17nMUqsNsi_Abb/p/1mVmgktr6imZMBnYXM2ZLYpnqq6rFPznA/edit">
                            Ing. Mecánica
                        </a>
                    </li>

                    <!-- Opción: Ing. Quimica -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/assets/tec-files/carreras/quimica/quimica.html">
                            Ing. Química
                        </a>
                    </li>

                    <!-- Opción: Posgrado -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="http://posgrado.itmexicali.edu.mx">
                            Posgrado
                        </a>
                    </li>
                </ul>
            </li>
            
            <!-- Menu: Aspirantes -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Aspirantes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    <!-- Opción: Convocatoria para Ingreso -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://bit.ly/Convocatoria20243">
                            Convocatoria para Ingreso
                        </a>
                    </li>
                    
                    <!-- Opción: Equivalencias de Estudio -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://bit.ly/Equiv20243">
                            Equivalencias de estudio
                        </a>
                    </li>

                    <!-- Opción: Acceso a Mindbox -->
                    <li>
                        <a class="dropdown-item" href="https://itmexicali.mindbox.app/login/aspirante">
                            Acceso a Mindbox
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Menu: Personal TecNM -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Personal TecNM
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    <!-- Opción: Recursos Humanos -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/misc/departamentos/rh/index.html">
                            Recursos Humanos
                        </a>
                    </li>

                    <!-- Opción: Mindbox -->
                    <li class="nav-item dropdown">                    
                        <a class="dropdown-item" href="http://www.itmexicali.edu.mx/mindbox/">
                            MindBox
                        </a>
                    </li>

                    <!-- Opción: CAT TecNM-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://cat.tecnm.mx/">
                            CAT TecNM
                        </a>
                    </li>

                    <!-- Opción: Correos Institucionales del Personal-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="http://www.itmexicali.edu.mx/documentos/correos.pdf">
                            Correos Institucionales del Personal
                        </a>
                    </li>

                    <!-- Opción: Moodle -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="http://moodle.itmexicali.edu.mx/login/index.php" target="_blank">
                            Moodle
                        </a>
                    </li>

                    <!-- Opción: Sistema Integral de Gestión -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="http://www.itmexicali.edu.mx/SIG/" target="_blank">
                            SIG Sistema Integral de Gestión
                        </a>
                    </li>
                </ul>
            </li>
            
            <!-- Menu: Egresados -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Egresados
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    <!-- Opción: Servicios Escolares -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/misc/departamentos/escolares/escolares.html">
                            Servicios Escolares
                        </a>
                    </li>


                    <!-- Opción: Cédula Profesional en Línea -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://www.gob.mx/cedulaprofesional">
                            Cédula Profesional en Línea
                        </a>
                    </li>

                </ul>
            </li>
                
            <!-- Menu: Departamentos -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Departamentos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <!-- Opción: Dpto de Planeación -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://sites.google.com/itmexicali.edu.mx/planeacion/inicio?pli=1">
                            Dpto de Planeación
                        </a>
                    </li>

                    <!-- Opción: Centro de Información -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/misc/departamentos/cinformacion/index.html" target="_blank">
                            Centro de Información
                        </a>
                    </li>

                    <!-- Opción: Desarrollo Académico -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://sites.google.com/itmexicali.edu.mx/dac/inicio">
                            Desarrollo Académico
                        </a>
                    </li>

                    <!-- Opción: Centro de Cómputo -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/misc/departamentos/ccomputo/index.html">
                            Centro de Cómputo
                        </a>
                    </li>

                    <!-- Opción: Actividades Extraescolares -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/misc/departamentos/extraescolares/index.html">
                            Actividades Extraescolares
                        </a>
                    </li>

                    <!-- Opción: Dpto de Recursos Materiales -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://sites.google.com/itmexicali.edu.mx/materiales/inicio">
                            Dpto de Recursos Materiales
                        </a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </div>
    
</nav>