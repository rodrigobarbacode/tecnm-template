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
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/100/FFFFFF/user--v1.png" alt="user--v1"/>        
                        Inicio
                    <img id="inicio" class="submenu-button" width="20" height="20" src="https://img.icons8.com/ios/50/FFFFFF/expand-arrow--v1.png" alt="expand-arrow--v1"/>
                    </a>
                </div>

                <div class="submenu inicio item-style d-none">
                    <a href="#" onclick="contentToggle('myv')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/fire-element--v1.png" alt="fire-element--v1"/>        
                        Misión & Visión
                    </a>
                </div>

                <div class="submenu inicio item-style d-none">
                    <a href="#" onclick="contentToggle('obj')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/door.png" alt="door"/>     
                        Objetivos
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
                    <h1>Ingeniería en Electrica</h1> 
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
                    Ser un instrumento de desarrollo de su comunidad, 
                    formando profesionales de excelencia en tecnología y 
                    mística de trabajo, capaces de responder a los retos 
                    de la modernización con calidad y productividad <br> <br> <br>
                    </p>

                    <h4>Visión</h4> <br>
                    <p>
                    Ser un instituto de vanguardia a nivel 
                    nacional con reconocimiento internacional, 
                    formador de profesionistas íntegros y competitivos 
                    a nivel global comprometidos con el progreso de la sociedad. <br> <br> <br>
                    </p>

                    
                </div>
            </div>
            <!-- Misión & Visión -->

            <!-- Objetivos -->
            <div id="obj" class="row yogurt-defase p-2 mt-5 mb-5 m-3">
                <div class="col-md-12 pt-4 pr-4 pl-4">
                    <h2>Objetivo & Politica</h2>
                    <hr>
                </div>

                <div class="col-md-12 p-4">
                    
                    <h4>Objetivo General</h4> <br>
                    <p>
                    Formar profesionistas con competencias profesionales 
                    en el área de Ingeniería Eléctrica con capacidad creativa, 
                    emprendedora, de análisis, liderazgo y capacidad de 
                    trabajo en equipo, que realicen actividades de diseño, 
                    innovación, adaptación y transferencia de tecnología para 
                    resolver problemas del área de su competencia en forma 
                    competitiva atendiendo las necesidades del entorno globalizado, 
                    con una conciencia ética y social, asumiendo un compromiso 
                    con el desarrollo tecnológico sustentable. <br> <br> <br>
                    </p>

                    <h4>Objetivos Educacionales</h4> <br>
                    <p>
                        <ol style="text-align: left;">
                            <li>
                                Los egresados diseñan instalan y operan sistemas de potencia 
                                y de utilización de la energía eléctrica en base a las normas 
                                nacionales e internacionales, así como las normas 
                                de eficiencia energética. 
                            </li>
                            <li>
                                Los egresados en el área eléctrica participan en la generación 
                                y aprovechamiento de la energía eléctrica mediante el diseño, 
                                construcción y operación de plantas generadoras, equipo e 
                                instalaciones eléctricas, así como en los sistemas de transmisión 
                                y de distribución correspondientes, buscando la mayor eficiencia 
                                en el uso de la energía. 
                            </li>
                            <li>
                                Los egresados realizarán monitoreo de eficiencia energética 
                                en el sector eléctrico industrial, comercial y de servicios 
                                con el objetivo de llevar a cabo una eficiencia eléctrica y 
                                mejor control de desarrollo.
                            </li>
                            <li>
                                Los egresados diseñan sistemas eléctricos de control y 
                                automatización en diferentes procesos.
                            </li>
                            <li>
                                Los egresados participan en la gestión de proyectos 
                                de ingeniería eléctrica en los sectores públicos y privado, 
                                y pueden además ejercer de manera independiente su profesión, 
                                estableciendo sus propias empresas.
                            </li>
                        </ol>


                        Los objetivos educacionales del programa educativo son congruentes 
                        con la misión institucional y permiten hacer frente al desarrollo 
                        tecnológico que se tiene en la región. <br> <br>

                        Los objetivos educacionales propician el desarrollo tecnológico y 
                        permiten el trabajo con calidad y la productividad de acuerdo a 
                        normas nacionales e internacionales y de eficiencia energética 
                        logrando la eficiencia en los sistemas eléctricos y un mejor 
                        avance en el de desarrollo tecnológico en la comunidad esto se 
                        logra participando en el mercado laboral regional que al ser frontera 
                        permite la participación con empresas internacionales que 
                        propone la modernización en sectores público y privado y generando 
                        empresas particulares como una propuesta al crecimiento. 
                        La presencia del programa en la región ha permitido el contar 
                        con profesionistas de excelencia que están participando en el 
                        sector productivo y de servicios capaces de responder a los retos 
                        que se presentan. <br> <br> <br>
                    </p>

                </div>
            </div>
            <!-- Objetivos -->

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
                            Poseer habilidades de interpretación verbal y matemática.
                            </li>
                            <li>
                            Poseer conocimientos básicos del idioma inglés.
                            </li>
                            <li>
                            Poseer conocimientos básicos de computación.
                            </li>
                            <li>
                            Sentido de responsabilidad, disciplina, interés por el estudio, 
                            criterio de decisión y habilidad para el trabajo en equipo.
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
                            Resolver problemas de ingeniería eléctrica aplicando 
                            las ciencias básicas y los principios de la ingeniería.
                            </li>
                            <li>
                            Aplicar, analizar y sintetizar procesos de diseño de 
                            ingeniería eléctrica que resulten en proyectos 
                            que satisfacen necesidades específicas.
                            </li>
                            <li>
                            Desarrollar y conducir experimentos, analizar 
                            datos e interpretar resultados para alcanzar 
                            conclusiones basadas en su formación de ingeniero.
                            </li>
                            <li>
                            Comunicarse eficazmente de manera oral y escrita sobre 
                            temas de ingeniería.
                            </li>
                            <li>
                            Servir a la sociedad con valores éticos 
                            y sensibilidad social que tomen en cuenta el 
                            impacto de las soluciones de ingeniería eléctrica 
                            en los entornos económico, ambiental y social.
                            </li>
                            <li>
                            Actualizarse y superarse en su ámbito de especialización para 
                            adaptarse a los marcos normativos vigentes con el 
                            propósito de aplicar las normas en los proyectos 
                            de Ing. eléctrica.
                            </li>
                            <li>
                            Trabajar en equipo interdisciplinario con el objeto de diseñar, 
                            desarrollar, integrar, planear y poner en operación 
                            sistemas eléctricos.
                            </li>
                        </ol>
                        <p>
                        En el Instituto Tecnológico de Mexicali en el programa de 
                        Ingeniería Eléctrica: Los atributos de los egresados son 
                        consistentes con los objetivos educativos del programa ya 
                        que en la formación profesional promueven el trabajo en 
                        equipo, la resolución de problemas, la conducción de experimentos 
                        y prácticas de investigaciónasí como el análisis de los 
                        datos que resultan de los mismos y se forma en el trabajo 
                        interdisciplinario tan necesario para el desarrollo de la 
                        profesión.Estas prácticas para lograr los atributos en los 
                        egresados hacen la consistencia con los objetivos a lograr 
                        como egresados del programa educativo.
                        </p>
                    </p>
                </div>
            </div>
            <!-- Egreso -->
            

            <div id="reticula" class="row yogurt-defase p-2 mt-5 mb-5 m-3">
                <div class="col-md-12 pt-4 pr-4 pl-4 table-responsive" style ="scrollbar-color: #1b396a !important;">
                    <h2>Reticula Escolar</h2>
                    <hr>
                    <img src="/img/carreras/reticula_electrica.JPG" width="100%">
                </div>
            </div>


        </div>
        <!-- Content -->

        

    </div>
</div>