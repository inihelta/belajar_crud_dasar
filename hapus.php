<?php
include 'koneksi.php';

//menangkap data id yang dikirim di url
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");

//mengalihkan ke halaman kembali ke index jika sudah berhasil hapus data
header("location:index.php");
