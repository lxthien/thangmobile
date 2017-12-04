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
	<div class="main" style="width:980px; float:left; margin-top: 15px;">
		<div class="nav">
		    <a href="<?php echo base_url(); ?>">Trang chủ</a>
		    <span>Liên hệ</span>
		</div>
		<!-- left-->	
	 	<div class="left">
    		<?php $this->load->view('lienHe/lien_he');?>
		</div>
		<!--end left-->	
		<!--right-->		 
		<div class="right">
			<!--download-->
			<?php  $this->load->view('download/blockDownload'); ?>
			<!--end download-->
		</div>
		<!--end right-->
		<!--doitac-->
		<?php $this->load->view('home/block_service'); ?>
		<!--end doitac-->
  	</div>
<?php $this->load->view('partial/right_left_banner'); ?>
<?php $this->load->view('partial/footer'); ?>