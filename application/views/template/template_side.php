<?php
  $user_list = $this->acl->get_user_permissions()->user_list;
  $user_role = $this->acl->get_user_permissions()->user_role;
?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/photo/<?php echo $this->acl->get_user()->photo;?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->acl->get_user()->name_user;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        <li>
          <a href="<?php echo site_url('welcome'); ?>">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('home/get_survey_sk_jakarta'); ?>">
            <i class="fa fa-list"></i> <span>SK Jakarta Selatan</span>
          </a>
          <a href="<?php echo site_url('home/get_survey_sp_kaltim'); ?>">
            <i class="fa fa-list"></i> <span>SP Kaltim</span>
          </a>
          <a href="<?php echo site_url('home/get_survey_sp_kalsel'); ?>">
            <i class="fa fa-list"></i> <span>SP Kalsel</span>
          </a>
          <a href="<?php echo site_url('home/get_survey_tp_cilegon'); ?>">
            <i class="fa fa-list"></i> <span>TP Cilegon</span>
          </a>
          <a href="<?php echo site_url('home/get_survey_tp_tangerang'); ?>">
            <i class="fa fa-list"></i> <span>TP Tangerang</span>
          </a>
	        <a href="<?php echo site_url('home/get_survey_ka_mining'); ?>">
            <i class="fa fa-list"></i> <span>KA Mining</span>
          </a>
          <a href="<?php echo site_url('home/get_survey_ssp'); ?>">
            <i class="fa fa-list"></i> <span>SSP</span>
          </a>
          <a href="<?php echo site_url('home/get_survey_bci'); ?>">
            <i class="fa fa-list"></i> <span>BCI</span>
          </a>
          <a href="<?php echo site_url('home/get_survey_sk_jakut'); ?>">
            <i class="fa fa-list"></i> <span>SK Jakarta Utara</span>
          </a>
          <a href="<?php echo site_url('home/get_survey_sp_kaltara'); ?>">
            <i class="fa fa-list"></i> <span>SP Kaltara</span>
          </a>
        </li>
        <?php if($user_list=='1' or $user_role=='1'){ ?>
        <li class="header">SETTING</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>User Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <?php }?>
          <ul class="treeview-menu">
            <?php if($user_list=='1'){ ?>
            <li><a href="<?php echo site_url('user_list'); ?>"><i class="fa fa-circle-o"></i> User List</a></li>
            <?php }?>
            <?php if($user_role=='1'){ ?>
            <li><a href="<?php echo site_url('user_role'); ?>"><i class="fa fa-circle-o"></i> User Role</a></li>
            <?php }?>
            <li><a href="<?php echo site_url('periode'); ?>"><i class="fa fa-circle-o"></i> Periode</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
