	var arrayTareas = [];
                		var arrayVT = [];
                		var arrayTemas = [];

            $(document).ready(function() {
            
                $('#slider').rhinoslider({
                    controlsPlayPause: false,
                    showControls: 'always',
                    showBullets: 'always',
                    controlsMousewheel: false,
                    animateActive: false,
                    prevText: 'Atras',
                    nextText:'Siguiente',
		    slidePrevDirection: 'toRight',
		slideNextDirection: 'toLeft'
                });


                $(".rhino-prev").hide();
                $('.rhino-next').after('<a class=" form-submit" href="javascript:void(0);" id="siguientepaso" >Siguiente</a>');
                $(".rhino-next").hide();




                var info = ["Datos de Grupo","Selecciona Libro","Agrega Temas","Agrega Encuestas","Agrega Tareas","Confirmar","Finalizar"];
                var images = ["personal-details-icon.png","account-details.png","contact-details.png","contact-details.png","contact-details.png","contact-details.png","contact-details.png"];
                $('.rhino-bullet').each(function(index){
                    $(this).html('<p style="margin: 0pt; font-size: 12px; font-weight: bold;"><img src="./img/'+
                        images[index]+'"></p><p class="bullet-desc">'+info[index]+'</p></a>');
                });





            });

            $('.form-submit').live("click",function(){

                $('.form-error').html("");

                var current_tab = $('#slider').find('.rhino-active').attr("id");

                switch(current_tab){
                    case 'rhino-item0':
                        step1_validation();
                        break;
                    case 'rhino-item1':
                        step2_validation();
                        break;
                    case 'rhino-item2':
                        step3_validation();
                        break;
                    case 'rhino-item3':
                        step4_validation();
                        break;
                    case 'rhino-item4':
                        step5_validation();
                        break;
                    case 'rhino-item5':
                        step6_validation();
                        break;
                        
                        
                }
            });
           var step1=0; var step2=0; var step3=0;  var step4=0; var step5=0; var step6=0;
            var step1_validation = function(){

                var err = 0;

                if($('#fnombre').val() == ''){
                    $('#fnombre').parent().parent().find('.form-error').html("Nombre de grupo requerido");
                    err++;
                }
                if($('#ldesc').val() == ''){
                    $('#ldesc').parent().parent().find('.form-error').html("Descripcion de grupo requerida");
                    err++;
                }
                
                if($('#llimite').val() == '' || $('#llimite').val() == 0){
                    $('#llimite').parent().parent().find('.form-error').html("Debes introducir un limite de Alumnos");
                    err++;
                }
                if($('#tipo').val() == '0'){
                    $('#tipo').parent().parent().find('.form-error').html("Selecciona uno");
                    err++;
                }
                if(err == 0){
                	step1=1;
                    $(".rhino-active-bullet").removeClass("step-error").addClass("step-success");
                    $(".rhino-next").show();
                    $('.form-submit').hide();
                    $('.rhino-next').trigger('click');
                }else{
                	step1=0;
                    $(".rhino-active-bullet").removeClass("step-success").addClass("step-error");
                }


            };

            var step2_validation = function(){
                var err = 0;

                if($('#asignalibro').val() == ''){
                   
                    //$('#asignalibro').parent().parent().find('.form-error').html("Username is Required");
                    $( "#libroagregado" ).addClass( "step-error" );
                    
                    $("#libroagregado").html("No has seleccionado un libro aun!(Busque un libro y Accione un click en el libro que seleccionara)");
                    err++;
                }
                
                
                if(err == 0){
                	step2=1;
                    $(".rhino-active-bullet").removeClass("step-error").addClass("step-success");
                    $(".rhino-next").show();
                    $('.form-submit').hide();
                    $('.rhino-next').trigger('click');
                }else{
                	step2=0;
                    $(".rhino-active-bullet").removeClass("step-success").addClass("step-error");
                }

            };

            var step3_validation = function(){
                var err = 0;

                if($('#tema1').val() == ''){
                    $('#tema1').parent().parent().find('.form-error').html("Debes introducir al menos 1 tema para el grupo");
                    err++;
                }
                if(err == 0){
                	step3=1;
                    $(".rhino-active-bullet").removeClass("step-error").addClass("step-success");
                    $(".rhino-next").show();
                    $('.form-submit').hide();
                    $('.rhino-next').trigger('click');
                }else{
                	step3=0;
                    $(".rhino-active-bullet").removeClass("step-success").addClass("step-error");
                }

            };

           var step4_validation = function(){
                var err = 0;

                if(err == 0){
                	step4=1;
                    $(".rhino-active-bullet").removeClass("step-error").addClass("step-success");
                    $(".rhino-next").show();
                    $('.form-submit').hide();
                    $('.rhino-next').trigger('click');
                }else{
                	step4=0;
                    $(".rhino-active-bullet").removeClass("step-success").addClass("step-error");
                }
              

            };
           var step5_validation = function(){
                var err = 0;

                if(err == 0){
                    $(".rhino-active-bullet").removeClass("step-error").addClass("step-success");
                    $(".rhino-next").show();
                    $('.form-submit').hide();
                    $('.rhino-next').trigger('click');
                }else{
                	step5=0;
                    $(".rhino-active-bullet").removeClass("step-success").addClass("step-error");
                }
                

            };
            var step6_validation = function(){
                var err = 0; var err2=0; var textos;
                if(step1==0){
                	textos = "Falta completa datos en 'Datos de Grupo'"; err=1; err2=1;
                }else{
                	if(step2==0){
                		textos = "No selecciono un libro en 'Selecciona Libro'"; err=1; err2=1;
                	}else{
                		if(step3==0){
                			textos= "No agregaste un tema en 'Agrega Temas' debes seleccionar al menos 1"; err=1; err2=1;
                		}else{
                			if(step4==0){
                				textos= "No agregaste un tema en 'Agrega Temas' debes seleccionar al menos 1"; err=1; err2=1;
                			}else{
                			err2=0;
                		// 	alert("todo bien"); numta
                		
                		  var nombregrupo = 	 $.jStorage.get('nombre');
                          var descripciongrupo	= $.jStorage.get('descripcion');
                          	var limitegrupo =  $.jStorage.get('limite'); 
                          	var titulolibro =  $.jStorage.get('libro'); 
                          	 var epp=0;
                         
                		
                		
                		var ptsT = 0;
                		for (i = 1; i <= numta; i++) { 
                			var e= i-1;
                			arrayTareas[e]= $.jStorage.get('tarea'+i); 
                			arrayVT[e]= $.jStorage.get('valort'+i);       
                			var suma = parseInt(arrayVT[e]);
                			ptsT =  ptsT+suma;
                         }
                     
                           var arrSerialized = JSON.stringify(arrayTareas);
                           var serialTareas = JSON.parse(arrSerialized);
                        //   alert(serialTareas);
                    
                		for (i = 1; i <= ntema; i++) { 
                			arrayTemas[i]= $.jStorage.get('tema'+i); 
                			//alert(arrayTemas[i]);
                               //   text += cars[i] + "<br>";
                         }  
                         
                    
                		var total= 0;
                		var encuestaval;
                	
                          	 var epp=0;
                          	if($("#encuestaid").val()==''){
                          		encuestaval="Usted no agrego ninguna encuesta (Puede agregar mas adelante)";
                          	}else{
                          		epp=4;
                          		encuestaval="Usted agrego una encuesta con "+nup+" preguntas, valor: [4 pts]";
                          	}
                                   total = ptsT+epp+ntema;
                    
                         var setenta =      Math.round(porcentaje(total,70)) ;
                         var sesenta=      Math.round(porcentaje(total,60)) ;
                         var aux = "'"+nombregrupo+"','"+descripciongrupo+"','"+titulolibro+"','"+ $("#puntosreq").val()+"'";
                		var row =  '<div class="row"><div id="col-md-4"><a href="#"  class="btn btn-warning btn-lg" onclick="registrarGrupo('+aux+');" >(Click) Para confirmar y Registrar este Grupo</a></div>'+
                		'<div class="alert alert-success" role="alert" style="font-size:17px;"><br> <div id="col-md-3">Puntos Requeridos para Aprobar(Recomendado 70%):  <div class="col-xs-3"><input type="number" name="puntosreq" id="puntosreq" class="form-control"  value="'+setenta+'"></div> </div></div>'+
                		' '+
                		'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true">'+
                		'</span><span class="sr-only">Error:</span> '+
                		'Nombre del grupo:'+nombregrupo+'<br>'+
                		'Descripcion:'+descripciongrupo+'<br>'+
                		'Limite de usuarios:'+limitegrupo+'<br>'+
                		'Libro selecionado:'+titulolibro+'<br>'+
                		'(+'+ptsT+' pts) - [Tareas] | Asignaste '+numta+' tareas con un valor total de: '+ptsT+' pts<br>'+
                		'(+'+epp+' pts) - [Encuestas] | '+encuestaval+'<br>'+
                		'(+'+ntema+' pts) - [Temas] | Usted asigno '+ ntema+' temas para el foro: valor: '+ ntema+' pts (1 o varias respuestas en cada tema equivale a +1 pts unicamente) '+ 
                        '<br>(Total y Porcentajes)El total es: '+total+' pts '+
                        ' | aproximadamente '+setenta+' es el 70% de '+total+' | '+
                        'aproximadamente '+sesenta+' es el 60% de '+total+' <br></div>'+
                     
                      //  ' <input type="number" name="puntosreq" id="puntosreq" class="form-control"  value="'+setenta+'">'+
                       
                        
                        '';
                        
                			   	  $("#respuestastap").html(row);
             }
                		}
                	}
                }
                if(err2==1){
                	  $("#respuestastap").html('<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>'+textos+'</div>');
                }
                if(err == 0){
                    $(".rhino-active-bullet").removeClass("step-error").addClass("step-success");
                  //  $(".rhino-next").show();
                   // $('.form-submit').hide();
                    $('.rhino-next').trigger('click');
                }else{
                	step6=0;
                    $(".rhino-active-bullet").removeClass("step-success").addClass("step-error");
                }
                
              

            };
function registrarGrupo(nom,des,ti,temas){
alert("Creando Grupo...");
	//$.jStorage.get('tarea1')
	       var pagina = "controller/grupoController.php";
          	// $.jStorage.set('limite', $("#llimite").val()); 
       
                           $.ajax({
                        	url:pagina,
                        	method:"post",
                        	data: { nombre: nom , descripcion: des , libro: $("#asignalibro").val() , grupox: "registra" , limiteuser:$("#llimite").val() },
                        	cacha: false,
                        	success:function(data){
                        	$("#respuestaUsuarios").html(data);
                              	var idgrupo =  parseInt(data);
        		             // $("#respuestastap2").html(data);
                                   $.ajax({
                        	        url:pagina,
                        	        method:"post",
                        	        data: { limitepuntos: $("#puntosreq").val() , id: idgrupo , libro: ti , session: "registra" },
                                  	cacha: false,
                        	        success:function(data){
                        	        	var idsesion =  parseInt(data);    //  data: { ide:idgrupo , nombre: ("#encuestaid").val() , encuestap: "registra" },
                        	                                             //   INSERTAR AQUI TODAS LAS TAREAS Y ENCUESTAS TEMAS
                        	         for (i = 1; i <= numta; i++) { // for para tareas
                						var tareaRow = $.jStorage.get('tarea'+i); 
                						var valorRow = $.jStorage.get('valort'+i);       
                					
                						$.ajax({  url:pagina,method:"post", 	cacha: false,
                        	              	data: { idse:idsesion , tarea: tareaRow ,valor:valorRow , tareaspost: "registra" },                                           
                        	                success:function(data){
                        	                  // inserta tareas
                        	                $("#respuestastap2").html(data);
                        	        	        }
                        	            });                          // fin ajax tareas ajax
                        	            
                     			    }
                     			    for (i = 1; i <= ntema; i++) { // for para temas
                					var temaRow= $.jStorage.get('tema'+i); 
                						$.ajax({  url:pagina,method:"post", 	cacha: false,
                        	              	data: { idse:idsesion , temas: temaRow ,temaspost: "registra" },                                           
                        	                success:function(data){
                        	                  // inserta tareas
                        	                $("#respuestastap2").html(data);
                        	        	        }
                        	            });                          // fin ajax temas  ajax
                       			    }   // fin for
                        	              	if($("#encuestaid").val()!=''){
                        	              		  $.ajax({  url:pagina,method:"post", 	cacha: false,
                        	              		   data: { ide:idsesion , nombre: $("#encuestaid").val() , encuestap: "registra" },
                        	                        success:function(data){
                        	                        	    var idencuesta =  parseInt(data); 
                        	                        	   
                        	                        	    //$("#respuestastap2").html(+"Error en encuesta"+data);
                                        									 for (i = 1; i <= nup; i++) { 
                                        									 	//var key1 =  'pregunta'+nup;
                                        									 	var forpregunta =  $.jStorage.get('pregunta'+nup);
                                        									 	var forA =  $.jStorage.get('a'+nup);
                                        									    var forB = $.jStorage.get('b'+nup);
                                        									    var forC = $.jStorage.get('c'+nup);
                                        									    var forD = $.jStorage.get('d'+nup);
                                        									    var forCor = $.jStorage.get('correcta'+nup);
                															       
                															       $.ajax({  url:pagina,method:"post", 	cacha: false,
                        	              		              					       data: { idenpre:idencuesta , pregunta: forpregunta,oa:forA,ob:forB,oc:forC,od:forD,cor:forCor, encuestapregunta: "registra" },                                           
                        	                                       					   success:function(data){
                        	                        	                                // inserta pregunta x pregunta
                        	                        	                	                   //alert(data);
                        	                        	                	                 //  $("#respuestastap2").append(+"Error en oregunta"+data);
                        	                        	                	               //  $("#respuestastap2").html(+"Error en pregunta"+data);
                        	        	               
                        	                                            			    }// fin FOR succes ajax
                        	                                           				 });// fin ajax pregunta FOR
                	
                       														  }
                        	        	               
                        	                                       
                        	                           }
                        	                           
                        	                        });                     // fin segun ajax
                                           	}                                // fin fi encyesta
                                           	$("#respuestastap").html('<div class="alert alert-success"  style="font-size:23px;" role="alert">Grupo Creado Exitosamente</div>');
                       
        		                    }                                       //  fin succes
                        	       });                                    // fin segun ajax
        		              }                                       // fin succes  Sesion ajax
                        	});
  }

function porcentaje(can,por)
{
    var cantidad, porcentaje, resultado;
    cantidad = parseFloat (can);
    porcentaje = parseFloat (por);
    resultado=cantidad*porcentaje/100;
    //document.formulario.resultado.value = resultado;
    return resultado;
}
function redondeo(numero)
{
	var original=parseFloat(numero);
	var result=Math.round(original*100)/100 ;
	return result;
}

     
                 $.fn.postLoop = function(arg1,arg2,acccion) { 
                 $("#respuestaUsuarios").html("<center><img src='img/loading2.gif' width='50' heigth='50'></center>");
                 		var pagina = "controller/usuarioController.php";
              	//	var carrera = 1;
                        $.ajax({
                        	url:pagina,
                        	method:"post",
                        	data: { arg1: "muestra", arg2: carreraa   },
                        	cache: false,
                        	success:function(data){
                        	$("#respuestaUsuarios").html(data);
                        		alert(data);
                        	},
                        	error: function(){
                        alert('ERROR');
                    }
                        });
                 	};


