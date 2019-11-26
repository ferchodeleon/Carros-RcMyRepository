$(document).ready(function () {
    $('.abrir-menu').click(function () {
        var navegacion = $('.navegacion'),
            nav_item_1 = $('nav li:nth-of-type(1)'),
            nav_item_2 = $('nav li:nth-of-type(2)'),
            nav_item_3 = $('nav li:nth-of-type(3)'),
            nav_item_4 = $('nav li:nth-of-type(4)'),
            linea_superior = $('.linea-superior'),
            linea_medio = $('.linea-medio'),
            linea_inferior = $('.linea-inferior'),
            abrir_menu = $('.abrir-menu');

        navegacion.toggleClass('menu-active');
        if (navegacion.hasClass('menu-active')) {

            linea_superior.removeClass('animacion-bar-cerrar-top').addClass('animacion-bar-top');
            linea_medio.removeClass('animacion-bar-cerrar-middle').addClass('animacion-bar-middle');
            linea_inferior.removeClass('animacion-bar-cerrar-bottom').addClass('animacion-bar-bottom');
            navegacion.removeClass('menu-arriba').addClass('menu-abajo');
            nav_item_1.removeClass('deslizar-nav-item-atras').addClass('deslizar-nav-item');
            nav_item_2.removeClass('deslizar-nav-item-atras-delay1').addClass('deslizar-nav-item-delay1');
            nav_item_3.removeClass('deslizar-nav-item-atras-delay2').addClass('deslizar-nav-item-delay2');
            nav_item_4.removeClass('deslizar-nav-item-atras-delay3').addClass('deslizar-nav-item-delay3');
        }
    })

    $('.atras').click(function () {
        var navegacion = $('.navegacion'),
            nav_item_1 = $('nav li:nth-of-type(1)'),
            nav_item_2 = $('nav li:nth-of-type(2)'),
            nav_item_3 = $('nav li:nth-of-type(3)'),
            nav_item_4 = $('nav li:nth-of-type(4)'),
            linea_superior = $('.linea-superior'),
            linea_medio = $('.linea-medio'),
            linea_inferior = $('.linea-inferior'),
            abrir_menu = $('.abrir-menu');

        if (navegacion.hasClass('menu-active')) {
            linea_superior.removeClass('animacion-bar-top').addClass('animacion-bar-cerrar-top');
            linea_medio.removeClass('animacion-bar-middle').addClass('animacion-bar-cerrar-middle');
            linea_inferior.removeClass('animacion-bar-bottom').addClass('animacion-bar-cerrar-bottom');
            navegacion.removeClass('menu-abajo').addClass('menu-arriba');
            nav_item_1.removeClass('deslizar-nav-item').addClass('deslizar-nav-item-atras');
            nav_item_2.removeClass('deslizar-nav-item-delay1').addClass('deslizar-nav-item-atras-delay1');
            nav_item_3.removeClass('deslizar-nav-item-delay2').addClass('deslizar-nav-item-atras-delay2');
            nav_item_4.removeClass('deslizar-nav-item-delay3').addClass('deslizar-nav-item-atras-delay3');
            navegacion.toggleClass('menu-active');
        } else {

        }
    })

    var options = {
        strings: ['<strong>¡Bienvenido!.</strong>',
                  '<strong>a tu carrera.</strong>',
                  '<strong class="primary">¡RC!.</strong>',
                  '<strong class="race-icon"><i class="fa fa-flag-checkered"></i></strong> <strong class="secundary"><i class="fa fa-car"></i></strong>'],
        typeSpeed: 80,
        loop: true
    };

    var typed = new Typed('.bienvenido', options);

});
