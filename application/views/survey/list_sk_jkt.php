<section class="content-header">
  <h1>LIST SURVEY SK JAKARTA SELATAN</h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo site_url('home/get_survey_sk_jakarta'); ?>"><i class="fa fa-list"></i> SK Jakarta</a></li>
    <li class="active">List</li>
  </ol>
</section>
<section class="content">

<div class="box box-primary">
<div class="box-body">

  <table id="myTable" class="table table-striped" cellspacing="0" style="font-size: 12px;">
    <thead>
    <form name="cari" action="<?php echo site_url() ?>home/get_survey_sk_jakarta" method="GET">
          <tr>
              <th><div align="center">#</div></th> 
              <th>
                <select name="quartal" class="form-control" required>
                  <option value="">- Quarter -</option>
                  <option value="Q1" <?php if (isset($_GET['quartal']) && $_GET['quartal'] == 'Q1') { echo "selected";} ?>>Q1</option>
                  <option value="Q2" <?php if (isset($_GET['quartal']) && $_GET['quartal'] == 'Q2') { echo "selected";} ?>>Q2</option>
                  <option value="Q3" <?php if (isset($_GET['quartal']) && $_GET['quartal'] == 'Q3') { echo "selected";} ?>>Q3</option>
                  <option value="Q4" <?php if (isset($_GET['quartal']) && $_GET['quartal'] == 'Q4') { echo "selected";} ?>>Q4</option>
                </select>
              </th>
              <th>
                <select name="year" class="form-control">
                  <option value="">- Year -</option>
                  <option value="2020" <?php if (isset($_GET['year']) && $_GET['year'] == '2020') { echo "selected";} ?>>2020</option>
                  <option value="2021" <?php if (isset($_GET['year']) && $_GET['year'] == '2021') { echo "selected";} ?>>2021</option>
                  <option value="2022" <?php if (isset($_GET['year']) && $_GET['year'] == '2022') { echo "selected";} ?>>2022</option>
                  <option value="2023" <?php if (isset($_GET['year']) && $_GET['year'] == '2023') { echo "selected";} ?>>2023</option>
                  <option value="2024" <?php if (isset($_GET['year']) && $_GET['year'] == '2024') { echo "selected";} ?>>2024</option>
                  <option value="2025" <?php if (isset($_GET['year']) && $_GET['year'] == '2025') { echo "selected";} ?>>2025</option>
                </select>
              </th>  
              <th width="160" colspan="4">
                  <div class="btn-group">  
                    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                  </div>
                  <div class="btn-group">  
                    <a class="btn btn-success" href="<?php echo site_url() ?>home/export_excel_sk_jkt"><i class="fa fa-file-excel-o"></i> Export to Excel</a>
                  </div>
              </th> 
          </tr>
      </form>  
      <tr class="success">
        <th>No</th>
        <th>Date</th>
        <th>Name</th>
        <th>Position</th>
        <th>Netsuite ID</th>
        <th>Company</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Quarter</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php 
    $per_page = abs($this->input->get('per_page'));
    $no = $per_page + 1;
    if(count($survey->result()) > 0) {
    ?>
    <tbody> 
    <?php
      foreach($survey->result() as $baris){
    ?>
      <tr>
        <td><a href="<?php echo site_url(); ?>home/view_sk_jakarta/<?php echo $baris->survey_id; ?>"><?php echo $no;?></a></td>
        <td><?php echo date('d M Y H:i a',strtotime($baris->survey_date));?></td>
        <td>
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
        </td>
        <td>
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
        </td>
        <td><?php echo $baris->ns_id;?></td>
        <td><?php echo $baris->survey_company;?></td>
        <td>
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
        </td>
        <td>
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
        </td>
        <td><?php echo strtoupper($baris->quartal).' '.$baris->year;?></td>
        <td>
        <a href="<?php echo site_url() ?>home/delete_survey_sk_jakarta/<?php echo $baris->survey_id;?>" class="btn btn-xs btn-danger" onClick='return confirm("Anda yakin ingin menghapus data ini?")'><span class="glyphicon glyphicon-trash"></span></a>                   
        </td> 
      </tr>
    <?php
      $no++;
      }
    ?>
    <tr class="success">
      <th colspan="10">Total Survey : <span class="badge"><?php echo $total->row()->total;?></span></th>
    </tr>
    </tbody> 

    <tfoot>
      <tr>
        <td colspan="10">
          <div class="pagination"><?php echo $this->pagination->create_links(); ?></div>
        </td>
  <?php
    } else {
  ?>
  
  <table id="myTable" class="table table-striped table-hover tablesorter" cellspacing="0"> 

    <tbody> 
      <td colspan="10" align="center">No Data</td>    
    </tbody>
  </table>    
  <?php } ?>

  </table>
</div>
</div>
</section>
<?php if ($this->session->flashdata('success')){ ?>
<script>
  swal("Success", "Success update data!", "success");
</script>
<?php } ?>
<?php if($this->session->flashdata('failed')){ ?>
<script>
  swal("Error", "Failed update data!", "error");
</script>
<?php } ?>

<?php if ($this->session->flashdata('success_delete')){ ?>
<script>
  swal("Success", "Success delete data!", "success");
</script>
<?php } ?>
<?php if($this->session->flashdata('failed_delete')){ ?>
<script>
  swal("Error", "Failed delete data!", "error");
</script>
<?php } ?>


