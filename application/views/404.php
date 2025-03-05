<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CUSTOMER SURVEY</title>

	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Custom style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/custom-style.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
	<!-- Google Font Roboto-->
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<!-- Sweet Alert -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">


	<!-- jQuery 3 -->
	<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url(); ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	$.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- sweer alert -->
	<script src="<?php echo base_url("assets/dist/js/sweetalert.min.js") ?>"></script>
	<!-- form validate -->
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.js"></script>

</head>
<?php
	$id = $this->uri->segment(3);
?>

  <body class="hold-transition login-page">

	<div class="sosmed">Follow us:
		<a href="https://www.instagram.com/sefasgroup/?hl=id">
			<img src="<?php echo base_url(); ?>/assets/photo/ig.png" height="60px">
		</a> 
		<a href="https://id.linkedin.com/company/sefas-group">
			<img src="<?php echo base_url(); ?>/assets/photo/linkedin.png" height="60px">
		</a>
		<a href="https://www.sefasgroup.com">
			<img src="<?php echo base_url(); ?>/assets/dist/icon/mdi_web.svg" height="20px">
			sefasgroup.com
		</a>
	</div>

  	<div class="containers">
  		<div class="header">
  		<img src="<?php echo base_url(); ?>/assets/photo/header.png">
  		</div>
  		<div class="form">
  			<div class="box-body">
				<h1 class="text-center">ID customer tidak ditemukan</h1>  
		    </div>
		    <br>
  		</div>
  	</div>
	<div class="footer">
		Powered by: <b><a href="http://www.sefasgroup.com">SEFAS Group</a></b> 2025
	</div>
  </body>
</html>