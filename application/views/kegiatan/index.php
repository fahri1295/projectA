<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman Table Giat 
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
              <h3 class="box-title">Data Giat</h3>
              <div class="pull-right">
                    <a href="<?php echo base_url();?>Kegiatan/add" class="btn btn-block btn-primary">Tambah Data</a></div>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tabel_admin" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th scope="col" class="border-0">No</th>
                          <th scope="col" class="border-0">Judul Kegiatan</th>
                          <th scope="col" class="border-0">Foto Kegiatan</th>
                          <th scope="col" class="border-0">Nama Pers</th>
                          <th scope="col" class="border-0">Tanggal</th>
                          <th scope="col" class="border-0">Divisi</th>
                          <th scope="col" class="border-0">Tools</th>
                </tr>
                </thead>
                <?php
                        $no = 1;
                        foreach ($kegiatan as $keg) {
                      ?> 
                <tbody>
                <tr>
                  <td><?php echo $no++;?></td>
                          <td><?php echo $keg['mst_nama_kegiatan'];?></td>
                          <td><a href="<?php echo site_url('kegiatan/tagging/'.$keg['mst_id_kegiatan']); ?>"><img src="<?php echo base_url()?>file/images/small/<?php echo $keg['mst_image_kegiatan'];?> "></a></td>
                          <td><?php echo $keg['mst_name_user'];?></td>
                          <td><?php echo $keg['mst_tanggal_kegiatan'];?></td>
                          <td><?php echo $keg['mst_name_divisi'];?></td>
                          <td>
                          <a href="<?php echo site_url('kegiatan/edit/'.$keg['mst_id_kegiatan']); ?>" class="mb-2 btn btn-sm btn-success mr-1">Edit</a> 
                         
                          <a href="<?php echo site_url('Kegiatan/delete/'.$keg['mst_id_kegiatan']); ?>" class="mb-2 btn btn-sm btn-danger mr-1">Hapus</a> 
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
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2018 <a href="#">System LapHar</a>.</strong> All rights
    reserved.
  </footer>