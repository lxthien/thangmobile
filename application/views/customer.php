<!doctype html>
<html>
	<head>
	    <meta charset="UTF-8">
	    <!--IE Compatibility modes-->
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <!--Mobile first-->
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Điện thoại vũng tàu</title>
	    
	    <meta name="description" content="Điện thoại vũng tàu">
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

  	</head>

  	<body class="sidebar-left-mini">
  		<div class="bg-dark dk" id="wrap">
  			<?php $this->load->view('customer/partial/top'); ?>
  			<?php $this->load->view('customer/partial/left'); ?>
  			<?php $this->load->view($view); ?>
  		</div>
  		<!-- /#wrap -->
        <footer class="Footer bg-dark dker">
            <p>2017 &copy; Điện thoại vũng tàu</p>
        </footer>
        <!-- /#footer -->
        <!-- #helpModal -->
        <div id="helpModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- /#helpModal -->
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

        <!-- Metis core scripts -->
        <script src="<?php echo base_url().'assets/admin'; ?>/assets/js/core.js"></script>
        <!-- Metis demo scripts -->
        <script src="<?php echo base_url().'assets/admin'; ?>/assets/js/app.js"></script>

        <script src="<?php echo base_url().'assets/admin'; ?>/assets/js/site.js"></script>

        <script>
            $(function() {
                Metis.MetisTable();
                Metis.metisSortable();
                Metis.formGeneral();
            });
        </script>
        <script src="<?php echo base_url().'assets/admin'; ?>/assets/js/style-switcher.js"></script>
  	</body>

</html>