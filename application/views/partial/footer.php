<!--foter-->
<div class="foter">
	<div style="height: 153px; padding: 10px 15px;">
		<div class="add" style="width:590px; float:left;">
			<ul class="footer-menu">
				<li><a href="<?php echo base_url('gioi-thieu.html'); ?>">Về chúng tôi</a></li>
				<li><a href="<?php echo base_url('tuyen-dung.html'); ?>">Tuyển dụng</a></li>
				<li><a href="<?php echo base_url('che-do-bao-hanh.html'); ?>">Chính sách bảo hành</a></li>
				<li><a href="<?php echo base_url('chinh-sach-van-chuyen.html'); ?>">Mua hàng từ xa</a></li>
				<li><a href="<?php echo base_url('lien-he'); ?>">Liên hệ</a></li>
			</ul>
			<ul class="category">
				<li><a href="<?php echo base_url('san-pham/dien-thoai/samsung'); ?>" class="haslink ">Samsung</a></li>
				<li><a href="<?php echo base_url('san-pham/dien-thoai/lg-mobile'); ?>" class="haslink ">LG Mobile</a></li>
				<li><a href="<?php echo base_url('san-pham/dien-thoai/sky'); ?>" class="haslink ">Sky Vega</a></li>
				<li><a href="<?php echo base_url('san-pham/dien-thoai/iphone'); ?>" class="haslink ">iPhone</a></li>
				<li><a href="<?php echo base_url('san-pham/dien-thoai/htc'); ?>" class="haslink ">HTC</a></li>
				<li><a href="<?php echo base_url('san-pham/dien-thoai/may-tinh-bang'); ?>" class="haslink ">Máy tính bảng</a></li>
			</ul>
		</div>
		<div class="footer-right">
			<h3>Tài khoản thanh toán</h3>
			<div class="footer-right-01" style="font-size:10px">
				<p>Vietcombank - Chi nhánh Vũng Tàu</p>
				<p>Số TK: 008 100 1232 991 - Chủ TK: Nguyễn Văn Thành</p>
			</div>
			<div class="footer-right-01">
				<p>Maritime Bank - Chi nhánh Vũng Tàu</p>
				<p>Số TK: 0800 101 490 5954 - Chủ TK: Nguyễn Văn Thành</p>
			</div>
		</div>
	</div>
	<!--
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
	-->
	<div class="center">
		<p style="font-size:16px; font-weight:bold; width:600px; color:#263e81; padding: 5px 0;">Yes Mobile - 06 năm kinh nghiệm sửa chữa, mua bán, phụ kiện Smartphone.</p>
		<p style="font-size:14px; line-height: 18px;"><?php echo $this->sconfig->get_value('address');?></p>
		<p style="font-size:14px; line-height: 18px;">Điện thoại: <?php echo $this->sconfig->get_value('TEL');?> - Hotline: <?php echo $this->sconfig->get_value('FAX');?></p>
		<p style="font-size:14px; line-height: 18px;">Email: <?php echo $this->sconfig->get_value('CONTACT_EMAIL');?> - Website: <?php echo base_url(); ?></p>
	</div>
</br> </br>
	</div>
	<!--end foter-->
</div>
 <!--end main-->
 </div>
<!--end wrap-->
</body>
</html>