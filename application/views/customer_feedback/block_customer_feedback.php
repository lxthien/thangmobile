<!--y kien khach hang-->
<?php if (isset($feedbacks)) : ?>
    <script src="<?php echo RES_PATH ?>js/sliding.form.js"></script>

    <!--wrapper-->
    <div id="ykien" style="width:200px ; float:left; margin-bottom:20px;">
        <p  class="titleykien" style="text-align:left;">&Yacute; ki&#7871;n kh&aacute;ch h&agrave;ng </p>
        <p class="tabykien"></p>
        <div id="steps" >
            <form id="formElem" name="formElem" action="" method="post">
                <?php foreach ($feedbacks as $feedback): ?>
                    <div class="step">
                        <p  style="text-align:justify; font-weight:700; font-size:12px; color:#666666;overflow-y: hidden;">
                            "<?php echo $feedback->content; ?>"</p>
                        <p style="font-weight:bold; text-align:right;"> <?php echo $feedback->customer_name; ?></p>
                        <p style="text-align:right; color:#999999;"><?php echo $feedback->designation; ?> </p>

                    </div>                
                <?php endforeach; ?> 
            </form>
        </div>        
        <div id="navigation">
            <ul>
                <?php
                $fb_nr = count($feedbacks);
                if ($fb_nr > 0):
                    $fb_nr = $fb_nr - 1;                
                ?>                
                <li class="nextykien selected"><a href="#"></a></li>
                <?php for ($i = 0; $i < $fb_nr; $i++) : ?>
                    <li class="nextykien">
                        <a href="#"></a>
                    </li>
                    <?php
                endfor;                ?>                    
            <?php endif;
            ?>    
        </ul>
    </div>
</div>
<?php endif; ?>
<!--end y kien khach hang-->