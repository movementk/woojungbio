<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/animal.css" rel="stylesheet">
<link href="/assets/css/form.css" rel="stylesheet">
</head>
<body class="animal request-write">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side-nav.php'); ?>
<main id="content">

    <div class="page-header">
        <h1>유전자변형 문의</h1>
    </div>
    
    <section class="section-content write">
        <div class="container">
            <div class="section-header">
                <h4 class="section-title">유전자 변형 마우스 제작 의뢰 양식</h4>
            </div>
            <div class="section-body">
                <form action="#">
                    <div class="table-wrap">
                        <table class="table write-form">
                            <tbody>
                                <tr>
                                    <th><label for="u-organization">기관(회사)명</label></th>
                                    <td class="basic-form">
                                        <div class="form-group">
                                            <input type="text" id="u-organization" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="u-department">부서</label></th>
                                    <td class="basic-form">
                                        <div class="form-group">
                                            <input type="text" id="u-department" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="u-name">성명</label></th>
                                    <td class="basic-form">
                                        <div class="form-group">
                                            <input type="text" id="u-name" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="u-addr">기관 주소</label></th>
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
                                    <th><label for="u-phone">연락처</label></th>
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
                                    <th><label for="gene-name">유전자명</label></th>
                                    <td class="gene-name">
                                        <div class="form-group">
                                            <input type="text" id="gene-name" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="transform-gene">변형 유전자</label></th>
                                    <td class="transform-gene">
                                        <div class="form-group">
                                            <input type="text" id="transform-gene" class="form-control">
                                            <p class="attention">
                                                (Frame shift or Gene deletion, nt deletion &amp; number - detail info)
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="gene-region">유전자 부위</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="gene-region" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="gene-code">Gene code</label></th>
                                    <td class="gene-code">
                                        <div class="form-group">
                                            <input type="text" id="gene-code" class="form-control">
                                            <label for="gene-code2" class="sr-only">Gene code-2</label>
                                            <input type="text" id="gene-code2" class="form-control">
                                            <label for="gene-code3" class="sr-only">Gene code-3</label>
                                            <input type="text" id="gene-code3" class="form-control">
                                            <label for="gene-code4" class="sr-only">Gene code-4</label>
                                            <input type="text" id="gene-code4" class="form-control">
                                            <label for="gene-code5" class="sr-only">Gene code-5</label>
                                            <input type="text" id="gene-code5" class="form-control">   
                                            <label for="gene-code6" class="sr-only">Gene code-6</label>
                                            <input type="text" id="gene-code6" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        유전자 <br class="visible-xs">변형방법<br>
                                        <small>
                                            (Gene Ko)<br>
                                            (Gene KI)<br>
                                            (체크)
                                        </small>
                                    </th>
                                    <td class="checkbox-list">
                                        <div class="form-group">
                                            <label><input type="checkbox">CRISPR CAS9</label>
                                            <label><input type="checkbox">ES cell injection (요청시)</label>
                                            <label><input type="checkbox">Knock-In</label>
                                            <label><input type="checkbox">General KO</label>
                                            <label><input type="checkbox">Conditional KO</label>
                                            <label><input type="checkbox">Frameshift mutation</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="species">동물 종</label></th>
                                    <td class="species">
                                        <div class="form-group">
                                            <input type="text" id="species" class="form-control">
                                            <p class="attention">
                                                (예: C57BL6, FVB mice - VAF(Virus Antibody Free) + Health report)
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="gender">성별/수량</label></th>
                                    <td class="gender">
                                        <div class="form-group">
                                            <input type="text" id="gender" class="form-control"> / 
                                            <label for="gender2" class="sr-only">수량</label>
                                            <input type="text" id="gender2" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="scope">제공 동물 범위</label></th>
                                    <td class="scope">
                                        <div class="form-group">
                                            <input type="text" id="scope" class="form-control">
                                            <p class="attention">
                                                (예: 최소 3 F0 / 4 F1 마우스 제공: 3~6개월 내 또는 6~9개월 내)
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        사육 서비스<br>
                                        <small>(포함시 체크)</small>
                                    </th>
                                    <td class="radio-box">
                                        <div class="form-group">
                                            <label><input type="radio">신청하기</label>
                                            <label><input type="radio">미신청</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        CRO서비스 및
                                        생산내용 <br><small>(선택 시)</small>
                                    </th>
                                    <td class="radio-box">
                                        <div class="form-group">
                                            <label><input type="radio">신청하기</label>
                                            <label><input type="radio">미신청</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="period">동물유지 <br>요청기간</label></th>
                                    <td class="basic-form">
                                        <div class="form-group">
                                            <input type="text" id="period" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="service">서비스 시작일<br><small>(서비스 의뢰일)</small></label>
                                    </th>
                                    <td class="basic-form">
                                        <div class="form-group">
                                            <input type="text" id="service" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="u-content">요청사항</label></th>
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
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
<script src="/assets/js/common.js"></script>
</body>
</html>