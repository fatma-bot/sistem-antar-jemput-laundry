<?php
session_start();

require 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tb_akun WHERE username='$username' AND password='$password'";
$query = mysqli_query($connect, $sql);

$cek = mysqli_num_rows($query);

if($cek >0)  {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    echo 
    "
    <script>
    alert('Login berhasil');
    document.location.href = 'dashboard.php';
    </script>
    "
    ;
} else {
    echo 
    " 
    <script>
    alert('login gagal, periksa kembali username dan password anda');
    </script>
    "
    ;
    header("location:login.php?message=failed");
}
?>