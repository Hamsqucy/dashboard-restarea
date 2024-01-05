<!-- Script Add Data Comment -->
<?php
    include "../conn.php";

    if(isset($_POST['submit'])) {

    $nama = ($_POST['nama']);
    $comment = ($_POST['comment']);
   
    // Query Insert Data
    $sql = "INSERT INTO tb_comment (nama, comment)
    VALUES ('$nama', '$comment')";

    $query = mysqli_query($conn, $sql);
    
    // Pindah Ke Page Utama Setelah Di Submit
    echo "<script>alert('Komentar Kamu Berhasil Dikirim, Terima Kasih.')</script>";
    echo "<script>window.location.href = \"../../index.php\"</script>";

    } else {

    echo "<script>alert('Komentar Gagal Dikirim, Silahkan Coba Kembali.')</script>";
    echo "<script>window.location.href = \"../../index.php\"</script>";
    }
?>
<!-- End Script Add Data Comment -->