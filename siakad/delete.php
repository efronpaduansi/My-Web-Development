<?php 

	// Include koneksi
	include 'koneksi.php';

	// Tangkap id yang di kirimkan
	$id = $_GET['id'];

	$query = "DELETE FROM tbMahasiswa WHERE id='$id'";

	// Jalankan query
	$hapus = mysqli_query($conn, $query);

	if($hapus){
		echo "
                <script>
                    alert ('Data berhasil dihapus!')
                    document.location.href = 'datamhs.php';
                </script>
        ";
	}else{
		echo "
                <script>
                    alert ('Data gagal di hapus!')
                    document.location.href = 'datamhs.php';
                </script>
        ";
	}






?>