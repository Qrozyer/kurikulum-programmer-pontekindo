<?php

// CRUD : Create, Read, Update, Delete

// $array = [];

// do{
//     //create
//     echo "Masukkan Data : ";
//     $input = trim(fgets(STDIN));
//     $index = count($array)+1;
//     $array[$index] = $input;
//     // $array[3] = "Syifa";
//     //read
//     foreach ($array as $key => $value) {
//         echo "$key. $value \n";    
//     }
//     echo "Edit data (y/n) ? ";
//     $e = trim(fgets(STDIN));
//     if($e == "y"){
//         //update
//         echo "Pilih Data Yang Ingin Diedit : ";
//         $edit = trim(fgets(STDIN));
//         echo "Anda akan mengedit $array[$edit]\n";
//         echo "Masukkan Data Baru : ";
//         $update = trim(fgets(STDIN));
//         $array[$edit] = $update;
//     }
//     echo "Hapus data (y/n) ? ";
//     $h = trim(fgets(STDIN));
//     if($h == "y"){
//         //delete
//         //menimpa data array terlebih dahulu 
//         //barulah nanti akan dihapus data yang bagian akhir
//         echo "Pilih Data Yang Ingin Dihapus : ";
//         $delete = trim(fgets(STDIN));
//         echo "Anda akan mengdelete $array[$delete]\n";
//         for($i = $delete; $i < count($array); $i++){
//             $array[$i] = $array[$i+1];           
//         }
//         unset($array[count($array)]);
//     }
// }while(true);

/*
1. Syifa
2. Hanif
3. Dimas
4. Hafidz
5. Hafidz
*/

// Function : wadah yang berisi suatu program tertentu yang bisa kita gunakan kalau kita memanggilnya

//membuat function
function test(){
    echo "Hello World\n";
}

// $nama = "Fandy";
// $kelas = "9A";

//menggunakan 1 parameter
function notif($nama){//parameter : variable yang akan kita gunakan dalam function
    echo "$nama Telah Terdaftar\n";
}

// menggunakan keyword global
function Notif2(){
    global $nama, $kelas;
    echo "$nama Telah Terdaftar\n";
    echo $kelas;
}
// notif2();
// notif("Fandy"); // argument : value yang akan dikirimkan parameter // ketika memanggil function

// $daftar = true;
// if($daftar == true){
//     notif();
// }



// default value pada parameter
function sayHi($nama,$divisi,$greeting = "Good Morning"){
    echo "Hello $nama dari divisi $divisi! $greeting\n";
}

// sayHi();
// sayHi("Fandy","Sistem Informasi");

// echo "Masukkan Input : ";
// $input = trim(fgets(STDIN));
// echo $input .PHP_EOL;

//type declaration
function harusAngka(int $angka){
    echo $angka . "\n";
}

// harusAngka(2);

// function sum(int $a, int $b){
//     $t = $a + $b;
//     echo "$a + $b = $t\n";
//     // echo $a + $b;
// }

// sum("100", "100");

function cekBool(bool $a){
    var_dump($a);
}

// cekBool('wewetwetetv');

// variable-length-argument
function total(...$jumlah){ //hasil dari parameternya berupa tipe data array
    var_dump($jumlah);
    $total = 0;
    foreach ($jumlah as $value) {
        $total += $value;
        // echo $value .PHP_EOL;
    }
    echo "Total : $total\n";
}

function banyakNama(...$nama){
    var_dump($nama);
}


// banyakNama("Syifa", "Hanif", "Dimas", "Hafidz");


function pemisahNegPos(...$angka){
    echo "Negatif : ";
    foreach ($angka as $value) {
        if($value < 0){
            echo "$value,";
        }
    }
    echo "\n";
    echo "Positif : ";
    foreach ($angka as $value) {
        if ($value > 0) {
            echo "$value,";
        }
    }
    echo "\n";
}


// pemisahNegPos(-21,-8,-4,0,5,11,37);
// var_dump(-21,-8,-4,0,5,11,37);
// total(1,2,4,7,1,8);
// $array = [1,2,3,4,5,6];

function listName (...$nama){
    foreach ($nama as $value) {
        echo "$value \n";
    }
}

// listName("danu", "faqih", "hafidz");

// return & return type declaration
function sum(int $a, int $b):int
{
    $t = $a + $b;        
    return true;
}

// echo sum(100,100);

function coba1($a,$b,...$c){
    $d = $a + $b;
    echo $d."\n";
    foreach ($c as $value) {
        echo "$value,";
    }
}
// coba1(9,4,2,3,4,6,7);

// buat function dengan parameternya variable-length-argument yang mana function akan MENGEMBALIKAN nilai array dengan nama variablenya 'siswa'
// lalu ubah variable siswa menjadi string
// tampilkan menggunakan echo

// PR pahami return besok ditanya
function nama(...$siswa){return $siswa;}
echo implode("\n",nama("Fandy", "Hanif", "Dimas", "Hafidz"));