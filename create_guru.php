<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    E-Raport
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          E-Rapor
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./raport.php">
              <i class="nc-icon nc-bank"></i>
              <p>raport</p>
            </a>
          </li>
          <li>
            <a href="./datasiswa.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Data Siswa</p>
            </a>
          </li>
          <li class="active ">
            <a href="./dataguru.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Data Guru</p>
            </a>
          </li>
          <li>
            <a href="./mata_pelajaran.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Mata Pelajaran</p>
            </a>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Menambah Data Guru</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header"></div>
              <div class="card-body">

              <section class="page-section mt-5">
    <div class="container">
      <center>
        <h3>Silahkan Masukkan Data</h3>
        <form action="create_guru.php" method="post" name="form1">
          <table width="50%" border="0">
            <tr>
              <td>ID Guru</td>
              <td><input type="number" name="id_guru"></td>
            </tr>
            <tr>
              <td>Nama Guru</td>
              <td><input type="text" name="nama_guru"></td>
            </tr>
            <tr>
              <td>No Telepon</td>
              <td><input type="text" name="no_telp"></td>
            </tr>
            <tr>
              <td>Status Wali</td>
              <td><input type="text" name="status_wali"></td>
            </tr>
            <tr>
              <td>Kode Mapel</td>
              <td><input type="number" name="kode_mapel"></td>
            </tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" name="Submit" value="Tambah Data"></td>
            </tr>
          </table>
        </form>

        <?php

        // Check If form submitted, insert form data into users table.
        if (isset($_POST['Submit'])) {
          $id_guru = $_POST['id_guru'];
          $nama_guru = $_POST['nama_guru'];
          $no_telp = $_POST['no_telp'];
          $status_wali = $_POST['status_wali'];
          $kode_mapel = $_POST['kode_mapel'];



          // include database connection file
          require 'connection.php';

          // Insert user data into table
          $result = mysqli_query($conn, "INSERT INTO guru(id_guru, nama_guru, no_telp, status_wali, kode_mapel) VALUES('$id_guru', '$nama_guru', '$no_telp', '$status_wali', '$kode_mapel') ");

          // Show message when user added
          echo "Data berhasil ditambahkan  <a class='btn btn-primary' href='dataguru.php'>Lihat Data</a>";
        }
        ?>
        <br>
        <a href="dataguru.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

      </center>

    </div>
  </section>

              </div>
            </div>
          </div>
          
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
</body>

</html>