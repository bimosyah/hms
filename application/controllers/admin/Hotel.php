<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		$this->load->model('mhotel');
		$this->load->model('mkota');
		$this->load->model('mhotel_foto');
		$this->load->model('mhotel_room');			
		$this->load->model('mfasilitas');		

	}
	
	public function index(){
		$data['hotel'] = $this->mhotel->getAll();
		$this->load->view('admin/hotel/index',$data);
	}

	public function delete(){
		$id_hotel = $this->input->post("id_hotel");
		$delete = $this->mhotel->delete($id_hotel);
		if ($delete) {
			// echo json_encode(array("status" => "OK"));
			// $this->session->set_flashdata('delete_hotel', 'value');
			redirect('admin/data-hotel','refresh');
		}else{
			echo json_encode(array("status" => "FAIL"));
		}
	}

	public function view_edit($id_hotel){
		$data['hotel'] = $this->mhotel->getById($id_hotel);
		$data['kota'] = $this->mkota->getAll();
		$this->load->view('admin/hotel/edit',$data);
	}

	public function getAll(){
		$data = $this->mhotel->getAll();
		$arr_hotel = [];
		$record_total = 0;
		$i = 0;
		foreach ($data as $key => $value) {
			$tmp = array(
				$i+=1,
				$value->nama_kota,
				$value->nama_hotel,
				$value->alamat,
				$value->id
				// "<button type='button' onclick='deleteModal({$value->id})' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Hapus</button> <button type='button' 
				// onclick=editModal({$value->id},'".$value->nama_kota."','".$value->nama_kota."','".$value->nama_kota."','".$value->nama_kota."','".$value->nama_kota."','".$value->nama_kota."','".$value->nama_kota."') class='btn btn-warning btn-sm'><i class='fa fa-edit'></i> Edit</button>" 
			);
			array_push($arr_hotel,$tmp);
			$record_total++;
		}
		
		$result = array(
			"draw" => 1,
			"recordsTotal" => $record_total,
			"recordsFiltered" => $record_total,
			"data" => $arr_hotel
		);
		echo json_encode($result);
	}

	public function insert(){
		$id_kota = $this->input->post("id_kota");
		$nama_hotel = $this->input->post("nama_hotel");
		$alamat = $this->input->post("alamat");
		$jml_kamar = $this->input->post("jml_kamar");
		$deskripsi = $this->input->post("deskripsi");
		$notelp = $this->input->post("notelp");
		$minimum_stay = $this->input->post("minimum_stay");

		$objek = array(
			'id_kota' => $id_kota,
			'nama_hotel' => $nama_hotel,
			'alamat' => $alamat,
			'jml_kamar' => $jml_kamar,
			'deskripsi' => $deskripsi,
			'notelp' => $notelp,
			'minimum_stay' => $minimum_stay,
			'dt_create' => date("Y-m-d H:i:s")
		);
		$insert = $this->mhotel->insert($objek);
		if ($insert) {
			echo json_encode(array("status" => "OK"));
		}else{
			echo json_encode(array("status" => "FAIL"));
		}
	}

	public function update(){
		$id_hotel = $this->input->post("id_hotel"); 

		$id_kota = $this->input->post("id_kota");
		$nama_hotel = $this->input->post("nama_hotel");
		$alamat = $this->input->post("alamat");
		$jml_kamar = $this->input->post("jml_kamar");
		$deskripsi = $this->input->post("deskripsi");
		$notelp = $this->input->post("notelp");
		$minimum_stay = $this->input->post("minimum_stay");

		$objek = array(
			'id_kota' => $id_kota,
			'nama_hotel' => $nama_hotel,
			'alamat' => $alamat,
			'jml_kamar' => $jml_kamar,
			'deskripsi' => $deskripsi,
			'notelp' => $notelp,
			'minimum_stay' => $minimum_stay,
			'dt_create' => date("Y-m-d H:i:s")
		);
		$update = $this->mhotel->update($id_hotel,$objek);
		if ($update) {
			echo json_encode(array("status" => "OK"));
		}else{
			echo json_encode(array("status" => "FAIL"));
		}
	}

	public function view_insert(){
		$data['kota'] = $this->mkota->getAll();
		$this->load->view('admin/hotel/add',$data);
	}

	public function detail($id){
		$data['hotel'] = $this->mhotel->getById($id);
		$data['tipe_kamar'] = $this->mhotel_room->getAll($id);
		$data['fasilitas'] = $this->mfasilitas->getAll($id);
		$this->load->view('admin/hotel/detail', $data);
	}

}

/* End of file hotel.php */
