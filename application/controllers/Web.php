<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
 	{
 		// Load M_Web as parents in here.
  	}

  	public $data = array(
  		"nim" => "UR_ID_NUMBER",
  		"nama" => "UR_NAME",
  		"kampus"=>"Telkom University"
  	);

	public function index()
	{
		//Load page_header and page_index from views
	}

	public function mahasiswa()
	{
		$data_mahasiswa = $this->M_web->Getmahasiswa_nim();
		$data_jurusan = $this->M_web->Getjurusan_nim();
		$this->load->view('page_header',['dataJ'=>$data_jurusan]);
		$this->load->view('page_mahasiswa',['data'=>$data_mahasiswa]);
	}

	public function jurusan()
	{
		$data_jurusan = $this->M_web->Getjurusan_nim();
		$this->load->view('page_header');
		$this->load->view('page_jurusan',['data'=>$data_jurusan]);
	}


	#lengkapi FUNCTION BERIKUT
	public function hapusmahasiswa($nim)
	{

		//Load function hapus_mahasiswa from M_web
		// make it to index.php/web/mahasiswa after delete complete

	}


	public function tambahmahasiswa()
	{
		
		// Create variabel and use it for input data to database.
		// Load tambah_mahasiswa($data) from M_web
		// Redirect to index.php/web/mahasiswa after add data.


	}

	public function editmahasiswa()
	{

		// Create variabel and use it for edit data from database.
		// Load edit_mahasiswa($nim,$data) from M_web
		// Redirect to index.php/web/mahasiswa after edit data.
		


	}


	#lengkapi FUNCTION BERIKUT UNTUK PAGE JURUSAN



	public function tambahjurusan()
	{

		// Create variabel and use it for add data from database.
		// Load tambah_jurusan($data) from M_web
		// Redirect to index.php/web/jurusan after add data.


	

	}

	public function editjurusan()
	{

		// Create variabel and use it for add data from database.
		// Load edit_jurusan($id_jurusan,$data) from M_web
		// Redirect to index.php/web/jurusan after add data.


	
	}

	public function hapusjurusan($id_jurusan)
	{

		// Create variabel and use it for add data from database.
		// Load hapus_jurusan($id_jurusan) from M_web
		// Redirect to index.php/web/jurusan after add data.

	}
}
