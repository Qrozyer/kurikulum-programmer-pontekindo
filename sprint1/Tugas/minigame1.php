<?php
$number = rand(1, 9);
echo "Selamat datang di permainan Tebak Angka!\n";
echo "Saya sudah memilih sebuah angka antara 1 dan 9. Coba tebak ya!\n";
$attempt = 1;
while ($attempt <= 3) {
    echo "Tebakanmu (percobaan ke-$attempt): ";
    $guess = trim(fgets(STDIN));
    if ($guess < $number) {
        echo "Terlalu rendah! Coba lagi.\n";        
    } 
    elseif ($guess > $number) {
        echo "Terlalu tinggi! Coba lagi.\n";
    } 
    else {
        echo "Tebakanmu benar! Angka yang kamu tebak adalah $number.\n";
        exit();
    }
    if ($attempt == 3) {
        echo "Kesempatanmu habis. Angka yang benar adalah $number.\n";
        exit();
    }
    $attempt++;
}
?>