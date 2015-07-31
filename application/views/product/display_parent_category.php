<?php
if (isset($childrenCategories)) {
    foreach ($childrenCategories as $each) {
        $eachProductList = $each->productList;
        if (count($eachProductList) > 0) {
            ?>
            <!--sp mobile-->
            <div class="allboxsp1" style="float:left; border:1px #d1d1d1 solid; padding-top:5px; margin-bottom:10px;">
                <h1><p style="font-weight:bold; font-size:16px; margin-bottom:3px; margin-left:20px; color:#00619f;"><?php echo $each->name; ?></p></h1>
                <div class="title1" style="background-color:#00619f; width:650px; height:3px; margin-bottom:20px; float:left;"></div>
                <div class="spbanchay">
                    <?php
                    $index = 1;
                    for ($i = 0; $i < count($eachProductList); $i++) {
                        if ($i % 3 == 0) {
                            echo '<div class="sreensp1" align="center" style="width:620px; margin-left:30px;  float:left; margin-bottom:15px;">';
                        }
                        ?>
                        <div class="boxsp">
                            <div class="sp3"><a href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>"><img
                                        alt="<?php echo $eachProductList[$i]->producer . ' ' . $eachProductList[$i]->model ?>"
                                        src="<?php echo base_url(PARTNER_LOGO . '/ads/' . $eachProductList[$i]->logo) ?>"/></a>
                            </div>
                            <div style="float:right;" class="boxsale">
                                <?php if ($eachProductList[$i]->sap_ve == 1) { ?><a
                                    href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>">
                                        <div class="gift1"></div></a><?php } ?>
                                <?php if ($eachProductList[$i]->moi_ve == 1) { ?><a
                                    href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>">
                                        <div class="gift2"></div></a><?php } ?>
                                <?php if ($eachProductList[$i]->gia_tot == 1) { ?><a
                                    href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>">
                                        <div class="gift3"></div></a><?php } ?>
                                <?php if ($eachProductList[$i]->qua_tang == 1) { ?><a
                                    href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>">
                                        <div class="gift"></div></a><?php } ?>
                            </div>
                            <div class="titlesp">
                                <a href="<?php echo base_url($eachProductList[$i]->link_rewrite); ?>"><p align="center" style=" margin-top:-20px;width:163px;"><?php echo $eachProductList[$i]->producer . ' ' . $eachProductList[$i]->model ?></p>
                                </a>
                            </div>
                            <?php if ($eachProductList[$i]->gia_cu != 0 && $eachProductList[$i]->gia_cu != '' && $eachProductList[$i]->gia_cu != null) { ?>
                                <div class="pricespold"
                                     align="center"><?php echo number_format($eachProductList[$i]->gia_cu, "0", ",", "."); ?>
                                VNÐ</div><?php } ?>
                            <p class="pricespnew" align="center"
                               style=""><?php echo number_format($eachProductList[$i]->price, "0", ",", "."); ?> VN&#272;</p>
                        </div>
                        <?php
                        if ($i % 3 == 2 || $i == count($eachProductList) - 1) {
                            echo '</div>';
                        } else {
                            echo '<div class="line"></div>';
                        }
                    }
                    ?>
                    <div class="line7"></div>
                    <div class="xemtatca"><a href="<?php echo base_url($linkViewAll . '/' . $each->link_rewrite); ?>">
                            <p style="width:100px; height:25px;margin-left:550px; margin-top:5px;">>> Xem t&#7845;t c&#7843; </p>
                        </a>
                    </div>
                </div>
            </div>
        <?php
        }
    }
}
?>