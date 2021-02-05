<?php $this->load->view('admin/include/header'); ?>
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Hotel</h1>
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
								<button type="button" onclick="view_insert()" class="btn btn-primary">
									<i class="fa fa-plus"></i> Tambah
								</button>
								<br>
								<br>
							</div>
							<table id="tbl_hotel" class="table table-bordered table-hover"></table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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

<div class="modal fade" id="hotelModal" tabindex="-1" role="dialog" aria-labelledby="hotelModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="<?php echo base_url("assets/images/dummy/slide1.svg") ?>" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo base_url("assets/images/dummy/slide2.svg") ?>" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo base_url("assets/images/dummy/slide3.svg") ?>" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Hapus</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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

	var delete_hotel = "<?php //echo $this->session->flashdata('delete_hotel')?>";

	$(document).ready(function() {
		load_data();
		
		if(delete_hotel.length > 0){
			toastr.success('Hotel Berhasil Dihapus')
		}
	});

	function load_data() {
		var table = $('#tbl_hotel').DataTable({
			"ajax": "<?php echo site_url("admin/hotel/getall") ?>",
			columns: [{
					title: "No"
				},
				{
					title: "Kota"
				},
				{
					title: "Hotel"
				},
				{
					title: "Alamat"
				}
			],
		});
		$('#tbl_hotel').on('click', 'tr', function() {
			var rowData = table.row(this).data();
			// $('#hotelModal').modal('toggle');
			// alert(rowData[4]);
			var win = window.open("data-hotel/"+rowData[4], '_blank');
			win.focus();
			window.close();
		});
	}

	function view_insert(){
		var win = window.open("data-hotel/add", '_blank');
		win.focus();
		window.close();

	}
</script>
