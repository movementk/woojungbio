(function($) {
		
	/* 헤더 네비게이션 관련 이벤트 */
	$(document).on('mouseenter focusin', '#header #nav > ul > li > a', function() {
		if ($(this).siblings(".nav-content").length > 0) {
			$('body').addClass('nav-expanded');
		} else {
			$('body').removeClass('nav-expanded');
		}
		//$('body').removeClass('nav-selected-*').addClass('nav-selected-'+$(this).parent().index());
	});
	$(document).on('mouseleave', '#header', function() {
		$('body').removeClass('nav-expanded');
		$('#header #nav > ul > li').removeClass('active');
	});
	$(document).on('mouseenter focus', '#header #nav > ul > li a', function(e) {
		$(this).parent().siblings('.active').removeClass('active');
		$(this).parent().addClass('active');
		e.preventDefault();
	});

	/* 모바일, 테블릿 네비게이션 관련 이벤트 */
	$(document).on('click', '#header #btn-open-nav', function() {
		$('body').addClass('nav-opened');
	});
	$(document).on('click', '#nav-side', function(e) {
		if ($(e.target).attr('id') == 'nav-side') {
			$('body').removeClass('nav-opened');
		}
	});
	$(document).on('click', '#nav-side #btn-close-nav', function() {
		$('body').removeClass('nav-opened');
	});
	$(document).on('click', '#nav-side .nav-body .nav ul li a', function(e) {
		console.log($(this).siblings('ul').length);
		if ($(this).siblings('ul').length > 0) {
			if ($(this).parent().hasClass('selected')) {
				$(this).parent().removeClass('selected');
			} else {
				$(this).parent().siblings('.selected').removeClass('selected');
				$(this).parent().addClass('selected');
			}
			e.preventDefault();
		}
	});
	
	// 드롭다운 & 탭 함께 사용 시
	$(document).on("click", ".tabs a[data-toggle='tab']", function() {
		$(this).parent().siblings('.active').removeClass('active');
		$(this).parents('.dropdown-menu:eq(0)').siblings('.btn').eq(0).find('.text').text($(this).text());
	});
	
})(jQuery);