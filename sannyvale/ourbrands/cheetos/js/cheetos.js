$(function(){
	var top_sec = [];
	getTopSection();
	/* ! Btn Control Next or Previous
	--------------------------------------------------------------------*/
	$("#btn_control a.prev").click(function(e){
		e.preventDefault();
		checkSection(top_sec,"prev");
	});
	$("#btn_control a.next").click(function(e){
		e.preventDefault();	
		checkSection(top_sec,"next");
	});
	function getTopSection(){
		$(".section_basic01").each(function(index, element) {
			top_sec.push($(this).offset().top);
		});
	}
	function checkSection(top_sec,direction){
		var target;
		var half_height = $(window).height()/2; 
		var top = $(this).scrollTop() + half_height;		
		for(var i = top_sec.length-1; i >= 0; i--){
			if(top >= parseInt(top_sec[i])){
				if(direction == "next"){
					if(i == 8 && top > top_sec[i]){
						return false;
					}else {
						target = i+2;
						gotoTarget(target);
						break;
					}
				}else if(direction == "prev"){
					if(i == 0){
						return false;
					}else {
						target = i;
						gotoTarget(target);
						break;
					}
				}
			}
		}
	}
	function gotoTarget(target){
		$('body,html').animate({
			scrollTop: $("#section0"+target).offset().top-60
		},700,'easeInCubic');
	}
	/*--------------------------------------------------------------------*/
	
	
});

(function () {
  "use strict";

  $(document).ready(function(){
    if ($(window).width()>481) {
      var offsetHeight = ($(window).height()/10);
      var offsetHeight2 = ($(window).height()/2);
      var offsetHeight3 = ($(window).height()/5.5);
      var offsetHeight4 = ($(window).height()/3);

      // init controller
      var controller = new ScrollMagic.Controller();

      var balloon1 = TweenMax.fromTo("#balloon01", 1.1, {scale:0}, {scale:1, transformOrigin:"left bottom", ease:Elastic.easeOut, delay:0.5});
      var balloon2 = TweenMax.fromTo("#balloon02", 1.1, {scale:0}, {scale:1, transformOrigin:"right top", ease:Elastic.easeOut});
      var balloon3 = TweenMax.fromTo("#balloon03", 1.1, {scale:0}, {scale:1, transformOrigin:"right bottom", ease:Elastic.easeOut});
      var balloon4 = TweenMax.fromTo("#balloon04", 1.1, {scale:0}, {scale:1, transformOrigin:"left bottom", ease:Elastic.easeOut});
      var balloon5 = TweenMax.fromTo("#balloon05", 1.1, {scale:0}, {scale:1, transformOrigin:"right bottom", ease:Elastic.easeOut});
      var balloon6 = TweenMax.fromTo("#balloon06", 1.1, {scale:0}, {scale:1, transformOrigin:"left bottom", ease:Elastic.easeOut});
      var chester1 = TweenMax.fromTo("#chester01", 0.6, {left:-500, opacity:0}, {left:13, opacity:1, ease: Circ.easeInOut});
      var chester2 = TweenMax.fromTo("#chester02", 0.4, {bottom:-100, opacity:0}, {bottom:9, opacity:1, ease:Back.easeOut});
      var chester3 = TweenMax.fromTo("#chester03", 0.2, {rotation: -5}, {rotation: 0, repeat: 3, ease: Circ.easeInOut});
      var chester4 = TweenMax.fromTo("#chester04", 1.5, {left:-500, opacity:0}, {left:-47, opacity:1, ease: Circ.easeInOut, delay:0.5});
      var chester5 = TweenMax.fromTo("#chester05", 1.5, {right:-500, opacity:0}, {right:-32, opacity:1, ease: Circ.easeInOut, delay:0});
      var spotlight = TweenMax.fromTo("#spotlight", 0.4, {opacity:0.5}, {opacity: 1, delay:1});
      var snack1 = TweenMax.fromTo("#snack01", 0.6, {top: -100, opacity:0}, {top: 0,opacity:1,ease: Circ.easeInOut, delay:0.5});
      var snack2 = TweenMax.fromTo("#snack02", 0.4, {opacity:0}, {opacity:1,ease: Circ.easeInOut, delay:0.5});
      var snack3 = TweenMax.fromTo("#snack03", 0.4, {top: -100, opacity:0}, {top: 0,opacity:1,ease: Circ.easeInOut, delay:0.5});

      var timeline1 = new TimelineMax();
      var timeline2 = new TimelineMax();
      var timeline3 = new TimelineMax();
      var timeline4 = new TimelineMax();
      var timeline5 = new TimelineMax();
      var timeline6 = new TimelineMax();

      timeline1.add(snack1).add(snack2).add(chester1).add(balloon1);
      timeline2.add(snack3).add(chester2).add(balloon2);
      timeline3.add(chester3).add(balloon3);
      timeline4.add(chester4).add(balloon4);
      timeline5.add(chester5).add(balloon5);
      timeline6.add(spotlight).add(balloon6);

      // build scene
      var scene1 = new ScrollMagic.Scene({triggerElement: "#section02" ,triggerHook: "1.00" , duration: 0, offset: offsetHeight})
                      .setTween(timeline1)
                      .addTo(controller);
      var scene2 = new ScrollMagic.Scene({triggerElement: "#section03",triggerHook: "1.00" , duration: 0, offset: offsetHeight})
                      .setTween(timeline2)
                      .addTo(controller);
      var scene3 = new ScrollMagic.Scene({triggerElement: "#section04",triggerHook: "1.00" , duration: 0, offset: offsetHeight2})
                      .setTween(timeline3)
                      .addTo(controller);
      var scene4 = new ScrollMagic.Scene({triggerElement: "#section05",triggerHook: "1.00" , duration: 0, offset: offsetHeight3})
                      .setTween(timeline4)
                      .addTo(controller);
      var scene5 = new ScrollMagic.Scene({triggerElement: "#section06",triggerHook: "1.00" , duration: 0, offset: offsetHeight4})
                      .setTween(timeline5)
                      .addTo(controller);
      var scene6 = new ScrollMagic.Scene({triggerElement: "#section07",triggerHook: "1.00" , duration: 0, offset: offsetHeight3})
                      .setTween(timeline6)
                      .addTo(controller);
      }
  });
})();

(function () {
  "use strict";

  $(document).ready(function(){
    var width = $('#section08 .contentWrap01').width();
    var cWidth = width;
    if (width > 480) {
      cWidth = 640;
    }
    var cHeight = cWidth * 0.56;
    $(".youtube01").colorbox({iframe: true, innerWidth: cWidth, innerHeight: cHeight});
  });
})();

(function () {
  "use strict";

  var resizeTimerId = 0;

  var resizeFunction = function () {
    // メインコンテンツ
    var windowHeight = $(this).height() - 60;
    if ($(window).width() > 480) {
      $('.autoHeight').height(windowHeight);
    } else {
      $('.autoHeight').removeAttr("style");
    }

    // 新商品
    var $items = $('.snacks-item > a > div');
    $items.removeAttr("style").autoHeight();
  };

  $(window).load(resizeFunction);

  $(".snacks-newsnack-more").on("click", resizeFunction);

  $(window).on("resize", function() {
    clearTimeout(resizeTimerId);
    resizeTimerId = setTimeout(resizeFunction, 400);
  });
})();

