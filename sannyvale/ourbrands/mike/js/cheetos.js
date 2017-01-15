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