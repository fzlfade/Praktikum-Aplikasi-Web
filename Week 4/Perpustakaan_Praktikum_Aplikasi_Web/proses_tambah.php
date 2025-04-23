<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun_terbit = $_POST['tahun_terbit'];
$stok = $_POST['stok'];
$sql = "INSERT INTO buku (judul, penulis, tahun_terbit, stok) VALUES ('$judul', '$penulis', '$tahun_terbit', '$stok')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: index.php');
} else {
    echo "Data gagal ditambahkan";
}
?>