<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotel_room extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mhotel_room');
	}

	public function getAll($id_hotel)
	{
		$data = $this->mhotel_room->getAll($id_hotel);
		$arr_hotel_room = [];
		$record_total = 0;
		$i = 0;
		foreach ($data as $key => $value) {
			$link = site_url("admin/data-hotel/".$id_hotel."/". $value->id . "/room/edit");
			$tmp = array(
				$i += 1,
				$value->tipe_kamar,
				number_format($value->harga, 2),
				$value->diskon,
				$value->deskripsi,
				"<a href='{$link}' type='button' class='btn btn-warning btn-sm'><i class='fa fa-edit'></i> Edit</a> <button type='button' onclick='deleteRoomModal({$value->id})' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Hapus</button>"
			);
			array_push($arr_hotel_room, $tmp);
			$record_total++;
		}

		$result = array(
			"draw" => 1,
			"recordsTotal" => $record_total,
			"recordsFiltered" => $record_total,
			"data" => $arr_hotel_room
		);
		echo json_encode($result);
	}

	public function view_insert()
	{
		$this->load->view('admin/hotel_room/add');
	}

	public function view_edit($id_hotel)
	{
		$data['room'] = $this->mhotel_room->getById($id_hotel);
		$this->load->view('admin/hotel_room/edit', $data);
	}


	public function insert()
	{
		$id_hotel = $this->input->post("id_hotel");
		$tipe_kamar = $this->input->post("tipe_kamar");
		$harga = $this->input->post("harga");
		$diskon = $this->input->post("diskon");
		$deskripsi = $this->input->post("deskripsi");

		$objek = array(
			'id_hotel' => $id_hotel,
			'tipe_kamar' => $tipe_kamar,
			'harga' => $harga,
			'diskon' => $diskon,
			'deskripsi' => $deskripsi,
			'dt_create' => date("Y-m-d H:i:s")
		);
		$insert = $this->mhotel_room->insert($objek);
		if ($insert) {
			echo json_encode(array("status" => "OK"));
		} else {
			echo json_encode(array("status" => "FAIL"));
		}
	}

	public function update()
	{
		$id_room = $this->input->post("id_room");
		$tipe_kamar = $this->input->post("tipe_kamar");
		$harga = $this->input->post("harga");
		$diskon = $this->input->post("diskon");
		$deskripsi = $this->input->post("deskripsi");

		$objek = array(
			'tipe_kamar' => $tipe_kamar,
			'harga' => $harga,
			'diskon' => $diskon,
			'deskripsi' => $deskripsi,
			'dt_create' => date("Y-m-d H:i:s")
		);
		$insert = $this->mhotel_room->update($id_room,$objek);
		if ($insert) {
			echo json_encode(array("status" => "OK"));
		} else {
			echo json_encode(array("status" => "FAIL"));
		}
	}

	public function delete()
	{
		$id_room = $this->input->post("id_room");
		$delete = $this->mhotel_room->delete($id_room);
		if ($delete) {
			echo json_encode(array("status" => "OK"));
		} else {
			echo json_encode(array("status" => "FAIL"));
		}
	}
}

/* End of file hotel_room.php */
