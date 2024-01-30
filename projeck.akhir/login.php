<?php
session_start();
require("start.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <header>
        <div class="img-logo">
            <img src="img/logo.png">
        </div>
        <div class="text">
            <H3>INVENTARIS KANTOR POLISI</H3>
        </div>
    </header>
    <form class="isi-login" method="post">
        <div class="isi">
            <div class="isi-login-img">
                <div class="desain">
                <img src="img/org.png" >
                </div>
            </div>
            <div class="isi-data">
                <h2>LOGIN</h2>
                <div class="isi-data-masukan">
                    <div class="kelompok">
                    <span>USERNAME</span>
                    <input type="text" name="username" autocomplete="off" required="">
                    </div>
                    <div class="kelompok">
                    <span>PASSWORD</span>
                    <input type="password" name="password" autocomplete="off" required="">
                    </div><br><br>
                <button class="btn-lg" name="kirim">
                    <h3>LOGIN</h3>
            </button>
                    <?php
                if (isset($_POST['kirim'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM login WHERE username ='$username'");
    $countdata = mysqli_num_rows($query);
    $data = mysqli_fetch_array($query);
    if ($countdata > 0) {
        if (password_verify($password, $data['password'])) {
            $_SESSION['username'] = $data['username'];
            $_SESSION['login'] = true;
            header('location: home.php');
        } else {
            ?>
            <div class="danger">Password Salah!</div>
            <?php
        }
    } else {
        ?>
        <div class="danger">Data yang kamu masukan Salah!</div>
        <?php
    }
} // Close the if (isset($_POST['kirim'])) block
?>
</div>
</div>

                </div>
            </div>
        </div>
    </form>
</body>
</html>