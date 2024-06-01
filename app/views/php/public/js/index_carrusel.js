
// -- Carrusel Config --
$(document).on('ready', function () {
		
    $('.one-time').slick({
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      adaptiveHeight: true,
      adaptiveWidth: true,
      autoplay: true,
      autoplaySpeed: 6000,
      arrows: false,
      fade: true,
      pauseOnHover: true
    });

    $('.center').slick({
      dots: false,
      infinite: true,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 4000,
      centerMode: false,
      centerPadding: '0px',
      slidesToShow: 4,
      responsive: [{
            breakpoint: 768,
            settings: {
                //arrows: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 2
            }
        },{
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 2
            }
        }
      ]
    });

    $('.anexo').slick({
      dots: false, // puntos
      infinite: true, 
      arrows: true, // flechas
      autoplay: true,
      autoplaySpeed: 3500,
      slidesToShow: 4,
      pauseOnHover: true,
      responsive: [{
            breakpoint: 768,
            settings: {
                //arrows: false,
                slidesToShow: 2
            }
        },{
            breakpoint: 480,
            settings: {
                arrows: false,
                centerPadding: '0px',
                slidesToShow: 2
            }
        }
      ]
    });
});
// -- Carrusel Config -- 


// -- Desglose de Opciones en Menu Azul --
$(function () {
    $('#main_navbar').bootnavbar({
        //option
        //animation: false
    });
})
// -- Desglose de Opciones en Menu Azul --