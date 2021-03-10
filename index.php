<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a href="tambah.php">(+)Tambah Data</a>
  <table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Kategori</th>
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php
      require_once 'koneksi.php';

      $query = mysqli_query($koneksi, "SELECT * FROM tbkategori_3183111046");
      $no = 1;
      while($get = mysqli_fetch_array($query)){
        ?>

      <tr>
        <th><?php echo $no++ ?></th>
        <th><?php echo $get['nama_kategori'] ?></th>
        <th>
        <a href="edit.php?id=<?= $get['id_kategori']?>">Edit</a>
        <a href="delete.php?id=<?= $get['id_kategori']?>" onclick="return confirm('Yakin mau hapus ?')">Hapus</a>
        </th>

      </tr>

      <?php } ?>

    
  </tbody>
  </table>
</body>
</html>