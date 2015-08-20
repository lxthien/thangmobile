<div class="allboxsp1" style="float:left;">
	<div class="title">
		<h1><?php echo $category_name;?></h1>
	</div>
 	<div class="line-title">
		<div class="left-30">&nbsp;</div>
		<div class="left-70">&nbsp;</div>
	</div>
	<div class="ttincongghe" style="width: 675px; margin-top: 15px;">
		<?php
		if (isset($all_news)) {
		    foreach ($all_news as $item):
		        $date_post = new DateTime($item->date_add);
		        ?>
		        <div class="box-service">
			       	<img class="img-server" alt="<?php echo $item->title; ?>" src="<?php echo image($item->news_icon, 'news_90_100'); ?>" />
					<div class="right-box-service">
						<a href="" title="<?php echo $item->title; ?>"><?php echo $item->title; ?></a>
						<p class="date-service">08/07/2015</p>
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