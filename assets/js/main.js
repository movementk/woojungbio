(function($) {
	
	// 인트로 관련
	$(window).on("load", function() {
		$("#intro").addClass("on");
		var introVideo = $("#intro").find("video").show().get(0);
		if (introVideo) {
			introVideo.play();
		}
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