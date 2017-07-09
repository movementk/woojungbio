<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/glp.css" rel="stylesheet">
</head>
<body class="glp safety-study">

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side-nav.php'); ?>

<main id="content">
    
    <div class="page-header">
		<div class="container">
			<h1>Safety Study</h1>
		</div>
	</div>
	
    <div class="tabs">
		<div class="container">
			<div class="dropdown">
				<button type="button" class="btn btn-block" data-toggle="dropdown">
					<span class="text">GLP Safety Study</span>
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="tablist">
					<li role="presentation" class="active">
						<a href="#tab-1" role="tab" data-toggle="tab">GLP Safety Study</a>
					</li>
					<li role="presentation">
						<a href="#tab-2" role="tab" data-toggle="tab">시험항목</a>
					</li>
					<li role="presentation">
						<a href="#tab-3" role="tab" data-toggle="tab">시험문의</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
		
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="tab-1">
            <div class="page-summary">
                <div class="container">
                    <h2>GLP(Good Laboratory Practice)란?</h2>
                    <hr>
                    <p>
                        시험기관에서 수행하는 시험과정 및 결과의 신뢰성 확보를 위하여 시험의 계획, 실행, 점검, 기록 보고되는 체계적인 과정 및<br>
                        이와 관련된 전반적 내용을 규정하는 것으로 우수실험실 운영규정을 말합니다.  
                    </p>
                </div>
            </div>
		    <section class="section-content authentication-glp has-space">
                <div class="container">
                    <div class="section-header">
                        <h4 class="section-title">GLP 인증현황</h4>
                    </div>
                    <div class="section-body">
                        
                    </div>
		        </div>
		    </section>
		    <section class="section-content glp-study-list">
                <div class="container">
                    <div class="section-header">
                        <h4 class="section-title">GLP 인증현황</h4>
                    </div>
                    <div class="section-body">
                        <ol class="row">
                            <li class="col-xs-12 col-sm-6 col-lg-3">
                                <dl>
                                    <dt>SETP 01</dt>
                                    <dd>
                                        <h5>시험 상담 및 의회</h5>
                                        <ul>
                                            <li>시험방법 및 일정협의</li>
                                            <li>시험의뢰 및 비밀유지계약</li>
                                            <li>시험물질 및 시험물질성적서 수령</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-lg-3">
                                <dl>
                                    <dt>SETP 02</dt>
                                    <dd>
                                        <h5>시험 개시</h5>
                                        <ul>
                                            <li>시험책임자 및 신뢰성보증책임자의 지정</li>
                                            <li>시험계획서(안)작성 및 시험의뢰자 검토</li>
                                            <li>시험계획서 승인</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-lg-3">
                                <dl>
                                    <dt>시험 준비</dt>
                                    <dd>
                                        <h5>시험 상담 및 의회</h5>
                                        <ul>
                                            <li>시험자에게 시험진행 회의 실시</li>
                                            <li>관련 SOPs 숙지, 시험물질 및 대조물질 수령</li>
                                            <li>시험계, 사료, 장비, 사육실 소독 등 준비</li>
                                            <li>시험계의 입수, 검수, 검역 및 순화 실시</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-lg-3">
                                <dl>
                                    <dt>SETP 04</dt>
                                    <dd>
                                        <h5>시험 실시</h5>
                                        <ul>
                                            <li>시험물질, 대조물질의 조제 및 투여</li>
                                            <li>군분리, 증상관찰, 해부, 혈액 등 검체 채취,각종 검사/측정</li>
                                            <li>시험결과 확인</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-lg-3">
                                <dl>
                                    <dt>SETP 05</dt>
                                    <dd>
                                        <h5>시험결과 처리</h5>
                                        <ul>
                                            <li>시험기초자료 정리</li>
                                            <li>시험결과 평가</li>
                                            <li>통계 분석</li>
                                            <li>최종보고서(안) 작성</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-lg-3">
                                <dl>
                                    <dt>SETP 06</dt>
                                    <dd>
                                        <h5>시험 종료</h5>
                                        <ul>
                                            <li>최종보고서(안) 검토 및 승인</li>
                                            <li>최종보고서 시험의뢰자에게 발송</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-lg-3">
                                <dl>
                                    <dt>SETP 07</dt>
                                    <dd>
                                        <h5>자료 보관</h5>
                                        <ul>
                                            <li>시험계획서 및 최종보고서 보관</li>
                                            <li>시험기초자료 보관</li>
                                            <li>시험물질 및 검체 보관</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-lg-3">
                                <dl>
                                    <dt>SETP 08</dt>
                                    <dd>
                                        <h5>
                                            신뢰성보증부문(QAU)에 의한<br>
                                            사찰, 점검
                                        </h5>
                                        <ul>
                                            <li>시설, 기기의 적정 운전상태 등 준비여부 점검</li>
                                            <li>시험물질, 대조물질 등 취급 점검</li>
                                            <li>시험계획서 및 SOPs에 의한 시험진행단계별 점검</li>
                                            <li>시험기초자료 및 최종보고서(안) 점검</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                        </ol>
                    </div>
		        </div>
		    </section>
		</div>
		
		<div role="tabpanel" class="tab-pane" id="tab-2">
		    <section class="section-content basic-toxicity">
                <div class="container">
                    <div class="section-header">
                        <h4 class="section-title">일반독성시험</h4>
                    </div>
                    <div class="section-body">
                        
                    </div>
		        </div>
		    </section>
		    <section class="section-content heredity-toxicity has-space">
                <div class="container">
                    <div class="section-header">
                        <h4 class="section-title">일반독성시험</h4>
                    </div>
                    <div class="section-body">

                    </div>
                </div>
		    </section>
		    <section class="section-content gametogenic">
                <div class="container">
                    <div class="section-header">
                        <h4 class="section-title">생식발생독성시험</h4>
                    </div>
                    <div class="section-body">
                        
                    </div>
                    <div class="section-header">
                        <h4 class="section-title">항원성시험</h4>
                    </div>
                    <div class="section-body">
                        
                    </div>
		        </div>
		    </section>
		    <section class="section-content aquatic-ecology has-space">
                <div class="container">
                    <div class="section-header">
                        <h4 class="section-title">수생생태독성시험</h4>
                    </div>
                    <div class="section-body">

                    </div>
                </div>
		    </section>
		    <section class="section-content substitute">
                <div class="container">
                    <div class="section-header">
                        <h4 class="section-title">대체독성시험</h4>
                    </div>
                    <div class="section-body">
                        
                    </div>
		        </div>
		    </section>
		</div>
				
		<div role="tabpanel" class="tab-pane" id="tab-3">
		    tab-3
		</div>
	</div>
    	
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>

<script src="/assets/js/common.js"></script>

</body>
</html>