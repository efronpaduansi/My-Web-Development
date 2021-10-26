<?php


	// include koneksi
	include 'koneksi.php';

	// tangkap data
	$id = $_POST["id"];
	$nim = $_POST["nim"];
	$nama = $_POST["nama"];
	$kelas = $_POST["kelas"];
	$kehadiran = $_POST["kehadiran"];
	$tugas = $_POST["tugas"];
	$uts = $_POST["uts"];
	$uas = $_POST["uas"];

	//update data ke database
	$sql = "UPDATE tbMahasiswa SET 

				nim = '$nim',
				nama = '$nama',
				kelas = '$kelas',
				kehadiran = '$kehadiran',
				tugas = '$tugas',
				uts = '$uts',
				uas = '$uas'

			WHERE id = '$id' ";
	$ubah = mysqli_query($conn, $sql);

	if($ubah){
		echo "
                <script>
                    alert ('Data berhasil diubah!')
                    document.location.href = 'datamhs.php';
                </script>
        ";
	} else{
		echo "
                <script>
                    alert ('Data gagal diubah!')
                    document.location.href = 'datamhs.php';
                </script>
        ";
	}


?>