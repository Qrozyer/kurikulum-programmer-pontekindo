<?php

// Tipe-tipe Data Pada PHP
// Tipe Data Number

// var dump biasa dipakai untuk debugging sama halnya dengan print_r
var_dump(1234); //integer
// print_r(1234);

// number menggunakan pemisah berupa underscore atau garis bawah
var_dump(1_123_234_456);

var_dump(1.45); //float

// Tipe Data Boolean
var_dump(true); //benar
var_dump(false); //salah

// var_dump((bool) "false"); 

// Tipe Data String -> Karakter
var_dump("karakter");
echo '\nFandy\t Ahmad'; //petik 1 terbatas untuk karakter saja
echo "\nFandy\t Ahmad";

// Heredoc
echo <<<here

basbflbalsdb

            nkwenflkw "nbsafi"

here;

// Tipe Data NULL ->tipe data yang tidak punya value
var_dump(NULL);

// Tipe Data Array -> tipe data yang bisa berisi beberapa jenis tipe data
var_dump(array(1,true,"false",NULL)); //menggunakan fungsi array
var_dump([2,false,'true',NULL,true]); //menggunakan kurung siku

