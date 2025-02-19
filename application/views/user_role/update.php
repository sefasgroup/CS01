<?php 
    $baris = $role->row();
?>
<section class="content-header">
  <h1>UPDATE ROLE</h1>
</section>
<section class="content">
<div class="box box-primary">
    <div class="box-body">
    <form name="form-validate" class="form-horizontal" method="post" action="<?php echo site_url(); ?>/user_role/update/<?php echo $baris->id; ?>">
    
    <div class="form-group form-group-sm">
        <label for="role" class="col-sm-2 control-label">User Role Name</label>
        <div class="col-sm-7">
        <input type="text" class="form-control" name="role" value="<?php echo $baris->name_role; ?>" placeholder="Enter User Role Name">
        </div>
    </div>
    <span class="help-block"> <?php echo form_error('role'); ?> </span>

    <div class="form-group form-group-sm">
    <label for="role" class="col-sm-2 control-label">User Role List</label>

<div class="row">
    <div class="col-sm-3">
    <?php $admin_login = $this->acl->get_role_id_permissions($baris->id)->admin_login;?>
    <input type="hidden" name="admin_login" value="0">
    <br><span class="box-heading"><input type="checkbox" name="admin_login" value="1" <?php if($admin_login==1){echo "checked=checked";}?>> Admin Login</span>

    <?php $admin_view = $this->acl->get_role_id_permissions($baris->id)->admin_view;?>
    <input type="hidden" name="admin_view" value="0">
    <br><span class="box-heading"><input type="checkbox" name="admin_view" value="1" <?php if($admin_view==1){echo "checked=checked";}?>> Admin View</span>

    <?php $user_list = $this->acl->get_role_id_permissions($baris->id)->user_list;?>
    <input type="hidden" name="user_list" value="0">
    <br><span class="box-heading"><input type="checkbox" name="user_list" value="1" <?php if($user_list==1){echo "checked=checked";}?>> User List</span>

    <?php $user_role = $this->acl->get_role_id_permissions($baris->id)->user_role;?>
    <input type="hidden" name="user_role" value="0">
    <br><span class="box-heading"><input type="checkbox" name="user_role" value="1" <?php if($user_role==1){echo "checked=checked";}?>> User Role</span>
    </div>

    <?php $notification = $this->acl->get_role_id_permissions($baris->id)->notification;?>
    <input type="hidden" name="notification" value="0">
    <br><span class="box-heading"><input type="checkbox" name="notification" value="1" <?php if($notification==1){echo "checked=checked";}?>> Notification</span>
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