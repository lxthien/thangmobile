<?php
	if (isset($selectedDownload)):
?>
<h1 style="font-weight:bold; font-size:16px; margin-bottom:3px; color:#00619f; text-transform: uppercase;"><?php echo $categoryName;?></h1>
<div class="line-title">
	<div class="left-30">&nbsp;</div>
	<div class="left-70">&nbsp;</div>
</div>
<div class="ttincongghe">
	<?php 
	if (1) {
	?>
	<div class="sreentieude" style="margin: 0; padding: 0; width: 100%;">
		<div class="tieude" style="font-size:16px; font-weight:bold;" >
	        <p><?php echo $selectedDownload->name;?></p> 
        </div>
        <?php 
	        $date_post = new DateTime($selectedDownload->date_add);
	        echo '<div style="float: right;">'.'Đăng ngày '.date_format($date_post,'d.m.Y').'</div>' ;
        ?>  
        <div class="titlecongnghe" style="font-size:16px; font-weight:bold;" ></div>
        <p>&nbsp;</p>
	</div>
	<div align="justify" class="noidungthitruongchitiet" style="width:675px; margin-top:8px;">
		<p><?php echo $selectedDownload->description;?></p>
		<p align="justify">&nbsp;</p>	
	</div>
	<div class="line6"></div>
    <div class="cactinkhac2">
		<p style="font-size:16px; font-weight:bold; color:#666666; margin-bottom:5px;">Các tin khác</p>
		<?php             
	        foreach ($downloadList as $post): 
	        	if($post->id != $selectedDownload->id) {
	        	$posted_date = new DateTime($post->date_add);
	     ?>
			 <div class="sreentieude" style="width:675px; height:15px; margin-bottom:3px;  float:left;">
				<div class="icon3"></div>
				<div class="sreentinkhacchitiet" style="width:550px; height:20px; float:left;">
					<div class="tinkhacchitiet">
						<a href="<?php echo base_url($post->link_rewrite);?>">
					   		<p style="text-align:justify; margin-top:-3px;"><?php echo $post->name;?> <span class="style4">(<?php  echo @date_format($posted_date,'d.m.Y');?>)</span> </p>
					   	</a>
					</div>
			 	</div>	 
			 </div>
		<?php
			}
	        endforeach;
	    ?>
	</div>
    <?php 
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
<?php endif; ?>