
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(window).on('load',function(){
    let fitbar = $('#fitbar');
    if(fitbar.isInViewport()){
        console.log('Hello');
        fitbar.addClass("animate__animated animate__rollIn animate__delay-1s");
    }
});

// $(window).scroll(function() {
//     let fitbar = $('#fitbar');
//     if(fitbar.isInViewport()){
//         console.log('Hello');
//         fitbar.addClass("animate__animated animate__rollIn animate__delay-1s");
//     }
//
// });