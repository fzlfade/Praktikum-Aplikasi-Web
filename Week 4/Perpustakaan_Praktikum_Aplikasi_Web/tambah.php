<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah </title>
</head>
<body>
  <form action="proses_tambah.php" method="post">
    <label for="judul">Judul:</label><br>
    <input type="text" id="judul" name="judul"><br><br>
    <label for="penulis">Penulis:</label><br>
    <input type="text" id="penulis" name="penulis"><br><br>
    <label for="tahun_terbit">Tahun Terbit:</label><br>
    <input type="text" id="tahun_terbit" name="tahun_terbit"><br><br>
    <label for="stok">Stok:</label><br>
    <input type="number" id="stok" name="stok"><br><br>
    <input type="submit" value="Simpan">
  </form>  
</body>
</html>