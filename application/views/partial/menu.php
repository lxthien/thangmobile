<!--menu-->
<div class="headter-top">
    <div id="page-navigative-menu">
        <ul class="dropdown-navigative-menu">
            <li class="lv0" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style="  float:left;">
                    <h2><a href="<?php echo base_url(); ?>" class="haslin "><p>Trang chủ</p></a></h2>
                </div>
            </li>
            <li class="lv0" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style=" height:35px; float:left;">
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
            <li class="lv0" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style=" height:35px; float:left;">
                    <h2><a href="<?php echo base_url('san-pham/phu-kien-dien-thoai'); ?>" class="haslin "><p>Phụ kiện</p></a></h2>
                </div>
                <ul>
                    <li class="lv1"><a href="<?php echo base_url('san-pham/phu-kien/op-lung-bao-da'); ?>" class="haslink ">&#7888;p l&#432;ng - bao da</a></li>
                    <li class="lv1" style="margin-top:-2px;"><a href="<?php echo base_url('san-pham/phu-kien/cam-ung-man-hinh'); ?>" class="haslink ">Cảm ứng - Màn hình</a></li>
                    <li class="lv1" style="margin-top:-2px;"><a href="<?php echo base_url('san-pham/phu-kien/tai-nghe'); ?>" class="haslink ">Tai nghe</a></li>
                    <li class="lv1" style="margin-top:-2px;"><a href="<?php echo base_url('san-pham/phu-kien/pin-sac-cap'); ?>" class="haslink ">Pin - S&#7841;c
                            - C&aacute;p</a></li>
                    <li class="lv1" style="margin-top:-2px;"><a href="<?php echo base_url('san-pham/phu-kien/vo-may-dien-thoai'); ?>" class="haslink ">V&#7887;
                            m&aacute;y &#273;i&#7879;n tho&#7841;i</a></li>
                    <li class="lv1" style="margin-top:-2px;"><a href="<?php echo base_url('san-pham/phu-kien/phu-kien-khac'); ?>" class="haslink ">Phụ kiện
                            khác</a></li>
                </ul>
            </li>
            <li class="dropdown-navigative-menu2" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style=" height:35px; float:left;">
                    <h2><a href="<?php echo base_url('dich-vu-sua-chua-dien-thoai.html'); ?>" class="haslin"><p>Dịch vụ sửa chữa</p></a></h2>
                </div>
                <?php if(count($menuCategoryService) > 0): ?>
                <ul style="margin-top: 2px; width: 250px;">
                    <?php foreach ($menuCategoryService as $service): ?>
                        <li class="lv1" style="margin-top:-2px;"><a style="width: 250px;" href="<?php echo base_url('dich-vu/' . $service['link_rewrite']); ?>" class="haslink "><?php echo $service['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </li>
            <li class="dropdown-navigative-menu2" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style=" height:35px; float:left;">
                    <h2><a href="<?php echo base_url('che-do-bao-hanh.html'); ?>" class="haslin "><p>Chế độ bảo hành</p></a></h2>
                </div>
            </li>
            <li class="dropdown-navigative-menu2" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style="float:left;">
                    <h2><a href="<?php echo base_url('tai-ve'); ?>" class="haslin "><p>Download ph&#7847;n m&#7873;m </p></a></h2>
                </div>
                <ul>
                    <?php
                        foreach ($download_menu as $each) {
                    ?>
                        <li class="lv1"><a href="<?php echo base_url('tai-ve/' . $each->link_rewrite); ?>" class="haslink "><?php echo $each->name; ?></a></li>
                    <?php
                        }
                    ?>
                </ul>
            </li>
            <li class="dropdown-navigative-menu2" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style=" height:35px; float:left;">
                    <h2><a href="<?php echo base_url('tin-tuc'); ?>" class="haslin "><p>Tin t&#7913;c </p></a></h2>
                </div>
                <ul>
                    <li class="lv1"><a href="<?php echo base_url('tin-tuc/thong-tin-cong-nghe'); ?>" class="haslink ">Th&ocirc;ng
                            tin c&ocirc;ng ngh&#7879;</a></li>
                    <li class="lv1" style="margin-top:-2px;"><a href="<?php echo base_url('tin-tuc/kinh-nghiem-su-dung'); ?>" class="haslink ">Kinh nghi&#7879;m
                            s&#7917; d&#7909;ng</a></li>
                </ul>
            </li>
            <li class="dropdown-navigative-menu2" style="font-size:12px; font-weight:bold; float:left; ">
                <div class="sreen1" style="  height:33px; float:left;">
                    <h2><a href="<?php echo base_url('lien-he'); ?>" class="haslin "><p>Li&ecirc;n h&#7879; </p></a></h2>
                </div>
            </li>
        </ul>
    </div>
</div>