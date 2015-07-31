	   <div class="sreensphot" style="width:650px; height:210px; float:left; margin-bottom:40px; ">
		<div class="sphot">
	   <p style="color:#FFFFFF; font-size:18px; margin-left:36px; margin-top:10px; font-weight:bold;">PH&#7908; KI&#7878;N HOT </p>
	      
<!-- 	      <div class="arow3"><a href=""></a></div> -->
	<ul id="slider1">
		<li>
<?php 
$index = 0;
foreach($phuKienHot as $each) {
	$index++;
?>			  
		
		<div class="boxsp2" align="center">
		  <div class="sp2" align="center"><a href="<?php echo base_url($each->link_rewrite);?>"><img alt="<?php echo $each->model?>" src="<?php echo base_url(PARTNER_LOGO. '/ads/' . $each->logo)?>"/></a></div>
		   <div class="titlesp3"><a href="<?php echo base_url($each->link_rewrite);?>">
		   <p  align="center" style="width:140px;" ><?php echo $each->model?></p>
		   </a></div>
		  <div class="pricesphot" align="center" style="color: #FF0000;"><?php echo number_format($each->price,"0",",",".");?> VNÐ</div>
		  </div>
<?php 
	if($index % 3 == 0 && $index != count($phuKienHot)) {
		echo '</li><li>';
	}
}
?>		 
		</li>
		
		</ul>  
<!-- 		  <div class="arow4"><a href=""></a></div> -->
		  
	     </div>
	   </div>   
	   
<script type="text/javascript">
  $(document).ready(function(){
    $('#slider1').bxSlider({
    	auto: true
    });
  });
</script>
<style type="text/css">
	.bx-window{
		width: 595px !important;
	}
</style>	   