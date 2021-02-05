<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_foto extends CI_Controller {
		
	public function __construct(){
		parent::__construct();
		$this->load->model('mhotel_foto');		
	}

	public function tambahGambar(){
		$id_hotel = $this->input->post("id_hotel");

		$config['upload_path'] = './assets/images/foto_hotel';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size']  = '5000';
		$config['max_width']  = '5000';
		$config['max_height']  = '5000';
		
		$file_ext = explode(".",$_FILES['foto']['name']);
		$rename = $id_hotel."-".$this->photoTotal($id_hotel).".".end($file_ext);
		$config['file_name'] = $rename;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload("foto")){
			$error = array('error' => $this->upload->display_errors());
			echo json_encode(array("status" => $error['error']));
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$insert = $this->mhotel_foto->insert(array('id_hotel' => $id_hotel,'foto'=>$rename,'dt_create' => date("Y-m-d H:i:s")));
			if ($insert) {
				echo json_encode(array("status" => "OK"));
			}else{
				echo json_encode(array("status" => "FAIL"));
			}
		}
	}

	public function getAll($id_hotel){
		$data = $this->mhotel_foto->getById($id_hotel);
		$arr_foto_hotel = [];
		$record_total = 0;
		$i = 0;
		foreach ($data as $key => $value) {
			$img_path = base_url('assets/images/foto_hotel/'.$value->foto);
			$tmp = array(
				$i+=1,
				$value->foto,
				"<img style='width: 200px;height: 200px;' src='$img_path' alt='First slide'>",
				"<button type='button' onclick='deleteImageModal({$value->id})' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Hapus</button>",
				$value->id,
			);
			array_push($arr_foto_hotel,$tmp);
			$record_total++;
		}
		
		$result = array(
			"draw" => 1,
			"recordsTotal" => $record_total,
			"recordsFiltered" => $record_total,
			"data" => $arr_foto_hotel
		);
		echo json_encode($result);
	}

	public function delete(){
		$id_foto = $this->input->post("id_foto");
		$delete = $this->mhotel_foto->delete($id_foto);
		if ($delete) {	
			echo json_encode(array("status" => "OK"));
		}else{
			echo json_encode(array("status" => "FAIL"));
		}
	}

	public function photoTotal($id_hotel){
		return $this->mhotel_foto->photoTotal($id_hotel) + 1;
	}
}

/* End of file hotel_foto.php */
