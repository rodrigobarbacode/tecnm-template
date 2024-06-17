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
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/home.png" alt="home--v1"/>        
                        Inicio
                    </a>
                </div>
                
                <div class="item-style">
                    <a href="#" onclick="toggleSubmenu('personal')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/100/FFFFFF/user--v1.png" alt="user--v1"/>
                        Personal
                    <img id="personal" class="submenu-button" width="20" height="20" src="https://img.icons8.com/ios/50/FFFFFF/expand-arrow--v1.png" alt="expand-arrow--v1"/>
                    </a>
                </div>

                <div class="submenu personal item-style d-none">
                    <a href="#" onclick="contentToggle('docente')">
                    <img width="30" height="30" src="https://img.icons8.com/external-basicons-solid-edtgraphics/50/FFFFFF/external-apple-fruits-basicons-solid-edtgraphics.png" alt="user--v1"/>        
                        Docente
                    </a>
                </div>

                <div class="submenu personal item-style d-none">
                    <a href="#" onclick="contentToggle('womp')">
                    <img width="30" height="30" src="https://img.icons8.com/pastel-glyph/64/FFFFFF/books.png" alt="user--v1"/>        
                        Estudiantes
                    </a>
                </div>

                <div class="item-style">
                    <a href="#" onclick="toggleSubmenu('programas')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/document--v1.png" alt="document"/>
                        Programas
                    <img id="programas" class="submenu-button" width="20" height="20" src="https://img.icons8.com/ios/50/FFFFFF/expand-arrow--v1.png" alt="expand-arrow--v1"/>
                    </a>
                </div>

                <div class="submenu programas item-style d-none">
                    <a href="#" onclick="contentToggle('womp')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/program.png" alt="program"/>        
                        Maestría en Sistemas Computacionales
                    </a>
                </div>

                <div class="submenu programas item-style d-none">
                    <a href="#" onclick="contentToggle('womp')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/circuit.png" alt="user--v1"/>        
                        Maestría en Ingenieria en Electrónica
                    </a>
                </div>

                <div class="item-style">
                    <a href="#" onclick="toggleSubmenu('investigacion')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/microscope.png" alt="user--v1"/>        
                        Investigación
                    <img id="investigacion" class="submenu-button" width="20" height="20" src="https://img.icons8.com/ios/50/FFFFFF/expand-arrow--v1.png" alt="expand-arrow--v1"/>
                    </a>
                </div>

                <div class="submenu investigacion item-style d-none">
                    <a href="#" onclick="contentToggle('womp')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/groups.png" alt="usergroup"/>        
                        Cuerpo Académico Informática Industrial
                    </a>
                </div>

                <div class="sidebar-separator item-style">
                    <span>Ofertas Educativas</span>
                </div>
                
                <div class="item-style">
                    <a href="#" onclick="contentToggle('')">
                    <img width="30" height="30" src="https://img.icons8.com/pastel-glyph/64/FFFFFF/checklist--v1.png" alt="checklist"/>                        
                        Convocatorias
                    </a>
                </div>

                <div class="item-style">
                    <a href="#" onclick="contentToggle('')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/saddle-stitched-booklet.png" alt="openbook"/>                        
                        Código de Conducta
                    </a>
                </div>

                <div class="item-style">
                    <a href="#" onclick="contentToggle('')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/phone.png" alt="phone"/>                        
                        Contacto
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
                    <h1>División De Estudios De Posgrado E Investigación</h1> 
                </div>
            </div>
            <!-- Renglon 'Header' que presenta el nombre del departamento -->
            
            <!-- Inicio -->
            <div id="inicio" class="row yogurt-defase p-2 mt-5 mb-5 m-3">
                <!-- img -->
                <div class="col-md-8 align-center">
                    <img src="/img/carreras/Poster-Maestria-Sistemas.jpeg" width="800px" height="1200px" alt="Convocatoria de Maestria en Sistemas">
                </div>

                <div class="col-md-4 p-4">
                    <h2>Sitios Relacionados</h2>
                    <hr>
                    <ul>
                        <li>
                            <a href="http://www.tecnm.mx/">
                                TecNM
                            </a>
                        </li>
                        <li>
                            <a href="http://www.conacyt.gob.mx/">
                                CONACYT
                            </a>
                        </li>
                        <li>
                            <a href="http://www.universia.net.mx/">
                                Universia   
                            </a>
                        </li>
                        <li>
                            <a href="http://dsa.sep.gob.mx/">
                                PROMEP
                            </a>
                        </li>
                    </ul>

                    <br><br>

                    <h2>Buzón De Quejas Y Sugerencias</h2>
                    <hr>
                    <ul>
                        <li>
                            <a href="https://forms.gle/goPkoY5f4Ln6G6328">
                            Envíanos tus quejas y/o sugerencias.
                            </a>
                        </li>
                    </ul>

                    <br><br>

                    <p>
                    Puedes consultar la Convocatoria de Ingreso 
                    al programa de Maestría en Sistemas Computacionales 
                    en la opcion de "Convocatorias"
                    </p>
                </div>
                <!-- img -->
            </div>
            <!-- Inicio -->

            <div id="docente" class="row yogurt-defase p-2 mt-5 mb-5 m-3">

                <div class="col-md-5 p-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/img/posgrado/personal/jaime_0.jpeg" alt="Jaime Olvera">
                        </div>
                        <div class="col-md-8">
                            <p>
                                <b>Jaime Olvera González</b> <br>
                                jaimeolvera@itmexicali.edu.mx <br>
                                Maestría en sistemas computacionales <br>
                                Áreas de Interés: Programación especializada y robótica
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 p-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/img/posgrado/personal/jaime_0.jpeg" alt="Jaime Olvera">
                        </div>
                        <div class="col-md-8">
                            <p>
                                Jaime Olvera González <br>
                                jaimeolvera@itmexicali.edu.mx <br>
                                Maestría en sistemas computacionales <br>
                                Áreas de Interés: Programación especializada y robótica
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 p-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/img/posgrado/personal/jaime_0.jpeg" alt="Jaime Olvera">
                        </div>
                        <div class="col-md-8">
                            <p>
                                Jaime Olvera González <br>
                                jaimeolvera@itmexicali.edu.mx <br>
                                Maestría en sistemas computacionales <br>
                                Áreas de Interés: Programación especializada y robótica
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Finale 
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
            Finale -->
        </div>
        <!-- Content -->

        

    </div>
</div>