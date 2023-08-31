<?php
include_once "controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container-sm py-5 offset-ls-2 col-lg-5">
    <h1 class="text-center py-2">Masukkan Produk</h1>
    <form action="controller.php" method="post">
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
      <label for="nama">Nama Produk</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="merek" name="merek" placeholder="Merek" required>
      <label for="merek">Merek</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" required>
      <label for="deskripsi">Deskripsi</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok" required>
      <label for="stok">Stok</label>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" class="btn btn-success" name="produk">Simpan</button>
    </div>
    </form>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>