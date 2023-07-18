<?php

$angka = mt_rand(1, 9);

echo "Selamat datang di permainan Tebak Angka!\n";
echo "Tebak sebuah angka antara 1 dan 9. Anda memiliki 3 kali kesempatan!\n";

$nyawa = 1;
while ($nyawa <= 3) {
    echo "Tebakanmu (percobaan ke-$nyawa): ";
    $tebak = trim(fgets(STDIN));

    if (is_numeric($tebak)) {
        if ($tebak < $angka) {
                echo "Terlalu rendah! Coba lagi.\n";
            } elseif ($tebak > $angka) {
                echo "Terlalu tinggi! Coba lagi.\n";
            } else {
                echo "Tebakanmu benar! Angka yang kamu tebak adalah $angka.\n";
                exit();
        }

        if ($nyawa == 3) {
            echo "Kesempatanmu habis. Angka yang benar adalah $angka.\n";
            exit();
        }

        $nyawa++;
    } else {
        echo "Masukkan angka yang valid.\n";
    }
}

?>