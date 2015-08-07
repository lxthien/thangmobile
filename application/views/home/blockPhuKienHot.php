<div class="sreensphot" style="width:675px; height:210px; float:left; margin-bottom:40px;">
	<p style="font-weight:bold; font-size:16px; margin-bottom:3px; color:#424242;">PHỤ KIỆN</p>
	<div class="title1" style="background-color:#cccccc; width: 100%; height:2px; margin-bottom:15px; float:left;"></div>
	<div class="">
		<ul id="slider1">
			<li>
			<?php 
			$index = 0;
			foreach($phuKienHot as $each) {
				$index++;
			?>			  
				<div class="boxsp2" align="center">
					<div class="sp2" align="center">
						<a href="<?php echo base_url($each->link_rewrite);?>"><img alt="<?php echo $each->model?>" src="<?php echo base_url(PARTNER_LOGO. '/ads/' . $each->logo)?>"/></a></div>
					   		<div class="titlesp3"><a href="<?php echo base_url($each->link_rewrite);?>">
					   		<p align="center" style="width:140px;" ><?php echo $each->model?></p>
					   	</a>
					</div>
					<div class="pricesphot" align="center" style="color: #FF0000;">Giá: <?php echo number_format($each->price,"0",",",".");?> VNÐ</div>
				</div>
			<?php 
				if($index % 4 == 0 && $index != count($phuKienHot)) {
					echo '</li><li>';
				}
			}
			?>		 
			</li>
		</ul>
	</div>
</div>   
	   
<script type="text/javascript">
	$(document).ready(function(){
		$('#slider1').bxSlider({
			auto: false
		});
	});
</script>
<style type="text/css">
	.bx-window{
		width: 675px !important;
	}
</style>	   