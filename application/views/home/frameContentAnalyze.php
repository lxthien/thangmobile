<?php
if (isset($frameContentAnalyze) && sizeof($frameContentAnalyze)>0):
$firstItem = $frameContentAnalyze[0];
unset($frameContentAnalyze[0]);
?>
<div class="framepicpantich">
    <div class="picphantich"><img src="<?php echo $firstItem['news_icon'];?>" width="76" height="85" /></div>
    <p style="margin-top:10px; color:#4e4e4e; text-align:left; font-weight:bold">
        <a href="<?php echo $firstItem['link_rewrite']; ?>"><?php echo $firstItem['title']; ?></a>
    </p>
    <p style="margin-top:2px; color:#4e4e4e; text-align:left; font-weight: regular"><?php echo $firstItem['content']; ?></p>
    <p class="detai2"><a href="<?php echo $firstItem['link_rewrite']; ?>">Chi tiết</a></p>
</div>

<?php foreach ($frameContentAnalyze as $item):?>
<div class="formbaiviet">
    <p  class="icon3" style="background:url(assets/images/icon9.png); width:9px; height:12px; float:left;"></p>
    <?php $posted_date = new DateTime($item['date_add']);
//    var_dump(trim($item['content']));
//    die;
//    $item["f_title"] = urlencode($item["f_title"]);
    $item["f_title"] = str_replace('"', '&#34',$item["f_title"]);    
//     &#34;
    ?>
    <p class="baiviet"> <a href="<?php echo $item['link_rewrite']; ?>" title ="<?php echo "<p class='news_title_tip'><strong>".$item["f_title"]."</strong></p><img border='0' width ='80' height='60' alt='".$item["f_title"]."' src='".$item["news_icon"]."' class='imgleft newsphoto_med'><div class='news_excerpt_text'>	<p>".$item["content"]."</p></div>";?>"><?php echo text_cut($item['title'], 45);?></a> <span class='posted'><?php echo date_format($posted_date,'d.m.Y');?></span></p>
</div>
<?php endforeach; ?>
<?php endif; ?>