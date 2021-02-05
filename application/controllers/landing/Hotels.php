<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotels extends CI_Controller {

	public function index()
	{
		$this->load->view('landing/hotels');
	}
}
