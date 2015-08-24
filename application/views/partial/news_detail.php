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

<h1 style="font-weight:bold; font-size:16px; margin-bottom:3px; color:#424242; text-transform: uppercase;"><?php echo $pageHeadTitle;?></h1>
<div class="line-title">
	<div class="left-30">&nbsp;</div>
	<div class="left-70">&nbsp;</div>
</div>
<div class="ttincongghe">
	<?php 
		if ($news_item->active === '1') {
	?>
	<div class="sreentieude" style="width:675px; margin-left: 0px;">
		<div class="tieude" style="font-size:16px; font-weight:bold;" >
        <?php
	        if ($isNotFixNews) {
	            echo '<p>'.$news_item->title.'</p>' ;
            } 
	    ?>
	    </div>
	    <?php 
	        if ($isNotFixNews) {
		        $date_post = new DateTime($news_item->date_add);
		        echo '<div style="float: right; margin-bottom: 5px;">'.'Đăng lúc '.date_format($date_post,'H:i:s').' - '.date_format($date_post,'d.m.Y').'</div>' ;
	        }
        ?>  
	</div>
	<div class="noidungthitruongchitiet" style="width:675px; margin-top:5px; font-size: 15px; line-height: 1.4;">
		  <p><?php echo $news_item->content;?></p>
		  <p align="justify">&nbsp;</p>	
	</div>
	<?php 
	if ($isNotFixNews) {
	?>
	<div class="line6"></div>
    <div class="cactinkhac2">
	<p style="font-size:16px; font-weight:bold; color:#666666; margin-bottom:5px;"> C&aacute;c tin kh&aacute;c: </p>
	<?php
        foreach ($posts_same_category as $post): 
        	$posted_date = new DateTime($post->date_add);
     ?>

		 <div class="sreentieude" style=" width:600px; height:15px; margin-bottom:3px;  float:left;">
	       	<div class="icon3"></div>
		   	<div class="sreentinkhacchitiet" style="width:580px; height:20px; float:left;">
		   		<div class="tinkhacchitiet">
		   			<a style="font-size: 13px; width: 580px;"  href="<?php echo base_url($post->link_rewrite);?>">
		   				<p style="text-align:justify; margin-top:-3px;"><?php echo $post->title;?> <span class="style4">(<?php  echo @date_format($posted_date,'d.m.Y');?>)</span> </p>
		   			</a>
				</div>
 			</div>
		 </div>
	<?php
        endforeach;
    ?>
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