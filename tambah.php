<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>

<body>
    <h1>Halaman Tambah Data</h1>
    <br>
    <a href="index.php">kembali ke halaman utama</a>
    <form action="tambah_proses.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" placeholder="Masukkan kelas"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" placeholder="Masukkan Jurusan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="TAMBAH"></td>
            </tr>
        </table>
</body>

</html>