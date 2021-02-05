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
<body class="bg-dark" style=" background: url('<?= base_url() ?>assets/landing/image/wave about.svg'); background-repeat: no-repeat; background-size: auto;">
  <?php $this->load->view('landing/element/header'); ?>
  <div class="section mt-5">
    <div class="container" style="max-width: 768px;">
      <div class="card shadow">
        <div class="bg-secondary text-center w-100" style="height: 300px; border-radius: 4px 4px 0px 0px">
          <div class="carousel slide" data-ride="carousel" style="opacity: 0.5; border-radius: 4px 4px 0px 0px">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url() ?>assets/landing/image/hotels (1).jpeg" alt="First slide" style="object-fit: cover; height: 300px;">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url() ?>assets/landing/image/hotels (3).jpeg" alt="Second slide" style="object-fit: cover; height: 300px;">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url() ?>assets/landing/image/hotels (4).jpeg" alt="Third slide" style="object-fit: cover; height: 300px;">
              </div>
            </div>
          </div>
          <div class="text-center text-light w-100" style="position: absolute; top: 6rem;">
            <span style="font-size: 4rem;">
              <span class="fa fa-heart"></span>
            </span>
          </div>
        </div>
        <div class="card-body text-dark">
          <div class="mt-3 text-center">
            <h1>
              <b>
                Citarum Hotels
              </b>
            </h1>
            <h5>
              <span class="text-muted">
                <i>
                  Make your journey easier and happier
                </i>
              </span>
            </h5>
            <a href="#" class="text-light">
              <span class="fa-stack fa-md">
                <i class="fa fa-square fa-stack-2x" style="color: #4267B2"></i>
                <i class="fa fa-facebook fa-stack-1x"></i>
              </span>
            </a>
            <a href="https://www.instagram.com/innappsofficial/" class="text-light">
              <span class="fa-stack fa-md">
                <i class="fa fa-square fa-stack-2x" style="color: #8a3ab9"></i>
                <i class="fa fa-instagram fa-stack-1x"></i>
              </span>
            </a>
            <a href="#" class="text-light">
              <span class="fa-stack fa-md">
                <i class="fa fa-square fa-stack-2x" style="color: #1DA1F2"></i>
                <i class="fa fa-twitter fa-stack-1x"></i>
              </span>
            </a>
            <div class="row m-0 pt-4">
              <div class="col-md-6 text-center">
                <div class="text-dark mt-2">
                  <h4>
                    <span class="fa-stack fa-md">
                      <i class="fa fa-square fa-stack-2x text-dark"></i>
                      <i class="fa fa-map-marker fa-stack-1x text-light"></i>
                    </span>
                  </h4>
                  Jl. Medokan Asri Barat MA1 no.23<br />
                  Kec. Rungkut, Kota Surabaya<br />
                  60293
                </div>
              </div>
              <div class="col-md-6 text-center">
                <div class="card mt-2" style="display: inline-block; border: 1px solid lightgray">
                  <div class="card-body">
                    <h1>
                      <b>4.7</b>
                    </h1>
                    <div class="text-dark">
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star-half-o"></span>
                    </div>
                  </div>
                </div>
                <div class="mt-3">
                  <button class="btn btn-dark"><span class="fa fa-thumbs-up fa-fw"></span>Rate Us</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row m-0">
          <div class="col-6 text-left p-0">
            <span class="fa fa-caret-right fa-3x text-dark" style="margin-left: -3px;"></span>
          </div>
          <div class="col-6 text-right p-0">
            <span class="fa fa-caret-left fa-3x text-dark" style="margin-right: -3px;"></span>
          </div>
        </div>
        <div class="mr-4 ml-4" style="margin-top: -1.5rem; border-top: 1px solid lightgray"></div>
        <div class="card-body text-center text-dark">
          <b>
            Hotel Management System by
          </b>
            <a href="https://www.innapps.co.id" class="logo text-success">INNAPPS</a><span class="text-success">®</span>
        </div>
      </div>
    </div>
  </div>
  <div class="section mt-3">
    <div class="container text-center text-muted">
      <small>
        By using <span class="logo">INNAPPS HMS</span> you agree with our <a class="text-info" href="#">terms and policies</a><br />
        All contents in this website is outside the responsibility of <span class="logo">INNAPPS HMS</span> and has been submitted to third party
      </small>
    </div>
  </div>
  <?php $this->load->view('landing/setting/footer'); ?>
</body>
</html>
