<?php 

// Koneksi
require '../controller/koneksi.php'; 
    
// Memulai Session
  session_start();

  if(isset($_SESSION['username'])){
      $username = $_SESSION['username'];
  } else{
      header("location: login.php");
  }

  // Mengecek apakah di url ada nilai GET ID
  if (isset($_GET['id'])) {

    // Ambil nilai ID dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // Menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM t_artikel WHERE id='$id'";
    $result = mysqli_query($con, $query);

    // Mengambil data dari database
    $data = mysqli_fetch_assoc($result);
  }
    
?>

<?php include('../views/header.php'); ?>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">

                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>
                
                    <li class="sidebar-item">
                        <a href="index.php" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="../index.php" target="_blank" class='sidebar-link'>
                            <i class="bi bi-globe"></i>
                            <span>Lihat Website</span>
                        </a>
                    </li>
                
                    <li class="sidebar-title">Blogs</li>
                
                
                    <li class="sidebar-item  ">
                        <a href="tambah_artikel.php" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Tambah Artikel</span>
                        </a>
                    </li>
                
                    <li class="sidebar-item active">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-pen-fill"></i>
                            <span>Revisi Artikel</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                            <a href="list_artikel.php" class='sidebar-link'>
                                <i class="bi bi-journal-text"></i>
                                <span>List Artikel</span>
                            </a>
                        </li>

                    <li class="sidebar-title">Anggota & Admin</li>
                
                    <li class="sidebar-item">
                        <a href="list_anggota.php" class='sidebar-link'>
                            <i class="bi bi-person-lines-fill"></i>
                            <span>List Anggota</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="list_admin.php" class='sidebar-link'>
                            <i class="bi bi-star-fill"></i>
                            <span>List Admin</span>
                        </a>
                    </li>
                
                    <li class="sidebar-item">
                        <a href="logout.php" class='sidebar-link'>
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Keluar</span>
                        </a>
                    </li>

                </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Ubah Isi Artikel</h3>
                            <p class="text-subtitle text-muted">Silahkan masukan artikel kamu di halaman ini</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Revisi Artikel</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="section">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                <form action="proses_edit.php" method="post" enctype="multipart/form-data">
                                    <!-- Menampung ID Data yang akan diedit -->
                                    <input class="form-control" name="id" value="<?php echo $data['id']; ?>"  hidden />
                                    <!-- Menampung Judul Artikel yang akan diedit -->
                                    <div class="mb-3">
                                      <label for="judulArtikel" class="form-label">Judul Artikel</label>
                                      <input class="form-control" type="text" name="judul" value="<?php echo $data['judul']; ?>" id="judulArtikel" />
                                    </div>
                                    <!-- Menampung Data artikel yang akan diedit -->
                                    
                                    <div class="mb-3">
                                      <label for="formArtikel" class="form-label">Tulis Artikel</label>
                                      <textarea id="editor" name="isi"><?php echo $data['isi']; ?></textarea>
                                    </div>

                                    <!-- Tombol Aksi -->
                                    <button type="submit" name="add_post" class="btn btn-sm btn-success">Submit</button>
                                    <button type="reset" name="reset" class="btn btn-sm btn-danger">Reset</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <?php include('../views/footer.php'); ?>

</body>

</html>