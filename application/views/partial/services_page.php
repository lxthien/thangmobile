<div class="sub-category-service">
	<p style="font-size: 15px;">Chọn điện thoại/máy tính bảng bạn cần sửa:</p>
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
			<img alt="<?php echo $row->title; ?>" src="<?php echo image($row->news_icon, 'news_195_135'); ?>" />
		</a>
		<div class="right-box-service">
			<a href="<?php echo base_url($row->id_news.'-'.$row->link_rewrite.URL_TRAIL); ?>" title="<?php echo $row->title; ?>"><?php echo $row->title; ?></a>
			<!--<p class="date-service"><?php echo date_format($date_post, 'd/m/Y'); ?></p>-->
			<p class="des-service">
				<?php echo $row->content; ?>
			</p>
		</div>
	</div>
<?php
	endforeach;
?>
<div class="phantrang">
	<div class="back">
		<?php echo $this->pagination->create_links(); ?>
	</div>
</div>
<?php else: ?>
	<p class="no-item">Chưa có bài viết cho danh mục này</p>
<?php endif; ?>