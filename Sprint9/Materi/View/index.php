<?php
include_once "../Controller/controller.php";
$products = new Products();
$index = $products->index();
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
        <thead>
            <tr>
                <th>Nama</th>
                <th>Merek</th>
                <th>Desk</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($index as $value): ?>
            <tr>
                <td><?= $value->name ?></td>
                <td><?= $value->brand ?></td>
                <td><?= $value->description ?></td>
                <td><?= $value->stock ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>