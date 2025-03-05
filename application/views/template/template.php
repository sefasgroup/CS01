<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></title>

<link rel="stylesheet" href="<?php echo base_url("assets/bower_components/bootstrap/dist/css/bootstrap.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/bower_components/select2/dist/css/select2.min.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/bower_components/Ionicons/css/ionicons.min.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/bower_components/font-awesome/css/font-awesome.min.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/dist/css/AdminLTE.min.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/dist/css/skins/_all-skins.min.css") ?>">
<!-- Sweet Alert -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

<script src="<?php echo base_url("assets/bower_components/jquery/dist/jquery.min.js") ?>"></script>
<script src="<?php echo base_url("assets/bower_components/datatables.net/js/jquery.dataTables.min.js") ?>"></script>
<script src="<?php echo base_url("assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js") ?>"></script>
<script src="<?php echo base_url("assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js") ?>"></script>
<script src="<?php echo base_url("assets/bower_components/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
<script src="<?php echo base_url("assets/bower_components/select2/dist/js/select2.min.js") ?>"></script>
<script src="<?php echo base_url("assets/bower_components/chart.js/Chart-2.min.js") ?>"></script>
<script src="<?php echo base_url("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") ?>"></script>
<script src="<?php echo base_url("assets/dist/js/adminlte.min.js") ?>"></script>
<script src="<?php echo base_url("assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js") ?>"></script>
<script src="<?php echo base_url("assets/bower_components/jquery-knob/js/jquery.knob.js") ?>"></script>
<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="<?php echo base_url("assets/dist/js/sweetalert.min.js") ?>"></script>
		
</head>
<body class="hold-transition skin-blue sidebar-mini" id="<?php echo isset($modul) ? $modul : ''; ?>">


<?php $this->load->view('template/template_header'); ?>
<?php $this->load->view('template/template_side'); ?>
<?php $this->load->view($main_view); ?>
<?php $this->load->view('template/template_footer'); ?>

</body>
</html>