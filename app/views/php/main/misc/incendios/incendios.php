<!-- Contenedor encapsulador en el cual se hace todo el grid de bootstrap -->
<div class="container-fluid p-0 ml-0 mr-0 bg-tecnm" >
    <div class="row">
        <!-- Sidebar -->
        <div id="sidebar-holder" class="col-md-2 p-0">
            <div id="collapser" class="d-sm-n1 d-md-n1 d-lg-n1 d-xl-block">
                <a href="#" onclick="toggleSidebar()">
                <img id="collapser-icon" width="35" height="35" src="https://img.icons8.com/ios-filled/50/FFFFFF/double-left.png" alt="double-left"/>
                </a>
            </div>

            <div id="sidebar" class="col-md-12 d-sm-n1 d-md-n1 d-lg-n1 d-xl-block">  
                <div class="sidebar-separator item-style">
                    <span>Main Menu</span>
                </div>
                
                <div class="item-style">
                    <a href="#" onclick="contentToggle('inicio')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/100/FFFFFF/user--v1.png" alt="user--v1"/>        
                        Inicio
                    </a>
                </div>

                <div class="item-style">
                    <a href="#" onclick="contentToggle('modulos')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/100/FFFFFF/user--v1.png" alt="user--v1"/>        
                        Modulos
                    </a>
                </div>
                
                <div class="item-style">
                    <a href="#" onclick="contentToggle('registro')">
                    <img width="30" height="30" src="https://img.icons8.com/pastel-glyph/64/FFFFFF/box--v1.png" alt="box--v1"/>
                        Registro
                    </a>
                </div>
                
            </div>
        </div>
        <!-- Sidebar -->

        <!-- Content -->
        <div id="content-holder" class="col-md-9 mx-auto m-4">
            <!-- Renglon 'Header' que presenta el nombre del departamento -->
            <div id="main-title" class="row align-center pt-5 pb-5 m-3 yogurt-defase">
                <div class="col-md-12" style="backdrop-filter: blur(2px);">
                    <div class="row">
                        <div class="col-md-12 align-center">
                            <h1>Sistemas de Prevención y Sistemas de Protección Contra Incendios</h1>
                        </div>

                        <div class="col-md-12 pt-2 align-center">
                            <h3 style="color: #FFFFFF">Diplomado - Modalidad Semi-Presencial</h3> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Renglon 'Header' que presenta el nombre del departamento -->
            
            <!-- Renglon de Contenido -->
            <div id="inicio" class="row yogurt-defase mt-5 mb-5 m-3">

                <!-- Acerca del Curso -->
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12 p-2">
                            <h2>Acerca del Curso</h2>
                            <hr>
                        </div>
                        
                        <div class="col-md-12" >
                            <ul style="text-align: left;">
                                <li>
                                Perfiles técnicos del sector de la ingeniería y arquitectura, 
                                especializados en la redacción de proyectos o en trabajos de 
                                supervisión y dirección de obras, que quieran profundizar de 
                                forma específica en el área de la Protección Contra Incendios.
                                </li>
                                <li>
                                Recién titulados o estudiantes de últimos semestres que quieran
                                iniciar su carrera profesional en el sector de la 
                                Protección Contra Incendios.
                                </li>
                                <li>
                                Perfiles técnicos del sector asegurador industrial y comercial.
                                </li>
                                <li>
                                Perfiles técnicos del sector de la Prevención de Riesgos Laborales.
                                </li>
                                <li>
                                Jefes de Mantenimiento a cargo de instalaci1s de Protección 
                                Contra Incendios de gran envergadura.
                                </li>
                            </ul>
                        </div>

                        <!-- Objetivo -->
                        <div class="col-md-12 p-2">
                            <h2>Objetivo</h2>
                            <hr>

                            <p>
                            Al final del Diplomado el participante habrá obtenido 
                            el conocimiento general necesario para entender los 
                            principios de diseño, mantenimiento e instalación de 
                            los sistemas contra incendios.
                            </p>
                        </div>
                        <!-- Objetivo -->
                    </div>
                </div>

                
                <div class="col-md-5" style="padding-right: 0 !important">
                    <img src="/img/incendios/senalamiento.png" height="100%" width="100%" alt="señalamiento"
                    style="
                    border-bottom-right-radius: 20px;
                    border-top-right-radius: 20px;
                    ">
                </div>
                <!-- Acerca del Curso -->

                

                
            </div>
            <!-- Renglon de Contenido -->

            <!-- Modulos -->
            <div id="modulos" class="row yogurt-defase mt-5 mb-5 m-3 p-2">
                <div class="col-md-12">
                    <h2>Modulos</h2>
                    <hr>
                    <div id="accordion" >
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    I. Principios de combustión, Marco normativo, Seguridad Humana para el diseño de sistemas contra incendios y protección pasiva.  
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                                <div class="card-body">
                                    <ul style="text-align: left;">
                                        <li>Fuego</li>
                                        <li>Protección pasiva</li>
                                        <li>Marco normativo y análisis de riesgos</li>
                                        <li>Seguridad Humana</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    II. Fundamentos de sistemas activos de protección contra incendios a base de agua
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                <div class="card-body">
                                    <ul style="text-align: left;">
                                        <li>Estática y dinámica de fluidos (ejercicios sencillos)</li>
                                        <li>Introducción al cálculo hidráulico de sistemas (por encima)</li>
                                        <li>Tipos de sistemas contra incendio (húmedo, seco, diluvio y pre acción)</li>
                                        <li>Sistemas de mangueras</li>
                                        <li>Sistemas de rociadores automáticos</li>
                                        <li>Sistemas de boquillas direccionables para riesgos especiales</li>
                                        <li>Sistemas de agua-espuma</li>
                                        <li>Abastecimiento de agua (bomba y tanque)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    III. Fundamentos de sistemas de alarmas contra incendios 
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                <div class="card-body">
                                    <ul style="text-align: left;">
                                        <li>Sistemas de detección y alarmas de incendio</li>
                                        <li>Tipos de detectores automáticos de incendios</li>
                                        <li>Tipos de señales (alarma, supervisión, falla)</li>
                                        <li>Tipos de circuitos (CDI, CAN, CLS)</li>
                                        <li>Tipos de Sistemas (local protegido, voceo, estación central, del propietario, estación remota, auxiliar)</li>
                                        <li>Sistemas de control de humo y calor</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    IV. Otros sistemas de extinción 
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                <div class="card-body">
                                    <ul style="text-align: left;">
                                        <li>Extintores (ABC, CO2, AFFF, K, D)</li>
                                        <li>Sistemas de supresión (agente limpio, FM200, CO2, cocina)</li>
                                        <li>Bombas explosivas</li>
                                        <li>Sistemas de espuma (AFFF, SFFF)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading5">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    V. Mantenimiento de los sistemas contra incendios
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                                <div class="card-body">
                                    <ul style="text-align: left;">
                                        <li>Inspección</li>
                                        <li>Pruebas</li>
                                        <li>Mantenimiento</li>
                                        <li>
                                            Prácticas en sitio (nota: si todos son de mxli, 
                                            aquí se puede hacer, si no, ¿tendría que ser virtual) 
                                            A qué se refiere con prácticas? ¿A que les muevan a los 
                                            equipos?  o a realizar una visita a un cuarto de bombas?
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading6">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    VI. Instalación de sistemas contra incendios  
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                                <div class="card-body">
                                    <ul style="text-align: left;">
                                        <li>Cotización</li>
                                        <li>Contratos</li>
                                        <li>Proceso de entrada a la obra</li>
                                        <li>Supervisión de personal o contratistas</li>
                                        <li>Estimaciones de avance</li>
                                        <li>Manejo de órdenes de cambio</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modulos -->

            <!-- Registro -->
            <div id="registro" class="row yogurt-defase mt-5 mb-5 m-3">
                <!-- Requerimientos -->
                <div class="col-md-6 p-3">
                    <h2 style="text-align: center;">Requerimientos</h2>
                    <hr>
                    <ul>
                        <li>Disponibilidad para trabajar al menos 8 horas semanales</li>
                        <li>Iniciativa para el estudio independiente</li>
                        <li>Actitud creativa, innovadora y apertura al uso de tecnología</li>
                        <li>Tener acceso a internet</li>
                    </ul>
                </div>
                <div class="col-md-5 p-3">
                    <div class="row">
                        <div class="col-md-12 pb-3">
                            <h3>Inscripciones</h3>
                            3 de Junio de 2024
                        </div>
                        <div class="col-md-2 p-0 mx-auto">
                            <img width="100%" height="100%" src="/img/incendios/calendario.png" alt="Calendario">
                        </div>
                        <div class="col-md-2 p-0 mx-auto">
                            <br>
                            <h3>Inicio</h3>
                            9 de Agosto
                        </div>
                        <div class="col-md-2 p-0 mx-auto">
                            <img width="100%" height="100%" src="/img/incendios/tiempo.png" alt="Tiempo">
                        </div>
                        <div class="col-md-2 p-0 mx-auto">
                            <br>
                            <h3>Duracion</h3>
                            23 Semanas
                        </div>
                    </div>
                </div>
                <!-- Requerimientos -->

                <!-- Instructores -->
                <div class="col-md-12 pt-3 pr-3 pl-3">
                    <h2>Instructores</h2>
                    <hr>
                </div>
                <div class="col-md-12 p-3">
                    <div class="row ">
                        <div class="col-md-2 mx-auto p-1">
                            <img src="/img/incendios/frank.jpg" width="100%" alt="Frank Guzmán">
                            <b>Frank Guzmán</b>
                        </div>
                        <div class="col-md-2 mx-auto p-1">
                            <img src="/img/incendios/adrian.jpg" width="100%" alt="Adrián Hernández">
                            <b>Adrián Hernández</b>
                        </div>
                        <div class="col-md-2 mx-auto p-1">
                            <img src="/img/incendios/eduardo.jpg" width="100%" alt="Eduardo López">
                            <b>Eduardo López</b>
                        </div>
                        <div class="col-md-2 mx-auto p-1">
                            <img src="/img/incendios/manuel.jpg" width="100%" alt="Manuel Almejo">
                            <b>Manuel Almejo</b>
                        </div>
                        <div class="col-md-2 mx-auto p-1">
                            <img src="/img/incendios/ivonn.jpg" width="100%" alt="Ivonn Ochoa">
                            <b>Ivonn Ochoa</b>
                        </div>
                    </div>
                </div>
                <!-- Instructores -->
                
                <!-- Registro -->
                <div class="col-md-12 p-3" >
                   
                    <h2>Registro</h2>
                    <hr> <br>
                    <form action="/success" method="post" style="text-align: left;">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNombres">Nombre(s)</label>
                                <input type="text" class="form-control" name="inputNombres">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputApellidos">Apellidos</label>
                                <input type="text" class="form-control" name="inputApellidos">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCargo">Cargo</label>
                            <input type="text" class="form-control" name="inputCargo">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" name="inputEmail" placeholder="...@itmexicali.edu.mx o ...@mexicali.tecnm.mx">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Ciudad</label>
                                <input type="text" class="form-control" name="inputCity">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Estado</label>
                                <input type="text" class="form-control" name="inputState">
                            </div>
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary">Registrarme</button>
                    </form>
                </div>
                <!-- Registro -->
            </div>
            <!-- Registro -->

            <!-- Logos -->
            <div id="ignore" class="row align-center pt-5 pb-5 m-3 yogurt-defase">
                <div class="col-md-12" style="text-align: center;">
                    <div class="row">
                        <div class="col-md-2 mx-auto">
                            <a href="javascript:void(0)">
                                <img id="global" src="/img/incendios/global.jpg" alt="Global Mechanical">
                            </a>
                        </div>
                        <div class="col-md-2 mx-auto">
                            <a href="javascript:void(0)">
                                <img id="sep" src="/img/incendios/sep.jpg" alt="Secretaria de Educacion Publica">
                            </a>
                            
                        </div>
                        <div class="col-md-2 mx-auto">
                            <a href="javascript:void(0)">
                                <img id="tecnm" src="/img/incendios/tecmexico.jpg" alt="Tecnologico Nacional de Mexico">
                            </a>
                            
                        </div>
                        <div class="col-md-2 mx-auto">
                            <a href="javascript:void(0)">
                                <img id="itm" src="/img/incendios/tecmexicali.jpg" alt="Instituto Tecnologico de Mexicali">
                            </a>
                            
                        </div>
                        <div class="col-md-2 mx-auto">
                            <a href="javascript:void(0)">
                                <img id="bd" src="/img/incendios/bd.jpg" alt="BG Engineering">
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Logos -->

        </div>
        <!-- Content -->

        

    </div>
</div>