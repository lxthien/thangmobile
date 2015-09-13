<div class="nav">
    <a href="<?php echo base_url(); ?>">Trang chủ</a> - 
    <a href="<?php echo base_url($linkViewAll); ?>">Điện thoại</a> - 
    <span><?php echo $categoryName; ?></span>
</div>
<!--
<div class="cat-product-hot">
    <div class="allboxsp1">
        <div class="title">
            <h1>Sản phẩm nổi bật</h1>
            <div class="title1" style="background-color:#cccccc; width:980px; height:2px; margin-bottom:20px; float:left;"></div>
        </div>
        <div class="sp_sub_category sp_sub_category_big">
            <div class="sreensp1" style="width:980px; margin-left:0px; float:left; margin-bottom:15px;">
                <div class="boxsp">
                    <div class="sp3">
                        <a href="http://localhost/thangmobile/san-pham/dien-thoai/samsung/117-ban-samsung-galaxy-note-4-gia-tot-tai-vung-tau.html">
                            <img alt=" Samsung Galaxy Note 4 " src="http://localhost/thangmobile/files/logo/ads/samsung-note-4-vung-tau.png">
                        </a>
                    </div>
                    <div class="titlesp">
                        <a href="http://localhost/thangmobile/san-pham/dien-thoai/samsung/117-ban-samsung-galaxy-note-4-gia-tot-tai-vung-tau.html">
                            <p style="font-size: 13px;"> Samsung Galaxy Note 4 </p>
                        </a>
                    </div>
                    <div class="pricespold">13.900.000 đ</div>
                    <p class="pricespnew">12.900.000 đ</p>
                    <div class="boxsale">
                        <a class="sp-news" href="http://localhost/thangmobile/san-pham/dien-thoai/samsung/117-ban-samsung-galaxy-note-4-gia-tot-tai-vung-tau.html"><span>Mới</span></a>
                        <a class="sp-gs" href="http://localhost/thangmobile/san-pham/dien-thoai/samsung/117-ban-samsung-galaxy-note-4-gia-tot-tai-vung-tau.html"><span>Giá sốc</span></a>
                    </div>
                </div>
                <div class="boxsp">
                    <div class="sp3">
                        <a href="http://localhost/thangmobile/san-pham/dien-thoai/samsung/117-ban-samsung-galaxy-note-4-gia-tot-tai-vung-tau.html">
                            <img alt=" Samsung Galaxy Note 4 " src="http://localhost/thangmobile/files/logo/ads/samsung-note-4-vung-tau.png">
                        </a>
                    </div>
                    <div class="titlesp">
                        <a href="http://localhost/thangmobile/san-pham/dien-thoai/samsung/117-ban-samsung-galaxy-note-4-gia-tot-tai-vung-tau.html">
                            <p style="font-size: 13px;"> Samsung Galaxy Note 4 </p>
                        </a>
                    </div>
                    <div class="pricespold">13.900.000 đ</div>
                    <p class="pricespnew">12.900.000 đ</p>
                    <div class="boxsale">
                        <a class="sp-news" href="http://localhost/thangmobile/san-pham/dien-thoai/samsung/117-ban-samsung-galaxy-note-4-gia-tot-tai-vung-tau.html"><span>Mới</span></a>
                        <a class="sp-gs" href="http://localhost/thangmobile/san-pham/dien-thoai/samsung/117-ban-samsung-galaxy-note-4-gia-tot-tai-vung-tau.html"><span>Giá sốc</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<?php
if (isset($eachProductList)) {
    ?>
    <div class="allboxsp1">
        <div class="title">
            <h1><?php echo $categoryName; ?></h1>
            <div class="title1" style="background-color:#cccccc; width:980px; height:2px; margin-bottom:20px; float:left;"></div>
        </div>
        <div class="sp_sub_category">
            <div class="sreensp1" style="width:980px; margin-left:0px; float:left; margin-bottom:15px;">
            <?php
            $index = 1;
            for ($i = 0; $i < count($eachProductList); $i++) {
                ?>
                <div class="boxsp">
                    <div class="sp3">
                        <a href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>">
                            <img alt="<?php echo $eachProductList[$i]->producer . ' ' . $eachProductList[$i]->model ?>"
                                src="<?php echo base_url(PARTNER_LOGO . '/ads/' . $eachProductList[$i]->logo) ?>"/>
                        </a>
                    </div>
                    <div class="titlesp">
                        <a href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>">
                            <p style="font-size: 13px;"><?php echo $eachProductList[$i]->producer . ' ' . $eachProductList[$i]->model ?></p>
                        </a>
                    </div>
                    <?php
                    if ($eachProductList[$i]->gia_cu != 0 && $eachProductList[$i]->gia_cu != '' && $eachProductList[$i]->gia_cu != null) {
                    ?>
                        <div class="pricespold"><?php echo number_format($eachProductList[$i]->gia_cu, "0", ",", "."); ?> đ</div>
                    <?php } ?>
                    <p class="pricespnew"><?php echo number_format($eachProductList[$i]->price, "0", ",", "."); ?> đ</p>
                    <div class="boxsale">
                        <?php if ($eachProductList[$i]->sap_ve == 1) { ?>
                        <a href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>"><span>SV</span></a><?php } ?>
                        <?php if ($eachProductList[$i]->moi_ve == 1) { ?>
                        <a class="sp-news" href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>"><span>Mới</span></a><?php } ?>
                        <?php if ($eachProductList[$i]->gia_tot == 1) { ?>
                        <a class="sp-gs" href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>"><span>Giá sốc</span></a><?php } ?>
                        <?php if ($eachProductList[$i]->qua_tang == 1) { ?>
                        <a href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>"><span>Quà tặng</span></a><?php } ?>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php
}
?>

<div class="cl"></div>

<div class="usually-error">
    <div class="sreennew" style="width:980px;  margin-top:1px; float:left;">
        <div class="title-service relative" style="margin: 15px 0;">
            <hr />
            <h2>Một số lỗi thường gặp</h2>
        </div>
        <div class="boxnew" style="width:980px; float:left;">
            <?php
                for ($i = 0; $i < count($usuallyError); $i++) {
                $divClass = 'new2';
                if ($i % 2 == 0) {
                    echo '<div class="sreennew1" style="width:980px; float:left; margin-bottom:15px;">';
                    $divClass = 'new1';
                }
                $eachNews = $usuallyError[$i]; ?>
                <div class="<?php echo $divClass; ?>">
                    <div class="hinhnew">
                        <a href="<?php echo base_url('tin-tuc/kinh-nghiem-su-dung/'.$eachNews['id_news'].'-'.$eachNews['link_rewrite'].'.html'); ?>">
                            <img alt="<?php echo $eachNews['title']; ?>" src="<?php echo image($eachNews['news_icon'], 'news_93_90'); ?>"/>
                        </a>
                    </div>
                    <div class="sreentitlenew" style="float:left; margin-left:10px; width:360px; height: 90px;">
                        <div class="contentnew">
                            <a href="<?php echo base_url('tin-tuc/kinh-nghiem-su-dung/'.$eachNews['id_news'].'-'.$eachNews['link_rewrite'].'.html'); ?>">
                                <p style="float:left;"><?php echo $eachNews['title'];?></p>
                            </a>
                        </div>
                        <div class="noidung" style="margin-top:5px; float:left;">
                            <p align="justify"><?php echo $eachNews['content'];?></p>
                        </div>
                        <div class="sreenchitiet" style="float:right; width:60px; height:20px;">
                            <p class="chitiet"><a href="<?php echo $eachNews['link_rewrite']; ?>">Chi tiết</a></p>
                        </div>
                    </div>
                    <div class="line2"></div>
                </div>    <?php if ($i % 2 == 1 || $i == count($usuallyError) - 1) {
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
</div>