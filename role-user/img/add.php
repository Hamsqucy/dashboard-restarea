<!-- Script Add Data Report -->
<?php 
    include '../../models/conn.php';

    if(isset($_POST['submit'])) {

        // Mendeklarasikan Variable Data
        $id_acc = $_POST['id_acc'];
        $nama = $_POST['nama'];
        $level = $_POST['level'];
        $aktivitas = $_POST['aktivitas'];
        
        // Mendeklarasikan Variable Upload File
        $rand = rand();
        $extension =  array('png','jpg','jpeg','gif');
        $filename = $_FILES['evidence']['name'];
        $ukuran = $_FILES['evidence']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        
        // Jika File Extension Tidak Sesuai
        if (!in_array($ext, $extension) ) {
            echo "<script>alert('Anda Salah Mengirim Ekstensi File Evidence!')</script>";
            echo "<script>window.location.href = \"../../role-user/report-table.php\"</script>";

        } else {

            // Jika Ukuran File Sesuai
            if($ukuran < 1044070){		
                $result = $rand.'_'.$filename;

                // Path Direktori File Disimpan
                move_uploaded_file($_FILES['evidence']['tmp_name'], '../img/'.$rand.'_'.$filename);
                
                $sql = "INSERT INTO tb_report (id_acc, nama, level, aktivitas, evidence) VALUES ('$id_acc','$nama','$level','$aktivitas','$result')";

                $query = mysqli_query($conn, $sql);

                // Pindah Ke Page Table Setelah Submit
                echo "<script>alert('Data Berhasil Ditambah, Terima Kasih Telah Mengirim Laporan.')</script>";
                echo "<script>window.location.href = \"../../role-user/report-table.php\"</script>";
            } else {
                echo "<script>alert('Data Gagal Ditambah, Silahkan Periksa Kembali.')</script>";
                echo "<script>window.location.href = \"../../role-user/report-table.php\"</script>";
            }
        }
    }
?>
<!-- End Script Add Data Report -->