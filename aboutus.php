<?php
  session_start(); 
  if(!isset($_SESSION["login"])){
    header("Location:loginpelanggan.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>GoFashion</title>
</head>
<style>
    body{
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url(bgabout2.jpg);
    }
    .footer {
        position: absolute;
        bottom: -60%;
        width: 100%;
        background-color: red;
        color: white;
        text-align: center;
    }
    .upper{
        position:absolute;
        z-index: -1;
    }
    .judul{
        color:white;
        font-family: 'Times New Roman', Times, serif;
    }
    .logo{
        position:absolute;
        left:23%;
        top: 10%;
    }
    .perkenalan{
        border-radius:15px;
        background-color: rgba(255,255,255,0.5);
        position:absolute;
        left:11.5%;
        top: 80%;
    }
    .fontjudul{
        font-family: 'Times New Roman', Times, serif;
        font-size: large;
    }
    .intro{
        text-align: justify;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                GoFashion
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    <a class="nav-link " href="produk.php">Products</a>
                    <a class="nav-link" href="detailtransaksi.php">Riwayat Transaksi</a>
                    <a class="nav-link" href="metodebayar.php">Cara Pembayaran</a>
                    <a class="nav-link active" href="aboutus.php">About Us</a>
                </div>
            </div>
            <a class="btn btn-danger" href="logout.php">Logout</a>
        </div>
    </nav>
    <img class="upper" src="bgabout.png">
    <div class="judul">
        <hr>
        <center><h1 class="fontjudul">About Us</h1></center>
        <hr>
    </div>
    <br>
    <img class ="logo" src="bg1.png" height="700px" width="700px">
    <div>    <br>    <br></div>
    <div class="perkenalan">
        <div class="container-fluid">
        <hr>
            <center><h3>Indroducing</h3></center>
            <hr>
            <center><p class="intro">Mode atau fesyen (bahasa Inggris: fashion) merupakan sebuah ekspresi estetika yang populer pada waktu, masa, tempat tertentu dan dalam konteks tertentu, terutama pada pakaian, alas kaki, gaya hidup, aksesori, riasan wajah, gaya rambut, dan proporsi tubuh. <br> Sementara tren sendiri sering berkonotasi sebagai sebuah ekspresi estetika yang aneh dan sering berlangsung lebih pendek dari musim, mode juga merupakan sebuah ekspresi khas dan didukung oleh industri yang secara tradisional terkait dengan musim mode dan koleksi.</p></center>
        </div>
    </div>
    <div class="footer">
        <footer class="bg-dark text-center text-lg-start">
        <div class="container p-1">
            <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Pemrograman Web IF-F</h5>
                <p>
                Website ini dibuat dengan HTML,CSS, JavaScript, dan PHP dengan bantuan Bootstrap, Google, dan Lain-lain.
                </p>
            </div>
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Dibuat Oleh</h5>
                <p>
                        <li>Christian</li>
                        <li>Visen</li>
                </p>
            </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-light" href="aboutus.php">Pemrograman-Web IF-F</a>
        </div>
        </footer>
    </div>
</body>
</html>