<?php

	// Koneksi ke database
	$conn = mysqli_connect("localhost", "root", "", "dbWeb");

	//Cek koneksi
	if(mysqli_connect_errno())
	{
		echo "Koneksi database gagal! : " .mysqli_connect_error();
	}
?>