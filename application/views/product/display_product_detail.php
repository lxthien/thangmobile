<link rel="stylesheet" type="text/css" media="screen" href="<?php echo RES_PATH; ?>css/prettyPhoto.css"/>
<script type="text/javascript" src="<?php echo RES_PATH; ?>js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo RES_PATH; ?>js/functions.js"></script>
<div class="allboxsp1" style="float:left;">
    <h3><p style="font-weight:bold; font-size:16px; margin-bottom:3px; margin-left:20px; color:#00619f;">Th&ocirc;ng tin chi ti&#7871;t </p></h3>
    <div class="title1" style="background-color:#00619f; width:650px; height:3px;  float:left;"></div>
    <div class="ttinsanpham">
        <div class="leftthongtin">
            <div class="boxhinhlonsp"><img alt="<?php echo $site_meta_data['meta_title']; ?>" src="<?php echo base_url(PARTNER_LOGO . '/ads/' . $viewProduct->logo); ?>"/></div>
            <!--<div class="sreenhinhanhsanpham">
                <?php
/*                if (isset($product_images)){
                    foreach ($product_images as $eachImage){
                        */?>
                        <div class="sanpham">
                            <a href="<?php /*echo base_url(UPLOAD_DIR . '/' . $eachImage->name); */?>" rel="prettyPhoto[gallery1]">
                                <img alt="<?php /*echo $site_meta_data['meta_title']; */?>" src="<?php /*echo base_url(THUMBNAILS . '/' . $eachImage->name); */?>"/>
                            </a>
                        </div>
                    <?php
/*                    }
                }
                */?>
            </div>-->
        </div>
        <div class="rightthongtin">
            <h1 style="font-size:20px;font-weight:bold; color:#00609e"><?php echo $viewProduct->model; ?></h1>
            <?php if ($viewProduct->gia_cu != 0 && $viewProduct->gia_cu != '' && $viewProduct->gia_cu != null) { ?>
                <p style="font-size:15px;font-weight:bold; color:#202121; margin-top:10px;">Gi&aacute; cũ: <span
                        style='text-decoration:line-through'><?php echo number_format($viewProduct->gia_cu, "0", ",", "."); ?>
                        VN&#272;</span></p>
            <?php } ?>
            <p style="font-size:15px;font-weight:bold; color:#202121; margin-top:10px;">Gi&aacute;: <span
                    class="giasanphamred" style="font-size: 17px;"><?php echo number_format($viewProduct->price, "0", ",", "."); ?>
                    VN&#272;</span></p>
            <?php if ($viewProduct->product_category_id < 11 || $viewProduct->product_category_id > 16) { ?>

            <?php } ?>
            <p style="font-size:14px; color:#202121; margin-top:10px;"><b>T&igrave;nh tr&#7841;ng:</b> <span
                    class="chitietsanphamblue"><?php echo $viewProduct->status; ?> </span></p>
            <?php if ($viewProduct->accesory != '' && $viewProduct->accesory != null) { ?>
                <p style="font-size:14px; color:#202121; margin-top:10px;"><b>Ph&#7909; ki&#7879;n:</b> <span
                        class="chitietsanphamblue"><?php echo $viewProduct->accesory; ?>  </span></p>
            <?php } ?>
            <p style="font-size:14px; color:#202121; margin-top:10px;"><b>Th&#7901;i gian b&#7843;o h&agrave;nh:</b>
                <span class="chitietsanphamblue"><?php echo $viewProduct->time_warranty; ?></span></p>
            <?php if ($viewProduct->accesory != '' && $viewProduct->accesory != null && strlen($viewProduct->sale_off) > 0) { ?>
                <p style="font-size:14px; color:#202121; margin-top:10px;">
                    <b style="margin-bottom: -5px; display: block;">Khuyến mãi:</b>
                    <span class="chitietsanphamblue"><?php echo '</br>' . nl2br($viewProduct->sale_off); ?></span>
                </p>
            <?php } ?>
        </div>
        <div class="sreenttinchitiet" style="width:648px; padding-bottom:10px; float:left; margin-top:10px;">
            <div class="sreenthongso" style="float:left; width:500px;">
                <div class="thongso"><a href="javascript:void(0);" onclick="showIntroduce();">
                        <p>Gi&#7899;i thi&#7879;u s&#7843;n ph&#7849;m </p>
                    </a>
                </div>
                <p style="float:left; margin-left:5px; margin-right:5px;">|</p>
                <div class="gioithieusp">
                    <a href="javascript:void(0);" onclick="showSpecs();"><p>Th&ocirc;ng s&#7889; k&#7929;
                            thu&#7853;t</p></a>
                </div>
            </div>
            <div class="line5"></div>
            <div id="thongsokithuat" class="noidungthongso"
                 style="display:none; width:605px; margin-top:10px; margin-left:25px; float:left;">
                <p align="justify">
                    <?php echo $viewProduct->description; ?>
                </p>
            </div>
            <div id="gioithieusanpham" class="noidungthongso"
                 style="width:605px; margin-top:10px; margin-left:25px; float:left;  font-size: 15px; line-height: 1.4;">
                <p align="justify">
                    <?php echo $viewProduct->introduction; ?>
                </p>
            </div>
        </div>
        <div class="line7"></div>
        <div class="xemtatca">
            <a href="<?php echo base_url($linkViewAll); ?>">
                <p style="width:100px; height:25px;margin-left:550px; margin-top:5px;">>> Trở lại </p>
            </a>
        </div>
    </div>
</div>
<script>
    function showIntroduce() {
        document.getElementById("gioithieusanpham").style.display = "block";
        document.getElementById("thongsokithuat").style.display = "none";
    }
    function showSpecs() {
        document.getElementById("gioithieusanpham").style.display = "none";
        document.getElementById("thongsokithuat").style.display = "block";
    }
</script>
<!--<script type="text/javascript">
    
    $(document).ready(function(){
        $('.sanpham').each(function(){
            var url_images = $(this).find('img').attr('src');
            if( urlExists( url_images ) != 200 ){
                $(this).remove();
            }
        });
    });

    function urlExists(url){
        var http = jQuery.ajax({
            type:"HEAD",
            url: url,
            async: false
          })
      return http.status;
    }
    
</script>-->