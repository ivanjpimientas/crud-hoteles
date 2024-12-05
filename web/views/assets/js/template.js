(function ($) {
    'use strict'

    $('#customSwitch1').on('click', function () {
        debugger;
        if ($(this).is(':checked')) {
        $('body').addClass('dark-mode')
        } else {
        $('body').removeClass('dark-mode')
        }
    })

    $('#customSwLang').on('click', function () {
        debugger;
        if ($(this).is(':checked')) {
            googleTranslateElementInit('en')
        } else {
            googleTranslateElementInit('es')
        }
    })

    /*=============================================
    COMPONENTE DE VISUALIZACIÓN DE PDF 3D-FLIPBOOK
    =============================================*/

    var optionsFbook = {
        pdf: $("#hdFileView").val(),
        template: {
            html: $("#rutaClient").val() + 'views/plugins/3d-flip-book/templates/default-book-view.html',
            styles: [
                $("#rutaClient").val() + 'views/plugins/3d-flip-book/css/short-black-book-view.css'
            ],
            links: [
                {
                rel: 'stylesheet',
                href: $("#rutaClient").val() + 'views/plugins/3d-flip-book/css/font-awesome.min.css'
                }
            ],
            script: $("#rutaClient").val() + 'views/plugins/3d-flip-book/js/default-book-view.js'
        }
    };

    $('.containerView').FlipBook(optionsFbook);

})(jQuery)