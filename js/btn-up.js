$(document).ready(function(){

    $('.upbutton').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });
    $(window).scroll(function(){
        if( $(this).scrollTop() > 0){
            $('upbutton').slideDown(300);
        }
        else{
            $('upbutton').slideUp(300);
        }
    });
 });