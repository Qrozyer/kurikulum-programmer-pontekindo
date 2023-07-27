<?php

// Pengkondisian
// Ternary
// echo "NILAI : ";
// $nilai = trim(fgets(STDIN));
// // $nilai = 100;
// $result = $nilai >= 100 ? "Perfect" : 
//           ($nilai >= 80 ? "Excellent" : 
//           ($nilai >= 60 ? "Good" : 
//           "Not Passed"));
// echo $result.PHP_EOL;
// $hasil = $nilai > 100 ? "perfect" : "not perfect";

// Buat pengkondisian menggunakan ternary yang menghasilkan nama buah sesuai warnanya apabila kita menginput suatu warna (dinamis). Misal bila menginput warna merah akan mengoutput buah apel.


// Perulangan
// for loop

// $i = 1;
// for (;$i < 10;) {
//     echo "Hello\n";
//     $i++;
// }

// for ($i=1; $i < 10; $i++) { 
//     echo "Hello\n";
// }

// buatlah perulangan dengan batas output 10 kali menggunakan for loop dengan kondisi if-else dimana output akan menghasilkan warna merah apabila nilai $i bernilai 5 dan berwarna hijau apabila nilai $i bernilai 10.
/*
1
2
3
4
Merah
6
7
8
9
Hijau
*/

// for ($i=-10; $i < 1; $i++) { 
//     if ($i == -5) {
//         continue; // diskip
//     } else if ($i == -10) {
//         echo "Hijau\n";
//     } else if($i == -2){
//         break; //berhenti
//     }else {
//         echo "$i\n";
//     }
//     // echo $i.PHP_EOL;
// }

// while loop
// Jika for seperti ini
// $i = 1;
// for (; $i < 10 ;) {
//     echo "Hello\n";
//     $i++;
// }

// Yang dibawah ini contoh menggunakan while -> didalamnya hanya ada kondisi
// $i = 11;
// while($i<10){
    // echo "Hello\n";
    // $i++;
// }

// do while -> bila di while maka minimal melakukan satu kali perulangan walau nilainya false
// $i = 11;
// do{
//     echo "$i.Hello\n";
//     $i++;
// }while($i<10);

// do{
//     echo "=== MENU ===\n";
//     echo "1. Masuk Apk\n";
//     echo "2. Keluar\n";
//     echo "Pilih : ";
//     $menu = (int) trim(fgets(STDIN));
//     if ($menu == 1) {
//         echo "Masuk Apk\n";
//     } else if ($menu == 2) {
//         echo "Anda Telah Keluar\n";
//         exit;
//         // die;
//         // break;
//     } else {
//         echo "Pilihan tidak tersedia\n";
//     }
//     echo "Balik ke menu Y/N : ";
//     $balik = trim(fgets(STDIN));
// }while($balik == "Y");

// $condition = true;
// while($condition == true){
//     echo "=== MENU ===\n";
//     echo "1. Masuk Apk\n";
//     echo "2. Keluar\n";
//     echo "Pilih : ";
//     $menu = (int) trim(fgets(STDIN));
//     if ($menu == 1) {
//         echo "Masuk Apk\n";
//     } else if ($menu == 2) {
//         echo "Anda Telah Keluar\n";
//         exit;
//         die;
//     } else {
//         echo "Pilihan tidak tersedia\n";
//     }
//     echo "Balik ke menu Y/N : ";
//     $balik = trim(fgets(STDIN));
//     if ($balik == "N") {
//         echo "Terimakasih\n";
//         // $condition = false;
//         // exit;
//         // break;
//         die;
//     }
// }

