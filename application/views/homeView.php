<?php
foreach ($site_meta_data as $each) {
	//echo $each."<br>";
}
if (isset($site_meta_data)) {
    $this->load->view('partial/header', $site_meta_data);
} else {
    $this->load->view('partial/header');
}
$this->load->view('partial/menu');
//echo '<div class="baner"></div>';

$this->load->view('home/block_banner'); 
?>

	<!--main-->	
  <div class="main" style="width:927px;  float:left; margin-left:35px; margin-top:20px;">
	<!-- left-->	
	 <div class="left">
		 <!--spbanchay-->	
		 <?php $this->load->view('home/blockBestSellProduct'); ?>
		 <!--end spbanchay-->
		   
		 <!--spbanhot--> 
	 	 <?php $this->load->view('home/blockPhuKienHot'); ?>
		 <!--end spbanhot-->
		 <!--spbanmoi-->
		 <?php $this->load->view('home/blockNewProduct'); ?>
		 <!--end spbanmoi--> 
	 </div>
<!--end left-->	
	<!--right-->		 
 <div class="right" style="width:240px; float:left; margin-left:25px;">
		<!--download-->
		<?php  $this->load->view('download/blockDownload'); ?>
		<!--end download-->
		<!--qc-->
		<?php $this->load->view('partial/right_column_ads'); ?>
		<!--end qc-->

	</div>
	 <!--end right-->
	 <!--new-->
		<?php $this->load->view('home/home_tin_cong_nghe'); ?>
	<!--end new-->
	<!--doitac-->

	<?php $this->load->view('doiTac/blockDoiTac'); ?>
	<!--end doitac-->
	
  </div>
				
<?php $this->load->view('partial/right_left_banner'); ?>
<?php $this->load->view('partial/footer'); ?>