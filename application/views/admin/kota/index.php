<?php $this->load->view('admin/include/header'); ?>
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Kota</h1>
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
							<table id="tbl_kota" class="table table-bordered table-hover"></table>
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
				<h5 class="modal-title">Tambah Kota</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<input type="text" class="form-control form-control-border border-width-2" id="nama_kota" placeholder="Masukkan nama kota">
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
	var id_data;
	var nama_kota;
	$(document).ready(function() {
		load_data();
	});

	function load_data() {
		$('#tbl_kota').DataTable({
			"ajax": "<?php echo site_url("admin/kota/getall") ?>",
			columns: [{
					title: "No"
				},
				{
					title: "Kota"
				},
				{
					title: "Aksi"
				}
			],
		});
	}

	function insert() {
		nama_kota = document.getElementById("nama_kota").value;
		$.ajax({
			url: "<?php echo site_url('admin/kota/insert') ?>",
			type: "post",
			data: {
				nama_kota: nama_kota
			},
			success: function(response) {
				var obj = JSON.parse(response);
				if (obj.status == "OK") {
					$('#tambahModal').modal('toggle');
					toastr.success('Sukses.')
					document.getElementById("nama_kota").value = "";

					$("#tbl_kota").dataTable().fnDestroy();
					load_data();

				} else {
					toastr.error('Gagal.')
					document.getElementById("nama_kota").value = "";
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	}

	function deleteModal(id) {
		id_data = id;
		$('#deleteModal').modal('toggle');
	}

	function editModal(id, nama_kota) {
		id_data = id;
		document.getElementById("nama_kota").value = nama_kota;
		document.getElementById('submit_btn').innerHTML = "Edit";
		document.getElementById("submit_btn").onclick = function() {
			editData();
		}
		$('#tambahModal').modal('toggle');
	}

	function editData() {
		nama_kota = document.getElementById("nama_kota").value;
		$.ajax({
			url: "<?php echo site_url('admin/kota/update') ?>",
			type: "post",
			data: {
				id: id_data,
				nama_kota: nama_kota
			},
			success: function(response) {
				var obj = JSON.parse(response);
				if (obj.status == "OK") {
					$('#tambahModal').modal('toggle');
					toastr.success('Edit Berhasil')
					document.getElementById("nama_kota").value = "";
					document.getElementById('submit_btn').innerHTML = "Tambah";
					document.getElementById("submit_btn").onclick = function() {
						insert();
					}
					$("#tbl_kota").dataTable().fnDestroy();
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
			url: "<?php echo site_url('admin/kota/delete') ?>",
			type: "post",
			data: {
				id: id_data
			},
			success: function(response) {
				var obj = JSON.parse(response);
				if (obj.status == "OK") {
					$('#deleteModal').modal('toggle');
					toastr.success('Hapus Berhasil')
					$("#tbl_kota").dataTable().fnDestroy();
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
