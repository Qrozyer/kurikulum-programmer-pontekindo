<?php
// procedural
// $conn = mysqli_connect("localhost", "root", "", "market");

// if (mysqli_connect_errno()) {
//     echo "Koneksi Database Gagal : " . mysqli_connect_error();
// }

// echo "Koneksi Database Berhasil";


// OOP - mysqli
// object oriented
// $mysqli = new mysqli("localhost", "root", "", "market");

// if($mysqli->connect_errno) {
//     echo "Koneksi Database Gagal : " . $mysqli->connect_error;
// }

// echo "Koneksi Berhasil. Host info: " . mysqli_get_host_info($mysqli);

// OOP - PDO
// try{
//     $pdo = new PDO("mysql:host=localhost;dbname=market", "root", "");

//     if($pdo){
//         echo "Koneksi Database Berhasil";
//     }

// }catch(PDOException $e){
//     echo $e->getMessage();
// }
phpinfo();
?>