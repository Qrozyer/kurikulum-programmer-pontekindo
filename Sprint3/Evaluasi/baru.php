<?php

function nilaiSantri($nilai){
    echo "Nilai Terkecil : " . min($nilai) . PHP_EOL;
    echo "Nilai Terbesar : " . max($nilai) . PHP_EOL;
    echo "Rata-rata : " . array_sum($nilai) / count($nilai) . PHP_EOL;
}