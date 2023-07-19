<?php
// balik:
// echo "Masukkan Produk : ";
// $produk = ucwords(strtolower(trim(fgets(STDIN))));
// echo "Masukkan Deskripsi Produk : ";
// $deskripsi = ucwords(strtolower(trim(fgets(STDIN))));
// harga:
// echo "Masukkan Harga Produk : ";
// $harga = trim(fgets(STDIN));
// echo "~~~~~~~~~~~~~~~~~~~~~\n";
// if(is_numeric($produk) || is_numeric($deskripsi)){
    // echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
    // echo "!!! Masukkan input yang benar !!!\n";
    // echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
    // goto balik;
// }
// echo "Nama Produk : $produk \n";
// echo "Deskripsi Produk : $deskripsi \n";
// if(is_numeric($harga)){
    // $harga = number_format($harga,0,"",".");
    // echo "Harga Produk : Rp. $harga \n";
// }else{
    // echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
    // echo "!!! Masukkan input yang benar !!!\n";
    // echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
    // goto harga;
// }


// Manipulasi Array

// implode : array -> string
// echo implode(",",$array1) . "\n";

// explode : string -> array
// var_dump(explode(" ", "Buku Pensil Pulpen Penghapus Penggaris"));

// count : menghitung jumlah data array
// echo count($array2).PHP_EOL;

// mengubah salah satu data dalam array
// $array2["Hijau"] = "Melon";
// // echo $array2["Hijau"];
// $array1[3] = "Papan Tulis";
// // var_dump($array1);
// foreach ($array1 as $key => $value) {
//     echo $key . " : " . $value . PHP_EOL;
// }

// menghapus data array
// unset($array2["Hijau"]);
// var_dump($array1);
// unset($array1);
// $array1 = NULL;
// var_dump($array1);
// unset($array1[1]);
// var_dump($array1);


$array1 = ["Buku", "Pensil", "Pulpen", "Penghapus", "Penggaris"];
$array2 = [
    "Merah" => "Apel",
    "Kuning" => "Lemon",
    "Hijau" => "Mangga",
];

// menambah data array
$array2[] = "Papan Tulis";
$array2["nomor"] = "Kertas";
$array2[] = "Tipe-X";
// var_dump($array2);

// menggabungkan beberapa array
// echo "Array 1 dan 2 digabungkan menjadi array 3 : \n";
// $array3 = array_merge($array1, $array2);
// $keys3 = array_keys($array3);
// $values3 = array_values($array3);
// var_dump($values3);
// foreach ($keys3 as $keys) {
//     echo $keys .PHP_EOL;
// }

// Mengurutkan data array
// $numer = [3,1,5,2,4];
// rsort($numer);//dari besar ke kecil
// sort($numer);// dari kecil ke besar
// foreach ($numer as $key => $value) {
//     echo $value . PHP_EOL;
// }

// shuffle untuk mengacak value array
$jankenpon = ['batu','kertas','gunting'];
shuffle($jankenpon);
echo $jankenpon[0];