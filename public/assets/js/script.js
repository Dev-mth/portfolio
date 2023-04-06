/* carregar um conteúdo antes da página terminar de carregar*/
$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
    });

    /* Um script de animação de digitação jQuery (https://cdnjs.com/)*/
    var typed = new Typed(".typing", {
        strings:["Desenvolvedor Jr","Front-end","Back-end","Freelancer"],
        typeSpeed:60,
        backSpeed:30,
        loop:true
    });
    var typed = new Typed(".typing-2", {
        strings:["Matheus Cavalcante, tenho 27 anos e moro em Mesquita RJ"],
        typeSpeed:60,
        backSpeed:10,
        loop:true
    });



    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });
});