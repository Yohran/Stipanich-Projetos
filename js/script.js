$(function(){
  $('#j_menu a').click(function(){
var goto = $("#"+$(this).attr('href').replace('#','')+"");
    $('html,body').animate({scrollTop: goto.offset().top},'slow');
    console.clear();
    console.log(goto);
    return false;
  }); 
}); 

$(".button-collapse").sideNav();

$(document).ready(function(){
       $('.carousel').carousel();
    });

$('.carousel.carousel-slider').carousel({fullWidth: true});
  
jQuery(document).ready(function() {
            // Exibe ou oculta o botão
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > 200) {
                    jQuery('.voltar-ao-topo').fadeIn(200);
                } else {
                    jQuery('.voltar-ao-topo').fadeOut(200);
                }
            });
            
            // Faz animação para subir
            jQuery('.voltar-ao-topo').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, 300);
            })
        });


  $(document).ready(function(){
    $('.sidenav').sidenav();
  });