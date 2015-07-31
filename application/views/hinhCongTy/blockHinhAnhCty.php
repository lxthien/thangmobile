<!--hinh cty-->
<?php if (isset($latest_images) && count($latest_images) > 0): ?>

    <script type="text/javascript">
        $(function(){
            $('#vertical-ticker').totemticker({
                row_height	:	'120px',
                next		:	'#arrow_up',
                previous	:	'#arrow_down',
                //                stop		:	'#stop',
                //                start		:	'#start',
                mousestop	:	true
            });
        });
    </script>
    <div class="hinhcty" style="width:200px ; float:left;">
        <p  class="titlehinhcty" style="text-align:left;">H&igrave;nh &#7843;nh c&ocirc;ng ty </p>
        <p class="tabhinhcty"></p>
        <div id="boxhinhcty" >
            <div class="framearrow_up">
                <div id="arrow_up"><a href="#"></a></div>
            </div>
            <div id="vertical-ticker">
                <?php foreach ($latest_images as $image): ?>

                    <li class="pichinhcongty"><a href ="<?php echo base_url($image->link_rewrite); ?>">
                            <img src="<?php echo base_url(THUMBNAILS . '/' . $image->name); ?>" />
                        </a>
                    </li>                    
                <?php endforeach; ?>    
            </div>
            <div class="framearrow_down">
                <div id="arrow_down"><a href="#"></a></div>
            </div>
        </div>


    </div>
<?php endif; ?>
<!--end hinh cty-->