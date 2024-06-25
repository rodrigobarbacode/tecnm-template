<!-- Contenedor encapsulador en el cual se hace todo el grid de bootstrap -->
<div class="container-fluid p-0 ml-0 mr-0 bg-tecnm" >
    <div class="row">
        <!-- Sidebar -->
        <div id="sidebar-holder" class="col-md-2 p-0">
            <div id="collapser" class="d-sm-none d-md-none d-lg-none d-xl-block">
                <a href="#" onclick="toggleSidebar()">
                <img id="collapser-icon" width="35" height="35" src="https://img.icons8.com/ios-filled/50/FFFFFF/double-left.png" alt="double-left"/>
                </a>
            </div>

            <div id="sidebar" class="col-md-12 d-sm-none d-md-none d-lg-none d-xl-block">  
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
                    <a href="#" onclick="contentToggle('content1')">
                    <img width="30" height="30" src="https://img.icons8.com/pastel-glyph/64/FFFFFF/box--v1.png" alt="box--v1"/>
                        Fechas Importantes
                    </a>
                </div>

                <div class="item-style">
                    <a href="#" onclick="toggleSubmenu('womp')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/100/FFFFFF/user--v1.png" alt="user--v1"/>        
                        Coordinadores
                    <img id="womp" class="submenu-button" width="20" height="20" src="https://img.icons8.com/ios/50/FFFFFF/expand-arrow--v1.png" alt="expand-arrow--v1"/>
                    </a>
                </div>


            </div>
        </div>
        <!-- Sidebar -->

        <!-- Content -->
        <div id="content-holder" class="col-md-9 mx-auto m-4">
            <!-- Renglon 'Header' que presenta el nombre del departamento -->
            <div id="main-title" class="row align-center m-3 yogurt-defase">
                <!-- Titulo -->
                <div class="col-md-12 p-3 align-center">
                    <h1>División de Estudios Profesionales</h1> 
                </div>

                <div class="col-md-12 p-0 mt-4">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="width:100%">
                            <img class="d-block w-100" style="height:-webkit-fill-available" src="/img/dep/comite_academico.jpeg" alt="First slide">
                            </div>
                            <div class="carousel-item" style="width:100%">
                            <img class="d-block w-100" style="height:-webkit-fill-available" src="/img/dep/solicitud_cambio.jpeg" alt="Second slide">
                            </div>
                            <div class="carousel-item" style="width:100%">
                            <img class="d-block w-100" style="height:-webkit-fill-available" src="/img/dep/solicitud_traslado.jpeg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Renglon 'Header' que presenta el nombre del departamento -->
            
            <!-- Inicio -->
            <div id="inicio" class="row yogurt-defase p-2 mt-5 mb-5 m-3">
                <!-- Izquierda -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 pt-4 pr-4 pl-4">
                            <div id="accordion" >
                                <!-- Residencia Profesional -->
                                <div class="card">
                                    <div class="card-header" id="heading1">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            Residencia Profesional
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                                        <div class="card-body" style="text-align: left;">
                                        <b>¿DÓNDE ENCUENTRO PROYECTOS PARA REALIZAR MI RESIDENCIA PROFESIONAL?</b> <br>
                                        Puedes realizar la residencia profesional por cualquiera de los siguientes mecanismos:
                                        <ol>
                                            <li>Selección en un banco de proyectos de Residencias Profesionales.</li>
                                            <li>Propuesta por parte del estudiante.</li>
                                            <li>Si eres trabajador de alguna empresa puedes proponer tu proyecto .</li>
                                        </ol>
                                        
                                        <br>
                                        
                                        <b>¿DONDE PUEDO ENCONTRAR EL BANCO DE PROYECTOS DE RESIDENCIA PROFESIONAL?</b> <br>

                                        <a href="https://docs.google.com/spreadsheets/d/1GnzSZEcDPgx0O7JcE2V83l33rFAzHjXUd3x2JrnakrY/edit?pli=1#gid=0" target="_blank">
                                            Da clic a aquí para ir al banco de proyectos de residencias
                                        </a>

                                        <br><br>

                                        <b>¿CUANDO PUEDO EMPEZAR MI TRÁMITE DE RESIDENCIA PROFESIONAL?</b> <br>
                                        La asignacion de proyetos de Residencia Profesional se debe realizar en periodos previos a la elección de la carga académica y autorizado por el (la) Jefe(a) del Departamento Académico..
                                        
                                        <br><br>

                                        <b>REQUISITOS PARA INICIAR TRÁMITE DE RESIDENCIA</b>
                                        <ol >
                                            <li>
                                                Ser alumno regular (máximo estar actualmente en 11vo semestre, 
                                                caso contrario requiere autorización especial por comité).
                                            </li>
                                            <li>Tener liberado en retícula el Servicio Social.</li>
                                            <li>Tener liberados los 5 créditos complementarios en la retícula.</li>
                                            <li>Cumplir con el 80% de créditos de la carrera.</li>
                                        </ol>

                                        <br>

                                        <b>DOCUMENTOS PARA INICIAR EL PROCESO DE RESIDENCIA</b> <br>
                                        La ubicación de TODOS los documentos del proceso de residencia están en: 
                                        <a href="https://drive.google.com/drive/folders/1R8vQ5OqPHUigDq-6tXJFW7_-adkqwDvo" target="_blank">
                                            Da clic
                                        </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Residencia Profesional -->

                                <!-- Cambio de Especialidad -->
                                <div class="card">
                                    <div class="card-header" id="heading2">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            Cambio de Especialidad
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                        <div class="card-body">
                                            <b>PASOS PARA DAR DE ALTA LA ESPECIALIDAD</b> <br>
                                            Para dar de alta tu especialidad en tu kardex sigue 
                                            los siguientes pasos: 
                                                <a href="https://drive.google.com/file/d/1b2vaIygta666sFfh1uDVoJJ_2_hDNlUW/view">
                                                    Da clic
                                                </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cambio de Especialidad -->

                                <!-- Creditos Complementarios -->
                                <div class="card">
                                    <div class="card-header" id="heading3">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                Creditos Complementarios
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                        <div class="card-body">
                                            <a href="https://docs.google.com/document/d/1LE4YrtseJwhqbscTY2BnLlIHsigLysxh/edit#heading=h.30j0zll">
                                            Da clic para visitar la pagina de Creditos Complementarios
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Creditos Complementarios -->

                                <!-- Creditos Complementarios -->
                                <div class="card">
                                    <div class="card-header" id="heading4">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                Comite Academico
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Creditos Complementarios -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Izquierda -->
            </div>
            <!-- Inicio -->

            <!-- Finale -->
            <div id="content2" class="row yogurt-defase m-3 p-2">
                <div class="col-md-8 mx-auto" style="text-align: center;">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.:</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 align-center">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Sunt veniam veritatis neque molestias, fuga explicabo 
                            dolorum id maiores ullam ea numquam necessitatibus 
                            fugiat atque! Voluptatibus qui id accusamus dolor consequuntur.
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <!-- Finale -->
        </div>
        <!-- Content -->

        

    </div>
</div>