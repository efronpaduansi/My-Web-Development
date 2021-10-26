<?php 

	session_start();

	if( !isset($_SESSION["username"])){

	     header("location:index.php");
	}



	//Include file koneksi
	include 'koneksi.php';

	//Mengambil nilai dari tiap form

	$nim = $_POST["nim"];
	$nama = $_POST["nama"];
	$kelas = $_POST["kelas"];
	$kehadiran = $_POST["kehadiran"];
	$tugas = $_POST["tugas"];
	$uts = $_POST["uts"];
	$uas = $_POST["uas"];

	// Query input data ke dalam database
	$sql = "INSERT INTO tbMahasiswa (nim, nama, kelas, kehadiran, tugas, uts, uas) 
			VALUES ('$nim','$nama','$kelas', '$kehadiran', '$tugas', '$uts', $uas)";

	// Jalankan query
	$hasil = mysqli_query($conn, $sql);

	// Cek keberhasilan input data
	if($hasil) {

		echo "
                <script>
                    alert ('Data berhasil ditambahkan!')
                    document.location.href = 'datamhs.php';
                </script>
        ";
	} else {

		echo "
                <script>
                    alert ('Data gagal ditambahkan!')
                    document.location.href = 'datamhs.php';
                </script>
        ";
	}


?>