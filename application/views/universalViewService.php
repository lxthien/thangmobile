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
    <div class="main-service-detail"> 
    	<?php
            $this->load->view('partial/pageSecondRight');    
    	?>
    </div>
</div>
<?php $this->load->view('partial/right_left_banner'); ?>    
<?php $this->load->view('partial/footer'); ?>    