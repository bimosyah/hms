<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotels extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mhotel');
		$this->load->model('mhotel_foto');
		$this->load->model('mhotel_room');
		$this->load->model('mhotel_room_foto');
		$this->load->model('mhotel_fasilitas');
	}
	
	public function index()
	{
		$this->load->view('landing/hotels');
	}

	public function detail($id){
		$data['data_hotel'] = $this->mhotel->getById($id);
		$data['hotel_foto'] = $this->mhotel_foto->getById($id);
		$data['hotel_room'] = $this->mhotel_room->getAll($id);
		$data['fasilitas'] = $this->mhotel_fasilitas->getAll($id);
		$this->load->view('landing/hotels',$data);
	}
}
