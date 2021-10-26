<?php 

    // Membuat session
    session_start();

    //Cek apakah user sudah login
    if( isset($_SESSION['username'])){

        header("location:dashboard-mhs.php");
    }

    include 'koneksi.php';

    $username = $_POST['username'];
    $pass = $_POST['password'];

    $login = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$pass'");
    $check = mysqli_num_rows($login);

    //Membuat hak akses login

    // Cek apakah users ada di dalam database
    if($check > 0){

        $data = mysqli_fetch_assoc($login);

        // Cek ketika user login sebagai dosen
        if($data['level'] == "dosen"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "dosen";

            // Alihkan ke halaman dosen
            header("location:dashboard-dosen.php");

        } 
        // Cek ketika user login sebagai mahasiswa
        else if($data['level'] == "mahasiswa"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "mahasiswa";

            // Alihkan ke halaman dosen
            header("location:dashboard-mhs.php");

        } else{

            echo "
                <script>
                    alert ('Gagal login!')
                    document.location.href = 'login.php';
                </script>
        ";
        }



    } else{
        echo "
                <script>
                    alert ('Gagal login!')
                    document.location.href = 'login.php';
                </script>
        ";
    }


?>