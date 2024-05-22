$(document).ready(main);

var contador = 1;

function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				right: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				right: '-100%'
			});
		}
	});
}	

//MENU STICKY
$(document).ready(function(){
	var altura = $('.menu').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.menu').addClass('menu-fixed');
		} else {
			$('.menu').removeClass('menu-fixed');
		}
	});

	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.menu-text').addClass('menu-text-fixed');
		} else {
			$('.menu-text').removeClass('menu-text-fixed');
		}
	});

	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.logo').addClass('logo-fixed');
		} else {
			$('.logo').removeClass('logo-fixed');
		}
	});

});