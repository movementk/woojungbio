(function($) {
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