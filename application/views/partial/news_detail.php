<?php
	if (isset($news_item)):
	$new_id = $news_item->id_news;
	$isNotFixNews = $new_id !== COMPANY_INSTRODUCE_NEWS_ID && $new_id !== SERVICES && $new_id !== WARRANTY && $new_id !== SITE_MAP;
	if ($isNotFixNews) {
		$pageHeadTitle = $category->name;
	}
	else {
		$pageHeadTitle = $news_item->title;
	}
?>
<!--
<h1 class="h1-title"><?php echo $pageHeadTitle;?></h1>
<div class="line-title">
	<div class="left-30">&nbsp;</div>
	<div class="left-70">&nbsp;</div>
</div>
-->
<div class="ttincongghe">
	<?php 
		if ($news_item->active === '1') {
	?>
	<div class="sreentieude" style="width:675px; margin-left: 0px;">
		<div class="tieude" style="font-size:16px; font-weight:bold;" >
		    <h1 class="h1-title-detail"><?php echo $news_item->title; ?></h1>
	    </div>
	    <div class="main-news-social">
	    	<div class="social">
	    		<!-- Button like facebook -->
                <div class="fb-like" data-href="http://sotaynhadat.vn/tin-tuc/tin-thi-truong/buon-vui-nha-o-xa-hoi.html" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                <!-- Button like facebook -->
                <!-- Place this tag where you want the +1 button to render. -->
                <div class="g-plusone" data-size="medium" data-href="http://sotaynhadat.vn/tin-tuc/tin-thi-truong/buon-vui-nha-o-xa-hoi.html"></div>
                <!-- Place this tag where you want the +1 button to render. -->
                <!-- Button share facebook -->
                <div class="fb-share-button" data-href="http://sotaynhadat.vn/tin-tuc/tin-thi-truong/buon-vui-nha-o-xa-hoi.html" data-layout="button"></div>
                <!-- Button share facebook -->
                <!-- Place this tag where you want the share button to render. -->
                <div class="g-plus" data-action="share" data-annotation="bubble" data-href="http://sotaynhadat.vn/tin-tuc/tin-thi-truong/buon-vui-nha-o-xa-hoi.html"></div>
	    	</div>
	    	<span class="time-update-news">Cập nhật: <?php $date_post = new DateTime($news_item->date_add); echo date_format($date_post,'d/m/Y'); ?></span>
	    </div>
	</div>
	<div class="noidungthitruongchitiet" style="width:675px; margin-top:5px; font-size: 15px; line-height: 1.4;">
		  <p><?php echo $news_item->content;?></p>
		  <p align="justify">&nbsp;</p>	
	</div>
	<?php 
	if ($isNotFixNews) {
	?>

    <div class="cactinkhac2">
		<h3 class="h3-news-related">Các tin khác</h3>
		<div class="main-news-related">
			<?php
		        foreach ($posts_same_category as $post): 
		        	$posted_date = new DateTime($post->date_add);
		    ?>
				<div class="sreentieude">
					<a class="img-news-related" href="<?php echo base_url($post->link_rewrite);?>">
						<img src="<?php echo image($post->news_icon, 'news_100_75'); ?>" alt="<?php echo $post->title;?>">
					</a>
				   	<div class="sreentinkhacchitiet">
				   		<a title="<?php echo $post->title;?>" href="<?php echo base_url($post->link_rewrite);?>">
			   				<span><?php echo $post->title;?></span>
			   			</a>
			   			<p class="des-news-related"><?php echo $post->content; ?></p>
			   			<p class="date-news-related">
			   				<?php  echo @date_format($posted_date,'d/m/Y');?>
			   			</p>
		 			</div>
				</div>
			<?php
		        endforeach;
		    ?>
	    </div>
	</div>
    <?php 
    }
	} else {
	?>
    <div class="sreentieude" style=" width:610px; margin-left:20px; margin-top:10px;">
		<div class="tieude" style="font-size:16px; font-weight:bold;" >
        	&nbsp;
        </div>   
	</div>
	<div  align="justify" class="noidungthitruongchitiet" style="width:610px; margin-bottom:1px; margin-left:20px; margin-top:5px;">
		  <p>Hiện tại chưa có nội dung trong mục này</p>
	</div>
	<?php 
    }
	?>
</div>
<?php endif;?>