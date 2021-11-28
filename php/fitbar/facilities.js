
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(window).scroll(function() {
    var unlist = $('.facility-li');
    for(let i=0; i<unlist.length;i++){
        if(unlist.eq(i).isInViewport()){
            unlist.eq(i).addClass("animate__animated animate__fadeInLeft");
        }
    }
});