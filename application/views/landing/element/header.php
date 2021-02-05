<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between" id="Top">
  <div class="container pt-3">
    <a class="navbar-brand" href="<?= base_url() ?>">
      <span class="logo">
        <h3>
          INNAPPS
          <small>
            <span class="bg-warning text-dark pt-1 pb-1 pr-2 pl-2" style="border-radius: .5rem;">HMS</span>
          </small>
        </h3>
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Menu" aria-controls="Menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="Menu">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="#">Hotels</a>
        <a class="nav-link" href="#">Category</a>
        <a class="nav-link" href="#">Brands</a>
        <a class="nav-link" href="#">Promo</a>
        <a class="nav-link" href="<?= site_url('about') ?>">About</a>
      </div>
    </div>
  </div>
</nav>
