<?php
  $dataskjkt = $dataskjkt->row();
  $dataspkaltim = $dataspkaltim->row();
  $dataspkalsel = $dataspkalsel->row();
  $datatpclg = $datatpclg->row();
  $datatptgr = $datatptgr->row();
  $datakamining = $datakamining->row();
  $datassp = $datassp->row();
  $databci = $databci->row();
  $dataskjakut = $dataskjakut->row();
  $dataspkaltara = $dataspkaltara->row();
?>
<section class="content-header">
  <h1>HOME</h1>
  <ol class="breadcrumb">
    <form method="GET" name="cari" id="cari" action="<?php echo site_url('welcome'); ?>">
    <div class="input-group input-group-sm">
      <select name="sbu" class="form-control" style="width: 200px">
          <option value="">- SBU -</option>
          <option value="SK Jakarta Selatan" <?php if (isset($_GET['sbu']) && $_GET['sbu'] == 'SK Jakarta Selatan') { echo "selected";} ?>>SK Jakarta Selatan</option>
          <option value="SP Kaltim" <?php if (isset($_GET['sbu']) && $_GET['sbu'] == 'SP Kaltim') { echo "selected";} ?>>SP Kaltim</option>
          <option value="SP Kalsel" <?php if (isset($_GET['sbu']) && $_GET['sbu'] == 'SP Kalsel') { echo "selected";} ?>>SP Kalsel</option>
          <option value="TP Cilegon" <?php if (isset($_GET['sbu']) && $_GET['sbu'] == 'TP Cilegon') { echo "selected";} ?>>TP Cilegon</option>
          <option value="TP Tangerang" <?php if (isset($_GET['sbu']) && $_GET['sbu'] == 'TP Tangerang') { echo "selected";} ?>>TP Tangerang</option>
          <option value="KA Mining" <?php if (isset($_GET['sbu']) && $_GET['sbu'] == 'KA Mining') { echo "selected";} ?>>KA Mining</option>
          <option value="SSP" <?php if (isset($_GET['sbu']) && $_GET['sbu'] == 'SSP') { echo "selected";} ?>>SSP</option>
          <option value="BCI" <?php if (isset($_GET['sbu']) && $_GET['sbu'] == 'BCI') { echo "selected";} ?>>BCI</option>
          <option value="SK Jakarta Utara" <?php if (isset($_GET['sbu']) && $_GET['sbu'] == 'SK Jakarta Utara') { echo "selected";} ?>>SK Jakarta Utara</option>
          <option value="SP Kaltara" <?php if (isset($_GET['sbu']) && $_GET['sbu'] == 'SP Kaltara') { echo "selected";} ?>>SP Kaltara</option>
      </select>
      <select name="quartal" class="form-control" style="width: 200px">
          <option value="">- Quartal -</option>
          <option value="Q1" value="Q1" <?php if (isset($_GET['quartal']) && $_GET['quartal'] == 'Q1') { echo "selected";} ?>>Quartal 1</option>
          <option value="Q2" value="Q2" <?php if (isset($_GET['quartal']) && $_GET['quartal'] == 'Q2') { echo "selected";} ?>>Quartal 2</option>
          <option value="Q3" value="Q3" <?php if (isset($_GET['quartal']) && $_GET['quartal'] == 'Q3') { echo "selected";} ?>>Quartal 3</option>
          <option value="Q4" value="Q4" <?php if (isset($_GET['quartal']) && $_GET['quartal'] == 'Q4') { echo "selected";} ?>>Quartal 4</option>
      </select>
      <select name="year" class="form-control" style="width: 200px">
          <option value="">- Tahun -</option>
          <option value="2020" <?php if (isset($_GET['year']) && $_GET['year'] == '2020') { echo "selected";} ?>>2020</option>
          <option value="2021" <?php if (isset($_GET['year']) && $_GET['year'] == '2021') { echo "selected";} ?>>2021</option>
          <option value="2022" <?php if (isset($_GET['year']) && $_GET['year'] == '2022') { echo "selected";} ?>>2022</option>
          <option value="2023" <?php if (isset($_GET['year']) && $_GET['year'] == '2023') { echo "selected";} ?>>2023</option>
          <option value="2024" <?php if (isset($_GET['year']) && $_GET['year'] == '2024') { echo "selected";} ?>>2024</option>
          <option value="2025" <?php if (isset($_GET['year']) && $_GET['year'] == '2025') { echo "selected";} ?>>2025</option>
      </select>
          <div class="btn-group">
            <button class="btn btn-sm btn-primary" type="submit"><span class="fa fa-search"></span></button>
          </div>
      </div>
    </form>
  </ol>
</section>
<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#58595b;">
            <div class="inner" style="color:#fff;">
              <h3><?php echo $dataskjkt->total;?></h3>

              <p>SK Jakarta Selatan</p>
            </div>
            <div class="icon" style="color:#6d6e71;">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('home/get_survey_sk_jakarta?quartal='.$dataskjkt->quartal.'&year='.$dataskjkt->year); ?>" class="small-box-footer" style="background-color:#ef6b21;">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#58595b;">
            <div class="inner" style="color:#fff;">
              <h3><?php echo $dataspkaltim->total;?></h3>

              <p>SP Kaltim</p>
            </div>
            <div class="icon" style="color:#6d6e71;">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('home/get_survey_sp_kaltim?quartal='.$dataspkaltim->quartal.'&year='.$dataspkaltim->year); ?>" class="small-box-footer" style="background-color:#ef6b21;">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#58595b;">
            <div class="inner" style="color:#fff;">
              <h3><?php echo $dataspkalsel->total;?></h3>

              <p>SP Kalsel</p>
            </div>
            <div class="icon" style="color:#6d6e71;">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('home/get_survey_sp_kalsel?quartal='.$dataspkalsel->quartal.'&year='.$dataspkalsel->year); ?>" class="small-box-footer" style="background-color:#ef6b21;">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#58595b;">
            <div class="inner" style="color:#fff;">
              <h3><?php echo $datatpclg->total;?></h3>

              <p>TP Cilegon</p>
            </div>
            <div class="icon" style="color:#6d6e71;">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('home/get_survey_tp_cilegon?quartal='.$datatpclg->quartal.'&year='.$datatpclg->year); ?>" class="small-box-footer" style="background-color:#ef6b21;">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#58595b;">
            <div class="inner" style="color:#fff;">
              <h3><?php echo $datatptgr->total;?></h3>

              <p>TP Tangerang</p>
            </div>
            <div class="icon" style="color:#6d6e71;">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('home/get_survey_tp_tangerang?quartal='.$datatptgr->quartal.'&year='.$datatptgr->year); ?>" class="small-box-footer" style="background-color:#ef6b21;">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
	      <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#58595b;">
            <div class="inner" style="color:#fff;">
              <h3><?php echo $datakamining->total;?></h3>

              <p>KA Mining</p>
            </div>
            <div class="icon" style="color:#6d6e71;">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('home/get_survey_ka_mining?quartal='.$datakamining->quartal.'&year='.$datakamining->year); ?>" class="small-box-footer" style="background-color:#ef6b21;">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#58595b;">
            <div class="inner" style="color:#fff;">
              <h3><?php echo $datassp->total;?></h3>

              <p>SSP</p>
            </div>
            <div class="icon" style="color:#6d6e71;">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('home/get_survey_ssp?quartal='.$datassp->quartal.'&year='.$datassp->year); ?>" class="small-box-footer" style="background-color:#ef6b21;">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#58595b;">
            <div class="inner" style="color:#fff;">
              <h3><?php echo $databci->total;?></h3>

              <p>BCI</p>
            </div>
            <div class="icon" style="color:#6d6e71;">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('home/get_survey_bci?quartal='.$databci->quartal.'&year='.$databci->year); ?>" class="small-box-footer" style="background-color:#ef6b21;">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#58595b;">
            <div class="inner" style="color:#fff;">
              <h3><?php echo $dataskjakut->total;?></h3>

              <p>SK Jakarta Utara</p>
            </div>
            <div class="icon" style="color:#6d6e71;">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('home/get_survey_sk_jakut?quartal='.$dataskjakut->quartal.'&year='.$dataskjakut->year); ?>" class="small-box-footer" style="background-color:#ef6b21;">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#58595b;">
            <div class="inner" style="color:#fff;">
              <h3><?php echo $dataspkaltara->total;?></h3>

              <p>SP Kalimantan Utara</p>
            </div>
            <div class="icon" style="color:#6d6e71;">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('home/get_survey_sp_kaltara?quartal='.$dataspkaltara->quartal.'&year='.$dataspkaltara->year); ?>" class="small-box-footer" style="background-color:#ef6b21;">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->

      <div class="col-lg-12">
        <?php 
          $years = $this->session->userdata('years');
          $quartals = $this->session->userdata('quartals');
          $sbu = $this->session->userdata('sbu');
          if($years || $quartals || $sbu){
            $label = $quartals.' '.$years.' '.$sbu;
          }else{
            $label = date('Y');
          }
        ?>

          
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h5 class="box-title">Perusahaan Bapak/Ibu bergerak di sektor <strong><?php echo "- [".$label."]"; ?></strong></h5>
              </div>
              <div class="box-body">
                <div class="chart">
                  <?php
                  if(count($sectorskjkt->result()) >= 1){
                    foreach ($sectorskjkt->result() as $rowss) {
                      $sector[] = $rowss->sector;
                      $total[] = (int) $rowss->total;
                    }
                  }else{
                    $sector[] = 'Empty Data';
                    $total[] = 'Empty Data';
                  }
                  ?>
                  <canvas id="sector"></canvas>
                </div>
              </div>
            </div>
          </div>

          
<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Merekomendasikan SEFAS Group ke perusahaan lain?</h3>
    </div>
    <div class="box-body">
      <div class="chart">
        <?php
        if(count($recomendation->result()) >= 1){
          foreach ($recomendation->result() as $rowr) {
            $choice[] = $rowr->choice;
            $total_choice[] = (int) $rowr->total_choice;
          }
        }else{
          $choice[] = 'Empty Data';
          $total_choice[] = 'Empty Data';
        }
        ?>
        <canvas id="recomendation"></canvas>
      </div>
    </div>
  </div>
</div>


<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Penguasaan aplikasi dan rekomendasi produk</h3>
    </div>
    <div class="box-body">
      <div class="chart">
        <?php
        if(count($penguasaan->result()) >= 1){
          foreach ($penguasaan->result() as $rowp) {
            $penguasaans[] = $rowp->penguasaans;
            $total_penguasaans[] = (int) $rowp->total_penguasaans;
          }
        }else{
          $penguasaans[] = 'Empty Data';
          $total_penguasaans[] = 'Empty Data';
        }
        ?>
        <canvas id="penguasaan"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Kepuasan terhadap solusi yang diberikan tim teknikal</h3>
    </div>
    <div class="box-body">
      <div class="chart">
        <?php
        if(count($kepuasan->result()) >= 1){
          foreach ($kepuasan->result() as $rowk) {
            $kepuasans[] = $rowk->kepuasans;
            $total_kepuasans[] = (int) $rowk->total_kepuasans;
          }
        }else{
          $kepuasans[] = 'Empty Data';
          $total_kepuasans[] = 'Empty Data';
        }
        ?>
        <canvas id="kepuasan"></canvas>
      </div>
    </div>
  </div>
</div>


<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Kecepatan tim teknikal dalam memberikan respon dan komunikasi</h3>
    </div>
    <div class="box-body">
      <div class="chart">
        <?php
        if(count($kecepatan->result()) >= 1){
          foreach ($kecepatan->result() as $rowke) {
            $kecepatans[] = $rowke->kecepatans;
            $total_kecepatans[] = (int) $rowke->total_kecepatans;
          }
        }else{
          $kecepatans[] = 'Empty Data';
          $total_kecepatans[] = 'Empty Data';
        }
        ?>
        <canvas id="kecepatan"></canvas>
      </div>
    </div>
  </div>
</div>


<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Penyampaian informasi terkait aktivitas marketing dan promo</h3>
    </div>
    <div class="box-body">
      <div class="chart">
        <?php
        if(count($penyampaian->result()) >= 1){
          foreach ($penyampaian->result() as $rowpe) {
            $penyampaians[] = $rowpe->penyampaians;
            $total_penyampaians[] = (int) $rowpe->total_penyampaians;
          }
        }else{
          $penyampaians[] = 'Empty Data';
          $total_penyampaians[] = 'Empty Data';
        }
        ?>
        <canvas id="penyampaian"></canvas>
      </div>
    </div>
  </div>
</div>


<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Memberikan solusi atas pertanyaan pelanggan</h3>
    </div>
    <div class="box-body">
      <div class="chart">
        <?php
        if(count($memberikan->result()) >= 1){
          foreach ($memberikan->result() as $rowm) {
            $memberikans[] = $rowm->memberikans;
            $total_memberikans[] = (int) $rowm->total_memberikans;
          }
        }else{
          $memberikans[] = 'Empty Data';
          $total_memberikans[] = 'Empty Data';
        }
        ?>
        <canvas id="memberikan"></canvas>
      </div>
    </div>
  </div>
</div>


<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Pengetahuan tim sales akan produk dan layanan SEFAS</h3>
    </div>
    <div class="box-body">
      <div class="chart">
        <?php
        if(count($pengetahuan->result()) >= 1){
          foreach ($pengetahuan->result() as $rowpg) {
            $pengetahuans[] = $rowpg->pengetahuans;
            $total_pengetahuans[] = (int) $rowpg->total_pengetahuans;
          }
        }else{
          $pengetahuans[] = 'Empty Data';
          $total_pengetahuans[] = 'Empty Data';
        }
        ?>
        <canvas id="pengetahuan"></canvas>
      </div>
    </div>
  </div>
</div>


<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Kecepatan tim sales dalam memberikan respon</h3>
    </div>
    <div class="box-body">
      <div class="chart">
        <?php
        if(count($kecepatan_sales->result()) >= 1){
          foreach ($kecepatan_sales->result() as $rowks) {
            $kecepatan_saless[] = $rowks->kecepatan_saless;
            $total_kecepatan_saless[] = (int) $rowks->total_kecepatan_saless;
          }
        }else{
          $kecepatan_saless[] = 'Empty Data';
          $total_kecepatan_saless[] = 'Empty Data';
        }
        ?>
        <canvas id="kecepatan_sales"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h5 class="box-title">Bagaimana penilaian Anda terhadap kesesuaian tim logistik dalam memberikan pesanan Anda?</h5>
    </div>
    <div class="box-body">
      <div class="chart">
        <?php
        if($kesesuian_logistic){
          if(count($kesesuian_logistic->result()) >= 1){
            foreach ($kesesuian_logistic->result() as $rowkl) {
              $kesesuaian_logistics[] = $rowkl->kesesuaian_logistics;
              $total_kesesuaian_logistics[] = (int) $rowkl->total_kesesuaian_logistics;
            }
          }else{
            $kesesuaian_logistics[] = 'Empty Data';
            $total_kesesuaian_logistics[] = 'Empty Data';
          }
        }else{
          $kesesuaian_logistics[] = 'Empty Data';
          $total_kesesuaian_logistics[] = 'Empty Data';
        }
        ?>
        <canvas id="kesesuaian_logistic"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h5 class="box-title">Bagaimana penilaian Anda terhadap ketepatan waktu tim logistik dalam melakukan pengiriman pesanan Anda?</h5>
    </div>
    <div class="box-body">
      <div class="chart">
        <?php
        if(count($ketepatan_logistic->result()) >= 1){
          foreach ($ketepatan_logistic->result() as $rowklo) {
            $ketepatan_logistics[] = $rowklo->ketepatan_logistics;
            $total_ketepatan_logistics[] = (int) $rowklo->total_ketepatan_logistics;
          }
        }else{
          $ketepatan_logistics[] = 'Empty Data';
          $total_ketepatan_logistics[] = 'Empty Data';
        }
        ?>
        <canvas id="ketepatan_logistic"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h5 class="box-title">Menurut Bapak/Ibu, manakah hal yang paling penting dalam memilih rekanan supplier?</h5>
    </div>
    <div class="box-body">
      <div class="chart">
        <?php
        if(count($rekanan_supplier->result()) >= 1){
          foreach ($rekanan_supplier->result() as $rowrs) {
            $rekanan_suppliers[] = $rowrs->rekanan_suppliers;
            $total_rekanan_suppliers[] = (int) $rowrs->total_rekanan_suppliers;
          }
        }else{
          $rekanan_suppliers[] = 'Empty Data';
          $total_rekanan_suppliers[] = 'Empty Data';
        }
        ?>
        <canvas id="rekanan_supplier"></canvas>
      </div>
    </div>
  </div>
</div>



      </div>
      <!-- /.row -->
        </div>
</section>
<script>
$(function() {
    // ChartJS

      //Chart Recomendation
      const labelrecomendation = <?php echo json_encode($choice);?>;
      const backgroundcolorrecomendation = [];
      
      for(i = 0;i < labelrecomendation.length; i++){
        if(labelrecomendation[i] == 'Ya'){ backgroundcolorrecomendation.push('rgba(146, 183, 138,1)')}
        if(labelrecomendation[i] == 'Tidak'){ backgroundcolorrecomendation.push('rgba(239, 154, 154,1)')}
      }

      var PieChartRecomend = document.getElementById('recomendation').getContext('2d');
      var PieChartR = new Chart(PieChartRecomend,{
          type:'pie',
          data:{
              labels:<?php echo json_encode($choice);?>,
              datasets:[{
                  label:<?php echo json_encode($choice);?>,
                  backgroundColor: backgroundcolorrecomendation,
                  borderColor:[
                              "#fdeedc",
                              "#fdeedc"
                          ],
                  data:<?php echo json_encode($total_choice);?>,
              }],
          },
          options: {
          responsive: true,
          tooltips: {
              callbacks: {
                  label: function(tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    }
              }
          },
          legend: {
              display: true,
              position: "right",
              labels: {
                  fontColor: "#333",
                  fontSize: 10
                  }
              }
          }
      });

      //Chart Penguasaan
      const labelpenguasaan = <?php echo json_encode($penguasaans);?>;
      const backgroundcolorpenguasaan = [];

      for(i = 0;i < labelpenguasaan.length; i++){
        if(labelpenguasaan[i] == 'Sangat Baik'){ backgroundcolorpenguasaan.push('rgba(146, 183, 138,1)')}
        if(labelpenguasaan[i] == 'Baik'){ backgroundcolorpenguasaan.push('rgba(206, 221, 122,1)')}
        if(labelpenguasaan[i] == 'Cukup'){ backgroundcolorpenguasaan.push('rgba(249, 239, 147,1)')}
        if(labelpenguasaan[i] == 'Tidak Baik'){ backgroundcolorpenguasaan.push('rgba(252, 201, 126,1)')}
        if(labelpenguasaan[i] == 'Sangat Tidak Baik'){ backgroundcolorpenguasaan.push('rgba(239, 154, 154,1)')}
      }

      var PieChartPenguasaan = document.getElementById('penguasaan').getContext('2d');
      var PieChartP = new Chart(PieChartPenguasaan,{
          type:'pie',
          data:{
              labels:<?php echo json_encode($penguasaans);?>,
              datasets:[{
                  label:<?php echo json_encode($penguasaans);?>,
                  backgroundColor: backgroundcolorpenguasaan,
                  borderColor:[
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0"
                          ],
                  data:<?php echo json_encode($total_penguasaans);?>,
              }],
          },
          options: {
          responsive: true,
          tooltips: {
              callbacks: {
                  label: function(tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    }
              }
          },
          legend: {
              display: true,
              position: "right",
              labels: {
                  fontColor: "#333",
                  fontSize: 10
                  }
              }
          }
      });

      //Chart Kepuasan
      const labelkepuasan = <?php echo json_encode($kepuasans);?>;
      const backgroundcolorkepuasan = [];

      for(i = 0;i < labelkepuasan.length; i++){
        if(labelkepuasan[i] == 'Sangat Baik'){ backgroundcolorkepuasan.push('rgba(146, 183, 138,1)')}
        if(labelkepuasan[i] == 'Baik'){ backgroundcolorkepuasan.push('rgba(206, 221, 122,1)')}
        if(labelkepuasan[i] == 'Cukup'){ backgroundcolorkepuasan.push('rgba(249, 239, 147,1)')}
        if(labelkepuasan[i] == 'Tidak Baik'){ backgroundcolorkepuasan.push('rgba(252, 201, 126,1)')}
        if(labelkepuasan[i] == 'Sangat Tidak Baik'){ backgroundcolorkepuasan.push('rgba(239, 154, 154,1)')}
      }

      var PieChartKepuasan = document.getElementById('kepuasan').getContext('2d');
      var PieChartK = new Chart(PieChartKepuasan,{
          type:'pie',
          data:{
              labels:<?php echo json_encode($kepuasans);?>,
              datasets:[{
                  label:<?php echo json_encode($kepuasans);?>,
                  backgroundColor: backgroundcolorkepuasan,
                  borderColor:[
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0"
                          ],
                  data:<?php echo json_encode($total_kepuasans);?>,
              }],
          },
          options: {
          responsive: true,
          tooltips: {
              callbacks: {
                  label: function(tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    }
              }
          },
          legend: {
              display: true,
              position: "right",
              labels: {
                  fontColor: "#333",
                  fontSize: 10
                  }
              }
          }
      });



      //Chart Kecepatan
      const labelkecepatan = <?php echo json_encode($kecepatans);?>;
      const backgroundcolorkecepatan = [];

      for(i = 0;i < labelkecepatan.length; i++){
        if(labelkecepatan[i] == 'Sangat Baik'){ backgroundcolorkecepatan.push('rgba(146, 183, 138,1)')}
        if(labelkecepatan[i] == 'Baik'){ backgroundcolorkecepatan.push('rgba(206, 221, 122,1)')}
        if(labelkecepatan[i] == 'Cukup'){ backgroundcolorkecepatan.push('rgba(249, 239, 147,1)')}
        if(labelkecepatan[i] == 'Tidak Baik'){ backgroundcolorkecepatan.push('rgba(252, 201, 126,1)')}
        if(labelkecepatan[i] == 'Sangat Tidak Baik'){ backgroundcolorkecepatan.push('rgba(239, 154, 154,1)')}
      }

      var PieChartKecepatan = document.getElementById('kecepatan').getContext('2d');
      var PieChartKe = new Chart(PieChartKecepatan,{
          type:'pie',
          data:{
              labels:<?php echo json_encode($kecepatans);?>,
              datasets:[{
                  label:<?php echo json_encode($kecepatans);?>,
                  backgroundColor: backgroundcolorkecepatan,
                  borderColor:[
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0"
                          ],
                  data:<?php echo json_encode($total_kecepatans);?>,
              }],
          },
          options: {
          responsive: true,
          tooltips: {
              callbacks: {
                  label: function(tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    }
              }
          },
          legend: {
              display: true,
              position: "right",
              labels: {
                  fontColor: "#333",
                  fontSize: 10
                  }
              }
          }
      });


      //Chart Penyampaian
      const labelpenyampaian = <?php echo json_encode($penyampaians);?>;
      const backgroundcolorpenyampaian = [];

      for(i = 0;i < labelpenyampaian.length; i++){
        if(labelpenyampaian[i] == 'Sangat Baik'){ backgroundcolorpenyampaian.push('rgba(146, 183, 138,1)')}
        if(labelpenyampaian[i] == 'Baik'){ backgroundcolorpenyampaian.push('rgba(206, 221, 122,1)')}
        if(labelpenyampaian[i] == 'Cukup'){ backgroundcolorpenyampaian.push('rgba(249, 239, 147,1)')}
        if(labelpenyampaian[i] == 'Tidak Baik'){ backgroundcolorpenyampaian.push('rgba(252, 201, 126,1)')}
        if(labelpenyampaian[i] == 'Sangat Tidak Baik'){ backgroundcolorpenyampaian.push('rgba(239, 154, 154,1)')}
      }

      var PieChartPenyampaian = document.getElementById('penyampaian').getContext('2d');
      var PieChartPe = new Chart(PieChartPenyampaian,{
          type:'pie',
          data:{
              labels:<?php echo json_encode($penyampaians);?>,
              datasets:[{
                  label:<?php echo json_encode($penyampaians);?>,
                  backgroundColor: backgroundcolorpenyampaian,
                  borderColor:[
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0"
                          ],
                  data:<?php echo json_encode($total_penyampaians);?>,
              }],
          },
          options: {
          responsive: true,
          tooltips: {
              callbacks: {
                  label: function(tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    }
              }
          },
          legend: {
              display: true,
              position: "right",
              labels: {
                  fontColor: "#333",
                  fontSize: 10
                  }
              }
          }
      });

      
      //Chart Memberikan
      const labelmemberikan = <?php echo json_encode($memberikans);?>;
      const backgroundcolormemberikan = [];

      for(i = 0;i < labelmemberikan.length; i++){
        if(labelmemberikan[i] == 'Sangat Baik'){ backgroundcolormemberikan.push('rgba(146, 183, 138,1)')}
        if(labelmemberikan[i] == 'Baik'){ backgroundcolormemberikan.push('rgba(206, 221, 122,1)')}
        if(labelmemberikan[i] == 'Cukup'){ backgroundcolormemberikan.push('rgba(249, 239, 147,1)')}
        if(labelmemberikan[i] == 'Tidak Baik'){ backgroundcolormemberikan.push('rgba(252, 201, 126,1)')}
        if(labelmemberikan[i] == 'Sangat Tidak Baik'){ backgroundcolormemberikan.push('rgba(239, 154, 154,1)')}
      }

      var PieChartMemberikan = document.getElementById('memberikan').getContext('2d');
      var PieChartMe = new Chart(PieChartMemberikan,{
          type:'pie',
          data:{
              labels:<?php echo json_encode($memberikans);?>,
              datasets:[{
                  label:<?php echo json_encode($memberikans);?>,
                  backgroundColor: backgroundcolormemberikan,
                  borderColor:[
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0"
                          ],
                  data:<?php echo json_encode($total_memberikans);?>,
              }],
          },
          options: {
          responsive: true,
          tooltips: {
              callbacks: {
                  label: function(tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    }
              }
          },
          legend: {
              display: true,
              position: "right",
              labels: {
                  fontColor: "#333",
                  fontSize: 10
                  }
              }
          }
      });

      
      //Chart Pengetahuan
      const labelpengetahuan = <?php echo json_encode($pengetahuans);?>;
      const backgroundcolorpengetahuan = [];

      for(i = 0;i < labelpengetahuan.length; i++){
        if(labelpengetahuan[i] == 'Sangat Baik'){ backgroundcolorpengetahuan.push('rgba(146, 183, 138,1)')}
        if(labelpengetahuan[i] == 'Baik'){ backgroundcolorpengetahuan.push('rgba(206, 221, 122,1)')}
        if(labelpengetahuan[i] == 'Cukup'){ backgroundcolorpengetahuan.push('rgba(249, 239, 147,1)')}
        if(labelpengetahuan[i] == 'Tidak Baik'){ backgroundcolorpengetahuan.push('rgba(252, 201, 126,1)')}
        if(labelpengetahuan[i] == 'Sangat Tidak Baik'){ backgroundcolorpengetahuan.push('rgba(239, 154, 154,1)')}
      }

      var PieChartPengetahuan = document.getElementById('pengetahuan').getContext('2d');
      var PieChartPen = new Chart(PieChartPengetahuan,{
          type:'pie',
          data:{
              labels:<?php echo json_encode($pengetahuans);?>,
              datasets:[{
                  label:<?php echo json_encode($pengetahuans);?>,
                  backgroundColor: backgroundcolorpengetahuan,
                  borderColor:[
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0"
                          ],
                  data:<?php echo json_encode($total_pengetahuans);?>,
              }],
          },
          options: {
          responsive: true,
          tooltips: {
              callbacks: {
                  label: function(tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    }
              }
          },
          legend: {
              display: true,
              position: "right",
              labels: {
                  fontColor: "#333",
                  fontSize: 10
                  }
              }
          }
      });

      
      //Chart Kecepatan Sales
      const labelkecepatansales = <?php echo json_encode($kecepatan_saless);?>;
      const backgroundcolorkecepatansales = [];

      for(i = 0;i < labelkecepatansales.length; i++){
        if(labelkecepatansales[i] == 'Sangat Baik'){ backgroundcolorkecepatansales.push('rgba(146, 183, 138,1)')}
        if(labelkecepatansales[i] == 'Baik'){ backgroundcolorkecepatansales.push('rgba(206, 221, 122,1)')}
        if(labelkecepatansales[i] == 'Cukup'){ backgroundcolorkecepatansales.push('rgba(249, 239, 147,1)')}
        if(labelkecepatansales[i] == 'Tidak Baik'){ backgroundcolorkecepatansales.push('rgba(252, 201, 126,1)')}
        if(labelkecepatansales[i] == 'Sangat Tidak Baik'){ backgroundcolorkecepatansales.push('rgba(239, 154, 154,1)')}
      }

      var PieChartKecepatanSales = document.getElementById('kecepatan_sales').getContext('2d');
      var PieChartKs = new Chart(PieChartKecepatanSales,{
          type:'pie',
          data:{
              labels:<?php echo json_encode($kecepatan_saless);?>,
              datasets:[{
                  label:<?php echo json_encode($kecepatan_saless);?>,
                  backgroundColor: backgroundcolorkecepatansales,
                  borderColor:[
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0"
                          ],
                  data:<?php echo json_encode($total_kecepatan_saless);?>,
              }],
          },
          options: {
          responsive: true,
          tooltips: {
              callbacks: {
                  label: function(tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    }
              }
          },
          legend: {
              display: true,
              position: "right",
              labels: {
                  fontColor: "#333",
                  fontSize: 10
                  }
              }
          }
      });

      
      //Chart Kesesuaian Logistic
      const labelkesesuaian = <?php echo json_encode($kesesuaian_logistics);?>;
      const backgroundcolorkesesuaian = [];

      for(i = 0;i < labelkesesuaian.length; i++){
        if(labelkesesuaian[i] == 'Sesuai dengan yang dipesan'){ backgroundcolorkesesuaian.push('rgba(146, 183, 138,1)')}
        if(labelkesesuaian[i] == 'Tidak sesuai'){ backgroundcolorkesesuaian.push('rgba(239, 154, 154,1)')}
      }

      var PieChartKesesuaianLogistic = document.getElementById('kesesuaian_logistic').getContext('2d');
      var PieChartKl = new Chart(PieChartKesesuaianLogistic,{
          type:'pie',
          data:{
              labels:<?php echo json_encode($kesesuaian_logistics);?>,
              datasets:[{
                  label:<?php echo json_encode($kesesuaian_logistics);?>,
                  backgroundColor: backgroundcolorkesesuaian,
                  borderColor:[
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0"
                          ],
                  data:<?php echo json_encode($total_kesesuaian_logistics);?>,
              }],
          },
          options: {
          responsive: true,
          tooltips: {
              callbacks: {
                  label: function(tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    }
              }
          },
          legend: {
              display: true,
              position: "right",
              labels: {
                  fontColor: "#333",
                  fontSize: 10
                  }
              }
          }
      });
      
      
      //Chart ketepatan Logistic
      const labelketepatan = <?php echo json_encode($ketepatan_logistics);?>;
      const backgroundcolorketepatan = [];

      for(i = 0;i < labelketepatan.length; i++){
        if(labelketepatan[i] == 'Tepat waktu'){ backgroundcolorketepatan.push('rgba(146, 183, 138,1)')}
        if(labelketepatan[i] == 'Tidak tepat waktu'){ backgroundcolorketepatan.push('rgba(239, 154, 154,1)')}
      }
      var PieChartKetepatanLogistic = document.getElementById('ketepatan_logistic').getContext('2d');
      var PieChartKlo = new Chart(PieChartKetepatanLogistic,{
          type:'pie',
          data:{
              labels:<?php echo json_encode($ketepatan_logistics);?>,
              datasets:[{
                  label:<?php echo json_encode($ketepatan_logistics);?>,
                  backgroundColor: backgroundcolorketepatan,
                  borderColor:[
                              "#fcf7f0",
                              "#fcf7f0"
                          ],
                  data:<?php echo json_encode($total_ketepatan_logistics);?>,
              }],
          },
          options: {
          responsive: true,
          tooltips: {
              callbacks: {
                  label: function(tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    }
              }
          },
          legend: {
              display: true,
              position: "right",
              labels: {
                  fontColor: "#333",
                  fontSize: 10
                  }
              }
          }
      });
      
      
      //Chart rekanan supplier
      const labelrekanan = <?php echo json_encode($rekanan_suppliers);?>;
      const backgroundcolorrekanan = [];

      for(i = 0;i < labelrekanan.length; i++){
        if(labelrekanan[i] == 'Produk'){ backgroundcolorrekanan.push('rgba(248, 195, 159,1)')}
        if(labelrekanan[i] == 'Kualitas produk'){ backgroundcolorrekanan.push('rgba(197, 219, 183,1)')}
        if(labelrekanan[i] == 'Layanan/jasa'){ backgroundcolorrekanan.push('rgba(146, 202, 242,1)')}
        if(labelrekanan[i] == 'Ketersediaan produk'){ backgroundcolorrekanan.push('rgba(252, 201, 126,1)')}
        if(labelrekanan[i] == 'Lainnya'){ backgroundcolorrekanan.push('rgba(239, 154, 154,1)')}
      }
      var PieChartRekananSupplier = document.getElementById('rekanan_supplier').getContext('2d');
      var PieChartRs = new Chart(PieChartRekananSupplier,{
          type:'pie',
          data:{
              labels:<?php echo json_encode($rekanan_suppliers);?>,
              datasets:[{
                  label:<?php echo json_encode($rekanan_suppliers);?>,
                  backgroundColor: backgroundcolorrekanan,
                  borderColor:[
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0",
                              "#fcf7f0"
                          ],
                  data:<?php echo json_encode($total_rekanan_suppliers);?>,
              }],
          },
          options: {
          responsive: true,
          tooltips: {
              callbacks: {
                  label: function(tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    }
              }
          },
          legend: {
              display: true,
              position: "right",
              labels: {
                  fontColor: "#333",
                  fontSize: 10
                  }
              }
          }
      });

           
      //Chart Sector
      const label = <?php echo json_encode($sector);?>;
      const backgroundcolor = [];

      for(i = 0;i < label.length; i++){
        if(label[i] == 'Agriculture'){ backgroundcolor.push('#c5dbb7')}
        if(label[i] == 'Cement'){ backgroundcolor.push('#a9a68e')}
        if(label[i] == 'Construction'){ backgroundcolor.push('#f8c39f')}
        if(label[i] == 'Fleet'){ backgroundcolor.push('#bedeee')}
        if(label[i] == 'General Manufacture'){ backgroundcolor.push('#ffa8a1')}
        if(label[i] == 'Mining'){ backgroundcolor.push('#83b5a6')}
        if(label[i] == 'Oil and Gas'){ backgroundcolor.push('#92caf2')}
        if(label[i] == 'Power and Energy'){ backgroundcolor.push('#98aedf')}
        if(label[i] == 'Steel'){ backgroundcolor.push('#fae6ac')}
        if(label[i] == 'Word Paper & Pulp'){ backgroundcolor.push('#be9c73')}
        if(label[i] == 'Others'){ backgroundcolor.push('#aea9e3')}
      }

      var PieChartSector = document.getElementById('sector').getContext('2d');
      var PieChartC = new Chart(PieChartSector,{
          type:'pie',
          data:{
              labels:<?php echo json_encode($sector);?>,
              datasets:[{
                  label:<?php echo json_encode($sector);?>,
                  backgroundColor: backgroundcolor,
                  borderColor:[
                              "#fdeedc",
                              "#fdeedc",
                              "#fdeedc",
                              "#fdeedc",
                              "#fdeedc",
                              "#fdeedc",
                              "#fdeedc",
                              "#fdeedc",
                              "#fcf7f0"
                          ],
                  data:<?php echo json_encode($total);?>,
              }],
          },
          options: {
          responsive: true,
          tooltips: {
              callbacks: {
                  label: function(tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    }
              }
          },
          legend: {
              display: true,
              position: "right",
              labels: {
                  fontColor: "#333",
                  fontSize: 10
                  }
              }
          }
      });

});
</script>
