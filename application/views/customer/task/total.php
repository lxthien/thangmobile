<div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <!--Begin Datatables-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <header>
                            <div class="icons"><i class="fa fa-table"></i></div>
                            <h5>Doanh thu theo ngày</h5>
                        </header>
                        <div id="collapse4" class="body">
                            <?php if ($tasksVT) : ?>
                                <table id="dataTable" class="table table-bordered table-condensed table-striped dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th>Ngày</th>
                                            <th>Mã số</th>
                                            <th>Loại máy</th>
                                            <th>Tên</th>
                                            <th>Điện thoại</th>
                                            <th>Báo giá</th>
                                            <th>Cửa hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tasks as $row): ?>
                                        <tr>
                                            <td><?php echo $date; ?></td>
                                            <td><?php echo '...'.substr($row->code, strlen($row->code) - 5); ?></td>
                                            <td><?php echo $row->phoneType; ?></td>
                                            <td><?php echo getCustomerName($row->customer_id); ?></td>
                                            <td><?php echo getCustomerPhone($row->customer_id); ?></td>
                                            <td><?php echo is_numeric($row->phonePrice) ? number_format($row->phonePrice) : ($row->phonePrice == '' ? "Kiểm tra, báo giá trước khi sửa chữa" : $row->phonePrice); ?></td>
                                            <td><?php echo $row->shop == 2 ? 'Long Sơn' : 'Vũng Tàu'; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td colspan="6"><p style="float: right; font-weight: bold;">Tổng doanh thu cửa hàng Vũng Tàu:</p></td>
                                            <td><?php echo number_format($tasksVT[0]->totalPriceVT); ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"><p style="float: right; font-weight: bold;">Tổng doanh thu cửa hàng Long Sơn:</p></td>
                                            <td><?php echo number_format($tasksLS[0]->totalPriceLS); ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"><p style="float: right; font-weight: bold;">Tổng doanh thu:</p></td>
                                            <td><?php echo number_format($tasksVT[0]->totalPriceVT + $tasksLS[0]->totalPriceLS); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php else: ?>
                                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                    <p class="center">Không có doanh thu trong hôm nay</p>
                                </table>
                            <?php endif; ?>
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
<style type="text/css">
    /* Custom CSS for the Soft */
    table#dataTable {
        border: none;
    }
    table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting:after {
        content: "";
    }
    table#dataTable thead tr {
        background: #337ab7; color: #ffffff;
    }
    .table-bordered > thead > tr > th, .table-bordered > thead > tr > td {
        border-bottom-width: 0px;
    }
    .box header {
        background-image: none; box-shadow: none; border-bottom: none; background: #263e81; color: #ffffff;
    }

    table.table tr td .table tr td:nth-child(1) {
        width: 20%;
    }
    table.table tr td a.task-history,
    table.table tr td a.customer-name {
        /* text-decoration: underline; */
    }
</style>