            <div class="clearfix"></div>
            <!--foter-->
            <div class="foter">
                <div class="row">
                    <div class="col-md-7">
                        <div class="add">
                            <ul class="footer-menu">
                                <li><a href="<?php echo base_url('gioi-thieu.html'); ?>">Về Chúng tôi</a></li>
                                <li><a href="<?php echo base_url('tuyen-dung.html'); ?>">Tuyển dụng</a></li>
                                <li><a href="<?php echo base_url('che-do-bao-hanh.html'); ?>">Chính sách bảo hành</a></li>
                                <li><a href="<?php echo base_url('chinh-sach-van-chuyen.html'); ?>">Mua hàng từ xa</a></li>
                                <li><a href="<?php echo base_url('lien-he'); ?>">Liên hệ</a></li>
                            </ul>
                            <ul class="category">
                                <li><a href="<?php echo base_url('dich-vu/ep-kinh-ep-man-hinh-cam-ung-dien-thoai-tai-ba-ria-vung-tau'); ?>" class="haslink ">Ép kính Vũng Tàu</a></li>
                                <li><a href="<?php echo base_url('dich-vu/sua-dien-thoai-iphone-apple-tai-ba-ria-vung-tau'); ?>" class="haslink ">Sửa iPhone Vũng Tàu</a></li>
                                <li><a href="<?php echo base_url('dich-vu/ep-kinh-ep-man-hinh-cam-ung-dien-thoai-oppo-tai-ba-ria-vung-tau'); ?>" class="haslink ">Ép kính Oppo Vũng Tàu</a></li>
                                <li><a href="<?php echo base_url('dich-vu/thay-pin-dien-thoai-iphone-tai-ba-ria-vung-tau'); ?>" class="haslink ">Thay pin iPhone Vũng Tàu</a></li>
                                <li><a href="<?php echo base_url('dich-vu/ep-kinh-ep-man-hinh-cam-ung-dien-thoai-sony-tai-ba-ria-vung-tau'); ?>" class="haslink ">Ép kính Sony Vũng Tàu</a></li>
                                <li><a href="<?php echo base_url('dich-vu/sua-main-iphone-tai-ba-ria-vung-tau'); ?>" class="haslink ">Sửa main iPhone Vũng Tàu</a></li>
                                <li><a href="<?php echo base_url('/dich-vu/ep-kinh-ep-man-hinh-cam-ung-dien-thoai-HTC-tai-ba-ria-vung-tau'); ?>" class="haslink ">Ép kính HTC Vũng Tàu</a></li>
                                <li><a href="<?php echo base_url('dich-vu/sua-loa-micro-dien-thoai-iphone-tai-ba-ria-vung-tau'); ?>" class="haslink ">Sửa loa iPhone Vũng Tàu</a></li>
                                <li><a href="<?php echo base_url('dich-vu/ep-kinh-ep-man-hinh-cam-ung-iphone-tai-ba-ria-vung-tau'); ?>" class="haslink ">Ép kính iPhone Vũng Tàu</a></li>
                                <li><a href="<?php echo base_url('dich-vu/sua-sac-dien-thoai-iphone-tai-ba-ria-vung-tau'); ?>" class="haslink ">Sửa lỗi sạc iPhone Vũng Tàu</a></li>
                                <li><a href="<?php echo base_url('dich-vu/ep-kinh-ep-man-hinh-cam-ung-xiaomi-tai-ba-ria-vung-tau'); ?>" class="haslink ">Ép kính Xiaomi Vũng Tàu</a></li>
                                <li><a href="<?php echo base_url('dich-vu/thay-man-hinh-dien-thoai-iphone-tai-ba-ria-vung-tau'); ?>" class="haslink ">Thay màn hình iPhone Vũng Tàu</a></li>
                                <li><a href="<?php echo base_url('dich-vu/ep-kinh-ep-man-hinh-cam-ung-dien-thoai-samsung-tai-ba-ria-vung-tau'); ?>" class="haslink ">Ép kính Samsung Vũng Tàu</a></li>
                                <li><a href="<?php echo base_url('dich-vu/mo-khoa-tai-khoan-icloud-ipad-tai-ba-ria-vung-tau'); ?>" class="haslink ">Mở khóa iCloud iPad Vũng Tàu</a></li>
                            </ul>
                        </div>
                    </div>  
                    <div class="col-md-5">
                        <div class="footer-right">
                            <h3>Tài khoản thanh toán</h3>
                            <div class="footer-right-01">
                                <p>Vietcombank - Chi nhánh Vũng Tàu</p>
                                <p>Số TK: 008 100 1232 991 - Chủ TK: Nguyễn Văn Thành</p>
                            </div>
                            <div class="footer-right-01">
                                <p>Vietinbank - Chi nhánh Vũng Tàu</p>
                                <p>Số TK: 107 007 066 826 - Chủ TK: Nguyễn Văn Thành</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 footer-address text-center">
                        <p>Yes Mobile | Sửa chữa, mua bán smartphone từ 2010</p>
                        <p><?php echo $this->sconfig->get_value('address');?></p>
                        <p>Cách ngã 3 Nguyễn Tri Phương - Trương Công Định 30m, đi về hướng Nguyễn An Ninh</p>
                        <p>Điện thoại: <?php echo $this->sconfig->get_value('TEL');?> - Hotline: <?php echo $this->sconfig->get_value('FAX');?></p>
                        <p>Email: <?php echo $this->sconfig->get_value('CONTACT_EMAIL');?> - Website: <?php echo base_url(); ?></p>
                    </div>
                </div>
            </div>
            <!--end foter-->
        </div>
        <!--end main-->
     </div>
    <!--end wrap-->
    
    <!-- Load Facebook SDK for JavaScript -->
    <div class="fb-customerchat"
        page_id="355967864486249"
        minimized="true"
        logged_in_greeting="Chào bạn! Bạn cần hỗ trợ gì?"
        logged_out_greeting="Chào bạn! Bạn cần hỗ trợ gì?">
    </div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId            : '912333495590130',
          autoLogAppEvents : true,
          xfbml            : true,
          version          : 'v2.11'
        });
      };
    (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    <style>
        /*
        #fb-root > div.fb_dialog.fb_dialog_advanced {
            right: 18pt !important;
            z-index: 9999999 !important;
            bottom: 250px !important;
        }
        .fb-customerchat.fb_invisible_flow.fb_iframe_widget iframe {
            right: 18pt !important;
            bottom: 350px !important;
        }
        */
    </style>

    <!--jQuery caroufredsel-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.carouFredSel-5.6.4-packed.js"></script>

    <!--jQuery Nivo Slider-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.nivo.slider.js"></script>

    <!--jQuery Mobile Detect-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/detectmobilebrowser.js"></script>

    <!-- Product detail page -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RES_PATH; ?>css/prettyPhoto.css"/>
    <script type="text/javascript" src="<?php echo RES_PATH; ?>js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo RES_PATH; ?>js/functions.js"></script>
    
    <!-- Custom JS -->
    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

    <!-- JS Bootstrap -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>