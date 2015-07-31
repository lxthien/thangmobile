<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="sreenbaner" style="background-color:#fed74b; width:980px; height:313px; float:left; margin-top:5px;">
<div class="slider-wrapper theme-bar">
            <div id="slider" class="nivoSlider">
                <?php if (sizeof($banners) ==0) {
                    echo '<img src="'.  base_url().'assets/images/banner.png" data-thumb="'.  base_url().'assets/images/banner.png" />';
                } else {
                    foreach($banners as $banner){
                        if (isset($banner->url) &&  trim($banner->url) !== ''){
                            
                            echo '<a href="'.$banner->url.'"><img src="'.  base_url(BANNER_PATH).'/'.$banner->image.'" data-thumb="'.  base_url(BANNER_PATH).'/'.$banner->image.'" alt="" title="'.$banner->title.'" /></a>';
                        } else {                            
                            echo '<img src="'.  base_url(BANNER_PATH).'/'.$banner->image.'" data-thumb="'.  base_url(BANNER_PATH).'/'.$banner->image.'" alt="" title="'.$banner->title.'" />';
                        }
                    }
                } ?>
<!--                <img src="<?php // echo RES_PATH; ?>images/banners/toystory.jpg" data-thumb="<?php // echo RES_PATH; ?>images/banners/toystory.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="<?php // echo RES_PATH; ?>images/banners/up.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="<?php // echo RES_PATH; ?>images/banners/walle.jpg" data-thumb="<?php // echo RES_PATH; ?>images/banners/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="<?php // echo RES_PATH; ?>images/banners/nemo.jpg" data-thumb="<?php // echo RES_PATH; ?>images/banners/nemo.jpg" alt="" title="#htmlcaption" />-->
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>
</div>
<!--<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>-->
    <script type="text/javascript" src="<?php echo RES_PATH;?>js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({animSpeed: 500, pauseTime: 6000});
    });
</script>
<div class="shadow"></div>