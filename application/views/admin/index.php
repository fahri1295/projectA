

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman Table Admin
        <small>System LapHar</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Admin</h3>
              <div class="pull-right">
                    <a href="<?php echo base_url();?>Admin/add" class="btn btn-block btn-primary">Tambah Data</a></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tabel_admin" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th scope="col" class="border-0">No</th>
                  <th scope="col" class="border-0">NRP</th>
                  <th scope="col" class="border-0">Nama Admin</th>
                  <th scope="col" class="border-0">Divisi</th>
                  <th scope="col" class="border-0">Bagian</th>
                  <th scope="col" class="border-0">Tools</th>
                </tr>
                </thead>
                <?php
                   $no = 1;
                   foreach ($user as $users) {
                ?>
                <tbody>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $users['mst_NRP'];?></td>
                  <td><?php echo $users['mst_name_user'];?></td> 
                  <td><?php echo $users['mst_name_divisi'];?></td>
                  <td><?php echo $users['mst_name_bagian'];?></td>
                  <td>
                      <a href="<?php echo site_url('admin/edit/'.$users['mst_id_user']); ?>" class="mb-2 btn btn-sm btn-success mr-1">Edit</a> 
                         
                      <a href="<?php echo site_url('admin/delete/'.$users['mst_id_user']); ?>" class="mb-2 btn btn-sm btn-danger mr-1">Hapus</a> 
                          </td>
                </tr>
                <?php } ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->