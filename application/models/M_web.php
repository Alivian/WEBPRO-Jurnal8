<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_web extends CI_Model {

	//COMPLETE ALL FUNCTION IN HERE
	
	public function GetMahasiswa_nim(){
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('jurusan','jurusan.id_jurusan=mahasiswa.id_jurusan','LEFT OUTER');
		$query = $this->db->get();
		return $query->result();
	}
	public function Getjurusan_nim(){
		$this->db->select('*');
		$this->db->from('jurusan');
		$query = $this->db->get();
		return $query->result();
	}


	//COMPLETE ALL FUNCTION IN HERE

	//FUNCTION TO DELETE MAHASISWA
	public function hapus_mahasiswa($nim)
	{
		
	}

	//FUNCTION TO DELETE EDIT
	public function edit_mahasiswa($nim,$data)
	{
		
	}

	//FUNCTION TO ADD MAHASISWA
	public function tambah_mahasiswa($data)
	{
		
	}


	//FUNCTION TO DELETE MAJORS

	public function hapus_jurusan($id_jurusan)
	{
		
	}


	//FUNCTION TO EDIT MAJORS
	public function edit_jurusan($id_jurusan,$data)
	{
		
	}


	//FUNCTION TO ADD MAJORS
	public function tambah_jurusan($data)
	{
		
	}



}
