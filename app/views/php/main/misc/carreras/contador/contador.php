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
                    <a href="#" onclick="toggleSubmenu('inicio')">
                    <img width="30" height="30" src="https://img.icons8.com/material-rounded/24/FFFFFF/home.png" alt="home"/>      
                        Inicio
                    <img id="inicio" class="submenu-button" width="20" height="20" src="https://img.icons8.com/ios/50/FFFFFF/expand-arrow--v1.png" alt="expand-arrow--v1"/>
                    </a>
                </div>

                <div class="submenu inicio item-style d-none">
                    <a href="#" onclick="contentToggle('myv')">
                    <img width="30" height="30" src="https://img.icons8.com/sf-regular-filled/48/FFFFFF/quest.png" alt="quest"/>        
                        Misión & Visión
                    </a>
                </div>

                <div class="submenu inicio item-style d-none">
                    <a href="#" onclick="contentToggle('oyp')">
                    <img width="30" height="30" src="https://img.icons8.com/windows/32/FFFFFF/goal.png" alt="goal"/>
                        Objetivo & Politica
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
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/hand.png" alt="hand"/>                        
                        de Ingreso
                    </a>
                </div>

                <div class="submenu perfiles item-style d-none">
                    <a href="#" onclick="contentToggle('egreso')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/graduation-cap--v1.png" alt="graduation-cap--v1"/>    
                        de Egreso
                    </a>
                </div>

                <div class="item-style">
                    <a href="#" onclick="contentToggle('reticula')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png" alt="calendar--v1"/>                        
                        Reticula
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
            
            <!-- Misión & Visión -->
            <div id="myv" class="row yogurt-defase p-2 mt-5 mb-5 m-3">
                <div class="col-md-12 pt-4 pr-4 pl-4">
                    <h2>Misión & Visión</h2>
                    <hr>
                </div>

                <div class="col-md-12 p-4">
                    <h4>Misión</h4> <br>
                    <p>
                    Formar profesionistas comprometidos con el desarrollo de su comunidad, 
                    capaces de diagnosticar e identificar las áreas de oportunidad para 
                    proponer alternativas de solución en las áreas contable, fiscal y 
                    financiero de las entidades económicas, para tomar decisiones en 
                    condiciones de certidumbre, logrando la calidad y la productividad en 
                    el desarrollo de su profesión de manera ética y responsable. <br> <br> <br>
                    </p>

                    <h4>Visión</h4> <br>
                    <p>
                    Ser una carrera con reconocimiento nacional e internacional, 
                    formadora de líderes especialistas, comprometidos, competitivos 
                    en el área contable, fiscal y financiera, que contribuya con su 
                    formación integral al desarrollo de la sociedad.
                    </p>
                </div>
            </div>
            <!-- Misión & Visión -->

            <!-- Objetivo & Politica -->
            <div id="oyp" class="row yogurt-defase p-2 mt-5 mb-5 m-3">
                <div class="col-md-12 pt-4 pr-4 pl-4">
                    <h2>Objetivo & Politica</h2>
                    <hr>
                </div>

                <div class="col-md-12 p-4">
                    <h4>Objetivo</h4> <br>
                    <p>
                    Formar profesionales competitivos, capaces de diseñar, establecer, 
                    aplicar, controlar y evaluar sistemas de información financiera, 
                    fiscal y administrativa, para la toma de decisiones de las entidades 
                    económicas nacionales e internacionales, con una actitud ética, 
                    crítica, emprendedora y de liderazgo, a través de la investigación 
                    y el uso de la tecnología de la información y la comunicación, 
                    fomentando el desarrollo sustentable. <br> <br> <br>
                    </p>

                    <h4>Politica</h4> <br>
                    <p>
                    Satisfacer las necesidades de sus estudiantes, con el apoyo de docentes, 
                    administrativos y personal de apoyo a la educación, comprometidas en 
                    el cumplimiento de sus procesos, su desarrollo y mejora continua para 
                    formar profesionistas íntegros, responsables con su entorno y líderes en su actividad profesional.
                    </p>
                </div>
            </div>
            <!-- Objetivo & Politica -->

            <!-- Ingreso -->
            <div id="ingreso" class="row yogurt-defase p-2 mt-5 mb-5 m-3">
                <div class="col-md-12 pt-4 pr-4 pl-4">
                    <h2>Perfil de Ingreso</h2>
                    <hr>
                </div>

                <div class="col-md-12 p-4" style="text-align: left;">
                    <p>
                        <ol>
                            <li>
                            Haber egresado del nivel medio superior preferentemente con formación en áreas administrativas y/o contables.
                            </li>
                            <li>
                            Demostrar interés por temas relacionados con las ciencias económico administrativo.
                            </li>
                            <li>
                            Poseer conocimientos básicos de acuerdo con los objetivos del nivel medio superior en: Matemáticas, Estadística, Informática, Cultura general
                            </li>
                            <li>
                            Contar con las siguientes habilidades:
                            <ul>
                                <li>Habilidad verbal y matemática.</li>
                                <li>Habilidad para analizar, sintetizar y emitir una opinión.</li>
                                <li>Habilidad para trabajar en equipo y capaz de adaptarse a diferentes entornos.</li>
                            </ul>
                            </li>
                            <li>
                            Poseer capacidad de liderazgo, capacidad de relacionarse armónicamente con otras personas y tener la habilidad de comunicarse en forma oral y escrita.
                            </li>
                            <li>
                            Tener sentido de responsabilidad, iniciativa y servicio
                            </li>
                            <li>
                            Ser una persona con plena conciencia de los principios y valores morales que deben regir al ser humano
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
                        <ol>
                            <li>
                            Diseñar, implantar, controlar, evaluar, asesorar 
                            e innovar sistemas de información financiera, 
                            administrativa, fiscal y de auditoría en entidades económicas.
                            </li>
                            <li>
                            Analizar y generar información financiera 
                            con apego a las Normas de Información Financiera 
                            para la toma de decisiones.
                            </li>
                            <li>
                            Auditar sistemas financieros, fiscales y administrativos de 
                            las entidades económicas con apego a las Normas y Procedimientos 
                            de Auditoria y Normas para Atestiguar.
                            </li>
                            <li>
                            Aplicar el marco legal pertinente a las características y 
                            necesidades de la entidad económica dentro del campo profesional.
                            </li>
                            <li>
                            Administrar estratégicamente los recursos de las entidades 
                            económicas con visión emprendedora y competitiva.
                            </li>
                            <li>
                            Conocer y cumplir el código de ética profesional.
                            </li>
                            <li>
                            Utilizar las Tecnologías de Información y Comunicación para 
                            eficientar los procesos y la toma de decisiones.
                            </li>
                            <li>
                            Desarrollar investigación asumiendo una actitud de liderazgo, 
                            compromiso y servicio con su entorno social.
                            </li>
                            <li>
                            Elaborar y evaluar proyectos de inversión de acuerdo a las 
                            características y necesidades del entorno.
                            </li>
                            <li>
                            Asumir actitud de compromiso y servicio con su entorno social y el medio ambiente.
                            </li>
                            <li>
                            Formar y promover el desarrollo de grupos de trabajo 
                            interdisciplinarios para el logro de los resultados de las 
                            entidades con un sentido de responsabilidad social y visión integradora.
                            </li>
                            <li>
                            Conocer y proponer estrategias de mercadotecnia que permitan alcanzar los 
                            objetivos de la empresa.
                            </li>
                            <li>
                            Aplicar métodos de análisis de información financiera para determinar las 
                            mejores alternativas de inversión y financiamiento.
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
                                    onclick="sendString('/assets/tec-files/carreras/contador/semestre1/cpm1030.pdf')">
                                    Introduc. A la
                                    Contabilidad
                                    Financiera
                                    CMP-1030
                                    </a>
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE2/contabilidad1.pdf')">
                                    Contabilidad
                                    Financiera I
                                    CPM-1030
                                    </a>
                                </td>
                                <td class="Sem-3">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE3/conta2.pdf')">
                                    Contabilidad
                                    Financiera II
                                    CPM-1013
                                    </a>
                                </td>
                                <td class="Sem-4">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE4/cantas.pdf')">
                                    Contabilidad de
                                    Sociedades.
                                    CDC-1011
                                    </a>
                                </td>
                                <td class="Sem-5">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE5/cpd1010.pdf')">
                                    Contabilidad
                                    Avanzada
                                    CDC-1010
                                    </a>
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE6/cpd1014.pdf')">
                                    Contabilidad
                                    Internacional
                                    CPD-1014
                                    </a>
                                </td>
                                <td class="Sem-7">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE7/cdo1037.pdf')">
                                    Semirario
                                    Contaduria
                                    CDO-1037
                                    </a>
                                </td>
                                <td class="Sem-8">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE8/seminario.pdf')">
                                    Sem de Contraloria
                                    </a>
                                </td>
                                <td class="Sem-9">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE9/labconta.pdf')">
                                    Lab de Contaduria
                                    </a>
                                </td>
                            </tr>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/semestre1/administracion.pdf')">
                                    Administración
                                    CPC-1001
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE2/etica.pdf')">
                                    Taller de
                                    Etica
                                    ACA-0907
                                    </a>
                                </td>
                                <td class="Sem-3">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE3/mercado.pdf')">
                                    Mercadotecnia CPC-1032
                                    </a>
                                </td>
                                <td class="Sem-4">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE4/costos.pdf')">
                                    Sist. de
                                    Costos
                                    Historicos
                                    CPD-1038
                                    </a>
                                </td>
                                <td class="Sem-5">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE5/cpd1039.pdf')">
                                    Sist. de
                                    Costos
                                    Predeterm
                                    CPD-1039
                                    </a>
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE6/cpf1027.pdf')">
                                    Gestión y
                                    Toma de
                                    Decisiones
                                    CPF-1027
                                    </a>
                                </td>
                                <td class="Sem-7">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE7/cpc1002.pdf')">
                                    Administracion
                                    Estrategica
                                    CPC-1002
                                    </a>
                                </td>
                                <td class="Sem-8">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE8/impuestos.pdf')">
                                    Impuestos al
                                    Comercio Exterior
                                    y Aduanas
                                    </a>
                                </td>
                                <td class="Sem-9">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE9/planeacion.pdf')">
                                    Planeación Fiscal
                                    </a>
                                </td>
                            </tr>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/semestre1/algebra.pdf')">
                                    Algebra
                                    Lineal
                                    ACF-0903
                                    </a>
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE2/calculo.pdf')">
                                    Calculo
                                    Diferencial e
                                    Integral
                                    CPD-1008
                                    </a>
                                </td>
                                <td class="Sem-3">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE3/matematicas.pdf')">
                                    Matematicas Financieras CPC-1032
                                    </a>
                                </td>
                                <td class="Sem-4">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE4/micro.pdf')">
                                    Micro-Economia CPC-1034
                                    </a>
                                </td>
                                <td class="Sem-5">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE5/cpc1031.pdf')">
                                    Macro-
                                    Economia
                                    CPC-1031
                                    </a>
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE6/cpc1003.pdf')">
                                    Admon de la
                                    Produc. y
                                    de las Operac.
                                    CPC-1003
                                    </a>
                                </td>
                                <td class="Sem-7">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE7/cph1021.pdf')">
                                    Elab y Eval.
                                    de Proyectos
                                    de Inversión
                                    CPH-1021
                                    </a>
                                </td>
                                <td class="Sem-8">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE8/medios.pdf')">
                                    Medios de
                                    Defensa Fiscal
                                    </a>
                                </td>
                                <td class="Sem-9">
                                    <a href="javascript:void(0);" >
                                    Residencia Profesional
                                    </a>
                                </td>
                            </tr>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/semestre1/fundamentos.pdf')">
                                    Fundamentos de
                                    Derecho
                                    CPC-1018
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE2/mercantil.pdf')">
                                    Derecho
                                    Mercantil
                                    CPC-1019
                                    </a>
                                </td>
                                <td class="Sem-3">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE3/derecholaboral.pdf')">
                                    Derecho Laboral y Seg. Social CPC-1015
                                    </a>
                                </td>
                                <td class="Sem-4">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE4/derecho.pdf')">
                                    Derecho
                                    Tributario
                                    CPC-1017
                                    </a>
                                </td>
                                <td class="Sem-5">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE5/cpj1028.pdf')">
                                    Impuestos
                                    Personas
                                    Morales
                                    CPJ-1028
                                    </a>
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE6/cpj1029.pdf')">
                                    Impuestos
                                    Personas
                                    Fisicas
                                    CPJ-1029
                                    </a>
                                </td>
                                <td class="Sem-7">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE7/cpj1035.pdf')">
                                    Otros Impuestos y Contribuciones CPJ-1035
                                    </a>
                                </td>
                                <td class="Sem-8">
                                <!-- nothing -->
                                </td>
                                <td class="Sem-9">
                                <!-- nothing -->
                                </td>
                            </tr>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/semestre1/desarrollo.pdf')">
                                    Desarrollo
                                    Humano
                                    CCP-1018
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE2/dinamica.pdf')">
                                    Dinamica
                                    Social
                                    CPC-1019
                                    </a>
                                </td>
                                <td class="Sem-3">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE3/gestion.pdf')">
                                    Gestión del Talento Humano CPC-1026
                                    </a>
                                </td>
                                <td class="Sem-4">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE4/auditoria.pdf')">
                                    Fundamentos de
                                    Auditoria
                                    CPC-1024
                                    </a>
                                </td>
                                <td class="Sem-5">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE5/cpd1006.pdf')">
                                    Audit.para
                                    Efectos
                                    Financieros
                                    CPD-1006
                                    </a>
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE6/cpd1007.pdf')">
                                    Audit. para
                                    Efectos
                                    Fiscales
                                    CPD-1007
                                    </a>
                                </td>
                                <td class="Sem-7">
                                <!-- nothing -->
                                </td>
                                <td class="Sem-8">
                                    <a href="javascript:void(0);">
                                    Servicio
                                    Social
                                    </a>
                                </td>
                                <td class="Sem-9">
                                <!-- nothing -->
                                </td>
                            </tr>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/semestre1/investigacion.pdf')">
                                    Fundamentos de
                                    Investigación
                                    ACC-0906
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE2/admin1.pdf')">
                                    Estadistica
                                    Admva I
                                    CPC-1022
                                    </a>
                                </td>
                                <td class="Sem-3">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE3/estadistica2.pdf')">
                                    Estadistica Admva. II CPC-1023
                                    </a>
                                </td>
                                <td class="Sem-4">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE4/tallerIn1.pdf')">
                                    Taller de
                                    Investig. I
                                    ACA-0909
                                    </a>
                                </td>
                                <td class="Sem-5">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE5/aca0910.pdf')">
                                    Taller de
                                    Investigación II
                                    ACA-0910
                                    </a>
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE6/cpc1020.pdf')">
                                    Economia
                                    Inter-
                                    Nacional
                                    CPC-1020
                                    </a>
                                </td>
                                <td class="Sem-7">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE7/cpa1041.pdf')">
                                    Taller de
                                    Informatica II
                                    CPA-1041
                                    </a>
                                </td>
                                <td class="Sem-8">
                                <!--nothing-->
                                </td>
                                <td class="Sem-9">
                                <a href="javascript:void(0);" >
                                    Actividades Complementarias
                                    </a>
                                </td>
                            </tr>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <!--nothing-->
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE2/comunicacion.pdf')">
                                    Comunicación
                                    Humana
                                    CPC-1009
                                    </a>
                                </td>
                                <td class="Sem-3">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE3/informatica.pdf')">
                                    Taller de Informatica I CPC-1009
                                    </a>
                                </td>
                                <td class="Sem-4">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE4/sustentable.pdf')">
                                    Desarrollo
                                    Sustentable
                                    ACD-0908
                                    </a>
                                </td>
                                <td class="Sem-5">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE5/cpc1005.pdf')">
                                    Anal. E. Interpretacion de
                                    Est. Finac.
                                    </a>
                                </td>
                                <td class="Sem-6">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE6/cpc1036.pdf')">
                                    Planeacion
                                    Financiera
                                    CPC-1036
                                    </a>
                                </td>
                                <td class="Sem-7">
                                    <a href="javascript:void(0);" 
                                    onclick="sendString('/assets/tec-files/carreras/contador/SEMESTRE7/cpc1004.pdf')">
                                    Alter. de Inversion y Financiamiento CPC-1004
                                    </a>
                                </td>
                                <td class="Sem-8">
                                <!--nothing-->
                                </td>
                                <td class="Sem-9">
                                <!-- nothing -->
                                </td>
                            </tr>
                            <tr class="Semestre">
                                <td class="Sem-1">
                                    <a href="javascript:void(0);">
                                    Extraescolar
                                </td>
                                <td class="Sem-2">
                                    <a href="javascript:void(0);">
                                    Extraescolar II
                                </td>
                                <td class="Sem-3">
                                    <!--nothing-->
                                </td>
                                <td class="Sem-4">
                                    <!--nothing-->
                                </td>
                                <td class="Sem-5">
                                    <!--nothing-->
                                </td>
                                <td class="Sem-6">
                                    <!--nothing-->
                                </td>
                                <td class="Sem-7">
                                    <!--nothing-->
                                </td>
                                <td class="Sem-8">
                                    <!--nothing-->
                                </td>
                                <td class="Sem-9">
                                    <!--nothing-->
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