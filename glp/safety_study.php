<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/glp.css" rel="stylesheet">
<link href="/assets/css/form.css" rel="stylesheet">
</head>
<body class="glp safety-study">

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side-nav.php'); ?>

<main id="content">
    
    <div class="jumbo-wall">
        <div class="container">
            <h1>GLP</h1>
        </div>
    </div>
    
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
					<li role="presentation" <?php if (!isset($_GET["tab"]) || $_GET["tab"] == "1") { ?> class="active"<?php } ?>>
						<a href="#tab-1" role="tab" data-toggle="tab">GLP Safety Study</a>
					</li>
					<li role="presentation"<?php if (isset($_GET["tab"]) && $_GET["tab"] == "2") { ?> class="active"<?php } ?>>
						<a href="#tab-2" role="tab" data-toggle="tab">시험항목</a>
					</li>
					<li role="presentation"<?php if (isset($_GET["tab"]) && $_GET["tab"] == "3") { ?> class="active"<?php } ?>>
						<a href="#tab-3" role="tab" data-toggle="tab">시험문의</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
		
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane<?php if (!isset($_GET["tab"]) || $_GET["tab"] == "1") { ?> active<?php } ?>" id="tab-1">
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
                        <ul class="cert-list row">
                        	<li class="col-xs-12 col-md-4">
								<figure>
									<img class="img-responsive" src="/assets/images/glp/img_cert_1.jpg">
									<figcaption>2016-06-01</figcaption>
								</figure>
							</li>
                        	<li class="col-xs-12 col-md-4">
								<figure>
									<img class="img-responsive" src="/assets/images/glp/img_cert_2.jpg">
									<figcaption>2016-06-01</figcaption>
								</figure>
							</li>
                        	<li class="col-xs-12 col-md-4">
								<figure>
									<img class="img-responsive" src="/assets/images/glp/img_cert_3.jpg">
									<figcaption>2016-06-01</figcaption>
								</figure>
							</li>
                        </ul>
                    </div>
		        </div>
		    </section>
		    <section class="section-content glp-study">
                <div class="container">
                    <div class="section-header">
                        <h4 class="section-title">GLP Safety Study</h4>
                    </div>
                    <div class="section-body">
                        <ol class="study-list row">
                            <li class="col-xs-12 col-sm-6 col-lg-3">
                                <dl>
                                    <dt>STEP 01</dt>
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
                                    <dt>STEP 02</dt>
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
                                    <dt>STEP 03</dt>
                                    <dd>
                                        <h5>시험 준비</h5>
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
                                    <dt>STEP 04</dt>
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
                                    <dt>STEP 05</dt>
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
                                    <dt>STEP 06</dt>
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
                                    <dt>STEP 07</dt>
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
                                    <dt>STEP 08</dt>
                                    <dd>
                                        <h5>
                                            신뢰성보증부문(QAU)에 의한<br class="visible-lg">
                                            사찰, 점검
                                        </h5>
                                        <ul>
                                            <li>시설, 기기의 적정 운전상태 등 준비여부 점검</li>
                                            <li>시험물질, 대조물질 등 취급 점검</li>
                                            <li><span>시험계획서 및 SOPs에 의한 시험진행단계별 점검</span></li>
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
		
		<div role="tabpanel" class="tab-pane<?php if (isset($_GET["tab"]) && $_GET["tab"] == "2") { ?> active<?php } ?>" id="tab-2">
	    	<div class="section-content tabs">
	    		<div class="container">
	    			<ul class="row">
	    				<li class="col-xs-4 col-lg-2">
							<a href="#">
								<figure>
									<img class="img-responsive" src="/assets/images/icons/glp/a1.png">
									<figcaption>일반독성시험</figcaption>
								</figure>
							</a>
						</li>
	    				<li class="col-xs-4 col-lg-2">
							<a href="#">
								<figure>
									<img class="img-responsive" src="/assets/images/icons/glp/a2.png">
									<figcaption>유전독성시험</figcaption>
								</figure>
							</a>
						</li>
	    				<li class="col-xs-4 col-lg-2">
							<a href="#">
								<figure>
									<img class="img-responsive" src="/assets/images/icons/glp/a3.png">
									<figcaption>생식발생<br class="visible-xs">독성시험</figcaption>
								</figure>
							</a>
						</li>
	    				<li class="col-xs-4 col-lg-2">
							<a href="#">
								<figure>
									<img class="img-responsive" src="/assets/images/icons/glp/a4.png">
									<figcaption>항원성시험</figcaption>
								</figure>
							</a>
						</li>
	    				<li class="col-xs-4 col-lg-2">
							<a href="#">
								<figure>
									<img class="img-responsive" src="/assets/images/icons/glp/a5.png">
									<figcaption>수생생태<br class="visible-xs">독성시험</figcaption>
								</figure>
							</a>
						</li>
	    				<li class="col-xs-4 col-lg-2">
							<a href="#">
								<figure>
									<img class="img-responsive" src="/assets/images/icons/glp/a6.png">
									<figcaption>대체독성시험</figcaption>
								</figure>
							</a>
						</li>
	    			</ul>
				</div>
			</div>
		    <section class="section-content basic-toxicity">
                <div class="container">
                    <div class="section-header">
                        <h4 class="section-title">일반독성시험</h4>
                    </div>
                    <div class="section-body">
                        <div class="row">
                        	<div class="col-lg-6">
								<p class="details">
									일반독성시험은 개발물질에 가장 기본적인 독성시험입니다.  이를 통하여 개략적인 치사량, 무독성량, 최대내성용량 등 기본적인 독성정보를 획득하는 것을 목적으로 합니다.<br>
									일반독성시험은 투여기간에 따라 단회투여(급성) 독성 시험, 반복투여(아급성, 만성) 독성 시험이 있으며, 초기 독성을 예측하기 위한 용량결정 시험(Dose Range Finding Study)과 용량증가 시험(Dose Escalating Study), 최대 내성용량 시험(Maximun Tolerated Dose Finding Study)등을 통해 독성을 질적, 양적으로 평가합니다.
								</p>
								<ul class="com-list">
									<li>
										설치류 단회 투여 독성시험 (Single-dose toxicity test)
									</li>
									<li>
										설치류 반복 투여 독성시험 (Repeated-dose toxicity test)
									</li>
								</ul>
							</div>
                        	<div class="col-lg-5 col-lg-offset-1">
								<p class="figure"><img class="img-responsive" src="/assets/images/glp/img_mouse.jpg" alt=""></p>
							</div>
                        </div>
                    </div>
		        </div>
		    </section>
		    <section class="section-content heredity-toxicity has-space">
                <div class="container">
                    <div class="section-header">
                        <h4 class="section-title">유전독성시험</h4>
                        <p>
                        	유전독성은 시험물질이 생명체의 유전정보를 담고있는 유전자 또는 염색체에 미치는 영향을 검사하는 시험으로 시험방법에 따라 <br class="visible-lg">염색체 및 유전자의 상해성 및 수복성을 평가하여 검사합니다.
                        </p>
                    </div>
                    <div class="section-body">
						<ul class="com-list">
							<li>
								복귀돌연변이시험(Bacterial Reverse Mutation Test, Ames Test)
							</li>
							<li>
								In vitro 염색체이상시험(In vitro Chromosomal Aberration Assay)
							</li>
							<li>
								In vivo 소핵시험(In vivo Micronucleus Assay)
							</li>
							<li>
								Mouse Lymphoma Assay(MLA)
							</li>
						</ul>
                    </div>
                </div>
		    </section>
		    <section class="section-content gametogenic">
                <div class="container">
                    <div class="section-header">
                        <h4 class="section-title">생식발생독성시험</h4>
                        <p>
                        	생식발생독성시험은 생체에 적용 또는 노출되었을 경우 사람의 생식발생에 어떠한 영향을 미치는지에 관한 정보를 동물시험을 통해 얻는 것을 목적으로 합니다.<br>
							따라서, 생식발생의 생식세포의 발생, 수태, 임신, 분만 및 포육 등에 대한 영향, 태자의 발육 및 기형발생에 대한 영향, 차세대의 성장과 발달 및 생식기능에 대한 평가를 목적으로 합니다.
                        </p>
                    </div>
                    <div class="section-body">
                        <ul class="com-list">
							<li>
								수태능 및 초기배 발생시험(Seg I)(Fertility study)
							</li>
							<li>
								배·태자 발생시험(Seg II)(Embryo-fetal development study)
							</li>
							<li>
								출생전·후 발생 및 모체기능시험 (Seg III)(Pre-and postnatal study with rat) 
							</li>
							<li>
								OECD Test Guideline에 따른 생식발생스크리닝독성시험
							</li>
						</ul>
                    </div>
				</div>
			</section>
            <section class="section-content antigenicity">
				<div class="container">
                    <div class="section-header">
                        <h4 class="section-title">항원성시험</h4>
                        <p>
                        	항원성시험은 인체에 대한 시험물질의 잠재적인 시험물질이 생체의 항원으로 작용하여 나타나는 면역원성 유발여부를 검사를 목적으로 합니다.
                        </p>
                    </div>
                    <div class="section-body">
                        <ul class="com-list">
							<li>
								아나필락시스 쇼크반응시험 (Active systemic anaphylactic shock response and passive cutaneous anaphylaxis response)
							</li>
							<li>
								피부감작성 시험 (Skin sensitization test)
							</li>
							<li>
								광독성 및 광감작성 시험 (Phototoxicity and Photo-sensitization test)
							</li>
						</ul>
                    </div>
		        </div>
		    </section>
		    <section class="section-content aquatic-ecology has-space">
                <div class="container">
                    <div class="section-header">
                        <h4 class="section-title">수생생태독성시험</h4>
                        <p>
                        	생태계는 다양한 밀접한 상호관계로부터 유지 되지만, 환경파괴 및 화학물질의 오염에 의해 각종 생물의 감소 및 멸종이 진행되어 건전한 생태계를 평가하기 위해서 생물을 이용한 시험으로 각종 생물이 화학물질 및 농약 등에 노출되어지는 과정 및 감수성에 대한 평가를 목적으로 합니다.
						</p>
                    </div>
                    <div class="section-body">
						<ul class="com-list">
							<li>
								담수조류독성시험
							</li>
							<li>
								물벼룩독성시험
							</li>
							<li>
								어류독성시험
							</li>
						</ul>
                    </div>
                </div>
		    </section>
		    <section class="section-content substitute">
                <div class="container">
                   	<div class="row">
                   		<div class="col-xs-12 col-lg-6">
                   			<div class="section-header">
								<h4 class="section-title">대체독성시험</h4>
								<p>
									동물대체시험은 인류의 건강을 위하여 수행되고 있는 독성시험방법들을 동물보호 운동과 
									더불어 실험동물의 희생을 최소화 하도록 하여 시험물질의 독성을 검증하는 방법으로 실험동물을 
									사용하지 않거나(Replacement), 동물의 수를 줄이거나(Reduction), 고통을 감소하는
									(Refinement)방법으로 시험을 수행하는 것을 원칙으로 하는 평가시험입니다.
								</p>
							</div>
						</div>
                   		<div class="col-xs-12 col-lg-5 col-lg-offset-1">
                   			<div class="section-body">
								<p class="figure"><img class="img-responsive" src="/assets/images/glp/img_substitute.jpg" alt=""></p>
							</div>
						</div>
                   	</div>
		        </div>
		    </section>
		</div>
				
		<div role="tabpanel" class="tab-pane<?php if (isset($_GET["tab"]) && $_GET["tab"] == "3") { ?> active<?php } ?>" id="tab-3">
		    <section class="section-content write">
                <div class="container">
                    <div class="section-header">
                        <h4 class="section-title">견적 및 온라인 상담 문의</h4>
                    </div>
                    <div class="section-body">
                        <form action="#">
                            <div class="table-wrap">
                                <table class="table write-form">
                                    <tbody>
                                        <tr>
                                            <th class="surely"><label for="company-name">회사명</label></th>
                                            <td class="basic-form">
                                                <div class="form-group">
                                                    <input type="text" id="company-name" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="surely"><label for="u-name">성명</label></th>
                                            <td class="basic-form">
                                                <div class="form-group">
                                                    <input type="text" id="u-name" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="surely"><label for="u-department">부서</label></th>
                                            <td class="basic-form">
                                                <div class="form-group">
                                                    <input type="text" id="u-department" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="surely"><label for="u-position">직위</label></th>
                                            <td class="basic-form">
                                                <div class="form-group">
                                                    <input type="text" id="u-position" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="surely"><label for="u-addr">주소</label></th>
                                            <td class="addr">
                                                <div class="form-group">
                                                    <input type="text" id="u-addr" class="form-control">
                                                    <p class="btn-addr">
                                                        <a href="#" class="btn btn-gray" role="button">우편번호</a>
                                                    </p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="addr-2" class="sr-only"></label>
                                                    <input type="text" id="addr-2" class="form-control">
                                                    <label for="addr-3" class="sr-only"></label>
                                                    <input type="text" id="addr-3" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="surely"><label for="u-phone">전화번호</label></th>
                                            <td class="phone">
                                                <div class="form-group">
                                                    <input type="text" id="u-phone" class="form-control"> - 
                                                    <label for="u-phone-2" class="sr-only">연락처</label>
                                                    <input type="text" id="u-phone-2" class="form-control"> - 
                                                    <label for="u-phone-3" class="sr-only">연락처</label>
                                                    <input type="text" id="u-phone-3" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-fax">팩스</label></th>
                                            <td class="phone">
                                                <div class="form-group">
                                                    <input type="text" id="u-fax" class="form-control"> - 
                                                    <label for="u-fax-2" class="sr-only">팩스</label>
                                                    <input type="text" id="u-fax-2" class="form-control"> - 
                                                    <label for="u-fax-3" class="sr-only">팩스</label>
                                                    <input type="text" id="u-fax-3" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="surely"><label for="u-cp">C.P</label></th>
                                            <td class="phone">
                                                <div class="form-group">
                                                    <input type="text" id="u-cp" class="form-control"> - 
                                                    <label for="u-cp-2" class="sr-only">연락처</label>
                                                    <input type="text" id="u-cp-2" class="form-control"> - 
                                                    <label for="u-cp-3" class="sr-only">연락처</label>
                                                    <input type="text" id="u-cp-3" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="surely"><label for="u-mail">이메일</label></th>
                                            <td class="email">
                                                <div class="form-group">
                                                    <input type="email" id="u-mail" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="surely">의뢰목적</th>
                                            <td class="select-radio">
                                                <div class="form-group">
                                                    <label class="mr-zero"><input type="radio">허가자료제출용</label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="permission">허가기관 :</label>
                                                    <input type="text" id="permission" class="form-control shot-input">
                                                </div>
                                                <div class="form-group"> 
                                                    <label><input type="radio">임상시험용</label>
                                                </div>
                                                <div class="form-group"> 
                                                    <label><input type="radio">자체연구용</label>
                                                </div>
                                                <div class="form-group"> 
                                                    <label><input type="radio">논문제출용</label>
                                                </div>
                                                <div class="form-group"> 
                                                    <label class="mr-zero"><input type="radio">기타</label>
                                                    <div class="input-added">
                                                        <label for="etc-1"></label>
                                                        <input type="text" id="etc-1" class="form-control">
                                                    </div>
                                                </div>
                                                <!--
                                                <div class="form-group">
                                                    <input type="radio">
                                                    <div class="radio-input">
                                                        <input type="radio">
                                                        <label for="etc-1">기타 (</label>
                                                        <input type="text" id="etc-1" class="form-control">
                                                    </div>
                                                </div>
                                                -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="surely"><label for="u-field">개발분야</label></th>
                                            <td class="select-radio">
                                                <div class="form-group">
                                                    <div class="radio-input">
                                                    <input type="radio">
                                                    <label for="medicine">의약품 (</label>
                                                    <input type="text" id="medicine" class="form-control shot-input">
                                                    </div>
                                                </div>
                                                <label><input type="radio">화장품</label>
                                                <label><input type="radio">생활용품</label>
                                                <label><input type="radio">식품</label>
                                                <label><input type="radio">농약</label>
                                                <label><input type="radio">동물의약품</label>
                                                <label><input type="radio">화학물질</label>
                                                <label><input type="radio">첨가물질(식품/사료)</label>
                                                <div class="form-group">
                                                    <input type="radio">
                                                    <label for="etc-2">기타 (</label>
                                                    <input type="text" id="etc-2" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="surely"><label for="exam-clause">시험항목</label></th>
                                            <td class="radio-box pr-zero">
                                                <div class="form-group">
                                                    <label><input type="radio">일반독성시험</label>
                                                    <label><input type="radio">유전독성시험</label>
                                                    <label><input type="radio">생식발생독성시험</label>
                                                    <label><input type="radio">항원성시험</label>
                                                    <label><input type="radio">대체독성시험</label>
                                                    <label><input type="radio">수생생태독성시험</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="surely"><label for="u-content">기타사항</label></th>
                                            <td class="u-content">
                                                <div class="form-group">
                                                    <textarea id="u-content" class="form-control"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-red">문의하기</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
		</div>
	</div>
    	
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>

<script src="/assets/js/common.js"></script>

</body>
</html>