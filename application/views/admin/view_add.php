 <?php echo form_open_multipart('admin/add'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Admin 
        <small>System LapHar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Registrasi Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>No NRP</label>
                  <input type="text" class="form-control" id="nrp" name="nrp" placeholder="No NRP">
                </div>
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <label for="divisi">Divisi</label>
                  <div class="form-group">
                      <select name="divisi" class="form-control is-invalid">
                      <option selected>Pilih Divisi</option>
                       <?php 
                         foreach($divs as $divisi)
                          {
                             $selected = ($divisi['mst_id_divisi'] == $this->input->post('divisi')) ? ' selected="selected"' : "";

                              echo '<option value="'.$divisi['mst_id_divisi'].'" '.$selected.'>'.$divisi['mst_name_divisi'].'</option>';
                           } 
                                    ?>
                                  </select>
                              
                            </div>
                <label for="bagian">Bagian</label>
                                <div class="form-group">
                                  <select name="bagian" class="form-control is-invalid">
                                    <option selected>Pilih Bagian</option>
                                    
                                    <?php 
                                    foreach($bag as $bagian)
                                    {
                                        $selected = ($bagian['mst_id_bagian'] == $this->input->post('bagian')) ? ' selected="selected"' : "";

                                        echo '<option value="'.$bagian['mst_id_bagian'].'" '.$selected.'>'.$bagian['mst_name_bagian'].'</option>';
                                    } 
                                    ?>
                                  </select>
                              
                            </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
          

        </div>
        
        
      
    </section>
    
  </div>
  </section>
  <?php echo form_close(); ?>