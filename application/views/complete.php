<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CUSTOMER SURVEY</title>


	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Custom style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/custom-style.css">
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

  <body>

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
		<div class="row" style="padding:119px 0;margin:40px 0">
			<div class="col-xs-12">
				<div class="center-block text-center" style="width: 500px;">
				<img src="<?php echo base_url('assets/photo/ceklist-success.gif'); ?>" alt="success">
				<p>This response has been recorded!</p>
				<p>Thank you for your cooperation</p>
				<div id="time" style="font-size:12px;color:#D4D4D4"></div>
				</div>
			</div>
		</div>
		</div>
  		</div>
  	</div>
	<div class="footer">
  		Powered by: <b><a href="http://www.sefasgroup.com">SEFAS Group</a></b> 2025
  	</div>
  </body>
</html>
<script type="text/javascript">
$(document).ready(function () {

	function startTimer(duration, display, redirectUrl) {
		var timer = duration, minutes, seconds;
		var countdown = setInterval(function () {
			minutes = parseInt(timer / 60, 10);
			seconds = parseInt(timer % 60, 10);

			minutes = minutes < 10 ? "0" + minutes : minutes;
			seconds = seconds < 10 ? "0" + seconds : seconds;

			display.textContent = minutes + ":" + seconds;

			if (--timer < 0) {
				clearInterval(countdown);
				window.location.href = redirectUrl;
			}
		}, 1000);
	}

	window.onload = function () {
		//var fiveMinutes = 60 * 5,
		var fiveSecond = 5,
			display = document.querySelector('#time');
			redirectUrl = "<?php echo site_url('home/survey') ?>/<?= $this->uri->segment(3) ?>";
			startTimer(fiveSecond, display,redirectUrl);
	};

});
</script>
