<?php

$data = [
    "id" => 582,
    "username" => "Fulan",
    "email" => "fulan@gmail.com",
    "password" => "123fulan321",
    "password_confirmation" => "123fulan321",
];

// 5-7
$data["nomor_telepon"] = "08123456789";
unset($data["password_confirmation"]);
$data["username"] = "Fandy";

foreach ($data as $a => $b){
    // echo "$a : $b \n";
}

// 3
// $string = 'Aqidah & Fiqih & Hadits & Tafsir & Tajwid & Adab';
// var_dump(explode('&', $string));

// 4
// $array = [-2, 4, -18, 9, 0, 21, -5];
// echo "Urutan besar ke kecil : ";
// rsort($array); // jawaban
// echo implode(", ", $array);
// foreach ($array as $key => $value) {
//     echo "$value,";
// }

echo "\n";
// echo "Negatif : ";
// sort($array);
// foreach ($array as $key1 => $value1) {
//     if($value1 < 0){
//         // echo "$value1,";
//     }
// }
// // echo "\n";
// // echo "Positif : ";
// foreach ($array as $key1 => $value1) {
//     if ($value1 > 0) {
//         // echo "$value1,";
//     }
// }
// echo "\n";

// 1
// echo "Masukkan Nama Produk : ";
// $nama_produk = strtoupper(trim(fgets(STDIN)));
// // echo strtoupper($nama_produk);
// echo "Masukkan Deskripsi Produk : ";
// $deskripsi = trim(fgets(STDIN));
// echo "Masukkan Kode Produksi : ";
// $kode = trim(fgets(STDIN));
// echo "Nama Produk : $nama_produk\n";
// if (str_word_count($deskripsi) > 4) {
//     echo "Deskripsi terlalu panjang\n";
// } else {
//     echo "Deskripsi : $deskripsi\n";
// }
//     // true                 true 
// if(strlen($kode) > 8 || !is_numeric($kode)){
//     echo "Input Invalid\n";
// }else{
//     echo "Kode Produksi : $kode\n";
// }


// 2
// echo "Masukkan Kode Item: ";
// $item = strtoupper(trim(fgets(STDIN)));
// $kode2 = substr($item,0,2); //index 0 ambil 2 karakter // karakter no 1-2
// $kode1 = substr($item,0,1); // index 0 ambil 1 karakter // karakter no 1
// $kode12 = substr($item,1,1); // index 1 ambil 1 karakter // karakter no 2
// if(is_numeric($kode2) && $kode2 < 50){
//     echo "Item Rare\n";
// }elseif(is_numeric($kode2) && $kode2 >= 50){
//     echo "Item Super Rare\n";
// }elseif($kode1 == 'A' || $kode1 == 'B' || $kode1 == 'C'){
//     echo "Item Unique\n";
// }elseif($kode1 == 'D' || $kode1 == 'E' || $kode1 == 'F'){
//     echo "Item Legendary\n";
// }elseif(is_numeric($kode1) && is_string($kode12) || is_string($kode1) && is_numeric($kode12)){
//     echo "Item Ultra Rare\n";
// }else{
//     echo "Item Common\n";
// }

// $input = trim(fgets(STDIN));
// $input = strtoupper(trim(fgets(STDIN)));
// // echo strtoupper($input)."\n";
// echo "$input\n";

// echo strtolower("AFNEBWOIFN\n");
// echo ucwords("iwehgo iwhefoi oihwoief woihweoifh oihoiwef");
// echo ucfirst("iwehgo iwhefoi oihwoief woihweoifh oihoiwef");

// $v = str_word_count("iwehgoiwhefoi oihwoief woihweoifh oihoiw ef");
// if($v > 4){
//     echo "Deskripsi terlalu panjang\n";
// }else{
//     echo "jumlah kata : $v\n";   
// }

// $r = strlen("iwehgoiwhefoi oihwoief woihweoifh oihoiw ef");
// $f = "23534";
// if(!is_numeric($f) || strlen($f) > 8){ // and true bila ada 1 true
//     echo "dia bukan numeric";
// }else{
//     echo "ini numeric";
// }

// echo substr("iweh &oi#@* oi%hwoief woihweoifh oihoiw ef", 8, 3);

// echo implode("/",[1,2,3,4,5]);
// var_dump(explode("$",'iwehgoiwhe$foi oihwoief woihwe$oifh oihoi$w ef'));
// sort(4,1,8,5,2); // utk array
$variable = [5,52,2,"h","ge",23,"g","er",3,4];
$variable["nama"] = "asfaf";
unset($variable[4]);


foreach ($variable as $key => $value) {
        echo "$key. $value\n";
    
}
