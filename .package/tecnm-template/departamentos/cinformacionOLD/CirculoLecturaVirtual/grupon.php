
<!DOCTYPE html><html class=''>
<head><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="canonical" href="http://codepen.io/chriswrightdesign/pen/cmanI" />



  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/font/css/font-awesome.css" rel="stylesheet" media="screen">  
    <link href="css/g//bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       <link href="css/grupo.css" rel="stylesheet" id="bootstrap-css">
   <script src="js/g/jquery.min.js"></script>
  <!-- toogle -->
   <script src="js/toggle.js"></script>
    <link href="css/toggle.css" rel="stylesheet">
  <!-- toogle  -->
    <style type="text/css">
  
    </style>
    <script src="/js/g/jquery-1.10.2.min.js"></script>
    <script src="js/g/bootstrap.min.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
	var change= false;
$(window).scroll(function(){
    window_y = $(window).scrollTop(); // VALOR QUE SE HA MOVIDO DEL SCROLL
    scroll_critical = parseInt(0); // VALOR DE TU DIV
    if (window_y > scroll_critical) { // SI EL SCROLL HA SUPERADO EL ALTO DE TU DIV
       // ACA MUESTRAS EL OTRO DIV Y EL OCULTAS EL DIV QUE QUIERES
     //  alert(1);
    } else {
       // ACA HACES TODO LO CONTRARIO
      // alert(2);
    }
});
	
	
	
    var $btnSets = $('#responsive'),
    $btnLinks = $btnSets.find('a');
 
    $btnLinks.click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.user-menu>div.user-menu-content").removeClass("active");
        $("div.user-menu>div.user-menu-content").eq(index).addClass("active");
    });
});

$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.view').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});
    </script>


<link rel='stylesheet' href='http://s.codepen.io/assets/reset/reset.css'><script src='http://s.codepen.io/assets/libs/modernizr.js'></script>
<style class="cp-pen-styles">@import url(http://fonts.googleapis.com/css?family=Lato:400,700);
* {
  box-sizing: border-box;
}

body {
  font-family: 'Lato';
}

.heading-primary {
  font-size: 2em;
  padding: 2em;
  text-align: center;
}

.accordion dl {
  border: 1px solid #ddd;
}
.accordion dl:after {
  content: "";
  display: block;
  height: 1em;
  width: 100%;
  background-color: #2ba659;
}

.accordion dd {
  background-color: #eee;
  font-size: 1em;
  line-height: 1.5em;
}

.accordion p {
  padding: 1em 2em 1em 2em;
}

.accordion {
  position: relative;
  background-color: #eee;
}

.container {
  max-width: 960px;
  margin: 0 auto;
  padding: 2em 0 2em 0;
}

.accordionTitle {
  background-color: #38cc70;
  text-align: center;
  font-weight: 700;
  padding: 2em;
  display: block;
  text-decoration: none;
  color: #fff;
  -webkit-transition: background-color 0.5s ease-in-out;
          transition: background-color 0.5s ease-in-out;
  border-bottom: 1px solid #30bb64;
}
.accordionTitle:before {
  content: "+";
  font-size: 1.5em;
  line-height: 0.5em;
  float: left;
  -webkit-transition: -webkit-transform 0.3s ease-in-out;
          transition: transform 0.3s ease-in-out;
}
.accordionTitle:hover {
  background-color: #2ba659;
}

.accordionTitleActive,
.accordionTitle.is-expanded {
  background-color: #2ba659;
}
.accordionTitleActive:before,
.accordionTitle.is-expanded:before {
  -webkit-transform: rotate(-225deg);
      -ms-transform: rotate(-225deg);
          transform: rotate(-225deg);
}

.accordionItem {
  height: auto;
  overflow: hidden;
  max-height: 50em;
  -webkit-transition: max-height 1s;
          transition: max-height 1s;
}
@media screen and (min-width: 48em) {
  .accordionItem {
    max-height: 15em;
    -webkit-transition: max-height 0.5s;
            transition: max-height 0.5s;
  }
}

.accordionItemCollapsed,
.accordionItem.is-collapsed {
  max-height: 0;
}

.animateIn {
  -webkit-animation: accordionIn 0.65s normal ease-in-out both 1;
          animation: accordionIn 0.65s normal ease-in-out both 1;
}

.animateOut {
  -webkit-animation: accordionOut 0.75s alternate ease-in-out both 1;
          animation: accordionOut 0.75s alternate ease-in-out both 1;
}

@-webkit-keyframes accordionIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.9) rotateX(-60deg);
            transform: scale(0.9) rotateX(-60deg);
    -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

@keyframes accordionIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.9) rotateX(-60deg);
            transform: scale(0.9) rotateX(-60deg);
    -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@-webkit-keyframes accordionOut {
  0% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.9) rotateX(-60deg);
            transform: scale(0.9) rotateX(-60deg);
  }
}
@keyframes accordionOut {
  0% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.9) rotateX(-60deg);
            transform: scale(0.9) rotateX(-60deg);
  }
}
</style></head><body>
<div class="container">
          <h1 class="heading-primary">CSS Responsive Animated Accordion</h1>
          <div class="accordion">
            <dl>
              <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">First Accordion heading</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
              <dt>
                <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                  Second Accordion heading</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Third Accordion heading
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
            </dl>
          </div>
        </div>

<script>
(function () {
    var d = document, accordionToggles = d.querySelectorAll('.js-accordionTrigger'), setAria, setAccordionAria, switchAccordion, touchSupported = 'ontouchstart' in window, pointerSupported = 'pointerdown' in window;
    skipClickDelay = function (e) {
        e.preventDefault();
        e.target.click();
    };
    setAriaAttr = function (el, ariaType, newProperty) {
        el.setAttribute(ariaType, newProperty);
    };
    setAccordionAria = function (el1, el2, expanded) {
        switch (expanded) {
        case 'true':
            setAriaAttr(el1, 'aria-expanded', 'true');
            setAriaAttr(el2, 'aria-hidden', 'false');
            break;
        case 'false':
            setAriaAttr(el1, 'aria-expanded', 'false');
            setAriaAttr(el2, 'aria-hidden', 'true');
            break;
        default:
            break;
        }
    };
    switchAccordion = function (e) {
        e.preventDefault();
        var thisAnswer = e.target.parentNode.nextElementSibling;
        var thisQuestion = e.target;
        if (thisAnswer.classList.contains('is-collapsed')) {
            setAccordionAria(thisQuestion, thisAnswer, 'true');
        } else {
            setAccordionAria(thisQuestion, thisAnswer, 'false');
        }
        thisQuestion.classList.toggle('is-collapsed');
        thisQuestion.classList.toggle('is-expanded');
        thisAnswer.classList.toggle('is-collapsed');
        thisAnswer.classList.toggle('is-expanded');
        thisAnswer.classList.toggle('animateIn');
    };
    for (var i = 0, len = accordionToggles.length; i < len; i++) {
        if (touchSupported) {
            accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
        }
        if (pointerSupported) {
            accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
        }
        accordionToggles[i].addEventListener('click', switchAccordion, false);
    }
}());
//@ sourceURL=pen.js
</script>
<script src='http://codepen.io/assets/editor/live/css_live_reload_init.js'></script>
</body></html>

