<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
<div class="hotline" style="width:200px ; float:left; margin-bottom:20px;">
    <p  class="titlehotrotructuyen" style="text-align:left;"> H&#7895; tr&#7907; tr&#7921;c tuy&#7871;n </p>
    <p class="tabhotline"></p>
    <?php
    foreach ($contact as $eachContact) {
        ?>
        <div class='framehotline'>
            <p class='icon3'></p>
            <div class='contenthotline'>
                <span class="style4"><?php echo $eachContact->position . ':' ?></span> <span class="style2"> <?php echo $eachContact->phone; ?> </span>                
            </div>
            <?php if (isset($eachContact->yahoo) && strlen($eachContact->yahoo) > 0): ?>
            <div class="yahoo">
                <a href="ymsgr:sendim?<?php echo $eachContact->yahoo; ?>" title="Gởi tin nhắn cho <?php echo $eachContact->name; ?>">
                    <img border=0 src="http://opi.yahoo.com/online?u=<?php echo $eachContact->yahoo; ?>&m=g&t=1&l=us"/>
                </a>                
            </div>
            <?php endif;?>
            
            <?php if (isset($eachContact->skype) && strlen($eachContact->skype) > 0): ?>
                <div class="skype">
                    <a href="skype:<?php echo $eachContact->skype; ?>?call"><img src="http://mystatus.skype.com/bigclassic/<?php echo $eachContact->skype; ?>" style="border: medium none; margin-left: 40px; margin-top: -5px;width: 75px; height: 22px" alt="<?php echo $eachContact->name; ?>'s status" /></a>
                </div>
            <?php endif; ?>
        </div>            
        <?php
        /* echo "<div class='framehotline'>";
          echo "<p class='icon3'></p>";
          echo "<div class='contenthotline'><img src='".RES_PATH."images/hottline.png' width='184' height='20' /></div>";
          echo "<a href='ymsgr:sendIM?".$item['yahoo']."'> <p class='yahoo'></p></a>";
          echo "<a href='skype:".$item['skype']."'><p class='skype'></p></a>";
          echo "</div>   <p class='line3' style='background:url(image/line3.png); height:1px; width:155px; float:left; margin:10px 0px 0px 20px;'></p>"; */
    }
    ?>
</div>
<!--end hotline-->	