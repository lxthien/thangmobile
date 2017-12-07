<div class="allboxsp2">
	<h1 class="h1-title">HÀNG MỚI VỀ </h1>
	<div class="line-title">
		<div class="left-30">&nbsp;</div>
		<div class="left-70">&nbsp;</div>
	</div>
    <div class="spbanchay">
        <div class="grid row">
            <?php
                for($i=0; $i < count($productsHomepage); $i++) {
                    $imgUrl = image('files/logo/ads/'.$productsHomepage[$i]->logo, 'product_110_180');
            ?>
            <div class="col-01 col-md-4">
                <a href="<?php echo base_url($productsHomepage[$i]->link_rewrite);?>"><img src="<?php echo $imgUrl; ?>"></a>
                <div class="name-and-price">
                    <a href="<?php echo base_url($productsHomepage[$i]->link_rewrite);?>"><?php echo $productsHomepage[$i]->producer . ' ' . $productsHomepage[$i]->model?></a>
                    <p class="note"><?php echo $productsHomepage[$i]->note != '' ? $productsHomepage[$i]->note : '&nbsp;'; ?></p>
                    <p class="price">Giá: <span><?php echo number_format($productsHomepage[$i]->price,"0",",","."); ?> đ</span></p>
                </div>
                <div class="status-product">
                    <?php if ($productsHomepage[$i]->moi_ve == 1): ?>
                    <div class="pr-icon pr-news">Bán chạy</div>
                    <?php endif; ?>
                    <?php if ($productsHomepage[$i]->gia_tot == 1): ?>
                    <div class="pr-icon pr-gs">Giá sốc</div>
                    <?php endif; ?>
                    <?php if ($productsHomepage[$i]->qua_tang == 1): ?>
                    <div class="pr-icon pr-qt">Quà tặng</div>
                    <?php endif; ?>
                </div>
            </div>
            <?php } ?>
        </div>
	</div>
</div>