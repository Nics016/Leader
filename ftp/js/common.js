jQuery(document).ready(function($){

	//закрытие модалки
    $(".modal-close").bind("click", function(e){
    	e.preventDefault();
    	$(this).closest(".modal-container").fadeOut(500);
    	$("#modal").fadeOut(500);
    	$("body").css({"overflow":"auto"});
    });

    //открытие модалки
    $("[data-event='showModal']").bind("click", function(e){
    	e.preventDefault();
    	var scrollTop = $(window).scrollTop();
    	var modalId = $(this).attr("data-modal");

    	$("#modal").fadeIn(500);
    	$("#modal").css({"top": scrollTop});
    	$("body").css({"overflow":"hidden"});
    	$(".modal-container[data-modal-id='" + modalId + "']").fadeIn(500);

    });

});
