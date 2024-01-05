<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/img/logo-jmrb.png">
    <title>Data Account</title>
    <style>
        body{
            font-family: sans-serif;
            }

            table{
            margin: 20px auto;
            border-collapse: collapse;

            }
            table th,
            table td{
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

            } 

            h3{
                text-align: center;
            }

            p {
                text-align: right;
                margin-right: 15%;
                margin-top: 5%;
            }

            img {
                margin-left: 10%;
                margin-bottom: -8%;
            }
    </style>
</head>
<body>
        <!-- Header Data Table -->
        <div class="container">
            <img src="../../assets/img/logo-perusahaan.png" alt="logo" width="20%">
                <p>
                    <?php 
                        echo date('l, d / m / Y');
                    ?>
                </p>
          <h3 class="mt-3 text-body-secondary">Data Account</h3>
        </div>
        <!-- End Header Data Table -->

        <!-- Data Table -->
        <div class="container">
              <table>
                <thead>
                    <tr>
                        <th>ID Account</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Divisi</th>
                    </tr>
                </thead>
                <?php 
                include "../conn.php";

                  $sql = "SELECT * FROM tb_account";

                  $query = mysqli_query($conn, $sql);
                  
                  while ($data = mysqli_fetch_array($query)) {
                ?>
                <tbody>
                    <tr>
                      <td><?php echo $data['id_acc']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['password']; ?></td>
                      <td><?php echo $data['level']; ?></td>
                      <td><?php echo $data['divisi']; ?></td>
                    </tr>
                </tbody>
                <?php } ?>
              </table>
        </div>
        <!-- End Data Table -->

        <div class="container">
            <p>
            <b>PT Jasamarga Related Business</b><br>
            Gedung Jagorawi Lantai 2<br>
            Plaza Tol Taman Mini Indonesia Indah<br>
            Jakarta 13550<br>
            Telp. 021 22093560
            </p>
        </div>

    <script>
        window.print();
    </script>

</body>
</html>