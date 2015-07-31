<div class="allboxsp2" style="float:left; border:1px #d1d1d1 solid; padding-top:5px; margin-bottom:10px;">
	   <p style="font-weight:bold; font-size:16px; margin-bottom:3px; margin-left:20px; color:#00619f;">HÀNG MỚI VỀ </p>
	   <div class="title1" style="background-color:#00619f; width:650px; height:3px; margin-bottom:20px; float:left;"></div>
	    <div class="spbanchay">
	    

<?php 
$index = 1;
//foreach($spBanChay as $row):
for($i=0; $i < count($spBanChay); $i++) {
	if($i % 3 == 0) {
		echo '<div class="sreensp1"  align="center" style="width:620px; margin-left:30px;  float:left; margin-bottom:15px;">';
	}
?>
		   <div class="boxsp">
			         <div class="sp3"><a href="<?php echo base_url($spBanChay[$i]->link_rewrite);?>"><img alt="<?php echo $spBanChay[$i]->producer . ' ' . $spBanChay[$i]->model?>" src="<?php echo base_url(PARTNER_LOGO. '/ads/' . $spBanChay[$i]->logo)?>" /></a></div>
					 <div style="float:right;" class="boxsale">
					 	<?php if($spBanChay[$i]->sap_ve == 1) {?><a href="<?php echo base_url($spBanChay[$i]->link_rewrite);?>"><div class="gift1"></div></a><?php }?>
						<?php if($spBanChay[$i]->moi_ve == 1) {?><a href="<?php echo base_url($spBanChay[$i]->link_rewrite);?>"><div class="gift2"></div></a><?php }?>
						<?php if($spBanChay[$i]->gia_tot == 1) {?><a href="<?php echo base_url($spBanChay[$i]->link_rewrite);?>"><div class="gift3"></div></a><?php }?>
						<?php if($spBanChay[$i]->qua_tang == 1) {?><a href="<?php echo base_url($spBanChay[$i]->link_rewrite);?>"><div class="gift"></div></a><?php }?>
					</div>
					 <div class="titlesp">
							 <a href="<?php echo base_url($spBanChay[$i]->link_rewrite);?>"><p align="center" style=" margin-top:-20px;width:163px;"><?php echo $spBanChay[$i]->producer . ' ' . $spBanChay[$i]->model?></p></a>
							 
					 </div>
					 <?php if($spBanChay[$i]->gia_cu != 0 && $spBanChay[$i]->gia_cu != '' && $spBanChay[$i]->gia_cu != null) {?><div class="pricespold" align="center"><?php echo number_format($spBanChay[$i]->gia_cu,"0",",",".");?> VNÐ</div><?php }?>
					 <p class="pricespnew" align="center" style=""><?php echo number_format($spBanChay[$i]->price,"0",",",".");?> VN&#272;</p>
					  
			</div>  
		      
<?php 
	if($i % 3 == 2 || $i == count($spBanChay)-1) {
		echo '</div>';
	}
	else {
		echo '<div class="line"></div>';
	}

}

?>							 
		  </div>
</div>
	  <!--end spbanmoi--> 

