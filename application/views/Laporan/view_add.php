
	
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman Import Laporan
        <small>System LapHar</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Form</a></li>
        <li class="active">Import</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Import</h3>
              <div class="pull-right">
               </div>	
	
	<!-- Load File jquery.min.js yang ada difolder js -->
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<!-- Load File jquery.min.js yang ada difolder js -->

	<script>
	$(document).ready(function(){
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
	</script>
	
	<!--<a href="<?php echo base_url("excel/format.xlsx"); ?>">Download Format</a> -->
	<br>
	<br>
	
	<!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
	 <div class="box">
            <div class="box-header">
            
            </div>
            <div class="box-body">
    <form method="post" action="<?php echo base_url("index.php/Laporan/form"); ?>" enctype="multipart/form-data">
		<!-- 
		-- Buat sebuah input type file
		-- class pull-left berfungsi agar file input berada di sebelah kiri
		-->
	          <p>
                <input type="file" class="btn bg-blue btn-flat margin" name="file"></button>
                <button type="submit" class="btn bg-blue btn-flat margin" name="preview" value="preview">Preview</button>
              </p>
            </div>
          </div>
         
		<!--
		-- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
		-->
	</form>
	
	<?php
	if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form 
		if(isset($upload_error)){ // Jika proses upload gagal
			echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
			die; // stop skrip
		}
		
		// Buat sebuah tag form untuk proses import data ke database
		echo "<form method='post' action='".base_url("index.php/laporan/import")."'>";
		
		// Buat sebuah div untuk alert validasi kosong
		echo "<div style='color: red;' id='kosong'>
		Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
		</div>";
		
		echo "<table border='1' cellpadding='8'>
		<tr>
			<th colspan='3'>Preview Data</th>
		</tr>
		<tr>
			<th>nama</th>
			<th>pangkat</th>
			<th>NRP</th>
			<th>divisi</th>
			<th>bagian</th>
		</tr>";
		
		$numrow = 1;
		$kosong = 0;
		
		// Lakukan perulangan dari data yang ada di excel
		// $sheet adalah variabel yang dikirim dari controller
		foreach($sheet as $row){ 
			// Ambil data pada excel sesuai Kolom
			$penyidik = $row['A']; // Ambil data nama
			$produk= $row['B']; // Ambil pangkat
			$dokumentasi= $row['C']; // Ambil data nrp
			// Cek jika semua data tidak diisi
			if(empty($penyidik) && empty($produk) && empty($dokumentasi))
				continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
			
			// Cek $numrow apakah lebih dari 1
			// Artinya karena baris pertama adalah nama-nama kolom
			// Jadi dilewat saja, tidak usah diimport
			if($numrow > 1){
				// Validasi apakah semua data telah diisi
				$penyidik_td = ( ! empty($penyidik))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
				$produk_td = ( ! empty($produk))? "" : " style='background: #E07171;'"; // Jika Pangkat kosong, beri warna merah
				$dokumentasi_td = ( ! empty($dokumentasi))? "" : " style='background: #E07171;'"; // Jika NRP kosong, beri warna merah
				// Jika salah satu data ada yang kosong
				if(empty($penyidik) or empty($produk) or empty($dokumentasi)){
					$kosong++; // Tambah 1 variabel $kosong
				}
				
				echo "<tr>";
				echo "<td".$penyidik_td.">".$penyidik."</td>";
				echo "<td".$produk_td.">".$produk."</td>";
				echo "<td".$dokumentasi_td.">".$dokumentasi."</td>";
				echo "</tr>";
			}
			
			$numrow++; // Tambah 1 setiap kali looping
		}
		
		echo "</table>";
		
		// Cek apakah variabel kosong lebih dari 0
		// Jika lebih dari 0, berarti ada data yang masih kosong
		if($kosong > 0){
		?>	
			<script>
			$(document).ready(function(){
				// Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
				$("#jumlah_kosong").html('<?php echo $kosong; ?>');
				
				$("#kosong").show(); // Munculkan alert validasi kosong
			});
			</script>
		<?php
		}else{ // Jika semua data sudah diisi
			echo "<hr>";
			
			// Buat sebuah tombol untuk mengimport data ke database
			echo "<button type='submit' class='btn bg-blue btn-flat' margin'name='import'>Import</button>";
			echo "<a href='".base_url("index.php/Laporan")."'>Cancel</a>";
		}
		
		echo "</form>";
	}
	?>
</body>
</html>
