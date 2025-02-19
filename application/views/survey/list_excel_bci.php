<?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=file.xls");
  header("Pragma: no-cache");
  header("Expires: 0");
?>

<table border="1" width="100%">
    <thead> 
      <tr>
        <th>Date</th>
        <th>Nama</th>
        <th>Posisi / Jabatan</th>
        <th>Perusahaan</th>
        <th>Email</th>
        <th>No. Telp.</th>
        <th>Sector</th>
        <th>Product</th>
        <th>Menurut Bapak/Ibu, manakah hal yang paling penting dalam memilih rekanan supplier?</th>
        <th>Kecepatan tim sales dalam memberikan respon</th>
        <th>Pengetahuan tim sales akan produk dan layanan</th>
        <th>Memberikan solusi atas pertanyaan pelanggan</th>
        <th>Penyampaian informasi terkait aktivitas marketing dan promo</th>
        <th>Bagaimana penilaian Anda terhadap ketepatan waktu tim logistik dalam melakukan pengiriman pesanan Anda?</th>
        <th>Kualitas produk</th>
        <th>Kualitas dan variasi ukuran kemasan produk</th>
        <th>Performa produk terhadap efisiensi sistem pendingin pada mesin</th>
        <th>Kecepatan tim teknikal dalam memberikan respon dan komunikasi</th>
        <th>Kepuasan terhadap solusi yang diberikan tim teknikal</th>
        <th>Penguasaan aplikasi dan rekomendasi produk</th>
        <th>Apakah anda akan merekomendasikan Blue Coolant Indonesia ke perusahaan lain?</th>
        <th>Pesan & Saran</th>
      </tr>
    </thead>

    <tbody> 
    <?php
      foreach($data->result() as $baris){
    ?>
      <tr>
        <td><?php echo date('Y-m-d',strtotime($baris->survey_date));?></td>
        <td><?php echo $baris->survey_name;?></td>
        <td><?php echo $baris->survey_position;?></td>
        <td><?php echo $baris->survey_company;?></td>
        <td><?php echo $baris->survey_email;?></td>
        <td><?php echo $baris->survey_phone;?></td>
        <td><?php if($baris->sector=="Others"){echo $baris->other_sector;}else{echo $baris->sector;} ?></td>
        <td><?php echo $baris->product;?></td>
        <td><?php echo $baris->q1;?><?php if($baris->q1=="Lainnya"){echo ", ".$baris->other_q1;} ?></td>
        <td><?php echo $baris->q41;?></td>
        <td><?php echo $baris->q42;?></td>
        <td><?php echo $baris->q43;?></td>
        <td><?php echo $baris->q44;?></td>
        <td><?php echo $baris->q2;?><?php if($baris->q2=="Tidak tepat waktu"){echo ", ".$baris->other_q2;} ?></td>
        <td><?php echo $baris->q31;?></td>
        <td><?php echo $baris->q32;?></td>
        <td><?php echo $baris->q33;?></td>
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