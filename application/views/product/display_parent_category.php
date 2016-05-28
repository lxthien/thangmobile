<div class="nav">
    <a href="<?php echo base_url(); ?>">Trang chủ</a>
	<?php if($this->uri->segment(2) == 'phu-kien-dien-thoai' ): ?>
    <span>Phụ kiện diện thoại</span>
	<?php else: ?>
	<span>Điện thoại</span>
	<?php endif; ?>
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
if (isset($childrenCategories)) {
    foreach ($childrenCategories as $each) {
        $eachProductList = $each->productList;
        if (count($eachProductList) > 0) {
            ?>
            <div class="allboxsp1">
                <div class="title">
                    <h1><?php echo $each->name; ?></h1>
                    <div class="title1" style="background-color:#cccccc; width:980px; height:2px; margin-bottom:20px; float:left;"></div>
                </div>
                <div class="spbanchay">
                    <div class="sreensp1" style="width:980px; float:left; margin-bottom: 0px; margin-left: 0;">
                    <?php
                        $index = 1;
                        for ($i = 0; $i < count($eachProductList); $i++) {
                    ?>
                        <div class="boxsp">
                            <div class="sp3">
                                <a href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>">
                                    <img alt="<?php echo $eachProductList[$i]->producer . ' ' . $eachProductList[$i]->model ?>" src="<?php echo image('files/logo/ads/'.$eachProductList[$i]->logo, 'product_75_100'); ?>"/>
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
                            <p class="pricespnew">Giá: <?php echo number_format($eachProductList[$i]->price, "0", ",", "."); ?> đ</p>
                            <div class="boxsale">
                                <?php if ($eachProductList[$i]->sap_ve == 1) { ?>
                                <a href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>"><span>SV</span></a><?php } ?>
                                <?php if ($eachProductList[$i]->moi_ve == 1) { ?>
                                <a class="sp-news" href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>"><span>Mới</span></a><?php } ?>
                                <?php if ($eachProductList[$i]->gia_tot == 1) { ?>
                                <a class="sp-gs" href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>"><span>Giá sốc</span></a><?php } ?>
                                <?php if ($eachProductList[$i]->qua_tang == 1) { ?>
                                <a class="sp-giff" href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>"><span>Quà tặng</span></a><?php } ?>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <!--
                    <div class="line7"></div>
                    <div class="xemtatca">
                        <a href="<?php echo base_url($linkViewAll . '/' . $each->link_rewrite); ?>">
                            <p> >> Xem tất cả</p>
                        </a>
                    </div>
                    -->
                </div>
            </div>
        <?php
        }
    }
}
?>