$(function(){
    setInterval(function(){
        $('.alice').fadeOut(1500,function(){
            $(this).fadeIn(1500)
        });
    },3000);
});
