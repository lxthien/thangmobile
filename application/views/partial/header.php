<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
//echo $title.$site_name.$meta_title.$meta_key_words.$meta_description;
if (!isset($site_name)) {
    $site_name = 'Yes Mobile Vũng Tàu';
}

if (!isset($title)) {
    $title = $this->sconfig->get_value('SEO_TITLE'); // 'Trang chủ';
}
if(isset($approx_price)){
	$title = $approx_price;
}
if (isset($meta_title) && $meta_title !== "") {
    $title = $meta_title;
}
if (!isset($meta_keywords)) {
    $meta_keywords = $this->sconfig->get_value('SEO_KEYWORDS');//'dien thoai, samsung, xach tay';
}
if (!isset($meta_description)) {
    $meta_description = $this->sconfig->get_value('SEO_DESCRIPTION');//'Chuyên cung cấp Điện Thoại Hàn Quốc xách tay, click vào xem...';
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?> | <?php echo $site_name; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <meta http-equiv="EXPIRES" content="0">
        <meta name="RESOURCE-TYPE" content="DOCUMENT">
        <meta name="DISTRIBUTION" content="GLOBAL">
        <meta name="COPYRIGHT" content="Copyright (c) by Yes Mobile - www.yesmobile.vn">
        <meta name="KEYWORDS" content="<?php echo $meta_keywords; ?>">
        <meta name="DESCRIPTION" content="<?php echo $meta_description; ?>">
        <meta name="ROBOTS" content="INDEX, FOLLOW">
        <meta name="REVISIT-AFTER" content="1 DAYS">
        <meta name="RATING" content="GENERAL">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link type="text/css" href="<?php echo base_url().'assets/'; ?>css/style.css?v=<?php echo time(); ?>" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url().'assets/'; ?>css/style-new.css?v=<?php echo time(); ?>" rel="stylesheet" />

        <link type="text/css" href="<?php echo base_url().'assets/'; ?>css/jquery.powertip.css" rel="stylesheet" />  
        <!-- <script language="JavaScript" src="<?php echo base_url().'assets/'; ?>js/jquery-1.7.1.min.js?v=<?php echo time(); ?>"></script> -->
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script language="JavaScript" src="<?php echo base_url().'assets/'; ?>js/jquery.totemticker.min.js"></script>         
        <script language="JavaScript" src="<?php echo base_url().'assets/'; ?>js/jquery.powertip-1.1.0.min.js"></script>         
        <!-- nivo slider -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/themes/light/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/themes/dark/dark.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/themes/bar/bar.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/nivo-style.css" type="text/css" media="screen" />
        <script language="JavaScript" src="<?php echo base_url().'assets/'; ?>js/jquery.bxSlider.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url().'assets/'; ?>js/AC_RunActiveContent.js" type="text/javascript"></script>
        <!-- nivo slider -->

        <!-- Google analytic -->
		<!-- <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
           (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
           m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
           })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

           ga('create', 'UA-75747509-1', 'auto');
           ga('send', 'pageview');</script>
		</script> -->

        <!-- Api google plus -->
        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://apis.google.com/js/platform.js" async defer>
          {lang: 'vi'}
        </script>

        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,500italic,700,300' rel='stylesheet' type='text/css'>
		<!-- <script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : ((document.querySelector('h1') != null)? document.querySelector('h1').innerHTML : '') );var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async=1; ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=41e6a15d29b0336ce3b80f023db47ab7&data=eyJzc29faWQiOjEzMTU3ODAsImhhc2giOiI1MzU0N2Q4ZTU4Y2U0YmM5NGM1NTAxMWUzY2UxOWU1YyJ9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script> -->
    </head>
    <body class="green-color">
        <!-- api facebook -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4&appId=1384538691837107";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <!-- api facebook -->

        <!-- begin wrap -->
        <div class="container sreenwrap">
            <div class="wrap">
                <div class="row top-header">
                    <div class="col-md-8">
                        <div class="top-header-left">
                            <div class="top-header-left-01"><img src="<?php echo base_url().'assets/images/icon-phone.png'; ?>"><span class="top-span">Hỗ trợ sửa chữa:</span><span>0901.260.260</span></div>
                            <div class="top-header-left-01 top-header-left-02"><img src="<?php echo base_url().'assets/images/icon-mobifone.png'; ?>"><span class="top-span">Hỗ trợ mua bán:</span><span>0168.200.0080</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-header-right">
                            <ul class="menu-top">
                                <li><a href="<?php echo base_url('gioi-thieu.html'); ?>" title="Giới thiệu">Giới thiệu</a></li>
                                <li><a href="<?php echo base_url('tuyen-dung.html'); ?>" title="Tuyển dụng">Tuyển dụng</a></li>
                                <li><a href="<?php echo base_url('lien-he'); ?>" title="Liên hệ">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="logo">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url().'assets/images/logo-02.png'; ?>" alt="Điện thoại Vũng Tàu, Yes Mobile Vũng Tàu"/>
                            </a>
                        </div>
                    </div>
                </div>