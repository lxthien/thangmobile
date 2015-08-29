<div class="allboxsp2" style="float:left; padding-top:1px; margin-bottom:10px;">
	<h1 class="h1-title">HÀNG MỚI VỀ </h1>
	<div class="line-title">
		<div class="left-30">&nbsp;</div>
		<div class="left-70">&nbsp;</div>
	</div>
    <div class="spbanchay">
    	<?php
            if (isset($childrenCategories)):
                $i = 0;
                foreach ($childrenCategories as $each) :
                    $eachProductList = $each->productList;
                        if (count($eachProductList) > 2) :
                            $i++;
        ?>
        <div class="boxsp <?php echo ($i%2) == 0 ? 'odd' : ''; ?>">
    		<div class="title-boxsp">
    			<h2><?php echo $each->name; ?></h2>
    			<a href="<?php echo base_url($linkViewAll . '/' . $each->link_rewrite); ?>">Xem toàn bộ</a>
    			<div class="cl"></div>
    		</div>
    		<div class="main-boxsp">
                <?php for ($j = 0; $j < 3; $j++) : ?>
                    <?php
                        $nameProduct = $eachProductList[$j]->producer.' '.$eachProductList[$j]->model;
                        $linkProduct = base_url($eachProductList[$j]->link_rewrite);
                        $linkImageProduct = 'files/logo/ads/'.$eachProductList[$j]->logo;
                        $priceNew = $eachProductList[$j]->price;
                    ?>
                    <?php if($j==0) : ?>
        			<div class="main-boxsp-large">
        				<a href="<?php echo $linkProduct; ?>"><img src="<?php echo image($linkImageProduct, 'product_70_135'); ?>" alt="<?php echo $nameProduct; ?>"></a>
        				<div class="name-and-price">
        					<a href="<?php echo $linkProduct; ?>" title="<?php echo $nameProduct; ?>"><?php echo $nameProduct; ?></a>
        					<p>Giá: <span><?php echo number_format($priceNew, "0", ",", "."); ?> đ</span></p>
        				</div>
        				<div class="absolute pr-news">Mới</div>
        			</div>
                    <?php else: ?>
        			<div class="main-boxsp-small">
        				<a href="<?php echo $linkProduct; ?>"><img src="<?php echo image($linkImageProduct, 'product_60_95'); ?>" alt="<?php echo $nameProduct; ?>"></a>
        				<div class="name-and-price">
        					<a href="<?php echo $linkProduct; ?>" title="<?php echo $nameProduct; ?>"><?php echo $nameProduct; ?></a>
        					<p>Giá: <span><?php echo number_format($priceNew, "0", ",", "."); ?> đ</span></p>
        				</div>
        			</div>
                    <?php endif; ?>
                <?php endfor; ?>
                <div class="cl"></div>
    		</div>
    	</div>
        <?php
                    endif;
                endforeach;
            endif;
        ?>
        <!--
    	<div class="boxsp odd">
    		<div class="title-boxsp">
    			<h2>Lg</h2>
    			<a href="#">Xem toàn bộ</a>
    			<div class="cl"></div>
    		</div>
    		<div class="main-boxsp">
    			<div class="main-boxsp-large">
    				<a href=""><img src="<?php echo image("/assets/images/lg-g4-vung-tau.png", 'product_70_135'); ?>"></a>
    				<div class="name-and-price">
    					<a href="">Samsung galaxy S5 New Edition</a>
    					<p>Giá: <span>4.000.000 đ</span></p>
    				</div>
    				<div class="absolute pr-news">Mới</div>
    			</div>
    			<div class="main-boxsp-small">
    				<img src="<?php echo image("/assets/images/lg-g4-vung-tau.png", 'product_60_95'); ?>">
    				<div class="name-and-price">
    					<a href="">Samsung galaxy S5 New Edition</a>
    					<p>Giá: <span>4.000.000 đ</span></p>
    				</div>
    			</div>
    			<div class="main-boxsp-small">
    				<img src="<?php echo image("/assets/images/lg-g4-vung-tau.png", 'product_60_95'); ?>">
    				<div class="name-and-price">
    					<a href="">Samsung galaxy S5 New Edition</a>
    					<p>Giá: <span>4.000.000 đ</span></p>
    				</div>
    			</div>
    			<div class="cl"></div>
    		</div>
    	</div>
    	<hr>
    	<div class="boxsp">
    		<div class="title-boxsp">
    			<h2>Samsung</h2>
    			<a href="#">Xem toàn bộ</a>
    			<div class="cl"></div>
    		</div>
    		<div class="main-boxsp">
    			<div class="main-boxsp-large">
    				<a href=""><img src="<?php echo image("/assets/images/lg-g4-vung-tau.png", 'product_70_135'); ?>"></a>
    				<div class="name-and-price">
    					<a href="">Samsung galaxy S5 New Edition</a>
    					<p>Giá: <span>4.000.000 đ</span></p>
    				</div>
    				<div class="absolute pr-news">Mới</div>
    			</div>
    			<div class="main-boxsp-small">
    				<img src="<?php echo image("/assets/images/lg-g4-vung-tau.png", 'product_60_95'); ?>">
    				<div class="name-and-price">
    					<a href="">Samsung galaxy S5 New Edition</a>
    					<p>Giá: <span>4.000.000 đ</span></p>
    				</div>
    			</div>
    			<div class="main-boxsp-small">
    				<img src="<?php echo image("/assets/images/lg-g4-vung-tau.png", 'product_60_95'); ?>">
    				<div class="name-and-price">
    					<a href="">Samsung galaxy S5 New Edition</a>
    					<p>Giá: <span>4.000.000 đ</span></p>
    				</div>
    			</div>
    			<div class="cl"></div>
    		</div>
    	</div>
    	<div class="boxsp odd">
    		<div class="title-boxsp">
    			<h2>Lg</h2>
    			<a href="#">Xem toàn bộ</a>
    			<div class="cl"></div>
    		</div>
    		<div class="main-boxsp">
    			<div class="main-boxsp-large">
    				<a href=""><img src="<?php echo image("/assets/images/lg-g4-vung-tau.png", 'product_70_135'); ?>"></a>
    				<div class="name-and-price">
    					<a href="">Samsung galaxy S5 New Edition</a>
    					<p>Giá: <span>4.000.000 đ</span></p>
    				</div>
    				<div class="absolute pr-news">Mới</div>
    			</div>
    			<div class="main-boxsp-small">
    				<img src="<?php echo image("/assets/images/lg-g4-vung-tau.png", 'product_60_95'); ?>">
    				<div class="name-and-price">
    					<a href="">Samsung galaxy S5 New Edition</a>
    					<p>Giá: <span>4.000.000 đ</span></p>
    				</div>
    			</div>
    			<div class="main-boxsp-small">
    				<img src="<?php echo image("/assets/images/lg-g4-vung-tau.png", 'product_60_95'); ?>">
    				<div class="name-and-price">
    					<a href="">Samsung galaxy S5 New Edition</a>
    					<p>Giá: <span>4.000.000 đ</span></p>
    				</div>
    			</div>
    			<div class="cl"></div>
    		</div>
    	</div>
    -->
	<!--
	<?php 
		$index = 1;
		for($i=0; $i < count($spBanChay); $i++) {
			if($i % 3 == 0) {
				echo '<div class="sreensp1"  align="center" style="width:620px; margin-left:30px;  float:left; margin-bottom:15px;">';
			}
	?>
		<div class="boxsp">
	        <div class="sp3"><a href="<?php echo base_url($spBanChay[$i]->link_rewrite);?>"><img alt="<?php echo $spBanChay[$i]->producer . ' ' . $spBanChay[$i]->model?>" src="<?php echo base_url(PARTNER_LOGO. '/ads/' . $spBanChay[$i]->logo)?>" /></a></div>
			<div style="float:right;" class="boxsale">
			 	<?php if($spBanChay[$i]->sap_ve == 1) {?><a href="<?php echo base_url($spBanChay[$i]->link_rewrite);?>"><div class="gift1"></div></a><?php }?>
				<?php if($spBanChay[$i]->moi_ve == 1) {?><a href="<?php echo base_url($spBanChay[$i]->link_rewrite);?>"><div class="gift2"></div></a><?php }?>
				<?php if($spBanChay[$i]->gia_tot == 1) {?><a href="<?php echo base_url($spBanChay[$i]->link_rewrite);?>"><div class="gift3"></div></a><?php }?>
				<?php if($spBanChay[$i]->qua_tang == 1) {?><a href="<?php echo base_url($spBanChay[$i]->link_rewrite);?>"><div class="gift"></div></a><?php }?>
			</div>
			<div class="titlesp">
				<a href="<?php echo base_url($spBanChay[$i]->link_rewrite);?>"><p align="center" style=" margin-top:-20px;width:163px;"><?php echo $spBanChay[$i]->producer . ' ' . $spBanChay[$i]->model?></p></a>
					 
			</div>
			<?php if($spBanChay[$i]->gia_cu != 0 && $spBanChay[$i]->gia_cu != '' && $spBanChay[$i]->gia_cu != null) {?><div class="pricespold" align="center"><?php echo number_format($spBanChay[$i]->gia_cu,"0",",",".");?> VNÐ</div><?php }?>
			<p class="pricespnew" align="center" style=""><?php echo number_format($spBanChay[$i]->price,"0",",",".");?> VN&#272;</p>  
		</div>
	<?php 
		if($i % 3 == 2 || $i == count($spBanChay)-1) {
			echo '</div>';
		}
		else {
			echo '<div class="line"></div>';
		}
	}
	?>
	-->
	</div>
</div>