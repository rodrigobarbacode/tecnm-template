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
                    <span>Menu Principal</span>
                </div>
                
                <div class="item-style">
                    <a href="#" onclick="contentToggle('covid')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/100/FFFFFF/user--v1.png" alt="user--v1"/>        
                        Servicios
                    </a>
                </div>
                
                <div class="item-style">
                    <a href="#" onclick="contentToggle('egresados')">
                    <img width="30" height="30" src="https://img.icons8.com/pastel-glyph/64/FFFFFF/box--v1.png" alt="box--v1"/>
                        Egresados
                    </a>
                </div>

                <div class="item-style">
                    <a href="#" onclick="contentToggle('equivalencia')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/100/FFFFFF/user--v1.png" alt="user--v1"/>        
                        Equivalencia y Convalidación
                    </a>
                </div>

                <div class="item-style">
                    <a href="#" onclick="contentToggle('reglamentos')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/fire-element--v1.png" alt="fire-element--v1"/>        
                        Reglamentos
                    </a>
                </div>
            </div>
        </div>
        <!-- Sidebar -->

        <!-- Content -->
        <div id="content-holder" class="col-md-9 mx-auto m-4">
            <!-- Renglon 'Header' que presenta el nombre del departamento -->
            <div id="main-title" class="row align-center p-5 m-3 yogurt-defase">
                <!-- Titulo -->
                <div class="col-md-12 align-center">
                    <h1>Departamento de Servicios Escolares</h1> 
                </div>
            </div>
            <!-- Renglon 'Header' que presenta el nombre del departamento -->

            <!-- Cómo Solicitar Servicios en la Contingencia COVID19 -->
            <div id="covid" class="row">
                <div class="col-md-9 yogurt-defase p-4 mt-3 mb-3 mx-auto">
                    <div class="row">
                        <div class="col-md-12 pb-4">
                            <h2>Cómo Solicitar Servicios en la Contingencia COVID19</h2>
                        </div>

                        <div id="accordion" class="col-md-12">      
                            <!-- Servicios -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Servicios
                                    </button>
                                </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body" style="text-align: left;">
                                        <ol>
                                            <li>
                                                <a href="https://bit.ly/36SeFpa">
                                                Constancias de estudios digitales (gratuitas): Constancias, , kardex, boletas, etc.
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://bit.ly/3jnuufr">
                                                Constancias de estudios en físico (tiene costo): Constancias, kardex, boletas, etc.
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://bit.ly/3eoCzLQ">
                                                Trámite de Certificado Parcial (baja definitiva)
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://bit.ly/3oHrrPU">
                                                Trámite de Certificado de Licenciatura / Maestría
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://bit.ly/2YPBWUQ">
                                                Recepción de título en resguardo
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://bit.ly/2NkUc3i">
                                                Trámite de Acto de Recepción Profesional (proceso de titulación)
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://bit.ly/3KzkVF1">
                                                Trámite para obtener copia digital de documento en expediente de estudiante
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://bit.ly/2ArPzRW">
                                                Alta de Especialidad
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- Servicios -->

                            <!-- Becas -->
                            <div class="card">
                                <div class="card-header" id="heading2">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    Becas
                                    </button>
                                </h2>
                                </div>

                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                    <div class="card-body" style="text-align: left;">
                                        <ol>
                                            <li>
                                                <a href="https://bit.ly/3en40Wd">
                                                Beca por Orfandad
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gob.mx/becasbenitojuarez">
                                                Becas del Gobierno Federal
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- Becas -->

                            <!-- IMSS -->
                            <div class="card">
                                <div class="card-header" id="heading3">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    IMSS
                                    </button>
                                </h2>
                                </div>

                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                    <div class="card-body" style="text-align: left;">
                                        <ol>
                                            <li>
                                                <a href="https://bit.ly/3djPC0r">
                                                Vigencia / Activacion de seguro facultativo IMSS
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/IMSS pasos.pdf">
                                                IMSS Guía
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- IMSS -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cómo Solicitar Servicios en la Contingencia COVID19 -->

            <!-- Egresados -->
            <div id="egresados" class="row">
                <div class="col-md-9 yogurt-defase p-4 mt-3 mb-3 mx-auto">
                    <div class="row">
                        <div class="col-md-12 pb-4">
                            <h2>Egresados</h2>
                        </div>

                        <div id="accordion2" class="col-md-12">      
                            <!-- Titulacion -->
                            <div class="card">
                                <div class="card-header" id="heading2-1">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2-1" aria-expanded="true" aria-controls="collapse2-1">
                                    Titulacion
                                    </button>
                                </h2>
                                </div>

                                <div id="collapse2-1" class="collapse" aria-labelledby="heading2-1" data-parent="#accordion2">
                                    <div class="card-body" style="text-align: left;">
                                        <ol>
                                            <li>
                                                <a href="https://bit.ly/2NkUc3i">
                                                Trámite de Acto de Recepción Profesional (proceso de titulación)
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- Titulacion -->

                            <!-- Opciones de Titulacion -->
                            <div class="card">
                                <div class="card-header" id="heading2-2">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2-2" aria-expanded="true" aria-controls="collapse2-2">
                                    Opciones de Titulacion
                                    </button>
                                </h2>
                                </div>

                                <div id="collapse2-2" class="collapse" aria-labelledby="heading2-2" data-parent="#accordion2    ">
                                    <div class="card-body" style="text-align: left;">
                                        <ul>
                                            <li>
                                                Opciones para Titulacion
                                                <ul type="none">
                                                    <li>
                                                        <a href="/assets/tec-files/departamentos/escolares/Documentos/Opcion T. Integrada.doc">
                                                        Titulacion Integrada
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/assets/tec-files/departamentos/escolares/Documentos/Titulacion 2004 triptico.doc">
                                                        Egresados con Numero de Control de 04 Hacia Atras
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/assets/tec-files/departamentos/escolares/Documentos/Titulacion de 2004 hacia adelante triptico.doc">
                                                        Egresados con Numero de Control del 2004/02 y Adelante
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/assets/tec-files/departamentos/escolares/Documentos/Caracteristicas Generales para los trabajos profesionales en  Opciones V y VII.doc">
                                                        Caracteristicas de los Trabajos Profesionales
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                Portadas de los Proyectos
                                                <ul type="none">
                                                    <li>
                                                        <a href="/assets/tec-files/departamentos/escolares/Documentos/INTEGRAL2010.docx">
                                                        Portada Titulacion Integral 
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/assets/tec-files/departamentos/escolares/Documentos/INTEGRADA200420096.docx">
                                                        Portada Titulacion Integrada
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/assets/tec-files/departamentos/escolares/Documentos/VII_EXPERIENCIAPROF.docx">
                                                        Portada por Experiencia Profesional
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Opciones de Titulacion -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- Egresados -->

            <!-- Equivalencia y Convalidación de Estudios -->
            <div id="equivalencia" class="row">
                <div class="col-md-9 yogurt-defase p-4 mt-3 mb-3 mx-auto">
                    <div class="row">
                        <div class="col-md-12 pb-4">
                            <h2>Equivalencia y Convalidación de Estudios</h2>
                        </div>

                        <div id="accordion3" class="col-md-12">      
                            <!-- Cartel Información Equivalencia -->
                            <div class="card">
                                <div class="card-header" id="heading3-1">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3-1" aria-expanded="true" aria-controls="collapse3-1">
                                    Cartel Información Equivalencia
                                    </button>
                                </h2>
                                </div>

                                <div id="collapse3-1" class="collapse" aria-labelledby="heading3-1" data-parent="#accordion3">
                                    <div class="card-body" style="text-align: left;">
                                        <a href="/assets/tec-files/documentos/2023/documentos/Ingreso_equivalencia2024.pdf">
                                        Cartel Equivalencia
                                        </a>  
                                    </div>
                                </div>
                            </div>
                            <!-- Cartel Información Equivalencia -->

                            <!-- Solicitud de Convalidación -->
                            <div class="card">
                                <div class="card-header" id="heading3-2">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3-2" aria-expanded="true" aria-controls="collapse3-2">
                                    Solicitud de Convalidación
                                    </button>
                                </h2>
                                </div>

                                <div id="collapse3-2" class="collapse" aria-labelledby="heading3-2" data-parent="#accordion3">
                                    <div class="card-body" style="text-align: left;">
                                        <a href="/assets/tec-files/departamentos/escolares/Documentos/SOLICITUD DE CONVALIDACION.docx">
                                        Solicitud de Convalidación
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Solicitud de Convalidación -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- Equivalencia y Convalidación de Estudios -->

            <!-- Reglamentos -->
            <div id="reglamentos" class="row">
                <div class="col-md-9 yogurt-defase p-4 mt-3 mb-3 mx-auto">
                    <div class="row">
                        <div class="col-md-12 pb-4">
                            <h2>Reglamentos</h2>
                        </div>

                        <div id="accordion4" class="col-md-12">      
                            <!-- Planes 2004 y 2005 -->
                            <div class="card">
                                <div class="card-header" id="heading4-1">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse4-1" aria-expanded="true" aria-controls="collapse4-1">
                                    Planes 2004 y 2005
                                    </button>
                                </h2>
                                </div>

                                <div id="collapse4-1" class="collapse" aria-labelledby="heading4-1" data-parent="#accordion4">
                                    <div class="card-body" style="text-align: left;">
                                        <ol>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20042005/ACREDITACION-DE-ASIGNATURAS.pdf">
                                                Acreditación de Asignaturas
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20042005/CAMBIO-DE-CARRERA.pdf">
                                                Cambio de Carrera
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20042005/CONVALIDACION-DE-ESTUDIOS.pdf">
                                                Convalidación de Estudios
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20042005/MOVILIDAD-ESTUDIANTIL.pdf">
                                                Movilidad Estudiantil
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20042005/EQUIVALENCIAS-DE-ESTUDIOS.pdf">
                                                Equivalencias de Estudios
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20042005/TRANSITO-ESTUDIANTIL.pdf">
                                                Tránsito Estudiantil
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20042005/CURSOS-DE-VERANO.pdf">
                                                Cursos de Verano
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20042005/RESIDENCIA-PROFESIONAL.pdf">
                                                Residencia Profesional
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20042005/TITULACION.pdf">
                                                Titulación
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20042005/LENGUA-EXTRANJERA.pdf">
                                                Lengua Extranjera
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20042005/TUTORIA.pdf">
                                                Tutoría
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- Planes 2004 y 2005 -->

                            <!-- Planes 2009 y 2010 -->
                            <div class="card">
                                <div class="card-header" id="heading4-2">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse4-2" aria-expanded="true" aria-controls="collapse4-2">
                                    Planes 2009 y 2010
                                    </button>
                                </h2>
                                </div>

                                <div id="collapse4-2" class="collapse" aria-labelledby="heading4-2" data-parent="#accordion4">
                                    <div class="card-body" style="text-align: left;">
                                        <ol>
                                            <li>
                                                <a href="http://www.itmexicali.edu.mx/departamentos/escolares/Documentos/Reglamentos20092010/">
                                                Evaluación Acreditación Asignaturas
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.itmexicali.edu.mx/departamentos/escolares/Documentos/Reglamentos20092010/">
                                                Acreditación de Actividades Complementarias
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20092010/Lineamiento_para_la_Operacin_del_Comit_Acadmico.pdf">
                                                Operacion Comité Académico
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.itmexicali.edu.mx/departamentos/escolares/Documentos/Reglamentos20092010/">
                                                Convalidación Estudios
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20092010/Lineamiento_para_la_Movilidad_Estudiantil.pdf">
                                                Movilidad Estudiantil
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20092010/Lineamiento_para_la_Resolucin_de_Equivalencia_de_Estudios.pdf">
                                                Resolución Equivalencia Estudios
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamentos20092010/Lineamiento_para_el_Traslado_Estudiantil.pdf">
                                                Traslado Estudiantil
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.itmexicali.edu.mx/departamentos/escolares/Documentos/Reglamentos20092010/">
                                                Residencia Profesional
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.itmexicali.edu.mx/departamentos/escolares/Documentos/Reglamentos20092010/">
                                                Servicio Social
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.itmexicali.edu.mx/departamentos/escolares/Documentos/">
                                                Cursos de Verano
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.itmexicali.edu.mx/departamentos/escolares/Documentos/">
                                                Programa de Tutorías
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- Planes 2009 y 2010 -->

                            <!-- Estudiantes que ingresan a partir de agosto de 2015 -->
                            <div class="card">
                                <div class="card-header" id="heading4-3">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse4-3" aria-expanded="true" aria-controls="collapse4-3">
                                    Estudiantes que ingresan a partir de agosto de 2015
                                    </button>
                                </h2>
                                </div>

                                <div id="collapse4-3" class="collapse" aria-labelledby="heading4-3" data-parent="#accordion4">
                                    <div class="card-body" style="text-align: left;">
                                        <a href="/assets/tec-files/departamentos/escolares/Documentos/Reglamento2015/lineamientos20152.pdf">
                                        Lineamientos Vigentes TecNM
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Estudiantes que ingresan a partir de agosto de 2015 -->

                            <!-- Normateca del TecNM -->
                            <div class="card">
                                <div class="card-header" id="heading4-4">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse4-4" aria-expanded="true" aria-controls="collapse4-4">
                                    Normateca del TecNM
                                    </button>
                                </h2>
                                </div>

                                <div id="collapse4-4" class="collapse" aria-labelledby="heading4-4" data-parent="#accordion4">
                                    <div class="card-body" style="text-align: left;">
                                        <a href="https://www.tecnm.mx/?vista=Normateca">
                                        Normateca del TecNM
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Normateca del TecNM -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- Reglamentos -->

        </div>
        <!-- Content -->

    </div>
</div>