
<!-- =========================== -->
<?php foreach ($download_categories as $category) : 
	if (isset($category->sub_cats)):
            $sub_cats = $category->sub_cats;
            foreach ($sub_cats as $sub_cat):
?>
<!--ttin-->	
	 <div style="float:left;">
	        <p style="font-weight:bold; font-size:16px; margin-bottom:3px; margin-left:20px; color:#00619f;"><?php echo $sub_cat->name; ?></p>
	        <div class="title1" style="background-color:#00619f; width:650px; height:3px;  float:left;"></div>
	    <div class="ttincongghe">
		<?php
                if (isset($sub_cat->download_items)) {
                    $data = array();
                    $download_items = $sub_cat->download_items;
                    //$this->load->view('download/block_download_list_display', $data);
                    
                    foreach ($download_items as $item) : ?>
                        
                    	
                    	<div class="sreenttin" style="width: 648px; height: 105px; float: left; margin-top: 10px;">
							<div class="hinhcongnghe"> <img src="<?php echo RES_PATH.'images/'.$item->icon; ?>" /></div>
							<div class="titlecongnghe">
								<a href="<?php echo base_url($item->link_rewrite); ?>">
									<p style="width: 500px; float: left; height: 20px;"><?php echo $item->name; ?></p>
								</a>
								<!-- a href="<?php //echo $item->file_name; ?>">
									<p style="width: 500px; float: left; height: 20px;">[Tải về]</p>
								</a-->
							</div>
							<div class="noidungcongnghe" style="margin-left: 10px; float: left; width: 490px; height: 100px;">
								<p align="justify">
									<?php echo $item->description; ?>
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
						   <a href="<?php echo base_url('tai-ve/'. $sub_cat->link_rewrite);?>"><p>Xem tất cả</p></a> 		 
						   </div>  
		    </div>				   		
      </div>
	   </div>
	  <!--end ttin--> 
		<?php
    endforeach;
    endif;
    endforeach;

?>		                
		
		         
			
	   
	  
	 