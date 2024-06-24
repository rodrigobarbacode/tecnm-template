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
                    <a href="#" onclick="contentToggle('servicios')">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/100/FFFFFF/user--v1.png" alt="user--v1"/>        
                        Servicios
                    </a>
                </div>
                <!--
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
                </div> -->
                
            </div>
        </div>
        <!-- Sidebar -->

        <div id="content-holder" class="col-md-9 mx-auto m-4">
            
            <!-- Renglon 'Header' que presenta el nombre del departamento -->
            <div id="main-title" class="row align-center p-5 m-3 yogurt-defase">
                <!-- Titulo -->
                <div class="col-md-12 align-center">
                    <h1>Residencia Profesional</h1> 
                </div>
            </div>
            
            <!-- Servicios -->
            <div id="servicios" class="row yogurt-defase p-2 mt-5 mb-5 m-3">
                <!-- Servicios Prestados -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 pb-4">
                            <h2>Servicios Que Ofrecemos</h2>
                        </div>

                        <div id="accordion" class="col-md-12">      
                            <!-- Documentos -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        DOCUMENTOS
                                    </button>
                                </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>
                                        Una vez cargada la residencia en tu cuenta de Mindbox, 
                                        deberás llenar el formulario en la sección de grupos-> 
                                        vinculación para poderte asignar revisor de proyecto.

                                        <a href="https://drive.google.com/drive/folders/1R8vQ5OqPHUigDq-6tXJFW7_-adkqwDvo">
                                        Formatos de residencia profesional
                                        </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Documentos -->

                            <!-- PAGOS CON TRANSFERENCIA ELECTRÓNICA BBVA -->
                            <div class="card">
                                <div class="card-header" id="heading2">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                        PAGOS CON TRANSFERENCIA ELECTRÓNICA BBVA
                                    </button>
                                </h2>
                                </div>

                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>
                                            <a href="https://forms.gle/vdFSMDhpN2yxLuin7">
                                            Captura tus datos en el formulario
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- PAGOS CON TRANSFERENCIA ELECTRÓNICA BBVA -->

                            <!-- LOS ESFUERZOS DE VINCULACIÓN -->
                            <div class="card">
                                <div class="card-header" id="heading3">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    LOS ESFUERZOS DE VINCULACIÓN
                                    </button>
                                </h2>
                                </div>

                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                    <div class="card-body" style="text-align: left;">
                                        <p>
                                        Los esfuerzos de vinculación que hasta la fecha han realizado 
                                        los Institutos Tecnológicos con su correspondiente entorno 
                                        regional, son encomiables aunque no suficientes; sin embargo, 
                                        se busca impactar más plenamente en la calidad académica de la 
                                        educación superior tecnológica en México, mediante mecanismos 
                                        que estrechen los lazos entre educandos, profesores y los 
                                        sectores productivos y sociales. <br><br>

                                        Se concibe la residencia profesional como una estrategia 
                                        educativa, con un carácter curricular, que permite al estudiante, 
                                        aún estando en proceso de formación, incorporarse profesionalmente 
                                        a los sectores productivos de bienes y servicios, a través 
                                        del desarrollo de un proyecto definido de trabajo profesional, 
                                        asesorado por instancias académicas e instancias externas. <br><br>

                                        Aprender implica participar socialmente e interactuar con 
                                        objetos de estudio y trabajo, vincular el conocimiento 
                                        teórico con diversas experiencias prácticas y ser capaz de 
                                        encontrar nuevas respuestas. La aplicación de conocimientos y 
                                        el trabajo práctico, deben ocupar un lugar importante en la 
                                        ormación profesional de los futuros egresados del Sistema Nacional 
                                        de Institutos Tecnológicos. <br><br>

                                        El desarrollo de la residencia profesional puede representar una 
                                        forma de transitar entre la teoría y la práctica. El ámbito de 
                                        trabajo, será una posibilidad para aplicar los conocimientos 
                                        adquiridos y proponer soluciones a los problemas de un campo profesional. 
                                        Con la residencia profesional, se busca que el estudiante se 
                                        vea enfrentado a situaciones que, posiblemente, rebasen su nivel 
                                        de conocimientos, que se vea obligado a desarrollar su capacidad 
                                        analítica, impulsándolo a investigar por su cuenta, a demandar 
                                        mayores explicaciones y a volver a interrogar a sus maestros. <br><br>

                                        El sentido formativo de la residencia profesional se fortalece 
                                        al propiciar que el estudiante estudie y resuelva situaciones 
                                        complejas y reales, en las que se requiere simultáneamente el 
                                        conocimiento de la ciencia y la tecnología, así como capacidad 
                                        del intelecto y sensibilidad social. <br><br>

                                        La residencia profesional promueve el logro de los siguientes objetivos: <br><br>

                                        <ol type="A">
                                            <!-- A. En el sector educativo -->
                                            <li>
                                                En el sector educativo <br>
                                                <ul>
                                                    <li>
                                                    Aumentar la vinculación entre la institución educativa 
                                                    y el entorno social y productivo.<br>
                                                    </li>
                                                    <li>
                                                    Superar el desempeño profesional y de docencia del 
                                                    profesor asesor en funciones.<br>
                                                    </li>
                                                    <li>
                                                    Tener un conocimiento más profundo del entorno social 
                                                    y productivo para procesos de actualización curricular 
                                                    y definición de especialidades.<br>
                                                    </li>
                                                    <li>
                                                    Favorecer que la aplicación en el ámbito laboral, de los 
                                                    conocimientos adquiridos en la escuela, se fortalezcan y 
                                                    permitan descubrir nuevas posibilidades de aprendizaje ante 
                                                    una experiencia real.<br>
                                                    </li>
                                                    <li>
                                                    Favorecer la obtención de experiencias por el alumno, 
                                                    al mismo tiempo que se está formando.<br>
                                                    </li>
                                                    <li>
                                                    Favorecer la formación de egresados competitivos y 
                                                    conocedores de la problemática a la que deberán enfrentarse.
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- A. En el sector educativo -->

                                            <!-- B. En los organismos gubernamentales -->
                                            <li>
                                                En los organismos gubernamentales <br>
                                                <ul>
                                                    <li>
                                                    Integrar a los alumnos en proyectos de beneficio 
                                                    social o de desarrollo regional.<br>
                                                    </li>
                                                    <li>
                                                    Participar en la asesoría, investigación y desarrollo 
                                                    de proyectos gubernamentales; por ejemplo, evaluaciones 
                                                    de impacto ambiental, diseño de redes y sistemas de bombeo, 
                                                    tendido de redes eléctricas, diseño de plantas de 
                                                    tratamiento de aguas municipales, diseño de sistemas de 
                                                    drenaje y alcantarillado, tendido de calles, etc.<br>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- B. En los organismos gubernamentales -->

                                            <!-- C. En los sectores productivos: empresariales, 
                                                industriales y los servicios -->
                                            <li>
                                                En los sectores productivos: empresariales, 
                                                industriales y los servicios<br>
                                                <ul>
                                                    <li>
                                                    Mejorar la capacitación del personal de las empresas, 
                                                    específicamente en los casos en los que el residente 
                                                    tenga oportunidad de laborar en la empresa o institución 
                                                    donde desarrolla su proyecto.<br>
                                                    </li>
                                                    <li>
                                                    Promover la participación de estos sectores en: proyectos 
                                                    de investigación, desarrollo de nuevos productos o 
                                                    desarrollo tecnológico, apoyándose en la infraestructura 
                                                    del sector educativo y viceversa.<br>
                                                    </li>
                                                    <li>
                                                    Reducir estos en diversas actividades de las empresas 
                                                    que los alumnos en residencia puedan desarrollar, previa 
                                                    capacitación; por ejemplo: control de inventarios, control 
                                                    de calidad, seguridad industrial, programas de mantenimiento, 
                                                    elaboración de manuales de operación, etc.<br>
                                                    </li>
                                                    <li>
                                                    Suplir personal profesional en las empresas durante 
                                                    períodos vacacionales (previa capacitación y especificando 
                                                    claramente las condiciones bajo las cuales se regirá el alumno).<br>
                                                    </li>
                                                    <li>
                                                    Conocer la calidad y características de la oferta de 
                                                    recursos humanos para seleccionar mejor a su personal.<br>
                                                    </li>
                                                    <li>
                                                    Orientar a las instituciones educativas sobre los 
                                                    requerimientos de los futuros profesionales necesarios en la industria.<br>
                                                    </li>
                                                    <li>
                                                    Desarrollar proyectos de industrialización de recursos 
                                                    bióticos, proyectos para el control de la contaminación ambiental, etc.<br>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- C. En los sectores productivos: empresariales, 
                                                industriales y los servicios -->
                                        </ol>
                                        <br><br>
                                        Mayores Informes: <a href="mailto:promocionprofesional@itmexicali.edu.mx">promocionprofesional@itmexicali.edu.mx</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- LOS ESFUERZOS DE VINCULACIÓN -->
                        </div>
                    </div>
                </div>
                <!-- Servicios Prestados -->

            </div>
            <!-- Servicios -->
        </div>



    </div>

</div>