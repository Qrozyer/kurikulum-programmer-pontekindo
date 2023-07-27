<?php
echo "------------ Menghitung luas persegi -----------" . PHP_EOL;
echo "Ketikkan sisi persegi : ";
$sisi = trim(fgets(STDIN));
$luas = $sisi * $sisi;
$keliling = 4 * $sisi;
echo "Sisi : $sisi";
echo PHP_EOL;
echo "Luas : $sisi * $sisi = $luas" . PHP_EOL;
echo "Keliling : 4 * $sisi = $keliling" . PHP_EOL;


echo "\n";
echo "---------- Menghitung Persegi Panjang ----------" . PHP_EOL;
echo "Ketikkan Sisi Lebar : ";
$lebarp = trim(fgets(STDIN));
echo "Ketikkan Sisi Panjang : ";
$panjangp = trim(fgets(STDIN));

$luasp = $panjangp * $lebarp;
$kelilingp = 2 * ($panjangp + $lebarp);

echo "Luas = Panjang * Lebar " . PHP_EOL;
echo "Luas = $panjangp * $lebarp" . PHP_EOL;
echo "Luas = $luasp" . PHP_EOL;
echo "Keliling = 2 * (Panjang + Lebar)" . PHP_EOL;
echo "Keliling = 2 * ($panjangp + $lebarp)" . PHP_EOL;
echo "Keliling = $kelilingp" . PHP_EOL;


echo "\n";
echo "---------- Menghitung Segitiga ----------" . PHP_EOL;
echo "Ketikkan Tinggi : ";
$tinggi = trim(fgets(STDIN));
echo "Ketikkan Alas : ";
$alas = trim(fgets(STDIN));
echo "Ketikkan Sisi A : ";
$sisia = trim(fgets(STDIN));
echo "Ketikkan Sisi B : ";
$sisib = trim(fgets(STDIN));
echo "Ketikkan Sisi C : ";
$sisic = trim(fgets(STDIN));

$luast = 1 / 2 * ($alas * $tinggi);
$kelilingt = $sisia + $sisib + $sisic;

echo "Luas = 1/2 * Alas * Tinggi " . PHP_EOL;
echo "Luas = 1/2 * $alas * $tinggi" . PHP_EOL;
echo "Luas = $luast" . PHP_EOL;
echo "Keliling = Sisi a + Sisi b + Sisi c " . PHP_EOL;
echo "Keliling = $sisia + $sisib + $sisic " . PHP_EOL;
echo "Keliling = $kelilingt" . PHP_EOL;


echo "\n";
echo "---------- Menghitung Lingkaran ----------" . PHP_EOL;
echo "Ketikkan Jari-jari Lingkaran : ";
$r = trim(fgets(STDIN));

$luasl = 22/7 * ($r ** 2);
$kelilingl = 2 * 22/7 * $r;

echo "Luas = π * r * r " . PHP_EOL;
echo "Luas = π * $r * $r " . PHP_EOL;
echo "Luas = $luasl " . PHP_EOL;
echo "Keliling = 2 * π * r " . PHP_EOL;
echo "Keliling = 2 * π * $r " . PHP_EOL;
echo "Keliling = $kelilingl" . PHP_EOL;