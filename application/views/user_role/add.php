<section class="content-header">
  <h1>ADD ROLE</h1>
</section>
<section class="content">
<div class="box box-primary">
  <div class="box-body">
  <form name="form-validate" class="form-horizontal" method="post" action="<?php echo site_url(); ?>/user_role/add">

  <div class="form-group form-group-sm">
    <label for="role" class="col-sm-2 control-label">User Role Name</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" name="role" value="<?php echo set_value('role'); ?>" placeholder="Enter Customer Type Name">
    </div>
  </div>
  <span class="help-block"> <?php echo form_error('role'); ?></span>

  <div class="form-group form-group-sm">
    <label for="role" class="col-sm-2 control-label">User Role List</label>

<div class="row">
    <div class="col-sm-3">
    <input type="hidden" name="admin_login" value="0">
    <br><span class="box-heading"><input type="checkbox" name="admin_login" value="1"> Admin Login</span>

    <input type="hidden" name="admin_view_selling" value="0">
    <br><span class="box-heading"><input type="checkbox" name="admin_view" value="1"> Admin View</span>

    <input type="hidden" name="user_list" value="0">
    <br><span class="box-heading"><input type="checkbox" name="user_list" value="1"> User List</span>

    <input type="hidden" name="user_role" value="0">
    <br><span class="box-heading"><input type="checkbox" name="user_role" value="1"> User Role</span>
</div>

    <div class="col-sm-3">

    <input type="hidden" name="notification" value="0">
    <br><span class="box-heading"><input type="checkbox" name="notification" value="1"> Notification</span>

    </div>
</div>

  <div class="box-footer">
    <button type="submit" class="btn btn-xs btn-primary" id="save">Submit</button>
    <button type="button" class="btn btn-xs btn-danger" onclick="window.location.href='<?php echo site_url() ?>/user_role'; return false;">Cancel</button>
  </div>

  </form>
  </div>
</div>    
</section>