$('.customer-btn').click(function(){
    $('nav ul .customer-show').toggleClass("show");
    $('nav ul .first').toggleClass("rotate");
});

$('.subscribe-btn').click(function(){
    $('nav ul .subscribe-show').toggleClass("show");
    $('nav ul .second').toggleClass("rotate");
});

$('nav ul li').click(function(){
    $(this).addClass("active").siblings().removeClass("active");
});

