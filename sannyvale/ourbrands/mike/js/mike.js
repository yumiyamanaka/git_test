function scroll_if_anchor(href) {
    href = typeof(href) == "string" ? href : $(this).attr("href");
    if ($(window).width()>481) {
        var fromTop = 100;
    }else{
        var fromTop = 50;
    }
    if(href.indexOf("#") == 0) {
        var $target = $(href);
        
        if($target.length) {
            $('html, body').animate({ scrollTop: $target.offset().top - fromTop });
            if(history && "pushState" in history) {
                history.pushState({}, document.title, window.location.pathname + href);
                return false;
            }
        }
    }
}    
scroll_if_anchor(window.location.hash);

//SNACK item auto height
function snacksHeight() {
    if ($(window).width()>481) {
        $('.section06 li.snacks-item').removeAttr('style');
    }else{
        $('.section06 li.snacks-item').autoHeight({column:2, clear:1});
    }
}
$(window).load(function(){
    snacksHeight();
});
$(window).resize(function(){
    snacksHeight();
});

$(function(){
	$(".section05 a").click(function(e){
		e.preventDefault();
		if(!$(this).hasClass("open")) {
			$(this).addClass("open");
			$(this).next().slideDown(250);
		}
		else {
			$(this).removeClass("open");
			$(this).next().slideUp(250);
		}
	})
	if ($(window).width()>481) {
	
		// init controller
		var controller = new ScrollMagic.Controller();
		
		var point1 = TweenMax.fromTo("#point01img", 0.5, {opacity:0}, {opacity:1,ease: Circ.easeInOut, delay:1});
		var point2 = TweenMax.fromTo("#point02img", 0.5, {opacity:0}, {opacity:1,ease: Circ.easeInOut, delay:1});
		var point3 = TweenMax.fromTo("#point03img", 0.5, {opacity:0}, {opacity:1,ease: Circ.easeInOut, delay:1});
		var popcorn1 = TweenMax.fromTo("#snack01", 0.5, {top: -1000, opacity:0.5}, {top: 159, opacity:1});
		var popcorn2 = TweenMax.fromTo("#snack02", 3, {top: -500, opacity:0.7}, {top: 159, opacity:1});

		var timeline1 = new TimelineMax();
		var timeline2 = new TimelineMax();
		var timeline3 = new TimelineMax();
		var timeline4 = new TimelineMax();
		var timeline5 = new TimelineMax();
		
		timeline1.add(point1);
		timeline2.add(point2);
		timeline3.add(point3);
		timeline4.add(popcorn1);
		timeline5.add(popcorn2);

		// build scene
		var scene1 = new ScrollMagic.Scene({triggerElement: "#point01" ,triggerHook: "1.00" , duration: 0, offset: 100})						
						.setTween(timeline1)
						.addTo(controller);
		var scene2 = new ScrollMagic.Scene({triggerElement: "#point02",triggerHook: "1.00" , duration: 0, offset: 100})
						.setTween(timeline2)
						.addTo(controller);
		var scene3 = new ScrollMagic.Scene({triggerElement: "#point03",triggerHook: "1.00" , duration: 0, offset: 100})
						.setTween(timeline3)
						.addTo(controller);
		var scene4 = new ScrollMagic.Scene({triggerElement: "#section06 .contentWrap01",triggerHook: "1.00" , duration: 1000, offset: 100})
						.setTween(timeline4)
						.addTo(controller);
		var scene5 = new ScrollMagic.Scene({triggerElement: "#section06 .contentWrap01",triggerHook: "1.00" , duration: 1200, offset: 200})
						.setTween(timeline5)
						.addTo(controller);
		}		
});