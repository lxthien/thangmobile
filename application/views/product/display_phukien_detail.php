<link rel="stylesheet" type="text/css" media="screen" href="<?php echo RES_PATH; ?>css/prettyPhoto.css"/>
<script type="text/javascript" src="<?php echo RES_PATH; ?>js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo RES_PATH; ?>js/functions.js"></script>
<div class="nav">
    <a href="<?php echo base_url(); ?>">Trang chủ</a>
    <a href="<?php echo base_url().'san-pham/phu-kien-dien-thoai'; ?>">Phụ kiện điện thoại</a>
    <span><?php echo $viewProduct->model; ?></span>
</div>
<div class="allboxsp1 phu-kien" style="float:left;">
    <div class="ttinsanpham">
        <div class="leftthongtin">
            <div class="boxhinhlonsp" style="height: 270px;"><img alt="<?php echo $site_meta_data['meta_title']; ?>" src="<?php echo base_url(PARTNER_LOGO . '/ads/' . $viewProduct->logo); ?>"/></div>
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
            <?php if( strlen($viewProduct->noteInformation) > 0): ?>
            <div class="thongtincanluuy">
                <p class="p-title">Thông tin cần lưu ý</p>
                <hr>
                <div class="main-thongtincanluuy">
                    <?php if( strlen($viewProduct->noteInformation) > 0): ?>
                        <?php echo $viewProduct->noteInformation; ?>
                    <?php else: ?>
                        <p>...</p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( strlen($viewProduct->baseInformation) > 0): ?>
            <div class="thongtincoban">
                <p class="p-title">Thông tin cơ bản</p>
                <hr>
                <div class="main-thongtincoban">
                    <?php if( strlen($viewProduct->baseInformation) > 0): ?>
                        <?php echo $viewProduct->baseInformation; ?>
                    <?php else: ?>
                        <p>...</p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            <p style="float: left; padding: 8px 0; font-size: 15px; font-weight: 600; color: #262626;">Nếu bạn muốn mua hàng từ xa, vui lòng xem <a href="http://dienthoaivungtau.com/chinh-sach-van-chuyen.html" style="color: #ed0000;">tại đây</a></p>
            <div class="share-product" style="float: left; width: 100%; margin-bottom: 8px;">
                <div class="social">
                    <!-- Button like facebook -->
                    <div class="fb-like" data-href="<?php echo $urlSocial; ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                    <!-- Button like facebook -->
                    <!-- Place this tag where you want the +1 button to render. -->
                    <div class="g-plusone" data-size="medium" data-href="<?php echo $urlSocial; ?>"></div>
                    <!-- Place this tag where you want the +1 button to render. -->
                    <!-- Button share facebook -->
                    <div class="fb-share-button" data-href="<?php echo $urlSocial; ?>" data-layout="button"></div>
                    <!-- Button share facebook -->
                    <!-- Place this tag where you want the share button to render. -->
                    <div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?php echo $urlSocial; ?>"></div>
                </div>
            </div>
        </div>
        <div class="main-product-detail" style="margin-top: 0;">
            <div class="sreenthongso" style="float:left; width:675px; margin-top: 19px;">
                <div class="title">
                    <h1>Sản phẩm khác</h1>
                    <div class="title1" style="background-color:#cccccc; width:675px; height:2px; margin-bottom:20px; float:left;"></div>
                </div>
                <ul class="accessories">
                    <?php
                        $index = 1;
                        for ($i = 0; $i < count($eachProductList); $i++):
                            if($eachProductList[$i]->id != $viewProduct->id):
                    ?>
                    <li>
                        <a class="img" href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>" title="<?php echo $eachProductList[$i]->producer . ' ' . $eachProductList[$i]->model ?>">
                            <img src="<?php echo image('files/logo/ads/'.$eachProductList[$i]->logo, 'product_90_120'); ?>" alt="<?php echo $eachProductList[$i]->producer . ' ' . $eachProductList[$i]->model ?>">
                        </a>
                        <a class="name" href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>" title="<?php echo $eachProductList[$i]->producer . ' ' . $eachProductList[$i]->model ?>">
                            <?php echo $eachProductList[$i]->producer . ' ' . $eachProductList[$i]->model ?>
                        </a>
                        <p>Giá: <span><?php echo number_format($eachProductList[$i]->price, "0", ",", "."); ?> đ</span></p>
                    </li>
                    <?php endif; endfor; ?>
                </ul>
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
                                            <img src="<?php echo image($_watch->news_icon, 'news_125_80'); ?>" alt="<?php echo $_watch->title; ?>"/></a>
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