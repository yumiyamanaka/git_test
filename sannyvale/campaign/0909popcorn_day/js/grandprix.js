$(function(){
    var initModal = function(){
        var modalItem = $('.modal-item');
        var modalSwitch = $('.js-modal');
        var modalShadow = $('.module-modal-shadow');
        var buttonClose = $('.module-button-close a');
        var currentPosition;
        modalSwitch.click(function(){
            currentPosition = $(window).scrollTop();
            modalShadow.show();
            $(modalItem).show();
			return false;
        });
        var modalClose = function(){
            modalItem.hide();
            modalShadow.hide();
            $('body').css({
                'position' : 'static'
            });
			$(window).scrollTop(currentPosition);
        };
        modalShadow.click(function(){
            modalClose();
			return false;
        });
        buttonClose.click(function(){
            modalClose();
			return false;
        });
		$('.btns .close').click(function(){
            modalClose();
			return false;
        });
    };
	initModal();
});