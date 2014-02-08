var current_page = '#home';
var interval;

$(document).ready(function() {
	updateOrientation();
	
	var interval = setInterval(checkPage, 100);
	
	$("a.goto").click(function() {
		var page = $(this).attr('href');
		
		goTo(page);
	});
	
	//Slider
	$("#slider").easySlider({
		controlsShow: false,
		prevBtn: "#prev",
		nextBtn: "#next"
	});
});

function goTo(page) {
	$(".selected").fadeOut('fast', function() {
		current_page = page;
		
		
		$(page).fadeIn().addClass('selected');
		$(this).removeClass('selected');
		
		$('html, body').animate({
			scrollTop: "0px"
		}, 500);		
	});
}

function updateOrientation(){
	var contentType = "show_";
	
	switch(window.orientation){
		case 0:
		contentType += "normal";
		break;
		
		case -90:
		contentType += "right";
		break;
		
		case 90:
		contentType += "left";
		break;
		
		case 180:
		contentType += "flipped";
		break;
	}
	$("#page_wrapper").attr("class", contentType);
}

function checkPage() {
	var hash = new String(document.location).indexOf("#");
	
	if(hash != -1) {
		page = new String(document.location).substring(hash);
		
		if(page != current_page) {
			goTo(page);
		}
	}
	else {
		if(current_page != '#home') {
			goTo('#home');
		}
	}
	
}
