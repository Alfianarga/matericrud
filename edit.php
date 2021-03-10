<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    require_once 'koneksi.php';

    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM tbkategori_3183111046 where id_kategori='$id'");
    $get = mysqli_fetch_array($query);
  ?>

<form action="" method="POST">
  <label>ID Kategori</label>
  <input type="text" name="id_kategori" value="<?= $get['id_kategori'] ?>" readonly>
  <br>
  <label>Nama Kategori</label>
  <input type="text" name="nama_kategori" value="<?= $get['nama_kategori'] ?>">

  <br><br>
  <input type="submit" name="submit" value="simpan">
  </form>

<?php

require_once 'koneksi.php';

if(isset($_POST['submit'])){
  $id = $_POST['id_kategori'];
  $nama = $_POST['nama_kategori'];

  mysqli_query($koneksi, "update tbkategori_3183111046 set nama_kategori='$nama' where id_kategori=$id");
  header("location:index.php");

}

?>

</body>
</html>