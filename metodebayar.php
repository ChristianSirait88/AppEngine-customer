<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>GoFashion</title>
</head>
<style>

    .footer {
        position: absolute;
        bottom: -140%;
        width: 100%;
        background-color: red;
        color: white;
        text-align: center;
    }
    .metode{
        position: absolute;
        top: 100px;
        left: 35%;
    }
    .metode1{
        position: absolute;
        top: 100%;
        font-size:large;
        padding-left: 27%;
    }
    .gambar1{
        position: absolute;
        top: 95%;
        left: 57%;
    }
    .metode2{
        position: absolute;
        top: 160%;
        font-size:large;
        padding-left: 27%;
    }
    .gambar2{
        position: absolute;
        top: 155%;
        left: 57%;
    }
    .kembali{
        width: 45%;
        font-size: 18px;
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
                    <a class="nav-link" href="detailtransaksi.php">Riwayat Transaksi</a>
                    <a class="nav-link active" href="metodebayar.php">Cara Pembayaran</a>
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </div>
            </div>
            <a class="btn btn-danger" href="logout.php">Logout</a>
        </div>
    </nav>
    <div class="metode">
    <center>
        <img src="metode.jpg" alt="" height="500" width="500">
       <h2>Metode Pembayaran</h2></center>
       <hr>
    </div>
    
    <div class="gambar1">
    <img src="bank.jpg" alt="" height="300" width="375">
    </div>
    <div class="metode1">
        <div class="container-fluid">
            <h3>Metode Bank</h3>
            <ul>
                <li>
                    Siapkan Rekening Anda
                </li>
                <li>
                    Datang Ke Bank Terdekat
                </li>
                <li>
                    Pergi Ke Bagian Costumer Service
                </li>
                <li>
                    Pilih Pembayaran GoFashion
                </li>
                <li>
                    Bayarlah Sesuai Dengan Harga Yang tertera
                </li>
                <li>
                    Tunggu Sampai Status Pembaran Berubah
                </li>
            </ul>
        </div>
    </div>
    
    <div class="gambar2">
    <img src="metode2.jpg" alt="" height="300" width="375">
    </div>
    <div class="metode2" id="metode2">
        <hr>
        <div class="container-fluid">
            <h3>Metode MBanking</h3>
            <ul>
                <li>
                    Siapkan Aplikasi MBanking Anda
                </li>
                <li>
                   Login Pada Aplikasi MBanking Anda
                </li>
                <li>
                    Pilih Menu Costumer Service
                </li>
                <li>
                    Pilih Pembayaran GoFashion
                </li>
                <li>
                    Bayarlah Sesuai Dengan Harga Yang tertera
                </li>
                <li>
                    Tunggu Sampai Status Pembaran Berubah
                </li>
                <li>
                    Simpan Bukti Pembayaran
                </li>
            </ul>
            <br><br>
        </div>
        <div class="container-fluid">
        <a class="kembali btn btn-dark" href="detailtransaksi.php">Kembali</a>
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