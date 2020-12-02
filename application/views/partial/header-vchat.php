<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
//echo $title.$site_name.$meta_title.$meta_key_words.$meta_description;
if (!isset($site_name)) {
    $site_name = 'Yes Mobile';
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
    $meta_keywords = $this->sconfig->get_value('SEO_KEYWORDS');;
}
if (!isset($meta_description)) {
    $meta_description = $this->sconfig->get_value('SEO_DESCRIPTION');;
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
		<meta name="theme-color" content="#00080">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Custom CSS -->
        <link type="text/css" href="<?php echo base_url().'assets/'; ?>css/style.css?v=<?php echo time(); ?>" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url().'assets/'; ?>css/style-new.css?v=<?php echo time(); ?>" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url().'assets/'; ?>css/jquery.powertip.css" rel="stylesheet" />  
        <!-- <script language="JavaScript" src="<?php echo base_url().'assets/'; ?>js/jquery-1.7.1.min.js?v=<?php echo time(); ?>"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-75747509-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-75747509-2');
        </script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://apis.google.com/js/platform.js" async defer>
          {lang: 'vi'}
        </script>

        <!-- Import font Roboto -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,500italic,700,300' rel='stylesheet' type='text/css'>

        <!-- Script chat -->
        <script lang="javascript">var _vc_data = {id : 1315780, secret : '53547d8e58ce4bc94c55011e3ce19e5c'};(function() {var ga = document.createElement('script');ga.type = 'text/javascript';ga.async=true; ga.defer=true;ga.src = '//live.vnpgroup.net/client/tracking.js?id=1315780';var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>
    </head>
    <body class="green-color">
        <!-- begin wrap -->
        <div class="container sreenwrap">
            <div class="wrap">
                <div class="row top-header">
                    <div class="col-md-8">
                        <div class="top-header-left">
                            <div class="top-header-left-01"><img src="<?php echo base_url().'assets/images/icon-phone.png'; ?>"><span class="top-span">Sửa chữa:</span><span>0847 72 72 72</span></div>
                            <div class="top-header-left-01 top-header-left-03"><img src="<?php echo base_url().'assets/images/icon-mobifone.png'; ?>"><span class="top-span">Bảo hành:</span><span>0382 000 080</span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-header-right">
                            <ul class="menu-top">
                                <li><a href="<?php echo base_url('gioi-thieu.html'); ?>" title="Giới thiệu">Giới thiệu</a></li>
                                <li><a href="<?php echo base_url('che-do-bao-hanh.html'); ?>" title="Tuyển dụng">Bảo hành</a></li>
                                <li><a href="<?php echo base_url('tuyen-dung.html'); ?>" title="Liên hệ">Tuyển dụng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="logo d-none d-sm-block">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url().'assets/images/logo.png'; ?>" alt="Yes Mobile"/>
                            </a>
                        </div>
                    </div>
                </div>