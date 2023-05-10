<?php 
    require 'functions.php';
    if(isset($_POST["register"])){
        if (registrasi($_POST)>0){
            echo "<script>
            alert('User Berhasil Ditambahkan');
            </script>";
        }
        else {
            echo mysqli_error($link);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <title>Registrasi</title>
</head>
<style>
    .toRegist{
        font-size: small;
    }
    .topi{
        position: absolute;
        left: 35%;
        top: -5.5%;

    }
    .child {
        margin: 31px 400px 0px 400px;
        border-radius: 20px;
        background-color: whitesmoke;
        position: relative;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.7);
    }
    .copy{
        text-align: center;
        margin-top: 36px;
        font-size: 18px;
    }
    body{
        background-image: url(bg2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
    h1{
        padding-top: 12px;
        font-family: 'Poppins', sans-serif;
    }
    form{
        margin-left: 30px;
        margin-right: 30px;
    }
    hr{
        margin-left: 30px;
        margin-right: 30px;
    }
    .registrasi{
        width: 100%;
        border-radius: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
        margin-bottom: 8px;
    }
</style>
<body>

    <div class="container-fluid">
        <div class="jumbotron">
            <div class="child">
                <center><h1>Registrasi</h1><hr></center> 
            <div class="container-fluid">
            <form action="" method="post">
            <div class="row">
                <div class="mb-4">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" autocomplete="off" class="form-control" id="username" placeholder="" name="username">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="" name="password">
                    <input type="checkbox" onclick="lihatpassword()"> Show Password
                </div>
                <div class="mb-4">
                    <label for="KonfirmasiPassword" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="KonfirmasiPassword" placeholder="" name="KonfirmasiPassword">
                </div>
                <div class="mb-3">
                    <button class="registrasi btn-primary" type="submit" name="register">Registrasi</button>
                    <p class="toRegist">Sudah Mendaftar? <a href="loginpelanggan.php">Login disini</a></p>
                </div>    
            </form>
            </div>
            </div>
            </div>
        </div>
    </div>
    <p class="copy fw-bold">&copy; 2021 PW IF-F</p>
</body>
<script>
    function lihatpassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
</html>