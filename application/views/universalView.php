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
<div class="main" style="width:980px; float:left; margin-top: 20px;">
	<!-- left-->	
    <div class="left"> 
	<?php
    $this->load->view('partial/pageSecondRight');    
	?>
    </div>
    <!--end left-->
    <!--right-->
    <div class="right">
 		<!--download-->
		<?php  $this->load->view('download/blockDownload'); ?>
		<!--end download-->
		<!--qc-->
		<?php $this->load->view('partial/right_column_ads'); ?>
		<!--end qc-->
    </div>
    	<!--end right-->
    	<!--doitac-->
    	<?php $this->load->view('doiTac/blockDoiTac'); ?>
    	<!--end doitac-->
      </div>
<?php $this->load->view('partial/right_left_banner'); ?>    
<?php $this->load->view('partial/footer'); ?>    