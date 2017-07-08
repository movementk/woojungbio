(function($) {
	
	// 인트로 관련
	$(window).on("load", function() {
		$("#intro").addClass("on");
		var introVideo = $("#intro").find("video").show().get(0);
		if (introVideo) {
			introVideo.play();
		}
	});
	
	// 인트로 스크롤 관련
	$("#intro").on('mousewheel', function(e) {
		//console.log(event.deltaX, event.deltaY, event.deltaFactor);
		if (e.deltaY == -1) {
			$('html, body').stop().animate({
				scrollTop: $('#content').position().top
			}, 500, 'swing');
			e.preventDefault();
		}
	});

	$(document).on("click", "#intro", function() {
		$('html, body').stop().animate({
			scrollTop: $('#content').position().top
		}, 500, 'swing');
		e.preventDefault();
	});

	// 스크롤 클래스 설정
	$(window).on("scroll resize", function() {
		if ( $("#intro").height() < $(this).scrollTop() ) {
			$("body").addClass("scrolled");
		} else {
			$("body").removeClass("scrolled");
		}
	});

	// 사업분야 동영상
	$(document).on("mouseenter focusin", "#fields .field-item", function() {
		var fieldVideo = $(this).find("video").get(0);
		if (fieldVideo) {
			fieldVideo.play();
		}
	});
	$(document).on("mouseleave focusout", "#fields .field-item", function() {
		var fieldVideo = $(this).find("video").get(0);
		if (fieldVideo) {
			fieldVideo.pause();
		}
	});
	
})(jQuery);