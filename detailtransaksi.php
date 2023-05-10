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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <title>GoFashion</title>
</head>
<style>
    body{
      background-color: #EEEEEE;
    }
   .footer {
        position: absolute;
        bottom: -60%;
        width: 100%;
        background-color: red;
        color: white;
        text-align: center;
    } 
    .font{
      font-family: 'Rubik', sans-serif;
    }
    h5{
      font-family: 'Rubik', sans-serif;
    }
    .form{
      margin: 0 100px 0 100px;
    }
    td{
      text-align: center;
    }
    .toptable1{
      background-color: #659bff;
      text-align: center;
    }
    .bayar{
      margin: 0 100px 0 100px;
      text-decoration: none;
      padding: 5px 12px 5px 12px;
      background-color: #32C1CD;
      color: black;
      border-radius: 4px;
      font-family: 'Outfit', sans-serif;
    }
    .bayar:hover{
      color:black;
      background-color: #77E4D4;
      font-family: 'Outfit', sans-serif;
    }
    td{
      font-family: 'Varela Round', sans-serif;
    }
    .statusbl{
      padding-top: 1px;
      background-color: red;
      color: black;
      border-radius: 10px;
    }
    .statusl{
      background-color: #49FF00;
      color: black;
      border-radius: 10px;
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
                    <a class="nav-link" href="produk.php">Products</a>
                    <a class="nav-link active" href="detailtransaksi.php">Riwayat Transaksi</a>
                    <a class="nav-link" href="metodebayar.php">Cara Pembayaran</a>
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </div>
            </div>
            <a class="btn btn-danger" href="logout.php">Logout</a>
        </div>
    </nav>
    <div class="container-fluid">
    <div class="form">
    <div class="font">
        <br>
       <center><h2>Transaksi Pembelian</h2></center><hr>
    </div>
    <br>
    <h5>Riwayat Transaksi : </h5>
    <table class="table table-striped">
      <thead class="toptable1">
        <tr>
          <th>No </th>
          <th>Kode Pakaian</th>
          <th>Nama</th>
          <th>Alamat </th>
          <th>Ukuran </th>
          <th>Harga </th>
          <th>Status </th>
        </tr>
      </thead>

      <?php 
        $conn = new mysqli('localhost', 'root', '', 'gofashion');
        $query = mysqli_query($conn, "SELECT * FROM pembelian ORDER BY status");
        $no = 1;
        while($data = mysqli_fetch_array($query)){
        echo '
          <tr>
          <td> '.$no.' </td>
        ';
        $no++;
      ?>
        <td><?php echo $data['kode_pakaian'];?> </td>
        <td><?php echo $data['nama'];?> </td>
        <td><?php echo $data['alamat'];?> </td>
        <td><?php echo $data['ukuran'];?> </td>
        <td><?php echo $data['harga'];?> </td>
        <td><?php 
          if ($data['status'] < 1) {
            echo '
            <div>
              <div class="statusbl">Belum Lunas</div>
            </div>
            ';
          } else {
            echo '
            <div>
              <div class="statusl">Lunas</div>
            </div>
            ';
          }
        ?> </td>
      </tr>
      <?php
        }
      ?>
    </table>
    <br><hr>
  </div>
  <a class="bayar" href="metodebayar.php"><i class="bi bi-credit-card"></i> Cara Pembayaran</a>
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