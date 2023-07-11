<?php

// // Tipe-tipe Data Pada PHP
// // Tipe Data Number

// // var dump biasa dipakai untuk debugging sama halnya dengan print_r
// var_dump(1234); //integer
// // print_r(1234);

// // number menggunakan pemisah berupa underscore atau garis bawah
// var_dump(1_123_234_456);

// var_dump(1.45); //float

// // Tipe Data Boolean
// var_dump(true); //benar
// var_dump(false); //salah

// // var_dump((bool) "false"); 

// // Tipe Data String -> Karakter
// var_dump("karakter");
// echo '\nFandy\t Ahmad'; //petik 1 terbatas untuk karakter saja
// echo "\nFandy\t Ahmad";

// // Heredoc
// echo <<<here

// basbflbalsdb

//             nkwenflkw "nbsafi"

// here;

// // Tipe Data NULL ->tipe data yang tidak punya value
// var_dump(NULL);

// // Tipe Data Array -> tipe data yang bisa berisi beberapa jenis tipe data
// var_dump(array(1,true,"false",NULL)); //menggunakan fungsi array
// var_dump([2,false,'true',NULL,true]); //menggunakan kurung siku


// VARIABLE -> bisa dirubah
$nama = "Fandy";
$umur = 23;
$nama = "Hafidz";
$umur = 19;

echo 'Nama saya adalah $nama. Umur saya $umur';
echo "\n";
echo "\tNama saya adalah $nama. Umur saya $umur\n";

// CONSTANT / Konstanta -> tidak bisa dirubah
// keterangan pertama pada define : nama konstantanya, yang kedua datanya
define("NAMA", "FANDY"); // ->menggunakan function bawaan php define
const UMUR = 23; // ->menggunakan const
echo "\n";
echo NAMA;
echo UMUR;
echo "\n";

echo $nama;
var_dump($nama);
echo PHP_EOL;

// menghapus data di dalam variable menggunakan NULL
$nama = NULL;
var_dump(($nama));

// menghapus variable
unset($nama);
echo $nama;
// *var and const is case-sensitive (namanya kudu musti harus sesuai dengan yang dideklarasikan)

