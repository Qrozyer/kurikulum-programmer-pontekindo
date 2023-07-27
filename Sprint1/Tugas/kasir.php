<?php

// Tugas Aplikasi Kasir
echo "Barang 1 : ";
$barang1 = trim(fgets(STDIN));
echo "Harga 1 : ";
$harga1 = trim(fgets(STDIN));
echo "Barang 2 : ";
$barang2 = trim(fgets(STDIN));
echo "Harga 2 : ";
$harga2 = trim(fgets(STDIN));
echo "Barang 3 : ";
$barang3 = trim(fgets(STDIN));
echo "Harga 3 : ";
$harga3 = trim(fgets(STDIN));
// // penugasan
$total = 0;
$total += $harga1;
$total += $harga2;
$total += $harga3;
echo "$harga1 + $harga2 + $harga3 = $total\n";

// // pengkondisian
if($total < 10000){
    $promo = 0;
}else if($total < 20000){
    $promo = 1000;
}else if($total < 30000){
    $promo = 2000;
}else if($total < 40000){
    $promo = 3000;
}else if($total < 50000){
    $promo = 4000;
}else{
    $promo = (int) $total * 0.1;
}
echo "total = $total - $promo\n";
$total -= $promo; //penugasan
echo "total = $total\n";
