<div id="content" class="customers">
    <div class="outer">
        <div class="inner bg-light lter">
            <!--Begin Datatables-->
            <div class="row">
              <div class="col-lg-12">
                    <div class="box">
                        <header>
                            <div class="icons"><i class="fa fa-table"></i></div>
                            <h5>Danh sách khách hàng</h5>
                        </header>
                        <div id="collapse4" class="body">
                        <table class="table table-bordered table-condensed table-hover table-striped">
                            <tbody>
                                <tr>
                                    <td><label class="control-label col-lg-4">Khách hàng chưa quay lại:</label></td>
                                    <td>
                                        <select class="chzn-select form-control customer_back" name="customer_back">
                                            <option value="">Vui lòng chọn</option>
                                            <option value="1">1 năm</option>
                                            <option value="2">2 năm</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                            <table id="dataTableCustomer" class="table table-bordered table-condensed table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>LatestPhone</th>
                                        <th>Imei</th>
                                        <th>TimeReceive</th>
                                        <th>Price</th>
                                        <th>TimeWarranty</th>
                                        <th>Note</th>
                                        <th>SLYC</th>
                                        <th>TotalPrices</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <?php foreach ($customers as $row): ?>
                                    <tr>
                                        <td><?php echo $row->name; ?> (<a href="<?php echo base_url().'tasks/add/customer/'.$row->id; ?>" title="Tạo yêu cầu cho khách hàng này"><i class="fa fa-plus" aria-hidden="true"></i> Tasks</a>)</td>
                                        <td><?php echo $row->phone; ?></td>
                                        <td><?php echo lastDoing($row->id); ?></td>
                                        <td><?php echo customerRequestImei($row->id); ?></td>
                                        <td><?php echo customerRequestTimeReceive($row->id); ?></td>
                                        <td><?php echo customerRequestPrice($row->id); ?></td>
                                        <td><?php echo customerRequest($row->id); ?></td>
                                        <td><?php echo number_format(countPriceCustomerRequest($row->id)); ?></td>
                                        <td>
                                            <a href="<?php echo base_url().'customers/edit/'.$row->id; ?>" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url().'customers/histories/'.$row->id; ?>" title="Lịch sử"><i class="fa fa-history"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!--End Datatables-->
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
</div>