<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>우정바이오사업부</title>
	<link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/default.css" rel="stylesheet">
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="topnav" class="visible-lg">
		<div class="container">
			<div class="row"></div>
		</div>
	</div>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-xs-8">
					<h1 class="logo">
						<a href="#">
							<img class="visible-xs" src="/assets/images/logo_xs.png" alt="우정바이오사업본부">
							<img class="visible-sm" src="/assets/images/logo_sm.png" alt="우정바이오사업본부">
							<img class="visible-md visible-lg" src="/assets/images/logo.png" alt="우정바이오사업본부">
						</a>
					</h1>
				</div>
				<div class="col-xs-4">
					<nav>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div id="fields">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<div class="field-item field-item-1" tabindex="0">
						<div class="field-back">
							<video id="field-video-1" loop muted>
								<source src="/assets/images/video_1.mp4" type="video/mp4">
							  	Your browser does not support the video tag.
							</video>
						</div>
						<div class="field-content">
							<div class="field-body">
								<h4>ANIMAL CENTER</h4>
								<hr>
								<p>(주)우정 바이오사업부의 Products를 <br>소개해드립니다.</p>
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
				<div class="col-xs-6 col-sm-3">
					<div class="field-item field-item-2 active" tabindex="0">
						<div class="field-back">
							<video id="field-video-2" loop muted>
								<source src="/assets/images/video_2.mp4" type="video/mp4">
							  	Your browser does not support the video tag.
							</video>
						</div>
						<div class="field-content">
							<div class="field-body">
								<h4>R&amp;D</h4>
								<hr>
								<p>(주)우정 바이오사업부의 Products를 <br>소개해드립니다.</p>
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
				<div class="col-xs-6 col-sm-3">
					<div class="field-item field-item-3" tabindex="0">
						<div class="field-back">
							<video id="field-video-3" loop muted>
								<source src="/assets/images/video_3.mp4" type="video/mp4">
							  	Your browser does not support the video tag.
							</video>
						</div>
						<div class="field-content">
							<div class="field-body">
								<h4>PRODUCTS</h4>
								<hr>
								<p>(주)우정 바이오사업부의 Products를 <br>소개해드립니다.</p>
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
				<div class="col-xs-6 col-sm-3">
					<div class="field-item field-item-4" tabindex="0">
						<div class="field-back">
							<video id="field-video-4" loop muted>
								<source src="/assets/images/video_4.mp4" type="video/mp4">
							  	Your browser does not support the video tag.
							</video>
						</div>
						<div class="field-content">
							<div class="field-body">
								<h4>CRO</h4>
								<hr>
								<p>(주)우정 바이오사업부의 Products를 <br>소개해드립니다.</p>
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
			</div>
		</div>
	</div>
	<main id="content">
		<div class="container">
			<p><img src="/assets/images/img_content.jpg" alt=""></p>
		</div>
	</main>
	<footer id="footer">
		<div class="container">
			<p><img src="/assets/images/img_footer.jpg" alt=""></p>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<script>
		(function($) {
			$(document).on("mouseenter focusin", "#fields .field-item", function() {
				var fieldVideo = document.getElementById("field-video-"+($(this).parent().index()+1));
				if (fieldVideo) {
					fieldVideo.play();
				}
			});
			$(document).on("mouseleave focusout", "#fields .field-item", function() {
				var fieldVideo = document.getElementById("field-video-"+($(this).parent().index()+1));
				if (fieldVideo) {
					fieldVideo.pause();
				}
			});
		})(jQuery);
	</script>
</body>
</html>