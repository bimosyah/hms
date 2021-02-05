<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php $this->load->view('landing/setting/header'); ?>
</head>
<body>
  <?php $this->load->view('landing/element/preloader'); ?>
  <?php $this->load->view('landing/element/header'); ?>
  <div class="section bg-dark" style="padding-bottom: 8rem;">
    <div class="container text-center">
      <div class="p-5">
        <h2>
          <span class="text-light">
            <b>Hotel Citarum</b>
          </span>
        </h2>
        <p>
          <span class="text-light">
            <span class="fa fa-map-marker fa-fw"></span>Jl. ITN 2 Tasikmadu, Losawi, Tanjungtirto, Kec. Singosari
          </span>
        </p>
      </div>
    </div>
  </div>
  <div class="section" style="margin-top: -10rem;">
    <div class="container">
      <div class="card shadow mt-4 mb-4">
        <div class="row m-0 bg-light" style="border-radius: 4px 4px 0px 0px">
          <div class="col-7">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-light m-0">
                <li class="breadcrumb-item">
                  <a href="<?= base_url() ?>" class="text-success">
                    <span class="fa-stack fa-md">
                      <i class="fa fa-square fa-stack-2x"></i>
                      <i class="fa fa-home fa-stack-1x text-light"></i>
                    </span>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?= ucfirst($this->uri->segment('1')) ?></li>
              </ol>
            </nav>
          </div>
          <div class="col-5 text-right">
            <button class="btn btn-dark btn-sm mt-3 mr-3" data-target="#ShareModal" data-toggle="modal">Share<span class="fa fa-share ml-2"></span></button>
          </div>
        </div>

        <div class="bg-secondary" >
          <div id="SlidePhoto" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators m-0">
              <li data-target="#SlidePhoto" data-slide-to="0" class="active"><img src="<?= base_url() ?>assets/landing/image/hotels (1).jpeg"></li>
              <li data-target="#SlidePhoto" data-slide-to="1"><img src="<?= base_url() ?>assets/landing/image/hotels (3).jpeg"></li>
              <li data-target="#SlidePhoto" data-slide-to="2"><img src="<?= base_url() ?>assets/landing/image/hotels (4).jpeg"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url() ?>assets/landing/image/hotels (1).jpeg" alt="First slide" style="object-fit: cover; height: 700px">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url() ?>assets/landing/image/hotels (3).jpeg" alt="Second slide" style="object-fit: cover; height: 700px">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url() ?>assets/landing/image/hotels (4).jpeg" alt="Third slide" style="object-fit: cover; height: 700px">
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow mr-4 ml-4" style="margin-top: -4rem; z-index: 12">
          <div class="card-body">
            <div class="row m-0">
              <div class="col-sm-4 text-center">
                <div class="m-1">
                  <span class="fa fa-building-o fa-2x"></span>
                </div>
                Avalable Room(s)<br />
                <h5>
                  <b>99+</b>
                </h5>
              </div>
              <div class="col-sm-4 text-center" style="border-right: 1px solid lightgray; border-left: 1px solid lightgray; ">
                <div class="m-1">
                  <span class="fa fa-bed fa-2x"></span>
                </div>
                Minimum Stayed<br />
                <h5>
                  <b>99+</b>
                </h5>
              </div>
              <div class="col-sm-4 text-center">
                <div class="m-1">
                  <span class="fa fa-phone fa-2x"></span>
                </div>
                Phone<br />
                <h5>
                  <b>1234567</b>
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="mt-4">
            <div class="row m-0">
              <div class="col-md-6">
                <span class="bg-danger text-light pt-1 pb-1 pr-2 pl-2">
                  <small>
                    <s>IDR 800.000</s>
                  </small>
                </span>
                <h3>
                  <span class="text-dark">
                    <b>
                      IDR 400.000
                    </b>
                  </span>
                </h3>
              </div>
              <div class="col-md-6 text-right">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-light active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Luxury
                  </label>
                  <label class="btn btn-light">
                    <input type="radio" name="options" id="option2" autocomplete="off"> Deluxe
                  </label>
                  <label class="btn btn-light">
                    <input type="radio" name="options" id="option3" autocomplete="off"> Economic
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-4 pt-4" style="text-align: justify; border-top: 1px solid lightgray;">
            <h5>
              <b>DESCRIPTION</b>
            </h5>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam facilisis placerat ex, in tempor dui egestas id. Sed et suscipit velit, et sodales nulla. Maecenas placerat at leo eget sagittis. Morbi non massa egestas, feugiat lectus vel, viverra nunc. Vivamus tincidunt ante a dui varius sollicitudin. Ut id tortor a erat tincidunt vehicula. Nullam eu facilisis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada quam sit amet sodales maximus. Morbi tristique est et arcu ullamcorper vestibulum. Curabitur consequat est dui, eu rutrum eros posuere laoreet.
            <div class="row pt-5 m-0">
              <div class="col-10" style="border-top: 1px solid lightgray">

              </div>
              <div class="col-2 text-right">
                <button type="button" class="btn btn-outline-dark btn-sm" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="Facilities Rooms Testimonials" style="margin-top: -2rem;">
                  <span class="fa fa-chevron-down"></span>
                </button>
              </div>
            </div>
            <div class="collapse multi-collapse show mt-2" id="Facilities">
              <div class="m-2">
                <div class="row">
                  <div class="col-2 text-center m-1">
                    <h4>
                      <span class="fa-stack fa-md" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                        <i class="fa fa-square fa-stack-2x text-dark"></i>
                        <i class="fa fa-envira fa-stack-1x text-light"></i>
                      </span>
                    </h4>
                    <small>
                      <span style="line-height: 1.2rem">
                        Air Conditioner
                      </span>
                    </small>
                  </div>
                  <div class="col-2 text-center m-1">
                    <h4>
                      <span class="fa-stack fa-md" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                        <i class="fa fa-square fa-stack-2x text-dark"></i>
                        <i class="fa fa-shower fa-stack-1x text-light"></i>
                      </span>
                    </h4>
                    <small>
                      <span style="line-height: 1.2rem">
                        Private Shower
                      </span>
                    </small>
                  </div>
                  <div class="col-2 text-center m-1" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                    <h4>
                      <span class="fa-stack fa-md">
                        <i class="fa fa-square fa-stack-2x text-dark"></i>
                        <i class="fa fa-wifi fa-stack-1x text-light"></i>
                      </span>
                    </h4>
                    <small>
                      <span style="line-height: 1.2rem">
                        Free Wifi
                      </span>
                    </small>
                  </div>
                  <div class="col-2 text-center m-1" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                    <h4>
                      <span class="fa-stack fa-md">
                        <i class="fa fa-square fa-stack-2x text-dark"></i>
                        <i class="fa fa-cutlery fa-stack-1x text-light"></i>
                      </span>
                    </h4>
                    <small>
                      <span style="line-height: 1.2rem">
                        Heater
                      </span>
                    </small>
                  </div>
                  <div class="col-2 text-center m-1" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                    <h4>
                      <span class="fa-stack fa-md">
                        <i class="fa fa-square fa-stack-2x text-dark"></i>
                        <i class="fa fa-product-hunt fa-stack-1x text-light"></i>
                      </span>
                    </h4>
                    <small>
                      <span style="line-height: 1.2rem">
                        Free Parking
                      </span>
                    </small>
                  </div>
                </div>
              </div>
              <div class="mt-3">
                <table class="table table-borderless table-sm">
                  <thead>
                    <tbody>
                      <tr>
                        <th>Checkin</th>
                        <td>14:00 - 21:00</td>
                      </tr>
                      <tr>
                        <th>Checkout</th>
                        <td>11:00 - 12:00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-secondary collapse multi-collapse show" id="Rooms">
            <div id="image-slider" class="owl-carousel p-4">
              <div class="item">
                <div class="m-2">
                  <img src="<?= base_url() ?>assets/landing/image/hotels (1).jpeg" class="w-100" style="object-fit: cover">
                </div>
              </div>
              <div class="item">
                <div class="m-2 h-100">
                  <img src="<?= base_url() ?>assets/landing/image/hotels (2).jpeg" class="w-100" style="object-fit: cover">
                </div>
              </div>
              <div class="item">
                <div class="m-2">
                  <img src="<?= base_url() ?>assets/landing/image/hotels (1).jpeg" class="w-100" style="object-fit: cover">
                </div>
              </div>
              <div class="item">
                <div class="m-2">
                  <img src="<?= base_url() ?>assets/landing/image/hotels (2).jpeg" class="w-100" style="object-fit: cover">
                </div>
              </div>
            </div>
          </div>
          <div class="card-body collapse multi-collapse show" id="Maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.8131920583655!2d112.63197611538368!3d-7.914573480974539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62b2eca9f2a75%3A0x9a907b342d36f36f!2sCITARUM%20HOMESTAY%20MALANG!5e0!3m2!1sid!2sid!4v1612398222258!5m2!1sid!2sid" width="350" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="card-body bg-light collapse multi-collapse show" id="Testimonials">
            <div class="text-center">
              <h4><b>Ulasan</b></h4>
            </div>
            <div class="mt-4 pt-4 ">
              <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial">
                  <div class="testimonial-content">
                    <div class="testimonial-icon">
                      <i class="fa fa-quote-left"></i>
                    </div>
                    <p class="description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                    </p>
                  </div>
                  <h3 class="title">williamson</h3>
                  <span class="post">Web Developer</span>
                </div>

                <div class="testimonial">
                  <div class="testimonial-content">
                    <div class="testimonial-icon">
                      <i class="fa fa-quote-left"></i>
                    </div>
                    <p class="description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                    </p>
                  </div>
                  <h3 class="title">Kristina</h3>
                  <span class="post">Web Designer</span>
                </div>

                <div class="testimonial">
                  <div class="testimonial-content">
                    <div class="testimonial-icon">
                      <i class="fa fa-quote-left"></i>
                    </div>
                    <p class="description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                    </p>
                  </div>
                  <h3 class="title">williamson</h3>
                  <span class="post">Web Developer</span>
                </div>

                <div class="testimonial">
                  <div class="testimonial-content">
                    <div class="testimonial-icon">
                      <i class="fa fa-quote-left"></i>
                    </div>
                    <p class="description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                    </p>
                  </div>
                  <h3 class="title">williamson</h3>
                  <span class="post">Web Developer</span>
                </div>

                <div class="testimonial">
                  <div class="testimonial-content">
                    <div class="testimonial-icon">
                      <i class="fa fa-quote-left"></i>
                    </div>
                    <p class="description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                    </p>
                  </div>
                  <h3 class="title">williamson</h3>
                  <span class="post">Web Developer</span>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body bg-light text-center">
            <a href="https://api.whatsapp.com/send?phone=08123456789&text=Saya%20tertarik%20untuk%20membeli%20produk%20ini%20segera." class="btn btn-dark btn-lg"><span class="fa fa-book fa-fw"></span>Book Now</a>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('landing/element/footer'); ?>
    <?php $this->load->view('landing/element/preview'); ?>
    <?php $this->load->view('landing/element/share'); ?>
    <?php $this->load->view('landing/setting/footer'); ?>
  </body>
  </html>
