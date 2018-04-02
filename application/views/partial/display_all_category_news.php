<div class="allboxsp1" style="float:left;">
	<?php if(empty($show_cam_nang)): ?>
		<h1 class="h1-title">Tin tức</h1>
	<?php else: ?>
		<h1 class="h1-title">Cẩm nang</h1>
	<?php endif; ?>
	<div class="line-title">
		<div class="left-30">&nbsp;</div>
		<div class="left-70">&nbsp;</div>
	</div>
	<div class="ttincongghe">
		<?php 
		if (isset($news)) {
			$this->load->model('News_category_model', 'category_model');
			$i = 0;
		    foreach ($news as $item):
		    	$i++;
		    	$categoryUrl = getCategory($item->id_news_category);
		        $date_post = new DateTime($item->date_add);
		        if ($i==1):
		?>
					<div class="sreenttin box-service box-service-first">
						<div class="hinhcongnghe">
							<a href="<?php echo base_url($category.'/'.$categoryUrl.'/'.$item->id_news.'-'.$item->link_rewrite. URL_TRAIL); ?>" title="<?php echo $item->title; ?>">
								<img src="<?php echo image($item->news_icon, 'news_250_180'); ?>" alt="<?php echo $item->title; ?>" />
							</a>
						</div>
						<div class="titlecongnghe">
							<a href="<?php echo base_url($category.'/'.$categoryUrl.'/'.$item->id_news.'-'.$item->link_rewrite. URL_TRAIL); ?>" title="<?php echo $item->title; ?>">
								<p style="float: left; margin-bottom: 3px;"><?php echo $item->title; ?></p>
							</a>
						</div>
						<div class="noidungcongnghe" style="float: left; width: 410px; height: 85px;">
							<p class="date-technology"><?php echo date_format($date_post, 'd/m/Y'); ?></p>
							<p align="justify">
								<?php echo $item->content; ?>
							</p>
						</div>
					</div>
			<?php else: ?>
					<div class="sreenttin box-service">
						<div class="hinhcongnghe">
							<a href="<?php echo base_url($category.'/'.$categoryUrl.'/'.$item->id_news.'-'.$item->link_rewrite. URL_TRAIL); ?>" title="<?php echo $item->title; ?>">
								<img src="<?php echo image($item->news_icon, 'news_220_160'); ?>" alt="<?php echo $item->title; ?>" />
							</a>
						</div>
						<div class="titlecongnghe">
							<a href="<?php echo base_url($category.'/'.$categoryUrl.'/'.$item->id_news.'-'.$item->link_rewrite. URL_TRAIL); ?>" title="<?php echo $item->title; ?>">
								<p style="float: left; margin-bottom: 3px;"><?php echo $item->title; ?></p>
							</a>
						</div>
						<div class="noidungcongnghe" style="float: left; width: 443px; height: 85px;">
							<p class="date-technology"><?php echo date_format($date_post, 'd/m/Y'); ?></p>
							<p align="justify">
								<?php echo $item->content; ?>
							</p>
						</div>
					</div>
			<?php endif; ?>
			<?php
		    	endforeach;
			}
		?>		                
		<div class="phantrang">
			<div class="back">
			<?php 
				echo $this->pagination->create_links();
			?>
			</div>
		</div>
    </div>
</div>