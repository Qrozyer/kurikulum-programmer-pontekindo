<?php
// arrow function : pokoknya yg kata kuncinya fn dan pake panah
$langsungmake = "ninja";
$arrow = fn($coba) =>  "aku seorang $langsungmake yang $coba\n";
// echo $arrow("akan menjadi hokage");

// buat program menghitung luas persegi pakai arrow function
// luas persegi panjang
$keterangan = "Luas : ";
$panjang = 10;
$lebar = 5;
$luas = fn() => $keterangan . $panjang * $lebar;

echo $luas();
echo "\n";
// luas persegi
$keterangan = "Luas : ";
$luas = fn($sisi) => $keterangan . $sisi * $sisi;
echo $luas(10);
echo "\n";