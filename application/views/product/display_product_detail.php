<link rel="stylesheet" type="text/css" media="screen" href="<?php echo RES_PATH; ?>css/prettyPhoto.css"/>
<script type="text/javascript" src="<?php echo RES_PATH; ?>js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo RES_PATH; ?>js/functions.js"></script>
<div class="nav">
    <a href="<?php echo base_url(); ?>">Trang chủ</a> - 
    <a href="<?php echo base_url().'san-pham/dien-thoai'; ?>">Điện thoại</a> - 
    <span><?php echo $viewProduct->model; ?></span>
</div>
<div class="allboxsp1" style="float:left;">
    <div class="ttinsanpham">
        <div class="leftthongtin">
            <div class="boxhinhlonsp"><img alt="<?php echo $site_meta_data['meta_title']; ?>" src="<?php echo base_url(PARTNER_LOGO . '/ads/' . $viewProduct->logo); ?>"/></div>
            <!--<div class="sreenhinhanhsanpham">
                <?php
/*                if (isset($product_images)){
                    foreach ($product_images as $eachImage){
                        */?>
                        <div class="sanpham">
                            <a href="<?php /*echo base_url(UPLOAD_DIR . '/' . $eachImage->name); */?>" rel="prettyPhoto[gallery1]">
                                <img alt="<?php /*echo $site_meta_data['meta_title']; */?>" src="<?php /*echo base_url(THUMBNAILS . '/' . $eachImage->name); */?>"/>
                            </a>
                        </div>
                    <?php
/*                    }
                }
                */?>
            </div>-->
            <div class="box-chung-toi-cam-ket">
                <span>Chúng tôi cam kết</span>
                <p>Đảm bảo chính hãng 100%</p>
                <p>Đổi trả hàng trong 30 ngày</p>
                <p>Nhận sản phẩm tại cửa hàng</p>
            </div>
        </div>
        <div class="rightthongtin">
            <h1 style="font-size:23px; font-weight: 400; color:#222222;"><?php echo $viewProduct->model; ?></h1>
            <div class="price-detail">
                <?php if ($viewProduct->gia_cu != 0 && $viewProduct->gia_cu != '' && $viewProduct->gia_cu != null) { ?>
                    <span style='text-decoration:line-through;'><?php echo number_format($viewProduct->gia_cu, "0", ",", "."); ?> vnđ</span>
                <?php } ?>
                <span ><?php echo number_format($viewProduct->price, "0", ",", "."); ?> vnđ</span>
            </div>
            <p class="tu-van"><span>Tư vấn 24/24:</span> <span>0168 200 0800</span></p>
            <div class="thongtincoban">
                <p class="p-title">Thông tin cơ bản</p>
                <hr>
                <div class="main-thongtincoban">
                    <p>- Màn hình supper amolet</p>
                    <p>- CPU 8 nhân</p>
                    <p>- Ram 2GB</p>
                    <p>- Camera 16MP</p>
                </div>
            </div>
            <div class="thongtincanluuy">
                <p class="p-title">Thông tin cần lưu ý</p>
                <hr>
                <div class="main-thongtincanluuy">
                    <p><span class="first">- Bảo hành: </span><span class="last">12 Tháng</span></p>
                    <p><span class="first">- Lỗi 1 đổi 1: </span><span class="last">12 Tháng</span></p>
                    <p><span class="first">- Model: </span><span class="last">12 Tháng</span></p>
                    <p><span class="first">- Tình trạng máy: </span><span class="last">12 Tháng</span></p>
                </div>
            </div>
            <div class="qua-khuyen-mai">
                <div class="info-qua-khuyen-mai">
                    <p>- Tặng sim 3G</p>
                    <p>- Tặng sim 3G</p>
                </div>
            </div>
            <p style="float: left; padding: 8px 0; font-size: 15px; font-weight: 600; color: #262626;">Nếu bạn muốn mua hàng từ xa, vui lòng xem <a href="#" style="color: #ed0000;">tại đây</a></p>
            <!--
            <p style="font-size:14px; color:#202121; margin-top:10px;"><b>T&igrave;nh tr&#7841;ng:</b> <span
                    class="chitietsanphamblue"><?php echo $viewProduct->status; ?> </span></p>
            <?php if ($viewProduct->accesory != '' && $viewProduct->accesory != null) { ?>
                <p style="font-size:14px; color:#202121; margin-top:10px;"><b>Ph&#7909; ki&#7879;n:</b> <span
                        class="chitietsanphamblue"><?php echo $viewProduct->accesory; ?>  </span></p>
            <?php } ?>
            <p style="font-size:14px; color:#202121; margin-top:10px;"><b>Th&#7901;i gian b&#7843;o h&agrave;nh:</b>
                <span class="chitietsanphamblue"><?php echo $viewProduct->time_warranty; ?></span></p>
            <?php if ($viewProduct->accesory != '' && $viewProduct->accesory != null && strlen($viewProduct->sale_off) > 0) { ?>
                <p style="font-size:14px; color:#202121; margin-top:10px;">
                    <b style="margin-bottom: -5px; display: block;">Khuyến mãi:</b>
                    <span class="chitietsanphamblue"><?php echo '</br>' . nl2br($viewProduct->sale_off); ?></span>
                </p>
            <?php } ?>
            -->
        </div>
        <div class="main-product-detail">
            <div class="sreenthongso" style="float:left; width:500px;">
                <div class="thongso"><a href="javascript:void(0);" onclick="showIntroduce();">
                        <p>Giới thiệu sản phẩm</p>
                    </a>
                </div>
                <p style="float:left; margin-left:5px; margin-right:5px;">|</p>
                <div class="gioithieusp">
                    <a href="javascript:void(0);" onclick="showSpecs();">
                        <p>Thông số sản phẩm</p>
                    </a>
                </div>
            </div>
            <div class="line7"></div>

            <div class="sreenttinchitiet" style="width:685px; float:left; margin-top:10px;">
                <div id="thongsokithuat" class="noidungthongso" style="display:none; width:680px; float:left; text-align: justify;">
                    <p><?php echo $viewProduct->description; ?></p>
                </div>
                <div id="gioithieusanpham" class="noidungthongso" style="width:680px; float:left; text-align: justify;">
                    <p><?php echo $viewProduct->introduction; ?></p>
                </div>
            </div>

            <div class="product-col-right">
                <div class="box-product-col-right">
                    <div class="box-product-col-right-title">
                        <h5>Có thể bạn quan tâm</h5>
                        <hr>
                    </div>
                </div>
                <div class="box-product-col-right">
                    <div class="box-product-col-right-title">
                        <h5>Tin công nghệ</h5>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <div class="line7"></div>
        <div class="xemtatca">
            <a href="<?php echo base_url($linkViewAll); ?>">
                <p style="width:100px; height:25px;margin-left:550px; margin-top:5px;">>> Trở lại </p>
            </a>
        </div>
    </div>
</div>
<script>
    function showIntroduce() {
        document.getElementById("gioithieusanpham").style.display = "block";
        document.getElementById("thongsokithuat").style.display = "none";
    }
    function showSpecs() {
        document.getElementById("gioithieusanpham").style.display = "none";
        document.getElementById("thongsokithuat").style.display = "block";
    }
</script>
<!--<script type="text/javascript">
    
    $(document).ready(function(){
        $('.sanpham').each(function(){
            var url_images = $(this).find('img').attr('src');
            if( urlExists( url_images ) != 200 ){
                $(this).remove();
            }
        });
    });

    function urlExists(url){
        var http = jQuery.ajax({
            type:"HEAD",
            url: url,
            async: false
          })
      return http.status;
    }
    
</script>-->