<?php
class ParameterFungsiSalahException extends Exception {
    # kita buat kosongan sehingga kelas ini identik dengan parent-nya
  }
function rerataNilai (array $listNilai) {
  if (count($listNilai) < 1) {
    # jika array kosong, dia akan melempar objek Exception baru
    throw new ParameterFungsiSalahException('Array tidak boleh kosong!');
  }

  # hitung rata-rata
  $total = 0;
  foreach ($listNilai as $nilai) {
    $total += $nilai;
  }

  return $total / count($listNilai);
}

try {
    $arrayKosong = [];
    # panggil fungsi rerataNilai() dengan parameter array kosong
    $rataRata = rerataNilai($arrayKosong);
} catch (ParameterFungsiSalahException $error) {
  echo "Error: {$error->getMessage()}";
} catch (Exception $error){
  echo "Error: {$error->getMessage()}";
}  finally {
    echo "Aku akan senantiasa dieksekusi <br>";
  }