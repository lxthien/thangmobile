<?php
	foreach ($services as $row) :
		//$date_post = new DateTime($row->date_add);
?>
	<div class="box-service">
		<img class="img-server" alt="<?php echo $row->title; ?>" src="<?php echo image($row->news_icon, 'news_195_105'); ?>" />
		<div class="right-box-service">
			<a href="<?php echo base_url($row->link_rewrite.URL_TRAIL); ?>" title="<?php echo $row->title; ?>"><?php echo $row->title; ?></a>
			<p class="date-service"><?php //echo $date_post; ?></p>
			<p class="des-service">
				Điện thoại thông minh giá rẻ mang đến cho người dùng nhiều lựa chọn với chi phí hợp lý, nhưng cũng lấy đi những giá trị vô hình. Trên góc độ người dùng, hệ điều hành Android là một sản phẩm hiệu quả và là nền tảng duy nhất
			</p>
		</div>
	</div>
<?php
	endforeach;
?>