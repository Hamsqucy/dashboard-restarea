<!-- Script Check Login -->
<?php 
    include '../conn.php';
    
    session_start();
    
    // Mendeklarasikan Variable Data
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Query Select Data Login
    $sql = mysqli_query($conn, "SELECT * FROM tb_account WHERE username='$username' AND password='$password'");

    // Menghitung Jumlah Data Login
    $check = mysqli_num_rows($sql);
    
    // Memeriksa Username dan Password
    if($check > 0){
    
        $data = mysqli_fetch_assoc($sql);
    
        // Jika Level Admin
        if ($data['level']=="Admin"){
    
            // Menjalankan Session Admin
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Admin";

            // Pindah Ke Page Dashboard Admin
            echo "<script>alert('Anda berhasil Login Sebagai Admin.')</script>";
            echo "<script>window.location.href = \"../../role-admin/dashboard.php\"</script>";
    
        // Jika Level User
        } elseif ($data['level']=="User"){

             // Menjalankan Session User
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "User";

            // Pindah Ke Page Dashboard User
            echo "<script>alert('Anda berhasil Login Sebagai User.')</script>";
            echo "<script>window.location.href = \"../../role-user/dashboard.php\"</script>";
        } 
    }
?>
<!-- End Script Login -->

<!-- Script Login Gagal -->
<?php 
    echo "<script>alert('Username dan Password Tidak Terdaftar, Silahkan Periksa Kembali.')</script>";
    echo "<script>window.location.href = \"../../index.php\"</script>";
?>
<!-- End Script Login Gagal -->