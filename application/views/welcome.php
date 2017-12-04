<?php
	if (isset($site_meta_data)) {
	    $this->load->view('partial/header', $site_meta_data);
	} else {
	    $this->load->view('partial/header');
	}
	$this->load->view('partial/menu');
?>
	<div class="main" style="width:980px; float:left; margin-top: 15px;">
		<div class="nav">
		    <a href="<?php echo base_url(); ?>">Trang chủ</a>
		    <span>Kiểm tra bảo hành</span>
		</div>
		<!-- left-->	
	 	<div class="left">
    		<?php $this->load->view('customer/timeWarranty');?>
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