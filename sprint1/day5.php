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
//         continue;
//     } else if ($i == -10) {
//         echo "Hijau\n";
//     } else if($i == -2){
//         break;
//     }else {
//         echo "$i\n";
//     }
//     // echo $i.PHP_EOL;
// }

// while loop
// Jika for seperti ini
// $i = 1;
// for (; $i < 10;) {
//     echo "Hello\n";
//     $i++;
// }

// Yang dibawah ini contoh menggunakan while -> didalamnya hanya ada kondisi
// $i = 11;
// while($i<10){
//     echo "Hello\n";
//     $i++;
// }

// do while
// $i = 1;
// do{
//     echo "$i.Hello\n";
//     $i++;
// }while($i<10);