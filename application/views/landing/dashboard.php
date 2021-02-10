<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<?php $this->load->view('landing/setting/header'); ?>
	<style>
		.navbar {
			background-color: transparent !important;
		}
	</style>
</head>

<body>
	<?php $this->load->view('landing/element/preloader'); ?>
	<div class="wrapper bg-dark" style=" background: url('<?= base_url() ?>assets/landing/image/wave header.svg'); background-repeat: no-repeat; background-size: cover;">
		<?php $this->load->view('landing/element/header'); ?>
		<div class="section">
			<div class="container text-light">
				<div class="pt-5">
					<div class="row">
						<div class="col-lg-6 text-left">
							<img src="<?= base_url() ?>assets/landing/image/header_icon.png" class="w-100 p-4" />
						</div>
						<div class="col-lg-6 text-center">
							<div class="mt-5">
								<h1>
									<b>
										Citarum Hotels
									</b>
								</h1>
							</div>
							<div class="mt-5">
								<p>
								<h5><i>Make your journey easier and happier</i></h5>
								</p>
							</div>
							<div class="mt-5">
								<a href="#OurHotels" class="btn btn-success">Explore Our Hotels</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section" style=" background: url('<?= base_url() ?>assets/landing/image/wave.svg'); background-repeat: no-repeat; background-size: cover; margin-top: -1px;">
		<div class="container" style="padding-top: 8rem;">
			<div class="row">
				<div class="col-lg-4">
					<div class="card shadow m-3">
						<div class="card-body">
							<h2>
								<span class="fa-stack fa-md">
									<i class="fa fa-square fa-stack-2x text-dark"></i>
									<i class="fa fa-bolt fa-stack-1x text-success"></i>
								</span>
							</h2>
							<h5>
								<b>
									<span class="logo">
										Fastest Response
									</span>
								</b>
							</h5>
							<p>
								<span class="text-muted">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis dictum metus, a volutpat est.
								</span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card shadow m-3">
						<div class="card-body">
							<h2>
								<span class="fa-stack fa-md">
									<i class="fa fa-square fa-stack-2x text-dark"></i>
									<i class="fa fa-clock-o fa-stack-1x text-success"></i>
								</span>
							</h2>
							<h5>
								<b>
									<span class="logo">
										24/7 Services
									</span>
								</b>
							</h5>
							<p>
								<span class="text-muted">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis dictum metus, a volutpat est.
								</span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card shadow m-3">
						<div class="card-body">
							<h2>
								<span class="fa-stack fa-md">
									<i class="fa fa-square fa-stack-2x text-dark"></i>
									<i class="fa fa-user fa-stack-1x text-success"></i>
								</span>
							</h2>
							<h5>
								<b>
									<span class="logo">
										Flexibile
									</span>
								</b>
							</h5>
							<p>
								<span class="text-muted">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis dictum metus, a volutpat est.
								</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section mt-5 mb-5" id="OurHotels">
		<div class="container">
			<div class="text-center mb-4">
				<h5>
					<b>OUR HOTEL</b>
				</h5>
			</div>
			<div class="mb-4">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Recipient's username">
					<button class="btn btn-info" type="button" id="button-addon2"><span class="fa fa-search fa-fw"></span>Cari</button>
				</div>
			</div>
			<div class="mt-3 mb-3 text-center">
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-light active">
						<input type="radio" name="nama_kota" id="nama_kota" autocomplete="off" href="javascript:void(0)" data-filter="all"> All Cities
					</label>
					<?php foreach ($kota as $key => $value) : ?>
						<label class="btn btn-light active">
							<input type="radio" name="nama_kota" id="nama_kota" autocomplete="off" href="javascript:void(0)" data-filter="<?php echo $value->nama_kota ?>"> <?php echo $value->nama_kota ?>
						</label>
					<?php endforeach ?>
				</div>
			</div>
			<div class="filter-container row m-0">
				<?php foreach ($data_hotel as $key => $value) : ?>
					<div class=" filtr-item col-md-4" data-category="<?php echo $value['nama_kota'] ?>" data-sort="<?php echo $value['nama_kota'] ?>">
						<div class="card shadow">
							<img src="<?php echo $value['foto']?>" class="w-100 mb-2" style="border-radius: 4px 4px 0px 0px">
							<div class="card-body">
								<a href="http://hms.bimo.my.id/hotels" class="text-dark">
									<b><?php echo $value['nama_hotel'] ?></b>
								</a>
								<div class="text-muted description mb-4">
									<?php echo $value['deskripsi'].". . ." ?>
								</div>
								<div class="row">
									<div class="col-6">
										<span class="text-dark p-1">
											<span class="fa fa-money fa-fw"></span>
											Start From Rp. <?php echo number_format($value['harga'],2)?>
										</span>
									</div>
									<div class="col-6 text-right">
										<a href="<?php echo $value['link']?>" class="btn btn-sm btn-outline-dark">Go<span class="fa fa-long-arrow-right ml-2"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<?php $this->load->view('landing/element/footer'); ?>
	<?php $this->load->view('landing/setting/footer'); ?>

	<script>
		$(function() {
			$(document).on('click', '[data-toggle="lightbox"]', function(event) {
				event.preventDefault();
				$(this).ekkoLightbox({
					alwaysShowClose: true
				});
			});

			$('.filter-container').filterizr({
				gutterPixels: 3
			});
			$('.btn[data-filter]').on('click', function() {
				$('.btn[data-filter]').removeClass('active');
				$(this).addClass('active');
			});
		})
	</script>

</body>

</html>
