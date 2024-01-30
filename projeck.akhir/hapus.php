<?php
include_once("start.php");
$id = $_GET['id'];
    $delete_query = mysqli_query($koneksi, "DELETE FROM data_brg WHERE code_brg = '$id'");
    
    if($delete_query) {
        header("Location: datainformasi.php");
        exit;
    } else {
        echo "Gagal menghapus data.";
    }
?>