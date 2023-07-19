<?php
balik:
echo "Masukkan Produk : ";
$produk = ucwords(strtolower(trim(fgets(STDIN))));
echo "Masukkan Deskripsi Produk : ";
$deskripsi = ucwords(strtolower(trim(fgets(STDIN))));
harga:
echo "Masukkan Harga Produk : ";
$harga = trim(fgets(STDIN));
echo "~~~~~~~~~~~~~~~~~~~~~\n";
if(is_numeric($produk) || is_numeric($deskripsi)){
    echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
    echo "!!! Masukkan input yang benar !!!\n";
    echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
    goto balik;
}
echo "Nama Produk : $produk \n";
echo "Deskripsi Produk : $deskripsi \n";
if(is_numeric($harga)){
    $harga = number_format($harga,0,"",".");
    echo "Harga Produk : Rp. $harga \n";
}else{
    echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
    echo "!!! Masukkan input yang benar !!!\n";
    echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
    goto harga;
}

