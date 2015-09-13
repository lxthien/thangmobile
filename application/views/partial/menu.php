<!--menu-->
<div class="headter-top">
    <div id="page-navigative-menu">
        <ul class="dropdown-navigative-menu">
            <li class="lv0" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style="  float:left;">
                    <h2><a href="<?php echo base_url(); ?>" class="haslin ">
                        <img style="margin-top: 8px;" src="<?php echo base_url('assets/images/icon-home.png'); ?>" alt="Điện thoại vũng tàu">
                    </a></h2>
                </div>
            </li>
            <li class="lv0" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style=" height:40px; float:left;">
                    <h2><a href="<?php echo base_url('san-pham/dien-thoai'); ?>" class="haslin "><p>Điện thoại</p></a></h2>
                </div>
                <ul class="menu-category">
                    <li>
                        <div class="menu-category-list">
                            <p>Hãng sản xuất</p>
                            <div class="item"><a href="<?php echo base_url('san-pham/dien-thoai/samsung'); ?>" class="haslink ">Samsung</a></div>
                            <div class="item"><a href="<?php echo base_url('san-pham/dien-thoai/lg-mobile'); ?>" class="haslink ">LG Mobile</a></div>
                            <div class="item"><a href="<?php echo base_url('san-pham/dien-thoai/sky'); ?>" class="haslink ">Sky</a></div>
                            <div class="item"><a href="<?php echo base_url('san-pham/dien-thoai/iphone'); ?>" class="haslink ">IPhone</a></div>
                            <div class="item"><a href="<?php echo base_url('san-pham/dien-thoai/nokia'); ?>" class="haslink ">Nokia</a></div>
                            <div class="item"><a href="<?php echo base_url('san-pham/dien-thoai/htc'); ?>" class="haslink ">HTC</a></div>
                            <div class="item"><a href="<?php echo base_url('san-pham/dien-thoai/dien-thoai-khac'); ?>" class="haslink ">Điện thoại khác</a></div>
                            <div class="item"><a href="<?php echo base_url('san-pham/dien-thoai/may-tinh-bang'); ?>" class="haslink ">Máy tính bảng</a></div>
                        </div>
                        <div class="menu-category-list">
                            <p>Mức giá</p>
                            <div class="item"><a href="<?php echo base_url('san-pham/duoi-2-trieu')?>">Dưới 2 triệu</a></div>
                            <div class="item"><a href="<?php echo base_url('san-pham/gia-tu-2-trieu-den-4-trieu'); ?>">Từ 2 triệu - 4 triệu</a></div>
                            <div class="item"><a href="<?php echo base_url('san-pham/gia-tu-4-trieu-den-6-trieu'); ?>">Từ 4 triệu - 6 triệu</a></div>
                            <div class="item"><a href="<?php echo base_url('san-pham/gia-tu-6-trieu-den-8-trieu'); ?>">Từ 6 triệu - 8 triệu</a></div>
                            <div class="item"><a href="<?php echo base_url('san-pham/tren-8-trieu'); ?>">Trên 8 triệu</a></div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown-navigative-menu2" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style=" height:40px; float:left;">
                    <h2><a href="<?php echo base_url('san-pham/phu-kien-dien-thoai'); ?>" class="haslin "><p>Phụ kiện</p></a></h2>
                </div>
                <ul>
                    <li class="lv1"><a href="<?php echo base_url('san-pham/phu-kien/op-lung-bao-da'); ?>" class="haslink ">Ốp lưng - bao da</a></li>
                    <li class="lv1"><a href="<?php echo base_url('san-pham/phu-kien/cam-ung-man-hinh'); ?>" class="haslink ">Cảm ứng - Màn hình</a></li>
                    <li class="lv1"><a href="<?php echo base_url('san-pham/phu-kien/tai-nghe'); ?>" class="haslink ">Tai nghe</a></li>
                    <li class="lv1"><a href="<?php echo base_url('san-pham/phu-kien/pin-sac-cap'); ?>" class="haslink ">Pin - Sạc - Cáp</a></li>
                    <li class="lv1"><a href="<?php echo base_url('san-pham/phu-kien/vo-may-dien-thoai'); ?>" class="haslink ">Vỏ máy điện thoại</a></li>
                    <li class="lv1"><a href="<?php echo base_url('san-pham/phu-kien/phu-kien-khac'); ?>" class="haslink ">Phụ kiện khác</a></li>
                </ul>
            </li>
            <li class="dropdown-navigative-menu2" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style=" height:40px; float:left;">
                    <h2><a href="<?php echo base_url('dich-vu-sua-chua-dien-thoai.html'); ?>" class="haslin"><p>Dịch vụ sửa chữa</p></a></h2>
                </div>
                <?php if(count($menuCategoryService) > 0): ?>
                <ul>
                    <?php foreach ($menuCategoryService as $service): ?>
                        <li class="lv1"><a style="width: 250px;" href="<?php echo base_url('dich-vu/' . $service['link_rewrite']); ?>" class="haslink "><?php echo $service['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </li>
            <li class="dropdown-navigative-menu2" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style=" height:40px; float:left;">
                    <h2><a href="<?php echo base_url('che-do-bao-hanh.html'); ?>" class="haslin "><p>Chế độ bảo hành</p></a></h2>
                </div>
            </li>
            <!--
            <li class="dropdown-navigative-menu2" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style="float:left;">
                    <h2><a href="<?php echo base_url('tai-ve'); ?>" class="haslin "><p>Download phần mềm</p></a></h2>
                </div>
                <ul>
                    <?php foreach ($download_menu as $each) { ?>
                        <li class="lv1"><a href="<?php echo base_url('tai-ve/' . $each->link_rewrite); ?>" class="haslink "><?php echo $each->name; ?></a></li>
                    <?php } ?>
                </ul>
            </li>
            -->
            <li class="dropdown-navigative-menu2" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style="height:40px; float:left;">
                    <h2><a href="<?php echo base_url('tin-tuc'); ?>" class="haslin "><p>Tin tức</p></a></h2>
                </div>
                <ul>
                    <li class="lv1"><a href="<?php echo base_url('tin-tuc/thong-tin-cong-nghe'); ?>" class="haslink ">Thông tin công nghệ</a></li>
                    <li class="lv1"><a href="<?php echo base_url('tin-tuc/kinh-nghiem-su-dung'); ?>" class="haslink ">Kinh nghiệm sử dụng</a></li>
                    <li class="lv1"><a href="<?php echo base_url('tin-tuc/tin-tuc-noi-bo-thang-mobile-ba-ria-vung-tau'); ?>" class="haslink ">Tin tức ThangMobile</a></li>
                </ul>
            </li>
            <li class="dropdown-navigative-menu2" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style="height:40px; float:left;">
                    <h2><a href="<?php echo base_url('lien-he'); ?>" class="haslin "><p>Liên hệ</p></a></h2>
                </div>
            </li>
        </ul>
    </div>
</div>