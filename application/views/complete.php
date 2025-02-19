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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- sweer alert -->
<script src="<?php echo base_url("assets/dist/js/sweetalert.min.js") ?>"></script>

  <style type="text/css">

	.sosmed {
	  position: fixed;
	  left: 0px;
	  top: 0px;
	  width: 100%;
	  z-index: 1;
	  background-color: #f26522;
	  text-align: center;
	  color: #fff;
	  font-size: 16px;
	}

	.sosmed span {
	  padding-left: 40px;
	}

	@media (max-width: 768px) {
	  .sosmed span {
	    padding-left: 0px;
	  }
	}

	.sosmed a:link, a:visited, a:active {
	  color: #fff;	
	}

  	.body {
  		background: #fff;
  		width: 90%;
  		position: absolute;
  		top: 13%;
  		left: 5%;
  		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  	}

  	.header {
  		text-align: center;
  	}
  	.header img {
  		width: 100%;
  	}
  	.form {
  		position: relative;
  		width: 90%;
  		left: 5%;
  		background-color: #fff;
  		border-top: 1px solid #f4f4f4;
  		padding-top: 20px;
  		padding-bottom: 20px;
  	}
  	.footer {
  		position: relative;
  		width: 90%;
  		left: 5%;
  		background-color: #fff;
  		border-top: 1px solid #f4f4f4;
  		padding-top: 20px;
  		padding-bottom: 20px;
  		text-align: center;
  		font-size: 12px;
  	}
  	.footer a {
  		color: #f26522;
  	}
  	.footer a:hover {
  		color: #80320d;
  	}
  	.button {
  		text-align: center;
  	}
  	.button .bg {
  		background-color: #f26522;
  		color: #ffffff;
  		font-weight: bold;
  	}
  	.danger {
  		color: red;
  	}

  	table {
  		width: 100%;
  	}
  	table th, td{
  		padding:5px;
  	}
  	.tr {
  		background-color: #f26522;
  		color: #fff;
  	}
  	.other {
  		margin-left: 20px;
  	}


  </style>

  </head>

  <body class="hold-transition login-page">

	<div class="sosmed">Follow us: <a href="https://www.instagram.com/sefasgroup/?hl=id"><img src="<?php echo base_url(); ?>/assets/photo/ig.png" height="60px"></a> <a href="https://id.linkedin.com/company/sefas-group"><img src="<?php echo base_url(); ?>/assets/photo/linkedin.png" height="60px"></a> <span><a href="https://www.sefasgroup.com">www.sefasgroup.com</a></span>
	</div>

  	<div class="body">
  		<form name="form-validate" enctype="multipart/form-data" class="form-horizontal" method="post" action="<?php echo site_url(); ?>/home">
  		<div class="header">
  		<img src="<?php echo base_url(); ?>/assets/photo/header.png">
  		</div>
  		<div class="form">
  			<div class="box-body">
                <div class="callout callout-success">
                <h4>Success</h4>
                <p>Thank you for your cooperation</p>
                </div>
		    </div>
		    <br>
  		</div>
  		<div class="footer">
  			Powered by: <b><a href="http://www.sefasgroup.com">SEFAS Group</a></b> 2021
  		</div>
  		</form>
  	</div>

  </body>
</html>

<?php if($this->session->flashdata('error')){ ?>
<script>
swal({
  icon:"error",
  title: "Error",
  text: "Failed Submit Survey",
  button: false,
  timer: 5000,
});
</script>
<?php } ?>
<?php if($this->session->flashdata('success')){ ?>
<script>
swal({
  icon:"success",
  title: "Success",
  text: "Thank you for your cooperation",
  button: false,
  timer: 5000,
});
</script>
<?php } ?>
<script type="text/javascript">
    $("input[name='sector']").change(function(){
      if($(this).val()=='Others'){
        $("#sector").removeAttr("disabled",true);
      }else{
        $("#sector").attr("disabled",true);
      }
    });
    $("input[name='q1']").change(function(){
      if($(this).val()=='Lainnya'){
        $("#question1").removeAttr("disabled",true);
      }else{
        $("#question1").attr("disabled",true);
      }
    });
    $("input[name='q2']").change(function(){
      if($(this).val()=='Tidak tepat waktu'){
        $("#question2").removeAttr("disabled",true);
      }else{
        $("#question2").attr("disabled",true);
      }
    });
    $("input[name='q3']").change(function(){
      if($(this).val()=='Tidak sesuai'){
        $("#question3").removeAttr("disabled",true);
      }else{
        $("#question3").attr("disabled",true);
      }
    });
</script>
