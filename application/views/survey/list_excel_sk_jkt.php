<?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=css_sk_jkt.xls");
  header("Pragma: no-cache");
  header("Expires: 0");
?>

<table border="1" width="100%">
    <thead> 
      <tr>
        <th>Date</th>
        <th>Quarter</th>
        <th>Nama</th>
        <th>Posisi / Jabatan</th>
        <th>Netsuite ID</th>
        <th>Perusahaan</th>
        <th>Email</th>
        <th>No. Telp.</th>

        <th>Name Procurement</th>
        <th>Email Procurement</th>
        <th>Phone Procurement</th>
        <th>Pesan Saran Procurement</th>
        
        <th>Name Technical</th>
        <th>Email Technical</th>
        <th>Phone Technical</th>
        <th>Pesan Saran Technical</th>

        <th>Name Supply Chain</th>
        <th>Email Supply Chain</th>
        <th>Phone Supply Chain</th>
        <th>Pesan Saran Supply Chain</th>
        
        <th>Name Management</th>
        <th>Email Management</th>
        <th>Phone Management</th>
        <th>Pesan Saran Management</th>
        
        <th>Sector</th>
        <th>Product</th>
        <th>Menurut Bapak/Ibu, manakah hal yang paling penting dalam memilih rekanan supplier?</th>
        <th>Bagaimana penilaian Anda terhadap ketepatan waktu tim logistik dalam melakukan pengiriman pesanan Anda?</th>
        <th>Bagaimana penilaian Anda terhadap kesesuaian tim logistik dalam memberikan pesanan Anda?</th>
        <th>Kecepatan tim sales dalam memberikan respon</th>
        <th>Pengetahuan tim sales akan produk dan layanan SEFAS</th>
        <th>Memberikan solusi atas pertanyaan pelanggan</th>
        <th>Penyampaian informasi terkait aktivitas marketing dan promo</th>
        <th>Kecepatan tim teknikal dalam memberikan respon dan komunikasi</th>
        <th>Kepuasan terhadap solusi yang diberikan tim teknikal</th>
        <th>Penguasaan aplikasi dan rekomendasi produk</th>
        <th>Apakah anda akan merekomendasikan SEFAS Group ke perusahaan lain?</th>
        <th>Pesan & Saran</th>
      </tr>
    </thead>

    <tbody> 
    <?php
      foreach($data->result() as $baris){
    ?>
      <tr>
        <td><?php echo date('Y-m-d',strtotime($baris->survey_date));?></td>
        <td><?php echo strtoupper($baris->quartal).' '.$baris->year;?></td>
        <td><?php echo $baris->survey_name;?></td>
        <td><?php echo $baris->survey_position;?></td>
        <td><?php echo $baris->ns_id;?></td>
        <td><?php echo $baris->survey_company;?></td>
        <td><?php echo $baris->survey_email;?></td>
        <td><?php echo $baris->survey_phone;?></td>

        <td><?php echo $baris->name_procurement;?></td>
        <td><?php echo $baris->email_procurement;?></td>
        <td><?php echo $baris->phone_procurement;?></td>
        <td><?php echo $baris->pesan_saran_procurement;?></td>

        <td><?php echo $baris->name_technical;?></td>
        <td><?php echo $baris->email_technical;?></td>
        <td><?php echo $baris->phone_technical;?></td>
        <td><?php echo $baris->pesan_saran_technical;?></td>

        <td><?php echo $baris->name_supply_chain;?></td>
        <td><?php echo $baris->email_supply_chain;?></td>
        <td><?php echo $baris->phone_supply_chain;?></td>
        <td><?php echo $baris->pesan_saran_supply_chain;?></td>

        <td><?php echo $baris->name_all;?></td>
        <td><?php echo $baris->email_all;?></td>
        <td><?php echo $baris->phone_all;?></td>
        <td><?php echo $baris->pesan_saran_all;?></td>

        <td><?php if($baris->sector=="Others"){echo $baris->other_sector;}else{echo $baris->sector;} ?></td>
        <td><?php echo $baris->product;?></td>
        <td><?php echo $baris->q1;?><?php if($baris->q1=="Lainnya"){echo ", ".$baris->other_q1;} ?></td>
        <td><?php echo $baris->q2;?><?php if($baris->q2=="Tidak tepat waktu"){echo ", ".$baris->other_q2;} ?></td>
        <td><?php echo $baris->q3;?><?php if($baris->q3=="Tidak sesuai"){echo ", ".$baris->other_q3;} ?></td>
        <td><?php echo $baris->q41;?></td>
        <td><?php echo $baris->q42;?></td>
        <td><?php echo $baris->q43;?></td>
        <td><?php echo $baris->q44;?></td>
        <td><?php echo $baris->q51;?></td>
        <td><?php echo $baris->q52;?></td>
        <td><?php echo $baris->q53;?></td>
        <td><?php echo $baris->q6;?></td>
        <td><?php echo $baris->survey_note;?></td>
      </tr>
    <?php
      }
    ?>
    </tbody>
  </table>