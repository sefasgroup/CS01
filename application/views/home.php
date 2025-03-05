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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Custom style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/custom-style.css">
	<!-- Google Font Roboto-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
  		<!-- <form name="form-validate" id="surveyForm" enctype="multipart/form-data" class="form-horizontal" method="post" action="<?php echo site_url(); ?>home/survey/<?php echo $id;?>"> -->
  		<div class="header">
  		<img src="<?php echo base_url(); ?>/assets/photo/header.png">
  		</div>
  		<div class="form">
  			<div class="box-body">
				
				<!-- FORM START -->
				<form class="form-horizontal" id="surveyForm">
				<fieldset id="fieldset-home">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-sefas">
								<div class="box-header">
									<p>Petunjuk mengisi form kuesioner</p>
								</div>
								<div class="box-body">
									<p>
									Terima kasih telah meluangkan waktu untuk mengisi survei ini. Sebelum mulai, kami meminta Anda untuk memilih peran Anda. Pilih peran yang paling sesuai dengan pengalaman Anda dengan produk atau layanan kami. Setelah memilih peran, lanjutkan untuk mengisi survei sesuai dengan pengalaman Anda. Mohon memberikan jawaban yang jujur dan relevan dengan pengalaman Anda. Jawaban Anda sangat berarti untuk kami.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group form-group-sm">
						<label for="name" class="col-sm-12 labels">Nama Perusahaan <span class="danger">*</span></label>
						<div class="col-sm-12">
						<input type="text" class="form-control" name="perusahaan" placeholder="Your answer" autocomplete="off" value="<?php echo $data->customer_name; ?>" readonly>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<p class="labels">Jabatan <span class="danger">*</span></p>

							<?php if($existing != ''){ ?>
							
								<?php if($existing->name_procurement == '' && $existing->name_all == ''){ ?>
								<div class="radio gap">
								<label><input type="radio" name="jabatan" value="procurement">Procurement</label>
								</div>
								<?php }else if($existing->name_all != ''){ ?>
								<div class="radio gap">
								<label class="labels-complete"><input type="radio" name="jabatan" value="procurement" disabled> Procurement</label>
								</div>
								<?php }else{ ?>
								<p class="labels-complete"><i class="fa fa-check-circle" style="color:green;margin-right:5px"></i> Procurement - Sudah diisi</p>
								<?php } ?>

								<?php if($existing->name_technical == '' && $existing->name_all == ''){ ?>
								<div class="radio gap">
									<label><input type="radio" name="jabatan" value="technical">Technical</label>
								</div>
								<?php }else if($existing->name_all != ''){ ?>
								<div class="radio gap">
									<label class="labels-complete"><input type="radio" name="jabatan" value="technical" disabled> Technical</label>
								</div>
								<?php }else{ ?>
								<p class="labels-complete"><i class="fa fa-check-circle" style="color:green;margin-right:5px"></i> Technical - Sudah diisi</p>
								<?php } ?>

								<?php if($existing->name_supply_chain == '' && $existing->name_all == ''){ ?>
								<div class="radio gap">
									<label><input type="radio" name="jabatan" value="supply-chain">Supply Chain</label>
								</div>
								<?php }else if($existing->name_all != ''){ ?>
								<div class="radio gap">
									<label class="labels-complete"><input type="radio" name="jabatan" value="supply-chain" disabled> Supply Chain</label>
								</div>
								<?php }else{ ?>
								<p class="labels-complete"><i class="fa fa-check-circle" style="color:green;margin-right:5px"></i> Supply Chain - Sudah diisi</p>
								<?php } ?>

								<?php if($existing->name_procurement == '' && $existing->name_technical == '' && $existing->name_supply_chain == '' && $existing->name_all == ''){ ?>
								<div class="radio gap">
									<label><input type="radio" name="jabatan" value="all">All</label>
								</div>
								<?php }else if($existing->name_procurement != '' || $existing->name_technical != '' || $existing->name_supply_chain != ''){ ?>
								<div class="radio gap">
									<label class="labels-complete"><input type="radio" name="jabatan" value="all" disabled> All</label>
								</div>
								<?php }else{ ?>
									<p class="labels-complete"><i class="fa fa-check-circle" style="color:green;margin-right:5px"></i> All - Sudah diisi</p>
								<?php } ?>

							<?php }else{ ?>
								
								<div class="radio gap">
								<label><input type="radio" name="jabatan" value="procurement">Procurement</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="jabatan" value="technical">Technical</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="jabatan" value="supply-chain">Supply Chain</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="jabatan" value="all">All</label>
								</div>

							<?php } ?>

						</div>
						<span class="help-block"><?php echo form_error('jabatan');?></span>
					</div>
					
					<div class="button-action">
						<button type="button" name="next" class="btns next pull-left" disabled>Next</button>
					</div>
				</fieldset>
				</form>
				<!-- END FORM START -->

				<!-- FORM PROCUREMENT -->
				<form class="form-horizontal" id="surveyFormProcurement">
				<fieldset id="fieldset-procurement" style="display: none;">
					<p class="jabatan">PROCUREMENT</p>
					
					<input type="hidden" name="id_customer" value="<?php echo $data->customer_ns_uniqueid; ?>">

					<div class="form-group form-group-sm">
						<label for="name_procurement" class="col-sm-12 labels">Nama Lengkap <span class="danger">*</span></label>
						<div class="col-sm-12">
						<input type="text" class="form-control" name="name_procurement" autocomplete="off" required>
						</div>
						<span class="help-block"><?php echo form_error('name_procurement');?></span>
					</div>
					
					<div class="form-group form-group-sm">
			            <label for="email_procurement" class="col-sm-12 labels">Email <span class="danger">*</span></label>
			              <div class="col-sm-12">
			                <input type="email" class="form-control" name="email_procurement" autocomplete="off" required>
			              </div>
						  <span class="help-block"><?php echo form_error('email_procurement');?></span>
			        </div>

					<div class="form-group form-group-sm">
					<label for="phone_procurement" class="col-sm-12 labels">No. Telpon <span class="danger">*</span></label>
						<div class="col-sm-12">
						<input type="number" class="form-control" name="phone_procurement" autocomplete="off" required>
						</div>
						<span class="help-block"><?php echo form_error('phone_procurement');?></span>
					</div>

					<div class="components">
						<p class="labels">Perusahaan Bapak/Ibu bergerak di sektor <span class="danger">*</span></p>
						<div class="row">
							<div class="col-sm-2">
								<div class="radio gap">
									<label><input type="radio" name="sector" value="Agriculture">Agriculture</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector" value="Cement">Cement</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector" value="Construction">Construction</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector" value="Fleet">Fleet</label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="radio gap">
									<label><input type="radio" name="sector" value="General Manufacture">General Manufacture</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector" value="Mining">Mining</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector" value="Oil and Gas">Oil and Gas</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector" value="Power and Energy">Power and Energy</label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="radio gap">
									<label><input type="radio" name="sector" value="Steel">Steel</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector" value="Wood Paper & Pulp">Wood Paper & Pulp</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector" id="other" value="Others">Lainnya:</label>
									<span><input type="text" class="other form-control" name="other_sector" id="sector" disabled autocomplete="off"></span>
								</div>
							</div>
							<span class="help-block"><?php echo form_error('sector');?></span>
						</div>
					</div>
					
					<div class="components">
						<p class="labels">Menurut Bapak/Ibu, manakah hal yang paling penting dalam memilih rekanan supplier? <span class="danger">*</span></p>
							<div class="radio gap">
								<label><input type="radio" name="q1" value="Produk">Produk</label>
							</div>
							<div class="radio gap">
								<label><input type="radio" name="q1" value="Kualitas produk">Kualitas produk</label>
							</div>
							<div class="radio gap">
								<label><input type="radio" name="q1" value="Layanan/jasa">Layanan/jasa</label>
							</div>
							<div class="radio gap">
								<label><input type="radio" name="q1" value="Ketersediaan produk">Ketersediaan produk</label>
							</div>
							<div class="radio gap">
								<label><input type="radio" name="q1" value="Lainnya">Lainnya</label>
								<span><input type="text" class="col-sm-12 form-control" name="question1" id="question1" disabled autocomplete="off"></span>
							</div>
						<span class="help-block"><?php echo form_error('q1');?></span>
					</div>

					<div class="components">
						<p class="labels">Apakah anda akan merekomendasikan SEFAS Group ke perusahaan lain? <span class="danger">*</span></p>
						<div class="radio gap">
							<label><input type="radio" name="q6" value="Ya">Ya</label>
						</div>
						<div class="radio gap">
							<label><input type="radio" name="q6" value="Tidak">Tidak</label>
						</div>    
						<span class="help-block"><?php echo form_error('q6');?></span>
					</div>
					
					<div class="components">
						<p class="labels">Bagaimana tanggapan Anda terhadap pelayanan yang diberikan oleh tim sales SEFAS Group?  <span class="danger">*</span></b></p>
						<p class="labels-small">(5 = Sangat Baik; 4 = Baik; 3 = Cukup; 2 = Tidak Baik; 1 = Sangat Tidak Baik)</p>
						<table class="table-radio">
							<tr>
								<td></td>
								<td>5</td>
								<td>4</td>
								<td>3</td>
								<td>2</td>
								<td>1</td>
							</tr>
							<tr>
								<td>a. Kecepatan tim sales dalam memberikan respon</td>
								<td><input type="radio" name="q41" value="Sangat Baik"></td>
								<td><input type="radio" name="q41" value="Baik"></td>
								<td><input type="radio" name="q41" value="Cukup"></td>
								<td><input type="radio" name="q41" value="Tidak Baik"></td>
								<td><input type="radio" name="q41" value="Sangat Tidak Baik"></td>
								<span class="help-block"><?php echo form_error('q41');?></span>
							</tr>
							<tr>
								<td>b. Pengetahuan tim sales akan produk dan layanan SEFAS</td>
								<td><input type="radio" name="q42" value="Sangat Baik"></td>
								<td><input type="radio" name="q42" value="Baik"></td>
								<td><input type="radio" name="q42" value="Cukup"></td>
								<td><input type="radio" name="q42" value="Tidak Baik"></td>
								<td><input type="radio" name="q42" value="Sangat Tidak Baik"></td>
								<span class="help-block"><?php echo form_error('q42');?></span>
							</tr>
							<tr>
								<td>c. Memberikan solusi atas pertanyaan pelanggan</td>
								<td><input type="radio" name="q43" value="Sangat Baik"></td>
								<td><input type="radio" name="q43" value="Baik"></td>
								<td><input type="radio" name="q43" value="Cukup"></td>
								<td><input type="radio" name="q43" value="Tidak Baik"></td>
								<td><input type="radio" name="q43" value="Sangat Tidak Baik"></td>
								<span class="help-block"><?php echo form_error('q43');?></span>
							</tr>
							<tr>
								<td>d. Penyampaian informasi terkait aktivitas marketing dan promo</td>
								<td><input type="radio" name="q44" value="Sangat Baik"></td>
								<td><input type="radio" name="q44" value="Baik"></td>
								<td><input type="radio" name="q44" value="Cukup"></td>
								<td><input type="radio" name="q44" value="Tidak Baik"></td>
								<td><input type="radio" name="q44" value="Sangat Tidak Baik"></td>
								<span class="help-block"><?php echo form_error('q44');?></span>
							</tr>
						</table>
					</div>

					<div class="components">
						<div class="form-group form-group-sm">
							<label for="pesan_saran" class="col-sm-12 labels">Pesan/Saran</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" name="pesan_saran_procurement" autocomplete="off">
							</div>
						</div>
					</div>

					<div class="pull-left">
						<button type="submit" class="btns btn-sefas">Submit</button>
						<button type="button" name="previous" class="previous btns btn-sefas-cancel" value="Previous">Cancel</button>
              		</div>
				</fieldset>
				</form>
				<!-- END FORM PROCUREMENT -->
				
				<!-- FORM TECHNICAL -->
				<form class="form-horizontal" id="surveyFormTechnical">
				<fieldset id="fieldset-technical" style="display: none;">
					<p class="jabatan">TECHNICAL</p>

					<input type="hidden" name="id_customer" value="<?php echo $data->customer_ns_uniqueid; ?>">

					<div class="form-group form-group-sm">
						<label for="name_technical" class="col-sm-12 labels">Nama Lengkap <span class="danger">*</span></label>
						<div class="col-sm-12">
						<input type="text" class="form-control" name="name_technical" autocomplete="off" required>
						</div>
						<span class="help-block"><?php echo form_error('name_technical');?></span>
					</div>

					<div class="form-group form-group-sm">
						<label for="email_technical" class="col-sm-12 labels">Email <span class="danger">*</span></label>
						<div class="col-sm-12">
							<input type="email" class="form-control" name="email_technical" autocomplete="off" required>
						</div>
						<span class="help-block"><?php echo form_error('email_technical');?></span>
					</div>

					<div class="form-group form-group-sm">
					<label for="phone_technical" class="col-sm-12 labels">No. Telpon <span class="danger">*</span></label>
						<div class="col-sm-12">
						<input type="number" class="form-control" name="phone_technical" autocomplete="off" required>
						</div>
						<span class="help-block"><?php echo form_error('phone_technical');?></span>
					</div>

					
					<div class="components">
						<p class="labels">Produk apa yang saat ini digunakan <span class="danger">*</span></p>
						<div class="row">
							<div class="col-sm-1 custom-gap">
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Alexia">
									Alexia
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Air Tool">
									Air Tool
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Argina">
									Argina
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Corena">
									Corena
									</label>
								</div>
							</div>
							<div class="col-sm-1 custom-gap">
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Diala">
									Diala
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Gadinia">
									Gadinia
									</label>
								</div>

								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Gadus">
									Gadus
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Heat Transfer">
									Heat Transfer
									</label>
								</div>
							</div>
							<div class="col-sm-1 custom-gap">
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Melina">
									Melina
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Morlina">
									Morlina
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Mysella">
									Mysella
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Omala">
									Omala
									</label>
								</div>
							</div>
							<div class="col-sm-1 custom-gap">
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Refrigeration">
									Refrigeration
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Rimula">
									Rimula
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Spirax">
									Spirax
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Tegula">
									Tegula
									</label>
								</div>
							</div>
							<div class="col-sm-1 custom-gap">
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Tellus">
									Tellus
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Tonna">
									Tonna
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product[]" value="Turbo">
									Turbo
									</label>
								</div>
								</div>
							<span class="help-block"><?php echo form_error('product');?></span>
						</div>
					</div>
					
					<div class="components">
						<p class="labels">Bagaimana tanggapan Anda mengenai kualitas tim teknikal SEFAS Group? <span class="danger">*</span></p>
						<p class="labels-small">(5 = Sangat Baik; 4 = Baik; 3 = Cukup; 2 = Tidak Baik; 1 = Sangat Tidak Baik)</p>
						<table class="table-radio">
							<tr>
								<td></td>
								<td>5</td>
								<td>4</td>
								<td>3</td>
								<td>2</td>
								<td>1</td>
							</tr>
							<tr>
								<td>a. Kecepatan tim teknikal dalam memberikan respon dan komunikasi</td>
								<td><input type="radio" name="q51" value="Sangat Baik"></td>
								<td><input type="radio" name="q51" value="Baik"></td>
								<td><input type="radio" name="q51" value="Cukup"></td>
								<td><input type="radio" name="q51" value="Tidak Baik"></td>
								<td><input type="radio" name="q51" value="Sangat Tidak Baik"></td>
							</tr>
							<span class="help-block"><?php echo form_error('q51');?></span>
							<tr>
								<td>b. Kepuasan terhadap solusi yang diberikan tim teknikal</td>
								<td><input type="radio" name="q52" value="Sangat Baik"></td>
								<td><input type="radio" name="q52" value="Baik"></td>
								<td><input type="radio" name="q52" value="Cukup"></td>
								<td><input type="radio" name="q52" value="Tidak Baik"></td>
								<td><input type="radio" name="q52" value="Sangat Tidak Baik"></td>
							</tr>
							<span class="help-block"><?php echo form_error('q52');?></span>
							<tr>
								<td>c. Penguasaan aplikasi dan rekomendasi produk</td>
								<td><input type="radio" name="q53" value="Sangat Baik"></td>
								<td><input type="radio" name="q53" value="Baik"></td>
								<td><input type="radio" name="q53" value="Cukup"></td>
								<td><input type="radio" name="q53" value="Tidak Baik"></td>
								<td><input type="radio" name="q53" value="Sangat Tidak Baik"></td>
							</tr>
							<span class="help-block"><?php echo form_error('q53');?></span>
						</table>
					</div>

					<div class="components">
						<div class="form-group form-group-sm">
							<label for="pesan_saran_technical" class="col-sm-12 labels">Pesan/Saran</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" name="pesan_saran_technical" autocomplete="off">
							</div>
						</div>
					</div>

					<div class="pull-left">
						<button  type="submit" class="btns btn-sefas"><strong>Submit</strong></button>
						<button type="button" name="previous" class="previous btns btn-sefas-cancel" value="Previous"><strong>Cancel</strong></button>
              		</div>
				</fieldset>
				</form>
				<!-- END FORM TECHNICAL -->
				
				<!-- FORM SUPPLY CHAIN -->
				<form class="form-horizontal" id="surveyFormSupplyChain">
				<fieldset id="fieldset-supply-chain" style="display: none;">
					<p class="jabatan">SUPPLY CHAIN</p>

					<input type="hidden" name="id_customer" value="<?php echo $data->customer_ns_uniqueid; ?>">

					<div class="form-group form-group-sm">
						<label for="name_supply_chain" class="col-sm-12 labels">Nama Lengkap <span class="danger">*</span></label>
						<div class="col-sm-12">
						<input type="text" class="form-control" name="name_supply_chain" autocomplete="off" required>
						</div>
						<span class="help-block"><?php echo form_error('name_supply_chain');?></span>
					</div>

					<div class="form-group form-group-sm">
						<label for="email_supply_chain" class="col-sm-12 labels">Email <span class="danger">*</span></label>
						<div class="col-sm-12">
							<input type="email" class="form-control" name="email_supply_chain" autocomplete="off" required>
						</div>
						<span class="help-block"><?php echo form_error('email_supply_chain');?></span>
					</div>

					<div class="form-group form-group-sm">
					<label for="phone_supply_chain" class="col-sm-12 labels">No. Telpon <span class="danger">*</span></label>
						<div class="col-sm-12">
						<input type="number" class="form-control" name="phone_supply_chain" autocomplete="off" required>
						</div>
						<span class="help-block"><?php echo form_error('phone_supply_chain');?></span>
					</div>
					
					<div class="components">
						<p class="labels">Bagaimana penilaian Anda terhadap kesesuaian tim logistik dalam memberikan pesanan Anda? <span class="danger">*</span></p>
						<div class="radio gap">
							<label><input type="radio" name="q3" value="Sesuai dengan yang dipesan">Sesuai dengan yang dipesan</label>
						</div>
						<div class="radio gap">
							<label><input type="radio" name="q3" value="Tidak sesuai">Tidak sesuai</label>
							<p>Jelaskan alasannya :</p>
							<input type="text" class="form-control" name="question3" id="question3" disabled autocomplete="off">
						</div>
						<span class="help-block"><?php echo form_error('q3');?></span>
					</div>
					
					<div class="components">
						<p class="labels">Bagaimana penilaian Anda terhadap ketepatan waktu tim logistik dalam melakukan pengiriman pesanan Anda? <span class="danger">*</span></p>
						<div class="radio gap">
							<label><input type="radio" name="q2" value="Tepat waktu">Tepat waktu</label>
						</div>
						<div class="radio gap">
							<label><input type="radio" name="q2" value="Tidak tepat waktu">Tidak tepat waktu</label>
							<p>Jelaskan alasannya :</p>
							<input type="text" class="form-control" name="question2" id="question2" disabled autocomplete="off">
						</div>
						<span class="help-block"><?php echo form_error('q2');?></span>
					</div>

					<div class="components">
						<div class="form-group form-group-sm">
							<label for="pesan_saran_supply_chain" class="col-sm-12 labels">Pesan/Saran</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" name="pesan_saran_supply_chain" autocomplete="off">
							</div>
						</div>
					</div>

					<div class="pull-left">
						<button  type="submit" class="btns btn-sefas">Submit</button>
						<button type="button" name="previous" class="previous btns btn-sefas-cancel" value="Previous">Cancel</button>
              		</div>
				</fieldset>
				</form>
				<!-- END FORM SUPPLY CHAIN -->
				
				<!-- FORM ALL -->
				<form class="form-horizontal" id="surveyFormAll">
				<fieldset id="fieldset-all" style="display: none;">
					<p class="jabatan">ALL</p>

					<input type="hidden" name="id_customer" value="<?php echo $data->customer_ns_uniqueid; ?>">

					<div class="form-group form-group-sm">
						<label for="name_all" class="col-sm-12 labels">Nama Lengkap <span class="danger">*</span></label>
						<div class="col-sm-12">
						<input type="text" class="form-control" name="name_all" autocomplete="off" required>
						</div>
						<span class="help-block"><?php echo form_error('name_all');?></span>
					</div>

					<div class="form-group form-group-sm">
						<label for="email_all" class="col-sm-12 labels">Email <span class="danger">*</span></label>
						<div class="col-sm-12">
							<input type="email" class="form-control" name="email_all" autocomplete="off" required>
						</div>
						<span class="help-block"><?php echo form_error('email_all');?></span>
					</div>

					<div class="form-group form-group-sm">
					<label for="phone_all" class="col-sm-12 labels">No. Telpon <span class="danger">*</span></label>
						<div class="col-sm-12">
						<input type="number" class="form-control" name="phone_all" autocomplete="off" required>
						</div>
						<span class="help-block"><?php echo form_error('phone_all');?></span>
					</div>

					
					<div class="components">
						<p class="labels">Perusahaan Bapak/Ibu bergerak di sektor <span class="danger">*</span></p>
						<div class="row">
							<div class="col-sm-2">
								<div class="radio gap">
									<label><input type="radio" name="sector_all" value="Agriculture">Agriculture</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector_all" value="Cement">Cement</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector_all" value="Construction">Construction</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector_all" value="Fleet">Fleet</label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="radio gap">
									<label><input type="radio" name="sector_all" value="General Manufacture">General Manufacture</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector_all" value="Mining">Mining</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector_all" value="Oil and Gas">Oil and Gas</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector_all" value="Power and Energy">Power and Energy</label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="radio gap">
									<label><input type="radio" name="sector_all" value="Steel">Steel</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector_all" value="Wood Paper & Pulp">Wood Paper & Pulp</label>
								</div>
								<div class="radio gap">
									<label><input type="radio" name="sector_all" id="other_all" value="Others">Lainnya</label>
									<span><input type="text" class="other form-control" name="other_sector" id="sector_all" disabled autocomplete="off"></span>
								</div>
							</div>
							<span class="help-block"><?php echo form_error('sector_all');?></span>
						</div>
					</div>
					
					<div class="components">
						<p class="labels">Produk apa yang saat ini digunakan <span class="danger">*</span></p>
						<div class="row custom-row">
							<div class="col-sm-1 custom-gap">
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Alexia">
									Alexia
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Air Tool">
									Air Tool
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Argina">
									Argina
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Corena">
									Corena
									</label>
								</div>
							</div>
							<div class="col-sm-1 custom-gap">
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Diala">
									Diala
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Gadinia">
									Gadinia
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Gadus">
									Gadus
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Heat Transfer">
									Heat Transfer
									</label>
								</div>
							</div>
							<div class="col-sm-1 custom-gap">
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Melina">
									Melina
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Morlina">
									Morlina
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Mysella">
									Mysella
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Omala">
									Omala
									</label>
								</div>
							</div>
							<div class="col-sm-1 custom-gap">
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Refrigeration">
									Refrigeration
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Rimula">
									Rimula
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Spirax">
									Spirax
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Tegula">
									Tegula
									</label>
								</div>
							</div>
							<div class="col-sm-1 custom-gap">
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Tellus">
									Tellus
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Tonna">
									Tonna
									</label>
								</div>
								<div class="checkbox gap">
									<label>
									<input type="checkbox" name="product_all[]" value="Turbo">
									Turbo
									</label>
								</div>
							</div>
						</div>
						<span class="help-block"><?php echo form_error('product_all');?></span>
					</div>
					
					<div class="components">
						<p class="labels">Menurut Bapak/Ibu, manakah hal yang paling penting dalam memilih rekanan supplier? <span class="danger">*</span></p>
							<div class="radio gap">
								<label><input type="radio" name="q1_all" value="Produk">Produk</label>
							</div>
							<div class="radio gap">
								<label><input type="radio" name="q1_all" value="Kualitas produk">Kualitas produk</label>
							</div>
							<div class="radio gap">
								<label><input type="radio" name="q1_all" value="Layanan/jasa">Layanan/jasa</label>
							</div>
							<div class="radio gap">
								<label><input type="radio" name="q1_all" value="Ketersediaan produk">Ketersediaan produk</label>
							</div>
							<div class="radio gap">
								<label><input type="radio" name="q1_all" value="Lainnya">Lainnya</label><br>
								<span><input type="text" class="form-control" name="questionall" id="questionall" disabled autocomplete="off"></span>
							</div>
						<span class="help-block"><?php echo form_error('q1_all');?></span>
					</div>
					
					<div class="components">
						<p class="labels">Apakah anda akan merekomendasikan SEFAS Group ke perusahaan lain? <span class="danger">*</span></p>
						<div class="radio gap">
							<label><input type="radio" name="q6_all" value="Ya">Ya</label>
						</div>
						<div class="radio gap">
							<label><input type="radio" name="q6_all" value="Tidak">Tidak</label>
						</div>    
						<span class="help-block"><?php echo form_error('q6_all');?></span>
					</div>
					
					<div class="components">
						<p class="labels">Bagaimana tanggapan Anda terhadap pelayanan yang diberikan oleh tim sales SEFAS Group?  <span class="danger">*</span></b></p>
						<p class="labels-small">(5 = Sangat Baik; 4 = Baik; 3 = Cukup; 2 = Tidak Baik; 1 = Sangat Tidak Baik)</p>
						<table class="table-radio">
							<tr>
								<td></td>
								<td>5</td>
								<td>4</td>
								<td>3</td>
								<td>2</td>
								<td>1</td>
							</tr>
							<tr>
								<td>a. Kecepatan tim sales dalam memberikan respon</td>
								<td><input type="radio" name="q41_all" value="Sangat Baik"></td>
								<td><input type="radio" name="q41_all" value="Baik"></td>
								<td><input type="radio" name="q41_all" value="Cukup"></td>
								<td><input type="radio" name="q41_all" value="Tidak Baik"></td>
								<td><input type="radio" name="q41_all" value="Sangat Tidak Baik"></td>
								<span class="help-block"><?php echo form_error('q41_all');?></span>
							</tr>
							<tr>
								<td>b. Pengetahuan tim sales akan produk dan layanan SEFAS</td>
								<td><input type="radio" name="q42_all" value="Sangat Baik"></td>
								<td><input type="radio" name="q42_all" value="Baik"></td>
								<td><input type="radio" name="q42_all" value="Cukup"></td>
								<td><input type="radio" name="q42_all" value="Tidak Baik"></td>
								<td><input type="radio" name="q42_all" value="Sangat Tidak Baik"></td>
								<span class="help-block"><?php echo form_error('q42_all');?></span>
							</tr>
							<tr>
								<td>c. Memberikan solusi atas pertanyaan pelanggan</td>
								<td><input type="radio" name="q43_all" value="Sangat Baik"></td>
								<td><input type="radio" name="q43_all" value="Baik"></td>
								<td><input type="radio" name="q43_all" value="Cukup"></td>
								<td><input type="radio" name="q43_all" value="Tidak Baik"></td>
								<td><input type="radio" name="q43_all" value="Sangat Tidak Baik"></td>
								<span class="help-block"><?php echo form_error('q43_all');?></span>
							</tr>
							<tr>
								<td>d. Penyampaian informasi terkait aktivitas marketing dan promo</td>
								<td><input type="radio" name="q44_all" value="Sangat Baik"></td>
								<td><input type="radio" name="q44_all" value="Baik"></td>
								<td><input type="radio" name="q44_all" value="Cukup"></td>
								<td><input type="radio" name="q44_all" value="Tidak Baik"></td>
								<td><input type="radio" name="q44_all" value="Sangat Tidak Baik"></td>
								<span class="help-block"><?php echo form_error('q44_all');?></span>
							</tr>
						</table>
					</div>
					
					<div class="components">
						<p class="labels">Bagaimana penilaian Anda terhadap ketepatan waktu tim logistik dalam melakukan pengiriman pesanan Anda? <span class="danger">*</span></p>
						<div class="radio gap">
							<label><input type="radio" name="q2_all" value="Tepat waktu">Tepat waktu</label>
						</div>
						<div class="radio gap">
							<label><input type="radio" name="q2_all" value="Tidak tepat waktu">Tidak tepat waktu</label>
							<p>Jelaskan alasannya :</p>
							<input type="text" class="form-control" name="question_all" id="question_all" disabled autocomplete="off">
						</div>
						<span class="help-block"><?php echo form_error('q2_all');?></span>
					</div>

					<div class="components">
						<p class="labels">Bagaimana tanggapan Anda mengenai kualitas tim teknikal SEFAS Group? <span class="danger">*</span></p>
						<p class="labels-small">(5 = Sangat Baik; 4 = Baik; 3 = Cukup; 2 = Tidak Baik; 1 = Sangat Tidak Baik)</p>
						<table class="table-radio">
							<tr>
								<td></td>
								<td>5</td>
								<td>4</td>
								<td>3</td>
								<td>2</td>
								<td>1</td>
							</tr>
							<tr>
								<td>a. Kecepatan tim teknikal dalam memberikan respon dan komunikasi</td>
								<td><input type="radio" name="q51_all" value="Sangat Baik"></td>
								<td><input type="radio" name="q51_all" value="Baik"></td>
								<td><input type="radio" name="q51_all" value="Cukup"></td>
								<td><input type="radio" name="q51_all" value="Tidak Baik"></td>
								<td><input type="radio" name="q51_all" value="Sangat Tidak Baik"></td>
							</tr>
							<span class="help-block"><?php echo form_error('q51_all');?></span>
							<tr>
								<td>b. Kepuasan terhadap solusi yang diberikan tim teknikal</td>
								<td><input type="radio" name="q52_all" value="Sangat Baik"></td>
								<td><input type="radio" name="q52_all" value="Baik"></td>
								<td><input type="radio" name="q52_all" value="Cukup"></td>
								<td><input type="radio" name="q52_all" value="Tidak Baik"></td>
								<td><input type="radio" name="q52_all" value="Sangat Tidak Baik"></td>
							</tr>
							<span class="help-block"><?php echo form_error('q52_all');?></span>
							<tr>
								<td>c. Penguasaan aplikasi dan rekomendasi produk</td>
								<td><input type="radio" name="q53_all" value="Sangat Baik"></td>
								<td><input type="radio" name="q53_all" value="Baik"></td>
								<td><input type="radio" name="q53_all" value="Cukup"></td>
								<td><input type="radio" name="q53_all" value="Tidak Baik"></td>
								<td><input type="radio" name="q53_all" value="Sangat Tidak Baik"></td>
							</tr>
							<span class="help-block"><?php echo form_error('q53_all');?></span>
						</table>
					</div>
					
					<div class="components">
						<p class="labels">Bagaimana penilaian Anda terhadap kesesuaian tim logistik dalam memberikan pesanan Anda? <span class="danger">*</span></p>
						<div class="radio gap">
							<label><input type="radio" name="q3_all" value="Sesuai dengan yang dipesan">Sesuai dengan yang dipesan</label>
						</div>
						<div class="radio gap">
							<label><input type="radio" name="q3_all" value="Tidak sesuai">Tidak sesuai</label>
							<p>Jelaskan alasannya :</p>
							<input type="text" class="form-control" name="question3_all" id="question3_all" disabled autocomplete="off">
						</div>
						<span class="help-block"><?php echo form_error('q3_all');?></span>
					</div>
					
					<div class="components">
						<div class="form-group form-group-sm">
							<label for="pesan_saran_all" class="col-sm-12 labels">Pesan/Saran</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" name="pesan_saran_all" autocomplete="off">
							</div>
						</div>
					</div>

					<div class="pull-left">
						<button type="submit" class="btns btn-sefas">Submit</button>
						<button type="button" name="previous" class="previous btns btn-sefas-cancel" value="Previous">Cancel</button>
              		</div>
				</fieldset>
				</form>
				<!-- END FORM ALL -->
		          
		    </div>
		    <br>
  		</div>
  	</div>
	<div class="footer">
  		Powered by: <b><a href="http://www.sefasgroup.com">SEFAS Group</a></b> 2025
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
$(document).ready(function () {
	// continous form
		var current_fs, next_fs, previous_fs; //fieldsets
		var opacity;
		var current = 1;

		// Tombol next
		$(".next").click(function () {
			current_fs = $(this).parent().parent();
			next_fs = $(this).parent().parent().next();

			// Ambil nilai radio button yang dipilih
			var selectedOption = $("input[name='jabatan']:checked").val();

			if ($('#surveyForm').valid()) {
				if (current_fs.attr("id") === "fieldset-home") {
					if (selectedOption === "procurement") {
						next_fs = $("#fieldset-procurement");
					} else if (selectedOption === "technical") {
						next_fs = $("#fieldset-technical");
					} else if (selectedOption === "supply-chain") {
						next_fs = $("#fieldset-supply-chain");
					} else if (selectedOption === "all") {
						next_fs = $("#fieldset-all");
					} else {
						alert("Silakan pilih salah satu opsi.");
						return false;
					}
				}

				// Tampilkan fieldset yang dipilih dan sembunyikan fieldset lainnya
				$("fieldset").hide();
				next_fs.show();

				// Animasi transisi
				current_fs.animate({ opacity: 0 }, {
					step: function (now) {
						opacity = 1 - now;
						current_fs.css({
							'display': 'none',
							'position': 'relative'
						});
						next_fs.css({ 'opacity': opacity });
					},
					duration: 500
				});
			}
		});

		// Tombol previous
		$(".previous").click(function () {
			current_fs = $(this).parent().parent();
			previous_fs = $("#fieldset-home");

			$("fieldset").hide();
			previous_fs.show();

			current_fs.animate({ opacity: 0 }, {
				step: function (now) {
					opacity = 1 - now;
					current_fs.css({
						'display': 'none',
						'position': 'relative'
					});
					previous_fs.css({ 'opacity': opacity });
				},
				duration: 500
			});
		});

		// Tombol submit
		$(".submit").click(function () {
			alert("Form berhasil dikirim!");
			return false;
		});
    // end of continous form

	
	// -- Form Validation
	$('#surveyFormProcurement').validate({
		rules: {
			email_procurement: {
				customEmail: true
			},
			sector: {
				required: true
			},
			q1: {
				required: true
			},
			q6: {
				required: true
			},
			q41: {
				required: true
			},
			q42: {
				required: true
			},
			q43: {
				required: true
			},
			q44: {
				required: true
			},
		},
		messages: {
		},
		errorPlacement: function (error, element) {
			error.text('*' + error.text());
			error.css({ color: 'red' });
			
			var helpBlock = element.closest('.components').find('.help-block');
			if (helpBlock.length) {
				helpBlock.html(error);
			} else {
				error.appendTo(element.parent()); // Default jika .help-block tidak ditemukan
			}
		}
	});
	
	$('#surveyFormTechnical').validate({
		rules: {
			email_technical: {
				customEmail: true
			},
			'product[]': {
				required: true
			},
			q51: {
				required: true
			},
			q52: {
				required: true
			},
			q53: {
				required: true
			},
		},
		messages: {
		},
		errorPlacement: function (error, element) {
			error.text('*' + error.text());
			error.css({ color: 'red' });
			
			var helpBlock = element.closest('.components').find('.help-block');
			if (helpBlock.length) {
				helpBlock.html(error);
			} else {
				error.appendTo(element.parent()); // Default jika .help-block tidak ditemukan
			}
		}
	});
	
	$('#surveyFormSupplyChain').validate({
		rules: {
			email_supply_chain: {
				customEmail: true
			},
			'product[]': {
				required: true
			},
			q3: {
				required: true
			},
			q2: {
				required: true
			},
			q53: {
				required: true
			},
		},
		messages: {
		},
		errorPlacement: function (error, element) {
			error.text('*' + error.text());
			error.css({ color: 'red' });
			
			var helpBlock = element.closest('.components').find('.help-block');
			if (helpBlock.length) {
				helpBlock.html(error);
			} else {
				error.appendTo(element.parent()); // Default jika .help-block tidak ditemukan
			}
		}
	});
	
	$('#surveyFormAll').validate({
		rules: {
			email_all: {
				customEmail: true
			},
			sector_all: {
				required: true
			},
			q1_all: {
				required: true
			},
			q2_all: {
				required: true
			},
			q3_all: {
				required: true
			},
			q6_all: {
				required: true
			},
			q41_all: {
				required: true
			},
			q42_all: {
				required: true
			},
			q43_all: {
				required: true
			},
			q44_all: {
				required: true
			},
			'product_all[]': {
				required: true
			},
			q51_all: {
				required: true
			},
			q52_all: {
				required: true
			},
			q53_all: {
				required: true
			},
		},
		messages: {
		},
		errorPlacement: function (error, element) {
			error.text('*' + error.text());
			error.css({ color: 'red' });
			
			var helpBlock = element.closest('.components').find('.help-block');
			if (helpBlock.length) {
				helpBlock.html(error);
			} else {
				error.appendTo(element.parent()); // Default jika .help-block tidak ditemukan
			}
		}
	});
	// -- Custom Form Validation
	// Validate email format
	$.validator.addMethod('customEmail', function (value, element) {
	if (!this.optional(element) && !filter_var(value)) {
		return false;
	}
	// Check for invalid gmail format
	if (value.includes('@gm') && !/^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(value)) {
		return false;
	}
	return true;
	}, 'Email not valid');

	function filter_var(value) {
	const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	return emailPattern.test(value);
	}
	// -- End of Custom Form Validation

    $("input[name='sector']").change(function(){
      if($(this).val()=='Others'){
        $("#sector").removeAttr("disabled",true);
      }else{
        $("#sector").attr("disabled",true);
      }
    });
	
    $("input[name='sector_all']").change(function(){
      if($(this).val()=='Others'){
        $("#sector_all").removeAttr("disabled",true);
      }else{
        $("#sector_all").attr("disabled",true);
      }
    });

    $("input[name='q1']").change(function(){
      if($(this).val()=='Lainnya'){
        $("#question1").removeAttr("disabled",true);
      }else{
        $("#question1").attr("disabled",true);
      }
    });
	
    $("input[name='q1_all']").change(function(){
      if($(this).val()=='Lainnya'){
        $("#questionall").removeAttr("disabled",true);
      }else{
        $("#questionall").attr("disabled",true);
      }
    });

    $("input[name='q2']").change(function(){
      if($(this).val()=='Tidak tepat waktu'){
        $("#question2").removeAttr("disabled",true);
      }else{
        $("#question2").attr("disabled",true);
      }
    });
	
    $("input[name='q2_all']").change(function(){
      if($(this).val()=='Tidak tepat waktu'){
        $("#question_all").removeAttr("disabled",true);
      }else{
        $("#question_all").attr("disabled",true);
      }
    });

    $("input[name='q3']").change(function(){
      if($(this).val()=='Tidak sesuai'){
        $("#question3").removeAttr("disabled",true);
      }else{
        $("#question3").attr("disabled",true);
      }
    });
	
    $("input[name='q3_all']").change(function(){
      if($(this).val()=='Tidak sesuai'){
        $("#question3_all").removeAttr("disabled",true);
      }else{
        $("#question3_all").attr("disabled",true);
      }
    });

	//select jabatan
	$('input[name="jabatan"]').on('change', function() {
        if ($('input[name="jabatan"]:checked').length > 0) {
        	$('.btns.next').removeAttr('disabled').addClass('btn-sefas');
    	} else {
        	$('.btns.next').attr('disabled', 'disabled').removeClass('btn-sefas');
        }
    });

	//FORM SUBMIT PROCUREMENT
	$("#surveyFormProcurement").submit(function (e) {
      	e.preventDefault();
	  
		// Cek validasi form
		if ($("#surveyFormProcurement").valid()) {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('home/survey_submit_procurement') ?>",
				dataType: "JSON",
				data: new FormData(this),
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				success: function (data) {
					$("#surveyFormProcurement")[0].reset();
					window.location.href = "<?php echo site_url('home/completed') ?>/<?= $this->uri->segment(3) ?>";
				},
				error: function(xhr, status, error) {
					alert(error);
					console.log(xhr.status);
					console.log(error);
				}
			});
		}
    });
	
	//FORM SUBMIT TECHNICAL
	$("#surveyFormTechnical").submit(function (e) {
      e.preventDefault();
	  
		// Cek validasi form
		if ($("#surveyFormTechnical").valid()) {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('home/survey_submit_technical') ?>",
				dataType: "JSON",
				data: new FormData(this),
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				success: function (data) {
					$("#surveyFormTechnical")[0].reset();
					window.location.href = "<?php echo site_url('home/completed') ?>/<?= $this->uri->segment(3) ?>";
				},
				error: function(xhr, status, error) {
					alert(error);
					console.log(xhr.status);
					console.error("Error response:", xhr.responseText);
					console.log(error);
				}
			});
		}
    });
	
	//FORM SUBMIT SUPPLY CHAIN
	$("#surveyFormSupplyChain").submit(function (e) {
      e.preventDefault();
	  
		// Cek validasi form
		if ($("#surveyFormSupplyChain").valid()) {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('home/survey_submit_supply_chain') ?>",
				dataType: "JSON",
				data: new FormData(this),
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				success: function (data) {
					$("#surveyFormSupplyChain")[0].reset();
					window.location.href = "<?php echo site_url('home/completed') ?>/<?= $this->uri->segment(3) ?>";
				},
				error: function(xhr, status, error) {
					alert(error);
					console.log(xhr.status);
					console.error("Error response:", xhr.responseText);
					console.log(error);
				}
			});
		}
    });
	
	//FORM SUBMIT ALL
	$("#surveyFormAll").submit(function (e) {
      e.preventDefault();
	  
		// Cek validasi form
		if ($("#surveyFormAll").valid()) {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('home/survey_submit_all') ?>",
				dataType: "JSON",
				data: new FormData(this),
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				success: function (data) {
					$("#surveyFormAll")[0].reset();
					window.location.href = "<?php echo site_url('home/completed') ?>/<?= $this->uri->segment(3) ?>";
				},
				error: function(xhr, status, error) {
					alert(error);
					console.log(xhr.status);
					console.error("Error response:", xhr.responseText);
					console.log(error);
				}
			});
		}
    });
});
</script>
