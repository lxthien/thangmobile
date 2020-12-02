<?php
	foreach ($site_meta_data as $each) {
		//echo $each."<br>";
	}
	if (isset($site_meta_data)) {
		$this->load->view('partial/header', $site_meta_data);
	} else {
		$this->load->view('partial/header');
	}
		$this->load->view('partial/menu');
		$this->load->view('home/block_banner');
		$this->load->view('home/block_service');
	?>
	<script type="application/ld+json">
	{
	  "@context": "http://schema.org",
	  "@type": "MobilePhoneRepairShop",
	  "@id": "https://yesmobile.vn/",
	  "url": "https://yesmobile.vn/",
	  "logo": "https://yesmobile.vn/assets/images/logo-yesmobile.png",
	  "image": "https://yesmobile.vn/assets/images/yesmobile-banner.jpg",
	  "priceRange": "5$-300$",
	  "hasMap": "https://www.google.com/maps/place/Yes+Mobile+%7C+S%E1%BB%ADa+ch%E1%BB%AFa+%C4%91i%E1%BB%87n+tho%E1%BA%A1i+t%E1%BB%AB+2010/@10.3608293,107.0856779,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x4e0e566b192611af!8m2!3d10.3608386!4d107.0878745",
	  "email": "mailto:yesmobile.vn@gmail.com",
	  "founder": "Thanh Sales",
	  "address": {
		"@type": "PostalAddress",
		"addressLocality": "Vũng Tàu",
		"addressCountry": "Việt Nam",
		"addressRegion": "Bà Rịa-Vũng Tàu",
		"postalCode": "79000",
		"streetAddress": "438 Trương Công Định, Phường 8, Vũng Tàu, Bà Rịa-Vũng Tàu, 79000"
	  },
	  "description": "Yes Mobile - Hơn 10 năm kinh nghiệm sửa chữa điện thoại chuyên nghiệp tại TP.Vũng Tàu, Long Sơn, BRVT. Cam kết tư vấn tận tình, sửa chữa nhanh, bảo hành chu đáo đến 12 tháng.",
	  "name": "Yes Mobile | Sửa chữa điện thoại từ 2010",
	  "telephone": "0847-727-272",
	  "openingHoursSpecification": [
		{
		  "@type": "OpeningHoursSpecification",
		  "dayOfWeek": [
			"Monday",
			"Tuesday",
			"Wednesday",
			"Thursday",
			"Friday",
			"Saturday"
		  ],
		  "opens": "08:00",
		  "closes": "20:00"
		},
		{
		  "@type": "OpeningHoursSpecification",
		  "dayOfWeek": [
			"Sunday"
		  ],
		  "opens": "9:00",
		  "closes": "12:00"
		}
	  ],
	  "geo": {
		"@type": "GeoCoordinates",
		"latitude": "10.3608293",
		"longitude": "107.0856779"
	  },
	  "sameAs": [
		"https://www.facebook.com/YesMobile.vn",
		"https://www.instagram.com/yesmobile.vn"
	  ]
	}
	</script>
	<!--main-->	
  	<div class="row main">
	 	<div class="left col-md-8">
			<!--spbanchay-->	
			<?php $this->load->view('home/blockBestSellProduct'); ?>
			<!--end spbanchay-->
			<!--spbanhot--> 
		 	<?php $this->load->view('home/blockPhuKienHot'); ?>
			<!--end spbanhot-->
			<!--spbanmoi-->
			<?php // $this->load->view('home/blockNewProduct'); ?>
			<!--end spbanmoi-->

			<?php $this->load->view('home/home_tin_cong_nghe'); ?>
	 	</div>	 
 		<div class="right col-md-4">
			<!--download-->
			<?php  $this->load->view('download/blockDownload'); ?>
			<!--end download-->
			<!--qc-->
			<?php //$this->load->view('partial/right_column_ads'); ?>
			<!--end qc-->
		</div>
		<?php $this->load->view('home/home_tin_cong_nghe'); ?>
  	</div>
	<?php //$this->load->view('partial/right_left_banner'); ?>
<?php $this->load->view('partial/footer'); ?>