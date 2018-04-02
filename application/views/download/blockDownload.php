<!--box ban nen xem -->
<?php if ($this->menu_active == 'news' || $this->menu_active == 'guides') : ?>
    <div class="sreendownload sreenonline right-box">
        <div class="toponline">
            <h2>Dịch vụ sửa chữa nổi bật</h2>
        </div>
        <div class="line-title">
            <div class="left-30">&nbsp;</div>
            <div class="left-70">&nbsp;</div>
        </div>
        <div class="boxdownload">
            <div class="3">
                <?php foreach ( $servicesHot as $row ): ?>
                    <div class="sreencontentdownload">
                        <div class="imges-block-you-see"><a href="<?php echo base_url($row->id_news.'-'.$row->link_rewrite.URL_TRAIL); ?>" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->news_icon, 'news_125_80'); ?>" alt="<?php echo $row->title; ?>"/></a>
                        </div>
                        <a class="link-block-you-see" href="<?php echo base_url($row->id_news.'-'.$row->link_rewrite.URL_TRAIL); ?>" title="<?php echo $row->title; ?>">
                            <p><?php echo $row->title; ?></p>
                        </a>
                        <p style="display: none;"><?php echo date_format(new DateTime($row->date_add), 'd/m/Y'); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php
endif;
?>

<!--box ban nen xem -->
<?php if (isset($this->useFull)) : ?>
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
                        <div class="imges-block-you-see"><a href="<?php echo base_url($_watch['link_rewrite']); ?>" title="<?php echo $_watch['title']; ?>">
                            <img src="<?php echo image($_watch['news_icon'], 'news_125_80'); ?>" alt="<?php echo $_watch['title']; ?>"/></a>
                        </div>
                        <a class="link-block-you-see" href="<?php echo base_url($_watch['link_rewrite']); ?>" title="<?php echo $_watch['title']; ?>">
                            <p><?php echo $_watch['title']; ?></p>
                        </a>
                        <p><?php echo date_format(new DateTime($_watch['date_add']), 'd/m/Y'); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php
endif;
?>
<?php if ($this->uri->segment(1) == 'dich-vu' || $this->uri->segment(1) == 'dich-vu-sua-chua-dien-thoai.html') : ?>
<div class="sreenonline right-box">
    <div class="toponline">
        <h2>Dịch vụ sửa chữa</h2>
    </div>
    <div class="line-title">
        <div class="left-30">&nbsp;</div>
        <div class="left-70">&nbsp;</div>
    </div>
    <div class="midonline lists-service-right">
        <ul>
            <?php foreach ($menuCategoryService as $service): ?>
			<?php if(!empty($levelServices)): ?>
            <li><a class="<?php if($catServices->link_rewrite == $service['link_rewrite'] || $categoryServicesParent == $service['link_rewrite']) {echo 'menu_active';} ?>" href="<?php echo base_url('dich-vu/' . $service['link_rewrite']); ?>"><?php echo $service['name']; ?></a></li>
            <?php else: ?>
			<li><a class="aaa" href="<?php echo base_url('dich-vu/' . $service['link_rewrite']); ?>"><?php echo $service['name']; ?></a></li>
			<?php endif; ?>
			<?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>

<div class="sreendownload sreenonline right-box">
    <div class="toponline">
        <h2>Facebook</h2>
    </div>
    <div class="line-title">
        <div class="left-30">&nbsp;</div>
        <div class="left-70">&nbsp;</div>
    </div>
    <div class="boxdownload">
        <div class="3">
            <div class="fb-page" data-href="https://www.facebook.com/YesMobile.VietNam" data-adapt-container-width="true" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/YesMobile.VietNam"><a href="https://www.facebook.com/YesMobile.VietNam">dienthoaivungtau.com</a></blockquote></div></div>
        </div>
    </div>
</div>

<?php if ($this->menu_active != 'home') : ?>
<!--box ban nen xem -->
<div class="sreendownload sreenonline right-box">
    <div class="toponline">
        <h2>Có thể bạn quan tâm</h2>
    </div>
    <div class="line-title">
        <div class="left-30">&nbsp;</div>
        <div class="left-70">&nbsp;</div>
    </div>
    <div class="boxdownload">
        <div class="3">
            <?php foreach ( $useFull as $_watch ): ?>
                <div class="sreencontentdownload">
                    <div class="imges-block-you-see"><a href="<?php echo base_url($_watch->link_rewrite); ?>" title="<?php echo $_watch->title; ?>">
                        <img src="<?php echo image($_watch->news_icon, 'news_125_80'); ?>" alt="<?php echo $_watch->title; ?>"/></a>
                    </div>
                    <a class="link-block-you-see" href="<?php echo base_url($_watch->link_rewrite); ?>" title="<?php echo $_watch->title; ?>">
                        <p><?php echo $_watch->title; ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>

<!--box ban nen xem -->
<?php if ($this->menu_active == 'news' || $this->menu_active == 'guides') : ?>
    <div class="sreenonline right-box">
        <div class="toponline">
            <h2>Sản phẩm mới</h2>
        </div>
        <div class="line-title">
            <div class="left-30">&nbsp;</div>
            <div class="left-70">&nbsp;</div>
        </div>
        <div class="midonline">
            <div class="product-news-right">
                <?php
                $i = 0;
                foreach ($newestProduct as $eachProduct) {
                    $i++;
                ?>
                <div class="product-news-right-item">
                    <a href="<?php echo base_url($eachProduct->link_rewrite); ?>" class="img-product-news">
                        <img src="<?php echo image('files/logo/ads/'.$eachProduct->logo, 'product_65_86'); ?>">
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
<?php
endif;
?>

<?php if (isset($you_should_watch)) : ?>
    <div class="sreendownload sreenonline right-box" style="margin-top: 20px;">
        <div class="toponline">
            <h2>Tin tức Yes Mobile</h2>
        </div>
        <div class="line-title">
            <div class="left-30">&nbsp;</div>
            <div class="left-70">&nbsp;</div>
        </div>
        <div class="boxdownload">
            <div class="3">
                <?php foreach ( $newsThangMobile as $_watch ): ?>
                    <div class="sreencontentdownload">
                        <div class="imges-block-you-see"><a href="<?php echo base_url('tin-tuc/tin-tuc-yes-mobile/'.$_watch->id_news.'-'.$_watch->link_rewrite.'.html'); ?>" title="<?php echo $_watch->title; ?>">
                            <img src="<?php echo image($_watch->news_icon, 'news_125_80'); ?>" alt="<?php echo $_watch->title; ?>"/></a>
                        </div>
                        <a class="link-block-you-see" href="<?php echo base_url('tin-tuc/tin-tuc-yes-mobile/'.$_watch->id_news.'-'.$_watch->link_rewrite.'.html'); ?>" title="<?php echo $_watch->title; ?>">
                            <p><?php echo $_watch->title; ?></p>
                        </a>
                        <p><?php echo date_format(new DateTime($_watch->date_add), 'd/m/Y'); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php
endif;
?>