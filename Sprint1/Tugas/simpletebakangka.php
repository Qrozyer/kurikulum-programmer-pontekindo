<?php
echo "Welcome To My Game\n";
while(true){
echo "========== Game Tebak Angka ==========\n";
echo "Tebak sebuah angka antara 1 dan 9!\n";    
$computer = rand(1, 9);
echo "Masukkan tebakanmu : ";
$player = trim(fgets(STDIN));
if ($player == $computer) {
    echo "Tebakanmu benar! Angka yang kamu tebak adalah $computer.\n";
    exit;
} else {
    echo "Anda kurang beruntung. Angka yang benar adalah $computer. COBA LAGI!\n";  
}
}
