$(document).ready(function(){
$('#logbtn').toggle(function(){
		$('#log-box').animate({height: "auto"});
		$('#log-box .log-form').css({display: "block"});
		}, 
		function(){
	    $('#log-box').animate({height: "0px"});
	    $('#log-box .log-form').css({display: "none"});
		});
	$(".menu-header li").hover(
			function(){ $(this).addClass('hover'); },
			function(){ $(this).removeClass('hover');}
		);
});