<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Phần mềm quản lý công việc nội bộ | Yes Mobile</title>

    <meta name="description" content="Hệ thống quản lý công việc nội bộ của Yes Mobile | Sửa chữa, mua bán smartphone từ 2010 | 438 Trương Công Định, Phường 8, TP.Vũng Tàu.">
    <meta name="author" content="Yes Mobile">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/admin/assets/img/logo2.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin'; ?>/assets/lib/bootstrap/css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin'; ?>/assets/lib/font-awesome/css/font-awesome.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin'; ?>/assets/css/main.css">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin'; ?>/assets/lib/metismenu/metisMenu.css">

    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin'; ?>/assets/lib/onoffcanvas/onoffcanvas.css">

    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin'; ?>/assets/lib/animate.css/animate.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">
	<h1 style="font-size: 22px; text-align: center; margin-bottom:20px; color:#ffffff;">Yes Mobile | Phần mềm quản lý công việc nội bộ</h1>
<div class="form-signin">
    <div class="text-center">
        <img src="<?php echo base_url().'assets/admin'; ?>/assets/img/logo2.png" alt="Yes Mobile Logo, điện thoại vũng tàu">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="http://dienthoaivungtau.com/panel/login" method="post">
                <p class="text-muted text-center">
                    Vui lòng nhập tài khoản và mật khẩu
                </p>
                <input name="action" type="hidden" value="admin" />
                <input name="identity" type="text" placeholder="Tài khoản" class="form-control top">
                <input name="password" type="password" placeholder="Mật khẩu" class="form-control bottom">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Ghi nhớ đăng nhập
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>


<!--jQuery -->
<script src="<?php echo base_url().'assets/admin'; ?>/assets/lib/jquery/jquery.js"></script>

<!--Bootstrap -->
<script src="<?php echo base_url().'assets/admin'; ?>/assets/lib/bootstrap/js/bootstrap.js"></script>


<script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            $('.list-inline li > a').click(function() {
                var activeForm = $(this).attr('href') + ' > form';
                //console.log(activeForm);
                $(activeForm).addClass('animated fadeIn');
                //set timer to 1 seconds, after that, unload the animate animation
                setTimeout(function() {
                    $(activeForm).removeClass('animated fadeIn');
                }, 1000);
            });
        });
    })(jQuery);
</script>
</body>

</html>