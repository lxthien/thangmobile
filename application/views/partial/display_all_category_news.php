<!--ttin-->	
	 <div class="allboxsp1" style="float:left;">
	        <p style="font-weight:bold; font-size:16px; margin-bottom:3px; margin-left:20px; color:#00619f;">Th&ocirc;ng tin c&ocirc;ng ngh&#7879; </p>
	        <div class="title1" style="background-color:#00619f; width:650px; height:3px;  float:left;"></div>
	    <div class="ttincongghe">

<?php 

if (isset($two_tincongnghe)) {

    foreach ($two_tincongnghe as $item):

        $date_post = new DateTime($item->date_add);

?>

		<div class="sreenttin" style="width: 648px; height: 105px; float: left; margin-top: 10px;">

			<div class="hinhcongnghe">
				<img src="<?php echo image($item->news_icon, 'news_90_100'); ?>" />
			</div>

			<div class="titlecongnghe">

				<a href="<?php echo base_url('tin-tuc/thong-tin-cong-nghe/'.$item->id_news.'-'.$item->link_rewrite. URL_TRAIL); ?>">

					<p style="width: 500px; float: left; height: 20px;"><?php echo $item->title; ?></p>

				</a>

			</div>

			<div class="noidungcongnghe" style="margin-left: 10px; float: left; width: 490px; height: 100px;">

				<p align="justify">

					<?php echo $item->content; ?>

				</p>

			</div>

		</div>

		<div class="line3"></div>

		<?php

    endforeach;

}

?>		                

		

		         

			<div class="phantrang" style="float:left; width:110px; margin-left:575px;  height:20px;">

						   <div class="back">

						   <a href="<?php echo base_url('tin-tuc/thong-tin-cong-nghe');?>"><p>Xem tất cả</p></a> 		 

						   </div>  

		    </div>				   		

      </div>

	   </div>

	  <!--end ttin--> 

	  <div class="allboxsp1" style="float:left;">

	        <p style="font-weight:bold; font-size:16px; margin-bottom:3px; margin-left:20px; color:#00619f;">Kinh nghi&#7879;m s&#7917; d&#7909;ng  </p>

	        <div class="title1" style="background-color:#00619f; width:650px; height:3px;  float:left;"></div>

	    <div class="ttincongghe">

<?php 

if (isset($two_kinhnghiemsudung)) {

    foreach ($two_kinhnghiemsudung as $item):

        $date_post = new DateTime($item->date_add);

?>

		<div class="sreenttin" style="width: 648px; height: 105px; float: left; margin-top: 10px;">

			<div class="hinhcongnghe">
				<img src="<?php echo image($item->news_icon, 'news_90_100'); ?>" />
			</div>

			<div class="titlecongnghe">

				<a href="<?php echo base_url('tin-tuc/kinh-nghiem-su-dung/'.$item->id_news.'-'.$item->link_rewrite. URL_TRAIL); ?>">

					<p style="width: 500px; float: left; height: 20px;"><?php echo $item->title; ?></p>

				</a>

			</div>

			<div class="noidungcongnghe" style="margin-left: 10px; float: left; width: 490px; height: 100px;">

				<p align="justify">

					<?php echo $item->content; ?>

				</p>

			</div>

		</div>

		<div class="line3"></div>

		<?php

    endforeach;

}

?>	

			<div class="phantrang" style="float:left; width:110px; margin-left:575px;  height:20px;">

						   <div class="back">

						   <a href="<?php echo base_url('tin-tuc/kinh-nghiem-su-dung');?>"><p>Xem tất cả</p></a> 

						   </div>  

		    </div>				   		

      </div>

	   </div>

