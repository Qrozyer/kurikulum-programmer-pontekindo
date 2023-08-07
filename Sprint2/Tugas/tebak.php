<?php
echo "=========== MINI GAME GUESS THE NUMBER ==========\n\n";
echo "Selamat datang di permainan Tebak Angka!\n";
echo "Tebak sebuah angka antara 1 dan 9. Anda memiliki 3 kali kesempatan!\n";
$nyawa = 1;
$angka = mt_rand(1, 9);
while ($nyawa <= 3) {
    echo "(Percobaan ke-$nyawa) Tebakanmu : ";
    $tebak = trim(fgets(STDIN));

    if (is_numeric($tebak)) {
        if ($tebak < $angka) {
            echo "Terlalu rendah!\n";
        } elseif ($tebak > $angka) {
            echo "Terlalu tinggi!\n";
        } else {
            echo "\n~~~~~~~~~~~~ CONGRATS ~~~~~~~~~~~~\n\n";
            echo "Tebakanmu benar! Angka yang kamu tebak adalah $angka.\n";
            coba1:
            echo "Coba Lagi ??? ";
            echo "Y/N : ";
            $cobalagi = strtoupper(trim(fgets(STDIN)));
            if ($cobalagi == "Y") {
                $nyawa = 0;
                $angka = mt_rand(1, 9);
            } else if ($cobalagi == "N") {
                echo "Terimakasih Telah Bermain\n";
                exit;
            } else {
                echo "Masukkan input yang valid\n";
                goto coba1;
            }
        }

        if ($nyawa == 3) {
            echo "\n########## GAME OVER ##########\n\n";
            echo "Kesempatanmu habis! Angka yang benar adalah $angka.\n";
            coba:
            echo "Coba Lagi ??? ";
            echo "Y/N : ";
            $cobalagi = strtoupper(trim(fgets(STDIN)));
            if ($cobalagi == "Y") {
                $nyawa = 0;
                $angka = mt_rand(1, 9);
            } else if ($cobalagi == "N") {
                echo "Terimakasih Telah Bermain\n";
                exit;
            } else {
                echo "Masukkan input yang valid\n";
                goto coba;
            }
        }

        $nyawa++;

    } else {
        echo "Masukkan angka yang valid.\n";
    }
}