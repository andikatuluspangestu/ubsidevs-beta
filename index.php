<?php 

  // Koneksi ke Database
  require('controller/koneksi.php'); 
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Kuliah Koding</title>
  <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/svg" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/lineicons.css" />
  <link rel="stylesheet" href="assets/css/tiny-slider.css" />
  <link rel="stylesheet" href="assets/css/glightbox.min.css" />
  <link rel="stylesheet" href="assets/style.css" />
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
                  <a class="btn btn-primary text-light" target="_blank" href="./admin/login.php">Masuk</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Bagian Navbar -->

  <!-- Bagian Hero -->
  <section id="hero-area" class="header-area header-eight">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-content">
            <h1>Ekspresif, Edukatif, <br> dan Partisipatif</h1>
            <p>
              Kami adalah komunitas yang didukung oleh mahasiswa muda profesional dari Universitas BSI Tegal yang bersatu untuk
              membangun inovasi dan kreativitas dengan menggunakan teknologi sistem informasi.
            </p>
            <div class="button">
              <a href="#about" class="btn primary-btn">Yuk Cari Tahu</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-image">
            <img src="../assets/images/header/heroku.png" alt="#" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Hero -->

  <!-- Awal tentang kita tertulis -->
  <section  class="about-area tentang-kita">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-12">
          <div class="gambar-pattern">
            <svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <circle cx="1.66654" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="132" r="1.66667" fill="#DADADA" />
            </svg>
            <img src="https://ubsidevs.github.io/images/hero.png" alt="about" />
          </div>
        </div>
        <div class="col-lg-6 col-12" id="about">
          <div class="tentang-kita-content">
            <h6 class="small-title text-lg">Lebih dekat mengenal komunitas kami</h6>
            <h2 class="main-title fw-bold">Kami ada dengan dan untuk pendidikan yang lebih maju</h2>
            <div class="tentang-kita-tab">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab" data-bs-target="#nav-who"
                    type="button" role="tab" aria-controls="nav-who" aria-selected="true">Tentang Kami</button>
                  <button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision"
                    type="button" role="tab" aria-controls="nav-vision" aria-selected="false">Visi</button>
                  <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#nav-history"
                    type="button" role="tab" aria-controls="nav-history" aria-selected="false">Misi</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab">
                  <p>Kelompok belajar yang berasal dari kalangan
                  mahasiswa/i di kampus Universitas BSI Tegal terutama Program Studi Sistem Informasi. Berkomitmen saling sharing untuk kelancaran perkuliahan.</p>
                </div>
                <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                  <p>
                    Menjadikan komunitas yang bisa menuntun mahasiswa/i pendatang baru di dunia IT untuk belajar bersama,membantu dalam
                    penugasan, serta menjadikan mandiri, dan mampu berpikir kritis dalam penuntasan tugas akhir kuliah.
                  </p>
                </div>
                <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                  <p>
                    Misi kami adalah memberikan ruang diskusi, memberikan kesempatan kepada semua mahasiswa untuk menunjukan ide dan
                    kreativitas mereka dengan cara berkontribusi dalam membuat acara maupun berbagi pengetahuan yang dimiliki.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Tentang Kita :( -->

  <!-- Kami bisa apa? ygy -->
  <section id="layanan" class="layanan-area layanan">
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h2 class="fw-bold">Apa Yang Kita Lakukan?</h2>
              <p>
                Kami di sini untuk membantu teman mahasiswa <br> agar bisa tumbuh bersama
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="kartu-layanan">
            <div class="ikon-layanan">
              <i class="lni lni-book"></i>
            </div>
            <div class="konten-layanan">
              <h4>Edukasi</h4>
              <p>
                Belajar bersama dan Mempraktikkan keterampilan baru.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="kartu-layanan">
            <div class="ikon-layanan">
              <i class="lni lni-star-empty"></i>
            </div>
            <div class="service-content">
              <h4>Karir</h4>
              <p>
                Berbagi informasi bootcamp untuk meningkatkan diri.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="kartu-layanan">
            <div class="ikon-layanan">
              <i class="lni lni-calendar"></i>
            </div>
            <div class="service-content">
              <h4>Events</h4>
              <p>
                Perluas koneksi dengan mengikuti berbagai Events Terkini
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir apa yang kita lakukan -->

  <!-- Ajak gabung -->
  <section id="ajak-gabung" class="ajak-gabung">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
          <div class="inner-content">
            <h2>Sarana untuk <br /> mahasiswa berkembang</h2>
            <p>
              Mewujudkan UBSI Tegal Devs sebagai tempat yang tepat, aman dan nyaman untuk berkomunikasi, menampung seluruh aspirasi dan
              mengembangkan diri bersama bagi seluruh mahasiswa/i Sistem Informasi Universitas Bina Sarana Informatika Tegal
            </p>
            <div class="light-rounded-buttons">
              <a href="javascript:void(0)" class="btn primary-btn-outline">Gabung Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir dari ngajak gabung -->

  <!-- Kabar-kabar -->
  <div id="blog" class="latest-news-area section">
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h2 class="fw-bold">Berita & Kegiatan</h2>
              <p>
                Yuk ketahui berbagai berita terkini tentang <br> kegiatan dan program
                dari komunitas kecintaan kita.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
		  <?php
  				$sql = "select * from t_artikel order by id asc";
  				$res = mysqli_query($con, $sql);
  					while ($data = mysqli_fetch_array($res)) {
  						
  		?>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-news card p-3 border-0 shadow-sm">
            <div class="image">
              	<a href="javascript:void(0)">
				  <img class="img-fluid thumb" src="img/<?php echo $data['gambar'];?>" alt="Blog" style="width: 100%; height: 200px;" />
				</a>
            </div>
            <div class="content-body">
              <h4 class="title">
                <a href="javascript:void(0)"> <?php echo $data["judul"]; ?> </a>
              </h4>
              <p>
                <?= htmlspecialchars_decode(substr($data["isi"],0,309)); ?>
              </p>
              <br>
              <a href="detail.php?id=<?= $data['id']; ?>">
                <button class="btn btn-sm btn-primary text-light"> Baca Selengkapnya </button>
              </a>
            </div>
          </div>
        </div>
		<?php
					}
				?>
      </div>
    </div>
  </div>
  <!-- Akhir Berkabar -->

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