<?php
if (isset($site_meta_data)) {
    $this->load->view('partial/header', $site_meta_data);
} else {
    $this->load->view('partial/header');
}
$this->load->view('partial/menu');
//echo '<div class="baner"></div>';

//$this->load->view('home/block_banner'); 
?>

	<!--main-->	
  <div class="main" style="width:927px;  float:left; margin-left:35px; margin-top:20px;">
	<!-- left-->	
	 <div class="left">

    <?php //$this->load->view('lienHe/lien_he');?>
	<?php echo $product_block_main;?>		      

	 </div>
<!--end left-->	
	<!--right-->		 
 <div class="right" style="width:240px; float:left; margin-left:25px;">
 	<?php 
 		if(isset($currentCategory) && $currentCategory == 'phu-kien') {
			$this->load->view('download/blockDownload');
			$this->load->view('partial/right_column_ads');
		}
		else {
	 		if(isset($view_details) && $view_details ==1) {
				$this->load->view('product/san_pham_cung_muc_gia');
			}
			else {
					$this->load->view('product/khoang_gia');
				$this->load->view('partial/right_column_ads');
			}
		}
 	?>
 
 
 </div>
	 <!--end right-->
	<!--doitac-->

	<?php $this->load->view('doiTac/blockDoiTac'); ?>
	<!--end doitac-->
	
  </div>
    
<?php $this->load->view('partial/right_left_banner'); ?>
<?php $this->load->view('partial/footer'); ?>