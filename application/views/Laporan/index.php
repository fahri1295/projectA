<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman Table Laporan Harian
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
              <h3 class="box-title">Data Laporan Harian</h3>
              <div class="pull-right">
                    <a href="<?php echo base_url();?>laporan/form" class="btn btn-block btn-primary">Import</a>
                  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tabel_laporan" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th scope="col" class="border-0">no</th>
                  <th scope="col" class="border-0">Penyidik</th>
                  <th scope="col" class="border-0">Produk</th>
                  <th scope="col" class="border-0">Dokumentasi</th>
                </tr>
                </thead>
				
                <tbody>
			           	<?php
                  	if( ! empty($laporan)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
	                 	foreach($laporan as $data){ // Lakukan looping pada variabel organisasi dari controller
			             echo "<tr>";
			             echo "<td>".$data->id."</td>";
			             echo "<td>".$data->penyidik."</td>";
			             echo "<td>".$data->produk."</td>";
			             echo "<td>".$data->dokumentasi."</td>";
			             echo "</tr>";
	                   	}
	                   }else{ // Jika data tidak ada
		                  echo "<tr><td colspan='3'>Data tidak ada</td></tr>";
	                   }
	                 ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
			</div>
          </div>
          <!-- /.box -->
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
</div>
  </div>

  