
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
      autoplaySpeed: 2000,
      centerMode: true,
      centerPadding: '0px',
      slidesToShow: 4,
      responsive: [{
            // Breakpoint for Laptop or Desktop
            breakpoint: 1490,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 2,
            }
        },
        {
            // Breakpoint for Tablet
            breakpoint: 768,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 2
            }
        },
        {
            // Breakpoint for Mobile
            breakpoint: 480,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
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
      slidesToShow: 6,
      centerMode: true,
      pauseOnHover: true,
      responsive: [{
            breakpoint: 768,
            settings: {
                //arrows: false,
                centerMode: true,
                slidesToShow: 2
            }
        },{
            breakpoint: 480,
            settings: {
                centerMode: true,
                arrows: false,
                slidesToShow: 1
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