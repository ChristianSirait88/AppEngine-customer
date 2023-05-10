<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="gofashion.css">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    
    <title>GoFashion</title>
    <style>
      body{
        background-color: #EEEEEE;
      }
      .menuform{
        background-color: white;
        margin: 1% 20% 1% 20%;
        border-radius: 8px;
        box-shadow: 5px 5px 3px rgb(133, 133, 133);
      }
      form{
        margin: 0px 40px 0px 40px;
        font-family: 'PT Sans', sans-serif;
      }
      .fontform{
        padding-top: 3px;
        font-family: 'Shippori Antique', sans-serif;
      }
      .button{
        text-align: right;
      }
    </style>
</head>
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
  <div class="menuform">
    <div class="fontform">
        Transaksi Pembelian<hr>
    </div>
    <?php
      $conn = new mysqli('localhost', 'root', '', 'gofashion');

      $kode_pakaian = $_GET['kode_pakaian'];
      $data = mysqli_query($conn, "SELECT * FROM pakaian WHERE kode_pakaian='$kode_pakaian'");

      while($baru = mysqli_fetch_array($data)){
    ?>

    <form method="POST" action="tambah3.php">
    <!-- Kode Pakaian -->
    <div class="row pt-2">
      <div class="col-md-4">
        <label for="kode_pakaian" class="form-label fw-bold">Kode Pakaian</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" name="kode_pakaian" id="kode_pakaian" class="form-control" value="<?php echo $baru['kode_pakaian'];?>"readonly required>
      </div>
    </div>

    <!-- Nama -->
    <div class="row pt-2">
      <div class="col-md-4">
        <label for="nama" class="form-label fw-bold">Nama</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" autocomplete="off" name="nama" id="nama" class="form-control" aria-describedby="nama">
      </div>
    </div>

    <!-- Alamat -->
    <div class="row">
      <div class="col-md-4">
        <label for="alamat" class="form-label fw-bold">Alamat </label>
      </div>
      <div class="col-md-8 pb-4">
        <textarea type="text" autocomplete="off" name="alamat" id="alamat" class="form-control" aria-describedby="alamat"></textarea>
      </div>
    </div>

    <!-- Ukuran -->
    <div class="row">
      <div class="col-md-4">
        <label for="ukuran" class="form-label fw-bold">Ukuran</label>
      </div>
      <div class="col-md-8 pb-4">
        <select class="form-select" name="ukuran" aria-label="Default select example">
          <option selected>S</option>
          <option value="M">M</option>
          <option value="L">L</option>
          <option value="XL">XL</option>
          <option value="XXL">XXL</option>
        </select>
      </div>
    </div>

    <input type="hidden" name="kode_pakaian" value="<?= $baru['kode_pakaian']; ?>">

    <!-- Harga -->
    <div class="row">
      <div class="col-md-4">
        <label for="harga" class="form-label fw-bold">Harga</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="number" name="harga" id="harga" class="form-control" aria-describedby="harga" readonly value="<?= $baru['harga']; ?>">
      </div>
    </div>

    <!-- Button -->
    <div class="button pt-3">
      <button type="submit" value="beli" name="beli" class="buttonbeli">Beli</button>
      <a href="produk.php" type="button" class="buttonback">Kembali </a>
    </div>
    </form>

    <?php 
      }
    ?>
  </div>
</body>
</html>