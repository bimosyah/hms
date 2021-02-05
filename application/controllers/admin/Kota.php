<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mkota');
	}
	
	public function index(){
		$this->load->view('admin/kota/index');
	}
	
	public function insert(){
		$nama_kota = $this->input->post("nama_kota");
		$objek = array(
			'nama_kota' => $nama_kota,
			'dt_create' => date("Y-m-d H:i:s")
		);
		$insert = $this->mkota->insert($objek);
		if ($insert) {
			echo json_encode(array("status" => "OK"));
		}else{
			echo json_encode(array("status" => "FAIL"));
		}
	}
	
	public function getAll(){
		$data = $this->mkota->getAll();
		$arr_kota = [];
		$record_total = 0;
		$i = 0;
		foreach ($data as $key => $value) {
			$tmp = array(
				$i+=1,
				$value->nama_kota,
				"<button type='button' onclick='deleteModal({$value->id})' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Hapus</button> <button type='button' 
				onclick=editModal({$value->id},'".$value->nama_kota."') class='btn btn-warning btn-sm'><i class='fa fa-edit'></i> Edit</button>" 
			);
			array_push($arr_kota,$tmp);
			$record_total++;
		}
		
		$result = array(
			"draw" => 1,
			"recordsTotal" => $record_total,
			"recordsFiltered" => $record_total,
			"data" => $arr_kota
		);
		echo json_encode($result);
	}

	public function delete(){
		$id = $this->input->post("id");
		$delete = $this->mkota->delete($id);
		if ($delete) {
			echo json_encode(array("status" => "OK"));
		}else{
			echo json_encode(array("status" => "FAIL"));
		}
	}

	public function update(){
		$id = $this->input->post("id");
		$nama_kota = $this->input->post("nama_kota");
		$data = array(
			'nama_kota' => $nama_kota
		);

		$update = $this->mkota->update($id,$data);
		if ($update) {
			echo json_encode(array("status" => "OK"));
		}else{
			echo json_encode(array("status" => "FAIL"));
		}
	}
	
}

/* End of file Kota.php */
