<div class="row">
    <div class="sreenbaner col-md-12">
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
            <div class="row">
                <div class="col-md-6">
                    <a href="http://dienthoaivungtau.com/san-pham/dien-thoai">
                        <img src="<?php echo image('assets/images/Ban-hang-tra-gop5047.jpg', 'banner_168_87'); ?>">
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="http://dienthoaivungtau.com/san-pham/dien-thoai/may-tinh-bang">
                        <img src="<?php echo image('assets/images/Samsung-Galaxy-Tab-4-389-x146.jpg', 'banner_168_87'); ?>">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="http://dienthoaivungtau.com/tuyen-dung.html">
                        <img src="<?php echo image('assets/images/Tuyen-Dung-T9.jpg', 'banner_168_87'); ?>">
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#">
                        <img src="<?php echo image('assets/images/Ban-hang-tra-gop_02.jpg', 'banner_168_87'); ?>">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="#">
                        <img src="<?php echo image('assets/images/banner-iPad-389x1467101.jpg', 'banner_345_87'); ?>">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({animSpeed: 500, pauseTime: 9000});
    });
</script>