$(document) .ready(function () {
    $('body').scrollspy({
        target: ".navbar",
        offset: 65,
    })

    $("#interests").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        center: true,
        margin: 40,
        responsiveClass: true,
        dots: false,
        nav: true,
        items: 1,
        slideBy: 2,
        responsive: {
            0: {
                items: 2,
            },
            575: {
                items: 3,
            },
            767: {
                items: 4,
            },
            991: {
                items: 5,
                slideBy: 2,
            },
            1199: {
                items: 6,
                slideBy: 3,
            }
        }
    });

    $("#skils").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        center: true,
        margin: 40,
        responsiveClass: true,
        dots: false,
        nav: true,
        scrollPerPage: true,
        slideBy: 2,
        responsive: {
            0: {
                items: 2,
            },
            400: {
                items: 3,
            },
            575: {
                items: 4,
            },
            767: {
                items: 5,
            },
            991: {
                items: 6,
                slideBy: 3,
            },
            1199: {
                items: 7,
                slideBy: 4,
            }
        }
    });
    
    var macyProjetos = Macy({
        container: "#macy-container",
        trueOrder: false,
        waitForImages: false,
        margin: 24,
        columns: 3,
        breakAt: {
            940: 1
        }
    });
});

bootstrap.Toast.Default.delay = 5000;

var clip = new ClipboardJS('.copy');

clip.on("success", function () {
    $('#email-toast-certo').toast('show')
});
clip.on("error", function () {
    $('#email-toast-errado').toast('show')
});

$('.to-croll[href^="#"]').on('click', function (e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

    $('html, body').animate({
        scrollTop: targetOffset - 50
    }, 500);
});


AOS.init();