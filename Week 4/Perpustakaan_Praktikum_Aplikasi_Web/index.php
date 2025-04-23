<?php
include 'koneksi.php';

$sql = "SELECT * FROM buku";

$query = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>
<body>
    <button><a href="tambah.php">Tambah</a></button>
    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
            <th>Action</th>
        </tr>
        <?php 
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['judul']; ?></td>
                <td><?= $data['penulis']; ?></td>
                <td><?= $data['tahun_terbit']; ?></td>
                <td><?= $data['stok']; ?></td>
                <td><a href="edit.php?id=<?= $data['id_buku']; ?>">Edit</a> | <a href="delete.php?id=<?= $data['id_buku']; ?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>