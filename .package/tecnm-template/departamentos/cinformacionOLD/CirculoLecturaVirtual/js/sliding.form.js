$(function() {
	/*
	number of fieldsets
	*/
	var fieldsetCount = $('#formElem').children().length;
	
	/*
	current position of fieldset / navigation link
	*/
	var current 	= 1;
    
	/*
	sum and save the widths of each one of the fieldsets
	set the final sum as the total width of the steps element
	*/
	var stepsWidth	= 0;
    var widths 		= new Array();
	$('#steps .step').each(function(i){
        var $step 		= $(this);
		widths[i]  		= stepsWidth;
        stepsWidth	 	+= $step.width();
    });
	$('#steps').width(stepsWidth);
	
	/*
	to avoid problems in IE, focus the first input of the form
	*/
	$('#formElem').children(':first').find(':input:first').focus();	
	
	/*
	show the navigation bar
	*/
	$('#navigation').show();
	
	/*
	when clicking on a navigation link 
	the form slides to the corresponding fieldset
	*/
    $('#navigation a').bind('click',function(e){
		var $this	= $(this);
		var prev	= current;
		$this.closest('ul').find('li').removeClass('selected');
        $this.parent().addClass('selected');
		/*
		we store the position of the link
		in the current variable	
		*/
		current = $this.parent().index() + 1;
		/*
		animate / slide to the next or to the corresponding
		fieldset. The order of the links in the navigation
		is the order of the fieldsets.
		Also, after sliding, we trigger the focus on the first 
		input element of the new fieldset
		If we clicked on the last link (confirmation), then we validate
		all the fieldsets, otherwise we validate the previous one
		before the form slided
		*/
        $('#steps').stop().animate({
            marginLeft: '-' + widths[current-1] + 'px'
        },500,function(){
			if(current == fieldsetCount)
				validateSteps();
			else
				validateStep(prev);
			$('#formElem').children(':nth-child('+ parseInt(current) +')').find(':input:first').focus();	
		});
        e.preventDefault();
    });
	
	/*
	clicking on the tab (on the last input of each fieldset), makes the form
	slide to the next step
	*/
	$('#formElem > fieldset').each(function(){
		var $fieldset = $(this);
		$fieldset.children(':last').find(':input').keydown(function(e){
			if (e.which == 9){
				$('#navigation li:nth-child(' + (parseInt(current)+1) + ') a').click();
				/* force the blur for validation */
				$(this).blur();
				e.preventDefault();
			}
		});
	});
	
	/*
	validates errors on all the fieldsets
	records if the Form has errors in $('#formElem').data()
	*/
	function validateSteps(){
		var FormErrors = false;
		for(var i = 1; i < fieldsetCount; ++i){
		    if(i!=2){
		    	//alert("s");
			var error = validateStep(i);
			}
			if(error == -1)
				FormErrors = true;
		}
		   
		$('#formElem').data('errors',FormErrors);	
	}
	
	/*
	validates one fieldset
	and returns -1 if errors found, or 1 if not
	*/
	function validateStep(step){
		if(step == fieldsetCount) return;
		
		var error = 1;
		var hasError = false;
		$('#formElem').children(':nth-child('+ parseInt(step) +')').find(':input:not(button)').each(function(){
			var $this 		= $(this);
			var valueLength = jQuery.trim($this.val()).length;
			
			if(valueLength == ''){
				hasError = true;
				$this.css('background-color','#FFEDEF');
			}
			else
				$this.css('background-color','#FFFFFF');	
		});
		var $link = $('#navigation li:nth-child(' + parseInt(step) + ') a');
		$link.parent().find('.error,.checked').remove();
		
		var valclass = 'checked';
		if(hasError){
			error = -1;
			valclass = 'error';
		}
		$('<span class="'+valclass+'"></span>').insertAfter($link);
		//alert($link);
		
		return error;
	}
	
	/*
	if there are errors don't allow the user to submit
	*/
	$('#registerButton').bind('click',function(){
		if($('#formElem').data('errors')){
			alert('Please correct the errors in the Form');
			return false;
		}else{
			alert("Comprobando Datos...");
			
			
			  var err = 0; var err2=0; var textos;
             
                			  var nombregrupo = 	 $("#fnombre").val();
                          var descripciongrupo	= $("#ldesc").val();
                          	var limitegrupo =  $("#llimite").val(); 
                          	var titulolibro =  $("#asignalibro").val(); 
                          		var nombrel =  $("#nombrb").val(); 
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
                		var row =  '<div class="row"><div id="col-md-4"><a href="#"  class="btn btn-warning btn-lg" onclick="registrarGrupo('+aux+'); return true;" >'+
                		'(Click) Para confirmar y Registrar este Grupo</a></div>'+
                		'<div class="alert alert-success" role="alert" style="font-size:17px;"><div id="col-md-3">Puntos Requeridos para Aprobar(Recomendado 70%):  <div class="col-xs-3"><input type="number" name="puntosreq" id="puntosreq" class="form-control"  value="'+setenta+'"></div> </div></div>'+
                		' '+
                		''+
                		' '+
                		'<div class="alert alert-warning" style=" text-align: left;"  role="alert">Nombre del grupo:'+nombregrupo+'<br>'+
                		'Descripcion:'+descripciongrupo+'<br>'+
                		'Limite de usuarios:'+limitegrupo+'<br>'+
                		'Libro selecionado:('+nombrel+')<br>'+
                		'(+'+ptsT+' pts) - [Tareas] | Asignaste '+numta+' tareas con un valor total de: '+ptsT+' pts<br>'+
                		'(+'+epp+' pts) - [Encuestas] | '+encuestaval+'<br>'+
                		'(+'+ntema+' pts) - [Temas] | Usted asigno '+ ntema+' temas para el foro: valor: '+ ntema+' pts (1 o varias respuestas en cada tema equivale a +1 pts unicamente) '+ 
                        '<br>(Total y Porcentajes)El total es: '+total+' pts '+
                        ' | aproximadamente '+setenta+' es el 70% de '+total+' | '+
                        'aproximadamente '+sesenta+' es el 60% de '+total+' </div></div>'+
                     
                      //  ' <input type="number" name="puntosreq" id="puntosreq" class="form-control"  value="'+setenta+'">'+
                       
                        
                        '';
                        
                			   	  $("#respuestastap").html(row);
          
                	
              
             
			
			
			
			
			
			return false;
			
			
			
		}	
	});
	
	
	
	
	
function registrarGrupo(nom,des,ti,temas){
alert("Creando Grupo...");


			
			
			  var err = 0; var err2=0; var textos;
             
                		  var nombregrupo = 	 $("#fnombre").val();
                          var descripciongrupo	= $("#ldesc").val();
                          	var limitegrupo =  $("#llimite").val(); 
                          	var titulolibro =  $("#asignalibro").val(); 
                          	var nombrel =  $("#nombrb").val(); 
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
                         



	//$.jStorage.get('tarea1')
	       var pagina = "controller/grupoController.php";
          	// $.jStorage.set('limite', $("#llimite").val()); 
       
                           $.ajax({ /** Insertando grupo **/
                        	url:pagina,
                        	method:"post",
                        	data: { nombre: nom , descripcion: des , libro: $("#asignalibro").val() , grupox: "registra" , limiteuser:$("#llimite").val() },
                        	cacha: false,
                        	success:function(data){
                        //	$("#respuestaUsuarios").html(data);
                              	var idgrupo =  parseInt(data);
                              	alert(idgrupo);
        		          //   $("#respuestastap2").html(data);
        		             
                                   $.ajax({  /** Insertando SESION **/
                        	        url:pagina,
                        	        method:"post",
                        	        data: { limitepuntos: $("#puntosreq").val() , id: idgrupo , libro: ti , session: "registra" },
                                  	cacha: false,
                        	        success:function(data){
                        	        	var idsesion =  parseInt(data);    //  data: { ide:idgrupo , nombre: ("#encuestaid").val() , encuestap: "registra" },
                        	                 //  alert(idsesion);      $("#respuestastap2").append(data);                      //   INSERTAR AQUI TODAS LAS TAREAS Y ENCUESTAS TEMAS
                        	         for (i = 1; i <= numta; i++) { // for para tareas
                						var tareaRow = $.jStorage.get('tarea'+i); 
                						var valorRow = $.jStorage.get('valort'+i);       
                					
                						$.ajax({  url:pagina,method:"post", 	cacha: false,
                        	              	data: { idse:idsesion , tarea: tareaRow ,valor:valorRow , tareaspost: "registra" },                                           
                        	                success:function(data){
                        	                  // inserta tareasa
                        	                 
                        	              //  $("#respuestastap2").append(data);
                        	        	        }
                        	            });                          // fin ajax tareas ajax
                        	            
                     			    }
                     			    for (i = 1; i <= ntema; i++) { // for para temas
                					var temaRow= $.jStorage.get('tema'+i); 
                						$.ajax({  url:pagina,method:"post", 	cacha: false,
                        	              	data: { idse:idsesion , temas: temaRow ,temaspost: "registra" },                                           
                        	                success:function(data){
                        	                  // inserta tareas
                        	              //  $("#respuestastap2").html(data);
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
                                               location.reload();
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

     
	
	
	
	
});