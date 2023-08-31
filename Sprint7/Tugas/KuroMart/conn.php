<?php
$conn = mysqli_connect('localhost', 'qrozyer', 'qrozyer00', 'KuroMart');
if(mysqli_connect_errno()){
    echo "Koneksi Database Gagal : " . mysqli_connect_error();
}