<!--foter-->
<div class="foter">
	<div style="height: 153px; padding: 10px 15px;">
		<div class="add" style="width:550px; float:left;">
			<ul class="footer-menu">
				<li><a href="">Về chúng tôi</a></li>
				<li><a href="">Tuyển dụng</a></li>
				<li><a href="">Chính sách bảo hành</a></li>
				<li><a href="">Chính sách vận chuyển</a></li>
				<li><a href="">Liên hệ</a></li>
			</ul>
			<ul class="category">
				<li><a href="">Điện thoại Apple</a></li>
				<li><a href="">Điện thoại Samsung</a></li>
			</ul>
		</div>
		<div class="footer-right">
			<h3>Thông tin thanh toán mua hàng</h3>
			<div class="footer-right-01">
				<p>Vietcombank</p>
				<p>Số TK: 34234324234325 Chủ TK: Nguyễn Lê Bá Thắng</p>
			</div>
			<div class="footer-right-01">
				<p>HDBank</p>
				<p>Số TK: 34234324234325 Chủ TK: Nguyễn Lê Bá Thắng</p>
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
		<p style="font-size:16px; font-weight:bold; color:#5a5a5a; padding: 5px 0;">THẮNG MOBILE - Mua bán, sửa chữa, phụ kiện điện thoại di động</p>
		<p style="font-size:14px;"><?php echo $this->sconfig->get_value('address');?></p>
		<p style="font-size:14px;">Điện thoại: <?php echo $this->sconfig->get_value('TEL');?> - Hotline: <?php echo $this->sconfig->get_value('FAX');?></p>
		<p style="font-size:14px;">Email: <?php echo $this->sconfig->get_value('CONTACT_EMAIL');?> - Website: <?php echo base_url(); ?></p>
	</div>

	<div>
		<center>
			<span style="margin-left:50px; width:900px;" class="backlink">
				<a style="color: #000;" href='http://sotaynhadat.vn/nha-dat-ban-ba-ria-vung-tau' rel='dofollow' target='_blank'>Nhà đất Bà Rịa Vũng Tàu</a> |
	            <a style="color: #000;" href='http://sotaynhadat.vn/nha-dat-ban-tp-vung-tau/ba-ria-vung-tau' rel='dofollow' target='_blank'>Nhà đất Vũng Tàu</a> |
		        <a style="color: #000;" href='http://goldenvoice.edu.vn' rel='dofollow' target='_blank'>trung tam anh ngu vung tau</a> |
				<a style="color: #000;" title="Cho thuê máy chủ ảo" href="http://gdata.com.vn/thue-may-chu-ao-vps.html">Cho thuê VPS</a> |
				<a style="color: #000;" title="Cho thuê máy chủ" href="http://gdata.com.vn/cho-thue-may-chu.html">Cho thuê server</a>
			</span>
		</center>		
	</div>	
	</div>
	<!--end foter-->
</div>
 <!--end main-->
 </div>
<!--end wrap-->
</body>
</html>