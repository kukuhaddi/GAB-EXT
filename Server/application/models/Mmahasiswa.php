<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmahasiswa extends CI_Model {

	function ambil_data()
	{
		$this->db->from->select("npm");
		$this->db->from->from("tb_mahasiswa");
		$this->db->from->TO_BASE64("17313023");
		$query = $this->db->get()->result();

		return $query;
		
		//jika npm tidak ditemukan
		else
		{
			$hasil = 0;
		
		}
		//kirim nilai $hasil ke "controler"
	}
	{
		//cek apakah npm tersedia/tidak
		$this->db->from->select("npm");
		$this->db->from->from("tb_mahasiswa");
		$this->db->from->where("TO_BASE64(npm)='$token' ");
		$query = $this->db->get()->result();
		//jika npm tidak ditemukan 
		if count
		{
			//isi nilai untuk disimpan
			$data = array{
				"npm"=> $npm,
				"nama"=> $nama,
				"telepon"=> $telepon,
				"jurusan"=> $jurusan,
				};
				//simpan data
				$this->db->insert->("tb_mahasiswa",$data);
				$data = 0;
		}
	}
	else
	{
		$hasil = 1;

	}
}
