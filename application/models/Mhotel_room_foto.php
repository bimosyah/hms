<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mhotel_room_foto extends CI_Model {

	public function insert($data){
		return $this->db->insert('tbl_hotel_room_foto', $data);
	}

	public function getById($id_hotel){
		$query = $this->db->query("SELECT tbl_hotel_room_foto.id, tbl_hotel_room.tipe_kamar, tbl_hotel_room_foto.foto from tbl_hotel_room_foto join tbl_hotel_room on tbl_hotel_room_foto.id_hotel_room = tbl_hotel_room.id WHERE tbl_hotel_room_foto.aktif = 1 AND tbl_hotel_room_foto.id_hotel = "."'$id_hotel'");
		return $query->result();
	}

	
	public function delete($id_foto){
		$this->db->where('id', $id_foto);
		$query = $this->db->update('tbl_hotel_room_foto', array('aktif' => 0));
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function photoTotal($id_hotel){
		$this->db->where('id_hotel', $id_hotel);
		return count($this->db->get('tbl_hotel_room_foto')->result());
	}
	
}

/* End of file mhotel_foto.php */
