<?php

// Expression : nilai/value
// Statement : kalimat code hingga akhir / titik koma
// Block : code yang berada di dalam {}

// Percabangan / pengkondisian -> if else
// echo "Masukkan Nama Santri : ";
// $nama = trim(fgets(STDIN));
// echo "Masukkan Nilai Santri: ";
// $nilai = trim(fgets(STDIN));
// echo "Nama Santri : $nama\n";
// echo "Nilai Santri : $nilai dengan predikat ";
// if($nilai == 100){
//     echo "Perfect";
//     echo "\n";
// }else if($nilai >= 80){
//     echo "Excellent";
//     echo "\n";
// }else if($nilai >= 60){
//     echo "Good";
//     echo "\n";
// }else{
//     echo "Not Passed";
//     echo "\n";

// }

// Nested If -> If di dalam if
// echo "==================================\n";
// echo "====== Mendata Nilai Santri ======\n";
// echo "==================================\n";
// echo "############## MENU ##############\n";
// echo "1. Input Nilai Santri\n";
// echo "2. Keluar\n\n";
// echo "Pilih menu : ";
// $menu = trim(fgets(STDIN));
// if ($menu == 1) {
//     echo "Masukkan Nama Santri : ";
//     $nama = (string) trim(fgets(STDIN));
//     echo "Masukkan Nilai Santri: ";
//     $nilai = (integer) trim(fgets(STDIN));
//     echo "Nama Santri : $nama\n";
//     echo "Nilai Santri : $nilai dengan predikat ";
//     if ($nilai >= 100) {
//         echo "Perfect";
//         echo "\n";
//     } else if ($nilai >= 80) {
//         echo "Excellent";
//         echo "\n";
//     } else if ($nilai >= 60) {
//         echo "Good";
//         echo "\n";
//     } else {
//         echo "Not Passed";
//         echo "\n";
//     }
// } else if ($menu == 2) {
//     echo "Keluar\n";
//     die;
//     // exit;
// } else {
//     echo "Input Invalid\n";
// }

// Switch -> mirip seperti if else namun syntax lebih simple
// $nilai = 79;
// switch ($nilai) {
//     case $nilai >= 100 :
//         echo "Perfect\n";
//         break;
//     case $nilai >= 80 :
//         echo "Excellent\n";
//         break;
//     default :
//         echo "Not Passed\n";
//         break;
// }

/* Buat aplikasi pakai switch sewa buku di perpus bila lewat berapa hari akan diberi denda misal : 1 hari denda Rp. 10000, 2 hari denda Rp. 20000, 3 hari denda Rp. 30000, 4 hari denda Rp. 40000, 5 hari denda Rp. 50000, 6 hari denda Rp. 60000, 7 hari denda Rp. 70000, lebih dari 7 hari Rp. 100000
*/

echo "==================================\n";
echo "=========== Sewa Motor  ==========\n";
echo "==================================\n";
echo "Nama Penyewa : ";
$penyewa = trim(fgets(STDIN));
echo "Merek Motor : ";
$motor = trim(fgets(STDIN));
echo "Batas Hari Sewa Motor : ";
$batas = (int) trim(fgets(STDIN));
echo "Jumlah Hari Sewa : ";
$hari = (int) trim(fgets(STDIN));
$harga = 70000 * $hari;
$denda = $hari - $batas;
echo "~~~~~~~ Total Pembayaran ~~~~~~~~~\n";
echo "Nama Penyewa : $penyewa\n";
echo "Merek Motor : $motor\n";
echo "Batas Hari Sewa Motor : $batas Hari\n";
echo "Jumlah Hari Sewa : $hari Hari\n";
echo "Harga Sewa Motor : Rp. $harga\n";
switch($denda){
    case $denda <= 0:
        $biaya_denda = 0;
        $total = $harga + $biaya_denda;
        echo "Biaya Denda : Rp. $biaya_denda\n";
        echo "Total Pembayaran : Rp. $harga + Rp. $biaya_denda = Rp. $total\n";
        break;
    case 1:
        $biaya_denda = 10000;
        $total = $harga + $biaya_denda;
        echo "Biaya Denda : Rp. $biaya_denda\n";
        echo "Total Pembayaran : Rp. $harga + Rp. $biaya_denda = Rp. $total\n";
        break;
    case 2:
        $biaya_denda = 20000;
        $total = $harga + $biaya_denda;
        echo "Biaya Denda : Rp. $biaya_denda\n";
        echo "Total Pembayaran : Rp. $harga + Rp. $biaya_denda = Rp. $total\n";
        break;
    case 3:
        $biaya_denda = 30000;
        $total = $harga + $biaya_denda;
        echo "Biaya Denda : Rp. $biaya_denda\n";
        echo "Total Pembayaran : Rp. $harga + Rp. $biaya_denda = Rp. $total\n";
        break;
    case 4:
        $biaya_denda = 40000;
        $total = $harga + $biaya_denda;
        echo "Biaya Denda : Rp. $biaya_denda\n";
        echo "Total Pembayaran : Rp. $harga + Rp. $biaya_denda = Rp. $total\n";
    default:
        $biaya_denda = 50000;
        $total = $harga +   $biaya_denda;
        echo "Biaya Denda : Rp. $biaya_denda\n";
        echo "Total Pembayaran : Rp. $harga + Rp. $biaya_denda = Rp. $total\n";
        break;
}





