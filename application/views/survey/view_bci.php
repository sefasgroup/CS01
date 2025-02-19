<?php
  $baris = $data->row();
?>
<section class="content-header">
  <h1>SURVEY DETAIL NO. <?php echo $baris->survey_id;?></h1>
</section>
<section class="content">

<div class="box box-primary">

<div class="box-body">

  <div class="box-body">
    <p>Date : <b><?php echo date('d M Y H:i a',strtotime($baris->survey_date));?></b></p>
    <p>Nama : <b><?php echo $baris->survey_name;?></b></p>
    <p>Posisi / Jabatan : <b><?php echo $baris->survey_position;?></b></p>
    <p>Perusahaan : <b><?php echo $baris->survey_company;?></b></p>
    <p>Email : <b><?php echo $baris->survey_email;?></b></p>
    <p>No. Telp. : <b><?php echo $baris->survey_phone;?></b></p>
    <hr>
    <p>Perusahaan Bapak/Ibu bergerak di sektor : <b><?php if($baris->sector=="Lainnya"){echo $baris->other_sector;}else{echo $baris->sector;} ?></b></p>
    <p>Produk apa yang saat ini digunakan : <b><?php echo $baris->product;?></b></p>
    <hr>
    <p>Menurut Bapak/Ibu, manakah hal yang paling penting dalam memilih rekanan supplier? <b><?php echo $baris->q1;?><?php if($baris->q1=="Lainnya"){echo ", ".$baris->other_q1;} ?></b></p>
    <hr>
    <p>Bagaimana tanggapan Anda terhadap pelayanan yang diberikan oleh tim sales?</p>
    <p>a. Kecepatan tim sales dalam memberikan respon <b><?php echo $baris->q41;?></b></p>
    <p>b. Pengetahuan tim sales akan produk dan layanan <b><?php echo $baris->q42;?></b></p>
    <p>c. Memberikan solusi atas pertanyaan pelanggan <b><?php echo $baris->q43;?></b></p>
    <p>d. Penyampaian informasi terkait aktivitas marketing dan promo <b><?php echo $baris->q44;?></b></p>
    <hr>
    <p>Bagaimana penilaian Anda terhadap ketepatan waktu tim logistik dalam melakukan pengiriman pesanan Anda? <b><?php echo $baris->q2;?><?php if($baris->q2=="Tidak tepat waktu"){echo ", ".$baris->other_q2;} ?></b></p>
    <hr>
    <p>Bagaimana tanggapan Anda terhadap produk yang dimiliki oleh Blue Coolant Indonesia?</p>
    <p>a. Kualitas produk <b><?php echo $baris->q31;?></b></p>
    <p>b. Kualitas dan variasi ukuran kemasan produk <b><?php echo $baris->q32;?></b></p>
    <p>c. Performa produk terhadap efisiensi sistem pendingin pada mesin <b><?php echo $baris->q33;?></b></p>
    <hr>
    <p>Bagaimana tanggapan Anda mengenai kualitas tim teknikal?</p>
    <p>a. Kecepatan tim teknikal dalam memberikan respon dan komunikasi <b><?php echo $baris->q51;?></b></p>
    <p>b. Kepuasan terhadap solusi yang diberikan tim teknikal <b><?php echo $baris->q52;?></b></p>
    <p>c. Penguasaan aplikasi dan rekomendasi produk <b><?php echo $baris->q53;?></b></p>
    <hr>
    <p>Apakah anda akan merekomendasikan Blue Coolant Indonesia ke perusahaan lain? <b><?php echo $baris->q6;?></b></p>
    <hr>
    <p>Pesan & Saran: <b><?php echo $baris->survey_note;?></b></p>

  </div>
</div>
</div>
</section>