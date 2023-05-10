<?php 
    session_start();
    if (isset($_SESSION["login"])) {
        header('Location:home.php');
        exit;
}
require 'functions.php';
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cek=mysqli_query($link,"SELECT * FROM user WHERE username = '$username'");
    //var_dump(mysqli_num_rows($cek));
    if(mysqli_num_rows($cek) === 1){
        $cekpass=mysqli_fetch_assoc($cek);
        if(md5($password)==$cekpass["password"]){
            $_SESSION["login"]=true;
            $_SESSION["nama"]=$username;
            header("Location:home.php");
            exit;
        }
        else {
            echo "<script>
            alert('Password Salah');
            </script>";
        }
    }
    else {
        echo "<script>
            alert('Username Salah');
            </script>";
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
    
    <title>GoFashion</title>
</head>
<style>
    body{
        background-image: url(bg3.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
    .copy{
        text-align: center;
        margin-top: 110px;
        font-size: 20px;
    }
    
    .login2{
        width: 80%;
        margin: 0px 30px 30px 40px;
    }

    h2{
        margin-left: 35%;
        font-family: 'Poppins', sans-serif;
    }

    .awal1{
        box-shadow: 8px 8px 5px rgb(110, 110, 110);
        background-color: whitesmoke;
        border-radius: 20px;
        margin: 0px 200px 0px 200px;
    }

    .toRegist{
        position: absolute;
        font-size: small;
    }

    .button{
        border-radius: 10px;
        width: 100%;
        margin-top: 7px;
        margin-bottom: 8px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
</style>
<body>
    <div id="awal1" class="awal1">
        <div class="container mt-5">
            <div class="row pt-3">
            <div class="col-md-6 me-3 mt-4">
                <img src="bgloginn.png" alt="login2" class="login2">
            </div>
            <div class="col mt-2">
                <div class="row col-md-11">
                    <h2>Login</h2>
                    <hr>
                    <form action="" method="post">
                        <div class="row g-3 align-items-center">
                        <div class="col">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" autocomplete="off" class="form-control" id="username" placeholder="" name="username">
                            <br>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="" name="password">
                            <input type="checkbox" onclick="lihatpassword()"> Show Password
                        </div>
                        <div class="mb-3">
                            <button class="button btn-primary" type="submit" name="login">Login</button>
                            <p class="toRegist">Belum Mendaftar ? <a href="registrasi.php">Registrasi disini</a></p>
                        </div>  
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