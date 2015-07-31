<?php if (isset($partners)): ?>
    <div class="doitac">
        <div class="titledoitac">
            <h5><p style="color:#FFFFFF; margin-left:38px; margin-top:3px; font-size:16px; font-weight:bold;">&#272;&#7889;i t&aacute;c </p></h5>
        </div>
        <div class="sreenlogo" style="float:left; width:890px; margin-top:10px; margin-left:7px;">
            <?php
                $partner_nr = count($partners);
                if ($partner_nr > 8) {
                    echo '<marquee style="margin-left:5px; margin-right: 3px;"  onmouseover="this.stop();" onmouseout="this.start();">';
                }
            ?>
            <?php foreach ($partners as $partner) : ?>
                <div class="doitac1">
                    <a title="<?php echo $partner->name; ?>" target="_blank" href="<?php echo $partner->url; ?>"><img src="<?php echo base_url(PARTNER_LOGO . '/' . $partner->logo); ?>"/></a>
                </div>
            <?php endforeach; ?>
            <?php
            if ($partner_nr > 8) {
                echo '</marquee>';
            }
            ?>
        </div>
    </div>
<?php endif; ?>