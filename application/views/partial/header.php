<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
//echo $title.$site_name.$meta_title.$meta_key_words.$meta_description;
if (!isset($site_name)) {
    $site_name = 'Thắng Mobile Vũng Tàu';
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
        <title><?php echo $title; ?> | <?php echo $site_name; ?> | ThangMobile.com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta http-equiv="EXPIRES" content="0">
        <meta name="RESOURCE-TYPE" content="DOCUMENT">
        <meta name="DISTRIBUTION" content="GLOBAL">
        <meta name="AUTHOR" content="EduSofts- www.edusofts.vn">
        <meta name="COPYRIGHT" content="Copyright (c) by Thắng Mobile - www.thangmobile.com">
        <meta name="KEYWORDS" content="<?php echo $meta_keywords; ?>">
        <meta name="DESCRIPTION" content="<?php echo $meta_description; ?>">
        <meta name="ROBOTS" content="INDEX, FOLLOW">
        <meta name="REVISIT-AFTER" content="1 DAYS">
        <meta name="RATING" content="GENERAL">

        <link type="text/css" href="<?php echo base_url().'assets/'; ?>css/style.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url().'assets/'; ?>css/style-new.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url().'assets/'; ?>css/jquery.powertip.css" rel="stylesheet" />  
        <script language="JavaScript" src="<?php echo base_url().'assets/'; ?>js/jquery-1.7.1.js"></script>
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

        <!--jQuery caroufredsel-->
        <script src="<?php echo base_url(); ?>assets/js/jquery.carouFredSel-5.6.4-packed.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('#service-bxslider').carouFredSel({
                    responsive: true,
                    width: '100%',
                    height: '100%',
                    auto: false,
                    prev: '#partner-prev',
                    next: '#partner-next',
                    scroll: 1,
                    swipe: {
                        onMouse: true,
                        onTouch: true
                    },
                    items: {
                        width: 160,
                        visible: {
                            min: 1,
                            max: 7
                        }
                    }
                });
            });
        </script>

		<script type="text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-35737754-2', 'thangmobile.com');
		  ga('send', 'pageview');
		</script>	   
    </head>
    <body class="green-color">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4&appId=1384538691837107";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="sreenwrap" style=" width:980px; margin:0px auto;">
        <!--wrap-->

        <div class="wrap" style="background-color:#FFFFFF; width:980px; float:left;">
            <div class="top-header">
                <div class="top-header-left">
                    <div class="top-header-left-01"><img src="<?php echo base_url().'assets/images/icon-phone.png'; ?>"><span class="top-span">Hỗ trợ kĩ thuật:</span><span>0126 36 13579</span></div>
                    <div class="top-header-left-01 top-header-left-02"><img src="<?php echo base_url().'assets/images/icon-mobifone.png'; ?>"><span class="top-span">Hỗ trợ mua bán:</span><span>0126 36 13579</span></div>
                </div>
                <div class="top-header-right">
                    <ul class="menu-top">
                        <li><a href="<?php echo base_url('gioi-thieu.html'); ?>" title="Giới thiệu">Giới thiệu</a></li>
                        <li><a href="<?php echo base_url('tuyen-dung.html'); ?>" title="Tuyển dụng">Tuyển dụng</a></li>
                        <li><a href="<?php echo base_url('tin-tuc'); ?>" title="Tin tức">Tin tức</a></li>
                        <li><a href="<?php echo base_url('lien-he'); ?>" title="Liên hệ">Liên hệ</a></li>
                    </ul>
                    <div class="top-social">
                        
                    </div>
                </div>
            </div>
            <!--head-->
            <div class="head" style="width:980px; height:110px; float:left;">
                <div class="logo">
                    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url().'assets/images/logo-02.png'; ?>" alt=""/></a>
                </div>
                <div class="head-search">
                    <form action="<?php echo base_url('search') ?>" method="get">
                        <div class="input-search">
                            <input name="value" type="text" placeholder="Bạn đang tìm sản phẩm gì ?" />
                        </div>
                        <button type="submit">Tìm kiếm</button>
                    </form>
                </div>
            </div>
            <!--end head-->