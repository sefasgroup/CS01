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
    <p>Nama : <b>
    <?php 
      if($baris->survey_name != ''){
        echo $baris->survey_name;
      }else if($baris->name_all != ''){
        echo $baris->name_all;
      }else{
        $surveyor = array_filter([$baris->name_procurement, $baris->name_technical, $baris->name_supply_chain]); 
        echo implode(', ', $surveyor);
      }
    ?>
    </b></p>
    <p>Posisi / Jabatan : <b>
    <?php 
            if($baris->survey_position != ''){
              echo $baris->survey_position;
            }else if($baris->position_all != ''){
              echo $baris->position_all;
            }else{
              $position_surveyor = array_filter([$baris->position_procurement, $baris->position_technical, $baris->position_supply_chain]); 
              echo implode(', ', $position_surveyor);
            }
    ?>
    </b></p>
    <p>Perusahaan : <b><?php echo $baris->survey_company;?></b></p>
    <p>Email : <b>
    <?php 
            if($baris->survey_email != ''){
              echo $baris->survey_email;
            }else if($baris->email_all != ''){
              echo $baris->email_all;
            }else{
              $email_surveyor = array_filter([$baris->email_procurement, $baris->email_technical, $baris->email_supply_chain]); 
              echo implode(', ', $email_surveyor);
            }
    ?>
    </b></p>
    <p>No. Telp. : <b>
    <?php 
      if($baris->survey_phone != ''){
        echo $baris->survey_phone;
      }else if($baris->phone_all != ''){
        echo $baris->phone_all;
      }else{
        $phone_surveyor = array_filter([$baris->phone_procurement, $baris->phone_technical, $baris->phone_supply_chain]); 
        echo implode(', ', $phone_surveyor);
      }
    ?>
    </b></p>
    <hr>
    <p>Perusahaan Bapak/Ibu bergerak di sektor : <b><?php if($baris->sector=="Others"){echo $baris->other_sector;}else{echo $baris->sector;} ?></b></p>
    <p>Produk apa yang saat ini digunakan : <b><?php echo $baris->product;?></b></p>
    <hr>
    <p>Menurut Bapak/Ibu, manakah hal yang paling penting dalam memilih rekanan supplier? <b><?php echo $baris->q1;?><?php if($baris->q1=="Lainnya"){echo ", ".$baris->other_q1;} ?></b></p>
    <p>Bagaimana penilaian Anda terhadap ketepatan waktu tim logistik dalam melakukan pengiriman pesanan Anda? <b><?php echo $baris->q2;?><?php if($baris->q2=="Tidak tepat waktu"){echo ", ".$baris->other_q2;} ?></b></p>
    <p>Bagaimana penilaian Anda terhadap kesesuaian tim logistik dalam memberikan pesanan Anda? <b><?php echo $baris->q3;?><?php if($baris->q3=="Tidak sesuai"){echo ", ".$baris->other_q3;} ?></b></p>
    <hr>
    <p>Bagaimana tanggapan Anda terhadap pelayanan yang diberikan oleh tim sales?</p>
    <p>a. Kecepatan tim sales dalam memberikan respon <b><?php echo $baris->q41;?></b></p>
    <p>b. Pengetahuan tim sales akan produk dan layanan <b><?php echo $baris->q42;?></b></p>
    <p>c. Memberikan solusi atas pertanyaan pelanggan <b><?php echo $baris->q43;?></b></p>
    <p>d. Penyampaian informasi terkait aktivitas marketing dan promo <b><?php echo $baris->q44;?></b></p>
    <hr>
    <p>Bagaimana tanggapan Anda mengenai kualitas tim teknikal?</p>
    <p>a. Kecepatan tim teknikal dalam memberikan respon dan komunikasi <b><?php echo $baris->q51;?></b></p>
    <p>b. Kepuasan terhadap solusi yang diberikan tim teknikal <b><?php echo $baris->q52;?></b></p>
    <p>c. Penguasaan aplikasi dan rekomendasi produk <b><?php echo $baris->q53;?></b></p>
    <hr>
    <p>Apakah anda akan merekomendasikan Sinergi Semesta Pratama ke perusahaan lain? <b><?php echo $baris->q6;?></b></p>
    <hr>
    <p>Pesan & Saran All: 
    <b>
    <?php 
      if($baris->survey_note != ''){
        echo $baris->survey_note;
      }else if($baris->pesan_saran_all != ''){
        echo $baris->pesan_saran_all;
      }
    ?>
    </b>
    </p>
    <p>Pesan & Saran Procurement: 
    <b>
    <?php echo $baris->pesan_saran_procurement;?>
    </b>
    </p>
    <p>Pesan & Saran Technical: 
    <b>
    <?php echo $baris->pesan_saran_technical;?>
    </b>
    </p>
    <p>Pesan & Saran Supply Chain: 
    <b>
    <?php echo $baris->pesan_saran_supply_chain;?>
    </b>
    </p>
  </div>
  <div class="box-footer">
      <a href="<?php echo site_url('home/get_survey_sk_jakut');?>" class="btn btn-sm btn-default">Back</a>
  </div>
</div>
</div>
</section>