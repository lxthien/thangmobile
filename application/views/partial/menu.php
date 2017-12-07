<!--menu-->
<div class="row">
    <div class="headter-top" id="nav">
        <nav class="navbar navbar-expand-lg container justify-content-between navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="<?php echo $base_url; ?>">
                            <img style="margin-top: 8px;" src="<?php echo base_url('assets/images/icon-home.png'); ?>" alt="Điện thoại vũng tàu">
                        </a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('san-pham/dien-thoai'); ?>">
                            Điện thoại
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('san-pham/dien-thoai/samsung'); ?>">Samsung</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('san-pham/dien-thoai/lg-mobile'); ?>">LG Mobile</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('san-pham/dien-thoai/sky'); ?>">Sky</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('san-pham/phu-kien-dien-thoai'); ?>">Phụ kiện</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('san-pham/phu-kien/cam-ung-man-hinh'); ?>" class="haslink ">Cảm ứng - Màn hình</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('san-pham/phu-kien/tai-nghe'); ?>" class="haslink ">Tai nghe</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('san-pham/phu-kien/pin-sac-cap'); ?>" class="haslink ">Pin - Sạc - Cáp</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('san-pham/phu-kien/vo-may-dien-thoai'); ?>" class="haslink ">Vỏ máy điện thoại</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('san-pham/phu-kien/phu-kien-khac'); ?>" class="haslink ">Phụ kiện khác</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('dich-vu-sua-chua-dien-thoai.html'); ?>">Dịch vụ sửa chữa</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($menuCategoryService as $service): ?>
                                <li class="dropdown-item">
                                    <a class="nav-link" href="<?php echo base_url('dich-vu/' . $service['link_rewrite']); ?>">
                                        <?php echo $service['name']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('thong-tin-bao-hanh'); ?>">Kiểm tra bảo hành</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('tin-tuc'); ?>">Tin tức</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('tin-tuc/san-pham-moi'); ?>" class="haslink ">Sản phẩm mới</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('tin-tuc/thong-tin-cong-nghe'); ?>" class="haslink ">Thông tin công nghệ</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('tin-tuc/tin-tuc-yes-mobile'); ?>" class="haslink ">Tin tức Yes Mobile</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('cam-nang'); ?>">Cẩm nang</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('cam-nang/cam-nang-android'); ?>" class="haslink ">Cẩm nang Android</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('cam-nang/cam-nang-ios'); ?>" class="haslink ">Cẩm nang IOS</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('cam-nang/cam-nang-dien-thoai'); ?>" class="haslink ">Cẩm nang điện thoại</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('lien-he'); ?>">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- <div id="page-navigative-menu">
            <ul class="dropdown-navigative-menu">
                <li class="lv0 <?php echo $this->menu_active == 'home' ? 'active' : ''; ?>" style="font-size:12px; font-weight:bold; float:left; ">
                    <div class="sreen1" style="  float:left;">
                        <h2><a href="<?php echo base_url(); ?>" class="haslin ">
                            <img style="margin-top: 8px;" src="<?php echo base_url('assets/images/icon-home.png'); ?>" alt="Điện thoại vũng tàu">
                        </a></h2>
                    </div>
                </li>
                <li class="lv0 <?php echo $this->menu_active == 'phone' ? 'active' : ''; ?>" style="font-size:12px; font-weight:bold; float:left; ">
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
                                <div class="item"><a href="<?php echo base_url('san-pham/dien-thoai/iphone'); ?>" class="haslink ">iPhone</a></div>
                                <div class="item"><a href="<?php echo base_url('san-pham/dien-thoai/htc'); ?>" class="haslink ">HTC</a></div>
                                <div class="item"><a href="<?php echo base_url('san-pham/dien-thoai/dien-thoai-khac'); ?>" class="haslink ">Điện thoại khác</a></div>
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
                <li class="dropdown-navigative-menu2 <?php echo $this->menu_active == 'accessories' ? 'active' : ''; ?>" style="font-size:12px; font-weight:bold; float:left; ">
                    <div class="sreen1" style=" height:40px; float:left;">
                        <h2><a href="<?php echo base_url('san-pham/phu-kien-dien-thoai'); ?>" class="haslin "><p>Phụ kiện</p></a></h2>
                    </div>
                    <ul>
                        <li class="lv1"><a href="<?php echo base_url('san-pham/phu-kien/cam-ung-man-hinh'); ?>" class="haslink ">Cảm ứng - Màn hình</a></li>
                        <li class="lv1"><a href="<?php echo base_url('san-pham/phu-kien/tai-nghe'); ?>" class="haslink ">Tai nghe</a></li>
                        <li class="lv1"><a href="<?php echo base_url('san-pham/phu-kien/pin-sac-cap'); ?>" class="haslink ">Pin - Sạc - Cáp</a></li>
                        <li class="lv1"><a href="<?php echo base_url('san-pham/phu-kien/vo-may-dien-thoai'); ?>" class="haslink ">Vỏ máy điện thoại</a></li>
                        <li class="lv1"><a href="<?php echo base_url('san-pham/phu-kien/phu-kien-khac'); ?>" class="haslink ">Phụ kiện khác</a></li>
                    </ul>
                </li>
                <li class="dropdown-navigative-menu2 <?php echo $this->menu_active == 'services' ? 'active' : ''; ?>" style="font-size:12px; font-weight:bold; float:left; ">
                    <div class="sreen1" style="height:40px; float:left;">
                        <h2><a href="<?php echo base_url('dich-vu-sua-chua-dien-thoai.html'); ?>" class="haslin"><p>Dịch vụ sửa chữa</p></a></h2>
                    </div>
                    <?php if(count($menuCategoryService) > 0): ?>
                    <ul>
                        <?php foreach ($menuCategoryService as $service): ?>
                            <li class="lv1"><a style="width: 268px;" href="<?php echo base_url('dich-vu/' . $service['link_rewrite']); ?>" class="haslink "><?php echo $service['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <li class="dropdown-navigative-menu2 <?php echo $this->menu_active == 'cdbh' ? 'active' : ''; ?>" style="font-size:12px; font-weight:bold; float:left; ">
                    <div class="sreen1" style=" height:40px; float:left;">
                        <h2><a href="<?php echo base_url('thong-tin-bao-hanh'); ?>" class="haslin "><p>Kiểm tra bảo hành</p></a></h2>
                    </div>
                </li>
                <li class="dropdown-navigative-menu2 <?php echo $this->menu_active == 'news' ? 'active' : ''; ?>" style="font-size:12px; font-weight:bold; float:left; ">
                    <div class="sreen1" style="height:40px; float:left;">
                        <h2><a href="<?php echo base_url('tin-tuc'); ?>" class="haslin "><p>Tin tức</p></a></h2>
                    </div>
                    <ul>
                        <li class="lv1"><a href="<?php echo base_url('tin-tuc/san-pham-moi'); ?>" class="haslink ">Sản phẩm mới</a></li>
                        <li class="lv1"><a href="<?php echo base_url('tin-tuc/thong-tin-cong-nghe'); ?>" class="haslink ">Thông tin công nghệ</a></li>
                        <li class="lv1"><a href="<?php echo base_url('tin-tuc/tin-tuc-yes-mobile'); ?>" class="haslink ">Tin tức Yes Mobile</a></li>
                    </ul>
                </li>
    			<li class="dropdown-navigative-menu2 <?php echo $this->menu_active == 'guides' ? 'active' : ''; ?>" style="font-size:12px; font-weight:bold; float:left; ">
                    <div class="sreen1" style="height:40px; float:left;">
                        <h2><a href="<?php echo base_url('cam-nang'); ?>" class="haslin "><p>Cẩm nang</p></a></h2>
                    </div>
                    <ul>
                        <li class="lv1"><a href="<?php echo base_url('cam-nang/cam-nang-android'); ?>" class="haslink ">Cẩm nang Android</a></li>
                        <li class="lv1"><a href="<?php echo base_url('cam-nang/cam-nang-ios'); ?>" class="haslink ">Cẩm nang IOS</a></li>
                        <li class="lv1"><a href="<?php echo base_url('cam-nang/cam-nang-dien-thoai'); ?>" class="haslink ">Cẩm nang điện thoại</a></li>
                    </ul>
                </li>
                <li class="dropdown-navigative-menu2 <?php echo $this->menu_active == 'contact' ? 'active' : ''; ?>" style="font-size:12px; font-weight:bold; float:left; ">
                    <div class="sreen1" style="height:40px; float:left;">
                        <h2><a href="<?php echo base_url('lien-he'); ?>" class="haslin "><p>Liên hệ</p></a></h2>
                    </div>
                </li>
            </ul>
        </div> -->
    </div>
</div>