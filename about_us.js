
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

var images = ['url(static/IMG_7306.HEIC.jpg)','url(static/IMG_7302.HEIC.jpg)','url(static/IMG_7309.HEIC.jpg)','url(static/IMG_7305.HEIC.jpg)','url(static/IMG_7300.HEIC.jpg)','url(static/IMG_7360.jpg)']
$(window).on('load',function(){
    // let fitbar = $('#fitbar');
    // if(fitbar.isInViewport()){
    //
    //     fitbar.addClass("animate__animated animate__rollIn animate__delay-1s");
    // }

    var id= setInterval(function(){
        $('#about-image').css('background-image',images[Math.floor((Math.random() * (images.length-1)) + 1)]);
        },3000);




});



$(window).on('scroll',function(){

    var unlist = $('#facilities');
    if(unlist.isInViewport()){
        unlist.addClass("animate__animated animate__fadeInLeft");
    }
})

var app = document.getElementById('fitbar');

var typewriter = new Typewriter(app, {
    loop: false,
    delay: 200,
});

typewriter
    .pauseFor(1000)
    .typeString('fit.bar')
    .start();

