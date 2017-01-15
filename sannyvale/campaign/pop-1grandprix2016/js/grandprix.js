$(function(){
    var section, sectionFamily, sectionAlcohol, sectionGirls, sectionParty;
    var sectionItemLength = 20;
    var url = 'js/grandprix.json';
    var sectionHtml = '', sectionFamilyHtml = '', sectionAlcoholHtml = '', sectionGirlsHtml = '', sectionPartyHtml = '';
	var initializeFlg = 1;
    $.getJSON(url, function(data){
        section = [];
        sectionFamily = [];
        sectionAlcohol = [];
        sectionGirls = [];
        sectionParty = [];
        for( var i in data) {
            var dataHtml = '<div class="itemGp" data-itemId = ' + data[i].itemId + '><p class="img"><img src="' + data[i].imageUrl + '" alt="' + data[i].imageAlt + '"/></p><p class="name">' + data[i].itemName + '</p><p class="text">' + data[i].itemText + '</p></div>';
          section.push(dataHtml);
            if(/family/.test(data[i].category)) {
                sectionFamily.push(dataHtml);
                sectionFamilyHtml += dataHtml;
            }
            if(/alcohol/.test(data[i].category)) {
                sectionAlcohol.push(dataHtml);
                sectionAlcoholHtml += dataHtml;
            }
            if(/girls/.test(data[i].category)) {
                sectionGirls.push(dataHtml);
                sectionGirlsHtml += dataHtml;
            }
            if(/party/.test(data[i].category)) {
                sectionParty.push(dataHtml);
                sectionPartyHtml += dataHtml;
            }
        }
        while( section.length ) {
            var rand = Math.floor( Math.random() * section.length );
            sectionHtml += section[rand];
            section.splice(rand, 1);
        }
        $('#all .items').append($(sectionHtml));
        $('#family .items').append($(sectionFamilyHtml));
        $('#alcohol .items').append($(sectionAlcoholHtml));
        $('#girls .items').append($(sectionGirlsHtml));
        $('#party .items').append($(sectionPartyHtml));
        sectionSearchInit();
        heightInit();
        initModal();
    });
    var heightInit = function(){
		$('.items').each(function(){
			$(this).find('.itemGp:not(.type02) .name').autoHeight({'column' : 4});
			$(this).find('.itemGp:not(.type02) .text').autoHeight({'column' : 4});
		});
			$('.gp_itemGp .text').autoHeight({'column' : 4});
    };

    var sectionSearchInit = function() {
        $('.sectionSearch#all').each(function () {
            var $sectionSearch = $(this);
            var sectionId = $(this).attr('id');
            var itemGpLength = $(this).find('.itemGp').length;
            var sectionIndex = 0;
            var sectionLastIndex = Math.ceil( itemGpLength / sectionItemLength);
            var controlInit = function(){
                var indexControlInit = function(){
                    var listItem = '';
                    var $indexControl = $('<ul>').addClass('indexControl');
                    for(var i = 0; i < Math.ceil( itemGpLength / sectionItemLength ); i++){
                        listItem += '<li><div><a href="">' + (i + 1) + '</a></div></li>';
                    }
                    $indexControl.append($(listItem));
                    $indexControl.find('li').each(function(){
                        var listIndex = $(this).index();
                        $(this).find('a').on('click', function(){
							$indexControl.find('li a').removeClass('active');
							$(this).addClass('active');
                            goToSection(listIndex);
                            sectionIndex = listIndex;
                            $('.btnControl p').removeClass('disabled').removeClass('type4th');
                            if(sectionIndex === 0){
                                $('.prev').addClass('disabled');
                            } else if (sectionIndex === sectionLastIndex - 1){
                                $('.next').addClass('disabled');
                            } else if (sectionIndex === sectionLastIndex - 2){
                                $('.next').addClass('type4th');
                            }
                            return false;
                        });
                    });
                    $sectionSearch.append($indexControl);
                };
                var pageControlInit = function(){
                    var $btnControl = $('<div class="btnControl clearfix"></div>');
                    var $prev = $('<p class="prev disabled"><a href="#prev"><span>prev</span></a></p>');
                    var $next = $('<p class="next"><a href="#next"><span>next</span></a></p>');
                    $btnControl.append($prev).append($next);
                    $btnControl.find('a').on('click', function(){
                        if($(this).parent().hasClass('disabled')){
                            return false;
                        }
                        if($(this).attr('href') === '#prev'){
                            sectionIndex -= 1;
                        }
                        if($(this).attr('href') === '#next'){
                            sectionIndex += 1;
                        }
                        $('.btnControl p').removeClass('disabled').removeClass('type4th');
                        if(sectionIndex === 0){
                            $('.prev').addClass('disabled');
                        } else if (sectionIndex === sectionLastIndex - 1){
                            $('.next').addClass('disabled');
                        } else if (sectionIndex === sectionLastIndex - 2){
                            $('.next').addClass('type4th');
                        }
                        goToSection(sectionIndex);
                        return false;
                    });
                    $sectionSearch.append($btnControl);
                };
                if(itemGpLength > 20){
                    pageControlInit();
                    indexControlInit();
                }

            };
            var goToSection = function(a) {
                $sectionSearch.attr('data-show', 'show' + a );
                goToIndex(a);
                heightInit();
            };
            controlInit();
            goToSection(0);
            //前へ
            //後へ
            //インデックスへ
        });
    };

    var goToIndex = function(a){
        $('.indexControl li').find('a').removeClass('active');
        $('.indexControl li').eq(a).find('a').addClass('active');
		if(initializeFlg){
			initializeFlg = 0;
		} else {
			$(window).scrollTop($('#section04').offset().top - 20);
		}
    };

	var sectionTab = function (){
		var btnSearch = $('.btnSearch li a');
		btnSearch.click(function(){
			btnSearch.removeClass('active');
			$(this).addClass('active');
			$('.sectionSearch').hide();
			$($(this).attr('href')).show();
			$('#section03').attr( 'data-current',$(this).attr('href'));
            heightInit();
			return false;
		});
	};
	sectionTab();

    var initModal = function(){
        var modalItem = $('.modal-item').not('#modal-pop2');
        var modalSwitch = $('.js-modal');
        var modalShadow = $('.module-modal-shadow');
        var buttonClose = $('.module-button-close a');
        var currentPosition;
        modalSwitch.click(function(){
            var modalIndex = $(this).attr('data-index');
			var modalName = $(this).attr('href').substr(1,6);
			$('#itemname').attr('value', modalName);
            currentPosition = $(window).scrollTop();
            modalShadow.show();
            $(modalItem).show();
            $.getJSON(url, function(data) {
                modalItem.find('.itemGp .img img').attr('src', data[modalIndex].imageUrl);
                modalItem.find('.itemGp .name').html(data[modalIndex].itemName);
                modalItem.find('.itemGp .text').html(data[modalIndex].itemText);
				$(modalItem).css('margin-top', -($(modalItem).outerHeight() / 2 ));
				$('body').css({
					'position' : 'fixed',
					'top' : -1 * currentPosition,
					'width' : 100 + '%'
				});
            });
			return false;
        });
        var modalClose = function(){
            modalItem.hide();
			$('#modal-pop2').hide();
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
		if(location.hash === "#complete"){
            currentPosition = $(window).scrollTop();
            modalShadow.show();
            $('#modal-pop2').show();
			$('#modal-pop2').css('margin-top', -($('#modal-pop2').outerHeight() / 2 ) + 30);
				$('body').css({
					'position' : 'fixed',
					'top' : -1 * currentPosition,
					'width' : 100 + '%'
				});
			location.hash = "";
		}
    };
	
});