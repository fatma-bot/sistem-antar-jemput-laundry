<?php 
$connect = mysqli_connect("localhost", "root", "", "data_akun_pelanggan");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>