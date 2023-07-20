<?php
echo "~~~~~~~~~~~~~~~~~~~~~~~~~ WELCOME ~~~~~~~~~~~~~~~~~~~~~~~~~\n\n";
echo "===========================================================\n";
echo "=================== MINI GAME JANKENPON ===================\n";
echo "===========================================================\n\n";

$life = 3;  
$drew = 0;
$won = 0;
$lost = 0;

while(true){
retry:
echo "~~~~~~~~~~~~~~~~~~~~~~\n";
echo "Nyawa Anda Tersisa : $life\n";
echo "Pilih angka berikut : (1) Batu, (2) Gunting, (3) Kertas" . PHP_EOL;
echo "Pilih : ";
$playerChoice = trim(fgets(STDIN));

if ($playerChoice != '1' && $playerChoice != '2' && $playerChoice != '3') {
    echo "!!!!!!!!!!!!!!!!!!! Pilihan Tidak Valid !!!!!!!!!!!!!!!!!!!\n";
    goto retry;
}

$choices = ['1' => 'Batu', '2' => 'Gunting', '3' => 'Kertas'];
$computerChoice = array_rand($choices);

echo "Pilihan Kamu : " . $choices[$playerChoice] . PHP_EOL;
echo "Pilihan Komputer : " . $choices[$computerChoice] . PHP_EOL;
$draw = $playerChoice == $computerChoice;
$win = ($playerChoice == '1' && $computerChoice == '2') || ($playerChoice == '2' && $computerChoice == '3') || ($playerChoice == '3' && $computerChoice == '1');
$lose = !($draw && $win);

if ($draw){
    echo "Hasil: Seri!!!" . PHP_EOL;
    $drew++;
} elseif ($win){
    echo "Hasil: Kamu Menang!!!" . PHP_EOL;
    $won++;
} else{
    echo "Hasil: Kamu Kalah!!!" . PHP_EOL;
    $lost++;
}

$life--;

if($life == 0){
    echo "#####################\n";
    echo "Kesempatanmu Habis!!!\n";
    echo "Total Menang : $won\n";
    echo "Total Kalah : $lost\n";
    echo "Total Seri : $drew\n";
    if($won > $lost){        
        echo "******************************\n";
        echo "*** Selamat Kamu Menang!!! ***\n";
        echo "******************************\n";
    }else if($lost > $won){        
        echo "***********************************\n";
        echo "*** Sayang Sekali Kamu Kalah!!! ***\n";
        echo "***********************************\n";
    }else {        
        echo "***********************************************\n";
        echo "*** Seri!!! Ayo Buktikan Siapa Jagoannya!!! ***\n";
        echo "***********************************************\n";
    }
    back:
    echo "Coba Lagi ??? ";
    echo "Y/N : ";
    $try_again = strtoupper(trim(fgets(STDIN)));
    if ($try_again == "Y") {
        $life = 3;        
        $drew = 0;
        $won = 0;
        $lost = 0;
    } else if ($try_again == "N") {
        echo "<<<<<<<<<<<< Terimakasih Telah Bermain >>>>>>>>>>>>\n";
        exit;
    } else {
        echo "!!!!!!!!!!!!!!! Pilihan Tidak Valid !!!!!!!!!!!!!!!\n";
        goto back;
    }
}
}
?>