<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mhotel_room extends CI_Model
{

	public function insert($data){
		$query = $this->db->insert('tbl_hotel_room', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	
	public function getAll($id_hotel){
		$this->db->where('id_hotel', $id_hotel);
		$this->db->where('aktif', 1);
		$query = $this->db->get('tbl_hotel_room')->result();
		return $query;
	}

	public function delete($id){
		$this->db->where('id', $id);
		$query = $this->db->update('tbl_hotel_room', array('aktif' => 0));
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	public function update($id, $data){
		$this->db->where('id', $id);
		$query = $this->db->update('tbl_hotel_room', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	public function getById($id_hotel){
		$this->db->where('id', $id_hotel);
		$this->db->where('aktif', 1);
		return $this->db->get('tbl_hotel_room')->result();	
	}
}
/* End of file mhotel_room.php */
