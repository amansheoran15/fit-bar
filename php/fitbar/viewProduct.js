
function changeImage(a){
    console.log('hello');
    let pimage= a.parentElement.querySelector('.large-image');
    let smallatt= a.getAttribute('data-src');

    pimage.style.backgroundImage=smallatt;
    
}
$('#exampleModalToggle2').modal('hide');
$('body').removeClass('modal-open');
$('.fade').remove();

// console.log("hellooooo");
// $('.small-image').on('click',changeImage);




// var id1=$('.abcd').eq(0).attr('id');
// var iddd=document.getElementById(id1);
// iddd.addEventListener('click',function(){
//     $('.large-image').css('background-image',"");
//     console.log("ggg");
// });

// // $(id1).on('click',function(){
// //     $('.large-image').css('background-image',"");
// //     console.log("ggg");
// // })

// // function change3(){
   
// //     $('.large-image').css('background-image',"url(static/mmaf.jpg)");

// // }


// // function change4(){
   
// //     $('.large-image').css('background-image',"url(static/s&c.jpeg)");

// // }

// // $('#i3').on('click',change3);
// $('.abcd').on('click',function(){
//     console.log($('.abcd').eq(0).attr('id'));
// });
// // $('#i4').on('click',change4);
// // $('#i2').on('click',change2);
// function func(idd){
//     console.log(idd);
// }