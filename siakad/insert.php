
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

    <!-- Style -->
    <style type="text/css">
        #form-container{
            background-color: whitesmoke;
        }
        form{
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>SIAKAD</h3>
            </div>
            <ul class="list-unstyled components"> 
                <li class="active">
                    <a href="dashboard.php">
                        <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-user"></i> <span>Dosen</span>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="datamhs.php">
                                <i class="fa fa-address-card"></i> <span>Daftar Mahasiswa</span>  
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
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
                    <a href="#">
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
                    <h5>Input Data Mahasiswa</h5>
            </nav>
            <!-- Form input data mahasiswa -->
            <div class="container" id="form-container">
                <div class="col-md-4">
                     <form action="insert-data.php" method="post">
                         <div class="form-group">
                             <label for="nim">NIM</label>
                             <input type="text" name="nim" id="nim" class="form-control" autocomplete="off" autofocus="" required="">
                         </div>
                         <div class="form-group">
                             <label for="nama">NAMA</label>
                             <input type="text" name="nama" id="nama" class="form-control" required="">
                         </div>
                         <div class="form-group">
                             <label for="kelas">KELAS</label>
                             <input type="text" name="kelas" id="kelas" class="form-control" required="">
                         </div>
                          <div class="form-group">
                             <label for="kehadiran">KEHADIRAN</label>
                             <input type="text" name="kehadiran" id="kehadiran" class="form-control" required="">
                         </div>
                         <div class="form-group">
                             <label for="tugas">TUGAS</label>
                             <input type="text" name="tugas" id="tugas" class="form-control" required="">
                         </div>
                         <div class="form-group">
                             <label for="uts">UTS</label>
                             <input type="text" name="uts" id="uts" class="form-control" required="">
                         </div>
                         <div class="form-group">
                             <label for="uas">UAS</label>
                             <input type="text" name="uas" id="uas" class="form-control">
                         </div>
                         <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                         <a href="datamhs.php" class="btn btn-secondary">Cancel</a>
                     </form>   
                </div>
            </div>
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