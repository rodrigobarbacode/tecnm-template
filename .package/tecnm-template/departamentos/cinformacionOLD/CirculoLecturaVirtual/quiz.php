 <?php 
 include("../funciones/login.php");  
 session_start();
 if(isset($_SESSION['k_se'])){


 $arg = "";
 $arg = $_GET['id'];
 $pre= GetJson('http://localhost/CirculoLecturaVirtual/controller/grupoController.php?preguntas=',$arg,""); // $pre[0]->"idg   GRUPO JSON
 ?>
 <!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <!--
Copyright (c) 2015 by Jon (http://codepen.io/KempfCreative/pen/FtwGm)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

  <title>CodePen - Art Quiz</title>

  <link rel="stylesheet" href="/assets/reset/normalize.css">
<script src='css/e/angular.min.js'></script>
  <!-- ANGULAR JS -->
   <!-- Jqury Version -->
   <script src="css/e/jquery.min.js"></script>
   <!-- fin jquery verision -->
   <!-- Jquery UI -->
     <script src="css/e/jquery-ui.js"></script>
   <!-- Jqury UI -->
  <style>
 /** @import url(http://fonts.googleapis.com/css?family=Loved+by+the+King); **/
	@import url(http://fonts.googleapis.com/css?family=Architects+Daughter);

body {
	background-color: #fff; 
background-image: 
linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em;
  margin-left: 100px;
  padding-left: 30px;
  padding: 30px 0 30px 30px;
}

header {
    display:block;
    position: absolute;
    left:30px;
    top: 60px;
    -webkit-transform: rotate(-10deg);
    transform:rotate(-10deg);
    -webkit-transform-origin: bottom-left;
    transform-origin:bottom-left;
    margin: 0 auto;
}

h1, h2 {
  margin: 0;
  padding: 0;
  color: black;
 /**font-family: 'Loved by the King', cursive; **/
	font-family: 'Architects Daughter', cursive;
  text-align: center;
}

h1 {
  font-size: 60px;
  line-height: 35px;
}
h2 {
  font-size: 22px;
  letter-spacing: -1.3px;
  text-transform: lowercase;
}

#subhead {
	display: block;
	width:50%;
    margin:0 auto;
}

p {
  font-size: 30px;
  font-family: 'Loved by the King', cursive;
  color:#8c8c8c;
  line-height:38px;
}

a {
	color: #333333;
}

#questionsList {
	margin: 0 auto;
	padding:0;
	width: 50%;
}

#questionsList section {
	display:none;
}

#questionsList section.current {
	display:block;
	position: relative;
}

#questionsList li {
	display:list-item;
	margin: 0 auto;
	list-style: none;
}

#questionsList li:before {
	position: absolute;
	top:-30px;
	left:-1em;
	font-family: 'Loved by the King', cursive;
	font-size:5em;
	color:#8C8C8C;
	content: "Q:";
}

#questionsList .questionItem {
	margin:0 auto;
	padding: 1em 0;
	position: relative;
	display: block;
}

#questionsList .questionItem svg {
	position: absolute;
	width:40px;
	height: 40px;
	top:50%;
	margin-top: -20px;
	left:5px;
	pointer-events:none;
}

#questionsList .questionItem svg path {
	stroke: #8C8C8C;
	stroke-width:13px;
	background: none;
}

svg:not(:root) {
	overflow: hidden;
}

#questionsList .questionItem label {
	display: inline-block;
	position: relative;
	font-family: 'Loved by the King', cursive;
	font-size: 2em;
	color:#8C8C8C;
	padding:0 0 0 80px;
	vertical-align: top;
	cursor: pointer;
}

#questionsList .questionItem label::before {
	border-radius: 50%;
	content: '';
	border: 4px solid #8C8C8C;
	width:50px;
	height:50px;
	top:50%;
	left:0;
	margin-top: -25px;
	position: absolute;
	cursor: pointer;
	box-sizing: border-box;
}

#questionsList .questionItem input[type=radio] {
	-webkit-appearance: none;
	opacity: 0;
	width:50px;
	height:50px;
	position: absolute;
	top:50%;
	left:0;
	margin-top:-25px;
	cursor: pointer;
}

.nextButton, .finalButton {
	display:block;
	border:4px solid #8C8C8C;
	border-radius: 20px;
	width:100%;
	margin:0 auto;
	margin-top: 25px;
	padding:5px 10px;
	font-family: 'Loved by the King', cursive;
	font-size: 2em;
	text-align: center;
	text-decoration: none;
	color: #8C8C8C;
}
  </style>

  <script>
    window.console = window.console || function(t) {};
    window.open = function(){ console.log('window.open is disabled.'); };
    window.print = function(){ console.log('window.print is disabled.'); };
    // Support hover state for mobile.
    if (false) {
      window.ontouchstart = function(){};
    }
  </script>

</head>

   <script>
        $(document).ready(function(){/* activate scrollspy menu */
            mostrarGrupos("<?php echo $_GET['id'];?>","#muestagrupos");
});
    
    
     function mostrarGrupos(tipo,on) {
 	    var ima="";
 	
     
    }

      </script>

<body>

      <body>
      	
      	
        <header>
        	
            <h1>Encuesta!</h1>
            <h2>Valor +4 puntos!</h2>
            <center><img src="up/<?php echo  $pre[0]->img;?>" width="180"> </center>
        </header>
        <div id="subhead">
            <p>
            	
            	Encuesta de:<?php echo $pre[0]->titulo;?></p>
        </div>
 <div id="cargap"> </div>
        <ul id="questionsList">
        	<div id="muestagrupos"></div>
        	
        	<?php
        	$m = 1;
			$id = 1;
        	for($x=0;$x<count($pre);$x++){
        		$idz = $pre[$x]->id;
        		if($m==1){
        			$zz = 'class="current"';
        		}else{
        			$zz = '';
        		}
                if($x==count($pre)-1){
                	$yy = '  <a href="#" id="submitAnswers" class="finalButton">Enviar Respuestas</a>';
                }else{
                	$yy = '  <a href="#" class="nextButton">Siguiente Pregunta</a>';
                }
        	     ?>
        	     
        	     
        	            <section <?php echo $zz; ?>>
                <li>
                    <p> - <?php echo $pre[$x]->p; ?></p>
                    <span class="questionItem">
                        <input id="a<?php echo $id; ?>a" type="radio" name="<?php echo $id; ?>one" value="beyonce"><label for="a<?php echo $id; ?>a"><?php echo $pre[$x]->a; ?></label>
                    </span>
                    <span class="questionItem">
                        <input id="b<?php echo $id; ?>b" type="radio" name="<?php echo $id; ?>one" value="whitney"><label for="b<?php echo $id; ?>b"><?php echo $pre[$x]->b; ?></label>
                    </span>
                    <span class="questionItem">
                        <input id="c<?php echo $id; ?>c" type="radio" name="<?php echo $id; ?>one" value="monroe"><label for="c<?php echo $id; ?>c"><?php echo $pre[$x]->c; ?></label>
                    </span>
                    <span class="questionItem">
                        <input id="d<?php echo $id; ?>d" type="radio" name="<?php echo $id; ?>one" value="madonna"><label for="d<?php echo $id; ?>d"><?php echo $pre[$x]->d; ?></label>
                    </span>
                   <?php echo $yy; ?>
                </li>
            </section>
        		<?php
        		$id++;
        		$m = 2;
        	}
        	
        	?>
           
        </ul>
</body>

  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage('resize', "*");
    }
  </script>

  <script src="//assets.codepen.io/assets/common/stopExecutionOnTimeout-6c99970ade81e43be51fa877be0f7600.js"></script>

  <script>
    var inputs = document.getElementsByTagName('input');
var questions = document.getElementsByTagName('section');
var selectedQuestion = document.getElementsByClassName('current');
var button = document.getElementsByClassName('nextButton');
for (var i = 0; i < button.length; i++) {
    if (window.CP.shouldStopExecution(1)) {
        break;
    }
    button[i].onclick = function () {
        nextQuestion();
    };
}
window.CP.exitedLoop(1);
function answersArray() {
    var answers = [];
    var an =[];
    var correctAnswers = [
        'monroe',
        'louvre',
        'blue',
        'lichtenstein',
        'picasso',
        'gogh',
        'monet',
        'munch',
        'weiwei',
        'beheading'
    ];
    var length = Math.min(answers.length, correctAnswers.length);
    var countMatched = 0, countNotMatched = 0;
    for (i = 0; i < inputs.length; i++) {
        if (window.CP.shouldStopExecution(2)) {
            break;
        }
        if (inputs[i].checked) {
            answers.push(inputs[i].id);
           
        }
    }
    window.CP.exitedLoop(2);
    var correctCount = 0;
    var incorrectCount = 0;
    for (i = 0; i < answers.length; i++) {
        if (window.CP.shouldStopExecution(3)) {
            break;
        }
        if (answers[i] === correctAnswers[i]) {
            correctCount++;
        }
    }
    window.CP.exitedLoop(3);
    /** Mi proceso **/
   var tipo ="<?php echo $_GET['id'];?>";
   	var jsondatos = "http://localhost/CirculoLecturaVirtual/controller/grupoController.php?preguntas="+tipo; // allgrupos
   	var sumando=0;
   	var totalp=0;
        $.getJSON(jsondatos, function(data) {
        	
      
            $.each(data, function(i, r) {
            //  alert(r.t);
            if(answers[i]!=undefined){
          if(Respuesta(answers[i].charAt(0))==r.t){
          	//alert("Buena");
          	
          
          	sumando++;
          }
            }else{
            	alert("Error debes contestar todas las preguntas");
            }
               totalp++;
            	      // $(on).append(libro);
                
            });
      
      
         var ress =  Math.floor(porcen(sumando,totalp));
        
        if(ress>=85){
        	//alert(ress);
        	alert("Muy bien el porcentaje de respuestas correctas es "+ress+"% Ahora haz sumado +4 puntos!");
        	
        		var thepost = "controller/grupoController.php";
        			$.ajax({
        				url: thepost,
        				data:{ usuario: "<?php echo $_SESSION['k_id'];?>" , en: "<?php echo $pre[0]->idg ;?>" , enu: "registra" },
        				method:"post",
        				cacha: false,
        				success:function(data){
        					//alert("asa");
        					$("#cargap").html(data+"<center>Encuesta Registrada +4 pts!</center>");
        				}
        			});
         	
        }else{
        	alert("Lo lamento tu porcentaje es "+ress+"% Intenta para la proxima!");
        }
        
        
        });
        
     
   /** proceso **/
    
    
    //var cadena = answers.charAt(answers[0].length -1);
    var res = answers[1].charAt(0);
  
    //alert(Respuesta(res));
    
    return answers;
}
function porcen(quepor,deltotal){
	var resultado = quepor*100/deltotal;
	return resultado;
}
function Respuesta(arg){
	if(arg=='a'){	return 1;}if(arg=='b'){	return 2;}if(arg=='c'){	return 3;}if(arg=='d'){	return 4;}
}
function hasClass(elem, klass) {
    return (' ' + elem.className + ' ').indexOf(' ' + klass + ' ') > -1;
}
var i = 0;
function nextQuestion() {
    if (questions[i] === selectedQuestion[0]) {
        console.log('hi');
        console.log(i);
        questions[i].className = '';
        questions[i + 1].className = 'current';
        i++;
        return i;
    }
}
var submit = document.getElementById('submitAnswers');
submit.onclick = function () {
    answersArray();
};
if (document.createElement('svg').getAttributeNS) {
    var radiobxsFill = Array.prototype.slice.call(document.querySelectorAll('#questionsList input[type="radio"]')), pathDefs = { fill: ['M15.833,24.334c2.179-0.443,4.766-3.995,6.545-5.359 c1.76-1.35,4.144-3.732,6.256-4.339c-3.983,3.844-6.504,9.556-10.047,13.827c-2.325,2.802-5.387,6.153-6.068,9.866 c2.081-0.474,4.484-2.502,6.425-3.488c5.708-2.897,11.316-6.804,16.608-10.418c4.812-3.287,11.13-7.53,13.935-12.905 c-0.759,3.059-3.364,6.421-4.943,9.203c-2.728,4.806-6.064,8.417-9.781,12.446c-6.895,7.477-15.107,14.109-20.779,22.608 c3.515-0.784,7.103-2.996,10.263-4.628c6.455-3.335,12.235-8.381,17.684-13.15c5.495-4.81,10.848-9.68,15.866-14.988 c1.905-2.016,4.178-4.42,5.556-6.838c0.051,1.256-0.604,2.542-1.03,3.672c-1.424,3.767-3.011,7.432-4.723,11.076 c-2.772,5.904-6.312,11.342-9.921,16.763c-3.167,4.757-7.082,8.94-10.854,13.205c-2.456,2.777-4.876,5.977-7.627,8.448 c9.341-7.52,18.965-14.629,27.924-22.656c4.995-4.474,9.557-9.075,13.586-14.446c1.443-1.924,2.427-4.939,3.74-6.56 c-0.446,3.322-2.183,6.878-3.312,10.032c-2.261,6.309-5.352,12.53-8.418,18.482c-3.46,6.719-8.134,12.698-11.954,19.203 c-0.725,1.234-1.833,2.451-2.265,3.77c2.347-0.48,4.812-3.199,7.028-4.286c4.144-2.033,7.787-4.938,11.184-8.072 c3.142-2.9,5.344-6.758,7.925-10.141c1.483-1.944,3.306-4.056,4.341-6.283c0.041,1.102-0.507,2.345-0.876,3.388 c-1.456,4.114-3.369,8.184-5.059,12.212c-1.503,3.583-3.421,7.001-5.277,10.411c-0.967,1.775-2.471,3.528-3.287,5.298 c2.49-1.163,5.229-3.906,7.212-5.828c2.094-2.028,5.027-4.716,6.33-7.335c-0.256,1.47-2.07,3.577-3.02,4.809'] }, animDefs = {
            fill: {
                speed: 0.8,
                easing: 'ease-in-out'
            }
        };
    function createSVGEl(def) {
        var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        if (def) {
            svg.setAttributeNS(null, 'viewBox', def.viewBox);
            svg.setAttributeNS(null, 'preserveAspectRatio', def.preserveAspectRatio);
        } else {
            svg.setAttributeNS(null, 'viewBox', '0 0 100 100');
        }
        svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
        return svg;
    }
    function controlCheckbox(el, type, svgDef) {
        var svg = createSVGEl(svgDef);
        el.parentNode.appendChild(svg);
        el.addEventListener('change', function () {
            if (el.checked) {
                draw(el, type);
            } else {
                reset(el);
            }
        });
    }
    function controlRadiobox(el, type) {
        var svg = createSVGEl();
        el.parentNode.appendChild(svg);
        el.addEventListener('change', function () {
            resetRadio(el);
            draw(el, type);
        });
    }
    radiobxsFill.forEach(function (el, i) {
        controlRadiobox(el, 'fill');
    });
    function draw(el, type) {
        var paths = [], pathDef, animDef, svg = el.parentNode.querySelector('svg');
        switch (type) {
        case 'fill':
            pathDef = pathDefs.fill;
            animDef = animDefs.fill;
            break;
        }
        ;
        paths.push(document.createElementNS('http://www.w3.org/2000/svg', 'path'));
        if (type === 'cross' || type === 'list') {
            paths.push(document.createElementNS('http://www.w3.org/2000/svg', 'path'));
        }
        for (var i = 0, len = paths.length; i < len; ++i) {
            var path = paths[i];
            svg.appendChild(path);
            path.setAttributeNS(null, 'd', pathDef[i]);
            var length = path.getTotalLength();
            path.style.strokeDasharray = length + ' ' + length;
            if (i === 0) {
                path.style.strokeDashoffset = Math.floor(length) - 1;
            } else
                path.style.strokeDashoffset = length;
            path.getBoundingClientRect();
            path.style.transition = path.style.WebkitTransition = path.style.MozTransition = 'stroke-dashoffset ' + animDef.speed + 's ' + animDef.easing + ' ' + i * animDef.speed + 's';
            path.style.strokeDashoffset = '0';
        }
    }
    function reset(el) {
        Array.prototype.slice.call(el.parentNode.querySelectorAll('svg > path')).forEach(function (el) {
            el.parentNode.removeChild(el);
        });
    }
    function resetRadio(el) {
        Array.prototype.slice.call(document.querySelectorAll('input[type="radio"][name="' + el.getAttribute('name') + '"]')).forEach(function (el) {
            var path = el.parentNode.querySelector('svg > path');
            if (path) {
                path.parentNode.removeChild(path);
            }
        });
    }
}
    //@ sourceURL=pen.js
  </script>

</body>

</html>

<?php

 }else{
 	echo "Error";
 }

?>
