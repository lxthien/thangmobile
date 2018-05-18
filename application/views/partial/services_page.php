<div class="allboxsp1">
	<div class="sub-category-service" abc="<?php echo $level; ?>">
		<?php if($level == 2): ?>
			<h1><?php echo $catServices->name.' tại Vũng Tàu'; ?></h1>
		<?php else: ?>
			<h1><?php echo 'Sửa ' . $catServices->name.' tại Vũng Tàu'; ?></h1>
		<?php endif; ?>
		<!-- <p>Chọn điện thoại/máy tính bảng bạn cần sửa:</p> -->
		<ul>
			<?php foreach ($categoryServices as $row): ?>
			<li><a class="<?php echo $catServices->id_news_category == $row->id_news_category ? 'breadcrumb-active' : ''; ?>" href="<?php echo base_url('dich-vu/'.$row->link_rewrite); ?>" title="<?php echo $row->name; ?>"><?php echo $row->name; ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php if(count($services) > 0): ?>
	<?php
		foreach ($services as $row) :
			$date_post = new DateTime($row->date_add);
	?>
		<div class="box-service">
			<a href="<?php echo base_url($row->id_news.'-'.$row->link_rewrite.URL_TRAIL); ?>" class="img-server" title="<?php echo $row->title; ?>">
				<img alt="<?php echo $row->title; ?>" src="<?php echo image($row->news_icon, 'news_220_160'); ?>" />
			</a>
			<div class="right-box-service">
				<a href="<?php echo base_url($row->id_news.'-'.$row->link_rewrite.URL_TRAIL); ?>" title="<?php echo $row->title; ?>"><?php echo $row->title; ?></a>
				<p class="des-service">
					<?php echo $row->content; ?>
				</p>
			</div>
		</div>
	<?php
		endforeach;
	?>
		<div class="phantrang row">
			<div class="back col-md-12">
				<?php echo $this->pagination->create_links(); ?>
			</div>
		</div>
	<?php else: ?>
		<p class="no-item">Chưa có bài viết cho danh mục này</p>
	<?php endif; ?>
</div>