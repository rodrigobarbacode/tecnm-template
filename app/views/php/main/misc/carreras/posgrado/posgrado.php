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
                    <span>Example Separator</span>
                </div>
                
                <div class="item-style">
                    <a href="#" onclick="contentToggle('main-title')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/100/FFFFFF/user--v1.png" alt="user--v1"/>        
                        Opcion 1
                    </a>
                </div>
                
                <div class="item-style">
                    <a href="#" onclick="contentToggle('content1')">
                    <img width="30" height="30" src="https://img.icons8.com/pastel-glyph/64/FFFFFF/box--v1.png" alt="box--v1"/>
                        Opcion 2
                    </a>
                </div>

                <div class="sidebar-separator item-style">
                    <span>Example Separator</span>
                </div>

                <div class="item-style">
                    <a href="#" onclick="toggleSubmenu('womp')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/100/FFFFFF/user--v1.png" alt="user--v1"/>        
                        Opcion 1
                    <img id="womp" class="submenu-button" width="20" height="20" src="https://img.icons8.com/ios/50/FFFFFF/expand-arrow--v1.png" alt="expand-arrow--v1"/>
                    </a>
                </div>

                <div class="submenu womp item-style d-none">
                    <a href="#">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/fire-element--v1.png" alt="fire-element--v1"/>        
                        Opcion 1
                    </a>
                </div>

                <div class="submenu womp item-style d-none">
                    <a href="#">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/door.png" alt="door"/>     
                        Opcion 2
                    </a>
                </div>
                
                <div class="item-style">
                    <a href="#" onclick="contentToggle('content2')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/water.png" alt="water"/>                        
                        Opcion 2
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
            
            <!-- Renglon de Contenido -->
            <div id="content1" class="row yogurt-defase p-2 mt-5 mb-5 m-3">
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
                </div>
                <!-- img -->
            </div>
            <!-- Renglon de Contenido -->

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