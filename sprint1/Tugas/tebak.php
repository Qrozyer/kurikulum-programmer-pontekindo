<?php

// // Fungsi untuk mengambil input dari pengguna melalui stdin
// function getInput()
// {
//     return trim(fgets(STDIN));
// }

// // Fungsi untuk memeriksa apakah tebakan pengguna benar atau salah
// function checkGuess($number, $guess)
// {
//     if ($guess < $number) {
//         echo "Terlalu rendah! Coba lagi.\n";
//     } elseif ($guess > $number) {
//         echo "Terlalu tinggi! Coba lagi.\n";
//     } else {
//         echo "Tebakanmu benar! Angka yang kamu tebak adalah $number.\n";
//         exit();
//     }
// }

// // Generate angka acak antara 1 dan 100
// $number = mt_rand(1, 100);

// echo "Selamat datang di permainan Tebak Angka!\n";
// echo "Saya sudah memilih sebuah angka antara 1 dan 100. Coba tebak ya!\n";

// while (true) {
//     echo "Tebakanmu: ";
//     $guess = getInput();

//     if (is_numeric($guess)) {
//         checkGuess($number, $guess);
//     } else {
//         echo "Masukkan angka yang valid.\n";
//     }
// }


// Fungsi untuk mengambil input dari pengguna melalui stdin
function getInput()
{
    return trim(fgets(STDIN));
}

// Fungsi untuk memeriksa apakah tebakan pengguna benar atau salah
function checkGuess($number, $guess, $attempt)
{
    if ($guess < $number) {
        echo "Terlalu rendah! Coba lagi.\n";
    } elseif ($guess > $number) {
        echo "Terlalu tinggi! Coba lagi.\n";
    } else {
        echo "Tebakanmu benar! Angka yang kamu tebak adalah $number.\n";
        exit();
    }

    if ($attempt == 3) {
        echo "Kesempatanmu habis. Angka yang benar adalah $number.\n";
        exit();
    }
}

// Generate angka acak antara 1 dan 10
$number = mt_rand(1, 10);

echo "Selamat datang di permainan Tebak Angka!\n";
echo "Saya sudah memilih sebuah angka antara 1 dan 100. Coba tebak ya!\n";

$attempt = 1;
while ($attempt <= 3) {
    echo "Tebakanmu (percobaan ke-$attempt): ";
    $guess = getInput();

    if (is_numeric($guess)) {
        checkGuess($number, $guess, $attempt);
        $attempt++;
    } else {
        echo "Masukkan angka yang valid.\n";
    }
}

?>

Anda dapat menjalankan kode tersebut melalui command line dan memiliki 3 kali kesempatan untuk menebak angka.
