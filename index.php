<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>바이오사업부</title>
	<link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/default.css" rel="stylesheet">
	<link href="/assets/css/main.css" rel="stylesheet">
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-xs-8 col-sm-4 col-lg-3">
					<h1 class="logo">
						<a href="/">
							<img class="visible-xs" src="/assets/images/logo_xs.png" alt="우정바이오사업본부">
							<img class="visible-sm" src="/assets/images/logo_sm.png" alt="우정바이오사업본부">
							<img class="visible-md visible-lg" src="/assets/images/logo.png" alt="우정바이오사업본부">
						</a>
					</h1>
				</div>
				<div class="col-xs-4 col-sm-2 col-sm-offset-6 text-right hidden-lg">
					<button id="btn-open-nav" class="btn btn-link" type="button">
						<span class="sr-only">사이드 메뉴 열기</span>
					</button>
				</div>
				<div class="col-lg-9 visible-lg">
					<nav id="nav">
						<ul>
							<li><a href="#">R&amp;D</a></li>
							<li><a href="#">CRO</a></li>
							<li><a href="#">실험동물센터</a></li>
							<li><a href="#">PRODUCT</a></li>
							<li><a href="#">문의</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	
	<div id="nav-side" class="hidden-lg" role="presentation">
		<div class="nav-content">
			<div class="nav-header">
				<button type="button" id="btn-close-nav" class="btn btn-link"><img src="/assets/images/ico_close.png" alt="닫기"></button>
				<div class="quick">
					<ul>
						<li><a href="#">문의하기</a></li>
					</ul>
				</div>
			</div>
			<div class="nav-body">
				<nav class="nav">
					<ul>
						<li>
							<a href="#">R&amp;D</a>
							<ul>
								<li>
									<a href="#">Research</a>
									<ul>
										<li>
											<a href="#">바이오신소재</a>
										</li>
										<li>
											<a href="#">플랫폼 기술</a>
											<ul>
												<li><a href="#">Innovation Gene Therapy</a></li>
												<li><a href="#">Homologous Epitopes Region Immunization Technology</a></li>
												<li><a href="#">Cancer Therapies in Models</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">Development</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">CRO</a>
							<ul>
								<li>
									<a href="#">Safety Study</a>
									<ul>
										<li><a href="#">GLP Safety Study</a></li>
										<li><a href="#">시험항목</a></li>
										<li><a href="#">시험문의</a></li>
									</ul>
								</li>
								<li>
									<a href="#">정밀의학</a>
									<ul>
										<li><a href="#">Gene Delivery</a></li>
										<li><a href="#">Antibody Production</a></li>
										<li><a href="#">기능성 효능평가 서비스(Preclinical in vivo efficacy service)</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Global CRO</a>
									<ul>
										<li><a href="#">SNBL</a></li>
										<li><a href="#">Senzagen</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Zebrafish Screening</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">실험동물센터</a>
							<ul>
								<li><a href="#">실험동물 생산</a></li>
								<li><a href="#">질환모델 제작 - KO제작, 관리</a></li>
								<li><a href="#">청정화, 사육관리</a></li>
								<li><a href="#">유전자변형 문의</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Products</a>
							<ul>
								<li><a href="#">Ellegaard Göttingen<span></span></a></li>
								<li><a href="#">지카, 메르스, 뎅기, 인플루엔자 바이러스 연구 (AG129)<span></span></a></li>
								<li><a href="#">인플루엔자 바이러스, 백신 연구<span></span></a></li>
								<li><a href="#">면역부전 모델 (NPG)<span></span></a></li>
								<li><a href="#">인간화 간 모델 (URG)<span></span></a></li>
							</ul>
						</li>
						<li>
							<a href="#">문의</a>
							<ul>
								<li><a href="/center/notice_list.php">문의<span></span></a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	
	<main id="content">
		<section id="fields">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<div class="field-item field-item-1" tabindex="0">
							<div class="field-back">
								<video loop muted>
									<source src="/assets/images/video_1.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="field-content">
								<div class="field-body">
									<h4><a href="#">ANIMAL CENTER</a></h4>
									<hr>
									<p>
										(주)우정 바이오사업부의 <br>ANIMAL CENTER를 소개해 드립니다.
									</p>
									<ul>
										<li><a href="#">GEM</a></li>
										<li><a href="#">IVF</a></li>
										<li><a href="#">Cleaning</a></li>
										<li><a href="#">Colony Expansion</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-3">
						<div class="field-item field-item-2 active" tabindex="0">
							<div class="field-back">
								<video loop muted>
									<source src="/assets/images/video_2.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="field-content">
								<div class="field-body">
									<h4><a href="#">R&amp;D</a></h4>
									<hr>
									<p>
										(주)우정 바이오사업부의 <br>R&amp;D를 소개해 드립니다.
									</p>
									<ul>
										<li><a href="#">Immune-tech</a></li>
										<li><a href="#">Advanced</a></li>
										<li><a href="#">Material</a></li>
										<li><a href="#">Translation division</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-3">
						<div class="field-item field-item-3" tabindex="0">
							<div class="field-back">
								<video loop muted>
									<source src="/assets/images/video_3.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="field-content">
								<div class="field-body">
									<h4><a href="#">PRODUCTS</a></h4>
									<hr>
									<p>
										(주)우정 바이오사업부의 <br>PRODUCTS를 소개해 드립니다.
									</p>
									<ul>
										<li><a href="#">mAb</a></li>
										<li><a href="#">Lentivirus</a></li>
										<li><a href="#">Stable Cell</a></li>
										<li><a href="#">CDX/PDX</a></li>
										<li><a href="#">Disease Model</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-3">
						<div class="field-item field-item-4" tabindex="0">
							<div class="field-back">
								<video loop muted>
									<source src="/assets/images/video_4.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="field-content">
								<div class="field-body">
									<h4><a href="#">CRO</a></h4>
									<hr>
									<p>
										(주)우정 바이오사업부의 <br>CRO를 소개해 드립니다.
									</p>
									<ul>
										<li><a href="#">GLP</a></li>
										<li><a href="#">Zebrafish</a></li>
										<li><a href="#">Precision</a></li>
										<li><a href="#">Medicine</a></li>
										<li><a href="#">Global CRO</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div id="slogan">
			<div class="container">
				<p>
					<span class="bar top left"></span>
					<span class="bar top right"></span>
					<span class="bar bottom left"></span>
					<span class="bar bottom right"></span>
					우정비에스씨는 <br class="visible-xs">최첨단 동물실을 기반으로, <br><b>4차 산업 중심의 <br class="visible-xs">정밀의학 분야를 선도하는 <br class="visible-xs">기업입니다.</b>
				</p>
			</div>
		</div>
		<div class="boxes">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="row">
							<div class="col-xs-12">
								<section id="zebrafish" class="box">
									<div class="box-back">
										<video loop muted>
											<source src="/assets/images/video_1.mp4" type="video/mp4">
											Your browser does not support the video tag.
										</video>
									</div>
									<div class="box-content">
										<a href="#" class="box-body">
											<h4>Zebrafish<br><small>(Danio Rerio)</small></h4>
											<p>
												동물시험을 대체할 수 있는 대표적인 시험종으로 <br>
												<i>인체의 유전자와 80%이상 유사</i>하여 <br class="visible-xs">
												인간의 질병연구에 적합합니다.
											</p>
										</a>
									</div>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<section id="clp-points" class="box">
									<div class="box-content">
										<a href="#" class="box-body">
											<i></i>
											<h4>시험항목</h4>
											<small>CLP SAFETY STUDY</small>
										</a>
										</div>
								</section>
							</div>
							<div class="col-xs-6">
								<section id="clp-inquery">
									<div class="box-content">
										<a href="#" class="box-body">
											<i></i>
											<h4>시험문의</h4>
											<small>CLP SAFETY STUDY</small>
										</a>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<section id="campaign">
							<ul>
								<li>
									<a class="campaign-item campaign-item-1" href="#">
										<div class="campaign-content">
											<h4>Innovation Gene Therapy Innovation Gene Therapy Innovation Gene Therapy Innovation Gene Therapy</h4>
											<p>
												분열과 비분열 등 광명범위한 세포에 유전자를 효율적으로 전달하고 안정적으로 발현하는 바이러스성 유전자 전달 시스템 분열과 비분열 등 광명범위한 세포에 유전자를 효율적으로 전달하고 안정적으로 발현하는 바이러스성 유전자 전달 시스템
											</p>
										</div>
									</a>
								</li>
								<li>
									<a class="campaign-item campaign-item-1" href="#">
										<div class="campaign-content">
											<h4>Innovation Gene Therapy</h4>
											<p>
												분열과 비분열 등 광명범위한 세포에 유전자를 효율적으로 전달하고 안정적으로 발현하는 바이러스성 유전자 전달 시스템
											</p>
										</div>
									</a>
								</li>
								<li>
									<a class="campaign-item campaign-item-1" href="#">
										<div class="campaign-content">
											<h4>Innovation Gene Therapy</h4>
											<p>
												분열과 비분열 등 광명범위한 세포에 유전자를 효율적으로 전달하고 안정적으로 발현하는 바이러스성 유전자 전달 시스템
											</p>
										</div>
									</a>
								</li>
								<li>
									<a class="campaign-item campaign-item-1" href="#">
										<div class="campaign-content">
											<h4>Innovation Gene Therapy</h4>
											<p>
												분열과 비분열 등 광명범위한 세포에 유전자를 효율적으로 전달하고 안정적으로 발현하는 바이러스성 유전자 전달 시스템
											</p>
										</div>
									</a>
								</li>
							</ul>
						</section>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6 col-md-push-6">
						<div class="row">
							<div class="col-xs-6">
								<section id="snbl">
									<div class="box-content">
										<a href="#" class="box-body">
											<i></i>
											<h4>SNBL</h4>
											<small>Global CRO</small>
										</a>
									</div>
								</section>
							</div>
							<div class="col-xs-6">
								<section id="senzagen">
									<div class="box-content">
										<a href="#" class="box-body">
											<i></i>
											<h4>Senzagen</h4>
											<small>Global CRO</small>
										</a>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-md-pull-6">
						<section id="products">
							<ul>
								<li>
									<a class="product-item product-item-1" href="#">
										<div class="product-content">
											<small>정밀의학</small>
											<h4>Antibody Production</h4>
										</div>
									</a>
								</li>
								<li>
									<a class="product-item product-item-2" href="#">
										<div class="product-content">
											<small>정밀의학</small>
											<h4>Antibody Production</h4>
										</div>
									</a>
								</li>
								<li>
									<a class="product-item product-item-3" href="#">
										<div class="product-content">
											<small>정밀의학</small>
											<h4>Antibody Production</h4>
										</div>
									</a>
								</li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-9 col-lg-10">
					<div class="address">
						<dl>
							<dt>주소</dt>
							<dd><address>경기도 수원시 영통구 광교로 145 차세대융합기술연구원 B동 3층 (주)우정비에스씨</address></dd>
						</dl>
					</div>
					<div class="contact">
						<dl>
							<dt>TEL</dt>
							<dd>031-888-9369</dd>
						</dl>
						<dl>
							<dt>FAX</dt>
							<dd>031-888-9368</dd>
						</dl>
						<dl>
							<dt>E-mail</dt>
							<dd><a href="mailto:wj@woojungbsc.co.kr" target="_blank">wj@woojungbsc.co.kr</a></dd>
						</dl>
					</div>
					<div class="copyright">
						<p>
							COPYRIGHT (C) 2017 WOOJUNGBSC.,CO.LTD.<br class="visible-xs">
							ALL RIGHTS RESERVED.<br class="hidden-lg">
							SITE BY <a href="http://movementk.com" target="_blank">MOVEMENT K GROUP</a>.
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 col-lg-2">
					<div class="family">
						<div class="dropup">
							<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
								FAMILY SITE
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="#">FAMILY SITE #1</a></li>
								<li><a href="#">FAMILY SITE #2</a></li>
								<li><a href="#">FAMILY SITE #3</a></li>
								<li><a href="#">FAMILY SITE #4</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/jquery.bxslider/jquery.bxslider.min.js"></script>
	<script>
		(function($) {
			/* 사이드 네비게이션 관련 이벤트 */
			$(document).on('mouseenter focus', '#header #nav > ul > li > a', function(e) {
				if ($(this).parent().hasClass('active')) {
					$(this).parent().removeClass('active');
				} else {
					$(this).parent().siblings('.active').removeClass('active');
					$(this).parent().addClass('active');
				}
				e.preventDefault();
			});
			$(document).on('mouseleave', '#header #nav > ul > li', function(e) {
				$(this).removeClass('active');
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
			$(document).on('click', '#nav-side .nav-body > .nav > ul > li > a', function(e) {
				if ($(this).parent().hasClass('selected')) {
					$(this).parent().removeClass('selected');
				} else {
					$(this).parent().siblings('.selected').removeClass('selected');
					$(this).parent().addClass('selected');
				}
				e.preventDefault();
			});
		})(jQuery);
	</script>
	<script>
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
				//if (fieldVideo.readyState === 4) {
					
						fieldVideo.pause();
				}
			});
			
			// 캠페인 슬라이더
			$("#campaign ul").bxSlider({
				preventDefaultSwipeY: true,
				prevText: "<img src='/assets/images/main/ico_arrow_left.png' alt='이전'>",
				nextText: "<img src='/assets/images/main/ico_arrow_right.png' alt='다음'>",
				buildPager: function(slideIndex) {
					return "<span class='sr-only'>"+slideIndex+"</span>";
				}
			});
			
			// 프로덕트 슬라이더
			$("#products ul").bxSlider({
				preventDefaultSwipeY: true,
				prevText: "<img src='/assets/images/main/ico_arrow_left.png' alt='이전'>",
				nextText: "<img src='/assets/images/main/ico_arrow_right.png' alt='다음'>",
				buildPager: function(slideIndex) {
					return "<span class='sr-only'>"+slideIndex+"</span>";
				}
			});
		})(jQuery);
	</script>
</body>
</html>