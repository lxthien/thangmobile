<div class="sreennew" style="width:907px;  margin-top:1px; float:left;">
    <div class="titlenew" style="background-image:url(assets/images/new.png); width:907px; height:27px; float:left;"><p
            style="color:#FFFFFF; font-size:16px; margin-left:8px; margin-top:3px; font-weight:bold;">Tin c&ocirc;ng ngh&#7879; </p>
    </div>
    <div class="boxnew"
         style=" background-color:#f8f8f8; padding-bottom:10px; width:905px; margin-bottom:20px; float:left; border:1px #cdced1 solid;">
        <!-- each pair -->      <?php       for ($i = 0; $i < count($tinCongNghe); $i++) {
            $divClass = 'new2';
            if ($i % 2 == 0) {
                echo '<div class="sreennew1" style="width:905px; float:left; margin-top:15px;">';
                $divClass = 'new1';
            }
            $eachNews = $tinCongNghe[$i]; ?>
            <div class="<?php echo $divClass; ?>">
                <div class="hinhnew">
                    <a href="<?php echo $eachNews['link_rewrite']; ?>">
                        <img alt="<?php echo $eachNews['title']; ?>" src="<?php echo image($eachNews['news_icon'], 'news_93_90'); ?>"/></a>
                </div>
                <div class="sreentitlenew" style="float:left; margin-left:5px; width:310px;">
                    <div class="icon2"></div>
                    <div class="contentnew"><a href="<?php echo $eachNews['link_rewrite']; ?>"><p
                                style="margin-top:6px; float:left; margin-left:5px; width:290px;"><?php echo $eachNews['title'];?></p>
                        </a></div>
                    <div class="noidung" style="width:305px; margin-top:5px; float:left;"><p align="justify"
                                                                                             style="width:305px;"><?php echo $eachNews['content'];?></p>
                    </div>
                    <div class="sreenchitiet" style="float:left; margin-left:250px; width:60px; height:20px;"><p
                            class="chitiet"><a href="<?php echo $eachNews['link_rewrite']; ?>"> >> Chi ti&#7871;t </a>
                        </p></div>
                </div>
                <div class="line2"></div>
            </div>    <?php if ($i % 2 == 1 || $i == count($tinCongNghe) - 1) {
                echo '</div>';
            }
        }    ?>        <!-- each pair -->      </div>
</div>