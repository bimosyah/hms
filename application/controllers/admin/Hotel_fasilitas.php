<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_fasilitas extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mhotel_fasilitas');
	}
	

	public function insert(){
		$id_hotel = $this->input->post("id_hotel");
		$id_hotel_fasilitas = $this->input->post("id_hotel_fasilitas");

		foreach ($id_hotel_fasilitas as $key => $value) {
			$objek = array(
				'id_hotel' => $id_hotel,
				'id_fasilitas' => $id_hotel_fasilitas[$key],
				'dt_create' => date("Y-m-d H:i:s")
			);
			$insert = $this->Mhotel_fasilitas->insert($objek);
		}

		if ($insert) {
			echo json_encode(array("status" => "OK"));
		}else{
			echo json_encode(array("status" => "FAIL"));
		}
	}

	public function getAll($id_hotel){
		$data = $this->Mhotel_fasilitas->getAll($id_hotel);
		$arr_fasilitas = [];
		$record_total = 0;
		$i = 0;
		foreach ($data as $key => $value) {
			$tmp = array(
				$i+=1,
				$value->nama_fasilitas,
				"<h4><span class='fa-stack fa-md' data-toggle='tooltip' data-placement='bottom' title='{$value->nama_fasilitas}'><i class='fa fa-square fa-stack-2x text-dark'></i><i class='fa {$value->icon} fa-stack-1x text-light'></i></span></h4>",
				"<button type='button' onclick='deleteHotelFasilitasModal({$value->id})' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Hapus</button>" 
			);
			array_push($arr_fasilitas,$tmp);
			$record_total++;
		}
		
		$result = array(
			"draw" => 1,
			"recordsTotal" => $record_total,
			"recordsFiltered" => $record_total,
			"data" => $arr_fasilitas
		);
		echo json_encode($result);
	}

	public function delete(){
		$id_hotel_fasilitas = $this->input->post("id_hotel_fasilitas");
		$delete = $this->Mhotel_fasilitas->delete($id_hotel_fasilitas);
		if ($delete) {	
			echo json_encode(array("status" => "OK"));
		}else{
			echo json_encode(array("status" => "FAIL"));
		}
	}
}

/* End of file Hotel_fasilitas.php */
