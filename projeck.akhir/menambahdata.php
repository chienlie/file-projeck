<?php
session_start();

include_once('start.php');


if (isset($_POST['update'])) {
$tgl = $_POST['tgl']; 
$nama = $_POST['nama'];
$jns = $_POST['jns'];
$jumlah = $_POST['jumlah'];
$harga  = $_POST['harga'];
$keadaan = $_POST['keadaan'];
$ket = $_POST['ket'];
$result = mysqli_query($koneksi, "INSERT INTO data_brg (tnggl_bln_thn, nama_brg, jns_brg, jumlah_brg ,harga_brg , keadaan_brg,keterangan) VALUES('$tgl','$nama','$jns','$jumlah','$harga','$keadaan','$ket')");


    header("location: datainformasi.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/menambah.css">
</head>
<body>
    <header>
        <div class="header-isi">
            <div class="link-header">
                <a href="home.php">kembali ke halaman sebelumnya</a>
            </div>
        <div class="data-header">
            <img src="img/logo.png">
            <h2>MENAMBAH DATA</h2>
        </div>
        </div>
    </header>
    <form method="post">
        <div class="block">
            <div class="isi">
                <span><b>Tanggal pengiriman barang :</b></span>
                <input type="number" class="infut" name="tgl">
                <br>
                <span><b>Nama barang :</b></span>
                <input type="text" class="infut" name="nama">
                <br>
                <span><b>Jenis barang :</b></span>
                <select placeholder="PILIH" class="pilih" name="jns"> 
                    <option></option>
                    <option>BESAR</option>
                    <option>SEDANG</option>
                    <option>KECIL</option>
                </select>   
                <br>
                <span><b>Jumlah barang :</b></span>
                <input type="number" class="infut" name="jumlah">
                <br>
                <span><b>Harga barang :</b></span>
                <input type="number" class="infut" name="harga" >
                <br>
                <span><b>Keadaan barang :</b></span>
                <input type="text" class="infut" name="keadaan">
                <br>
                <div class="keterangan-kirim">
                <span><b>Keterangan:</b></span>
                <textarea name="ket"></textarea>
                <div class="kir">
                <input type="submit" value="kirim" class="kirim" name="update">
                </div>
                </div>
            </div>
            <div class="img-room">
                <img src="img/org1.png">
            </div>
        </div>
    </form>
</body>
</html>