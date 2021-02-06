<?php $this->load->view('admin/include/header'); ?>
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"><?php echo $hotel[0]->nama_hotel ?></h1>
				</div>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Detail Hotel</h3>
						</div>
						<div class="card-body">
							<div class="" style="display:inline-block">
								<a href="<?php echo site_url(
												"admin/data-hotel/edit/" . $this->uri->segment(3)
											) ?>" type="button" class="btn btn-warning btn-sm">
									<i class="fa fa-edit"></i> Edit
								</a>
								<button type="button" class="btn btn-danger btn-sm ml-2" data-toggle="modal" data-target="#deleteHotelModal">
									<i class="fa fa-trash"></i> Hapus
								</button>
								<button type="button" class="btn btn-info btn-sm ml-2">
									<i class="fa fa-eye"></i> Preview
								</button>
							</div>
							<br><br>
							<table class="table table-bordered">
								<tr>
									<td>Kota</td>
									<td><?php echo $hotel[0]->nama_kota ?></td>
								</tr>
								<tr>
									<td>Hotel</td>
									<td><?php echo $hotel[0]->nama_hotel ?></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td><?php echo $hotel[0]->alamat ?></td>
								</tr>
								<tr>
									<td>Jumlah Kamar</td>
									<td><?php echo $hotel[0]->jml_kamar ?></td>
								</tr>
								<tr>
									<td>Deskripsi</td>
									<td><?php echo $hotel[0]->deskripsi ?></td>
								</tr>
								<tr>
									<td>No Telp</td>
									<td><?php echo $hotel[0]->notelp ?></td>
								</tr>
								<tr>
									<td class="">Minimum Stay</td>
									<td><?php echo $hotel[0]->minimum_stay ?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Foto Hotel</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
							<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahFotoModal">
								<i class="fa fa-plus"></i> Tambah
							</button>
							<br><br>
							<table class="table table-bordered" id="tableImage"></table>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Kamar Hotel</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
							<a href="<?php echo site_url("admin/data-hotel/" . $this->uri->segment(3) . "/room/add") ?>" type="button" class="btn btn-primary btn-sm">
								<i class="fa fa-plus"></i> Tambah
							</a>
							<br><br>
							<table class="table table-bordered" id="tableRoom"></table>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Fasilitas Hotel</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
							<a href="#" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahFasilitasModal">
								<i class="fa fa-plus"></i> Tambah
							</a>
							<br><br>
							<table class="table table-bordered" id="tableFasilitas"></table>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Foto Kamar Hotel</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
							<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahFotoRoomModal">
								<i class="fa fa-plus"></i> Tambah
							</button>
							<br><br>
							<table class="table table-bordered" id="tableFotoRoom"></table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- Modal tambah -->
<div class="modal fade" id="tambahFotoModal" tabindex="-1" role="dialog" aria-labelledby="tambahFotoModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Foto Hotel</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" id="form_foto" enctype="multipart/form-data">
					<input type="file" name="foto" id="foto" />
					<input type="hidden" id="id_hotel" name="id_hotel" value="<?php echo $this->uri->segment(3) ?>">
			</div>
			<div class="modal-footer">
				<button type="submit" id="submit_btn" class="btn btn-primary">Tambah</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="tambahFotoRoomModal" tabindex="-1" role="dialog" aria-labelledby="tambahFotoRoomModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Foto Kamar Hotel</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" id="form_foto_room" enctype="multipart/form-data">
					<div class="form-group">
						<label for="id_hotel_room">Tipe Kamar</label>
						<select name="id_hotel_room" class="custom-select form-control-border" id="id_hotel_room">
							<option>Pilih Tipe Kamar...</option>
							<?php foreach ($tipe_kamar as $key => $value) : ?>
								<option value="<?php echo $value->id ?>"><?php echo $value->tipe_kamar ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<input type="file" name="foto" id="foto" />
					<input type="hidden" id="id_hotel" name="id_hotel" value="<?php echo $this->uri->segment(3) ?>">
			</div>
			<div class="modal-footer">
				<button type="submit" id="submit_btn" class="btn btn-primary">Tambah</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="tambahFasilitasModal" tabindex="-1" role="dialog" aria-labelledby="tambahFasilitasModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Fasilitas Hotel</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label></label>
					<select id="fasilitas" class="select2 select2-hidden-accessible" multiple="" data-placeholder="Pilih Fasiitas Hotel" style="width: 100%;" tabindex="-1" aria-hidden="true">
						<?php foreach ($fasilitas as $key => $value) : ?>
							<option value="<?php echo $value->id ?>"><?php echo $value->nama_fasilitas ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" id="submit_btn" onclick="tambahFasilitas()" class="btn btn-primary">Tambah</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="deleteImageModal" tabindex="-1" role="dialog" aria-labelledby="deleteImageModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Konfirmasi Hapus</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Konfirmasi Hapus Gambar ? </p>
			</div>
			<div class="modal-footer">
				<button type="button" onclick="deleteImage()" class="btn btn-primary">Hapus</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteRoomFotoModal" tabindex="-1" role="dialog" aria-labelledby="deleteImageModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Konfirmasi Hapus</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Konfirmasi Hapus Gambar ? </p>
			</div>
			<div class="modal-footer">
				<button type="button" onclick="deleteRoomImage()" class="btn btn-primary">Hapus</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteHotelModal" tabindex="-1" role="dialog" aria-labelledby="deleteHotelModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Konfirmasi Hapus</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Konfirmasi Hapus Hotel ? </p>
			</div>
			<div class="modal-footer">
				<form action="<?php echo site_url("admin/hotel/delete") ?>">
					<input type="hidden" value="<?php echo $this->uri->segment(3) ?>" name="id_hotel">
					<button type="submit" onclick="deleteHotel()" class="btn btn-primary">Hapus</button>
				</form>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteRoomModal" tabindex="-1" role="dialog" aria-labelledby="deleteRoomModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Konfirmasi Hapus</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Konfirmasi Hapus Hotel ? </p>
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="deleteRoom()" class="btn btn-primary">Hapus</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteHotelFasilitasModal" tabindex="-1" role="dialog" aria-labelledby="deleteRoomModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Konfirmasi Hapus</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Konfirmasi Hapus Fasilitas ? </p>
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="deleteFasilitas()" class="btn btn-primary">Hapus</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>



<?php $this->load->view('admin/include/footer'); ?>

<script>
	var id_hotel = '<?php echo $this->uri->segment(3) ?>';
	var id_foto = "";
	var id_room = "";
	var id_room_foto = "";
	var id_hotel_fasilitas = "";

	$(document).ready(function() {

		//Initialize Select2 Elements
		$('.select2').select2()

		load_data(id_hotel);
		load_data_room(id_hotel);
		load_data_room_foto(id_hotel);
		load_data_fasilitas(id_hotel);

		$('#form_foto').submit(function(e) {
			e.preventDefault();
			$.ajax({
				url: "<?php echo site_url('admin/hotel_foto/tambahGambar') ?>",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) {
					var obj = JSON.parse(data);
					if (obj.status == "OK") {
						$('#tambahFotoModal').modal('toggle');
						toastr.success('Sukses.')
						$("#tableImage").dataTable().fnDestroy();
						load_data(id_hotel);
					} else {
						toastr.error('Gagal.')
					}
				}
			});
		});

		$('#form_foto_room').submit(function(e) {
			e.preventDefault();
			$.ajax({
				url: "<?php echo site_url('admin/hotel_room_foto/tambahGambar') ?>",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) {
					var obj = JSON.parse(data);
					if (obj.status == "OK") {
						$('#tambahFotoRoomModal').modal('toggle');
						toastr.success('Sukses.')
						$("#tableFotoRoom").dataTable().fnDestroy();
						load_data_room_foto(id_hotel);
					} else {
						toastr.error('Gagal.')
					}
				}
			});
		});

	});

	//ajax tambah fasilitas
	function tambahFasilitas() {
		// alert($("#fasilitas").val());
		$.ajax({
			url: "<?php echo site_url('admin/Hotel_fasilitas/insert') ?>",
			method: "POST",
			data: {
				id_hotel: id_hotel,
				id_hotel_fasilitas: $("#fasilitas").val()
			},
			success: function(data) {
				var obj = JSON.parse(data);
				if (obj.status == "OK") {
					$('#tambahFasilitasModal').modal('toggle');
					toastr.success('Sukses.')
					$("#tableFasilitas").dataTable().fnDestroy();
					load_data_fasilitas(id_hotel);
				} else {
					toastr.error('Gagal.')
				}
			}
		});
	}

	//ajax delete
	function deleteImage() {
		$.ajax({
			url: "<?php echo site_url('admin/hotel_foto/delete') ?>",
			type: "post",
			data: {
				id_foto: id_foto
			},
			success: function(response) {
				var obj = JSON.parse(response);
				if (obj.status == "OK") {
					$('#deleteImageModal').modal('toggle');
					toastr.success('Hapus Berhasil')
					$("#tableImage").dataTable().fnDestroy();
					load_data(id_hotel);
				} else {
					toastr.error('Hapus Gagal')
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	}

	function deleteRoomImage() {
		$.ajax({
			url: "<?php echo site_url('admin/hotel_room_foto/delete') ?>",
			type: "post",
			data: {
				id_room_foto: id_room_foto
			},
			success: function(response) {
				var obj = JSON.parse(response);
				if (obj.status == "OK") {
					$('#deleteRoomFotoModal').modal('toggle');
					toastr.success('Hapus Berhasil')
					$("#tableFotoRoom").dataTable().fnDestroy();
					load_data_room_foto(id_hotel);
				} else {
					toastr.error('Hapus Gagal')
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	}

	function deleteHotel() {
		$.ajax({
			url: "<?php echo site_url('admin/hotel/delete') ?>",
			type: "post",
			data: {
				id_hotel: id_hotel
			},
			success: function(response) {
				var obj = JSON.parse(response);
				if (obj.status == "OK") {
					$('#deleteHotelModal').modal('toggle');
					toastr.success('Hapus Berhasil')
				} else {
					toastr.error('Hapus Gagal')
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	}

	function deleteRoom() {
		$.ajax({
			url: "<?php echo site_url('admin/hotel_room/delete') ?>",
			type: "post",
			data: {
				id_room: id_room
			},
			success: function(response) {
				var obj = JSON.parse(response);
				if (obj.status == "OK") {
					$('#deleteRoomModal').modal('toggle');
					toastr.success('Hapus Berhasil')
					$("#tableRoom").dataTable().fnDestroy();
					load_data_room(id_hotel);
				} else {
					toastr.error('Hapus Gagal')
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	}

	function deleteFasilitas() {
		$.ajax({
			url: "<?php echo site_url('admin/hotel_fasilitas/delete') ?>",
			type: "post",
			data: {
				id_hotel_fasilitas: id_hotel_fasilitas
			},
			success: function(response) {
				var obj = JSON.parse(response);
				if (obj.status == "OK") {
					$('#deleteHotelFasilitasModal').modal('toggle');
					toastr.success('Sukses.')
					$("#tableFasilitas").dataTable().fnDestroy();
					load_data_fasilitas(id_hotel);
				} else {
					toastr.error('Hapus Gagal')
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	}

	// modal delete
	function deleteHotelModal(id) {
		$('#deleteHotelModal').modal('toggle');
	}

	function deleteImageModal(id) {
		$('#deleteImageModal').modal('toggle');
		id_foto = id;
	}

	function deleteRoomModal(id) {
		$('#deleteRoomModal').modal('toggle');
		id_room = id;
	}

	function deleteRoomFotoModal(id) {
		$('#deleteRoomFotoModal').modal('toggle');
		id_room_foto = id;
	}

	function deleteHotelFasilitasModal(id) {
		$('#deleteHotelFasilitasModal').modal('toggle');
		id_hotel_fasilitas = id;
	}

	// load data table
	function load_data(id) {
		$('#tableImage').DataTable({
			"ajax": "<?php echo site_url("admin/hotel_foto/getall/") ?>" + id,
			columns: [{
					title: "No"
				},
				{
					title: "File Foto"
				},
				{
					title: "Foto"
				},
				{
					title: "Aksi"
				}
			],
		});
	}

	function load_data_room(id) {
		$('#tableRoom').DataTable({
			"ajax": "<?php echo site_url("admin/hotel_room/getall/") ?>" + id,
			columns: [{
					title: "No"
				},
				{
					title: "Tipe Kamar"
				},
				{
					title: "Harga"
				},
				{
					title: "Diskon"
				},
				{
					title: "Deskripsi"
				},
				{
					title: "Aksi"
				}
			],
		});
	}

	function load_data_room_foto(id) {
		$('#tableFotoRoom').DataTable({
			"ajax": "<?php echo site_url("admin/hotel_room_foto/getall/") ?>" + id,
			columns: [{
					title: "No"
				},
				{
					title: "Tipe Kamar"
				},
				{
					title: "File Foto"
				},
				{
					title: "Foto"
				},
				{
					title: "Aksi"
				}
			],
		});
	}

	function load_data_fasilitas(id) {
		$('#tableFasilitas').DataTable({
			"ajax": "<?php echo site_url("admin/Hotel_fasilitas/getall/") ?>" + id,
			columns: [{
					title: "No"
				},
				{
					title: "Fasilitas"
				},
				{
					title: "Icon"
				},
				{
					title: "Aksi"
				}
			],
		});
	}
</script>
