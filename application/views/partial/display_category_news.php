	

	 <!--ttin-->	

	 <div class="allboxsp1" style="float:left;">

    <p style="font-weight:bold; font-size:16px; margin-bottom:3px; margin-left:20px; color:#00619f;"><?php echo $category_name;?></p>

	        

 <div class="title1" style="background-color:#00619f; width:650px; height:3px;  float:left;"></div>

	    <div class="ttincongghe">

	    

<?php

if (isset($all_news)) {

    foreach ($all_news as $item):

        $date_post = new DateTime($item->date_add);

        ?>

        

        <div class="sreenttin" style="width:648px; height:105px; float:left; margin-top:10px;">

		       	

		       	<div class="hinhcongnghe">
					<img src="<?php echo image($item->news_icon, 'news_90_100'); ?>" />
		       	</div>

		             <div class="titlecongnghe"><a href="<?php echo base_url($item->link_rewrite); ?>">

		             <p style="width:500px; float:left; height:20px;"><?php echo $item->title; ?></p>

		             </a></div>

					 <div class="noidungcongnghe" style="margin-left:10px; float:left; width:490px; height:100px;">

					 <p align="justify"><?php echo $item->content; ?></p>					 

					 

					 </div>

		   		</div>	 

		        <div class="line3"></div>

    <?php

    endforeach;

}?>





<div class="phantrang" style="float:left; width:400px; margin-left:432px;  height:20px;">

<div class="back">

<?php 

	echo $this->pagination->create_links();

?>

</div>

</div>

</div>		



	   </div>

	  <!--end ttin-->