<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/main.css" rel="stylesheet">
</body>
<div id="intro">
	<div class="intro-back">
		<video loop muted autoplay>
			<source src="/assets/images/video_intro.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</div>
	<div class="intro-content">
		<div>
			<h1><img src="/assets/images/logo.png" alt="바이오사업본부"></h1>
			<p>
				우정비에스씨는<br>
				최첨단 동물실을 기반으로<br>
				<b>4차 산업의 중심의 정밀의학 분야를<br>
				선도하는 기업입니다.<br></b>
			</p>
			<i class="mousewheel">
				SCROLL TO<br>MOUSE WHEEL
			</i>
		</div>
	</div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side-nav.php'); ?>

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
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>

<script src="/assets/jquery.bxslider/jquery.bxslider.min.js"></script>
<script src="/assets/js/common.js"></script>
<script src="/assets/js/main.js"></script>
<script>
	(function($) {
		$(window).on("scroll", function() {
			console.log( $("#intro").height() );
			console.log($(this).scrollTop());
			if ( $("#intro").height() < $(this).scrollTop() ) {
				$("body").addClass("scrolled");
			} else {
				$("body").removeClass("scrolled");
			}
		});
	})(jQuery);
</script>

</body>
</html>