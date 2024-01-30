<?php
include_once("start.php");

$query = mysqli_query($koneksi, "SELECT * FROM data_brg ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data informasi</title>
    <link rel="stylesheet" href="css/informasi.css">
</head>
<body>
    <header>
            <div class="link-header">
                <a href="home.php">Kembali ke halaman sebelumnya</a>
            </div>
            <div class="isi-header">
                <img src="img/logo.png">
                <h2>DATA INFORMASI</h2>
            </div>
    </header>
        <div class="block">
            <table border="1" style="border-collapse: collapse" width="95%">
                <tr>
                    <th>Tanggal</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Keadaan</th>
                    <th>Keterangan</th>
                </tr>
            <?php
                while($data = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$data['tnggl_bln_thn']."</td>";
                    echo "<td>".$data['code_brg']."</td>";
                    echo "<td>".$data['nama_brg']."</td>";
                    echo "<td>".$data['jns_brg']."</td>";
                    echo "<td>".$data['jumlah_brg']."</td>";
                    echo "<td>".$data['harga_brg']."</td>";
                    echo "<td>".$data['keadaan_brg']."</td>";
                    echo "<td>".$data['keterangan']."</td>";
                    echo "<td><a href='hapus.php?id=$data[code_brg]'>Hapus</a></td>";
                    echo "<td><a href='edit.php?id=$data[code_brg]'>Edit</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
</body>
</html>