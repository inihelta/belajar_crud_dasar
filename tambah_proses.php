<?php
//koneksi data ke database agar Masuk
include 'koneksi.php';

//menangkap data yang di kirim dari form tambah data
$nama       = $_POST['nama'];
$kelas      = $_POST['kelas'];
$jurusan    = $_POST['jurusan'];

$query = "INSERT INTO siswa (nama, kelas, jurusan) VALUES ('$nama', '$kelas', '$jurusan')";
$result = mysqli_query($koneksi, $query);
//periksa query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    //tampil alert dan akan redirect ke halaman index.php
    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
}
