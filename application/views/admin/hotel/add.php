<?php $this->load->view('admin/include/header'); ?>
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Tambah Hotel</h1>
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
							<table class="table table-bordered">
								<tr>
									<td>Kota</td>
									<td>
										<select class="custom-select form-control-border" id="id_kota">
											<option>Pilih Kota...</option>
											<?php foreach ($kota as $key => $value):?>
												<option  value="<?php echo $value->id?>"><?php echo $value->nama_kota?></option>
											<?php endforeach?>
										</select>
									</td>
								</tr>
								<tr>
									<td>Hotel</td>
									<td><input type="text" class="form-control form-control-border" id="nama_hotel"></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td><input type="text" class="form-control form-control-border" id="alamat"></td>
								</tr>
								<tr>
									<td>Jumlah Kamar</td>
									<td><input type="text" class="form-control form-control-border" id="jml_kamar"></td>
								</tr>
								<tr>
									<td>Deskripsi</td>
									<td><textarea class="form-control" rows="7" placeholder="Enter ..." id="deskripsi"></textarea></td>
								</tr>
								<tr>
									<td>No Telp</td>
									<td><input type="number" class="form-control form-control-border" id="notelp"></td>
								</tr>
								<tr>
									<td class="">Minimum Stay</td>
									<td><input type="number" class="form-control form-control-border" id="minimum_stay"></td>
								</tr>
							</table>
						</div>
						<div class="card-footer">
							<button type="submit" id="btn_simpan" class="btn btn-info float-right" data-toggle="modal" data-target="#ConfirmModal">Simpan</button>
							<button type="submit" class="btn btn-default">Reset</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="modal fade" id="ConfirmModal" tabindex="-1" role="dialog" aria-labelledby="ConfirmModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ConfirmModalLabel">Konfirmasi Data Hotel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Data Sudah Benar ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" onclick="insert()">Simpan</button>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('admin/include/footer'); ?>

<script>
	var id_kota;
	var nama_hotel;
	var alamat;
	var jml_kamar;
	var deskripsi;
	var notelp;
	var minimum_stay;

	$(document).ready(function() {

	});

	function insert() {
		id_kota = document.getElementById("id_kota").value;
		nama_hotel = document.getElementById("nama_hotel").value;
		alamat = document.getElementById("alamat").value;
		jml_kamar = document.getElementById("jml_kamar").value;
		deskripsi = document.getElementById("deskripsi").value;
		notelp = document.getElementById("notelp").value;
		minimum_stay = document.getElementById("minimum_stay").value;

		$.ajax({
			url: "<?php echo site_url('admin/hotel/insert') ?>",
			type: "post",
			data: {
				id_kota: id_kota,
				nama_hotel: nama_hotel,
				alamat: alamat,
				jml_kamar: jml_kamar,
				deskripsi: deskripsi,
				notelp: notelp,
				minimum_stay: minimum_stay,
			},
			success: function(response) {
				var obj = JSON.parse(response);
				if (obj.status == "OK") {
					$('#ConfirmModal').modal('toggle');
					toastr.success('Sukses.')
					document.getElementById("btn_simpan").setAttribute("disabled", "")
				} else {
					toastr.error('Gagal.')
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	}
</script>
