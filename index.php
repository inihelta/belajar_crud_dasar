<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>halaman pertama</h1>
    <br>
    <a href="tambah.php">+ Tambah Data</a>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $siswa = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY id DESC");
        if (mysqli_num_rows($siswa) > 0) {
            while ($row = mysqli_fetch_assoc($siswa)) {
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['kelas']; ?></td>
                    <td><?php echo $row['jurusan']; ?></td>
                    <td><a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a> || <a href='hapus.php?id=<?php echo $row['id']; ?>'>Hapus</a></td onclick="return confirm('Yakin ingin menghapus data ini?')">
                </tr>
            <?php
            }
        } else { ?>
            <tr>
                <td colspan="5">Tidak ada data</td>
            </tr>

        <?php } ?>
    </table>
</body>

</html>