<?php
$con = mysqli_connect("localhost","root","","data_login");
if (!$con) {
    die("Gagal". mysqli_connect_error());
}

$koneksi = mysqli_connect("localhost","root","","kantorpolisi");
?>