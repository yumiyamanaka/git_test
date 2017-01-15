$(function(){
		var breakpoint = 480;
				
		$(".pullArea01 .detail").hide();
		$(".pullArea01 .btn a").click(function(e) {
			e.preventDefault();
			if(!$(this).hasClass("active")) {
				$(this).addClass("active");
				$(this).parents('.pullArea01').find(".detail").slideDown(250);
			}
			else {
				$(this).removeClass("active");
				$(this).parents('.pullArea01').find(".detail").slideUp(250);
			}
		});
		
		/* set colorbox */
		$('a.colorbox01').colorbox({iframe:true,width: "550",height:"680",scrolling:false});
		
		$(window).load(function(){
			var winWidth = $(window).width();
			hoverPack(winWidth);
			manageColorbox(winWidth); 
		});
		
		var resizeTime;
		$(window).resize(function() {
			var winWidth = $(window).width();
			clearTimeout(resizeTime);
			resizeTime = setTimeout(
			resizeFunction(winWidth), 200);
		});
		
		function resizeFunction(winWidth){
			hoverPack(winWidth);
			manageColorbox(winWidth);
		}
		
		function hoverPack(winWidth){
			if( winWidth > breakpoint ){	
				var ori_Width, ori_Height, ori_Top, ori_Left;
				var zm_Size = [
					{ width: 132, height: 188 },
					{ width: 132, height: 181 },
					{ width: 132, height: 184 },
					{ width: 132, height: 184 },
					{ width: 132, height: 182 },
					{ width: 140, height: 182 },
					{ width: 132, height: 186 },
					{ width: 132, height: 178 },
					{ width: 128, height: 196 },
					{ width: 132, height: 196 },
					{ width: 140, height: 186 },
					{ width: 140, height: 187 },
					{ width: 139, height: 186 }
				];
				$("#listPackage .package").bind({
					mouseenter: function() {
						ori_Width = $(this).width();
						ori_Height = $(this).height();
						ori_Top = $(this).position().top;
						ori_Left = $(this).position().left;
			
						var idx = $(this).index();
						var zm_Width = zm_Size[idx].width;
						var zm_Height = zm_Size[idx].height;
						var dif_Top = (zm_Height - ori_Height)/2;
						var dif_Left = (zm_Width - ori_Width)/2;
						
						zm_top = ori_Top - dif_Top;
						zm_left = ori_Left - dif_Left
						
						$(this).stop().animate({
							"width": zm_Width+"px",
							"height": zm_Height+"px",
							"top": zm_top+"px",
							"left": zm_left+"px"
						},'fast');	
					},
					mouseout: function() {
						$(this).stop().animate({
							"width": ori_Width+"px",
							"height": ori_Height+"px",
							"top": ori_Top+"px",
							"left": ori_Left+"px"
						},'fast');
					}	
				});
			}else {
				$("#listPackage .package").unbind( "mouseenter mouseout" );
				$("#listPackage .package").removeAttr("style");
			}
		}
		
		function manageColorbox(winWidth){
			if( winWidth <= breakpoint ){
				$("#listPackage a").removeClass("cboxElement");
			}else {
				$("#listPackage a").addClass("cboxElement");
			}
		}
		
});