<div class="main-product">
	<div class="nav">
		<a href="" title="Trang chủ">Trang chủ</a> - 
		<span><?php echo $servicesDetail->title; ?></span>
	</div>
</div>
<div class="server-information">
	<div class="server-information-left">
		<img src="<?php echo base_url('assets/images/dich-vu-chi-tiet.jpg'); ?>">
	</div>
	<div class="server-information-right">
		<h1 class="title-service h1-title"><?php echo $servicesDetail->title; ?></h1>
		<h3>Thông tin cần lưu ý</h3>
		<div class="main-info-note">
			<p><span class="span-left">- Bảo hành: </span><span class="span-right">12 Tháng</span></p>
			<p><span class="span-left">- Tình trạng link kiện: </span><span class="span-right">Mới 100%</span></p>
		</div>
		<div class="main-news-social">
	    	<div class="social">
	    		<!-- Button like facebook -->
                <div class="fb-like" data-href="http://sotaynhadat.vn/tin-tuc/tin-thi-truong/buon-vui-nha-o-xa-hoi.html" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                <!-- Button like facebook -->
                <!-- Place this tag where you want the +1 button to render. -->

				<!-- Place this tag where you want the +1 button to render. -->
				<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="150" data-href="http://sotaynhadat.vn/tin-tuc/tin-thi-truong/buon-vui-nha-o-xa-hoi.html"></div>
                <!-- Place this tag where you want the +1 button to render. -->
                <!-- Button share facebook -->
                <div class="fb-share-button" data-href="http://sotaynhadat.vn/tin-tuc/tin-thi-truong/buon-vui-nha-o-xa-hoi.html" data-layout="button"></div>
                <!-- Button share facebook -->
                <!-- Place this tag where you want the share button to render. -->
				<div class="g-plus" data-action="share" data-annotation="bubble" data-href="http://sotaynhadat.vn/tin-tuc/tin-thi-truong/buon-vui-nha-o-xa-hoi.html"></div>
	    	</div>
	    </div>
	</div>
</div>
<div class="server-information-detail server-information">
	<div class="server-information-left">
		<div class="noidungthitruongchitiet">
			<p><?php echo $servicesDetail->content;?></p>
		</div>

		<div class="cactinkhac2">
			<h3 class="h3-news-related">Các tin khác</h3>
			<div class="main-news-related">
				
		    </div>
		</div>
	</div>
	<div class="server-information-right">
		<div class="right">
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
				        	<a href="#" class="img-product-news">
				        		<img src="<?php echo image('files/logo/ads/'.$eachProduct->logo, 'product_65_86'); ?>">
				        	</a>
				        	<div class="product-news-right-info">
				        		<a href=""><?php echo $eachProduct->producer . ' ' . $eachProduct->model ?></a>
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
		</div>
	</div>
</div>