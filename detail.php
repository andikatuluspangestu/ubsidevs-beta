<?php require 'controller/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Kuliah Koding</title>
 <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/svg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/lineicons.css" />
  <link rel="stylesheet" href="../assets/css/tiny-slider.css" />
  <link rel="stylesheet" href="../assets/css/glightbox.min.css" />
  <link rel="stylesheet" href="../style.css" />
</head>
<body>

  <!-- Bagian Navbar -->
  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php">
              <h4 class="text-primary">
                <i class="bi bi-mortarboard">
                </i>&nbsp;<span id="title">UBSI Tegal Devs Community</span></h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
              aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="page-scroll active" href="#hero-area">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#layanan">Tentang</a>
                </li>

                <li class="nav-item">
                  <a class="page-scroll" href="#pricing">Anggota</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll btn btn-primary text-light" href="./admin/login.php">Masuk</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Bagian Navbar -->

  <!-- Bagian Detail Post -->
  <?php
  		$id = $_GET["id"] ;
  		$sql = "select * from t_artikel WHERE id = '$id'";
  		$res = mysqli_query($con, $sql);
  		while ($data = mysqli_fetch_array($res)) {
  ?>
  <section id="hero-area" class="header-area header-eight">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12 col-12">
          <div class="header-content">
            <h1 class="text-center"><?php echo $data["judul"]; ?></h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Hero -->

  <!-- Awal tentang kita tertulis -->
  <section class="about-area tentang-kita">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-12 text-start">
          <p><?php echo htmlspecialchars_decode($data["isi"]); ?></p>
        </div>
      </div>
    </div>
  </section>
  <?php
  					}
  					?>
  <!-- Akhir Tentang Kita :( -->

  <!-- Bagian Footer -->
  <footer class="bagian-bawah">
    <div class="footer-top">
      <div class="container">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
              <div class="footer-widget f-about">
                <div class="logo">
                  <a href="index.html">
                    <i class="text-logo bi bi-mortarboard text-light"></i>
                  </a>
                </div>
                <p>
                  UBSI Tegal Devs Community <br>
                  Kami ingin berkembang untuk pendidikan indonesia
                  yang Ekspresif, Edukatif dan Partisipatif
                </p>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12">
              <div class="footer-widget f-link">
                <h5>Patner</h5>
                <ul>
                  <li><a href="javascript:void(0)">Universitas BSI</a></li>
                  <li><a href="javascript:void(0)">HIMSI UBSI Tegal</a></li>
                  <li><a href="javascript:void(0)">PMB UBSI</a></li>
                  <li><a href="javascript:void(0)">Kemahasiswaan UBSI</a></li>
                </ul>
              </div>
            </div>


            <div class="col-lg-2 col-md-6 col-12">
              <div class="footer-widget f-link">
                <h5>Media Sosial</h5>
                <ul>
                  <li><a href="javascript:void(0)">Github</a></li>
                  <li><a href="javascript:void(0)">Instagram</a></li>
                  <li><a href="javascript:void(0)">Discord</a></li>
                  <li><a href="javascript:void(0)">Telegram</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="footer-widget newsletter">
                <h5>Kontak Kami</h5>
                <ul>
                  <li><a href="javascript:void(0)" class="text-light mb-2">
                    <i class="bi bi-geo-alt"></i> 
                    &nbsp;Tegal, Jawa Tengah
                    </a></li>
                  <li><a href="javascript:void(0)" class="text-light mb-2">
                    <i class="bi bi-envelope"></i>
                    &nbsp; ubsidevs@gmail.com
                  </a></li>
                  <li><a href="javascript:void(0)" class="text-light mb-2">
                      <i class="bi bi-telephone"></i>
                      &nbsp; 088802849244
                    </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="tombol-loncat-keatas btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  <!--====== js ======-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/tiny-slider.js"></script>
  <script type="text/javascript" async="async"
    src="//web.webformscr.com/apps/fc3/build/default-handler.js?1653643444289"></script>

  <script>

    // Tutup Navbar jika diklik
    let navbarTogglerNine = document.querySelector(
      ".navbar-nine .navbar-toggler"
    );
    navbarTogglerNine.addEventListener("click", function () {
      navbarTogglerNine.classList.toggle("active");
    });


  </script>
</body>

</html>