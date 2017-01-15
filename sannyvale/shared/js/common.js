/**
 * common.js
 *
 *  version --- 3.7
 *  updated --- 2012/10/12
 */


/* !stack ------------------------------------------------------------------- */
jQuery(document).ready(function($) {
	addCss();
	pageScroll();
	rollover();
	fullPage();
});

/* !isUA -------------------------------------------------------------------- */
var isUA = (function(){
	var ua = navigator.userAgent.toLowerCase();
	indexOfKey = function(key){ return (ua.indexOf(key) != -1)? true: false;}
	var o = {};
	o.ie      = function(){ return indexOfKey("msie"); }
	o.fx      = function(){ return indexOfKey("firefox"); }
	o.chrome  = function(){ return indexOfKey("chrome"); }
	o.opera   = function(){ return indexOfKey("opera"); }
	o.android = function(){ return indexOfKey("android"); }
	o.ipad    = function(){ return indexOfKey("ipad"); }
	o.ipod    = function(){ return indexOfKey("ipod"); }
	o.iphone  = function(){ return indexOfKey("iphone"); }
	return o;
})();

/* !pageScroll -------------------------------------------------------------- */
var pageScroll = function(href){
	jQuery.easing.easeInOutCubic = function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	}; 
	$('a.scroll, .scroll a').each(function(){
		$(this).bind("click keypress",function(e){
			e.preventDefault();
			var target  = $(this).attr('href');

			var screenWidth = $('.g-outer');
			if(screenWidth.hasClass('is-rwd-mid')){
				if($(target).hasClass("noSpace")){
					console.log('1');
					targetY = $(target).offset().top-60;
				}else {
					console.log($(target));
					targetY = $(target).offset().top-80;
				}
			}
			else if(screenWidth.hasClass('is-rwd-def')){
				if($(target).hasClass("noSpace")){
					targetY = $(target).offset().top;
				}else {
					targetY = $(target).offset().top-80;
				}
			}
			else{			
				if($(target).hasClass("noSpace")){
					var targetY = $(target).offset().top-40;
				}else {
					var targetY = $(target).offset().top-60;
				}
			} 
			var parent  = ( isUA.opera() )? (document.compatMode == 'BackCompat') ? 'body': 'html' : 'html,body';
			$(parent).animate(
				{scrollTop: targetY },
				400,
				'easeInOutCubic'
			);
			return false;
		});
	});
}

/* !rollover ---------------------------------------------------------------- */
var rollover = function(){
	var suffix = { normal : '_no.', over   : '_on.'}
	$('a.over, img.over, input.over').each(function(){
		var a = null;
		var img = null;

		var elem = $(this).get(0);
		if( elem.nodeName.toLowerCase() == 'a' ){
			a = $(this);
			img = $('img',this);
		}else if( elem.nodeName.toLowerCase() == 'img' || elem.nodeName.toLowerCase() == 'input' ){
			img = $(this);
		}

		var src_no = img.attr('src');
		var src_on = src_no.replace(suffix.normal, suffix.over);

		if( elem.nodeName.toLowerCase() == 'a' ){
			a.bind("mouseover focus",function(){ img.attr('src',src_on); })
			 .bind("mouseout blur",  function(){ img.attr('src',src_no); });
		}else if( elem.nodeName.toLowerCase() == 'img' ){
			img.bind("mouseover",function(){ img.attr('src',src_on); })
			   .bind("mouseout", function(){ img.attr('src',src_no); });
		}else if( elem.nodeName.toLowerCase() == 'input' ){
			img.bind("mouseover focus",function(){ img.attr('src',src_on); })
			   .bind("mouseout blur",  function(){ img.attr('src',src_no); });
		}

		var cacheimg = document.createElement('img');
		cacheimg.src = src_on;
	});
};

/* !Addition Fitst & Last --------------------------------------------------- */
var addCss = (function(){
	$('li:first-child:not(:last-child)').addClass('first');
	$('li:last-child').addClass('last');
});
/* !Full page height -------------------------------------------------------- */
var fullPage = (function(){
	$(window).resize(function() {		
		var wWidth = $(this).width();
		var wHeight = $(this).height();
		var fHeight = $('.g-footer').height();
		var hHeight = $('.g-header').height();
		var pHeight = $(document).height();
		var newHeight = 0;
		if(wWidth<481) {
			newHeight = wHeight-fHeight-hHeight-40;
		}
		else if(wWidth<1280){
			newHeight = wHeight-fHeight-hHeight-32;
		}
		else {
			newHeight = wHeight-fHeight-32;
		}
		$('.g-layout').css('min-height',newHeight);
		if(pHeight<=wHeight){
			$('.pageTop').css('display','none');
		}
		else{
			$('.pageTop').css('display','block');
		}
		
	});
		$(window).trigger('resize');
});