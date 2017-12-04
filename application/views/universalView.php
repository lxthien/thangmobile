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
<div class="main" style="width:980px; float:left; margin-top: 20px; <?php echo $this->router->fetch_method(); ?>">
	<?php if (($this->menu_active == 'news' || $this->menu_active == 'guides') && $this->router->fetch_method() == 'view_post_on_page') : ?>
        <div class="nav">
            <a href="<?php echo base_url(); ?>">Trang chủ</a>
            <span><?php echo $this->menu_active == 'news' ? 'Tin tức' : 'Cẩm nang'; ?></span>
        </div>
    <?php endif; ?>
    <?php if (($this->menu_active == 'news' || $this->menu_active == 'guides') && $this->router->fetch_method() == 'view_post_on_category') : ?>
        <div class="nav">
            <a href="<?php echo base_url(); ?>">Trang chủ</a>
            <a href="<?php echo base_url($this->menu_active == 'news' ? 'tin-tuc' : 'cam-nang'); ?>"><?php echo $this->menu_active == 'news' ? 'Tin tức' : 'Cẩm nang'; ?></a>
            <span><?php echo $category_name; ?></span>
        </div>
    <?php endif; ?>
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
    </div>
	<!--end right-->

	<!--doitac-->
	<?php //$this->load->view('doiTac/blockDoiTac'); ?>
	<!--end doitac-->
</div>
<?php $this->load->view('partial/right_left_banner'); ?>    
<?php $this->load->view('partial/footer'); ?>    