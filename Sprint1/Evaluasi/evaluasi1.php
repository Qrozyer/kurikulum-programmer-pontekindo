<?php

// Soal 1
// != merupakan simbol untuk operator perbandingan 'tidak sama dengan' yang digunakan untuk membandingkan dua nilai atau dua variabel yang akan menghasilakn nilai true apabila kedua nilai tidak sama walaupun tipe datanya berbeda

// var_dump(1 != 2); // true
// var_dump(1 != "1"); // false
// var_dump(1 != 1); // false

// !== merupakan simbol untuk operator perbandingan 'tidak identik' yang digunakan untuk membandingkan dua nilai atau dua variabel yang akan menghasilakn nilai true apabila kedua nilai tidak identik (nilai dan tipe data tidak sama)

// var_dump(1 !== 2); // true
// var_dump(1 !== "2"); // true
// var_dump(1 !== "1"); // true
// var_dump(1 !== 1); // false

// Soal 2
// Variable : wadah yang berisi value dengan tipe data tertentu yang dimana value tersebut BISA DIUBAH
$variable = "tipe data string";
$variable = 1;

// Constanta : wadah yang berisi value dengan tipe data tertentu yang dimana value tersebut TIDAK BISA DIUBAH
define("CONSTANTA", "tipe data string");
// const CONSTANTA = 1;

// echo $variable;

// Soal 3
$array = [
    "Danu" => [
        "Nama" => "Danu",
        "Umur" => 17,
        "TTL" => "Jambi, 9 Oktober 2005"
    ],
    "Dimas" => [
        "Nama" => "Dimas",
        "Umur" => 20,
        "TTL" => "Baturaja, 1 Desember 2002"
    ],
    "Faqih" => [
        "Nama" => "Faqih",
        "Umur" => 17,
        "TTL" => "Yogyakarta, 31 Oktober 2005"
    ],
    "Hafidz" => [
        "Nama" => "Hafidz",
        "Umur" => 19,
        "TTL" => "Pontianak, 19 Juni 2004"
    ],
    "Hanif" => [
        "Nama" => "Hanif",
        "Umur" => 17,
        "TTL" => "Pagar Alam, 26 Oktober 2005"
    ],
    "Syifa" => [
        "Nama" => "Syifa",
        "Umur" => 22,
        "TTL" => "Surakarta, 25 April 2001"
    ],
    "Fandy" => [
        "Nama" => "Fandy",
        "Umur" => 23,
        "TTL" => "Sukoharjo, 10 Mei 2000"
    ]
];

// echo $array["Fandy"]["Nama"].PHP_EOL;

$array1 = ["Danu", "Dimas", "Faqih", "Hafidz", "Hanif", "Syifa", "Fandy"];
// var_dump(count($array1));

// for ($i = 2; $i < 6; $i++) {
//         echo "$no. ". $array1[$i].PHP_EOL;
//         $no++;
// }


$no = 1;
foreach ($array as $key => $value){
    echo "$no. $key\n";
    foreach ($value as $key1 => $value1){
        echo "$key1 : ".PHP_EOL;
    }
    $no++;
}


// Soal 4
// $budi = 50000;
// $jajan = 20000;
// $ibu = 5000;
// $budi -= $jajan; // penugasan
// $budi += $ibu; // penugasan

// $budi = $budi - $jajan + $ibu; // aritmatika
// // echo $budi.PHP_EOL;

// // Soal 5
// $a = 7;
// $b = 3;
// // $hasil = $a ** $b; // aritmatika
// $a **= $b; // penugasan
// // echo $a.PHP_EOL;

// // Soal 6
// $budi1 = "akhlak baik";
// $budi2 = "tidak good looking";
// $budi3 = "tidak good rekening";

// if($budi1 == "akhlak baik" && $budi2 == "good looking"){
//     $ayu = "Ayu : Saya Terima\n";
// } else if($budi1 == "akhlak baik" && $budi3 == "good rekening"){
//     $ayu = "Ayu : Saya Terima\n";
// } else if ($budi1 == "akhlak baik" && $budi2 == "good looking" && $budi3 == "good rekening"){
//     $ayu = "Ayu : Saya Terima\n";   
// }else {
//     $ayu = "Ayu : Saya Tidak Terima\n";
// }

// $budi = "Budi";
// $akhlakbaik = true;
// $goodlooking = false;
// $goodrekening = false;

// if($akhlakbaik == true && ($goodlooking == true || $goodrekening == true)){
//     $ayu = "Ayu : Saya Terima\n";
// }else{
//     $ayu = "Ayu : Saya Tidak Terima\n";
// }
// echo "Budi melamar ayu, dia memiliki akhlak yang baik namun tidak good looking dan tidak good rekening.
// Maka jawaban ayu : $ayu\n";

// Soal 7
// echo "Berat : ";
// $berat = (int) trim(fgets(STDIN));
// switch($berat){
//     case $berat<10 : 
//     echo "Ringan\n";
//     break;
//     case $berat<21 :
//     echo "Agak Ringan\n";
//     break;
//     case $berat<31 :
//     echo "Sedang\n";
//     break;
//     case $berat<41 :
//     echo "Berat\n";
//     break;
//     default :
//     echo "Sangat Berat\n";
//     break;
// }

