<div class="sreenbaner" style="width:980px; height: 290px; float:left; margin-top:10px;">
    <div class="main-slider">
        <div class="slider-wrapper theme-bar">
            <div id="slider" class="nivoSlider">
                <?php if (sizeof($banners) ==0) {
                    echo '<img src="'.image('/assets/images/banner.png', 'slider_625_277').'" data-thumb="'.base_url().'assets/images/banner.png" />';
                } else {
                    foreach($banners as $banner){
                        if (isset($banner->url) &&  trim($banner->url) !== ''){
                            echo '<a href="'.$banner->url.'"><img src="'.image('assets/images/banners/'.$banner->image, 'slider_625_277').'" data-thumb="'.  base_url(BANNER_PATH).'/'.$banner->image.'" alt="" title="'.$banner->title.'" /></a>';
                        } else {                            
                            echo '<img src="'.image('assets/images/banners/'.$banner->image, 'slider_625_277').'" data-thumb="'.  base_url(BANNER_PATH).'/'.$banner->image.'" alt="" title="'.$banner->title.'" />';
                        }
                    }
                } ?>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="banner-6of12">banner-6of12</div>
        <div class="banner-6of12">banner-6of12</div>
        <div class="banner-6of12">banner-6of12</div>
        <div class="banner-6of12">banner-6of12</div>
        <div class="banner-12of12">banner-12of12</div>
    </div>
</div>

<!--<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({animSpeed: 500, pauseTime: 6000});
    });
</script>