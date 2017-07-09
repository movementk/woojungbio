<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/glp.css" rel="stylesheet">
<link href="/assets/css/form.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side-nav.php'); ?>
<main id="content">
	<div class="page-header">
		<h1>Safety Study</h1>
	</div>
	<div class="exam-write">
	    <div class="container">
           <h4 class="section-title">견적 및 온라인 상담 문의</h4>
           <form action="#">
               <div class="table-wrap">
                   <table class="table write-form table-type1">
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
	       </form>
	    </div>
	</div>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
<script src="/assets/js/common.js"></script>
</body>
</html>