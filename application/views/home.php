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
<?php
	$id = $this->uri->segment(3);
?>

  <body class="hold-transition login-page">

	<div class="sosmed">Follow us: <a href="https://www.instagram.com/sefasgroup/?hl=id"><img src="<?php echo base_url(); ?>/assets/photo/ig.png" height="60px"></a> <a href="https://id.linkedin.com/company/sefas-group"><img src="<?php echo base_url(); ?>/assets/photo/linkedin.png" height="60px"></a> <span><a href="https://www.sefasgroup.com">www.sefasgroup.com</a></span>
	</div>

  	<div class="body">
  		<form name="form-validate" enctype="multipart/form-data" class="form-horizontal" method="post" action="<?php echo site_url(); ?>home/survey/<?php echo $id;?>">
  		<div class="header">
  		<img src="<?php echo base_url(); ?>/assets/photo/header.png">
  		</div>
  		<div class="form">
  			<div class="box-body">

		        <div class="form-group form-group-sm">
		            <label for="name" class="col-sm-12">Nama<span class="danger">*</span></label>
		              <div class="col-sm-12">
		                <input type="text" class="form-control" name="name" placeholder="Your answer" autocomplete="off">
		              </div>
		          </div>
		          <span class="help-block"><?php echo form_error('name');?></span>

		          <div class="row">
		          	<div class="col-sm-6">
			          <div class="form-group form-group-sm">
			            <label for="position" class="col-sm-12">Posisi / Jabatan<span class="danger">*</span></label>
			              <div class="col-sm-12">
			                <input type="text" class="form-control" name="position" placeholder="Your answer" autocomplete="off">
			              </div>
			          </div>
			          <span class="help-block"><?php echo form_error('position');?></span>
			        </div>
			        <div class="col-sm-6">
			          <div class="form-group form-group-sm">
			            <label for="company" class="col-sm-12">Perusahaan<span class="danger">* </span><span class="small" style="color:#797979">Format Penulisan: PT SEFAS PELINDOTAMA</span></label>
			              <div class="col-sm-12">
			                <input type="text" class="form-control" name="company" placeholder="Your answer" autocomplete="off">
			              </div>
			          </div>
			          <span class="help-block"><?php echo form_error('company');?></span>
			        </div>
			      </div>

			      <div class="row">
		          	<div class="col-sm-6">
			          <div class="form-group form-group-sm">
			            <label for="email" class="col-sm-12">Email</label>
			              <div class="col-sm-12">
			                <input type="text" class="form-control" name="email" placeholder="Your answer" autocomplete="off">
			              </div>
			          </div>
			          <!--<span class="help-block"><?php echo form_error('email');?></span>-->
			        </div>
			        <div class="col-sm-6">
			          <div class="form-group form-group-sm">
			            <label for="phone" class="col-sm-12">No. Telpon<span class="danger">*</span></label>
			              <div class="col-sm-12">
			                <input type="text" class="form-control" name="phone" placeholder="Your answer" autocomplete="off">
			              </div>
			          </div>
			          <span class="help-block"><?php echo form_error('phone');?></span>
			       	</div>
			       </div>
		          <hr>

		        <p><b>Perusahaan Bapak/Ibu bergerak di sektor</b></p>
		        <div class="row">
		        	<div class="col-sm-2">
				        <div class="radio">
		                    <label><input type="radio" name="sector" value="Agriculture">Agriculture</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="sector" value="Cement">Cement</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="sector" value="Construction">Construction</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="sector" value="Fleet">Fleet</label>
		                </div>
		            </div>
		            <div class="col-sm-2">
		            	<div class="radio">
		                    <label><input type="radio" name="sector" value="General Manufacture">General Manufacture</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="sector" value="Mining">Mining</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="sector" value="Oil and Gas">Oil and Gas</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="sector" value="Power and Energy">Power and Energy</label>
		                </div>
		            </div>
		            <div class="col-sm-2">
		                <div class="radio">
		                    <label><input type="radio" name="sector" value="Steel">Steel</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="sector" value="Wood Paper & Pulp">Wood Paper & Pulp</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="sector" id="other" value="Others">Others</label>
		                    <br><input type="text" class="other" name="other_sector" id="sector" disabled autocomplete="off">
		                </div>
		            </div>
		        </div>
		        <span class="help-block"><?php echo form_error('sector');?></span>

                <hr>

                <p><b>Produk apa yang saat ini digunakan</b></p>
                <div class="row">
	                <div class="col-sm-2">
	                	<div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Alexia">
		                      Alexia
		                    </label>
		                </div>
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Air Tool">
		                      Air Tool
		                    </label>
		                </div>
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Argina">
		                      Argina
		                    </label>
		                </div>
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Corena">
		                      Corena
		                    </label>
		                </div>
		            </div>
		            <div class="col-sm-2">
		            	<div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Diala">
		                      Diala
		                    </label>
		                </div>
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Gadinia">
		                      Gadinia
		                    </label>
		                </div>

		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Gadus">
		                      Gadus
		                    </label>
		                </div>
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Heat Transfer">
		                      Heat Transfer
		                    </label>
		                </div>
		            </div>
		            <div class="col-sm-2">
		            	<div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Melina">
		                      Melina
		                    </label>
		                </div>
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Morlina">
		                      Morlina
		                    </label>
		                </div>
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Mysella">
		                      Mysella
		                    </label>
		                </div>
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Omala">
		                      Omala
		                    </label>
		                </div>
	            	</div>
	            	<div class="col-sm-2">
	            		<div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Refrigeration">
		                      Refrigeration
		                    </label>
		                </div>
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Rimula">
		                      Rimula
		                    </label>
		                </div>
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Spirax">
		                      Spirax
		                    </label>
		                </div>
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Tegula">
		                      Tegula
		                    </label>
		                </div>
	            	</div>
	            	<div class="col-sm-2">
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Tellus">
		                      Tellus
		                    </label>
		                </div>
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Tonna">
		                      Tonna
		                    </label>
		                </div>
		                <div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Turbo">
		                      Turbo
		                    </label>
		                </div>
				<div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Coolant">
		                      Coolant
		                    </label>
		                </div>
			</div>
			<div class="col-sm-2">
				<div class="checkbox">
		                    <label>
		                      <input type="checkbox" name="product[]" value="Degreaser">
		                      Degreaser
		                    </label>
		                </div>
	            	</div>
            	</div>
            	<span class="help-block"><?php echo form_error('product');?></span>

            	<hr>
            	<div class="row">
	            	<div class="col-sm-6">
		            	<p><b>Menurut Bapak/Ibu, manakah hal yang paling penting dalam memilih rekanan supplier?</b></p>
		                <div class="radio">
		                    <label><input type="radio" name="q1" value="Produk">Produk</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="q1" value="Kualitas produk">Kualitas produk</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="q1" value="Layanan/jasa">Layanan/jasa</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="q1" value="Ketersediaan produk">Ketersediaan produk</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="q1" value="Lainnya">Lainnya</label>
		                    <br><input type="text" name="question1" id="question1" disabled autocomplete="off">
		                </div>
		                <span class="help-block"><?php echo form_error('q1');?></span>

		                <br>

		                <p><b>Bagaimana penilaian Anda terhadap ketepatan waktu tim logistik dalam melakukan pengiriman pesanan Anda?</b></p>
		                <div class="radio">
		                    <label><input type="radio" name="q2" value="Tepat waktu">Tepat waktu</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="q2" value="Tidak tepat waktu">Tidak tepat waktu</label>
		                    <br><span class="other">Jelaskan alasannya :</span><br><input type="text" name="question2" id="question2" disabled autocomplete="off">
		                </div>
		                <span class="help-block"><?php echo form_error('q2');?></span>

		                <br>

		                <p><b>Bagaimana penilaian Anda terhadap kesesuaian tim logistik dalam memberikan pesanan Anda?</b></p>
		                <div class="radio">
		                    <label><input type="radio" name="q3" value="Sesuai dengan yang dipesan">Sesuai dengan yang dipesan</label>
		                </div>
		                <div class="radio">
		                    <label><input type="radio" name="q3" value="Tidak sesuai">Tidak sesuai</label>
		                    <br><span class="other">Jelaskan alasannya :</span><br><input type="text"  name="question3" id="question3" disabled autocomplete="off">
		                </div>
		                <span class="help-block"><?php echo form_error('q3');?></span>
		            </div>

		            <div class="col-sm-6">
		                <p><b>Bagaimana tanggapan Anda terhadap pelayanan yang diberikan oleh tim sales SEFAS Group?</b></p>
		                <p><small>(<b>5 = Sangat Baik</b>; <b>4 = Baik</b>; <b>3 = Cukup</b>; <b>2 = Tidak Baik</b>; <b>1 = Sangat Tidak Baik</b>)</small></p>
		                <table>
		                	<tr>
		                		<td></td>
		                		<td></td>
		                		<td>1</td>
		                		<td>2</td>
		                		<td>3</td>
		                		<td>4</td>
		                		<td>5</td>
		                	</tr>
		                	<tr>
		                		<td>a.</td>
		                		<td>Kecepatan tim sales dalam memberikan respon</td>
		                		<td><input type="radio" name="q41" value="Sangat Tidak Baik"></td>
		                		<td><input type="radio" name="q41" value="Tidak Baik"></td>
		                		<td><input type="radio" name="q41" value="Cukup"></td>
		                		<td><input type="radio" name="q41" value="Baik"></td>
		                		<td><input type="radio" name="q41" value="Sangat Baik"></td>
		                	</tr>
		                	<span class="help-block"><?php echo form_error('q41');?></span>
		                	<tr>
		                		<td>b.</td>
		                		<td>Pengetahuan tim sales akan produk dan layanan SEFAS</td>
		                		<td><input type="radio" name="q42" value="Sangat Tidak Baik"></td>
		                		<td><input type="radio" name="q42" value="Tidak Baik"></td>
		                		<td><input type="radio" name="q42" value="Cukup"></td>
		                		<td><input type="radio" name="q42" value="Baik"></td>
		                		<td><input type="radio" name="q42" value="Sangat Baik"></td>
		                	</tr>
		                	<span class="help-block"><?php echo form_error('q42');?></span>
		                	<tr>
		                		<td>c.</td>
		                		<td>Memberikan solusi atas pertanyaan pelanggan</td>
		                		<td><input type="radio" name="q43" value="Sangat Tidak Baik"></td>
		                		<td><input type="radio" name="q43" value="Tidak Baik"></td>
		                		<td><input type="radio" name="q43" value="Cukup"></td>
		                		<td><input type="radio" name="q43" value="Baik"></td>
		                		<td><input type="radio" name="q43" value="Sangat Baik"></td>
		                	</tr>
		                	<span class="help-block"><?php echo form_error('q43');?></span>
		                	<tr>
		                		<td>d.</td>
		                		<td>Penyampaian informasi terkait aktivitas marketing dan promo</td>
		                		<td><input type="radio" name="q44" value="Sangat Tidak Baik"></td>
		                		<td><input type="radio" name="q44" value="Tidak Baik"></td>
		                		<td><input type="radio" name="q44" value="Cukup"></td>
		                		<td><input type="radio" name="q44" value="Baik"></td>
		                		<td><input type="radio" name="q44" value="Sangat Baik"></td>
		                	</tr>
		                	<span class="help-block"><?php echo form_error('q44');?></span>
		                </table>

		                <br><br>

		                <p><b>Bagaimana tanggapan Anda mengenai kualitas tim teknikal SEFAS Group?</b></p>
		                <p><small>(<b>5 = Sangat Baik</b>; <b>4 = Baik</b>; <b>3 = Cukup</b>; <b>2 = Tidak Baik</b>; <b>1 = Sangat Tidak Baik</b>)</small></p>
		                <table>
		                	<tr>
		                		<td></td>
		                		<td></td>
		                		<td>1</td>
		                		<td>2</td>
		                		<td>3</td>
		                		<td>4</td>
		                		<td>5</td>
		                	</tr>
		                	<tr>
		                		<td>a.</td>
		                		<td>Kecepatan tim teknikal dalam memberikan respon dan komunikasi</td>
		                		<td><input type="radio" name="q51" value="Sangat Tidak Baik"></td>
		                		<td><input type="radio" name="q51" value="Tidak Baik"></td>
		                		<td><input type="radio" name="q51" value="Cukup"></td>
		                		<td><input type="radio" name="q51" value="Baik"></td>
		                		<td><input type="radio" name="q51" value="Sangat Baik"></td>
		                	</tr>
		                	<span class="help-block"><?php echo form_error('q51');?></span>
		                	<tr>
		                		<td>b.</td>
		                		<td>Kepuasan terhadap solusi yang diberikan tim teknikal</td>
		                		<td><input type="radio" name="q52" value="Sangat Tidak Baik"></td>
		                		<td><input type="radio" name="q52" value="Tidak Baik"></td>
		                		<td><input type="radio" name="q52" value="Cukup"></td>
		                		<td><input type="radio" name="q52" value="Baik"></td>
		                		<td><input type="radio" name="q52" value="Sangat Baik"></td>
		                	</tr>
		                	<span class="help-block"><?php echo form_error('q52');?></span>
		                	<tr>
		                		<td>c.</td>
		                		<td>Penguasaan aplikasi dan rekomendasi produk</td>
		                		<td><input type="radio" name="q53" value="Sangat Tidak Baik"></td>
		                		<td><input type="radio" name="q53" value="Tidak Baik"></td>
		                		<td><input type="radio" name="q53" value="Cukup"></td>
		                		<td><input type="radio" name="q53" value="Baik"></td>
		                		<td><input type="radio" name="q53" value="Sangat Baik"></td>
		                	</tr>
		                	<span class="help-block"><?php echo form_error('q53');?></span>
		                </table>
		            </div>
		        </div>
                <hr>

                <p><b>Apakah anda akan merekomendasikan SEFAS Group ke perusahaan lain?</b></p>
		            <div class="radio">
		                <label><input type="radio" name="q6" value="Ya">Ya</label>
		            </div>
		            <div class="radio">
		                <label><input type="radio" name="q6" value="Tidak">Tidak</label>
		            </div>    
		        <span class="help-block"><?php echo form_error('q6');?></span>
		        <br>
				<p><b>Pesan/saran :</b></p>
					<textarea class="form-control" name="note" placeholder="Your answer"></textarea>

		    </div>
		    <br>
		    <div class="button">
		        <button type="submit" class="btn btn-lg bg">SUBMIT</button>
		    </div>
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
  text: "<?php echo $this->session->flashdata('error'); ?>",
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
  text: "<?php echo $this->session->flashdata('success'); ?>",
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
