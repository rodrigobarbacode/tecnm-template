
	$(document).ready(function(){

		// Envia el foco a la opciÃ³n del menu seleccionada
		$("#menu-manual a").on('click', function(event) {
		  if (this.hash !== "") {
		    event.preventDefault();
		    var hash = this.hash;
		    $('html, body').animate({
		      scrollTop: $(hash).offset().top
		    }, 800, function(){
		    	window.location.hash = hash;
		    });
		  }
		});


		//  ConfiguraciÃ³n del carrusel de 6 elementos
		$('.owl-seis').owlCarousel({  		
	  		dots: false,
	  		loop:true,
	  		navText: [ '<span class="fa-stack" style="vertical-align: top;"><i class="fas fa-circle fa-stack-2x carrusel-circulo"></i><i class="fas fa-chevron-left fa-stack-1x fa-inverse carrusel-flecha"></i></span>' , '<span class="fa-stack" style="vertical-align: top;"><i class="fas fa-circle fa-stack-2x carrusel-circulo"></i><i class="fas fa-chevron-right fa-stack-1x fa-inverse carrusel-flecha"></i></span>' ],	    
		    margin:20,
		    nav: true,	    
		    responsiveClass:true,
		        responsive:{
		            0:{
		                items:1,
		                nav:true
		            },
		            600:{
		                items:3,
		            },
		            1000:{
		                items:6,
		            }
		        }
	    })

        //  ConfiguraciÃ³n del carrusel de 1 elemento
		$('.owl-uno').owlCarousel({  		
	  		dots: false,
	  		loop:true,
	  		autoplay:true,
	  		navText: [ '<span class="fa-stack" style="vertical-align: top;"><i class="fas fa-circle fa-stack-2x carrusel-circulo"></i><i class="fas fa-chevron-left fa-stack-1x fa-inverse carrusel-flecha"></i></span>' , '<span class="fa-stack" style="vertical-align: top;"><i class="fas fa-circle fa-stack-2x carrusel-circulo"></i><i class="fas fa-chevron-right fa-stack-1x fa-inverse carrusel-flecha"></i></span>' ],	    
		    margin:0,
		    nav: true,	    
		    responsiveClass:true,
		        responsive:{
		            0:{
		                items:1,
		                nav:true
		            },
		            600:{
		                items:1,
		            },
		            1000:{
		                items:1,
		            }
		        }
	    })

	    //  ConfiguraciÃ³n del carrusel de 4 elementos
	    $('.owl-cuatro').owlCarousel({  		
	  		dots: false,
	  		loop:true,
	  		navText: [ '<span class="fa-stack" style="vertical-align: top;"><i class="fas fa-circle fa-stack-2x carrusel-circulo"></i><i class="fas fa-chevron-left fa-stack-1x fa-inverse carrusel-flecha"></i></span>' , '<span class="fa-stack" style="vertical-align: top;"><i class="fas fa-circle fa-stack-2x carrusel-circulo"></i><i class="fas fa-chevron-right fa-stack-1x fa-inverse carrusel-flecha"></i></span>' ],
		    margin:20,
		    nav: true,		    
		    responsiveClass:true,
		        responsive:{
		            0:{
		                items:1,
		                nav:true
		            },
		            600:{
		                items:2,
		            },
		            1000:{
		                items:4,
		            }
		        }
	    })

	    //  ConfiguraciÃ³n del carrusel de 3 elementos
        $('.owl-tres').owlCarousel({     		
      		dots: false,
      		loop:true,
      		navText: [ '<span class="fa-stack" style="vertical-align: top;"><i class="fas fa-circle fa-stack-2x carrusel-circulo"></i><i class="fas fa-chevron-left fa-stack-1x fa-inverse carrusel-flecha"></i></span>' , '<span class="fa-stack" style="vertical-align: top;"><i class="fas fa-circle fa-stack-2x carrusel-circulo"></i><i class="fas fa-chevron-right fa-stack-1x fa-inverse carrusel-flecha"></i></span>' ],			    
    	    margin:20,
    	    nav: true,    	    
    	    responsiveClass:true,
    	        responsive:{
    	            0:{
    	                items:1,
    	                nav:true
    	            },

    	            600:{
    	                items:2,
    	            },

    	            1000:{
    	                items:3,
    	            }
    	        }
        })
	});


	// Modifica el encabezado cuando hace scroll
	$(window).scroll(function() {

	    if ($(this).scrollTop() > 179) {


	        // Muestra el botÃ³n para regresar arriba
	        $('#top-contenedor').slideDown('slow');

	        $('#menu-principal').addClass( 'fixed-top' );
	        // $('#menu-principal').css( {
	        // "background": "rgba( 104 , 36 , 68 , .98 )"
	        // });
	        // $('#menu-principal .nav-item.active , #menu-principal .navbar-nav .nav-link:hover')
	        // .css( 'background' , 'rgba( 91 , 41 , 49 , .98 )' );

	        // Fija el menu de utilerias al hacer scroll
	        // $('#menu-utilerias').addClass( 'fixed-top' );
	        // $('#menu-utilerias').addClass( 'movil' );
			
	        /* Fija el menu manual */
	        $('#menu-manual').addClass( 'fixed-top' );
	        $('#menu-manual').addClass( 'fixed-top-menuManual' );			
	        // $('#menu-manual').css( {
	        // "background": "rgba( 93 , 39 , 47 , .98 )",
	        // "background": "rgba( 104 , 36 , 68 , .98 )",
	        // });

	        /* Fija el titulo de la escuela */
	        $('.nombreEscuela-contenedor').addClass( 'fixed-top' );

	        /* Agregar y coultar los botones de accesibilidad*/
	        $('#contenedorAccesibilidad-scroll').removeClass( 'u-oculto' );
	    		
	        /* Comprueba si existe el menu manual para ajustar la altura del margen y la posiciÃ³n de la franja del nombre de la escuea */
	        if ( $("#menu-manual").length > 0 ) {
	            $('.nombreEscuela-contenedor').addClass( 'fixed-top-tituloEscuela' );
	        } else {    			
	            $('.nombreEscuela-contenedor').addClass( 'fixed-top-menuManual' );
	        } 


	        $('#tecnmblanco').css({
	            "visibility": "visible"
	        });


	    } else {

	        // Oculta el botÃ³n para regresar arriba
	        $('#top-contenedor').slideUp('slow');

	        /* Regresa el menu principal a su posiciÃ³n original */
	        $('#menu-principal').removeClass('fixed-top');
	        $('#menu-principal').css( {
	            // "background": "rgb( 93 , 39 , 47)",
	            "background": "rgba( 27 , 57 , 106 , .98 )",
	        });
	        // $('#menu-principal .nav-item.active , #menu-principal .navbar-nav .nav-link:hover')
	        // .css( 'background' , 'rgb( 55 , 28 , 32)' );


	        /* Regresa el menu manual a su posiciÃ³n original */
	        $('#menu-manual').removeClass('fixed-top');
	        $('#menu-manual').removeClass( 'fixed-top-menuManual' );
	        // $('#menu-manual').css( 'background' , 'rgb( 104 , 36 , 68)' );
	        /* $('#menu-manual')
			.css( 'background-image' , 'linear-gradient(transparent 3px, rgba( 51 , 51 , 51 , .9 ) 3px)' ); */

	        // Ajusta el menu de utilerias si no hay scroll
	        $('#menu-utilerias').removeClass('fixed-top');
	        $('#menu-utilerias').removeClass('movil');

	        /* Regresa el nombre de escuela a su posiciÃ³n original*/
	        $('.nombreEscuela-contenedor').removeClass('fixed-top');

	        $('#tecnmblanco').css({
	            "visibility": "hidden"
	         });


			/* Agrega y oculta los botones de accesibilidad*/
    		$('#contenedorAccesibilidad-scroll').addClass( 'u-oculto' );
    		
    		
		}
	});

	/* FunciÃ³n de alto conraste */
	$(".contraste").on('click', function(event) {
		$( "body, .bg--blanco, .bg--patron-blanco, .bg--guinda, .bg--patron-guinda, .bg--gris, .bg--patron-gris, .bg--grisOscuro, .bg--grisMedio , .bg--patron-grisOscuro, .bg--grisAzulado, .oe-one-column, .oe-two-col, .dropdown-menu , .list-info " ).toggleClass( "bg--negro" );
	});

	/* Aumentar el tamaÃ±o de la letra */
	$(".aumentaLetra").on('click', function(event) {

		$('.reduceLetra').removeClass('deshabiltar');

		var donde = $('html');
		var sizeFuenteActual = donde.css('font-size');
		var sizeFuente = sizeFuenteActual.replace("px", "");

		if (sizeFuente > 16 ) {
			$('.aumentaLetra').addClass('deshabiltar');
		} 
		else {
			$('.aumentaLetra').removeClass('deshabiltar');
		}

	 	var sizeFuenteActualNum = parseFloat(sizeFuenteActual, 10);
	    var sizeFuenteNuevo = sizeFuenteActualNum+2;
		donde.css('font-size', sizeFuenteNuevo);
		return false;

	});

	// Disminuir Aumentar el tamaÃ±o de la letra
 	$(".reduceLetra").click(function(){

 		$('.aumentaLetra').removeClass('deshabiltar');
 		
 		var donde = $('html');
 		var sizeFuenteActual = donde.css('font-size');
 		var sizeFuente = sizeFuenteActual.replace("px", "");

 		if (sizeFuente < 16 ) {
 			$('.reduceLetra').addClass('deshabiltar');
 		} 
 		else {
 			$('.reduceLetra').removeClass('deshabiltar');
 		}

	 	var sizeFuenteActualNum = parseFloat(sizeFuenteActual, 10);
	    var sizeFuenteNuevo = sizeFuenteActualNum-2;
		donde.css('font-size', sizeFuenteNuevo);
		return false;

  	});

	// Resetear Aumentar el tamaÃ±o de la letra
  	$(".resetLetra").click(function(){

  		var donde = $('html');
  		
  		donde.css('font-size', '16px');
  		$('.aumentaLetra').removeClass('deshabiltar');
  		$('.reduceLetra').removeClass('deshabiltar');

  	});

  	// ENVIO DE FORMULARIOS DE CONTACTO
  	/* Funciones para envio de datos de formularios de contacto */
  	// Formulario de buzÃ³n
	$("#frmContactoBuzon").submit(function() {
    	event.preventDefault();

    	var data = {
            nombre   : $("#frmContactoBuzon #nombre").val(),
            correo   : $("#frmContactoBuzon #correo").val(),
            perfil   : $("#frmContactoBuzon #perfil").val(),            
            area     : $("#frmContactoBuzon #area").val(),
            mensaje  : $("#frmContactoBuzon #mensaje").val(),
	    };

	    console.log(data);

        $.ajax({
            type: "POST",
            // URL del servidor
            // url: "assets/files/main/lib/enviar-correo-buzon.php",
             url: "//www.cpwi-buzon404.ipn.mx/Modx/buzon/mail.php",
            data: data,
            success: function(){
            	$('#frmContactoBuzon .alert').slideDown('slow' , function() {
            		setTimeout(function() {
		                $('.alert').slideUp('slow');
		                $("#frmContactoBuzon").find(".form-control").val("");
		            },2500);
            	});
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                //alert("Status: " + textStatus); 
                //alert("Error: " + errorThrown); 
                alert('Se han enviado tus datos');
                 $('.alert').slideUp('slow');
		            $("#frmContactoBuzon").find(".form-control").val("");
            } 
        });

        return false;
    });
    
    // BUZÃ“N DE CGC DE LA DES
  	/* BuzÃ³n de quejas y sugerencias del CGC de la DirecciÃ³n de EducaciÃ³n Superior.*/
  	
	$("#frmCgcDes").submit(function() {
    	event.preventDefault();

    	var data = {
    	    
    	    asunto         : $("input:radio[name=asunto]:checked").val(),
    	    area           : $("#frmCgcDes #area").val(),
    	    nombreServidor : $("#frmCgcDes #nombreServidor").val(),
    	    servicio       : $("#frmCgcDes #servicio").val(),
    	    quejaSugerencia: $("#frmCgcDes #quejaSugerencia").val(),
    	    nombre         : $("#frmCgcDes #nombre").val(),
    	    email          : $("#frmCgcDes #email").val(),
    	    telefono       : $("#frmCgcDes #telefono").val(),
    	    funcion        : $("input:radio[name=funcion]:checked").val(),
    	    destino        : $("#frmCgcDes #destino").val()
	    };

	    console.log(data);

        $.ajax({
            type: "POST",
            // URL del servidor
             url: "//www.cpwi-buzon404.ipn.mx/Modx/buzonDSE/mail.php",
            data: data,
            success: function(){
            	$('#frmCgcDes .alert').slideDown('slow' , function() {
            		setTimeout(function() {
		                $('.alert').slideUp('slow');
		                $("#frmCgcDes").find(".form-control").val("");
		                resetRadioButtons("funcion");
		                resetRadioButtons("asunto");

		            },2500);
            	});
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                //alert("Status: " + textStatus); 
                //alert("Error: " + errorThrown); 
                alert('Se han enviado tus datos');
                 $('.alert').slideUp('slow');
		            $("#frmCgcDes").find(".form-control").val("");
		            	resetRadioButtons("funcion");
		                resetRadioButtons("asunto");

            } 
        });

        return false;
    });
    
    function resetRadioButtons(groupName) {
		    var radioBtn = document.getElementsByName(groupName);

		    for (var ii = 0; ii < radioBtn.length; ii++) {
		        var radButton = radioBtn[ii];
		        radButton.checked = false;
		    }
    }
    
	// Formulario General
	$("#frmContactoGeneral").submit(function() {
    	event.preventDefault();

    	var data = {
            nombre   : $("#frmContactoGeneral #nombre").val(),
            correo   : $("#frmContactoGeneral #correo").val(),
            mensaje  : $("#frmContactoGeneral #mensaje").val(),
            destino  : $("#frmContactoGeneral #destino").val()
	    };

	    console.log(data);

        $.ajax({
            type: "POST",
            url: "//www.cpwi-buzon404.ipn.mx/Modx/general/mail.php",
            // URL del servidor
            // url: "assets/files/main/lib/enviar-correo-general.php",
            data: data,
            success: function(){
            	$('#frmContactoGeneral .alert').slideDown('slow' , function() {
            		setTimeout(function() {
		                $('.alert').slideUp('slow');
		                $("#frmContactoGeneral").find(".form-control").val("");
		            },2500);
            	});
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                //alert("Status: " + textStatus); 
                //alert("Error: " + errorThrown); 
                alert('Se han enviado tus datos');
                 $('.alert').slideUp('slow');
		            $("#frmContactoGeneral").find(".form-control").val("");
            } 
        });

        return false;
    });
    

    // Formulario de Quejas
    $("#frmContactoQueja").submit(function() {
    	event.preventDefault();

    	var data = {
            nombre     : $("#frmContactoQueja #nombre").val(),
            apaterno   : $("#frmContactoQueja #apaterno").val(),
            amaterno   : $("#frmContactoQueja #amaterno").val(),
            edad       : $("#frmContactoQueja #edad").val(),
            correo     : $("#frmContactoQueja #correo").val(),
            nempleado  : $("#frmContactoQueja #nempleado").val(),
            unidad     : $("#frmContactoQueja #unidad").val(),
            extension  : $("#frmContactoQueja #extension").val(),
            celular    : $("#frmContactoQueja #celular").val(),
            fijo       : $("#frmContactoQueja #fijo").val(),
            mensaje    : $("#frmContactoQueja #mensaje").val(),
            destino    : $("#frmContactoQueja #destino").val()
	    };

	    console.log(data);

        $.ajax({
            type: "POST",
            url: "https://www.cpwi-buzon404.ipn.mx/Modx/queja/mail.php",
            // URL del servidor
            // url: "assets/files/main/lib/enviar-correo-queja.php",
            data: data,
            success: function(){
            	$('#frmContactoQueja .alert').slideDown('slow' , function() {
            		setTimeout(function() {
		                $('.alert').slideUp('slow');
		                $("#frmContactoQueja").find(".form-control").val("");
		            },2500);
            	});
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                //alert("Status: " + textStatus); 
                //alert("Error: " + errorThrown); 
                alert('Se han enviado tus datos');
                 $('.alert').slideUp('slow');
		            $("#frmContactoQueja").find(".form-control").val("");
            }  
        });

        return false;
    });


    // Formulario de OrientaciÃ³n
    $("#frmContactoOrientacion").submit(function() {
    	event.preventDefault();

    	var data = {
            nombre     : $("#frmContactoOrientacion #nombre").val(),
            apaterno   : $("#frmContactoOrientacion #apaterno").val(),
            amaterno   : $("#frmContactoOrientacion #amaterno").val(),
            edad       : $("#frmContactoOrientacion #edad").val(),
            correo     : $("#frmContactoOrientacion #correo").val(),
            nempleado  : $("#frmContactoOrientacion #nempleado").val(),
            unidad     : $("#frmContactoOrientacion #unidad").val(),
            extension  : $("#frmContactoOrientacion #extension").val(),
            celular    : $("#frmContactoOrientacion #celular").val(),
            fijo       : $("#frmContactoOrientacion #fijo").val(),
            mensaje    : $("#frmContactoOrientacion #mensaje").val(),
            destino    : $("#frmContactoOrientacion #destino").val()
	    };

	    console.log(data);

        $.ajax({
            type: "POST",
            url: "https://www.cpwi-buzon404.ipn.mx/Modx/orientacion/mail.php",
            // URL del servidor
            // url: "assets/files/main/lib/enviar-correo-orientacion.php",
            data: data,
            success: function(){
            	$('#frmContactoOrientacion .alert').slideDown('slow' , function() {
            		setTimeout(function() {
		                $('.alert').slideUp('slow');
		                $("#frmContactoOrientacion").find(".form-control").val("");
		            },2500);
            	});
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                //alert("Status: " + textStatus); 
                //alert("Error: " + errorThrown); 
                alert('Se han enviado tus datos');
                 $('.alert').slideUp('slow');
		            $("#frmContactoOrientacion").find(".form-control").val("");
            }  
        });

        return false;
    });
    
    $('#frmDoctorado').submit(function(){
        console.log('Entre a la funcion');
        event.preventDefault();

        var data = {
            nombre              : $("#frmDoctorado #nombre").val(),
            apellidoPaterno     : $("#frmDoctorado #apellidoPaterno").val(),
            apellidoMaterno     : $("#frmDoctorado #apellidoMaterno").val(),
            correo              : $("#frmDoctorado #correo").val(),
            domicilio           : $("#frmDoctorado #domicilio").val(),
            telefonoFijo        : $("#frmDoctorado #telefonoFijo").val(),
            celular             : $("#frmDoctorado #celular").val(),
            nacimiento          : $("#frmDoctorado #nacimiento").val(),
            edad                : $("#frmDoctorado #edad").val(),
            lugar               : $("#frmDoctorado #lugar").val(),
            nacionalidad        : $("#frmDoctorado #nacionalidad").val(),
            optSexo             : $("input:radio[name=optSexo]:checked").val(),
            estadoCivil         : $("#frmDoctorado #estadoCivil").val(),
            docIdentificacion   : $("#frmDoctorado #docIdentificacion").val(),
            maestria            : $("#frmDoctorado #maestria").val(),
            institucionMaestria : $("#frmDoctorado #institucionMaestria").val(),
            obtencionMaestria   : $("#frmDoctorado #obtencionMaestria").val(),
            especialidad        : $("#frmDoctorado #especialidad").val(),
            institucionEspecialidad : $("#frmDoctorado #institucionEspecialidad").val(),
            obtencionEspecialidad   : $("#frmDoctorado #obtencionEspecialidad").val(),
            licenciatura            : $("#frmDoctorado #licenciatura").val(),
            institucionLicenciatura : $("#frmDoctorado #institucionLicenciatura").val(),
            obtencionLicenciatura   : $("#frmDoctorado #obtencionLicenciatura").val(),
            idioma      : $("#frmDoctorado #idioma").val(),
            selectOpt1  : $("#frmDoctorado #selectOpt1").val(),
            selectOpt2  : $("#frmDoctorado #selectOpt2").val(),
            optTiempo   : $("input:radio[name=optTiempo]:checked").val(),
            optMedio    : $("input:radio[name=optMedio]:checked").val(),
            destino    : $("#frmDoctorado #destino").val()
        };

        $.ajax({
          type : "POST",
          url: "https://www.cpwi-buzon404.ipn.mx/Modx/doctoradoISRM/mail.php",
          data: data,
          success: function(){
            $('#frmDoctorado .alert').slideDown('slow' , function(){
              setTimeout(function(){
                $('.alert').slideUp('slow');
                $("#frmDoctorado").find(".form-control").val("");
              }, 2500);
            });
          },
          error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('Se han enviado tus datos');
            $('.alert').slideUp('slow');
            $('#frmDoctorado').find(".form-control").val("");
          }
        });

        return false;
    });


    // Agrega collapse a los elementos del menu manual en moviles para que al seleccionrlos se contraiga el menu
    if ( $( document ).width() > 1199 ) {
    	// alert("grande");
    	$('#menu-manual a').removeAttr( "data-toggle", "collapse" );
    	$('#menu-manual a').removeAttr( "data-target", "#navbarMenuManual" );
    	// Menu de mapas
    	$('#menu-mapas a').removeAttr( "data-toggle", "collapse" );
    	$('#menu-mapas a').removeAttr( "data-target", "#navbarMapas" );
    } else {
    	$('#menu-manual a').attr( "data-toggle", "collapse" );
    	$('#menu-manual a').attr( "data-target", "#navbarMenuManual" );
    	// Menu de mapas
    	$('#menu-mapas a').attr( "data-toggle", "collapse" );
    	$('#menu-mapas a').attr( "data-target", "#navbarMapas" );
    }



/* Query de busqueda de Google */
function mandarQueryBusqueda(){
    var texto = document.getElementById("txt_query").value;
    window.location = "http://buscador.ipn.mx/search?q="+texto+"&btnG.x=53&btnG.y=11&btnG=Buscar&btnG.x=0&btnG.y=0&client=ipn_frontend&output=xml_no_dtd&proxystylesheet=ipn_frontend&proxyreload=1&getfields=*&sort=date%3AD%3AL%3Ad1&wc=200&wc_mc=1&oe=UTF-8&ie=UTF-8&ud=1&exclude_apps=1&site=default_collection";
}


// FUNCIONES PARA EL MAPA DE GOOGLE

// Funcion con relaciÃ³n de las ubicaciones
var capas = ["NMS", "NS", "SIP", "CEC", "AC", "BIBLIOTECA"]; 
	function mostrar(capa) { 
				 console.log(capa);
		for (i = 0, total = capas.length; i < total; i ++) 
		document.getElementById(capas[i]).style.display = (capas[i] == capa) ? "block":"none"; 
		if(capa == "NMS"){
			$('#liNMS').addClass('active');
			$('#liNS').removeClass('active');
			$('#liCIP').removeClass('active');
			$('#liCEC').removeClass('active');
			$('#liAC').removeClass('active');
			$('#liBIBLIO').removeClass('active');
		}
		else if(capa == "NS"){
			$('#liNMS').removeClass('active');
			$('#liNS').addClass('active');
			$('#liCIP').removeClass('active');
			$('#liCEC').removeClass('active');
			$('#liAC').removeClass('active');
			$('#liBIBLIO').removeClass('active');
		}
		else if(capa == "SIP"){
			$('#liNMS').removeClass('active');
			$('#liNS').removeClass('active');
			$('#liCIP').addClass('active');
			$('#liCEC').removeClass('active');
			$('#liAC').removeClass('active');
			$('#liBIBLIO').removeClass('active');
		}
		else if(capa == "CEC"){
			$('#liNMS').removeClass('active');
			$('#liNS').removeClass('active');
			$('#liCIP').removeClass('active');
			$('#liCEC').addClass('active');
			$('#liAC').removeClass('active');
			$('#liBIBLIO').removeClass('active');
		}
		else if(capa == "AC"){
			$('#liNMS').removeClass('active');
			$('#liNS').removeClass('active');
			$('#liCIP').removeClass('active');
			$('#liCEC').removeClass('active');
			$('#liAC').addClass('active');
			$('#liBIBLIO').removeClass('active');
		}
		else if(capa == "BIBLIOTECA"){
			$('#liNMS').removeClass('active');
			$('#liNS').removeClass('active');
			$('#liCIP').removeClass('active');
			$('#liCEC').removeClass('active');
			$('#liAC').removeClass('active');
			$('#liBIBLIO').addClass('active');
		}
	}

function recargar(obj){
	document.getElementById('mapbusca').style.display="block";
	document.getElementById('map').style.display="none";
	console.log(obj.id);
	console.log(obj);
	//MEDIA SUPERIOR
	if(obj.id=='CECyT 1' || obj=='CECyT 1'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.7390990152167!2d-99.09301028555393!3d19.466812386864937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fbdb373b1425%3A0xec874bd4180cfa44!2sCECyT+1+Gonzalo+V%C3%A1zquez+Vela!5e0!3m2!1sen!2smx!4v1516315739223";	
	}
	else if(obj.id=='CECyT 2' || obj=='CECyT 2'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.098381082614!2d-99.21521718555418!3d19.451324686873612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2023fc381d09f%3A0x75e119f8d7dfc312!2sCECyT+2+Miguel+Bernard+Perales!5e0!3m2!1sen!2smx!4v1516316315876";	
	}
	else if(obj.id=='CECyT 3' || obj=='CECyT 3'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3759.30977950206!2d-99.02141618555201!3d19.571224786805722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f02f2509ccbd%3A0xf0e8224c80f4ee7c!2sCECyT+3+%22ESTANISLAO+RAMIREZ+RUIZ%22!5e0!3m2!1sen!2smx!4v1516316386652";	
	}
	else if(obj.id=='CECyT 4' || obj=='CECyT 4'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.350265563637!2d-99.21667148555522!3d19.39726638690442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201b8f05f5dc3%3A0x5eb9ba560d4e9213!2sCECyT+4+L%C3%A1zaro+C%C3%A1rdenas!5e0!3m2!1sen!2smx!4v1516316528999";	
	}
	else if(obj.id=='CECyT 5' || obj=='CECyT 5'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5605377256343!2d-99.15242398555455!3d19.431384886885024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff2b6e0540e3%3A0x73e89933939aab17!2sCentro+de+Estudios+Cient%C3%ADficos+y+Tecnol%C3%B3gicos+5+Benito+Ju%C3%A1rez!5e0!3m2!1sen!2smx!4v1516316762232";	
	}
	else if(obj.id=='CECyT 6' || obj=='CECyT 6'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.714362267313!2d-99.16108488555393!3d19.46787828686428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8f02004cadb%3A0xd0d73dd0768f47b5!2sCECYT+6+Miguel+Oth%C3%B3n+de+Mendizabal!5e0!3m2!1sen!2smx!4v1516317209742";	
	}
	else if(obj.id=='CECyT 7' || obj=='CECyT 7'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.544843000805!2d-99.02924168555614!3d19.34554728693379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fd586196a101%3A0xb960e4d31b06396e!2sCECYT+N.7+%22Cuauht%C3%A9moc%22!5e0!3m2!1sen!2smx!4v1516317284253";	
	}
	else if(obj.id=='CECyT 8' || obj=='CECyT 8'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.266255518949!2d-99.17667248555352!3d19.48717738685335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8644b770315%3A0x91cc6de15f5a7b2f!2sIPN-Centro+de+Estudios+Cient%C3%ADficos+y+Tecnol%C3%B3gicos+No.+8+Narciso+Bassols!5e0!3m2!1sen!2smx!4v1516317413285";	
	}
	else if(obj.id=='CECyT 9' || obj=='CECyT 9'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.047793821886!2d-99.17748638555415!3d19.453506086872483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8bd9777a765%3A0x57501a5479751d18!2sCECyT+9+Juan+de+Dios+Batiz!5e0!3m2!1sen!2smx!4v1516317480324";	
	}
	else if(obj.id=='CECyT 10' || obj=='CECyT 10'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.033217723614!2d-99.08245188555414!3d19.454134586872122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fbeb5dc1a4df%3A0x6e3f80fcb8450804!2sCentro+de+Estudios+Cient%C3%ADficos+y+Tecnol%C3%B3gicos+10+Carlos+Vallejo+M%C3%A1rquez!5e0!3m2!1sen!2smx!4v1516317578428";	
	}
	else if(obj.id=='CECyT 11' || obj=='CECyT 11'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.040054747!2d-99.16786188555415!3d19.45383978687227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8c0485ddcef%3A0x8284c3cef93733ae!2sCentro+de+Estudios+Cient%C3%ADficos+y+Tecnol%C3%B3gicos+No.11+Wilfrido+Massieu!5e0!3m2!1sen!2smx!4v1516317678673";	
	}
	else if(obj.id=='CECyT 12' || obj=='CECyT 12'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.8325433897085!2d-99.15440228555397!3d19.462785386867182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8e41a158e5d%3A0x562515911255e28!2zQ0VDeVQgMTIgIkpvc8OpIE1hcsOtYSBNb3JlbG9zIg!5e0!3m2!1sen!2smx!4v1516317786993";	
	}
	else if(obj.id=='CECyT 13' || obj=='CECyT 13'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.6602435823925!2d-99.13121568555623!3d19.340543986936655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fe274ca24ac1%3A0x3acd2890a5365a7a!2sCECyT+13+%22Ricardo+Flores+Magon%22!5e0!3m2!1sen!2smx!4v1516317861384";	
	}
	else if(obj.id=='CECyT 14' || obj=='CECyT 14'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.1989202304185!2d-99.11734558555435!3d19.446988586876152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f945780d3bb9%3A0xc8ae18bc4414d38a!2sLuis+Enrique+Erro+No.14+CECyT!5e0!3m2!1sen!2smx!4v1516317977344";	
	}
	else if(obj.id=='CECyT 15' || obj=='CECyT 15'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3218.089179180296!2d-98.99757!3d19.2217695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1b3c000ba467%3A0x881307d3a341da19!2sCenter+for+Science+and+Technology+Studies+No.15!5e1!3m2!1sen!2smx!4v1516318746973";	
	}
	else if(obj.id=='CECyT 16' || obj=='CECyT 16'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.7952919357945!2d-98.84802818554174!3d20.11227858650187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1755712bd645f%3A0xe26ecc2e057477!2sCECyT+16+%22HIDALGO%22!5e0!3m2!1sen!2smx!4v1516318815923";	
	}
	else if(obj.id=='CECyT 17' || obj=='CECyT 17'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.4290251008824!2d-101.73793568552179!3d21.135318085940742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bc0bd29ea405b%3A0x3a9d60d7b222d0e3!2sNational+Polytechnic+Institute+CECyT+17!5e0!3m2!1sen!2smx!4v1516318963393";	
	}
	else if(obj.id=='CECyT 18' || obj=='CECyT 18'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.4971425799245!2d-102.6187097854875!3d22.7840356850744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86824dfe0d97040d%3A0x122d4de38c3830d3!2sCECyT+18+-+IPN!5e0!3m2!1sen!2smx!4v1516319075936";	
	}
	else if(obj.id=='CET 1' || obj=='CET 1'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.016108494267!2d-99.06356448555412!3d19.45487228687166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fb9ea72fcc21%3A0x64d94c6a91838a36!2sCET+1+%22Walter+Cross+Buchanan%22!5e0!3m2!1sen!2smx!4v1516319126055";	
	}
	//-----------------------------------------------------------------------
	//SUPERIOR
	else if(obj.id=='ESCOM' || obj=='ESCOM'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.862115398789!2d-99.14909848509217!3d19.504567186843463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f835393528b5%3A0x5f2dd0563ce99e8!2sEscuela+Superior+de+C%C3%B3mputo!5e0!3m2!1ses-419!2smx!4v1524707751385";	
	}
	else if(obj.id=='ESIA-TIC'  || obj=='ESIA-TIC'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.7987953592!2d-99.13344568472975!3d19.507290443342075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b8a5172c67%3A0x9b93bbbff6ece02f!2sESIA+Ticoman!5e0!3m2!1ses-419!2smx!4v1524775185524";	
	}
	else if(obj.id=='ESFM'  || obj=='ESFM'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.907554076132!2d-99.13659124916354!3d19.50261274342637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b821ee5201%3A0x3ef9caa1b4c53ea0!2sEscuela+Superior+de+F%C3%ADsica+y+Matem%C3%A1ticas%2C+IPN!5e0!3m2!1ses-419!2smx!4v1524707984230";	
	}
	else if(obj.id=='ESIA-ZAC'  || obj=='ESIA-ZAC'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.016108494267!2d-99.06356448555412!3d19.45487228687166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fb9ea72fcc21%3A0x64d94c6a91838a36!2sCET+1+%22Walter+Cross+Buchanan%22!5e0!3m2!1sen!2smx!4v1516319126055";	
	}
	else if(obj.id=='ESIME-AZC'  || obj=='ESIME-AZC'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.199946160105!2d-99.17625778472997!3d19.4900316438913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f86416fb03fb%3A0xf60ba14f1c6212c1!2sIPN+Esime+Azcapotzalco!5e0!3m2!1ses-419!2smx!4v1524775267146";	
	}
	else if(obj.id=='ESIME-ZAC' || obj=='ESIME-ZAC'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.9662464403264!2d-99.1381616847299!3d19.50008794357135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b3e7eeffb7%3A0x15086890fa3f43d3!2sEscuela+Superior+de+Ingenier%C3%ADa+Mec%C3%A1nica+y+El%C3%A9ctrica%2C+edificio+1!5e0!3m2!1ses-419!2smx!4v1524775322009";	
	}
	else if(obj.id=='UPIIG'  || obj=='UPIIG'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5473.900606685837!2d-101.50599845626446!3d21.01608700350346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842b99c0796245ab%3A0x33bbde6d3f68fd6f!2sInstituto+Polit%C3%A9cnico+Nacional+Unidad+Profesional+Interdisciplinaria+De+Ingenier%C3%ADa+Campus+Guanajuato!5e0!3m2!1ses-419!2smx!4v1524775386328";	
	}
	else if(obj.id=='UPIBI'  || obj=='UPIBI'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.575186654771!2d-99.12931648472969!3d19.516904443036015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9dccc7998f5%3A0x4343d9f32891285b!2sIPN+-+Unidad+Profesional+Interdisciplinaria+de+Biotecnolog%C3%ADa!5e0!3m2!1ses-419!2smx!4v1524775419097";	
	}
	else if(obj.id=='ESIME-CUL'  || obj=='ESIME-CUL'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.8981442985637!2d-99.1141096847315!3d19.330225648954404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce01e54cd0c1d5%3A0xba027d01d38962e4!2sEscuela+Superior+de+Ingenier%C3%ADa+Mec%C3%A1nica+y+El%C3%A9ctrica.+Unidad+Culhuac%C3%A1n%2C+IPN.!5e0!3m2!1ses-419!2smx!4v1524775559984";	
	}
	else if(obj.id=='UPIIZ' || obj=='UPIIZ'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.499242064905!2d-102.6179185846946!3d22.783957830920503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86824dfdee323e95%3A0x4b1a2d127500ff5c!2sUnidad+Profesional+Interdisciplinaria+de+Ingenier%C3%ADa+Campus+Zacatecas!5e0!3m2!1ses-419!2smx!4v1524775588984";	
	}
	else if(obj.id=='ESIME-TIC' || obj=='ESIME-TIC'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.7517611994003!2d-99.13450118472976!3d19.509313043277718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c60f464c65%3A0x1747423109482907!2sKukulc%C3%A1n+Aerodesign!5e0!3m2!1ses-419!2smx!4v1524775774561";	
	}
	else if(obj.id=='UPIICSA' || obj=='UPIICSA'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.371036441273!2d-99.09416458473086!3d19.396368246863542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fc2e3efc321b%3A0xabf8454acb3a3a99!2sIPN+UPIICSA+-+Unidad+Profesional+Interdisciplinaria+de+Ingenier%C3%ADa+y+Ciencias+Sociales+y+Administrativas!5e0!3m2!1ses-419!2smx!4v1524775803818";	
	}
	else if(obj.id=='ESIQIE' || obj=='ESIQIE'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1184.6243405615292!2d-99.1338493481002!3d19.500890539237034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b9c59a205f%3A0xd00bbbca9ac0fd1c!2sESIQIE%2C+Laboratorios+Ligeros%2C+Edificio+Z!5e0!3m2!1ses-419!2smx!4v1524775890369";	
	}
	else if(obj.id=='ESIT' || obj=='ESIT'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1436.160687160638!2d-99.13358356150759!3d19.49979367338965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b9b82b9a51%3A0x3337f7c85a3ff949!2sEscuela+Superior+de+Ingenier%C3%ADa+Textil+ESIT!5e0!3m2!1ses-419!2smx!4v1524775925098";	
	}
	else if(obj.id=='UPIITA' || obj=='UPIITA'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.7037757604216!2d-99.12841428472979!3d19.51137634321208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c228b343cf%3A0x2f403a140132e3e7!2sIPN+-+Unidad+Profesional+Interdisciplinaria+en+Ingenier%C3%ADa+y+Tecnolog%C3%ADas+Avanzadas!5e0!3m2!1ses-419!2smx!4v1524775956608";	
	}
	else if(obj.id=='ESIA-TEC' || obj=='CET 1'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d806.3654764259991!2d-99.2329113426871!3d19.42991303722712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20220b3038bcf%3A0xf33271ef0d2f587a!2sEscuela+Superior+De+Ingenier%C3%ADa+Y+Arquitectura+Tecamachalco!5e0!3m2!1ses-419!2smx!4v1524776058409";	
	}
	else if(obj.id=='UPIIH' || obj=='UPIIH'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4542.0059133472805!2d-98.8487320901973!3d20.112269719658393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1755712bd645f%3A0xd745a2226ece5540!2sUPIIH+Unidad+Profesional+Interdisciplinaria+De+Ingenier%C3%ADa+Campus+Hidalgo!5e0!3m2!1ses-419!2smx!4v1524776093185";	
	}
	else if(obj.id=='CICS-MTA' || obj=='CICS-MTA'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.6318865796898!2d-98.96129828473383!3d19.07991585680684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1171a1e56c5f%3A0xd4537e3c83d598ab!2sCICS+UMA+Instituto+Polit%C3%A9cnico+Nacional!5e0!3m2!1ses-419!2smx!4v1524776177568";	
	}
	else if(obj.id=='ENMYH' || obj=='ENMYH'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.6945748738435!2d-99.14067038472972!3d19.511771943199392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9cefaec589b%3A0xf311a2d4fd1bf94d!2sIPN%3A+Escuela+Nacional+de+Medicina+y+Homeopat%C3%ADa!5e0!3m2!1ses-419!2smx!4v1524776229487";	
	}
	else if(obj.id=='CICS-STO' || obj=='CICS-STO'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1741.5821836891648!2d-99.16673675643565!3d19.45447061329042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8c0286c0437%3A0xfc518869be8ec0f3!2sCentro+Interdisciplinario+de+Ciencias+de+la+Salud%2C+Unidad+Santo+Tom%C3%A1s+IPN!5e0!3m2!1ses-419!2smx!4v1524776361386";	
	}
	else if(obj.id=='ESEO' || obj=='ESEO'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.0480962814563!2d-99.17270718473029!3d19.453493045052273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8be4b6a9de3%3A0x925195c91704e140!2sIPN+-+Escuela+Superior+de+Enfermer%C3%ADa+y+Obstetricia!5e0!3m2!1ses-419!2smx!4v1524776399450";	
	}
	else if(obj.id=='ENCB' || obj=='ENCB'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.9831498259878!2d-99.14799568472986!3d19.499360743594462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f84b4c824883%3A0x97a44d54f25db82d!2sEscuela+Nacional+de+Ciencias+Biol%C3%B3gicas%2C+Unidad+Zacatenco%2C+IPN!5e0!3m2!1ses-419!2smx!4v1524776526961";	
	}
	else if(obj.id=='ESM' || obj=='ESM'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.1049352226455!2d-99.17086168473033!3d19.451042045130222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fa3d53b35365%3A0xe99567abf0cf6946!2sEscuela+Superior+De+Medicina+del+Instituto+Polit%C3%A9cnico+Nacional!5e0!3m2!1ses-419!2smx!4v1524776715033";	
	}
	else if(obj.id=='ESCA-STO' || obj=='ESCA-STO'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2111.3786157518352!2d-99.16919602144212!3d19.453459465514683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8c077004867%3A0x832a1bae7226b4c!2sIPN+-+ESCA+Santo+Tomas!5e0!3m2!1ses-419!2smx!4v1524776745993";	
	}
	else if(obj.id=='ESE' || obj=='ESE'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2111.3786157518352!2d-99.16919602144212!3d19.453459465514683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8c0101361dd%3A0x6ea325e8f4a64868!2sEscuela+Superior+de+Econom%C3%ADa+del+Instituto+Polit%C3%A9cnico+Nacional!5e0!3m2!1ses-419!2smx!4v1524776772866";	
	}
	else if(obj.id=='ESCA-TEP' || obj=='ESCA-TEP'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.9529988411564!2d-99.15165938473186!3d19.28441005039875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce00fc3ba6c2f3%3A0x8ac84c9dfcb8a0d5!2sEscuela+Superior+de+Comercio+y+Administraci%C3%B3n+Tepepan!5e0!3m2!1ses-419!2smx!4v1524776813737";	
	}
	else if(obj.id=='EST' || obj=='EST'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.625453180016!2d-99.14299978472971!3d19.514743643104786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9cdc07f2781%3A0x13c639f192df9ab6!2sEscuela+Superior+de+Turismo!5e0!3m2!1ses-419!2smx!4v1524776908306";	
	}
	//POSGRADO
	else if(obj.id=='CIIEMAD' || obj=='CIIEMAD'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.6315058319137!2d-99.13137448472979!3d19.51448344311302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c49e33978d%3A0x1f4cdbad6c29f4ec!2sCentro+Interdisciplinario+de+Investigaciones+y+Estudios+sobre+Medio+Ambiente+y+Desarrollo!5e0!3m2!1ses-419!2smx!4v1524779087491";	
	}
	else if(obj.id=='CEPROBI' || obj=='CEPROBI'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d809.3255414400782!2d-99.09664417636843!3d18.824578713807217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce712a303f65c5%3A0xf4b79c0da77a3375!2sCEPROBI!5e0!3m2!1ses-419!2smx!4v1524779160891";	
	}
	else if(obj.id=='CIDETEC' || obj=='CIDETEC'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.899440526563!2d-99.14910818472984!3d19.5029617434798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f84aa269b15d%3A0x1093f81e7f68abc!2sCIDETEC!5e0!3m2!1ses-419!2smx!4v1524779876944";	
	}
	else if(obj.id=='CIITEC' || obj=='CIITEC'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.2692136978894!2d-99.17842368472998!3d19.487050043985942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f864fd3b9c57%3A0x904b3db5229159db!2sCentro+de+Investigaci%C3%B3n+e+Innovaci%C3%B3n+Tecnol%C3%B3gica!5e0!3m2!1ses-419!2smx!4v1524779923764";	
	}
	else if(obj.id=='CIBA' || obj=='CIBA'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8135.06731811089!2d-98.37035206896746!3d19.28120379828062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfd132d743eec1%3A0x3dfce3b300658d79!2sCentro+de+Investigaci%C3%B3n+en+Biotecnolog%C3%ADa+Aplicada+(CIBA-Tlaxcala%2C+IPN)!5e0!3m2!1ses-419!2smx!4v1524780015276";	
	}
	else if(obj.id=='CICATA-QRO' || obj=='CICATA-QRO'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.341841137946!2d-100.37281688471906!3d20.57409300851903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d344b8c91fe485%3A0x54c2af7742669a62!2sCICATA+-+Instituto+Politecnico+Nacional!5e0!3m2!1ses-419!2smx!4v1524780201556";	
	}
	else if(obj.id=='CIC' || obj=='CIC'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1436.131956650035!2d-99.14935777644791!3d19.50303024015181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x78efe76dd0d5bbe1!2sIPN+-+Centro+de+Investigaci%C3%B3n+en+Computaci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1524780320309";	
	}
	else if(obj.id=='CITEDI' || obj=='CITEDI'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12946.01292383973!2d-116.95207010941722!3d32.537733393901604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d947a167efe18d%3A0xd50215839cc0d7ba!2sCITEDI-IPN+(Centro+de+Investigaci%C3%B3n+y+Desarrollo+de+Tecnolog%C3%ADa+Digital+del+Instituto+Politecnico+Nacional)!5e0!3m2!1ses-419!2smx!4v1524780365637";	
	}
	else if(obj.id=='CIECAS' || obj=='CIECAS'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1741.6627910635193!2d-99.1676985273162!3d19.446961595305087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8c70e80ee25%3A0xe4c3d1b5ba70ab75!2sEl+Centro+de+Investigaciones+Econ%C3%B3micas%2C+Administrativas+y+Sociales!5e0!3m2!1ses-419!2smx!4v1524780495844";	
	}
	else if(obj.id=='NANO' || obj=='NANO'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.9938447883255!2d-99.14331794863328!3d19.498900622522076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b4139b9673%3A0xa070f935c6009a10!2sCentro+de+Nanociencias+y+Micro+y+Nanotecnolog%C3%ADas!5e0!3m2!1ses-419!2smx!4v1524780589165";	
	}
	else if(obj.id=='CIIDIR-MICH' || obj=='CIIDIR-MICH'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.3212573504184!2d-102.72030168472504!3d19.995027127635574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842efc76bb111ef5%3A0x70525048b7c0b17b!2sCIIDIR+IPN+Michoac%C3%A1n!5e0!3m2!1ses-419!2smx!4v1524780660533";	
	}
	else if(obj.id=='CIIDIR-OAX' || obj=='CIIDIR-OAX'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3814.949234187866!2d-96.72185798475172!3d17.02616001760304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c722f025958599%3A0x129cf6c81c8caeb8!2sIPN+-+CIIDIR+Unidad+Oaxaca!5e0!3m2!1ses-419!2smx!4v1524780870566";	
	}
	else if(obj.id=='CIIDIR-SIN' || obj=='CIIDIR-SIN'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5551.634351154801!2d-108.48518376275229!3d25.545382514107374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bbbefc1ea2a3c3%3A0xa4d83071b4da6e0e!2sCentro+Interdisciplinario+de+Investigaci%C3%B3n+para+el+Desarrollo+Integral+Regional+Instituto+Polit%C3%A9cnico+Nacional!5e0!3m2!1ses-419!2smx!4v1524780904236";	
	}
	else if(obj.id=='CMP+L' || obj=='CMP+L'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.621314907965!2d-99.12817538472967!3d19.51492154309905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c2de48f7dd%3A0x61e026dcea1c539c!2sCentro+Mexicano+para+la+Producci%C3%B3n+m%C3%A1s+Limpia!5e0!3m2!1ses-419!2smx!4v1524781054934";	
	}
	else if(obj.id=='TECHNOPOLI' || obj=='TECHNOPOLI'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.0000177409534!2d-99.14355368472988!3d19.49863504361757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b4129704f7%3A0x67cb6a30b0ae2e7d!2sUnidad+de+Desarrollo+Tecnol%C3%B3gico%2C+TECHNOPOLI!5e0!3m2!1ses-419!2smx!4v1524781206205";	
	}
	else if(obj.id=='CICATA-ALTA' || obj=='CICATA-ALTA'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.9225515650432!2d-97.89715548469914!3d22.394276945135296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d7fdb861de8f79%3A0xea1cdbf57a12e218!2sCICATA+Altamira!5e0!3m2!1ses-419!2smx!4v1524781375518";	
	}
	else if(obj.id=='CICATA-LEG' || obj=='CICATA-LEG'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.248796713999!2d-99.21196128473039!3d19.44483714532717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d202164e5c5c43%3A0x83e1c78d0baca25c!2sIPN%3A+Centro+de+Investigaci%C3%B3n+en+Ciencia+Aplicada+y+Tecnolog%C3%ADa+Avanzada!5e0!3m2!1ses-419!2smx!4v1524781408181";	
	}
	else if(obj.id=='CICIMAR' || obj=='CICIMAR'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1423443.0482605938!2d-111.33559304186616!3d24.161111142117175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ae2cbee53fa875%3A0xbad08a31e0884b0d!2sCICIMAR!5e0!3m2!1ses-419!2smx!4v1524781458940";	
	}
	else if(obj.id=='CIIDIR-DUR' || obj=='CIIDIR-DUR'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.430833702377!2d-104.61269698467912!3d24.051128183137525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb7004220cb03%3A0x87173c7f35b70621!2sCIIDIR+Durango+IPN!5e0!3m2!1ses-419!2smx!4v1524781564885";	
	}
	else if(obj.id=='CBG' || obj=='CBG'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2011.387050201236!2d-98.31342662406108!3d26.07004175472104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866505f6dbb9a0af%3A0x54505882101185c5!2sIPN+CEC+Unidad+Reynosa!5e0!3m2!1ses-419!2smx!4v1524781916765";	
	}
	//CEC
	else if(obj.id=='CEC-ALLENDE' || obj=='CEC-ALLENDE'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.397858436209!2d-99.14039458473047!3d19.438405945531198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f92c24dc4037%3A0x706eaa77a7f0e9e4!2sCentro+Educaci%C3%B3n+Continua+Ing.+Eugenio+M%C3%A9ndez+Docurro!5e0!3m2!1ses-419!2smx!4v1524782677502";	
	}
	else if(obj.id=='CEC-CAM' || obj=='CEC-CAM'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.845596875863!2d-90.53881348472648!3d19.846485032457355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f8312e291685ff%3A0x8eb36c1b71777b65!2sCEC+CAMPECHE!5e0!3m2!1ses-419!2smx!4v1524782806495";	
	}
	else if(obj.id=='CEC-REY' || obj=='CEC-REY'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3583.895046815467!2d-98.31569748465223!3d26.06968620214566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866505f6dbb9a0af%3A0x54505882101185c5!2sIPN+CEC+Unidad+Reynosa!5e0!3m2!1ses-419!2smx!4v1524782962142";	
	}
	else if(obj.id=='CEC-MAZ' || obj=='CEC-MAZ'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d441.0802021958985!2d-106.42158934507798!3d23.200368976526327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x533a609621324889!2sInstituto+Polit%C3%A9cnico+Nacional+Unidad+Mazatl%C3%A1n!5e0!3m2!1ses-419!2smx!4v1524783046998";	
	}
	else if(obj.id=='CEC-MOR' || obj=='CEC-MOR'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.305474683826!2d-99.21197868473536!3d18.917868261839168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdd772f14b6405%3A0x6763026cc08dc46b!2sCentro+de+Educaci%C3%B3n+Continua+Unidad+Morelos+IPN!5e0!3m2!1ses-419!2smx!4v152478342446";	
	}
	else if(obj.id=='CEC-OAX' || obj=='CEC-OAX'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3814.9198043183956!2d-96.72257388475168!3d17.02760331756252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c722f309380015%3A0xc603a2b4b676760a!2sCentro+de+Educaci%C3%B3n+Continua+IPN+Unidad+Oaxaca!5e0!3m2!1ses-419!2smx!4v1524783854464";	
	}
	else if(obj.id=='CEC-CUL' || obj=='CEC-CUL'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.610548344241!2d-107.40245678466925!3d24.808785853435715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcd0a684992d81%3A0x96f239da91e1e962!2sCEC+Culiacan!5e0!3m2!1ses-419!2smx!4v1524784058375";	
	}
	else if(obj.id=='CEC-MOC' || obj=='CEC-MOC'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3757.567336530755!2d-101.22899368472841!3d19.64578673891885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d12081f806065%3A0x65852e6491627aac!2sIPN+Unidad+Morelia!5e0!3m2!1ses-419!2smx!4v1524784190621";	
	}
	else if(obj.id=='CEC-CAN' || obj=='CEC-CAN'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.1405959587564!2d-86.76624368471346!3d21.106960190479118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c285e56d682b1%3A0x960d85fa1a9cdf57!2sInstituto+Polit%C3%A9cnico+Nacional%2C+CEC+Unidad+Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1524784337798";	
	}
	else if(obj.id=='CEC-TIJ' || obj=='CEC-TIJ'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d686.9656823034052!2d-116.94323047986146!3d32.53867598212644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d947a15cb5e8cf%3A0x3d0e0b854f9af1c6!2sCentro+de+Educaci%C3%B3n+Continua+Unidad+Tijuana+del+IPN!5e0!3m2!1ses-419!2smx!4v1524784637664";	
	}
	else if(obj.id=='CEC-TLX' || obj=='CEC-TLX'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42593.69611267158!2d-98.19362929268847!3d19.33508894721616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81106e8b6002bc36!2sCecutlax-IPN!5e0!3m2!1ses-419!2smx!4v1524784716264";	
	}
	else if(obj.id=='CEC-TAM' || obj=='CEC-TAM'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.3522751635937!2d-97.86825418470107!3d22.22670905117818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d7f751e4a7b3e1%3A0x2fd7ad1451075f42!2sCentro+de+Educaci%C3%B3n+Continua+Unidad+Tampico!5e0!3m2!1ses-419!2smx!4v1524784745080";	
	}
	//AREAS CENTRALES
	else if(obj.id=='CEDICyT' || obj=='CEDICyT'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120353.34518547163!2d-99.2434423290826!3d19.496827154920393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2029425e15139%3A0x540558028eee8492!2sCentro+de+Difusi%C3%B3n+de+Ciencia+y+Tecnolog%C3%ADa!5e0!3m2!1ses-419!2smx!4v1524785732798";	
	}
	else if(obj.id=='CGFIE' || obj=='CGFIE'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2558.979081652033!2d-99.14295654327348!3d19.49778672522656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b38441fb93%3A0x79724e4e97807c65!2sCoordinaci%C3%B3n+General+de+Formaci%C3%B3n+e+Innovaci%C3%B3n+Educativa!5e0!3m2!1ses-419!2smx!4v1524785834497";	
	}
	else if(obj.id=='CIEBT' || obj=='CIEBT'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.070707455981!2d-99.16802118473025!3d19.452518045083174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8c05f4a7623%3A0xb3a854ae59417365!2sCentro+de+Incubaci%C3%B3n+de+Empresas+de+Base+Tecnol%C3%B3gica+CIEBT+IPN!5e0!3m2!1ses-419!2smx!4v1524786010954";	
	}
	else if(obj.id=='CIVESTAV' || obj=='CIVESTAV'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.7370053763966!2d-99.13174768472977!3d19.509947543257496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f77a076bd911%3A0x63af0ad86ca91f65!2sCINVESTAV+-+IPN!5e0!3m2!1ses-419!2smx!4v1524787354906";	
	}
	else if(obj.id=='DIR-PUBLICACIONES' || obj=='DIR-PUBLICACIONES'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.618953163954!2d-99.14964168473053!3d19.428863145833915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff2a43a8afd9%3A0x1cc35329920a24b2!2sDirecci%C3%B3n+de+Publicaciones!5e0!3m2!1ses-419!2smx!4v1524788816274";	
	}
	else if(obj.id=='DIR-FINANCIERO' || obj=='DIR-FINANCIERO'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99322.93512011119!2d-99.19999544324752!3d19.418100529736794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c942cd1a6d%3A0x87997baba6da8e7!2sSecretar%C3%ADa+de+Administraci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1524789274316";	
	}
	else if(obj.id=='SEC-ACA' || obj=='SEC-ACA'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7521.681639334252!2d-99.14286977380823!3d19.50548311049496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c987f9a135%3A0x2e8e19f35dc79366!2sSecretar%C3%ADa+Acad%C3%A9mica!5e0!3m2!1ses-419!2smx!4v1524789611132";	
	}
	else if(obj.id=='SGE' || obj=='SGE'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.7871035317307!2d-99.14267818472973!3d19.50779324332609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c9cd7fcbb7%3A0xae776b74c64ad0d0!2sSECRETAR%C3%8DA+DE+GESTI%C3%93N+ESTRAT%C3%89GICA!5e0!3m2!1ses-419!2smx!4v1524789789970";	
	}
	else if(obj.id=='GENERO' || obj=='GENERO'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7521.681639334252!2d-99.14286977380823!3d19.50548311049496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c987f9a135%3A0x2e8e19f35dc79366!2sSecretar%C3%ADa+Acad%C3%A9mica!5e0!3m2!1ses-419!2smx!4v1524789611132";	
	}
	else if(obj.id=='COFAA' || obj=='COFAA'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.631287447658!2d-99.15359208473056!3d19.428330645850703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff3aaaaaaaab%3A0xd2bf82a603d39882!2sComisi%C3%B3n+de+Operaci%C3%B3n+y+Fomento+de+Actividades+Acad%C3%A9micas+del+IPN!5e0!3m2!1ses-419!2smx!4v1524789853675";	
	}
	else if(obj.id=='CENAC' || obj=='CENAC'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10637.69624633001!2d-99.14713977034292!3d19.498928899552432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9ca4f30a307%3A0x5f8e1e8edc45b305!2sCentro+Nacional+de+C%C3%A1lculo!5e0!3m2!1ses-419!2smx!4v1524789992220";	
	}
	else if(obj.id=='COCENDI' || obj=='COCENDI'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30087.935494329835!2d-99.15845882347925!3d19.49898270956655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c9f3bc423f%3A0xb4a3f40bf3756772!2sSecretar%C3%ADa+de+Extensi%C3%B3n+e+Integraci%C3%B3n+Social!5e0!3m2!1ses-419!2smx!4v1524790021531";	
	}
	else if(obj.id=='CSS' || obj=='CSS'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.801739198519!2d-99.14153478472976!3d19.507163843346046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c97973a903%3A0x542f671f1ddbc566!2sDirecci%C3%B3n+General+IPN!5e0!3m2!1ses-419!2smx!4v1524790081155";	
	}
	else if(obj.id=='DEMS' || obj=='DEMS'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99322.93512011119!2d-99.19999544324752!3d19.418100529736794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c942cd1a6d%3A0x87997baba6da8e7!2sSecretar%C3%ADa+de+Administraci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1524789274316";	
	}
	else if(obj.id=='MATERIALES' || obj=='MATERIALES'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99322.93512011119!2d-99.19999544324752!3d19.418100529736794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c942cd1a6d%3A0x87997baba6da8e7!2sSecretar%C3%ADa+de+Administraci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1524789274316";	
	}
	else if(obj.id=='DSE' || obj=='DSE'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.7871035317307!2d-99.14267818472973!3d19.50779324332609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c9cd7fcbb7%3A0xae776b74c64ad0d0!2sSECRETAR%C3%8DA+DE+GESTI%C3%93N+ESTRAT%C3%89GICA!5e0!3m2!1ses-419!2smx!4v1524789789970";	
	}
	else if(obj.id=='SEC-ADM' || obj=='SEC-ADM'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99322.93512011119!2d-99.19999544324752!3d19.418100529736794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c942cd1a6d%3A0x87997baba6da8e7!2sSecretar%C3%ADa+de+Administraci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1524789274316";	
	}
	else if(obj.id=='SIP' || obj=='SIP'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99322.93512011119!2d-99.19999544324752!3d19.418100529736794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c942cd1a6d%3A0x87997baba6da8e7!2sSecretar%C3%ADa+de+Administraci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1524789274316";	
	}
	else if(obj.id=='CCA' || obj=='CCA'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.8547321415595!2d-99.14185018472978!3d19.504884743418646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c9f3bc423f%3A0xb4a3f40bf3756772!2sSecretar%C3%ADa+de+Extensi%C3%B3n+e+Integraci%C3%B3n+Social!5e0!3m2!1ses-419!2smx!4v1524790630563";	
	}
	else if(obj.id=='CGSI' || obj=='CGSI'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30086.82955129258!2d-99.15717109975094!3d19.504929397669024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9ae6e05bae1c0f9b!2sCoordinacion+General+de+Servicios+Informaticos!5e0!3m2!1ses-419!2smx!4v1524790746227"; 	
	}
	else if(obj.id=='DDP' || obj=='DDP'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d664.8602083546316!2d-99.14207500277739!3d19.497908421505777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b38441fb93%3A0x79724e4e97807c65!2sCoordinaci%C3%B3n+General+de+Formaci%C3%B3n+e+Innovaci%C3%B3n+Educativa!5e0!3m2!1ses-419!2smx!4v1524791006213";	
	}
  	else if(obj.id=='DAE' || obj=='DAE'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.0334775102274!2d-99.13465878472987!3d19.497195443663358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e5b1d699b26cf07!2sDirecci%C3%B3n+de+Administraci%C3%B3n+Escolar!5e0!3m2!1ses-419!2smx!4v1524790936428";	
	}
	else if(obj.id=='DES' || obj=='DES'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99322.93512011119!2d-99.19999544324752!3d19.418100529736794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c942cd1a6d%3A0x87997baba6da8e7!2sSecretar%C3%ADa+de+Administraci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1524789274316";	
	}
	else if(obj.id=='CANAL-ONCE' || obj=='CANAL-ONCE'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.053870931145!2d-99.17180268473032!3d19.453244045060284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8bfbaeebabd%3A0x911c865be322e550!2sCanal+Once!5e0!3m2!1ses-419!2smx!4v1524791133661";	
	}
	else if(obj.id=='ABOGADO' || obj=='ABOGADO'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.801739198519!2d-99.14153478472976!3d19.507163843346046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c97973a903%3A0x542f671f1ddbc566!2sDirecci%C3%B3n+General+IPN!5e0!3m2!1ses-419!2smx!4v1524790081155";	
	}
	else if(obj.id=='SEIS' || obj=='SEIS'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.8547321415595!2d-99.14185018472978!3d19.504884743418646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c9f3bc423f%3A0xb4a3f40bf3756772!2sSecretar%C3%ADa+de+Extensi%C3%B3n+e+Integraci%C3%B3n+Social!5e0!3m2!1ses-419!2smx!4v1524790630563";	
	}
	else if(obj.id=='SSE' || obj=='SSE'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d548.3899286593651!2d-99.14039388455444!3d19.5058924838968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2e8e19f35dc79366!2sSecretar%C3%ADa+Acad%C3%A9mica!5e0!3m2!1ses-419!2smx!4v1524791339485";	
	}
	else if(obj.id=='BIBLIOTECA' || obj=='BIBLIOTECA'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.3754793445414!2d-99.1354012355001!3d19.49473668509104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9ba643a480d%3A0xe62cb058a376e924!2sLibrer%C3%ADa+IPN+Zacatenco!5e0!3m2!1ses-419!2smx!4v1524791496157";	
	}
	else if(obj.id=='DCH' || obj=='DCH'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99322.93512011119!2d-99.19999544324752!3d19.418100529736794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c942cd1a6d%3A0x87997baba6da8e7!2sSecretar%C3%ADa+de+Administraci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1524789274316";	
	}
	else if(obj.id=='DEPORTE' || obj=='DEPORTE'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.0088756533805!2d-99.13997788472975!3d19.49825394362972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b6d3a7a905%3A0xc917ef8435208126!2sDirecci%C3%B3n+de+Desarrollo+y+Fomento+Deportivo!5e0!3m2!1ses-419!2smx!4v1524791735301";	
	}
	else if(obj.id=='CULTURA' || obj=='CULTURA'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.05659534551!2d-99.13723948472986!3d19.496200743695052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b0903dd831%3A0xef0362ce680787c8!2sCentro+Cultural+Jaime+Torres+Bodet!5e0!3m2!1ses-419!2smx!4v1524792157866";	
	}
	else if(obj.id=='UPDCE' || obj=='UPDCE'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.0131443311707!2d-99.1438484850923!3d19.498070286847092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b38f3f09b1%3A0xa8a1ffad7ef4aeb6!2sUnidad+Polit%C3%A9cnica+para+el+Desarrollo+y+la+Competitividad+Empresarial!5e0!3m2!1ses-419!2smx!4v1524792324594";	
	}
	else if(obj.id=='OIC' || obj=='OIC'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.790989212969!2d-99.14262858472975!3d19.507626143331336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b5d8c54c1b%3A0xd1bd1563156eb635!2sSecretar%C3%ADa+de+Gesti%C3%B3n+Estrat%C3%A9gica!5e0!3m2!1ses-419!2smx!4v1524792385925";	
	}
	else if(obj.id=='POI' || obj=='POI'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.8014252828757!2d-99.14377008472977!3d19.507177343345756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9cbb65aa5b1%3A0xee81a6e3b2df7d5d!2sPatronato+de+Obras+e+Instalaciones+del+IPN!5e0!3m2!1ses-419!2smx!4v1524792547534";	
	}
	else if(obj.id=='DECANATO' || obj=='DECANATO'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.0724467319737!2d-99.16712568473034!3d19.452443045085584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8c10008364d%3A0x79627aa5d2bff117!2sPresidencia+del+Decanato+IPN!5e0!3m2!1ses-419!2smx!4v1524792617669";	
	}
	else if(obj.id=='SEC-GRAL' || obj=='SEC-GRAL'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.801739198519!2d-99.14153478472976!3d19.507163843346046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c97973a903%3A0x542f671f1ddbc566!2sDirecci%C3%B3n+General+IPN!5e0!3m2!1ses-419!2smx!4v1524790081155";	
	}
	else if(obj.id=='DPS' || obj=='DPS'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7524.151945381072!2d-99.166274!3d19.452291!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa7dcf2d0af85d44b!2sDepartamemto+De+Prestaciones+Y+Servicios+IPN!5e0!3m2!1ses!2smx!4v1541539381328";	
	}
	//BIBLIOTECA
	else if(obj.id=='BNCT' || obj=='BNCT'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2193.6856554777314!2d-99.13361530003819!3d19.49660392119176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9ba643a480d%3A0xe62cb058a376e924!2sLibrer%C3%ADa+IPN+Zacatenco!5e0!3m2!1ses-419!2smx!4v1524861565341";	
	}
	else if(obj.id=='BC' || obj=='BC'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.5193041302455!2d-99.16630881188041!3d19.45223736372938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8c0f79f3b87%3A0x50a628f8535d0137!2sBiblioteca+central-IPN!5e0!3m2!1ses-419!2smx!4v1524861703155";	
	}
	else if(obj.id=='BCGFIE' || obj=='BCGFIE'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.0097054219386!2d-99.14377114916361!3d19.498218243566253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b38441fb93%3A0x79724e4e97807c65!2sCoordinaci%C3%B3n+General+de+Formaci%C3%B3n+e+Innovaci%C3%B3n+Educativa!5e0!3m2!1ses-419!2smx!4v1524861735478";	
	}
	else if(obj.id=='BCENLEX-STO' || obj=='BCENLEX-STO'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.996369414927!2d-99.16769444916399!3d19.455723344917054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8c0286c0437%3A0x7ff08637b2115eda!2sCentro+de+Lenguas+Extranjeras%2C+Unidad+Santo+Tom%C3%A1s!5e0!3m2!1ses-419!2smx!4v1524861757147";	
	}
	else if(obj.id=='BCENLEX' || obj=='BCENLEX'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1741.1278573845195!2d-99.13994053271094!3d19.496741601710525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9b146437ff7%3A0x7c658ec88c3fc551!2sCENLEX+Zacatenco!5e0!3m2!1ses-419!2smx!4v1524861786837";	
	}
	else if(obj.id=='BMS' || obj=='BMS'){
		mostrar("NMS");	
	}
	else if(obj.id=='BS' || obj=='BS'){
		mostrar("NS");		
	}
	else if(obj.id=='BIP' || obj=='BIP'){
		mostrar("SIP");		
	}
	else{
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2193.5472839743725!2d-99.14065722322994!3d19.506809056831575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9c97973a903%3A0x542f671f1ddbc566!2sDirecci%C3%B3n+General+IPN!5e0!3m2!1ses-419!2smx!4v1524861540625";	
	}
	// else if(obj.id=='EST' || obj=='CET 1'){
		// document.getElementById("framerecargar").src="";	
	// }
	// else if(obj.id=='EST' || obj=='CET 1'){
		// document.getElementById("framerecargar").src="";	
	// }
	// else if(obj.id=='EST' || obj=='CET 1'){
		// document.getElementById("framerecargar").src="";	
	// }
	// else if(obj.id=='EST' || obj=='CET 1'){
		// document.getElementById("framerecargar").src="";	
	// }
	// else if(obj.id=='EST' || obj=='CET 1'){
		// document.getElementById("framerecargar").src="";	
	// }
	// else if(obj.id=='EST' || obj=='CET 1'){
		// document.getElementById("framerecargar").src="";	
	// }
	// else if(obj.id=='EST' || obj=='CET 1'){
		// document.getElementById("framerecargar").src="";	
	// }
	// else if(obj.id=='EST' || obj=='CET 1'){
		// document.getElementById("framerecargar").src="";	
	// }
	// else if(obj.id=='EST' || obj=='CET 1'){
		// document.getElementById("framerecargar").src="";	
	// }
	// else if(obj.id=='EST' || obj=='CET 1'){
		// document.getElementById("framerecargar").src="";	
	// }
	// else if(obj.id=='EST' || obj=='CET 1'){
		// document.getElementById("framerecargar").src="";	
	// }
	// else if(obj.id=='EST' || obj=='CET 1'){
		// document.getElementById("framerecargar").src="";	
	// }
	// else if(obj.id=='EST' || obj=='CET 1'){
		// document.getElementById("framerecargar").src="";	
	// }
}


// InicializaciÃ³n del mapa
var map;
function initMap() {
	var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 19.505020, lng: -99.146688},
      zoom: 12
    });
    
    var marker = new google.maps.Marker({
      position: {lat: 19.505020, lng: -99.146688},
      map: map,
      title: 'Hello World!'
    });
    directionsDisplay.setMap(map);
    calculateAndDisplayRoute(directionsService,directionsDisplay);

}

//contacto script
var selectInfo= 0; var url; var textoInfo = "";
	function cargarSelect(valor){
			var arrayValores=new Array(
			new Array(1,1,"Servicio Social"),
			new Array(1,2,"Bolsa de trabajo para egresados"),
			new Array(1,3,"Movilidad AcadÃ©mica: Nacional e Internacional"),
			new Array(1,4,"Convenios de ColaboraciÃ³n AcadÃ©mica"),
			new Array(1,5,"Bolsa de trabajo"),
			new Array(1,6,"OrientaciÃ³n juvenil"),
			new Array(1,7,"GestiÃ³n de trÃ¡mites"),
			new Array(1,8,"Cambio de Modalidad escolarizada a Modalidad mixta"),
			new Array(1,9,"Seguimiento de trÃ¡mite de tÃ­tulo, certifiado, carta de pasante y cedula profesional"),
			new Array(1,10,"Otro"),
			new Array(2,1,"Proceso de admisiÃ³n"),
			new Array(2,2,"Convocatorias"),
			new Array(2,3,"Educacion virtual"),
			new Array(2,4,"Dudas especÃ­ficas"),
			new Array(3,1,"Internacional"),
			new Array(3,2,"Registro de empresas para bolsa de trabajo"),
			new Array(3,3,"Empresas solicitantes de alumnos para Servicio Social"),
			new Array(3,4,"InformaciÃ³n relacionada a comunicados"),
			new Array(3,5,"Registro de empresas para proveedores"),
			new Array(3,6,"Otro"),
			new Array(4,1,"Movilidad AcadÃ©mica: Nacional e Internacional"),
			new Array(4,2,"AÃ±o sabÃ¡tico"),
			new Array(4,3,"Otro"),
			new Array(5,1,"Prestaciones y servicios capital humano"),
			new Array(5,2,"TrÃ¡mites capital humano"),
			new Array(5,3,"Correo electrÃ³nico"),
			new Array(5,4,"Otro")
		);
		
		if(valor==0)
		{
			// desactivamos el segundo select
			//console.log(document.getElementById("select2").value);
			document.getElementById("select2").value="0";
			document.getElementById("select2").disabled=true;
			document.getElementById("blockD").style.display = "none";
			document.getElementById("Coment").style.display = "none";
			document.getElementById("send").style.display = "none";
		}else{
			// eliminamos todos los posibles valores que contenga el select2
			document.getElementById("select2").options.length=0;
			//console.log("valor: "+valor);
			document.getElementById("blockD").style.display = "none";
			document.getElementById("Coment").style.display = "none";
			document.getElementById("send").style.display = "none";
			// aÃ±adimos los nuevos valores al select2
			document.getElementById("select2").options[0]=new Option("Selecciona una opciÃ³n", "0");
			for(i=0;i<arrayValores.length;i++)
			{
				// unicamente aÃ±adimos las opciones que pertenecen al id seleccionado
				// del primer select
				if(arrayValores[i][0]==valor)
				{
					document.getElementById("select2").options[document.getElementById("select2").options.length]=new Option(arrayValores[i][2], arrayValores[i][1]);
				}
			}
			// habilitamos el segundo select
			document.getElementById("select2").disabled=false;
		}
		
	}
	 
	function seleccinado_select2(value){
		var v1 = document.getElementById("select1");
		var valor1 = v1.options[v1.selectedIndex].value;
		var text1 = v1.options[v1.selectedIndex].text;
		var v2 = document.getElementById("select2");
		var valor2 = v2.options[v2.selectedIndex].value;
		var text2 = v2.options[v2.selectedIndex].text;
		document.getElementById("blockD").style.display = "none";
		document.getElementById("Coment").style.display = "none";
		document.getElementById("send").style.display = "none";
		if (valor2!=0 || valor1!=0)
		{//Selector de opciones
			if(valor1==1)
			{//Alumno
				switch (true) {
					case (valor2 < 7 || valor2==10)://menor a 7
						document.getElementById("blockD").style.display = "block";
						document.getElementById("Coment").style.display = "block";
						document.getElementById("send").style.display = "block";
						selectInfo = 1;
						break;
					case (valor2 >= 7 && valor2 < 10)://7 a 9
						document.getElementById("send").style.display = "block";
						selectInfo = 2;
						if(valor2==9)
							url= "https://www.sicert.ipn.mx/";
						else
							url= "http://www.dae.ipn.mx/buzon/";
						break;
					default:
						alert("Selecciona una opciÃ³n");
						break;
				}
			}
			else if(valor1==2)
			{//Aspirante
				switch (true) {
					case (valor2 == 1)://uno
						document.getElementById("send").style.display = "block";
						selectInfo = 2;
						url= "https://www.admision.ipn.mx/portal/ingreso.html";
						break;
					case (valor2 == 2)://uno
						document.getElementById("send").style.display = "block";
						selectInfo = 2;
						url= "https://www.admision.ipn.mx/";
						break;
					case (valor2 == 3)://uno
						document.getElementById("send").style.display = "block";
						selectInfo = 2;
						url= "http://www.ipn.mx/ofertaeducativa/Paginas/educacion-virtual.aspx";
						break;
					case (valor2 == 4)://uno
						document.getElementById("send").style.display = "block";
						selectInfo = 2;
						url= "http://www.dae.ipn.mx/buzon/";
						break;
					default:
						alert("Selecciona una opciÃ³n");
						break;
				}
			}
			else if(valor1==3)
			{//Externos
				switch (true) {
					case (valor2 < 4 || valor2 == 6):
						document.getElementById("blockD").style.display = "block";
						document.getElementById("Coment").style.display = "block";
						document.getElementById("send").style.display = "block";
						selectInfo = 1;
						break;
					case (valor2 == 4)://
						document.getElementById("send").style.display = "block";
						url="http://www.ipn.mx";
						selectInfo = 2;
						break;
					case (valor2 == 5)://
						document.getElementById("send").style.display = "block";
						url="http://www.sapbsi.ipn.mx/maximize.cfm";
						selectInfo = 2;
						break;
					default:
						alert("Selecciona una opciÃ³n");
						break;
				}
			}
			else if(valor1==4)
			{//Docente
				switch (true) {
					case (valor2 == 1 || valor2 == 3)://1
						document.getElementById("blockD").style.display = "block";
						document.getElementById("Coment").style.display = "block";
						document.getElementById("send").style.display = "block";
						selectInfo = 1;
						break;
					case (valor2 ==2)://2
						document.getElementById("send").style.display = "block";
						selectInfo = 2;
						url="https://sad.ipn.mx/";
						break;
					default:
						alert("Selecciona una opciÃ³n");
						break;
				}
			}
			else if(valor1==5)
			{//Servicios
				switch (true) {
					case (valor2 < 2 )://1
						document.getElementById("blockD").style.display = "block";
						document.getElementById("send").style.display = "block";
						selectInfo = 4;
						break;
					case (valor2 >= 2)://2+
						document.getElementById("blockD").style.display = "block";
						document.getElementById("Coment").style.display = "block";
						document.getElementById("send").style.display = "block";
						selectInfo = 1;
						break;
					default:
						alert("Selecciona una opciÃ³n");
						break;
				}
			}
			else{
					alert("Selecciona una opciÃ³n");
					valor=0;
				}
				
				
			//Fin de Selector de opciones
			
			//Alerta de Selector de opciones
			if(valor1==1)
			{console.log(valor2);
			//Alumnos
				switch (true) {
					case (valor2 == 1):
					case (valor2 == 2):
					case (valor2 == 5):
						textoInfo = "DirecciÃ³n de Egresados y Servicio Social";
						break;
					case (valor2 == 3):
					case (valor2 == 4):
						textoInfo = "CoordinaciÃ³n de CooperaciÃ³n acadÃ©mica";
						break;
					case (valor2 == 9):
					case (valor2 == 7):
					case (valor2 == 8):
						textoInfo = "DirecciÃ³n de AdministraciÃ³n Escolar";
						break;
					case (valor2 == 6):
						textoInfo = "DirecciÃ³n de Servicios Educativos";
						break;
					case (valor2 == 10):
						textoInfo = "DirecciÃ³n del Portal Web Institucional";
						break;
					default:
						alert("Selecciona una opciÃ³n");
						break;
				}
			}
			else if(valor1==2)
			{//Aspirante
				switch (true) {
					case valor2==1:
					case valor2==2:
					case valor2==3:
					case valor2==4:
						textoInfo = "DirecciÃ³n de AdministraciÃ³n Escolar";
						break;
					default:
						alert("Selecciona una opciÃ³n");
						break;
				}
			}
			else if(valor1==3)
			{//Externos
				switch (true) {
					case valor2==1:
						textoInfo = "CoordinaciÃ³n de CooperaciÃ³n acadÃ©mica";
						break;
					case valor2==2:
					case valor2==3:
						textoInfo = "DirecciÃ³n de Egresados y Servicio Social";
						break;
					case (valor2 == 4):
						textoInfo = "IPN";
						break;
					case (valor2 == 5):
						textoInfo = "SecretarÃ­a de AdministraciÃ³n del IPN";
						break;
					case (valor2 == 6):
						textoInfo = "DirecciÃ³n del Portal Web Institucional";
						break;
					default:
						alert("Selecciona una opciÃ³n");
						break;
				}
			}
			else if(valor1==4)
			{//Docente
				switch (true) {
					case valor2==1:
						textoInfo = "CoordinaciÃ³n de CooperaciÃ³n acadÃ©mica";
						break;
					case valor2==2:
						textoInfo = "SecretarÃ­a academica";
						break;
					case (valor2 == 3):
						textoInfo = "DirecciÃ³n del Portal Web Institucional";
						break;
					default:
						alert("Selecciona una opciÃ³n");
						break;
				}
			}
			else if(valor1==5)
			{//Servicios
				switch (true) {
					case valor2==1:
					case valor2==2:
						textoInfo = "DirecciÃ³n de Capital Humano";
						break;
					case valor2==3:
						textoInfo = "DirecciÃ³n de CÃ³mputo y Comunicaciones";
						break;
					case (valor2 == 4):
						textoInfo = "DirecciÃ³n del Portal Web Internacional";
						break;
					default:
						alert("Selecciona una opciÃ³n");
						break;
				}
			}
			console.log(textoInfo);
			//Fin de Alerta de Selector de opciones
		}
		else{
			//alert("Selecciona una opciÃ³n");
			document.getElementById("blockD").style.display = "none";
			document.getElementById("Coment").style.display = "none";
			document.getElementById("send").style.display = "none";
		}
		
		//console.log("Se ha seleccionado el valor "+valor1+" ("+text1+") del primer select y el valor "+valor2+" ("+text2+") del segundo select");
	}
		
	function nombre_valido(valor) {
		var reg = /^([a-z Ã±Ã¡Ã©Ã­Ã³Ãº]{2,60})$/i;
		if (reg.test(valor)) return true;
		else return false;
	}
	
	function Email_valido(valor) {
		var reg =  /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
		if (reg.test(valor)) return true;
		else return false;
	}

	$(document).ready(function () {
		selectInfo = 0;
		$("#textName").focusout(function () {
			if (!nombre_valido($(this).val())) 
				{document.getElementById("errorName").style.display = "block";
				}
			else 
				{document.getElementById("errorName").style.display = "none";}
		});
		/*$("#textLast").focusout(function () {
			if (!nombre_valido($(this).val())) 
				{document.getElementById("errorLast").style.display = "block";
				}
			else 
				{document.getElementById("errorLast").style.display = "none";}
		});*/
		$("#textEmail").focusout(function () {
			if (!Email_valido($(this).val())) 
				{document.getElementById("errorEmail").style.display = "block";
				}
			else 
				{document.getElementById("errorEmail").style.display = "none";}
		});
		$("#commentary").focusout(function () {
			if (($(this).val()).length == 0) 
				{document.getElementById("errorComen").style.display = "block";
				}
			else 
				{document.getElementById("errorComen").style.display = "none";}
		});
	});
	
	function revisar(opt){
		var a1 = document.getElementById("textName").value;
		//var a2 = document.getElementById("textLast").value;
		var a2="Test";
		var a3 = document.getElementById("textEmail").value;
		var a4 = document.getElementById("commentary").value;
		var b1 = document.getElementById("errorName").style.display;
		//var b2 = document.getElementById("errorLast").style.display ;
		var b2 = "none";
		var b3 = document.getElementById("errorEmail").style.display;
		var b4 = document.getElementById("errorComen").style.display;
		
		//console.log("entre revisar:"+opt+" b3 "+b3);
		if (opt == 1)
		{
			if(a1.length==0 || a2.length==0 || a3.length==0 || a4.length==0)
			{
				alert("Falta llenar uno o mas campos");
				return false;
			}else{
				if(b1=="block" || b2=="block" || b3=="block"|| b4=="block")
					return false;
				else
					return true;
			}
		}
		else if (opt == 3)
		{
			if(a4.length==0)
			{
				alert("Falta llenar uno o mas campos");
				return false;
			}else{
				if(b4=="block")
					return false;
				else
					return true;
			}
		}
		else if (opt == 4)
		{
			if(a1.length==0 || a2.length==0 || a3.length==0)
			{
				alert("Falta llenar uno o mas campos");
				return false;
			}else{
				if(b1=="block" || b2=="block" || b3=="block")
					return false;
				else
					return true;
			}
		}
		else{
			return false;
		}
		//console.log("sali de readonly");
	}
	
	function sendInfo(){
	    console.log("entre e send info");
		switch (selectInfo) {
					case 1:
					case 3:
					case 4:
						if(revisar(selectInfo))
							{
								alert("Su mensaje serÃ¡ enviado a la " +textoInfo +", Unidad Responsable encargada del servicio");
								document.getElementById("form-registro").submit();
								document.getElementById("form-registro").reset();
							}
						else{
							return;}
						break;
					case 2:
						alert("Te redireccionaremos  a la " +textoInfo +", Unidad Responsable encargada del servicio");
						/*document.getElementById("form-registro").reset();
						var a = document.createElement('a');
						a.href=url;
						a.target = '_blank';
						document.body.appendChild(a);
						a.click();*/
						//location.href=url;
						document.getElementById("form-registro").reset();
						document.getElementById("select1").selectedIndex = "0";
						parent.document.location.href = url;
						break;
			
					default:
						alert("Selecciona una opciÃ³n");
						break;
				}
				document.getElementById("blockD").style.display = "none";
				document.getElementById("Coment").style.display = "none";
				document.getElementById("send").style.display = "none";

	}
