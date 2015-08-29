<div class="allboxsp1" style="float:left;">
	<h1 class="h1-title"><?php echo $category_name;?></h1>
 	<div class="line-title">
		<div class="left-30">&nbsp;</div>
		<div class="left-70">&nbsp;</div>
	</div>
	<div class="ttincongghe" style="width: 675px;">
		<?php
		if (isset($all_news)) {
		    foreach ($all_news as $item):
		        $date_post = new DateTime($item->date_add);
		        ?>
		        <div class="box-service">
			       	<img class="img-server" alt="<?php echo $item->title; ?>" src="<?php echo image($item->news_icon, 'news_195_105'); ?>" />
					<div class="right-box-service">
						<a href="<?php echo base_url('tin-tuc/kinh-nghiem-su-dung/'.$item->id_news.'-'.$item->link_rewrite. URL_TRAIL); ?>" title="<?php echo $item->title; ?>"><?php echo $item->title; ?></a>
						<p class="date-service"><?php echo date_format(new DateTime($item->date_add), 'd/m/Y'); ?></p>
						<p class="des-service"><?php echo $item->content; ?></p>
					</div>
				</div>
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