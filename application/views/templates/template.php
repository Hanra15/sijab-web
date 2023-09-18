<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>

  <meta content="SIJAB - Sistem Informasi Jalan Kota Bogor" name="description">
  <meta content="SIJAB - Sistem Informasi Jalan Kota Bogor" name="keywords">
  <meta content="Sistem Informasi" name="subject">
  <meta content="Indonesia" name="languange">
  <meta content="Global" name="coverage">
  <meta content="general" name="rating">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-403TSSELS0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-403TSSELS0');
  </script>

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/img/logo/logo-brand.png" rel="icon">
  <link href="<?= base_url() ?>assets/img/logo/logo-brand.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet">

  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>

  <script src="<?= base_url() ?>assets/dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/dashboard/vendor/dropify/js/dropify.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>

  <!-- leaflet -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/leaflet/leaflet.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/leaflet-routing-machine/dist/leaflet-routing-machine.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/MarkerCluster.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/MarkerCluster.Default.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/L.Control.Locate.min.css">

  <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
  <link rel='stylesheet' href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' />
  <link rel='stylesheet' href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' />

  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/vendor/DataTables/datatables.min.css">

  <script src="<?= base_url() ?>assets/vendor/leaflet/leaflet.js"></script>
  <script src="<?= base_url() ?>assets/vendor/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
  <script src="<?= base_url(); ?>assets/js/leaflet.markercluster.js"></script>
  <script src="<?= base_url(); ?>assets/js/L.Control.Locate.min.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEY9jbE_zL8SV7c6meCf7-lV3JLcbKnlY" async defer></script>
  <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
  <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
  <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
  <script src="https://unpkg.com/leaflet.gridlayer.googlemutant@latest/dist/Leaflet.GoogleMutant.js"></script>

  <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-map.js?key=ck2OXUAJsF0iz999XGQ62jyXo8AXOVp7"></script>
  <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-traffic.js?key=ck2OXUAJsF0iz999XGQ62jyXo8AXOVp7"></script>

</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?= base_url() ?>assets/img/logo/logo.png" alt="">

        <!-- <h1>SI<span class="text-blue">JAB</span></h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?= base_url() ?>" class="active"><i class="fa fa-home"></i></a></li>
          <li class="dropdown"><a href="#"><span>Pelayanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>pelayanan/peta">Peta Lalin Kota Bogor</a></li>
              <li><a href="<?= base_url() ?>pelayanan/cctv">CCTV Bogor</a></li>

            </ul>
          </li>

          <li><a href="<?= base_url() ?>berita">Berita</a></li>
          <li><a href="<?= base_url() ?>tentang">Tentang</a></li>

          <li class="list-group-item disabled"><a href="#"><?php echo format_indoHari(date('Y-m-d')) ?></a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <?php echo $contents; ?>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-12 footer-info">
          <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
            <span>SIJAB</span>
          </a>
          <p>Sistem Informasi lalu lintas kota bogor, menyajikan informasi seputar lalu lintas di kota bogor mulai dari kemacetan, pelanggaran lalu lintas, dan kecelakaan lalu lintas</p>
          <div class="mt-5">
            <a href="#" class="logo d-flex align-items-center">
              <span>SIJAB Mobile</span>
            </a>
            <p>Unduh Sekarang</p>

          </div>

        </div>

        <div class="col-lg-3 col-6 footer-links">
          <h4>Navigasi</h4>
          <ul>
            <li><a href="<?= base_url() ?>">Beranda</a></li>
            <li><a href="<?= base_url() ?>tentang">Tentang</a></li>
            <li><a href="<?= base_url() ?>berita">Berita</a></li>

          </ul>
        </div>

        <div class="col-lg-3 col-6 footer-links">
          <h4>Pelayanan</h4>
          <ul>
            <li><a href="<?= base_url() ?>pelayanan/peta">Peta Lalu Lintas</a></li>
            <li><a href="<?= base_url() ?>pelayanan/cctv">CCTV</a></li>

          </ul>
        </div>

      </div>
    </div>




  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>assets/dashboard/vendor/DataTables/datatables.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>