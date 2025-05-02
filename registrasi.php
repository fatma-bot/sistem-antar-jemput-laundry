<?php
require 'connection.php';

if(isset($_POST["submit"])) {
    $nomor_hp = $_POST["nomor_hp"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];

    $query = "INSERT INTO tb_akun VALUES ('', '$nomor_hp', '$username', '$password', '$latitude', '$longitude')";
    mysqli_query($connect, $query);


    echo 
    "
    <script>
    alert('Data Added Successfully');
    document.location.href = 'lokasi.php';
    </script>
    "
    ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body onload = "getLocation();">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
   <center>
    <h4>REGISTRASI</h4>
        <p>Silahkan masukkan data diri anda</p>

        <form class="myForm" action="" method="post" autocomplete="off">
        <div class="input-group mb-3" style="width: 50%;">
            <span class="input-group-text">ID +62</span>
            <div class="form-floating">
                <input type="number" class="form-control" id="floatingInputGroup1" placeholder="nomor_hp" name="nomor_hp" required value="">
                <label for="floatingInputGroup1">mobile number</label>
            </div>
        </div>
        <div class="input-group mb-3" style="width: 50%;">
            <span class="input-group-text"><img src="https://static.vecteezy.com/system/resources/previews/005/005/788/original/user-icon-in-trendy-flat-style-isolated-on-grey-background-user-symbol-for-your-web-site-design-logo-app-ui-illustration-eps10-free-vector.jpg" style="width: 20px; height: 20px;" alt=""> </span>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="username" required value="">
                <label for="floatingInputGroup1">username</label>
            </div>
        </div>
        <div class="input-group mb-3" style="width: 50%;">
            <span class="input-group-text"><img src="https://www.pinclipart.com/picdir/middle/130-1303682_security-password-2-icon-password-icon-in-png.png" style="width:20px; height: 20px;" alt=""></span>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingInputGroup1" placeholder="password" name="password" required value="">
                <label for="floatingInputGroup1">password</label>
            </div>
        </div>
        <input type="hidden" name="latitude" value=""> 
        <input type="hidden" name="longitude" values="">
        <button type="submit" name="submit" style="width: 30%; border-radius: 8px;">DAFTAR</button>

        </form>
        
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
   </center> 

   <script type="text/javascript">
    function getLocation() {
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition,showError);
        }
    }
    function showPosition(position) {
        document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
        document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
    }
    function showError(error) {
        switch(error.code) {
            case error.PERMISSION_DENIED: 
                alert("Izin Lokasi Harus Diaktifkan");
                location.reload();
                break;
        }
    }
   </script>
</body>
</html> 
