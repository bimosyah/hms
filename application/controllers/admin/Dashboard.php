<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('mkota');
		$this->load->model('mhotel');
		$this->load->model('mhotel_room');
	}


	public function index()
	{
		$data['total_kota'] = count($this->mkota->getAll());
		$data['total_hotel'] = count($this->mhotel->getAll());
		$data['total_kamar'] = count($this->mhotel_room->getDashboard());

		$this->load->view('admin/dashboard/index',$data);
	}
}

/* End of file Dashboard.php */
