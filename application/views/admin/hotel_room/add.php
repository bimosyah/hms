<?php $this->load->view('admin/include/header'); ?>
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Tambah Hotel Room</h1>
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
									<td>Tipe Kamar</td>
									<td><input type="text" class="form-control form-control-border" id="tipe_kamar"></td>
								</tr>
								<tr>
									<td>Harga</td>
									<td><input type="number" class="form-control form-control-border" id="harga"></td>
								</tr>
								<tr>
									<td>Diskon</td>
									<td><input type="number" class="form-control form-control-border" id="diskon"></td>
								</tr>
								<tr>
									<td>Deskripsi</td>
									<td><textarea class="form-control" rows="7" placeholder="Enter ..." id="deskripsi"></textarea></td>
								</tr>
							</table>
						</div>
						<div class="card-footer">
							<button type="submit" id="btn_simpan" class="btn btn-info float-right" data-toggle="modal" data-target="#ConfirmModal">Simpan</button>
							<a href="<?php echo site_url("admin/data-hotel/".$this->uri->segment(3))?>" type="submit" class="btn btn-default">Kembali</a>
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
	var tipe_kamar;
	var harga;
	var diskon;
	var deskripsi;

	var id_hotel = "<?php echo $this->uri->segment(3)?>";

	$(document).ready(function() {

	});

	function insert() {
		tipe_kamar = document.getElementById("tipe_kamar").value;
		harga = document.getElementById("harga").value;
		diskon = document.getElementById("diskon").value;
		deskripsi = document.getElementById("deskripsi").value;

		$.ajax({
			url: "<?php echo site_url('admin/hotel_room/insert') ?>",
			type: "post",
			data: {
				id_hotel: id_hotel,
				tipe_kamar: tipe_kamar,
				harga: harga,
				diskon: diskon,
				deskripsi: deskripsi,
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
