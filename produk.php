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
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="gofashion.css">

    <title>GoFashion</title>
</head>
<style>
    body{
        background-color: #EEEEEE;
    }
    .footer {
        position: absolute;
        bottom: -100%;
        width: 100%;
        background-color: red;
        color: white;
        text-align: center;
    }

    .upper {
        position: absolute;
        z-index: -1;
    }

    .judul {
        color: white;
        font-family: 'Times New Roman', Times, serif;
    }

    .logo {
        position: absolute;
        left: 23%;
        top: 10%;
    }

    .perkenalan {
        border-radius: 15px;
        background-color: rgba(255, 255, 255, 0.5);
        position: absolute;
        left: 11.5%;
        top: 80%;
    }

    .fontjudul {
        font-family: 'Times New Roman', Times, serif;
        font-size: large;
    }

    .row{
        margin-left: 25px;
    }
    .produk{
        text-align: center;
        font-family: 'Josefin Sans', sans-serif;
        font-size: 35px;
        padding-top: 10px;
    }
    .harga{
        color: #C85C5C;
    }
    .beli{
        padding: 5px 15px 5px 15px;
        border-radius: 5px;
        float: right;
        background-color: #2940D3;
        text-decoration: none;
        color: white;
    }
    .beli:hover{
        color: white;
        text-decoration: none;
        background-color: #39A9CB;
    }
    .nama{
        font-family: 'Quicksand', sans-serif;
    }
    .harga{
        text-align: right;
    }
    .card{
        margin-top: 5px;
    }
    .card:hover{
        box-shadow: 5px 5px 3px rgb(133, 133, 133);
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
                    <a class="nav-link active" href="produk.php">Products</a>
                    <a class="nav-link" href="detailtransaksi.php">Riwayat Transaksi</a>
                    <a class="nav-link" href="metodebayar.php">Cara Pembayaran</a>
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </div>
            </div>
            <a class="btn btn-danger" href="logout.php">Logout</a>
        </div>
    </nav>

    <div class="section">
        <div class="container">
            <div class="produk"> Produk </div>
            <hr>
            <div class="row">
                <?php
                    // $conn = new mysqli('localhost', 'root', '', 'gofashion');
                    // $produk = mysqli_query($conn, "SELECT * FROM pakaian ORDER BY jenis");
                    require 'functions.php';
                    $DataInOnePage=6;
                    $totaldata=count(query("SELECT * FROM pakaian"));
                    $totalhal = ceil($totaldata/$DataInOnePage);
                    $aktif=(isset($_GET["halaman"])) ? $_GET["halaman"] :1;
                    $awal =($DataInOnePage *$aktif)-$DataInOnePage;
                    $tabel=query("SELECT * FROM pakaian LIMIT $awal,$DataInOnePage");
                ?>
                <?php foreach($tabel as $row):?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $row['produk'] ?>" class="gmbr card-img-top" alt="..." width="150px" height="200px">
                        <div class="card-body">
                            <h5 class="nama card-title"><?php echo $row['nama'] ?></h5>
                            <p class="card-text">Bahan : <?php echo $row['bahan'] ?></p>
                            <p class="harga card-text fw-bold">Rp. <?php echo $row['harga'] ?></p>
                            <a href="pembelian.php?kode_pakaian=<?= $row['kode_pakaian'] ?>" class="beli"><i class="bi bi-cart4"></i> Beli</a>
                        </div>
                    </div>
                    <br>
                </div>
                <?php endforeach; ?>
            </div>
            <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="?halaman=<?php if($aktif==1){echo $aktif;} else{echo $aktif-1;}?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for($i=1;$i<=$totalhal;$i++) : ?>
      <li class="page-item"><a class="page-link" href="?halaman=<?php echo $i;?>"><?php echo $i;?></a></li>
            <?php endfor; ?>
    <li class="page-item">
      <a class="page-link" href="?halaman=<?php if($aktif==$totalhal){echo $aktif;} else{echo $aktif+1;}?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav> 
        </div>
            
                       
        <div class="footer">
            <footer class="bg-dark text-center text-lg-start">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Pemrograman Web IF-F</h5>
                            <p>
                                Website ini dibuat dengan HTML,CSS, JavaScript, dan PHP dengan bantuan Bootstrap,
                                Google, dan Lain-lain.
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