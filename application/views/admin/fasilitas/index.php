<?php $this->load->view('admin/include/header'); ?>
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Fasilitas</h1>
				</div>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="col-sm-2">
								<button type="button" data-toggle="modal" data-target="#tambahModal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
								<br><br>
							</div>
							<table id="tbl_fasilitas" class="table table-bordered table-hover"></table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</div>
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Fasilitas</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<input type="text" class="form-control form-control-border border-width-2" id="nama_fasilitas" placeholder="Masukkan nama fasilitas">
				</div>
				<div class="form-group">
					<input type="text" class="form-control form-control-border border-width-2" id="icon" placeholder="Masukkan nama icon cth: fa-address-book">
					<label for="exampleSelectBorder">Silahkan Pilih Icon Pada Link Berikut : <a target="_blank" href="https://fontawesome.com/v4.7.0/icons/">Link</a></label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="submit_btn" onclick="insert()" class="btn btn-primary">Tambah</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Konfirmasi Hapus</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Konfirmasi Hapus Kota ? </p>
			</div>
			<div class="modal-footer">
				<button type="button" onclick="deleteData()" class="btn btn-primary">Hapus</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('admin/include/footer'); ?>

<script>
	var id_fasilitas;
	var nama_kota;
	$(document).ready(function() {
		load_data();
	});

	function load_data() {
		$('#tbl_fasilitas').DataTable({
			"ajax": "<?php echo site_url("admin/fasilitas/getall") ?>",
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

	function insert() {
		nama_fasilitas = document.getElementById("nama_fasilitas").value;
		icon = document.getElementById("icon").value;
		$.ajax({
			url: "<?php echo site_url('admin/fasilitas/insert') ?>",
			type: "post",
			data: {
				nama_fasilitas: nama_fasilitas,
				icon: icon
			},
			success: function(response) {
				var obj = JSON.parse(response);
				if (obj.status == "OK") {
					$('#tambahModal').modal('toggle');
					toastr.success('Sukses.')
					document.getElementById("nama_fasilitas").value = "";
					document.getElementById("icon").value = "";
					$("#tbl_fasilitas").dataTable().fnDestroy();
					load_data();
				} else {
					toastr.error('Gagal.')
					document.getElementById("nama_fasilitas").value = "";
					document.getElementById("icon").value = "";
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	}

	function deleteModal(id) {
		id_fasilitas = id;
		$('#deleteModal').modal('toggle');
	}

	function editModal(id, nama_fasilitas,icon) {
		id_fasilitas = id;
		document.getElementById("nama_fasilitas").value = nama_fasilitas;
		document.getElementById("icon").value = icon;
		document.getElementById('submit_btn').innerHTML = "Edit";
		document.getElementById("submit_btn").onclick = function() {
			editData();
		}
		$('#tambahModal').modal('toggle');
	}

	function editData() {
		nama_fasilitas = document.getElementById("nama_fasilitas").value;
		icon = document.getElementById("icon").value;

		$.ajax({
			url: "<?php echo site_url('admin/fasilitas/update') ?>",
			type: "post",
			data: {
				id: id_fasilitas,
				nama_fasilitas: nama_fasilitas,
				icon: icon,
			},
			success: function(response) {
				var obj = JSON.parse(response);
				if (obj.status == "OK") {
					$('#tambahModal').modal('toggle');
					toastr.success('Edit Berhasil')
					document.getElementById("nama_kota").value = "";
					document.getElementById("icon").value = "";
					document.getElementById('submit_btn').innerHTML = "Tambah";
					document.getElementById("submit_btn").onclick = function() {
						insert();
					}
					$("#tbl_fasilitas").dataTable().fnDestroy();
					load_data();
				} else {
					toastr.error('Edit Gagal')
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	}


	function deleteData() {
		$.ajax({
			url: "<?php echo site_url('admin/fasilitas/delete') ?>",
			type: "post",
			data: {
				id: id_fasilitas
			},
			success: function(response) {
				var obj = JSON.parse(response);
				if (obj.status == "OK") {
					$('#deleteModal').modal('toggle');
					toastr.success('Hapus Berhasil')
					$("#tbl_fasilitas").dataTable().fnDestroy();
					load_data();
				} else {
					toastr.error('Hapus Gagal')
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	}
</script>
