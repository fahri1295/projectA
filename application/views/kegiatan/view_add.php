 <?php echo form_open_multipart('Kegiatan/add'); ?>
 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman Form Data Kegiatan
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
              <h3 class="box-title">Form Tambah Kegiatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Judul Kegiatan</label>
                  <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Judul Kegiatan" style="font-size:16px;font-weight: bold>
                </div>
                <div class="form-group">
                  <label>Isi Kegiatan</label>
                  <textarea name="isi_kegiatan" id="isi_kegiatan" cols="50" rows="3" class="form-control no-resize" required></textarea>
                </div>
                <div class="form-group">
                  <label>Image Kegiatan</label>
                  <input type="file" name="userfile" class="form-control" placeholder="Password">
                </div>
                <!-- <div id="editable" class="inputor" contentEditable="true"></div> -->
                    
                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" id="nama_divisi" name="nama_divisi" value="<?php echo $this->session->userdata('mst_name_divisi');?>" class="form-control" placeholder="Nama User" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" id="nama_bagian" name="nama_bagian" value="<?php echo $this->session->userdata('mst_name_bagian');?>" class="form-control" placeholder="Nama User" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" id="mst_name_user" name="mst_name_user" value="<?php echo $this->session->userdata('mst_name_user');?>" class="form-control" placeholder="Nama User" disabled="disabled">
                                    </div>
                                </div>

                <label for="">Tanggal Kegiatan</label>
                                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                                        <input type="text" name="tanggal_kegiatan" class="form-control pull-right" id="datepicker" placeholder="Tanggal Kegiatan">
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