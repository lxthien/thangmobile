<div class="allboxsp1" style="float:left;">
	<h1 class="h1-title">Thông tin công nghệ</h1>
	<div class="line-title">
		<div class="left-30">&nbsp;</div>
		<div class="left-70">&nbsp;</div>
	</div>
	<div class="ttincongghe">
		<?php 
		if (isset($two_tincongnghe)) {
		    foreach ($two_tincongnghe as $item):
		        $date_post = new DateTime($item->date_add);
		?>
			<div class="sreenttin" style="width: 675px; height: 105px; float: left;">
				<div class="hinhcongnghe">
					<img src="<?php echo image($item->news_icon, 'news_195_105'); ?>" alt="<?php echo $item->title; ?>" />
				</div>
				<div class="titlecongnghe">
					<a href="<?php echo base_url('tin-tuc/thong-tin-cong-nghe/'.$item->id_news.'-'.$item->link_rewrite. URL_TRAIL); ?>">
						<p style="float: left; margin-bottom: 3px;"><?php echo $item->title; ?></p>
					</a>
				</div>
				<div class="noidungcongnghe" style="float: left; width: 465px; height: 85px;">
					<p align="justify">
						<?php echo $item->content; ?>
					</p>
				</div>
			</div>
			<?php
		    	endforeach;
			}
		?>		                
		<div class="phantrang" style="float:left; width:110px; margin-left:575px;  height:20px;">
			<div class="back">
				<a href="<?php echo base_url('tin-tuc/thong-tin-cong-nghe');?>"><p>Xem tất cả</p></a>
			</div>
	    </div>
    </div>
</div>
<div class="allboxsp1" style="float:left;">
	<h1 class="h1-title">Kinh nghiệm sử dụng</h1>
	<div class="line-title">
		<div class="left-30">&nbsp;</div>
		<div class="left-70">&nbsp;</div>
	</div>
	<div class="ttincongghe">
		<?php 
		if (isset($two_kinhnghiemsudung)) {
		    foreach ($two_kinhnghiemsudung as $item):
		        $date_post = new DateTime($item->date_add);
		?>
		<div class="sreenttin" style="width: 675px; height: 105px; float: left;">
			<div class="hinhcongnghe">
				<img src="<?php echo image($item->news_icon, 'news_195_105'); ?>" alt="<?php echo $item->title; ?>" />
			</div>
			<div class="titlecongnghe">
				<a href="<?php echo base_url('tin-tuc/kinh-nghiem-su-dung/'.$item->id_news.'-'.$item->link_rewrite. URL_TRAIL); ?>">
					<p style="float: left; margin-bottom: 3px;"><?php echo $item->title; ?></p>
				</a>
			</div>
			<div class="noidungcongnghe" style="float: left; width: 465px; height: 85px;">
				<p align="justify">
					<?php echo $item->content; ?>
				</p>
			</div>
		</div>
		<?php
			    endforeach;
			}

		?>	

		<div class="phantrang" style="float:left; width:110px; margin-left:575px; height:20px;">
			<div class="back">
				<a href="<?php echo base_url('tin-tuc/kinh-nghiem-su-dung');?>"><p>Xem tất cả</p></a> 
			</div>  
	    </div>
      </div>
</div>