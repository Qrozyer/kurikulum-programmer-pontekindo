<?php

// Soal 5
// variable scope
// global scope : variable yang dapat dipanggil dimana saja setelah letak pendeklarasian
// namun tidak bisa langsung digunakan dalam suatu function, sehingga butuh digunakan kata kunci global
// $g = "global";
// local scope : variable yang berada di dalam suatu function

// static scope : variable yang menggunakan kata kunci static pertama kali saat deklarasi function
// menjaga nilai variable bila si fungsi dijalankan lagi

// function tampil()
// {
//     // global $g;
//     $g = "local";
//     echo $g . PHP_EOL;
//     $g .= " tampil\n";
// }
// tampil();
// tampil();
// tampil();
// tampil();

// Soal 2
// $tinggi = 20;
// $alas = 12;
function menghitungLuasSegitiga($arrowFunc){
    echo "Luas : " . $arrowFunc(20,12);
}
// menghitungLuasSegitiga(fn ($tinggi,$alas) => 1/2 * $alas * $tinggi);

// Soal 3
// 
// 3. Masukkan Argumen ini dalam suatu fungsi bernama ubahData "Vario","Supra","Revo","Vixion","Mio","Beat", gunakan variable length argument dan ubah data tadi menjadi output : "Beat | Mio | Revo | Supra | Vario | Vixion |"
// Dengan variable function sebagai argumen. Pakai fungsi bawaan PHP yang mengubah array jadi string


// - Masukkan Argumen ini dalam suatu fungsi bernama ubahData "Vario","Supra","Revo","Vixion","Mio","Beat",
// - gunakan variable length argument
// - karena outputnya terurut maka kita menggunakan fungsi sort
// Dengan variable function sebagai argumen. Pakai fungsi bawaan PHP yang mengubah array jadi string
// - output : "Beat | Mio | Revo | Supra | Vario | Vixion |"
function ubahData($variable1,$parameter,...$motor){
    // var_dump($motor);
    $variable1($motor);
    // $parameter(); jalankan fungsi nya menggunakan tanda kurung
    echo $parameter(' | ', $motor);
}
// implode
$variable2 = "implode"; // membuat varible function
// ubahData('sort','implode',"Vario","Supra","Revo","Vixion","Mio","Beat");
// $variable = "ubahData";
// $variable1 = "tampil";


// Soal 1
// $data = [216, 769, 255, 512, 363, 121];
function tigaTertinggi(){
    // $data = [216, 769, 255, 512, 363, 121];
    // global $data;
    rsort($data);
    // var_dump($data);
    $no = 1;
    foreach($data as $key => $value){
        if($key < 3){
            echo $no ." : ". $value . PHP_EOL;
        }
        $no++;
    }
}
// tigaTertinggi();


// Soal 4
// echo "Jumlah Penduduk Desa Amegakure : ";
// $penduduk = trim(fgets(STDIN));
// $amegakure = function () use ($penduduk){
//     if($penduduk >= 200){
//         return "Padat Penduduk";
//     }else if($penduduk >= 100){
//         return "Cukup Penduduk";
//     }else{
//         return "Sedikit Penduduk";
//     }
// };
// echo "Keterangan : ";
// echo $amegakure() . PHP_EOL;

// Soal 6
// $nilaiSantri = [90, 85, 94, 77, 62, 88];
// require_once "baru.php";
// nilaiSantri($nilaiSantri);