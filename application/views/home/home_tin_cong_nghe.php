<div class="sreennew" style="width:980px;  margin-top:1px; float:left;">
    <p style="font-weight:bold; font-size:16px; margin-bottom:3px; color:#424242;">CÓ THỂ BẠN QUAN TÂM</p>
    <div class="title1" style="background-color:#cccccc; width: 100%; height:2px; margin-bottom:15px; float:left;"></div>
    <div class="boxnew" style="width:980px; float:left;">
        <?php
            for ($i = 0; $i < count($tinCongNghe); $i++) {
            $divClass = 'new2';
            if ($i % 2 == 0) {
                echo '<div class="sreennew1" style="width:980px; float:left; margin-bottom:15px;">';
                $divClass = 'new1';
            }
            $eachNews = $tinCongNghe[$i]; ?>
            <div class="<?php echo $divClass; ?>">
                <div class="hinhnew">
                    <a href="<?php echo $eachNews['link_rewrite']; ?>">
                        <img alt="<?php echo $eachNews['title']; ?>" src="<?php echo image($eachNews['news_icon'], 'news_93_90'); ?>"/>
                    </a>
                </div>
                <div class="sreentitlenew" style="float:left; margin-left:10px; width:360px; height: 90px;">
                    <div class="contentnew">
                        <a href="<?php echo $eachNews['link_rewrite']; ?>">
                            <p style="margin-top:6px; float:left;"><?php echo $eachNews['title'];?></p>
                        </a>
                    </div>
                    <div class="noidung" style="margin-top:5px; float:left;">
                        <p align="justify"><?php echo $eachNews['content'];?></p>
                    </div>
                    <div class="sreenchitiet" style="float:right; width:60px; height:20px;">
                        <p class="chitiet"><a href="<?php echo $eachNews['link_rewrite']; ?>"> >> Chi tiết</a></p>
                    </div>
                </div>
                <div class="line2"></div>
            </div>    <?php if ($i % 2 == 1 || $i == count($tinCongNghe) - 1) {
                echo '</div>';
            }
        }
        ?>
    </div>
</div>