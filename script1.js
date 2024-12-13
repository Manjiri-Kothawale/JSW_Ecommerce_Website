$(document).ready(function(){
    $('.sub-navbar ul li').hover(function(){
        $(this).children('ul').stop(true, false, true).slideToggle(200);
    });
});



