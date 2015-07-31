<?php if( count($productHight) > 0 ): ?>
<div class="allboxsp2"
     style="float:left; border:1px #d1d1d1 solid; padding-top:5px; margin-bottom:10px; margin-top: 30px;">
    <p style="font-weight:bold; font-size:16px; margin-bottom:3px; margin-left:20px; color:#00619f;">Hàng cao cấp</p>
    <div class="title1" style="background-color:#00619f; width:650px; height:3px; margin-bottom:20px; float:left;"></div>
    <div class="spmoi">
        <?php
        $index = 1;
        for ($i = 0; $i < count($productHight); $i++) {
            if ($i % 3 == 0) {
                echo '<div class="sreensp1"  align="center" style="width:620px; margin-left:30px;  float:left; margin-bottom:15px;">';
            }
            ?>
            <div class="boxsp">
                <div class="sp3"><a href="<?php echo base_url($productHight[$i]->link_rewrite); ?>"><img
                            alt="<?php echo $productHight[$i]->producer . ' ' . $productHight[$i]->model ?>"
                            src="<?php echo base_url(PARTNER_LOGO . '/ads/' . $productHight[$i]->logo) ?>"/></a></div>
                <div style="float:right;" class="boxsale">
                    <?php if ($productHight[$i]->sap_ve == 1) { ?><a
                        href="<?php echo base_url($productHight[$i]->link_rewrite); ?>">
                            <div class="gift1"></div></a><?php } ?>
                    <?php if ($productHight[$i]->moi_ve == 1) { ?><a
                        href="<?php echo base_url($productHight[$i]->link_rewrite); ?>">
                            <div class="gift2"></div></a><?php } ?>
                    <?php if ($productHight[$i]->gia_tot == 1) { ?><a
                        href="<?php echo base_url($productHight[$i]->link_rewrite); ?>">
                            <div class="gift3"></div></a><?php } ?>
                    <?php if ($productHight[$i]->qua_tang == 1) { ?><a
                        href="<?php echo base_url($productHight[$i]->link_rewrite); ?>">
                            <div class="gift"></div></a><?php } ?>
                </div>
                <div class="titlesp">
                    <a href="<?php echo base_url($productHight[$i]->link_rewrite); ?>">
                        <p align="center" style=" margin-top:-20px;width:163px;"><?php echo $productHight[$i]->producer . ' ' . $productHight[$i]->model ?></p>
                    </a>
                </div>
                <?php if ($productHight[$i]->gia_cu != 0 && $productHight[$i]->gia_cu != '' && $productHight[$i]->gia_cu != null) { ?>
                    <div class="pricespold"
                         align="center"><?php echo number_format($productHight[$i]->gia_cu, "0", ",", "."); ?>
                    VNÐ</div><?php } ?>
                <p class="pricespnew" align="center"
                   style=""><?php echo number_format($productHight[$i]->price, "0", ",", "."); ?> VN&#272;</p>
            </div>
            <?php
            if ($i % 3 == 2 || $i == count($productHight) - 1) {
                echo '</div>';
            } else {
                echo '<div class="line"></div>';
            }
        }
        ?>
    </div>
</div>
<?php endif; ?>
<?php if( count($productIntermediate) > 0 ): ?>
<div class="allboxsp2"
     style="float:left; border:1px #d1d1d1 solid; padding-top:5px; margin-bottom:10px; margin-top: 30px;">
    <p style="font-weight:bold; font-size:16px; margin-bottom:3px; margin-left:20px; color:#00619f;">Hàng trung cấp</p>
    <div class="title1" style="background-color:#00619f; width:650px; height:3px; margin-bottom:20px; float:left;"></div>
    <div class="spmoi">
        <?php
        $index = 1;
        for ($i = 0; $i < count($productIntermediate); $i++) {
            if ($i % 3 == 0) {
                echo '<div class="sreensp1"  align="center" style="width:620px; margin-left:30px;  float:left; margin-bottom:15px;">';
            }
            ?>
            <div class="boxsp">
                <div class="sp3"><a href="<?php echo base_url($productIntermediate[$i]->link_rewrite); ?>"><img
                            alt="<?php echo $productIntermediate[$i]->producer . ' ' . $productIntermediate[$i]->model ?>"
                            src="<?php echo base_url(PARTNER_LOGO . '/ads/' . $productIntermediate[$i]->logo) ?>"/></a></div>
                <div style="float:right;" class="boxsale">
                    <?php if ($productIntermediate[$i]->sap_ve == 1) { ?><a
                        href="<?php echo base_url($productIntermediate[$i]->link_rewrite); ?>">
                            <div class="gift1"></div></a><?php } ?>
                    <?php if ($productIntermediate[$i]->moi_ve == 1) { ?><a
                        href="<?php echo base_url($productIntermediate[$i]->link_rewrite); ?>">
                            <div class="gift2"></div></a><?php } ?>
                    <?php if ($productIntermediate[$i]->gia_tot == 1) { ?><a
                        href="<?php echo base_url($productIntermediate[$i]->link_rewrite); ?>">
                            <div class="gift3"></div></a><?php } ?>
                    <?php if ($productIntermediate[$i]->qua_tang == 1) { ?><a
                        href="<?php echo base_url($productIntermediate[$i]->link_rewrite); ?>">
                            <div class="gift"></div></a><?php } ?>
                </div>
                <div class="titlesp">
                    <a href="<?php echo base_url($productIntermediate[$i]->link_rewrite); ?>">
                        <p align="center" style=" margin-top:-20px;width:163px;"><?php echo $productIntermediate[$i]->producer . ' ' . $productIntermediate[$i]->model ?></p>
                    </a>
                </div>
                <?php if ($productIntermediate[$i]->gia_cu != 0 && $productIntermediate[$i]->gia_cu != '' && $productIntermediate[$i]->gia_cu != null) { ?>
                    <div class="pricespold"
                         align="center"><?php echo number_format($productIntermediate[$i]->gia_cu, "0", ",", "."); ?>
                    VNÐ</div><?php } ?>
                <p class="pricespnew" align="center"
                   style=""><?php echo number_format($productIntermediate[$i]->price, "0", ",", "."); ?> VN&#272;</p>
            </div>
            <?php
            if ($i % 3 == 2 || $i == count($productIntermediate) - 1) {
                echo '</div>';
            } else {
                echo '<div class="line"></div>';
            }
        }
        ?>
    </div>
</div>
<?php endif; ?>