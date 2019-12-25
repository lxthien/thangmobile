<div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <!--Begin Datatables-->
            <div class="row">
              <div class="col-lg-12">
                    <div class="box">
                        <header>
                            <div class="icons"><i class="fa fa-table"></i></div>
                            <h5>Lịch sử giao dịch</h5>
                        </header>
                        <div id="collapse4" class="body">
                            <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Loại máy</th>
                                    <th>Imei</th>
                                    <th>Tình trạng</th>
                                    <th>Báo giá</th>
                                    <th>Tình trạng</th>
                                    <th>Thời gian nhận máy</th>
                                    <th>Thời gian bảo hành</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tasks as $row): ?>
                                    <tr>
                                        <td><?php echo $row->phoneType; ?></td>
                                        <td><?php echo $row->phoneImei; ?></td>
                                        <td><?php echo $row->phoneStatus; ?></td>
                                        <?php if ($row->technicalFinish != 2) { ?>
                                            <td><?php echo is_numeric($row->phonePrice) ? number_format($row->phonePrice) : ($row->phonePrice == '' ? "Kiểm tra, báo giá trước khi sửa chữa" : $row->phonePrice); ?></td>
                                        <?php } else { ?>
                                            <td>Không sửa được</td>
                                        <?php }  ?>
                                        <td><?php echo $row->taskStatus == 1 ? 'Đã xong':'Chưa xong'; ?></td>
                                        <td><?php echo formatTime($row->created); ?></td>
                                        <td><?php echo $row->taskStatus == 1 ? formatTime($row->warrantyPeriod) : 'Chưa có'; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
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