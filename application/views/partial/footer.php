			<div class="clearfix"></div>
			<!--foter-->
			<div class="foter">
				<div class="row">
					<div class="col-md-8">
						<div class="add">
							<ul class="footer-menu">
								<li><a href="<?php echo base_url('gioi-thieu.html'); ?>">Về Chúng tôi</a></li>
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
								<li><a href="<?php echo base_url('dich-vu-sua-chua-dien-thoai.html'); ?>" class="haslink ">Dịch vụ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="footer-right">
							<h3>Tài khoản thanh toán</h3>
							<div class="footer-right-01">
								<p>Vietcombank - Chi nhánh Vũng Tàu</p>
								<p>Số TK: 008 100 1232 991 - Chủ TK: Nguyễn Văn Thành</p>
							</div>
							<div class="footer-right-01">
								<p>Vietinbank - Chi nhánh Vũng Tàu</p>
								<p>Số TK: 711A894 33332 - Chủ TK: Nguyễn Văn Thành</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 footer-address text-center">
						<p>Yes Mobile | Sửa chữa, mua bán smartphone từ 2010</p>
						<p><?php echo $this->sconfig->get_value('address');?></p>
						<p>Điện thoại: <?php echo $this->sconfig->get_value('TEL');?> - Hotline: <?php echo $this->sconfig->get_value('FAX');?></p>
						<p>Email: <?php echo $this->sconfig->get_value('CONTACT_EMAIL');?> - Website: <?php echo base_url(); ?></p>
					</div>
				</div>
			</div>
			<!--end foter-->
		</div>
		<!--end main-->
	 </div>
	<!--end wrap-->


	<!--jQuery caroufredsel-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.carouFredSel-5.6.4-packed.js"></script>

    <!--jQuery Nivo Slider-->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.nivo.slider.js"></script>

	<!--jQuery Mobile Detect-->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/detectmobilebrowser.js"></script>

	<!-- Product detail page -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo RES_PATH; ?>css/prettyPhoto.css"/>
	<script type="text/javascript" src="<?php echo RES_PATH; ?>js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo RES_PATH; ?>js/functions.js"></script>
	
	<!-- Custom JS -->
	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>

	<!-- JS Bootstrap -->
	<!-- <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>