<?php

    //Koneksi ke database
    require 'koneksi.php';

     $mataKuliah = mysqli_query($conn, "SELECT* FROM tbMatkul");

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sistem Informasi Akademik</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>SIAKAD</h3> <br>
            </div>
            <ul class="list-unstyled components"> 
                <li>
                    <a href="dashboard-mhs.php">
                        <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-user-graduate"></i> <span>Mahasiswa</span>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="daftarmatkul.php">
                                <i class="fa fa-list-ul"></i> <span>Daftar Mata Kuliah</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-chart-bar"></i> <span>Rangkuman Nilai</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-university"></i> <span>Keuangan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-file-alt"></i> <span>Documents</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out-alt"></i> <span>Keluar</span>
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="download">Download Kalender</a>
                </li>
                <li>
                    <a href="#" class="article">SPADA Indonesia</a>
                </li>
            </ul>
            <p class="copyright">&copy; 2021 | Efron Paduansi</p>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-chevron-left"></i>
                        <span>Left </span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <h5>Daftar Mata Kuliah</h5>
            </nav>
            <!-- Table mata kuliah -->
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">KODE MATA KULIAH</th>
                  <th scope="col">NAMA MATA KULIAH</th>
                  <th scope="col">KELAS</th>
                  <th scope="col">Sks</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($mataKuliah as $matkul) :?>
                <tr>
                  <th scope="row"><?php echo $matkul['kode']; ?></th>
                  <td><?php echo $matkul['namaMatkul']; ?></td>
                  <td><?php echo $matkul['kelas']; ?></td>
                  <td><?php echo $matkul['sks']; ?></td>
                </tr>
              </tbody>
              <?php endforeach; ?>
            </table>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="row">IPK <span class="ml-auto">3.50</span></th>
                    </tr>
                </thead>
            </table>
        </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>