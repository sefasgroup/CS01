<section class="content-header">
  <h1>PERIODE</h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo site_url('periode/get_survey_sk_jakarta'); ?>"><i class="fa fa-list"></i> SK Jakarta</a></li>
    <li class="active">List</li>
  </ol>
</section>
<section class="content">

<div class="box box-primary">
<div class="box-body">

  <table id="myTable" class="table table-striped" cellspacing="0" style="font-size: 12px;">
    <thead>
    <form name="cari" action="<?php echo site_url() ?>periode/get_survey_sk_jakarta" method="GET">
          <tr> 
              <th width="160" colspan="4">
                  <div class="btn-group">  
                    <button type="button" data-toggle="modal" class="btn btn-primary" data-target="#add-period">Add</button>
                  </div>
              </th> 
          </tr>
      </form>
      <tr class="success">
        <th>#</th>
        <th>Name</th>
        <th>Start Date</th>
        <th>End Date</th>
      </tr>
    </thead>
    <?php 
    $per_page = abs($this->input->get('per_page'));
    $no = $per_page + 1;
    $year = date('Y');
    if(count($periode->result()) > 0) {
    ?>
    <tbody> 
    <?php
      foreach($periode->result() as $baris){
    ?>
      <tr>
        <td><a href="#" data-toggle="modal" data-target="#modal-period<?php echo $baris->id_periode ?>">Edit</a> | <a href="<?php echo site_url('periode/delete_periode/'.$baris->id_periode); ?>" onclick="return confirm('Yakin menghapus data ini ?')" >Delete</a></td>
        <td><?php echo $baris->name_periode;?></td>
        <td><?php echo date('d M Y',strtotime($year.'-'.$baris->start_date_periode));?></td>
        <td><?php echo date('d M Y',strtotime($year.'-'.$baris->end_date_periode));?></td>
      </tr>

        <div class="modal fade" id="modal-period<?php echo $baris->id_periode ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="ModalLabel">Edit Periode</h4>
                    </div>
                <form name="form-validate" id="changestate" class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url() ?>periode/update_periode/<?php echo $baris->id_periode;?>">
                <div class="modal-body">   
                    <div class="form-group">
                        <label>Start Date :</label>
                        <input type="text" class="form-control datepicker" name="start_date" value="<?php echo $year.'-'.$baris->start_date_periode ?>" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>End Date :</label>
                        <input type="text" class="form-control datepicker" name="end_date" value="<?php echo $year.'-'.$baris->end_date_periode ?>" required autocomplete="off">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="savestate">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
                </form>
                </div>
            </div>
        </div>

    <?php
      }
    ?>
      <tr class="success">
        <th colspan="9">Total : <span class="badge"><?php echo $total->row()->total;?></span></th>
      </tr>
    </tbody> 

    <tfoot>
      <tr>
        <td colspan="9">
          <div class="pagination"><?php echo $this->pagination->create_links(); ?></div>
        </td>
  <?php
    } else {
  ?>
  
  <table id="myTable" class="table table-striped table-hover tablesorter" cellspacing="0"> 

    <tbody> 
      <td colspan="9" align="center">No Data</td>    
    </tbody>
  </table>    
  <?php } ?>

  <!--  add modal -->
  <div class="modal fade" id="add-period">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Periode</h4>
        </div>
        <form name="form-validate" class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url() ?>periode/add_periode">
        <div class="modal-body">
              <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name"required autocomplete="off">
              </div>
              <div class="form-group">
                  <label>Start Date :</label>
                  <input type="text" class="form-control datepicker" name="start_date" required autocomplete="off">
              </div>
              <div class="form-group">
                  <label>End Date :</label>
                  <input type="text" class="form-control datepicker" name="end_date" required autocomplete="off">
              </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="savestate">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        </form>
      </div>
    </div>
  </div>

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
<script>
$(document).ready(function () {
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
      orientation: 'bottom'
  });
});
</script>

