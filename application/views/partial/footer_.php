  <!--foter-->
	<div class="foter">
	<div class="add" style="width:400px; float:left; margin-left:35px; margin-top:10px;">
	<p style="font-size:18px; font-weight:bold; color:#5a5a5a">THẮNG MOBILE</p>
	<p style="font-size:14px;"><?php echo $this->sconfig->get_value('address');?></p>
	<p style="font-size:14px; float:left; margin-right:50px;">Tel: <?php echo $this->sconfig->get_value('TEL');?> </p>
	<p style="font-size:14px;">Hotline: <?php echo $this->sconfig->get_value('FAX');?></p>
	<p style="font-size:14px;">Email: <?php echo $this->sconfig->get_value('CONTACT_EMAIL');?> </p>
	<p style="font-size:14px;">Website: <?php echo base_url(); ?> </p>
	</div>
	
<?php
            include("footer_littleCounter.php");            
            $counter = new littleCounter;            
            $counter->dbhost = $this->db->hostname;
            $counter->dbuser = $this->db->username;
            $counter->dbpwd = $this->db->password;
            $counter->dbdatabase = $this->db->database;
            $counter->dbtable = $this->db->counter_tablename;
            $counter->onlinetime = "300";
            $counter->connect_to_db();
            $counter->insert_new_hit();
            ?>
            	
	<div class="truycap" style="float:right; width:250px; margin-right:20px; height:60px; margin-top:10px;">
	<div  style="float:left; width:240px;">
	<div class="icon4" style="background-image:url(<?php echo base_url('assets/images/icon_truycap.png');?>); width:24px; height:24px; float:left;"></div>
	<p style="margin-top:5px; margin-left:5px; float:left; color:#CC3300;">T&#7893;ng l&#432;&#7907;t truy c&#7853;p:
	<p style="margin-top:5px; margin-left:5px; float:left;"><?php echo $counter->show_counter("total"); ?> l&#432;&#7907;t</p> 
	</p>
	</div>
	<div  style="float:left; width:240px; margin-top:8px;">
	<div class="icon5" style="background-image:url(<?php echo base_url('assets/images/icon_truycap2.png');?>); width:24px; height:24px; float:left;"></div>
	<p style="margin-top:5px; margin-left:5px; float:left;color:#CC3300;">S&#7889; ng&#432;&#7901;i &#273;ang online:  
	<p style="margin-top:5px; margin-left:5px; float:left;"><?php echo ($counter->show_counter("online")) + 2; ?> l&#432;&#7907;t</p> 
	
	</p>
	</div>
	
	</div>
	<div class="backlink">
	<a href='http://sotaynhadat.vn/nha-dat-ban-ba-ria-vung-tau' rel='dofollow' target='_blank'>Nhà đất Bà Rịa Vũng Tàu</a>
	<a href='http://sotaynhadat.vn/nha-dat-ban-tp-vung-tau/ba-ria-vung-tau' rel='dofollow' target='_blank'>Nhà đất Vũng Tàu</a>
		<a href='http://goldenvoice.edu.vn' rel='dofollow' target='_blank'>trung tam anh ngu vung tau</a>
				<a href='http://chovayvungtau.com' rel='dofollow' target='_blank'>vay von vung tau</a>
				<a href='http://chovayvungtau.com' rel='dofollow' target='_blank'>vay ngan hang vung tau</a>
				<a href='http://thangmobile.com' rel='dofollow' target='_blank'>Điện thoại Vũng Tàu</a>
				<a href='http://thangmobile.com/san-pham/dien-thoai' rel='dofollow' target='_blank'>Bán điện thoại Vũng Tàu</a>
				<a href='http://thangmobile.com/dich-vu-sua-chua.html' rel='dofollow' target='_blank'>sua dien thoai vung tau</a>
				<a href='http://thangmobile.com/' rel='dofollow' target='_blank'>bán điện thoại cũ vũng tàu</a> 
				<a href='http://thangmobile.com/' rel='dofollow' target='_blank'>mua bán điện thoại vũng tàu</a>
				
	</div>	
	</div>
		<!--end foter-->
</div>
 <!--end main-->
 </div>
     <!--end wrap-->
</body>
</html>