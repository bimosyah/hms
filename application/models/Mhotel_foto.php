<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mhotel_foto extends CI_Model {

	public function insert($data){
		return $this->db->insert('tbl_hotel_foto', $data);
	}

	public function getById($id_hotel){
		$this->db->where('id_hotel', $id_hotel);
		$this->db->where('aktif', 1);
		return $this->db->get('tbl_hotel_foto')->result();
	}

	
	public function delete($id_foto){
		$this->db->where('id', $id_foto);
		$query = $this->db->update('tbl_hotel_foto', array('aktif' => 0));
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function photoTotal($id_hotel){
		$this->db->where('id_hotel', $id_hotel);
		return count($this->db->get('tbl_hotel_foto')->result());
	}
}

/* End of file mhotel_foto.php */
