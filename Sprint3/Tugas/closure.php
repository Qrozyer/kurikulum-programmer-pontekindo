<?php

// Buat program yang menghitung karakter dalam suatu string menggunakan function anonymous dengan input dinamis
// Buat program pemisah antara nilai ganjil dengan nilai genap yang positif saja menggunakan variable function dengan input statis saja

// echo "Masukkan Data : ";
// $input = trim(fgets(STDIN));
// $hitungChara = function () use ($input){
//     echo "Jumlah Karakter : ". strlen($input);
// };
// $hitungChara();

// $hitungChara = function ($string){
//     return strlen($string);
// };
// echo "Jumlah Karakter : ".$hitungChara($input);

// $count = function (){
//     echo "Masukkan Data : ";
//     $input = trim(fgets(STDIN));
//     echo "Jumlah Karakter : ". strlen($input);
// };
// $count();

// function hitungChara($misal, $hitung){
//     echo "Jumlah Karakter : ".$hitung($misal);
// }
// hitungChara("Misal", function ($string){return strlen($string);});

// $hitung = function ($string){return strlen($string);};
// $hitung("Misal");
function jilnap ($angka){
    echo "Angka Genap : ";
    foreach ($angka as $genap){
        if ($genap % 2 == 0 && $genap > 0) {
            echo "$genap,";
        }
    }
    echo "\n";
    echo "Angka Ganjil : ";
    foreach($angka as $ganjil){
        if ($ganjil % 2 == 1 && $ganjil > 0) {
            echo "$ganjil,";
        }
    }
    echo "\n";
}
$a = "jilnap";
$array = [-2,-5,-8,-10,5,8,12,7,6];
$a($array);
// jilnap(-2,-5,-8,-10,"apa",5,8,12,"string",7,6);
// var_dump(...$array);
// var_dump("-2,-5,-8,-10,4,5,8,12,19,7,6");