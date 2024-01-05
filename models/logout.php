<!-- Script Logout -->
<?php 
    session_start();
    
    // Menghapus Semua Session
    session_destroy();
    
    // Pindah Halaman Utama Setelah Semua Dihapus
    echo "<script>window.location.href = \"../index.php\"</script>";
?>
<!-- End Script Logout -->