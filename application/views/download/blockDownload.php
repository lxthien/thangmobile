<!--ONLINE-->
<div class="sreenonline" style="width:237px;  float:left;">
    <div class="toponline">
        <p align="center" style="color:#424242; font-size:16px; margin-top:35px; font-weight:bold; margin-bottom:3px;">H&#7895;
            tr&#7907; online </p>
    </div>
    <div class="midonline">
        <?php
        $i = 0;
        foreach ($contact as $eachContact) {
            $i++;
            if (($i % 2) == 1) {
                $css = 'margin-left:8px; width:111px; height:26px; float:left;"';
            } else {
                $css = 'width:111px; height:26px; float:left;"';
            }
            ?>
            <div class="yahoo" style="<?php echo $css; ?>">
                <a href="ymsgr:sendim?<?php echo $eachContact->yahoo; ?>"
                   title="Gởi tin nhắn cho <?php echo $eachContact->name; ?>">
                    <img width=111 height="23" border=0
                         src="http://opi.yahoo.com/online?u=<?php echo $eachContact->yahoo; ?>&m=g&t=2&l=us"/>
                </a>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="botonline"></div>
</div>
<!--END ONLINE-->
<!--box download -->
<?php if (isset($latest_downloads)) : ?>
    <div class="sreendownload" style=" width:237px; margin-bottom:20px; float:left; margin-top:5px;">
        <p align="center" style="color:#424242; font-size:16px; font-weight:bold; margin-bottom:3px;">Download ph&#7847;n
            m&#7873;m </p>
        <div class="titledownload" style="background-color:#b2b2b2; width:224px; margin-bottom:5px; margin-left:7px; height:5px; float:left;"></div>
        <div class="boxdownload" style="background-color:#FFFFFF; float:left; width:237px;">
            <div class="1" style=" height:212px; background:url(<?php echo base_url("assets/images/shadow1.png"); ?>); margin-top:-10px; float:left; width:7px;"></div>
            <div class="3" style="background-color:#FFFFFF; float:left; width:220px;">
                <?php foreach ($latest_downloads as $download):
                    //$download->link_rewrite = 'tai-ve/phan-mem/'.$download->id.'-'.$download->link_rewrite.URL_TRAIL;
                    ?>
                    <div class="sreencontentdownload" style="width:220px; height:35px; float:left;">
                        <div class="icon"></div>
                        <div class="contentdt">
                            <a href="<?php echo base_url($download->link_rewrite); ?>">
                                <p style="width:190px; float:left; height:25px; margin-top:5px; margin-left:1px;"><?php echo $download->name; ?></p>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="2" style=" height:212px;background:url(<?php echo base_url("assets/images/shadow2.png"); ?>); margin-top:-10px;  float:right; width:7px;"></div>
        </div>
    </div>
<?php
endif;
?>
<!--end box download -->
<!--box ban nen xem -->
<?php
/*echo '<pre>';
print_r($you_should_watch);
die;
*/?>
<?php if (isset($you_should_watch)) : ?>
    <div class="sreendownload" style=" width:237px; margin-bottom:20px; float:left; margin-top:5px;">
        <p align="center" style="color: #0B63FF; font-size:16px; font-weight:bold; margin-bottom:3px;">Bạn nên xem</p>
        <div class="titledownload" style="background-color:#b2b2b2; width:224px; margin-bottom:7px; margin-left:7px; height:5px; float:left;"></div>
        <div class="boxdownload" style="background-color:#FFFFFF; float:left; width:237px;">
            <div class="3" style="background-color:#FFFFFF; float:left; width:220px;">
                <?php foreach ( $you_should_watch as $_watch ): ?>
                    <div class="sreencontentdownload" style="width:230px; height:90px; float:left; margin-bottom: 0px; margin-left: 7px;">
                        <div class="imges-block-you-see"><a href="<?php echo base_url('tin-tuc/kinh-nghiem-su-dung/'.$_watch->id_news.'-'.$_watch->link_rewrite.'.html'); ?>">
                            <img src="<?php echo image($_watch->news_icon, 'news_80_80'); ?>" alt=""/></a>
                        </div>
                        <a class="link-block-you-see" href="<?php echo base_url('tin-tuc/kinh-nghiem-su-dung/'.$_watch->id_news.'-'.$_watch->link_rewrite.'.html'); ?>">
                            <p style="width:140px; float:left; height:25px; margin-top:0px; margin-left:4px;"><?php echo $_watch->title; ?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php
endif;
?>
<!--box ban nen xem -->
<style type="text/css">
    .imges-block-you-see{
        float: left;
        width: 80px;
        height: 90px;
    }
    .link-block-you-see{
        float: left;
        width: 80px;
        height: 80px;
        color: #333333;
    }
    .link-block-you-see:hover{
        color: #00619f;
    }
</style>