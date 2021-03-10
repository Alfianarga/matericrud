<?php

require_once '../koneksi.php';

if(isset($_POST['submit'])){
  $id = $_POST['id_kategori'];
  $nama = $_POST['nama_kategori'];

  mysqli_query($koneksi, "insert into tbkategori_3183111046 values('$id','$nama')");
  header("location:../index.php");

}
?>