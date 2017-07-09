<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/main.css" rel="stylesheet">
</head>
<body>

<div id="intro">
	<video class="intro-video" loop muted autoplay>
		<source src="/assets/images/main/video_jumbo.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>
	<div class="intro-back"></div>
	<div class="intro-content">
		<div>
			<h1><img src="/assets/images/logo_white.png" alt="바이오사업본부"></h1>
			<p>
				우정비에스씨는<br>
				최첨단 동물실을 기반으로<br>
				<b>4차 산업 중심의 정밀의학 분야를<br>
				선도하는 기업입니다.<br></b>
			</p>
			<i class="ico-mouse">
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
								<source src="/assets/images/main/video_1.mp4" type="video/mp4">
								<img src="/assets/images/main/bg_field_1.jpg">
							</video>
						</div>
						<div class="field-content">
							<div class="field-body">
								<h4><a href="#">ANIMAL CENTER</a></h4>
								<hr>
								<ul>
									<li><a href="#">실험동물생산</a></li>
									<li><a href="#">질환모델 제작<br>(KO제작, 관리)</a></li>
									<li><a href="#">질환모델 유지관리</a></li>
									<li><a href="#">유전자변형 문의</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3">
					<div class="field-item field-item-2 active" tabindex="0">
						<div class="field-back">
							<video loop muted>
								<source src="/assets/images/main/video_2.mp4" type="video/mp4">
								<img src="/assets/images/main/bg_field_2.jpg">
							</video>
						</div>
						<div class="field-content">
							<div class="field-body">
								<h4><a href="#">GLP</a></h4>
								<hr>
								<ul>
									<li><a href="#">일반독성</a></li>
									<li><a href="#">유전독성</a></li>
									<li><a href="#">생식발생독성</a></li>
									<li><a href="#">항원성</a></li>
									<li><a href="#">수생생태독성</a></li>
									<li><a href="#">대체독성</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3">
					<div class="field-item field-item-3" tabindex="0">
						<div class="field-back">
							<video loop muted>
								<source src="/assets/images/main/video_3.mp4" type="video/mp4">
								<img src="/assets/images/main/bg_field_3.jpg">
							</video>
						</div>
						<div class="field-content">
							<div class="field-body">
								<h4><a href="#">PRODUCTS</a></h4>
								<hr>
								<ul>
									<li><a href="#">Lentivirus / 형광세포주</a></li>
									<li><a href="#">Antibody Production</a></li>
									<li><a href="#">면역부전 모델 (NPG)</a></li>
									<li><a href="#">인간화 간 모델 (URG)</a></li>
									<li><a href="#">바이러스, 백신 연구용 동물 <br>(AG129 / A129)</a></li>
									<li><a href="#">엘레가드 괴팅겐 미니피그</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3">
					<div class="field-item field-item-4" tabindex="0">
						<div class="field-back">
							<video loop muted>
								<source src="/assets/images/main/video_4.mp4" type="video/mp4">
								<img src="/assets/images/main/bg_field_4.jpg">
							</video>
						</div>
						<div class="field-content">
							<div class="field-body">
								<h4><a href="#">CRO</a></h4>
								<hr>
								<ul>
									<li><a href="#">효능평가 서비스 <br>(대사질환 / 면역종양)</a></li>
									<li><a href="#">SNBL</a></li>
									<li><a href="#">Senzagen</a></li>
									<li><a href="#">Zebrafish Screening</a></li>
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
<script src="/assets/jquery.mousewheel.min.js"></script>
<script src="/assets/js/common.js"></script>
<script src="/assets/js/main.js"></script>

</body>
</html>