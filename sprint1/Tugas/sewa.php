<?php

do {
    echo "==================================\n";
    echo "=========== Sewa Motor  ==========\n";
    echo "==================================\n";
    echo "############# MENU ###############\n";
    echo "1. Daftar Sewa Motor\n";
    echo "2. Bayar Sewa Motor\n";
    echo "3. Keluar\n";
    echo "Pilih Menu : ";
    $menu = (int) trim(fgets(STDIN));
    if ($menu == 1) {
        echo "\n------------ Daftar Motor Yang Tersedia ------------\n";
        echo "1. Beat\n";
        echo "2. Supra\n";
        echo "3. Revo\n";
        echo "4. Ninja\n";
        echo "5. Vixion\n";
        echo "6. Keluar\n";
        echo "Pilih Motor : ";
        $pilih = (int) trim(fgets(STDIN));
        if ($pilih == 1) {
            echo "- Motor : Beat\n";
            echo "- Harga Sewa Motor Per Hari : Rp. 70000\n";
            $motor = "Beat";
            $harga = 70000;
            echo "Nama Penyewa : ";
            $penyewa = trim(fgets(STDIN));
            echo "Batas Hari Sewa Motor : ";
            $batas = (int) trim(fgets(STDIN));
            echo "\n~~~~~~~~~~ Pendaftaran Terkonfirmasi ~~~~~~~~~\n\n";
            echo "Nama Penyewa : $penyewa\n";
            echo "Motor : $motor\n";
            echo "Batas Hari Sewa Motor : $batas Hari\n";
        } else if ($pilih == 2) {
            echo "- Motor : Supra\n";
            echo "- Harga Sewa Motor Per Hari : Rp. 80000\n";
            $motor = "Supra";
            $harga = 80000;
            echo "Nama Penyewa : ";
            $penyewa = trim(fgets(STDIN));
            echo "Batas Hari Sewa Motor : ";
            $batas = (int) trim(fgets(STDIN));
            echo "\n~~~~~~~~~~ Pendaftaran Terkonfirmasi ~~~~~~~~~\n\n";
            echo "Nama Penyewa : $penyewa\n";
            echo "Motor : $motor\n";
            echo "Batas Hari Sewa Motor : $batas Hari\n";
        } else if ($pilih == 3) {
            echo "- Motor : Revo\n";
            echo "- Harga Sewa Motor Per Hari : Rp. 80000\n";
            $motor = "Revo";
            $harga = 80000;
            echo "Nama Penyewa : ";
            $penyewa = trim(fgets(STDIN));
            echo "Batas Hari Sewa Motor : ";
            $batas = (int) trim(fgets(STDIN));
            echo "\n~~~~~~~~~~ Pendaftaran Terkonfirmasi ~~~~~~~~~\n\N";
            echo "Nama Penyewa : $penyewa\n";
            echo "Motor : $motor\n";
            echo "Batas Hari Sewa Motor : $batas Hari\n";
        } else if ($pilih == 4) {
            echo "- Motor : Ninja\n";
            echo "- Harga Sewa Motor Per Hari : Rp. 100000\n";
            $motor = "Ninja";
            $harga = 100000;
            echo "Nama Penyewa : ";
            $penyewa = trim(fgets(STDIN));
            echo "Batas Hari Sewa Motor : ";
            $batas = (int) trim(fgets(STDIN));
            echo "\n~~~~~~~~~~ Pendaftaran Terkonfirmasi ~~~~~~~~~\n\n";
            echo "Nama Penyewa : $penyewa\n";
            echo "Motor : $motor\n";
            echo "Batas Hari Sewa Motor : $batas Hari\n";
        } else if ($pilih == 5) {
            echo "- Motor : Vixion\n";
            echo "- Harga Sewa Motor Per Hari : Rp. 100000\n";
            $motor = "Vixion";
            $harga = 100000;
            echo "Nama Penyewa : ";
            $penyewa = trim(fgets(STDIN));
            echo "Batas Hari Sewa Motor : ";
            $batas = (int) trim(fgets(STDIN));
            echo "~~~~~~~~~~ Pendaftaran Terkonfirmasi ~~~~~~~~~\n";
            echo "Nama Penyewa : $penyewa\n";
            echo "Motor : $motor\n";
            echo "Batas Hari Sewa Motor : $batas Hari\n";
        } else if ($pilih == 6) {
            echo "Terimakasih Telah Menggunakan Aplikasi Ini\n";
            exit;
        } else {
            echo "Menu Tidak Ada\n";
        }
    } else if ($menu == 2) {
        if (isset($penyewa)) {
            echo "Nama Penyewa : $penyewa\n";
            echo "Merek Motor : $motor\n";
            echo "Batas Hari Sewa Motor : $batas Hari\n";
            echo "Jumlah Hari Sewa : ";
            $hari = (int) trim(fgets(STDIN));
            $jumlah = $harga * $hari;
            $denda = $hari - $batas;
            echo "~~~~~~~ Total Pembayaran ~~~~~~~~~\n";
            echo "Nama Penyewa : $penyewa\n";
            echo "Merek Motor : $motor\n";
            echo "Batas Hari Sewa Motor : $batas Hari\n";
            echo "Jumlah Hari Sewa : $hari Hari\n";
            echo "Harga Sewa Motor : Rp. $jumlah\n";
            if($denda >= 5){
                $biaya_denda = 50000;
                $total = $jumlah + $biaya_denda;
                echo "Biaya Denda : Rp. $biaya_denda\n";
                echo "Total Pembayaran : Rp. $jumlah + Rp. $biaya_denda = Rp. $total\n";
            }else if($denda == 4){
                $biaya_denda = 40000;
                $total = $jumlah + $biaya_denda;
                echo "Biaya Denda : Rp. $biaya_denda\n";
                echo "Total Pembayaran : Rp. $jumlah + Rp. $biaya_denda = Rp. $total\n";
            }else if($denda == 3){
                $biaya_denda = 30000;
                $total = $jumlah + $biaya_denda;
                echo "Biaya Denda : Rp. $biaya_denda\n";
                echo "Total Pembayaran : Rp. $jumlah + Rp. $biaya_denda = Rp. $total\n";                
            }else if($denda == 2){
                $biaya_denda = 20000;
                $total = $jumlah + $biaya_denda;
                echo "Biaya Denda : Rp. $biaya_denda\n";
                echo "Total Pembayaran : Rp. $jumlah + Rp. $biaya_denda = Rp. $total\n";                
            }else if($denda == 1){
                $biaya_denda = 10000;
                $total = $jumlah + $biaya_denda;
                echo "Biaya Denda : Rp. $biaya_denda\n";
                echo "Total Pembayaran : Rp. $jumlah + Rp. $biaya_denda = Rp. $total\n";                
            } else {
                $biaya_denda = 0;
                $total = $jumlah + $biaya_denda;
                echo "Biaya Denda : Rp. $biaya_denda\n";
                echo "Total Pembayaran : Rp. $jumlah + Rp. $biaya_denda = Rp. $total\n";                
            }
        } else {
            echo "Data Penyewa Tidak Ada\n";
        }
    } else if ($menu == 3) {
        echo "Terimakasih Telah Menggunakan Aplikasi Ini\n";
        exit;
    } else {
        echo "Menu Tidak Ada\n";
    }
    echo "Balik Ke Menu ? (Y/N) : ";
    $exit = strtoupper(trim(fgets(STDIN)));
} while ($exit == "Y");

echo "Terimakasih Telah Menggunakan Aplikasi Ini\n";


// Tugas Aplikasi Kasir
// echo "Barang 1 : ";
// $barang1 = trim(fgets(STDIN));
// echo "Harga 1 : ";
// $harga1 = trim(fgets(STDIN));
// echo "Barang 2 : ";
// $barang2 = trim(fgets(STDIN));
// echo "Harga 2 : ";
// $harga2 = trim(fgets(STDIN));
// echo "Barang 3 : ";
// $barang3 = trim(fgets(STDIN));
// echo "Harga 3 : ";
// $harga3 = trim(fgets(STDIN));
// // penugasan
// $total = 0;
// $total += $harga1;
// $total += $harga2;
// $total += $harga3;
// echo "$harga1 + $harga2 + $harga3 = $total\n";

// // pengkondisian
// if($total < 10000){
//     $promo = 0;
// }else if($total < 20000){
//     $promo = 1000;
// }else if($total < 30000){
//     $promo = 2000;
// }else if($total < 40000){
//     $promo = 3000;
// }else if($total < 50000){
//     $promo = 4000;
// }else{
//     $promo = (int) $total * 0.1;
// }
// echo "total = $total - $promo\n";
// $total -= $promo; //penugasan
// echo "total = $total\n";