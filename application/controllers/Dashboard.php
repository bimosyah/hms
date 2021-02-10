<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mkota');
		$this->load->model('mhotel');
		$this->load->model('mhotel_foto');
		$this->load->model('mhotel_room');
	}
	
	public function index()
	{
		$data['kota'] = $this->mkota->getAll();
		$data['data_hotel'] = array();
		
		foreach ($this->mhotel->getAll() as $key => $value) {
			$hotel = array(
				'id_hotel' => $value->id,
				'id_kota' => $value->id_kota,
				'nama_kota' => $value->nama_kota,
				'nama_hotel' => $value->nama_hotel,
				'deskripsi' => substr($value->deskripsi,0,30),
				'link' => base_url("hotels/").$value->id."/".str_replace(" ","-",$value->nama_hotel),
				'harga' => (count($this->mhotel_room->getLowestPrice($value->id)) > 0 ? $this->mhotel_room->getLowestPrice($value->id)[0]->harga : "0"),
				'foto' => (count($this->mhotel_foto->getById($value->id)) ? base_url("assets/images/foto_hotel/".$this->mhotel_foto->getById($value->id)[0]->foto) : "https://wondertravels.ca/img/sample-images/800x600.jpg"),
			);
			array_push($data['data_hotel'],$hotel);
		}
		// echo json_encode($data['data_hotel']);
		$this->load->view('landing/dashboard',$data);
	}
}
