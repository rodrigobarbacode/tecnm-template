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
                    <a href="#" onclick="toggleSubmenu('perfiles')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/100/FFFFFF/user--v1.png" alt="user--v1"/>        
                        Perfil
                    <img id="perfiles" class="submenu-button" width="20" height="20" src="https://img.icons8.com/ios/50/FFFFFF/expand-arrow--v1.png" alt="expand-arrow--v1"/>
                    </a>
                </div>

                <div class="submenu perfiles item-style d-none">
                    <a href="#" onclick="contentToggle('ingreso')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/fire-element--v1.png" alt="fire-element--v1"/>        
                        de Ingreso
                    </a>
                </div>

                <div class="submenu perfiles item-style d-none">
                    <a href="#" onclick="contentToggle('egreso')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/door.png" alt="door"/>     
                        de Egreso
                    </a>
                </div>

                <div class="item-style">
                    <a href="#" onclick="contentToggle('reticula')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/water.png" alt="water"/>                        
                        Reticulas
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
                    <h1>Contador Público</h1> 
                </div>
            </div>
            <!-- Renglon 'Header' que presenta el nombre del departamento -->
            
            <!-- Inicio -->
            <div id="inicio" class="row yogurt-defase p-2 mt-5 mb-5 m-3">
                <div class="col-md-12 pt-4 pr-4 pl-4">
                    <h2>Inicio</h2>
                    <hr>
                </div>

                <div class="col-md-12 p-4">
                    <h4>Objetivo</h4> <br>
                    <p style="text-align: left;">
                    Formar profesionistas en Ingeniería Química competentes 
                    para investigar, generar y aplicar el conocimiento 
                    científico y tecnológico, que le permita identificar y 
                    resolver problemas de diseño, operación, adaptación, optimización 
                    y administración en industrias químicas y de servicios, 
                    con calidad, seguridad, economía, usando racional y eficientemente 
                    los recursos naturales, conservando el medio ambiente, cumpliendo 
                    el código ético de la profesión y participando en el bienestar de 
                    la sociedad. Misión: Formar profesionales en Ingeniería Química 
                    con enfoque en competencias a través de proyectos de docencia, 
                    investigación y vinculación con valores que contribuyan al bienestar social 
                    y al desarrollo sustentable de la región. Visión: Ser un Instituto 
                    de vanguardia a nivel nacional con reconocimiento internacional, 
                    formador de profesionales íntegros y competitivos a nivel global, 
                    comprometidos con el progreso de la sociedad. <br> <br> <br>
                    </p>

                    <h4>Campo de Accion</h4> <br>
                    <p style="text-align: left;">
                    El programa de Ingeniería Química ha sido diseñado para favorecer 
                    la formación multidisciplinaria de los egresados que contribuya 
                    a su inserción laboral en las diversas ramas del sector de la 
                    industria de la transformación, incluyendo, pero no limitado 
                    a: la industria química, petroquímica, de los polímeros, de 
                    alimentos, metal mecánica, cervecera, electroquímica. En 
                    general, los campos de aplicación podrán ser en la Industria 
                    Química y de Transformación, Centros de Investigación, Docencia 
                    a nivel medio y superior y otros. <br> <br>

                    El Ingeniero Químico ocupa una gran gama de puestos en el sector 
                    productivo. Por ejemplo: Supervisor de Procesos, Diseñador de 
                    Equipos y Procesos de Producción, Supervisor de Control de 
                    Calidad, Valuador de Procesos, Supervisor de Análisis Químicos 
                    e Industriales, Gerente de Producción, Gerente de Planta, 
                    Investigador, etc. <br> <br>

                    Además, se ocupan en el sector de servicios en: Puestos 
                    Administrativos y algunos más en el área docente como profesores 
                    o investigadores. El egresado también puede realizar proyectos 
                    de emprendimiento para poder crear sus propias empresas.
                    </p>
                </div>
            </div>
            <!-- Inicio -->

            <!-- Ingreso -->
            <div id="ingreso" class="row yogurt-defase p-2 mt-5 mb-5 m-3">
                <div class="col-md-12 pt-4 pr-4 pl-4">
                    <h2>Perfil de Ingreso</h2>
                    <hr>
                </div>

                <div class="col-md-12 p-4" style="text-align: left;">
                    <p>
                        <ol style="text-align: left;">
                            <li>
                            Haber cursado en el bachillerato el Área de las Ciencias Físico- Matemáticas y de las Ingenierías.
                            </li>
                            <li>
                            Poseer conocimientos generales de computación (Paquetería básica, principios de programación).
                            </li>
                            <li>
                            Tener capacidad de razonamiento verbal, lógico y numérico.
                            </li>
                            <li>
                            Poseer habilidades para el trabajo en equipo a través de la apertura al diálogo e intercambio de ideas.
                            </li>
                            <li>
                            Poseer conocimientos básicos de inglés.
                            </li>
                            <li>
                            Capacidad de abstracción, así como creatividad para plantear y resolver problemas.
                            </li>
                            <li>
                            Actitud crítica y propositiva para enfrentar retos.
                            </li>
                            <li>
                            Compromiso con la preservación del medio ambiente y la sustentabilidad.
                            </li>
                        </ol>
                    </p>
                </div>
            </div>
            <!-- Ingreso -->

            <!-- Egreso -->
            <div id="egreso" class="row yogurt-defase p-2 mt-5 mb-5 m-3">
                <div class="col-md-12 pt-4 pr-4 pl-4">
                    <h2>Perfil de Egreso</h2>
                    <hr>
                </div>

                <div class="col-md-12 p-4" style="text-align: left;">
                    <p>
                        <ol style="text-align: left;">
                            <li>
                            Diseñar, seleccionar, operar, optimizar y controlar procesos 
                            en industrias químicas y de servicios con base en el 
                            desarrollo tecnológico de acuerdo con las normas de higiene 
                            y seguridad, de manera sustentable.
                            </li>
                            <li>
                            Colaborar en equipos interdisciplinarios y multiculturales 
                            en su ámbito laboral, con actitud innovadora, espíritu crítico, 
                            disposición al cambio y apego a la ética profesional.
                            </li>
                            <li>
                            Planear e implementar sistemas de gestión de calidad, ambiental 
                            e higiene y seguridad en los diferentes sectores, conforme 
                            a las normas nacionales e internacionales.
                            </li>
                            <li>
                            Utilizar las tecnologías de la información y comunicación 
                            como herramientas en la construcción de soluciones a problemas 
                            de ingeniería y difundir el conocimiento científico y tecnológico.
                            </li>
                            <li>
                            Realizar innovación y adaptación de tecnología en procesos 
                            aplicando la metodología científica, con respeto a la propiedad 
                            intelectual.
                            </li>
                            <li>
                            Utilizar un segundo idioma en su ámbito laboral según los 
                            requerimientos del entorno.
                            </li>
                            <li>
                            Comunicarse en forma oral y escrita en el ámbito laboral de manera 
                            expedita y concisa.
                            </li>
                            <li>
                            Poseer actitud creativa, emprendedora y de liderazgo para 
                            impulsar y crear empresas que contribuyan al progreso nacional.
                            </li>
                            <li>
                            Administrar recursos humanos, materiales y financieros 
                            para los sectores público y privado, acorde a modelos 
                            administrativos vigentes.
                            </li>
                            <li>
                            Poseer actitudes de superación continua para lograr 
                            metas personales y profesionales con pertinencia y competitividad.
                            </li>
                            <li>
                            Dar seguimiento a programas de mantenimiento a equipos 
                            e instalaciones, control de producción y productividad.
                            </li>
                        </ol>
                    </p>
                </div>
            </div>
            <!-- Egreso -->
            

            <div id="reticula" class="row yogurt-defase p-2 mt-5 mb-5 m-3">
                <div class="col-md-12 pt-4 pr-4 pl-4 table-responsive" style ="scrollbar-color: #1b396a !important;">
                    <h2>Reticula Escolar</h2>
                    <hr>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Semestre 1</th>
                            <th>Semestre 2</th>
                            <th>Semestre 3</th>
                            <th>Semestre 4</th>
                            <th>Semestre 5</th>
                            <th>Semestre 6</th>
                            <th>Semestre 7</th>
                            <th>Semestre 8</th>
                            <th>Semestre 9</th>
                        </thead>
                        <tbody>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/quimica/Sem1/AC007 Taller de Etica.pdf')">
                                    Taller
                                    de
                                    Etica
                                    ACA-0907
                                    </a>
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('\assets\tec-files\carreras\quimica\Sem2\AC003 Algebra Lineal.pdf')">
                                    Algebra
                                    Lineal
                                    ACF-0903
                                    </a>
                                </td>
                                <td class="Sem-3">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('\assets\tec-files\carreras\quimica\Sem3\Análisis de Datos Experimentales..pdf')">
                                    Analisis de
                                    Datos
                                    Experimentales
                                    IQF-1001
                                    </a>
                                </td>
                                <td class="Sem-4">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem4\Métodos Numéricos..pdf')">
                                    Metodos
                                    Numericos
                                    IQH-1014
                                    </a>
                                </td>
                                <td class="Sem-5">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem5\AC008 Desarrollo Sustentable.pdf')">
                                    Desarrollo
                                    Sustentable
                                    ACD-0908
                                    </a>
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem6\AC009 Taller de Investigacion I.pdf')">
                                    Ingenieria de
                                    Costos
                                    IQC-1008
                                    </a>
                                </td>
                                <td class="Sem-7">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem7\AC010 Taller de Investigacion II.pdf')">
                                    Taller de
                                    Investigación II
                                    ACA-0910
                                    </a>
                                </td>
                                <td class="Sem-8">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem8\Síntesis y Optimización de Procesos.pdf')">
                                    Sintesis y
                                    Optimizacion de
                                    Procesos
                                    IQF-1024
                                    </a>
                                </td>
                                <td class="Sem-9">
                                    <a href="javascript:void(0);">
                                    Diseño de
                                    Plantas
                                    Alimentarias
                                    BPD-1705
                                    </a>
                                </td>
                            </tr>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('assets\tec-files\carreras\quimica\Sem1\AC006 Fundamentos de Investigacion.pdf')">
                                    Fundamentos de
                                    Investigacion
                                    ACC-0906
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('\assets\tec-files\carreras\quimica\Sem2\AE042 Mecanica Clasica.pdf')">
                                    Mecanica
                                    Clasica
                                    AEF-1042
                                    </a>
                                </td>
                                <td class="Sem-3">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('\assets\tec-files\carreras\quimica\Sem3\Electricidad, Magnetismo y Óptica..pdf')">
                                    Electricidad,
                                    Magnetismo y
                                    Optica
                                    IQF-1003
                                    </a>
                                </td>
                                <td class="Sem-4">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem4\AC005 Ecuaciones Diferenciales.pdf')">
                                    Ecuaciones
                                    Diferenciales
                                    ACF-0905
                                    </a>
                                </td>
                                <td class="Sem-5">
                                    <a href="javascript:void(0);">
                                    Laboratorio
                                    Integral I
                                    IQN-1010
                                    </a>
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem6\Procesos de separación II.pdf')">
                                    Proceso de
                                    Separacion II
                                    IQF-1016
                                    </a>
                                </td>
                                <td class="Sem-7">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem7\Procesos de Separación III.pdf')">
                                    Proceso de
                                    Separacion III
                                    IQF-1017
                                    </a>
                                </td>
                                <td class="Sem-8">
                                    <a href="javascript:void(0);">
                                    Introduccion a la
                                    Biotecnologia
                                    BPP-1702
                                    </a>
                                </td>
                                <td class="Sem-9">
                                    <a href="javascript:void(0);">
                                    Residencia
                                    Profesional
                                    </a>
                                </td>
                            </tr>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('\assets\tec-files\carreras\quimica\Sem1\AC001 Calculo Diferencial.pdf')">
                                    Calculo
                                    Diferencial
                                    ACF-0901
                                    </a>
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('\assets\tec-files\carreras\quimica\Sem2\AC002 Calculo Integral.pdf')">
                                    Calculo
                                    Integral
                                    ACF-0902
                                    </a>
                                </td>
                                <td class="Sem-3">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('\assets\tec-files\carreras\quimica\Sem3\AC004 Calculo Vectorial.pdf')">
                                    Calculo
                                    Vectorial
                                    ACF-0904
                                    </a>
                                </td>
                                <td class="Sem-4">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem4\Mecanismos de Transferencia.pdf')">
                                    Mecanismos de
                                    Transferencia
                                    IQF-1013
                                    </a>
                                </td>
                                <td class="Sem-5">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem5\Balance de Momento, Calor y Masa.pdf')">
                                    Balance de
                                    Momentum, Calor
                                    y Masa
                                    IQJ-1002
                                    </a>
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);">
                                    Laboratorio
                                    Integral II
                                    IQN-1011
                                    </a>
                                </td>
                                <td class="Sem-7">
                                    <!-- nothing -->
                                </td>
                                <td class="Sem-8">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem8\AE039 Instrumentacion y Control.pdf')">
                                    Instrumentacion
                                    y Control
                                    AEF-1039
                                    </a>
                                </td>
                                <td class="Sem-9">
                                    <!-- nothing -->
                                </td>
                            </tr>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('\assets\tec-files\carreras\quimica\Sem1\AE060 Quimica Inorganica.pdf')">
                                    Quimica
                                    Inorganica
                                    AEF-1060
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('\assets\tec-files\carreras\quimica\Sem2\Química orgánica I.pdf')">
                                    Qumica
                                    Organica I
                                    IQF-1019
                                    </a>
                                </td>
                                <td class="Sem-3">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem3\Química Orgánica II.pdf')">
                                    Quimica
                                    Organica II
                                    IQF-1020
                                    </a>
                                </td>
                                <td class="Sem-4">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem4\Ingeniería Ambiental.pdf')">
                                    Ingenieria
                                    Ambiental
                                    IQF-1007
                                    </a>
                                </td>
                                <td class="Sem-5">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem5\Procesos de Separación I.pdf')">
                                    Proceso de
                                    Separacion I
                                    IQF-1015
                                    </a>
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem6\Fisicoquímica II.pdf')">
                                    Fisicoquimica II
                                    IQF-1005
                                    </a>
                                </td>
                                <td class="Sem-7">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem7\Reactores Quimicos.pdf')">
                                    Reactores
                                    Quimicos
                                    IQF-1021
                                    </a>
                                </td>
                                <td class="Sem-8">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem8\Ingeniería de Proyectos.pdf')">
                                    Ingenieria
                                    de Proyectos
                                    IQM-1009
                                    </a>
                                </td>
                                <td class="Sem-9">
                                <!-- nothing -->
                                </td>
                            </tr>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('\assets\tec-files\carreras\quimica\Sem1\Programación.pdf')">
                                    Programacion
                                    IQS-1018
                                    </a>
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('\assets\tec-files\carreras\quimica\Sem2\Salud y seguridad en el trabajo.pdf')">
                                    Salud y
                                    Seguridad en
                                    el Trabajo
                                    IQF-1022
                                    </a>
                                </td>
                                <td class="Sem-3">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem3\AE065 Termodinamica.pdf')">
                                    Termodinamica AEF-1065
                                    </a>
                                </td>
                                <td class="Sem-4">
                                    <a href="javascript:void(0);">
                                    Fisicoquimica I
                                    IQF-1004
                                    </a>
                                </td>
                                <td class="Sem-5">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem5\Fisicoquímica I.pdf')">
                                    Taller de
                                    Investigacion I
                                    ACA-0909
                                    </a>
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);">
                                    Taller de Admon
                                    General
                                    IQO-1025
                                    </a>
                                </td>
                                <td class="Sem-7">
                                    <a href="javascript:void(0);">
                                    Laboratorio
                                    Integral III
                                    IQN-1012
                                    </a>
                                </td>
                                <td class="Sem-8">
                                    <a href="javascript:void(0);"
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem8\Simulación de Procesos.pdf')">
                                    Simulacion de
                                    Procesos
                                    IQD-1023
                                    </a>
                                </td>
                                <td class="Sem-9">
                                <!-- nothing -->
                                </td>
                            </tr>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('\assets\tec-files\carreras\quimica\Sem1\AE012 Dibujo Asistido por Computadora.pdf')">
                                    Dibujo
                                    Asistido por
                                    Computadora
                                    AEO-1012
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('\assets\tec-files\carreras\quimica\Sem2\AE059 Quimica Analitica.pdf')">
                                    Quimica
                                    Analitica
                                    AEG-1059
                                    </a>
                                </td>
                                <td class="Sem-3">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem3\Gestión de la Calidad.pdf')">
                                    Gestion de
                                    Calidad
                                    IQF-1006
                                    </a>
                                </td>
                                <td class="Sem-4">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem4\AE003 Analisis Instrumental.pdf')">
                                    Analisis
                                    Instrumental
                                    AEF-1003
                                    </a>
                                </td>
                                <td class="Sem-5">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('app\views\php\public\assets\tec-files\carreras\quimica\Sem5\Ingeniería de Costos.pdf')">
                                    Balance de
                                    Energia y
                                    Materia
                                    AEF-1004
                                    </a>
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);">
                                    Taller de
                                    Investigacion II
                                    ACA-0910
                                    </a>
                                </td>
                                <td class="Sem-7">
                                    <a href="javascript:void(0);">
                                    Bioquimica
                                    BPJ-1701
                                    </a>
                                </td>
                                <td class="Sem-8">
                                    <a href="javascript:void(0);">
                                    Ingenieria de
                                    Biorreactores
                                    BPF-1704
                                    </a>
                                </td>
                                <td class="Sem-9">
                                <!--nothing-->
                                </td>
                            </tr>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <!--nothing-->
                                </td>
                                <td class="Sem-2">
                                    <!-- noithing -->
                                </td>
                                <td class="Sem-3">
                                    <!-- nothing -->
                                </td>
                                <td class="Sem-4">
                                    <!-- nothing -->
                                </td>
                                <td class="Sem-5">
                                    <!-- nothing -->
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);">
                                    Actividades
                                    Complementarias
                                    ACN-2010
                                    </a>
                                </td>
                                <td class="Sem-7">
                                    <a href="javascript:void(0);">
                                    Servicio Social
                                    </a>
                                </td>
                                <td class="Sem-8">
                                <!--nothing-->
                                </td>
                                <td class="Sem-9">
                                <!-- nothing -->
                                </td>
                            </tr>
                        </tbody>
                        
                        
                    </table>
                </div>
            </div>


        </div>
        <!-- Content -->

        

    </div>
</div>