<?php
$id = $_GET['id'];
session_start();

include_once('start.php');


if (isset($_POST['update'])) {
$tgl = $_POST['tgl']; 
$nama = $_POST['nama'];
$jns = $_POST['jns'];
$jumlah = $_POST['jumlah'];
$harga  = $_POST['harga'];
$keadaan = $_POST['keadaan'];
$ket   = $data['ket'];
$result = mysqli_query($koneksi, "UPDATE data_brg SET tnggl_bln_thn='$tgl', nama_brg='$nama', jns_brg='$jns', jumlah_brg='$jumlah' ,harga_brg='$harga' , keadaan_brg='$keadaan',keterangan ='$ket', WHERE code_brg='$id'");


    header("location: inventaris.php");
}
?>

<?php

$result = mysqli_query($koneksi, "SELECT * FROM data_brg WHERE code_brg = $id");

            while ($data = mysqli_fetch_array($result)) {
            $tgl = $data['tnggl_bln_thn'];
            $nama = $data['nama_brg'];
            $jns = $data['jns_brg'];
            $jumlah = $data['jumlah_brg'];
            $harga  = $data['harga_brg'];
            $keadaan = $data['keadaan_brg'];
            $ket   = $data['keterangan'];
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
    <form>
        <div class="block">
            <div class="isi">
                <span><b>Tanggal pengiriman barang :</b></span>
                <input type="number" class="infut" name="tgl" value="<?php echo $tgl; ?>">
                <br>
                <span><b>Nama barang :</b></span>
                <input type="text" class="infut" name="nama" value="<?php echo $nama; ?>">
                <br>
                <span><b>Jenis barang :</b></span>
                <select placeholder="PILIH" class="pilih" name="jns" value="<?php echo $jns; ?>"> 
                    <option></option>
                    <option>BESAR</option>
                    <option>SEDANG</option>
                    <option>KECIL</option>
                </select>   
                <br>
                <span><b>Jumlah barang :</b></span>
                <input type="number" class="infut" name="jumlah" value="<?php echo $jumlah; ?>">
                <br>
                <span><b>Harga barang :</b></span>
                <input type="number" class="infut" name="harga" value="<?php echo $harga; ?>">
                <br>
                <span><b>Keadaan barang :</b></span>
                <input type="text" class="infut" name="keadaan" value="<?php echo $keadaan; ?>">
                <br>
                <div class="keterangan-kirim">
                <span><b>Keterangan:</b></span>
                <textarea name="ket" value=""><?php echo $ket; ?></textarea>
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