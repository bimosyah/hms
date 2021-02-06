<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Mhotel_fasilitas extends CI_Model {

	public function insert($data){
		$query = $this->db->insert('tbl_hotel_fasilitas', $data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	} 

	public function getAll($id_hotel){
		$query = $this->db->query("SELECT tbl_hotel_fasilitas.id, tbl_fasilitas.nama_fasilitas , tbl_fasilitas.icon from tbl_fasilitas JOIN tbl_hotel_fasilitas on tbl_fasilitas.id = tbl_hotel_fasilitas.id_fasilitas WHERE tbl_hotel_fasilitas.aktif = 1 AND tbl_hotel_fasilitas.id_hotel = "."'$id_hotel'")->result();
		return $query;
	}

	public function delete($id){
		$this->db->where('id', $id);
		$query = $this->db->update('tbl_hotel_fasilitas', array('aktif' => 0));
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function update($id,$data){
		$this->db->where('id', $id);
		$query = $this->db->update('tbl_hotel_fasilitas', $data);
		if ($query) {
			return true;
		}else{
			return false;
		}		
	}
}

/* End of file mhotel_fasilitas.php */
