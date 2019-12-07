<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--IE Compatibility modes-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Mobile first-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Phần mềm quản lý công việc nội bộ Yes Mobile</title>
        
        <meta name="description" content="Phần mềm quản lý công việc nội bộ Yes Mobile - Sửa chữa điện thoại từ 2010">
        <meta name="author" content="">
        
        <meta name="msapplication-TileColor" content="#5bc0de" />
        <meta name="msapplication-TileImage" content="<?php echo base_url().'assets/admin'; ?>/assets/img/metis-tile.png" />
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin'; ?>/assets/lib/bootstrap/css/bootstrap.css">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Metis core stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin'; ?>/assets/css/main.css">
        
        <!-- metisMenu stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin'; ?>/assets/lib/metismenu/metisMenu.css">
        
        <!-- animate.css stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin'; ?>/assets/lib/animate.css/animate.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/css/datepicker3.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!--For Development Only. Not required -->
        <script>
            less = {
                env: "development",
                relativeUrls: false,
                rootpath: "/assets/admin/assets/"
            };
        </script>
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin'; ?>/assets/css/style-switcher.css">
        <link rel="stylesheet/less" type="text/css" href="<?php echo base_url().'assets/admin'; ?>/assets/less/theme.less">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

        <!-- animate.css stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin'; ?>/assets/font/stylesheet.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin'; ?>/assets/lib/chosen/chosen.css">

      </head>

      <body class="sidebar-left-mini">
          <div class="bg-dark dk" id="wrap">
              <?php $this->load->view('customer/partial/top'); ?>
              <?php $this->load->view('customer/partial/left'); ?>
              <?php $this->load->view($view); ?>
          </div>
          <!-- /#wrap -->
        <footer class="Footer bg-dark dker">
            <p>2010 &copy; Yes Mobile</p>
        </footer>
        <!-- /#footer -->

        <!--jQuery -->
        <script src="<?php echo base_url().'assets/admin'; ?>/assets/lib/jquery/jquery.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.26.6/js/jquery.tablesorter.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/js/bootstrap-datepicker.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>

        <!--Bootstrap -->
        <script src="<?php echo base_url().'assets/admin'; ?>/assets/lib/bootstrap/js/bootstrap.js"></script>
        <!-- MetisMenu -->
        <script src="<?php echo base_url().'assets/admin'; ?>/assets/lib/metismenu/metisMenu.js"></script>
        <!-- Screenfull -->
        <script src="<?php echo base_url().'assets/admin'; ?>/assets/lib/screenfull/screenfull.js"></script>
        <script src="<?php echo base_url().'assets/admin'; ?>/assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="<?php echo base_url().'assets/admin'; ?>/assets/lib/jquery-validation/jquery.validate.js"></script>
        <!-- <script src="<?php echo base_url().'assets/admin'; ?>/assets/lib/chosen/chosen.jquery.min.js"></script> -->

        <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

        <!-- Metis core scripts -->
        <script src="<?php echo base_url().'assets/admin'; ?>/assets/js/core.js"></script>
        <!-- Metis demo scripts -->
        <script src="<?php echo base_url().'assets/admin'; ?>/assets/js/app.js"></script>

        <script src="<?php echo base_url().'assets/admin'; ?>/assets/js/site.js"></script>

        <script>
            $(function() {
                Metis.MetisTable();
                Metis.formGeneral();
            });

            $(document).ready(function() {
                var table = $('#dataTableCustomer').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "pageLength": 50,
                    "sAjaxSource": "<?php echo base_url()."customers/customersPage"; ?>",
                    "fnServerData": function(sSource, aoData, fnCallback) {
                        aoData.push({
                            "name": "customer_back",
                            "value": $('.customer_back').val()
                        });
                        $.ajax({
                            "dataType": 'json',
                            "type": "GET",
                            "url": sSource,
                            "data": aoData,
                            "success": fnCallback
                        });
                    },
                    "bSort": false,
                    "bPaginate": true,
                    "sPaginationType": "full_numbers",
                    "oLanguage": {
                        "sSearch": "<span>Tìm kiếm:</span>"
                    },
                    draggable: false,
                    dom: 'Blfrtip',
                    buttons: [
                        'excelHtml5'
                    ],
                    "lengthMenu": [[10, 20, 30, 40, 50, 100, 150, 200, -1], [10, 20, 30, 40, 50, 100, 150, 200, "All"]],
                    "order": []
                });

                $('.customer_back').change( function() {
                    table.draw();
                } );
            } );
        </script>
        <script src="<?php echo base_url().'assets/admin'; ?>/assets/js/style-switcher.js"></script>
      </body>

</html>