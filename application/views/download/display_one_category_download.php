<div class="allboxsp1" style="float:left;">
	<p style="font-weight:bold; font-size:16px; margin-bottom:3px; margin-left: 0px;"><?php echo $selectedCategory->name; ?></p>
	<div class="line-title">
		<div class="left-30">&nbsp;</div>
		<div class="left-70">&nbsp;</div>
	</div>
    <div class="ttincongghe">
		<?php
            if (isset($downloadList)) {
                $data = array();
                foreach ($downloadList as $item) : ?>
                	<div class="sreenttin" style="width: 648px; height: 105px; float: left;">
						<div class="hinhcongnghe"> <img src="<?php echo RES_PATH.'images/'.$item->icon; ?>" /></div>
						<div class="titlecongnghe">
							<a href="<?php echo base_url($item->link_rewrite); ?>">
								<p style="width: 500px; float: left; height: 20px;"><?php echo $item->name; ?></p>
							</a>
						</div>
						<div class="noidungcongnghe" style="margin-left: 10px; float: left; width: 490px; height: 100px;">
							<p align="justify">
								<?php echo $item->description; ?>
							</p>
						</div>
					</div>
					<div class="line3"></div>
                    <?php
                endforeach;
            }
        ?>
		<div class="phantrang" style="float:left; width:110px; margin-left:500px;  height:20px;">
			<div class="back">
				<a href="<?php echo base_url('tai-ve');?>"><p>Xem tất cả các mục</p></a> 		 
			</div>
	    </div>				   		
  	</div>
</div>