<?php $this->load->view('admin/include/header'); ?>
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Edit Hotel</h1>
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
												<option <?php echo ($value->id == $hotel[0]->id_kota ? "selected" : "")?> value="<?php echo $value->id?>"><?php echo $value->nama_kota?></option>
											<?php endforeach?>
										</select>
									</td>
								</tr>
								<tr>
									<td>Hotel</td>
									<td><input type="text" class="form-control form-control-border" value="<?php echo $hotel[0]->nama_hotel ?>" id="nama_hotel"></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td><input type="text" class="form-control form-control-border" value="<?php echo $hotel[0]->alamat ?>" id="alamat"></td>
								</tr>
								<tr>
									<td>Kamar</td>
									<td><input type="text" class="form-control form-control-border" value="<?php echo $hotel[0]->jml_kamar ?>" id="jml_kamar"></td>
								</tr>
								<tr>
									<td>Deskripsi</td>
									<td><textarea class="form-control" rows="7" placeholder="Enter ..." id="deskripsi"><?php echo $hotel[0]->deskripsi ?></textarea></td>
								</tr>
								<tr>
									<td>No Telp</td>
									<td><input type="number" class="form-control form-control-border" value="<?php echo $hotel[0]->notelp ?>" id="notelp"></td>
								</tr>
								<tr>
									<td class="">Minimum Stay</td>
									<td><input type="number" class="form-control form-control-border" value="<?php echo $hotel[0]->minimum_stay ?>" id="minimum_stay"></td>
								</tr>
							</table>
						</div>
						<div class="card-footer">
							<button type="submit" id="btn_simpan" class="btn btn-info float-right" data-toggle="modal" data-target="#ConfirmModal">Simpan</button>
							<a href="<?php echo site_url("admin/data-hotel/".$this->uri->segment(4))?>" type="submit" class="btn btn-default">Kembali</a>
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
	
	var id_hotel = "<?php echo $this->uri->segment(4);?>"
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
			url: "<?php echo site_url('admin/hotel/update') ?>",
			type: "post",
			data: {
				id_hotel:id_hotel,
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
					toastr.success('Edit Berhasil.')
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
