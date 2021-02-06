<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mfasilitas');
		
	}
	
	public function index(){
		$this->load->view('admin/fasilitas/index');
	}
	
	public function insert(){
		$nama_fasilitas = $this->input->post("nama_fasilitas");
		$icon = $this->input->post("icon");

		$objek = array(
			'nama_fasilitas' => $nama_fasilitas,
			'icon' => $icon,
			'dt_create' => date("Y-m-d H:i:s")
		);
		$insert = $this->mfasilitas->insert($objek);
		if ($insert) {
			echo json_encode(array("status" => "OK"));
		}else{
			echo json_encode(array("status" => "FAIL"));
		}
	}
	
	public function getAll(){
		$data = $this->mfasilitas->getAll();
		$arr_fasilitas = [];
		$record_total = 0;
		$i = 0;
		foreach ($data as $key => $value) {
			$tmp = array(
				$i+=1,
				$value->nama_fasilitas,
				"<h4><span class='fa-stack fa-md' data-toggle='tooltip' data-placement='bottom' title='{$value->nama_fasilitas}'><i class='fa fa-square fa-stack-2x text-dark'></i><i class='fa {$value->icon} fa-stack-1x text-light'></i></span></h4>",
				"<button type='button' onclick='deleteModal({$value->id})' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Hapus</button> <button type='button' 
				onclick=editModal({$value->id},'".$value->nama_fasilitas."','".$value->icon."') class='btn btn-warning btn-sm'><i class='fa fa-edit'></i> Edit</button>" 
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
		$id = $this->input->post("id");
		$delete = $this->mfasilitas->delete($id);
		if ($delete) {
			echo json_encode(array("status" => "OK"));
		}else{
			echo json_encode(array("status" => "FAIL"));
		}
	}

	public function update(){
		$id = $this->input->post("id");
		$nama_fasilitas = $this->input->post("nama_fasilitas");
		$icon = $this->input->post("icon");

		$objek = array(
			'nama_fasilitas' => $nama_fasilitas,
			'icon' => $icon,
			'dt_create' => date("Y-m-d H:i:s")
		);

		$update = $this->mfasilitas->update($id,$objek);
		if ($update) {
			echo json_encode(array("status" => "OK"));
		}else{
			echo json_encode(array("status" => "FAIL"));
		}
	}

}

/* End of file Fasilitas.php */
