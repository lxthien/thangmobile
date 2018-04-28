<div class="allboxsp1 col-md-12">
	<div class="main-product">
		<div class="nav">
			<a class="fa fa-angle-right" href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a>
			<a href="<?php echo base_url('dich-vu-sua-chua-dien-thoai.html'); ?>" title="Sửa chữa điện thoại">Sửa chữa điện thoại</a>
			<a href="<?php echo base_url('dich-vu/'.$catParentServices->link_rewrite); ?>" title="<?php echo $catParentServices->name; ?>"><?php echo $catParentServices->name; ?></a>
			<span><?php echo $catServices->name; ?></span>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="server-information">
		<div class="server-information-left col-md-5">
			<div class="row">
				<img src="<?php echo image($servicesDetail->news_icon, 'news_390_258'); ?>">
			</div>
		</div>
		<div class="server-information-right col-md-7">
			<div class="row">
				<h1 class="title-service h1-title"><?php echo $servicesDetail->title; ?></h1>
				<div class="price-detail">
					<p>
					<?php if ($servicesDetail->price != 0) { ?>
						<span class="product-price"><?php echo number_format($servicesDetail->price, "0", ",", "."); ?></span> <span class="icon-price-rate">vnđ</span> <span class="ngan-cach" style="font-size: 16px; padding: 0 3px;">|</span> <span class="hotline-tu-van" style="font-size: 16px; margin-top: 2px;"><span style="color: #000000;">Tư vấn: </span>0901 260 260</span>
					<?php }else{ ?>
						<span class="product-price-text">Giá: Xin vui lòng liên hệ</span> <span class="ngan-cach">|</span> <span class="hotline-tu-van"><span>Tư vấn:</span> 0901 260 260</span>
					<?php } ?>
					</p>
				</div>
				<p class="time-wanarry">Thời gian bảo hành: <?php echo $servicesDetail->time_service != null ? $servicesDetail->time_service : 'Đang cập nhật ...'; ?></p>
				<p class="address">
					Địa chỉ: 438 Trương Công Định, Phường 8, TP.Vũng Tàu (<a class="service-view-map" target="_blank" href="<?php echo base_url('tin-tuc/tin-tuc-yes-mobile/142-ban-do-duong-di-den-cac-cua-hang.html'); ?>">Xem bản đồ</a>)
				</p>
				<div class="main-news-social">
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
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="server-information-detail server-information">
		<div class="server-information-left col-md-8">
			<div class="noidungthitruongchitiet row">
				<p><?php echo $servicesDetail->content;?></p>
			</div>
			<?php if(count($newsRelateds) > 0): ?>
			<div class="cactinkhac2 cactinkhac2-large row">
				<h3 class="h3-news-related">Các lỗi khác thường gặp</h3>
				<div class="main-news-related">
					<div class="main-news-related">
						<?php
							foreach ($newsRelateds as $post): 
								$posted_date = new DateTime($post->date_add);
						?>
							<div class="sreentieude">
								<a class="img-news-related" href="<?php echo base_url($post->id_news.'-'.$post->link_rewrite.URL_TRAIL);?>">
									<img src="<?php echo image($post->news_icon, 'news_200_120'); ?>" alt="<?php echo $post->title;?>">
								</a>
								<div class="sreentinkhacchitiet">
									<a title="<?php echo $post->title;?>" href="<?php echo base_url($post->id_news.'-'.$post->link_rewrite.URL_TRAIL);?>">
										<span><?php echo $post->title;?></span>
									</a>
									<p class="des-news-related"><?php echo ucfirst(mb_strtolower($post->content, 'UTF-8')); ?></p>
								</div>
							</div>
						<?php
							endforeach;
						?>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<div class="server-information-right col-md-4">
			<div class="right">
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
							<li><a class="<?php if($catParentServices->link_rewrite == $service['link_rewrite']) {echo 'menu_active';} ?>" href="<?php echo base_url('dich-vu/' . $service['link_rewrite']); ?>"><?php echo $service['name']; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>