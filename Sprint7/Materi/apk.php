<?php
include_once 'CRUDmysqli.php';
if(isset($_POST['tambahProduk'])){
    tambahProduk($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr?>
            <th>ID</th>
            <th>Nama</th>
            <th>Stok</th>
        </tr>
        <?php foreach ($tampilProduk as $value): ?>
        <tr>
            <td><?= $value['id']; ?></td>
            <td><?= $value['name']; ?></td>
            <td><?= $value['stock']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <form action="" method="post">
        <label>Nama</label>
        <input type="text" name="name" id="name">
        <label>Stok</label>
        <input type="text" name="stock" id="stock">
        <input type="submit" name="tambahProduk"></input>
    </form>
</body>
</html>
<?php

?>