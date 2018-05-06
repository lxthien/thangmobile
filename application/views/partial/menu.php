<!--menu-->
<div class="row">
    <div class="headter-top col-md-12" id="nav">
        <nav class="navbar navbar-expand-lg container justify-content-between">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link home active" href="<?php echo base_url(); ?>">
                            <img src="<?php echo base_url('assets/images/icon-home.png'); ?>" alt="Điện thoại vũng tàu">
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('san-pham/dien-thoai'); ?>">
                            Điện thoại
                        </a>
                        <span class="drop-down"><span class="icon-drop-down"></span></span>
                        <ul class="dropdown-menu product-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <ul>
                                    <p>Hãng sản xuất</p>
                                    <li class="dropdown-item">
                                        <a class="nav-link" href="<?php echo base_url('san-pham/dien-thoai/samsung'); ?>">Samsung</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a class="nav-link" href="<?php echo base_url('san-pham/dien-thoai/lg-mobile'); ?>">LG Mobile</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a class="nav-link" href="<?php echo base_url('san-pham/dien-thoai/sky'); ?>">Sky</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a class="nav-link" href="<?php echo base_url('san-pham/dien-thoai/iphone'); ?>">iPhone</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a class="nav-link" href="<?php echo base_url('san-pham/dien-thoai/htc'); ?>">HTC</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a class="nav-link" href="<?php echo base_url('san-pham/dien-thoai/dien-thoai-khac'); ?>">Điện thoại khác</a>
                                    </li>
                                </ul>
                                <ul>
                                    <p>Mức giá</p>
                                    <li class="dropdown-item">
                                        <a class="nav-link" href="<?php echo base_url('san-pham/duoi-2-trieu'); ?>">Dưới 2 triệu</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a class="nav-link" href="<?php echo base_url('san-pham/gia-tu-2-trieu-den-4-trieu'); ?>">Từ 2 triệu - 4 triệu</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a class="nav-link" href="<?php echo base_url('san-pham/gia-tu-4-trieu-den-6-trieu'); ?>">Từ 4 triệu - 6 triệu</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a class="nav-link" href="<?php echo base_url('san-pham/gia-tu-6-trieu-den-8-trieu'); ?>">Từ 6 triệu - 8 triệu</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a class="nav-link" href="<?php echo base_url('san-pham/tren-8-trieu'); ?>">Trên 8 triệuHTC</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('san-pham/phu-kien-dien-thoai'); ?>">Phụ kiện</a>
                        <span class="drop-down"><span class="icon-drop-down"></span></span>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('san-pham/phu-kien/pin-sac-cap'); ?>" class="haslink ">Sạc - Cáp</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('san-pham/phu-kien/tai-nghe'); ?>" class="haslink ">Tai nghe</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('san-pham/phu-kien/sac-du-phong'); ?>" class="haslink ">Sạc dự phòng</a>
                            </li>
                            <!-- <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('san-pham/phu-kien/vo-may-dien-thoai'); ?>" class="haslink ">Vỏ máy điện thoại</a>
                            </li> -->
                            <li class="dropdown-item">
                                <a class="nav-link" href="<?php echo base_url('san-pham/phu-kien/phu-kien-khac'); ?>" class="haslink ">Phụ kiện khác</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('dich-vu-sua-chua-dien-thoai.html'); ?>">Dịch vụ sửa chữa</a>
                        <span class="drop-down"><span class="icon-drop-down"></span></span>
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
                        <span class="drop-down"><span class="icon-drop-down"></span></span>
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
                        <span class="drop-down"><span class="icon-drop-down"></span></span>
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
    </div>
</div>