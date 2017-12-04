<div class="allboxsp1" style="float: left;">
	<h1 class="h1-title">Liên hệ Yes Mobile</h1>
	<div class="line-title">
		<div class="left-30">&nbsp;</div>
		<div class="left-70">&nbsp;</div>
	</div>

	<div class="ttincongghe">
		<div class="sreentieude" style="width: 675px; margin-left: 0;">
			<div class="tieude" style="font-size: 16px; font-weight: bold;">
				<div class="contact-tbl-title" style="margin-top: 10px; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Yes Mobile | Sửa chữa, mua bán smartphone từ 2010</div>
			</div>
		</div>
		<div align="justify" class="noidungchitiet"	style="width: 675px; margin-top: 5px;">
			<div class="noidunggioithieu" style="width: 543px; margin-bottom: 10px;">
				<div class="contact-tbl">
					<div class="contact-tbl-row">
						<span class="label" style="font-weight: bold;">Địa chỉ:</span>
						<?php echo $this->sconfig->get_value('address');?>
					</div>
					<div class="contact-tbl-row">
						<span class="label" style="font-weight: bold;">Điện thoại:</span>
						<?php echo $this->sconfig->get_value('TEL');?>
						&nbsp;&nbsp;
						<span class="label">
							<span id="ctl28_ctl01_lblTPhone" style="font-weight: bold;">Hotline:</span>
						</span>
						<span style="font-size: 14px;"><?php echo $this->sconfig->get_value('FAX');?></span>
					</div>
					<div class="contact-tbl-row">
						<span class="label" style="font-weight: bold;">Website:</span>
						<?php echo base_url(); ?>
						&nbsp;&nbsp;
						<span class="label">
							<span id="ctl28_ctl01_lblTPhone" style="font-weight: bold;">Email:</span>&nbsp;
						</span>
						<?php echo $this->sconfig->get_value('CONTACT_EMAIL');?>
					</div><br/>
					<div class="clear"></div>
					<div class="contact-tbl-title" style="margin-top: 10px; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Gửi liên hệ cho Yes Mobile:</div>
					<div class="clear"></div>
					<div class="separable"></div>
					<div class="tbl-inform">
						<span><span id="ctl28_ctl01_lblInform"></span> </span>
					</div>
					<?php
		            if (isset($success)) {
		                echo '<font color="#00619F"><b>'.$success.'</b></font><br/>';
		            }
		            ?>
					<form id="form_contact" name="form_contact" method="post" action="">
					<div class="contact-tbl-row" style="margin-bottom: 8px;">
						<div class="contact-tbl-label">
							<span id="ctl28_ctl01_lblName">Họ tên</span>
						</div>
						<div class="contact-tbl-content">
							<input type="text" id ="full_name" name ="full_name" value ="<?php echo set_value('full_name'); ?>" class="contact-text-field">
							<font color="red"><?php echo form_error('full_name'); ?></font>
						</div>
					</div>
					<div class="contact-tbl-row" style="margin-bottom: 8px;">
						<div class="contact-tbl-label">Email</div>
						<div class="contact-tbl-content">
							<input type="text" id ="email" name ="email" value ="<?php echo set_value('email'); ?>" class="contact-text-field">
							<font color="red"><?php echo form_error('email'); ?></font>
						</div>
					</div>
					<div class="contact-tbl-row">
						<div class="contact-tbl-label">

							<div class="contact-tbl-content"></div>
						</div>
						<div class="contact-tbl-row" style="margin-bottom: 8px;">
							<div class="contact-tbl-label">Điện thoại</div>
							<div class="contact-tbl-content">
								<input type="text" id ="telephone" name ="telephone" value ="<?php echo set_value('telephone'); ?>" class="contact-text-field">
								<font color="red"><?php echo form_error('telephone'); ?></font>
							</div>
						</div>
						<div class="contact-tbl-row" style="margin-bottom: 8px;">
							<div class="contact-tbl-label">Tiêu đề</div>
							<div class="contact-tbl-content">
								<input name="subject" type="text" id="subject" class="contact-text-field">
							</div>
						</div>
						<div class="contact-tbl-row">
							<div class="contact-tbl-label">
								<span id="ctl28_ctl01_lblContent">Nội dung <font color="red"><?php echo form_error('message'); ?></font></span>
							</div>
							<div class="contact-tbl-content">
								<textarea id ="message" name="message" class="contact-text-area"><?php echo set_value('message'); ?></textarea>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="gui" style="width: 200px; height: 30px; float: left;">
				<input type ="submit" value ="Gửi" name=" submit" id ="submit"/>
				<input type="reset" value="Hủy" id="ctl28_ctl01_btnReset" class="button white">
			</div>
			
		</div>
	</div>
</div>