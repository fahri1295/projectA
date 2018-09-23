<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organisasi extends CI_Controller {
	private $filename = "import_data"; // Kita tentukan nama filenya
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('MOrganisasi');
	}
	
	public function index(){
		$this->load->model('MOrganisasi');
		
		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='organisasi/index';
		$data['footer']='template/view_footer';
		$data['organisasi'] = $this->MOrganisasi->view('mst_organisasi');
		$this->load->view('template/view_index', $data);
	}
	
	public function form(){
		$data = array(); // Buat variabel $data sebagai array
		
		if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
			// lakukan upload file dengan memanggil function upload yang ada di MOrganisasi.php
			$upload = $this->MOrganisasi->upload_file($this->filename);
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				// Load plugin PHPExcel nya
				include APPPATH.'third_party/PHPExcel/PHPExcel.php';
				
				$excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
				
				// Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
				// Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
				$data['sheet'] = $sheet; 
			}else{ // Jika proses upload gagal
				$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		
		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='organisasi/view_add';
		$data['footer']='template/view_footer';
		$this->load->view('template/view_index', $data);
	}
	
	public function import(){
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		
		$excelreader = new PHPExcel_Reader_Excel2007();
		$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
		
		// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		$data = array();
		
		$numrow = 1;
		foreach($sheet as $row){
			// Cek $numrow apakah lebih dari 1
			// Artinya karena baris pertama adalah nama-nama kolom
			// Jadi dilewat saja, tidak usah diimport
			if($numrow > 1){
				// Kita push (add) array data ke variabel data
				array_push($data, array(
					'nama'=>$row['A'], // Insert data nama dari kolom A di excel
					'pangkat'=>$row['B'], // Insert data pangkat dari kolom B di excel
					'NRP'=>$row['C'], // Insert data NRP dari kolom C di excel
					'divisi'=>$row['D'], // Insert data divisi dari kolom D di excel
					'bagian'=>$row['E'], // Insert data divisi dari kolom D di excel
				));
			}
			
			$numrow++; // Tambah 1 setiap kali looping
		}

		// Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		$this->MOrganisasi->insert_multiple($data);
		
		redirect("Organisasi"); // Redirect ke halaman awal (ke controller organisasi fungsi index)
	}
}
