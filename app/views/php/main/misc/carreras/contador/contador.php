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
                    <a href="#" onclick="contentToggle('oyp')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/door.png" alt="door"/>     
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
                    <a href="#">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/fire-element--v1.png" alt="fire-element--v1"/>        
                        de Ingreso
                    </a>
                </div>

                <div class="submenu perfiles item-style d-none">
                    <a href="#">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/door.png" alt="door"/>     
                        de Egreso
                    </a>
                </div>

                <div class="item-style">
                    <a href="#" onclick="contentToggle('content2')">
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
            <div id="oyp" class="row yogurt-defase m-3 p-2">
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
        </div>
        <!-- Content -->

        

    </div>
</div>