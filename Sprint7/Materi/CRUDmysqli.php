<?php
$conn = mysqli_connect('localhost', 'root', '', 'market');
if(mysqli_connect_errno()){
    echo "Koneksi Database Gagal : " . mysqli_connect_error();
}else{
    echo "Koneksi Database Berhasil";
}


$tampilPenjual = mysqli_query($conn, "SELECT * FROM penjual");

function tambahProduk($data){
    $name = $data['name'];
    $stock = $data['stock'];
    global $conn;
    mysqli_query($conn, "INSERT INTO produk (name, stock) VALUES ('$name','$stock')");
}

function tampilProduk(){
    $tampilProduk = mysqli_query($conn, "SELECT * FROM produk");
}
?>