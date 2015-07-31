<!--box download -->
<?php $downloadLinks = array('1'=>'mot','2'=>'hai');
?>
<div class="framedownload" style="width:660px; height:142px; float:left; margin-top:6px;">
    <?php foreach ($downloadLinks as $key => $value): ?>
    <div class="boxdownload">
        <div class="picdownload"><img src="<?php echo RES_PATH;?>hinh/10.png" /></div>
        <p  class="contentdownload">FPT MP4</p>
        <p class="buttondownload"><a href="#"></a></p>		   
    </div>        		
    <?php endforeach; ?>
</div>