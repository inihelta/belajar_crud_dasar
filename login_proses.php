<?php
include "koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
$query = mysqli_query($koneksi, $sql);
$cek = mysqli_num_rows($query);
if ($cek > 0) {
    header("location: index.php");
} else {
    header("location: login.php?pesan=Gagal");
}
