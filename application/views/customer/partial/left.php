<div id="left">
    <div class="media user-media bg-dark dker">
        <div class="user-media-toggleHover">
            <span class="fa fa-user"></span>
        </div>
        <div class="user-wrapper bg-dark">
            <a class="user-link" href="">
                <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo base_url().'assets/admin'; ?>/assets/img/user.gif">
                <span class="label label-danger user-label">16</span>
            </a>
    
            <div class="media-body">
                <h5 class="media-heading">Archie</h5>
                <ul class="list-unstyled user-info">
                    <li><a href="">Administrator</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #menu -->
    <ul id="menu" class="bg-blue dker">
        <li>
            <a href="<?php echo base_url().'tasks/listTask'; ?>">
            	<i class="fa fa-table"></i>
            	<span class="link-title">Yêu cầu</span>
            	<span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="<?php echo base_url().'tasks/add'; ?>">
                    <i class="fa fa-angle-right"></i>&nbsp; Thêm mới</a>
                </li>
            	<li>
                	<a href="<?php echo base_url().'tasks/listTask'; ?>">
                  	<i class="fa fa-angle-right"></i>&nbsp; Danh sách yêu cầu</a>
              	</li>
            </ul>
        </li>
        <li>
            <a href="<?php echo base_url().'customers/index'; ?>">
                <i class="fa fa-table"></i>
                <span class="link-title">Khách hàng</span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="<?php echo base_url().'customers/index'; ?>">
                        <i class="fa fa-angle-right"></i>&nbsp; Danh sách khách hàng</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'customers/add'; ?>">
                        <i class="fa fa-angle-right"></i>&nbsp; Thêm mới khách hàng</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /#menu -->
</div>
<!-- /#left -->