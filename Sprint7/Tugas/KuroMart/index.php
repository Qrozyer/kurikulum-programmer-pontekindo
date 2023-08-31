<?php
include_once "controller.php";
$index = index();
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
    <div class="container-fluid py-5">
        <div class="container">
        <h2 class="text-center py-3">Daftar Produk</h2>
            <div class="table-responsive">
           <table class="table table-bordered">
               <thead>
                    <tr class="table-info">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Merek</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1;foreach ($index as $value) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['name']; ?></td>
                        <td><?= $value['brand']; ?></td>
                        <td><?= $value['description']; ?></td>
                        <td><?= $value['stock']; ?></td>
                    </tr>
                <?php $no++;endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>