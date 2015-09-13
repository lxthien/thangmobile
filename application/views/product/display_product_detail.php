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
                /*if (isset($product_images)){
                    foreach ($product_images as $eachImage){
                        */?>
                        <div class="sanpham">
                            <a href="<?php /*echo base_url(UPLOAD_DIR . '/' . $eachImage->name); */?>" rel="prettyPhoto[gallery1]">
                                <img alt="<?php /*echo $site_meta_data['meta_title']; */?>" src="<?php /*echo base_url(THUMBNAILS . '/' . $eachImage->name); */?>"/>
                            </a>
                        </div>
                    <?php
                /*}
                }
                */?>
            </div>-->
            <div class="box-chung-toi-cam-ket">
                <span>Chúng tôi cam kết:</span>
                <p>Thắng Mobile cung cấp hàng mới 100% nguyên hộp chưa qua sử dụng và hàng đã qua sử dụng nhưng chất lượng và hình thức còn rất tốt:</p>
                <p>Tuyệt đối chỉ bán hàng chất lượng tốt nhất, không bán hàng dựng lại, khắc phục lỗi, đã qua sửa chữa phần cứng.</p>
                <p>Vì hàng đã qua sử dụng thường có nhiều chất lượng, với các mức giá khác nhau, Thắng Mobile không chạy đua theo giá, mà cam kết bán hàng chất lượng tốt và nâng cao dịch vụ sau bán hàng. Rất mong được Quý khách hàng lưu tâm. Cảm ơn!</p>
            </div>
        </div>
        <div class="rightthongtin">
            <h1 style="font-size:23px; font-weight: 400; color:#222222;"><?php echo $viewProduct->model; ?></h1>
            <div class="price-detail">
                <?php if ($viewProduct->gia_cu != 0 && $viewProduct->gia_cu != '' && $viewProduct->gia_cu != null) { ?>
                    <span class="product-price" style="text-decoration:line-through;"><?php echo number_format($viewProduct->gia_cu, "0", ",", "."); ?></span> <span class="icon-price-rate">vnđ</span><!-- <span class="icon-price">New</span>-->
                <?php } ?>
                <span class="product-price"><?php echo number_format($viewProduct->price, "0", ",", "."); ?></span> <span class="icon-price-rate">vnđ</span>
            </div>
            <p class="tu-van"><span>Tư vấn 24/24:</span> <span>0168 200 0800</span></p>
            <div class="thongtincoban">
                <p class="p-title">Thông tin cơ bản</p>
                <hr>
                <div class="main-thongtincoban">
                    <?php if( strlen($viewProduct->baseInformation) > 0): ?>
                        <?php echo $viewProduct->baseInformation; ?>
                    <?php else: ?>
                        <p>...</p>
                    <?php endif; ?>
                    <!--
                    <p>- Màn hình supper amolet</p>
                    <p>- CPU 8 nhân</p>
                    <p>- Ram 2GB</p>
                    <p>- Camera 16MP</p>-->
                </div>
            </div>
            <div class="thongtincanluuy">
                <p class="p-title">Thông tin cần lưu ý</p>
                <hr>
                <div class="main-thongtincanluuy">
                    <?php if( strlen($viewProduct->noteInformation) > 0): ?>
                        <?php echo $viewProduct->noteInformation; ?>
                    <?php else: ?>
                        <p>...</p>
                    <?php endif; ?>
                    <!--
                    <p><span class="first">- Bảo hành: </span><span class="last">12 Tháng</span></p>
                    <p><span class="first">- Lỗi 1 đổi 1: </span><span class="last">12 Tháng</span></p>
                    <p><span class="first">- Model: </span><span class="last">12 Tháng</span></p>
                    <p><span class="first">- Tình trạng máy: </span><span class="last">12 Tháng</span></p>-->
                </div>
            </div>
            <div class="qua-khuyen-mai">
                <div class="info-qua-khuyen-mai">
                    <?php if( strlen($viewProduct->sale_off) > 0): ?>
                        <?php echo $viewProduct->sale_off; ?>
                    <?php else: ?>
                        <p>...</p>
                    <?php endif; ?>
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
            <div class="sreenthongso" style="float:left; width:980px;">
                <div class="thongso"><a href="javascript:void(0);" onclick="showIntroduce();">
                        <p>Giới thiệu sản phẩm</p>
                    </a>
                </div>
                <p style="float:left; margin-left:8px; margin-right:5px; font-size: 16px;">|</p>
                <div class="gioithieusp">
                    <a href="javascript:void(0);" onclick="showSpecs();">
                        <p>Thông số sản phẩm</p>
                    </a>
                </div>
            </div>
            <div class="line7"></div>

            <div class="sreenttinchitiet" style="width:685px; float:left; margin-top:10px;">
                <div id="thongsokithuat" class="noidungthongso" style="display:none; width:675px; float:left; text-align: justify;">
                    <?php echo $viewProduct->description; ?>
                </div>
                <div id="gioithieusanpham" class="noidungthongso" style="width:675px; float:left; text-align: justify;">
                    <?php echo $viewProduct->introduction; ?>
                </div>
            </div>

            <div class="product-col-right">
                <div class="right">
                    <div class="sreenonline right-box">
                        <div class="toponline">
                            <h2>Có thể bạn quan tâm</h2>
                        </div>
                        <div class="line-title">
                            <div class="left-30">&nbsp;</div>
                            <div class="left-70">&nbsp;</div>
                        </div>
                        <div class="midonline">
                            <div class="product-news-right">
                                <?php
                                $i = 0;
                                foreach ($san_pham_cung_gia as $eachProduct) {
                                    $i++;
                                ?>
                                <div class="product-news-right-item">
                                    <a href="<?php echo base_url($eachProduct->link_rewrite); ?>" class="img-product-news">
                                        <img src="<?php echo image('files/logo/ads/'.$eachProduct->logo, 'product_65_86'); ?>" alt="<?php echo $eachProduct->producer . ' ' . $eachProduct->model ?>">
                                    </a>
                                    <div class="product-news-right-info">
                                        <a href="<?php echo base_url($eachProduct->link_rewrite); ?>"><?php echo $eachProduct->producer . ' ' . $eachProduct->model ?></a>
                                        <p class="product-new-right-price">Giá: <span><?php echo number_format($eachProduct->price, "0", ",", "."); ?> đ</span>
                                        </p>
                                        <p class="product-new-right-status">
                                            <?php if ($eachProduct->moi_ve == 1) { ?>
                                            <span class="pr-news">Mới</span>
                                            <?php } ?>
                                            <?php if ($eachProduct->qua_tang == 1) { ?>
                                            <span class="pr-gift">Quà tặng</span>
                                            <?php } ?>
                                            <?php if ($eachProduct->gia_tot == 1) { ?>
                                            <span class="pr-good-price">Giá sốc</span>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="sreendownload sreenonline right-box">
                        <div class="toponline">
                            <h2>Tin công nghệ</h2>
                        </div>
                        <div class="line-title">
                            <div class="left-30">&nbsp;</div>
                            <div class="left-70">&nbsp;</div>
                        </div>
                        <div class="boxdownload">
                            <div class="3">
                                <?php foreach ( $tinCongNghe as $_watch ): ?>
                                    <div class="sreencontentdownload">
                                        <div class="imges-block-you-see"><a href="<?php echo base_url('tin-tuc/thong-tin-cong-nghe/'.$_watch->id_news.'-'.$_watch->link_rewrite.'.html'); ?>" title="<?php echo $_watch->title; ?>">
                                            <img src="<?php echo image($_watch->news_icon, 'news_90_80'); ?>" alt="<?php echo $_watch->title; ?>"/></a>
                                        </div>
                                        <a class="link-block-you-see" href="<?php echo base_url('tin-tuc/thong-tin-cong-nghe/'.$_watch->id_news.'-'.$_watch->link_rewrite.'.html'); ?>" title="<?php echo $_watch->title; ?>">
                                            <p><?php echo $_watch->title; ?></p>
                                        </a>
                                        <p><?php echo date_format(new DateTime($_watch->date_add), 'd/m/Y'); ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
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