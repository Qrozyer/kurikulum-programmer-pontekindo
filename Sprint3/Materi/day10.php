<?php

// jenis-jenis function

// 1. variable function : memasukkan suatu function dalam sebuah variable dengan mengisi nama function sebagai valuenya

function sum($a, $b){
    $t = $a + $b;
    return $t;
}
$penjumlahan = sum(55,45);
// echo $penjumlahan;

// buat variable function dengan mengembalikan nilai nama dan divisi dengan parameter memiliki default value

function nama_divisi($nama = "fulan", $divisi = "programmer"){
    return "Nama :$nama\nDivisi : $divisi\n";
}
$tampil = "nama_divisi"; // variable function
// echo $tampil("Fauzan", "Multimedia");

// buat seperti ini tanpa default value dengan variable-length-argument: Nama-Nama Hewan
function nama_hewan(...$hewan){
    return implode(",",$hewan);
}
$tampilHewan = "nama_hewan"; // variable function
// echo $tampilHewan("Kucing", "Sapi", "Kambing", "Ayam").PHP_EOL;

// Anonymous Function atau Closure
// $buah = function ($fruit){ //closure
//     return "Buah : $fruit";
// };
// echo $buah("Apel");

//dan function ini bisa kita jadikan argumen jg
//menghitung jumlah kata dalam sebuah string
function jumlah_kata($string, $closure){
    echo "Jumlah kata : " .$closure($string); //argumen utk function anonymous
}

// jumlah_kata("Saya adalah seorang kapiten mempunyai pedang panjang", function ($kalimat){return str_word_count($kalimat);});

$buah = "Melon";
$tampilBuah = function ($tunjuk) use ($buah){ // use hanya utk closure
    // global $buah; cara 2 -> diletakkan di dalam blok kode function dan bisa dipakai di function mana saja
    echo "$tunjuk $buah\n";
};
$tampilBuah("Itu");

