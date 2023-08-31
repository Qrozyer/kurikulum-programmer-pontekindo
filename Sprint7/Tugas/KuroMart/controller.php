<?php
include_once "conn.php";

function index(){
    global $conn;
    $index =  mysqli_query($conn,"SELECT * FROM product_detail");
    return $index;
}

function create($data){
    global $conn;
    $nama = $data['nama'];
    $merek = $data['merek'];
    $deskripsi = $data['deskripsi'];
    $stok = $data['stok'];
    
    mysqli_query($conn,"INSERT INTO product_detail (name,brand,description,stock) VALUES ('$nama','$merek','$deskripsi',$stok)");

    return mysqli_affected_rows($conn);
}

if(isset($_POST['produk'])){    
    if (create($_POST) > 0){
    echo "
    <script>
        alert('Produk Berhasil Disimpan');
        document.location.href = 'index.php';    
    </script>
    ";
    } else {
    echo "
    <script>
        alert('Produk Gagal Disimpan');
        document.location.href = 'create.php';    
    </script>
    ";
    }
}