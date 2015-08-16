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
  	<div class="main main-product">
		<!-- left-->
		<div class="left">
			<?php echo $product_block_main;?>
		</div>
		<!--end left-->
		<!--doitac-->
		<?php $this->load->view('home/block_service'); ?>
		<!--end doitac-->
  	</div>
<?php $this->load->view('partial/right_left_banner'); ?>
<?php $this->load->view('partial/footer'); ?>