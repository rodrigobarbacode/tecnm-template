<!-- Contenedor encapsulador en el cual se hace todo el grid de bootstrap -->
<div class="container-fluid bg-tecnm p-4 mx-auto">
    <!-- Renglon 'Header' que presenta el nombre del departamento -->
    <div class="row align-center p-5 m-3 yogurt-defase">
        <!-- Titulo -->
        <div class="col-md-12  p-2 align-center">
            <h1>Centro de Computo</h1> 
        </div>

        
    </div>
    
    <!-- Renglon en el cual tenemos el contenido -->
    <div class="row yogurt-defase p-2 mt-5 mb-5 m-3">
        <!-- SubTitulo -->
        <div class="col-md-12 pt-4 p-2 align-center">
            <h1>Correos Electrónicos Institucionales</h1> 
        </div>

        <!-- Instrucciones de Recuperacion -->
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12 pt-4 pr-4 pl-4">
                    <h2>
                        ¿Cómo solicito o recupero mi correo electrónico 
                        institucional @itmexicali.edu.mx o @mexicali.tecnm.mx?
                    </h2>
                    <hr>
                </div>
            </div>
            
            <!-- Acordion de Datos -->            
            <div id="accordion" class="col-md-12">
                <!-- @itmexicali.edu.mx -->
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3>
                                @itmexicali.edu.mx
                            </h3>
                        </button>
                    </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p>
                                Gestión del correo electrónico institucional @itmexicali.edu.mx 
                                para estudiantes y personal del plantel soportado por GMAIL 
                                con acceso a los servicios GSuite Education. Si requieres tu 
                                cuenta de correo electrónico con dominio @itmexicali.edu.mx 
                                o no recuerdas tu usuario y contraseña, solicitalo a la dirección 
                                correos@itmexicali.edu.mx indicando tu nombre completo y número 
                                de control. <br>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- @itmexicali.edu.mx -->

                <!-- @mexicali.tecnm.mx -->
                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h3>
                                @mexicali.tecnm.mx
                            </h3>
                        </button>
                    </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p>
                                Gestión del correo electrónico institucional del TecNM @mexicali.tecnm.mx 
                                para estudiantes y personal del plantel soportado por OUTLOOK 
                                con acceso a servicios Microsoft online como Office365, y requerido 
                                para trámites oficiales ante el TecNM en la plataforma CAT. 
                                Si no cuentas con tu usuario y contraseña deberás solicitarlo 
                                desde tu cuenta institucional @itmexicali.edu.mx a la dirección 
                                correos@mexicali.tecnm.mx. <br>
                            </p>  
                        </div>
                    </div>
                </div>
                <!-- @mexicali.tecnm.mx -->

            </div>
        </div>

        <!-- Imagenes con Links -->
        <div class="col-md-4 align-center">
            <div class="row">
                <!-- Imagen de itmexicali Gmail -->
                <div class="col-md-12 pt-4 pr-4 pl-4">
                    <a href="https://gmail.google.com/">
                        <img 
                        src="/img/cco_images/itmexicali.png" 
                        alt="@itmexicali.edu.mx esta en GMail">
                    </a>
                </div>
                
                <!-- Imagen de mexicali.tecnm Outlook -->
                <div class="col-md-12 pt-4 pr-4 pl-4">
                    <a href="https://www.microsoft365.com/?auth=2&home=1&from=ShellLogo">
                        <img 
                        src="/img/cco_images/mexicali-tecnm.png" 
                        alt="@mexicali.tecnm.mx esta en Outlook"
                        style="max-width: 300px; max-height: 300px;">
                    </a>
                </div>
                
                <!-- Imagen de tecnm Outlook -->
                <div class="col-md-12 p-4">
                    <a href="https://outlook.live.com/owa/">
                        <img 
                        src="/img/cco_images/itmexicali.png" 
                        alt="@tecnm.mx esta en Outlook">
                    </a>
                </div>
                
            </div>
        </div>
        <!-- Imagenes con Links -->
</div>

<script>
    let params = new URLSearchParams(window.location.search);

    if (params.get("show") == 1) {
        let accordionItem = document.getElementById("collapseOne")
        accordionItem.classList.add("show")
    } else if (params.get("show") == 2) {
        let accordionItem = document.getElementById("collapseTwo")
        accordionItem.classList.add("show")
    }
</script>