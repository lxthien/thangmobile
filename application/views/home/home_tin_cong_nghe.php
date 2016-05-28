<div class="sreennew" style="width:980px;  margin-top:1px; float:left;">
    <h1 class="h1-title">CÓ THỂ BẠN QUAN TÂM</h1>
    <div class="line-title">
        <div class="left-30">&nbsp;</div>
        <div class="left-70">&nbsp;</div>
    </div>
    <div class="boxnew" style="width:980px; float:left;">
        <?php
            for ($i = 0; $i < count($tinCoTheQuanTam); $i++) {
            $divClass = 'new2';
            if ($i % 2 == 0) {
                echo '<div class="sreennew1" style="width:980px; float:left; margin-bottom:12px;">';
                $divClass = 'new1';
            }
            $eachNews = $tinCoTheQuanTam[$i]; ?>
            <div class="<?php echo $divClass; ?>">
                <div class="hinhnew">
                    <a href="<?php echo $eachNews['link_rewrite']; ?>" title="<?php echo $eachNews['title'];?>">
                        <img alt="<?php echo $eachNews['title']; ?>" src="<?php echo image($eachNews['news_icon'], 'news_150_90'); ?>"/>
                    </a>
                </div>
                <div class="sreentitlenew" style="float:left; margin-left:10px; width:320px; height: 90px;">
                    <div class="contentnew">
                        <a href="<?php echo $eachNews['link_rewrite']; ?>" title="<?php echo $eachNews['title'];?>">
                            <p style="float:left;"><?php echo $eachNews['title'];?></p>
                        </a>
                    </div>
                    <div class="noidung" style="margin-top:5px; float:left;">
                        <p align="justify"><?php echo $eachNews['content'];?></p>
                    </div>
                    <div class="sreenchitiet" style="float:right; width:60px; height:20px;">
                        <p class="chitiet"><a href="<?php echo $eachNews['link_rewrite']; ?>">Chi tiết</a></p>
                    </div>
                </div>
                <div class="line2" style="margin-top: 12px;"></div>
            </div>    <?php if ($i % 2 == 1 || $i == count($tinCoTheQuanTam) - 1) {
                echo '</div>';
            }
        }
        ?>
    </div>
</div>