(function () {
  "use strict";

  $(window).resize(function() {
	var wHeight = $(this).height();
	var logo = $('#topPage h2');
	var logo_h = 0.44*wHeight;
	var logo_space = 0.13*wHeight;
	if($(window).width()>480){
	  logo.css('width',logo_h);
	  logo.css('height',logo_h);
	  logo.css('padding',logo_space);
	  $('.scrollPage').height(wHeight);
	}
  });

  function changeVideo(){
	$('a.youtubeIframe').click(function() {
	  $('a.youtubeIframe').removeClass('current');
	  $(this).addClass('current');
	});
  }

  $(document).ready(function() {
	$(window).trigger('resize');
	changeVideo();
  });
})();


(function () {
  "use strict";

  var resizeTimerId = 0;

  var resizeFunction = function () {
    var $items = $('#eighthPage ul.newSnackList01 li .snackContent01');
    $items.removeAttr("style").autoHeight();
  };

  $(window).load(resizeFunction);

  $(".viewMore01").on("click", resizeFunction);

  $(window).on("resize", function() {
    clearTimeout(resizeTimerId);
    resizeTimerId = setTimeout(resizeFunction, 1000);
  });
})();
