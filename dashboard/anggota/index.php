<!-- Logic PHP -->
<?php

  // Koneksi ke Database
  require '../controller/koneksi.php';

  // Inisialisasi session
  session_start();

 // Mengecek username pada session
  if( !isset($_SESSION['username']) AND !isset($_SESSION['level']) ){
    $_SESSION['msg'] = 'Anda harus login untuk mengakses halaman ini';
    header('Location: ../login.php');
  } else {
    if(isset($_GET['delete'])) {
      $id = $_GET['delete'];
      $query = mysqli_query($con, "DELETE FROM t_artikel WHERE id='$id'");
      header("Location: ../anggota/index.php");
    }
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
                
                    <li class="sidebar-item active">
                        <a href="index.php" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="/wp-project" target="_blank" class='sidebar-link'>
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
                
                    <li class="sidebar-title">Anggota & Admin</li>
                
                    <li class="sidebar-item">
                        <a href="list_anggota.php" class='sidebar-link'>
                            <i class="bi bi-person-lines-fill"></i>
                            <span>List Anggota</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="laporan.php" class='sidebar-link'>
                            <i class="bi bi-envelope-exclamation-fill"></i>
                            <span>Laporan</span>
                        </a>
                    </li>

                     <li class="sidebar-item">
                        <a href="laporan.php" class='sidebar-link'>
                            <i class="bi bi-envelope-paper"></i>
                            <span>Daftar Laporan</span>
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
                <h3><script type="text/javascript">
                    //<![CDATA[
                    var h=(new Date()).getHours();
                    var m=(new Date()).getMinutes();
                    var s=(new Date()).getSeconds();
                    if (h >= 4 && h < 10) document.writeln("Selamat pagi,");
                    if (h >= 10 && h < 15) document.writeln("Selamat siang,");
                    if (h >= 15 && h < 18) document.writeln("Selamat sore,");
                    if (h >= 18 || h < 4) document.writeln("Selamat malam,");
                    //]]>
                    </script> <?= $_SESSION['username']; ?>
                </h3>
            </div>
            <div class="page-content">
                <!-- PHP Logic -->
                <?php 

                    // Hitung Artikel
                    $data_artikel = mysqli_query($con,"SELECT * FROM t_artikel"); 
                    $jumlah_artikel = mysqli_num_rows($data_artikel); 
                    
                    // Hitung Anggota
                    $data_anggota = mysqli_query($con,"SELECT * FROM users"); 
                    $jumlah_anggota = mysqli_num_rows($data_anggota);
                    
                ?>
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Article</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $jumlah_artikel; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Anggota</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $jumlah_anggota; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Visitor</h6>
                                                <h6 class="font-extrabold mb-0">NaN</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Admin</h6>
                                                <h6 class="font-extrabold mb-0">2</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Daftar Artikel</h4>
                                    </div>
                                    <div class="card-content">
                                        <!-- Table with no outer spacing -->
                                        <div class="table-responsive">
                                            <table class="table mb-2 table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Judul Artikel</th>
                                                       
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        // Jalankan Query untuk menampilkan semua data diurutkan berdasarkan ID
                                                        $author = $_SESSION['username'];
                                                        $sql = "SELECT * FROM t_artikel WHERE author = '$author' order by id asc";
                                                        $res = mysqli_query($con, $sql);
                                        
                                                        // Buat perulangan untuk element tabel dari DATA LAPORAN
                                                        $no = 1; //variabel untuk membuat nomor urut
                                                
                                                        // Hasil query akan disimpan dalam variabel $data dalam bentuk array
                                                        // Kemudian dicetak dengan perulangan while
                                        
                                                        while ($data = mysqli_fetch_array($res)) {
                                                        ?>
                                                    <tr>
                                                        <td class="text-bold-500"><?php echo $no; ?></td>
                                                        <td><?php echo $data['judul']; ?></td>
                                                       
                        
                                                        <td>
                                                            <a class="btn btn-sm btn-danger" href="../anggota/index.php?delete=<?php echo $data['id']; ?>">
                                                                <i class="bi bi-trash"></i>
                                                            </a>
                                                            <a class="btn btn-sm btn-primary" href="edit_artikel.php?id=<?php echo $data['id']; ?>">
                                                               <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                            <a class="btn btn-sm btn-secondary tex-light" href="/wp-project/detail.php?id=<?= $data['id']; ?>">
                                                               <i class="bi bi-globe2"></i>
                                                            </a> 
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    // Agar Nomor Pengaduan terus bertambah 1
                                                        $no++; 
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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