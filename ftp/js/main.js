jQuery(document).ready(function($){


	//подключаю слайдер
	$('.bxslider:first').bxSlider({
		controls: false,
		easing: 'easeInOutQuad',
		infiniteLoop: true,
		auto: true,
		pause: 4000,
		speed: 500

    });

	//закрытие модалки
    $(".modal-close").bind("click", function(){
    	$(this).fadeOut(500);
    	$("#modal").fadeOut(500);
    });

});