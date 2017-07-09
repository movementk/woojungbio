<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/inquire.css" rel="stylesheet">
<link href="/assets/css/form.css" rel="stylesheet">
</head>
<body class="inquire inquire-write">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side-nav.php'); ?>
<main id="content">
    <div class="jumbo-wall">
        <div class="container">
            <h1>문의</h1>
        </div>
    </div>
    
    <div class="page-header">
        <h1>상담문의</h1>
    </div>
    
    <section class="section-content write">
        <div class="container">
            <div class="section-header">
                <h4 class="section-title">상담 문의 작성하기</h4>
            </div>
            <div class="section-body">
                <form action="#">
                    <div class="table-wrap">
                        <table class="table write-form">
                            <tbody>
                                <tr>
                                    <th><label for="u-name">이름</label></th>
                                    <td class="u-name">
                                        <div class="form-group">
                                            <input type="text" id="u-name" class="form-control">
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
                                    <th><label for="u-mail">이메일</label></th>
                                    <td class="u-mail">
                                        <div class="form-group">
                                            <input type="email" id="u-mail" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="u-subject">문의제목</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="u-subject" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="u-content"><label for="u-content">문의내용</label></th>
                                    <td class="u-content">
                                        <div class="form-group">
                                            <textarea id="u-content" class="form-control"></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="file">파일첨부</label></th>
                                    <td class="attach">
                                        <div class="form-group">
                                            <input type="file" id="file" class="form-control">
                                            <p class="btn-file">
                                            <a href="#" class="btn btn-gray" role="button">찾아보기</a>
                                            </p>
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