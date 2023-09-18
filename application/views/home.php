<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row gy-4 d-flex justify-content-between">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h2 data-aos="fade-up">Sistem Informasi Jalan Raya Kota Bogor</h2>
        <p data-aos="fade-up" data-aos-delay="100" style="text-align: justify;">Sistem Informasi Jalan Raya Kota Bogor adalah platform yang dirancang untuk menyediakan informasi real-time tentang kondisi jalan raya dan transportasi di kota Bogor. Sistem ini memberikan informasi tentang kepadatan lalu lintas, pelanggaran, kecelakaan, dan jumlah kendaraan di Kota Bogor.</p>




        <div class="row gy-4 justify-content-center" data-aos="fade-up" data-aos-delay="400">

          <div class="col-lg-3 col-6 justify-content-center">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?= $get_count['cctv'] ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>CCTV</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-6 justify-content-center">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?= $get_count['trayek'] ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Trayek</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-6 justify-content-center">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?= $get_count['terminal'] ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Halte</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-6 justify-content-center">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?= $get_count['pos'] ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pos Polisi</p>
            </div>
          </div><!-- End Stats Item -->

        </div>
      </div>

      <div class="col-lg-5 order-1 order-lg-2 hero-img align-items-center d-flex justify-content-center" data-aos="zoom-out">
        <img src="<?= base_url() ?>assets/img/logo/logo-bgr.png" class="img-fluid mb-3 mb-lg-0 w-50" alt="">
      </div>

    </div>
  </div>

</section><!-- End Hero Section -->

<main id="main">


  <!-- ======= Pelayanan Section ======= -->
  <section id="pelayanan" class="pelayanan">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up">
          <div class="icon flex-shrink-0"><i class="fas fa-map-marked-alt"></i></div>
          <div>
            <h4 class="title">Peta Lalu Lintas</h4>
            <p class="description">Peta lalu lintas menampilkan jalan raya dan kondisi lalu lintas terkini di Kota Bogor</p>
            <a href="<?= base_url() ?>pelayanan/peta" class="readmore stretched-link"><span>Telusuri</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="icon flex-shrink-0"><i class="bi bi-webcam-fill"></i></div>
          <div>
            <h4 class="title">CCTV</h4>
            <p class="description">cctv lalu lintas menampilkan visualisasi dari keadaan lalu lintas terkini di Kota Bogor</p>
            <a href="<?= base_url() ?>pelayanan/cctv" class="readmore stretched-link"><span>Telusuri</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Pelayanan Section -->

  <!-- ======= Tentang Section ======= -->
  <section id="tentang" class="tentang pt-4 pb-1" style="background-color: aliceblue;">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first d-flex justify-content-center">
          <img src="<?= base_url() ?>assets/img/profil/profil-sijab.png" class="img-fluid w-75 " alt="">
          <a href="https://www.youtube.com/watch?v=TzUZprtv2A4" class="glightbox play-btn"></a>
        </div>
        <div class="col-lg-6 content order-last  order-lg-first">
          <h3>SIJAB</h3>
          <p>
            SIJAB (Sistem Informasi Jalan Raya Kota Bogor) adalah sistem yang menyajikan informasi seputar jalan raya Kota Bogor, berikut adalah beberapa fitur yang tersedia:
          </p>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="fas fa-map-marked-alt mt-3"></i>
              <div>
                <h5>Peta Lalu Lintas</h5>
                <p>Peta yang meliputi kondisi lalu lintas Kota Bogor</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-webcam-fill"></i>
              <div>
                <h5>CCTV</h5>
                <p>CCTV yang dapat diakses umum untuk melihat kondisi lalu lintas</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-phone-fill"></i>
              <div>
                <h5>SIJAB Mobile</h5>
                <p>Aplikasi Mobile SIJAB untuk untuk memudahkan pencarian informasi lalu lintas Kota Bogor oleh masyarakat umum</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End Tentang Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container">

      <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

        <div class="col-md-5">
          <img src="<?= base_url() ?>assets/img/profil/preview_peta.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-7">
          <h3>Peta Lalu Lintas Kota Bogor</h3>
          <p class="fst-italic">
            Peta digital yang berfokus pada daerah Kota Bogor, menyajikan informasi lalu lintas terkini di Kota Bogor.
          </p>
          <ul>
            <li><i class="bi bi-check"></i> Titik Fasilitas Umum di Kota Bogor.</li>
            <li><i class="bi bi-check"></i> Kondisi Traffic Realtime Di Kota Bogor.</li>
            <li><i class="bi bi-check"></i> Jalur Angkutan Umum Kota Bogor.</li>
          </ul>
        </div>
      </div><!-- Features Item -->

      <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
          <img src="<?= base_url() ?>assets/img/profil/img-cctv.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 order-2 order-md-1">
          <h3>CCTV Lalu Lintas Kota Bogor</h3>
          <p class="fst-italic">
            Lihat Kondisi lalu lintas terkini di Kota Bogor dengan lebih aktual dengan CCTV.
          </p>
          <p>
            CCTV dapat dilihat melalui halaman CCTV dan peta digital untuk informasi aktual tentang lalu lintas di Kota Bogor, CCTV meliputi CCTV Tol dan beberapa CCTV dalam Kota.
          </p>
        </div>
      </div><!-- Features Item -->

      <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

        <div class="col-md-5">
          <img src="<?= base_url() ?>assets/img/fitur/sijab-mobile.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-7">
          <h3>SIJAB Mobile</h3>
          <p class="fst-italic">
            Mari Gunakan Aplikasi SIJAB mobile agar selalu up to date, versi saat ini hanya support untuk Perangkat Android, <a href="#">Unduh Sekarang</a>.
          </p>
          <ul>
            <li><i class="bi bi-check"></i> Kemudahan pemakaian dengan aplikasi mobile.</li>
            <li><i class="bi bi-check"></i> Informasi lalu lintas up to date.</li>

          </ul>
        </div>
      </div><!-- Features Item -->





    </div>
  </section><!-- End Features Section -->





  <!-- ======= Services Section ======= -->
  <section id="service" class="services pt-0">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Berita Terkini</span>
        <h2>Berita Terkini</h2>

      </div>

      <div class="row gy-4">

        <?php
        $i = 0;
        foreach ($get_berita as $berita) :
          if (++$i == 7) break;
        ?>

          <div class="col-lg-4 col-md-6 col-sm-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card rounded">
              <div class="card-img rounded">
                <img src="<?= url_api() . $berita['news_image'] ?>" alt="" class="card-img-top" style="height: 300px;">
              </div>
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h3><a href="<?= base_url('berita/detail/' . $berita['id']) ?>" class="stretched-link"><?= substr($berita['title'], 0, 55) ?></a></h3>
                  </li>
                  <li class="list-group-item">
                    <p><?= substr($berita['content'], 0, 100) . '. . .' ?></p>
                  </li>

                </ul>
              </div>
            </div>
          </div><!-- End Card Item -->

        <?php endforeach ?>

        <a href="<?= base_url() ?>berita" class="btn btn-primary">Lihat Berita Lainnya</a>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Call To Action Section ======= -->
  <section id="call-to-action" class="call-to-action">
    <div class="container" data-aos="zoom-out">

      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h3>Kontak Darurat</h3>
          <p>Kontak darurat petugas lalu lintas Kota Bogor</p>
          <a class="cta-btn" href="#" data-bs-toggle="modal" data-bs-target="#kontakModal">Kontak</a>
        </div>
      </div>

    </div>
  </section><!-- End Call To Action Section -->


</main><!-- End #main -->

<!-- Modal Kontak PJR -->
<div class="modal fade" id="kontakModal" tabindex="-1" aria-labelledby="kontakModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="kontakModalLabel">Kontak Darurat Petugas Lalu Lintas Kota Bogor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table datatable" id="datatable" style="width: 100%;">
          <thead>
            <th>No</th>
            <th>Nama Instansi</th>
            <th>Alamat</th>
            <th>Kontak</th>
          </thead>

        </table>
        <script>
          $(document).ready(function() {
            var fetchData = fetch("<?= base_url() ?>home/serverSideTable").then(
              response => response.json()
            ).then(
              data => {
                // console.log(data);
                if (!data.length) {
                  return
                }
                var table = new DataTable("#datatable", {
                  aLengthMenu: [
                    [5, 10, 25, -1],
                    [5, 10, 25, "All"]
                  ],
                  'iDisplayLength': 5,

                  data: data.map(item => Object.values(item)),



                })
              }
            )
          })
        </script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>