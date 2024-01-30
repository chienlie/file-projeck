<?php
require("session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<style>
    .konten{
        background-color: #394867;
        height: 100%;
        width: 100%;
        margin-left: 300px;
    }
    .text{
        font-size: 20px;
        font-family: 'poppins';
        margin-left: 500px;
    }
    .isi-halaman{
        background: url(img/background.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        margin-top: 50px;
        margin-left: 20px;
        width: 1140px;
        height: 600px;
        border-radius: 30px;
    }
.isi-block{
    display: flex;
    margin-left: 60px;
}
    .block1{
        color:black;
        width: 250px;
        height: 350px;
        background-color: white;
        border-radius: 10px;
        margin-top: 7rem;
        margin-left: 10rem;
        cursor: pointer;
    }
    .block1 h1{
        margin-top: 150px;
        margin-left: 50px;
        font-size: 25px;
    }
    .h1{
        font-size: 25px;
        margin-left: 90px;
    }
    .block2{
        color:black;
        width: 250px;
        height: 350px;
        background-color: white;
        border-radius: 10px;
        margin-top: 7rem;
        margin-left: 10rem;
        cursor: pointer;
    }
    .block2 h1{
        margin-top: 150px;
        margin-left: 90px;
        font-size: 25px;
    }
    .block2 .h1{
        font-size: 25px;
        margin-left: 50px;
    }
    .isi-halaman img{
        width: 355px;
        height: 507px;
        margin-left:850px ;
        margin-top: 300px;
        position: absolute;
    }
</style>
<body>
    <div class="layout">
        <div class="sidebar">
            <div class="isi">
                <div class="text-theme">
                    <img src="img/logo.png">
                    <h2>KANTOR POLISI</h2>
                </div>
                <hr>
                <div class="menu">
                    <a href="" style="opacity: 1;">Home</a>
                    <a href="about.html">About</a>
                    <a href="properti.html">Properti</a>
                    <a href="setting.html">Settings</a>
                </div>
            </div>
            <div class="logout">
                <img src="img/icon-exit.png">
                <a href="logout.php"><-- logout</a>

            </div>
        </div>
        <div class="konten">
            <div class="text">
                <h1>PILIHAN</h1>
            </div>
                <div class="isi-halaman">
                    <div class="isi-block">
                    <div class="block1" >
                        <a href="menambahdata.php">
                        <h1>MENAMBAH</h1>
                        <h2 class="h1">DATA</h2>
                        </a>
                    </div>
                    <div class="block2" >
                        <a href="datainformasi.php">
                        <h1>DATA</h1>
                        <h2 class="h1">INFORMASI</h2>
                        </a>
                    </div>
                    </div>
                    <img src="img/polic2.png">
                </div>
        </div>
    </div>
</body>
</html>