<?php 
if($this->session->userdata('mst_name_divisi')=='ADMIN'){
  ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/images/avatars/iconPolice.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('mst_name_user');?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo base_url();?>Dashboard"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-plus"></i>
            <span>Manage Account</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="active"><a href="<?php echo base_url();?>Admin"><i class="fa fa-user"></i>Data User</a></li>
            <!-- <li><a href="table_admin.html"><i class="fa fa-user"></i>Data Admin</a></li>
            <li><a href="table_pers.html"><i class="fa  fa-users"></i>Data Pers</a></li> -->
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-briefcase"></i>
            <span>Manage Data Giat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Kegiatan"><i class="fa  fa-calendar"></i>Data Giat</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-group "></i>
            <span>Manage Data Organisasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Organisasi"><i class="fa fa-table"></i>Data Organisasi</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Laporan Harian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Laporan"><i class="fa fa-edit"></i>Laporan Harian</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-bar-chart"></i> <span>Statistik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>laporan"><i class="fa fa-file"></i>Export</a></li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <?php }?>
<?php 
if($this->session->userdata('mst_name_divisi')=='SATGAS' || $this->session->userdata('mst_name_divisi')=='SUBDIT' || $this->session->userdata('mst_name_divisi')=='SUBBAG' ){
  ?>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/images/avatars/iconPolice.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('mst_name_user');?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active"><a href="<?php echo base_url();?>Dashboard"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-plus"></i>
            <span>Manage Account</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo base_url();?>Admin"><i class="fa fa-user"></i>Data User</a></li>
            <!-- <li><a href="table_admin.html"><i class="fa fa-user"></i>Data Admin</a></li>
            <li><a href="table_pers.html"><i class="fa  fa-users"></i>Data Pers</a></li> -->
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-briefcase"></i>
            <span>Manage Data Giat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Kegiatan"><i class="fa  fa-calendar"></i>Data Giat</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-group "></i>
            <span>Manage Data Organisasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Organisasi"><i class="fa fa-table"></i>Data Organisasi</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> 
			<span>Laporan Harian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Laporan"><i class="fa fa-calendar-o"></i> Form Laporan Harian</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-bar-chart"></i> <span>Statistik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href"#"><i class="fa fa-file"></i>Export</a></li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <?php } ?>