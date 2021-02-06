<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Mfasilitas extends CI_Model {

	public function insert($data){
		$query = $this->db->insert('tbl_fasilitas', $data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	} 

	

	public function getAll(){
		$this->db->where('aktif', 1);
		$this->db->order_by('dt_create', 'desc');
		$query = $this->db->get('tbl_fasilitas')->result();
		return $query;
	}

	public function delete($id){
		$this->db->where('id', $id);
		$query = $this->db->update('tbl_fasilitas', array('aktif' => 0));
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function update($id,$data){
		$this->db->where('id', $id);
		$query = $this->db->update('tbl_fasilitas', $data);
		if ($query) {
			return true;
		}else{
			return false;
		}		
	}

}

/* End of file MFasilitas.php */
