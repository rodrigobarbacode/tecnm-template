$(document).ready(function() {
    setTimeout(function() {
        $("#desface_noticias").fadeIn(1000);
    },50);
});
$(document).ready(function() {
    setTimeout(function() {
        $("#desface").fadeIn(1000);
    },500);
});
$(document).ready(function() {
    setTimeout(function() {
        $("#desface_footer").fadeIn(1000);
    },500);
});
$(document).ready(function() {
    setTimeout(function() {
        $("#desface_footer_gob").fadeIn(1000);
    },1000);
});




posicionarMenu2();

$(window).scroll(function() { posicionarMenu2(); });

function posicionarMenu2() {
    var altura_del_header = $('#barraGobmx').outerHeight(true);
    var altura_del_menu_blanco = $('#main_navbar2').outerHeight(true);

    if($(window).scrollTop() >= altura_del_header){
        $('#main_navbar2').addClass('menublanco');
        $('.wrapper').css('margin-top', (altura_del_menu_blanco) + 'px');
    }else{
        $('#main_navbar2').removeClass('menublanco');
        //$('.wrapper').css('margin-top', '0');
    }
}

posicionarMenu();

$(window).scroll(function() { posicionarMenu(); });

function posicionarMenu() {
    var altura_del_menu_blanco = $('#main_navbar2').outerHeight(true);
    var altura_del_menu = $('#main_navbar').outerHeight(true);

    if($(window).scrollTop() >= altura_del_menu_blanco){
        $('#main_navbar').addClass('menuazul');
        $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
    }else{
        $('#main_navbar').removeClass('menuazul');
        //$('.wrapper').css('margin-top', '0');
    }
}




function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'es',
        autoDisplay: false,
        gaTrack: true,
        gaId: 'wewe',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
}


