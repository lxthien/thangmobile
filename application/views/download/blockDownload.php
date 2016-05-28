<!--
<div class="sreenonline right-box">
    <div class="toponline">
        <h2>Hỗ trợ online</h2>
    </div>
    <div class="line-title">
        <div class="left-30">&nbsp;</div>
        <div class="left-70">&nbsp;</div>
    </div>
    <div class="midonline" style="position: relative;">
        <?php
        $i = 0;
        foreach ($contact as $eachContact) {
            $i++;
            if (($i % 2) == 1) {
                $css = 'width:111px; height:26px; float:left;"';
            } else {
                $css = 'width:111px; height:26px; float:right;"';
            }
            ?>
            <div class="yahoo" style="<?php echo $css; ?>">
                <a href="ymsgr:sendim?<?php echo $eachContact->yahoo; ?>" title="Gởi tin nhắn cho <?php echo $eachContact->name; ?>">
                    <img width=111 height="23" border=0 src="http://opi.yahoo.com/online?u=<?php echo $eachContact->yahoo; ?>&m=g&t=2&l=us"/>
                </a>
            </div>
        <?php
        }
        ?>
        <div class="yahoo" style="position: absolute; left: 125px; <?php echo $css; ?>">
            <a href="skype:bariaonlinevn?chat" title="Gởi tin nhắn cho <?php echo $eachContact->name; ?>">
                <img style="width: 43px;" height="23" border=0 src="<?php echo base_url('assets/images/icon-skype.png') ?>"/>
            </a>
        </div>
    </div>
</div>
-->

<!--box ban nen xem -->
<?php if (isset($you_should_watch)) : ?>
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
            <div class="fb-page" data-href="https://www.facebook.com/YesMobile.VietNam" data-width="295" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/YesMobile.VietNam"><a href="https://www.facebook.com/YesMobile.VietNam">dienthoaivungtau.com</a></blockquote></div></div>
        </div>
    </div>
</div>

<?php if (isset($you_should_watch)) : ?>
    <div class="sreendownload sreenonline right-box">
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