<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mhotel extends CI_Model {

	public function insert($data){
		$query = $this->db->insert('tbl_hotel', $data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	
	public function getAll(){
		$query = $this->db->query("SELECT tbl_hotel.id, tbl_hotel.id_kota, tbl_kota.nama_kota as nama_kota,tbl_hotel.nama_hotel, tbl_hotel.alamat,tbl_hotel.jml_kamar,tbl_hotel.deskripsi,tbl_hotel.notelp,tbl_hotel.minimum_stay from tbl_hotel JOIN tbl_kota on tbl_kota.id = tbl_hotel.id_kota WHERE tbl_hotel.aktif = 1 ORDER BY tbl_hotel.dt_create");
		return $query->result();
	}	

	public function delete($id){
		$this->db->where('id', $id);
		$query = $this->db->update('tbl_hotel', array('aktif' => 0));
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function update($id,$data){
		$this->db->where('id', $id);
		$query = $this->db->update('tbl_hotel', $data);
		if ($query) {
			return true;
		}else{
			return false;
		}		
	}

	public function getById($id_hotel){
		$data = $this->db->query("SELECT tbl_hotel.id, tbl_hotel.id_kota, tbl_kota.nama_kota as nama_kota,tbl_hotel.nama_hotel, tbl_hotel.alamat,tbl_hotel.jml_kamar,tbl_hotel.deskripsi,tbl_hotel.notelp,tbl_hotel.minimum_stay from tbl_hotel JOIN tbl_kota on tbl_kota.id = tbl_hotel.id_kota WHERE tbl_hotel.aktif = 1 AND tbl_hotel.id = "."'$id_hotel'"."ORDER BY tbl_hotel.dt_create");
		return $data->result();		
	}

}

/* End of file mhotel.php */
