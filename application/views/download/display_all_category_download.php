
<!-- =========================== -->
<?php foreach ($download_categories as $category) : 
	if (isset($category->sub_cats)):
            $sub_cats = $category->sub_cats;
            foreach ($sub_cats as $sub_cat):
?>
<div style="float:left;">
    <p style="font-weight:bold; font-size:16px; margin-bottom:3px; margin-left: 0px; text-transform: uppercase;"><?php echo $sub_cat->name; ?></p>
    <div class="line-title">
		<div class="left-30">&nbsp;</div>
		<div class="left-70">&nbsp;</div>
	</div>
    <div class="ttincongghe">
		<?php
            if (isset($sub_cat->download_items)) {
                $data = array();
                $download_items = $sub_cat->download_items;
                foreach ($download_items as $item) : ?>
                	<div class="sreenttin" style="width: 675px; height: 105px; float: left;">
						<div class="hinhcongnghe"><img src="<?php echo RES_PATH.'images/'.$item->icon; ?>" alt="<?php echo $item->name; ?>" /></div>
						<div class="titlecongnghe">
							<a href="<?php echo base_url($item->link_rewrite); ?>">
								<p><?php echo $item->name; ?></p>
							</a>
						</div>
						<div class="noidungcongnghe" style="float: left; width: 465px; height: 80px;">
							<p align="justify">
								<?php echo $item->description; ?>
							</p>
						</div>
					</div>
                    <?php
                endforeach;
            }
        ?>
		<div class="phantrang" style="float:right; width:58px; height:20px;">
		   	<div class="back">
		    <a href="<?php echo base_url('tai-ve/'. $sub_cat->link_rewrite);?>"><p>Xem tất cả</p></a> 		 
		    </div>  
		</div>
  	</div>
</div>
<?php
			endforeach;
		endif;
	endforeach;
?>