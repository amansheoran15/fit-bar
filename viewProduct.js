
function changeImage(){
    $('#large-image').css('background-image', $(this).attr('data-src'));
}

$('.small-image').on('click',changeImage);