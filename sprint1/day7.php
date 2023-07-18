<?php

// Buat array assosiative berisi 1 produk fashion dengan disertai id, nama barang, harga, jumlah stok, deskripsi, tanggal produksi
// Lalu tampilkan menggunakan foreach
// array multidimensi
$produk = 
[
    [
    1 => 
        [
            "nama" => "Baju",
            "harga" => 100000,
            "stok" => 10,
            "deskripsi" => "Baju Ini Simple dan Elegan",
            "tanggal_produksi" => "01-01-2022"
        ]
    ],
    [
    2 => 
        [
            "nama" => "Celana",
            "harga" => 200000,
            "stok" => 5,
            "deskripsi" => "Celana Simple",
            "tanggal_produksi" => "31-07-2022"
        ]
    ]
];      

// $no = 1;
// foreach ($produk as $key => $value) {
//     echo "$no. ";
//     foreach ($value as $key1 => $value1) {
//         foreach ($value1 as $key2 => $value2) {
//             echo "$key2 :  $value2 \n";
//         }
//     }
//     $no++;
// }


//  Manipulasi string : Mengubah/mengedit,menambah,menghapus tipe data string
// strlen() : Menghitung panjang string -> menghitung jumlah karakter
$number = 1_534_213.49;
// var_dump(strlen($string));

// str_word_count() : Menghitung jumlah kata dalam string
// var_dump(str_word_count($string));

// str_replace() : Mengganti string dengan string yang baru

// number_format() : Mengubah angka menjadi string dengan format angka
// var_dump(number_format($number,0,"","."));
// echo "Rp. ".number_format($number,2,",","."). PHP_EOL;

$var = "INI ADALAH SANTRI BARU";
$vin = "saya suka kurma\n";

// strtoupper() : Mengubah semua huruf menjadi kapital
// var_dump(strtoupper($string));

// strtolower() : Mengubah semua huruf menjadi huruf kecil
// var_dump(strtolower($var));

// ucwords() : Mengubah huruf pertama menjadi huruf kapital
// var_dump(ucwords($vin));
// var_dump(ucwords(strtolower($var)));

// str_repeat() : Mengulang string
// echo str_repeat($vin,7);

// substr() : Mengambil beberapa karakter dari data string
// var_dump(substr($string,6,12));

$buku = "buku";
// menggunakan kurung kurawal (curly brace) pada variable di dalam string
// echo "Saya sedang melakukan pem{$buku}an" . "\nSaya beli buku baru\n";
// echo "$buku baru \n";
// echo $buku . " baru" . "\n";

// mengubah tipe data
// menjadi string
$a = (string) 100;
// var_dump($a);
// menjadi integer
$b = (int) "220";
// var_dump($b);

// menjadi float
// $c = (float) trim(fgets(STDIN));
// var_dump($c);

$string = "Hello,World,Coding\n";
$array = (array) $string;
$r = ["Hello World Coding"];
// explode -> mengubah string menjadi array
$c = ["Hello", "World", "Coding"];
// $d = (string) $c;
// var_dump($array);
// var_dump(explode(",",$string));

// implode -> mengubah array menjadi string
// echo implode("-",$c);

echo rand(0, 9);