<?php
// Comment 
// 1 baris
# 1 bari

/*
Ini
Banyak
Baris
*/

// Tipe Data Array


// Jenis-jenis array
// Array Numerik -> indexnya berupa angka yang dimana dimulai dari angka 0
$data = ["string",321,true,null,-12.3];
// var_dump($data);
// echo $array[0];
// echo PHP_EOL;

// Array assosiatif -> indexnya/ array key bisa kita atur sendiri
// Array assosiatif == Map (di bahasa pemrograman lain)
// $arrayAssoc = array(
//     "pertama" => 77.2, 
//     55 => "akhirudin", 
//     31 => false
// );

$data2 = ["saya" => "Fulan", 2 => "Fandy", "fandy" => true];

// var_dump($data2);

// var_dump($arrayAssoc);
// echo $arrayAssoc["kedua"];

// Array di dalam array / multidimensi
$fandy = [
    "id" => 1,
    "name" => "fandy",
    "age" => 23,
    "address" => [
        "region" => "bantul",
        "city" => "yogya",
        "country" => "indo"
    ]
];

$biasa = [[1,2,3],[1 => "saya",2 => "saya",],[]];

// var_dump($fandy);
// echo $fandy["address"]["region"][2];
// echo PHP_EOL;

// echo $array[0];
// echo PHP_EOL;
// $array[0] = "newstring";
// echo $array[0];
// echo PHP_EOL;

// Nanti menyusul insyaAllah ada materi mengenai manipulasi array dan string


// Macam-macam operator pada PHP
// Operator Aritmatika -> seperti matematika misal penjumlahan, pengurangan, dsb
// Operand -> Yang dioperasikan
// Maka nanti operand dari aritmatika adalah tipe data number

// Penjumlahan -> +
$num1 = 12;
$num2 = 4;

// echo "num1 = $num1" . PHP_EOL;
// echo "num2 = $num2" . PHP_EOL;
// echo "Penjumlahan :";
// echo $num1 + $num2;
// echo "\n";

// // Pengurangan -> -
// echo "Pengurangan :";
// echo $num1 - $num2;
// echo "\n";

// // Perkalian -> *
// echo "Perkalian :";
// echo $num1 * $num2;
// echo "\n";

// // Pembagian -> /
// echo "Pembagian :";
// echo $num1 / $num2;
// echo "\n";

// // Pangkat -> **
// echo "Pangkat :";
// echo $num1 ** $num2;
// echo "\n";

// // Modulus (Sisa hasil bagi) -> %
// echo "Modulus :";
// echo 17 % 5;
// echo "\n";
// echo "\n";
// $num1 = 22;
// echo $num1;
// echo "\n";


// Operator Penugasan
// Ditambah -> +=
$angka1 = 2;
$angka2 = 4;

// $angka1 += 17;
// $angka1 = $angka1 + 17;
// echo $angka1;
// echo "\n";

// dikurang -> -=
// $angka1 -= $angka2;
// echo $angka1;
// dikali -> *=
// $angka1 *= $angka2;
// echo $angka1
// dibagi /=
// $angka1 /= $angka2;
// echo $angka1;
// pangkat **=
// $angka1 **= $angka2;
// echo $angka1;
// modulus %=
// $angka2 %= $angka1;
// echo $angka2;

// echo "\n";

// Ambil input lewat cli/terminal

// trim adalah fungsi bawaan php untuk menghapus spasi pada awal dan akhir data
// $misal = " faqih \n";
// echo trim($misal);
// fgets adalah fungsi untuk mengambil inputan dari cli/terminal
// STDIN adalah standar input -> tempat untuk menyimpan data sebelum ditampilkan
// echo "------------ Menghitung luas persegi -----------" . PHP_EOL;
// echo "Ketikkan sisi persegi : ";
// $sisi = strtolower(ucwords(trim(fgets(STDIN))));
// echo $sisi;
// $luas = $sisi * $sisi;
// $keliling = 4 * $sisi;
// echo "Sisi : $sisi";
// echo PHP_EOL;
// echo "Luas : $sisi * $sisi = $luas" . PHP_EOL;
// echo "Keliling : 4 * $sisi = $keliling" . PHP_EOL;

$input = (float) trim(fgets(STDIN));
// var_dump($input);