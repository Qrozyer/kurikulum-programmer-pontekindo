<?php
// buat program menghitung keliling persegi pakai arrow function sebagai argumen dari variable function gunakan variable luar dari function arrow
// echo "SISI : ";
// $sisi = trim(fgets(STDIN));
function nama ($keterangan,$hasilkeliling){
    echo"$keterangan : " . $hasilkeliling();
};
// $j = "nama";
// $j("Keliling", fn() => 4*$sisi);
    
function keliling($keliling){
        echo "SISI : ";
        $argumen = trim(fgets(STDIN));
        echo "Keliling : " . $keliling($argumen);
}
// keliling(fn($parameter) => 4*$parameter);




// callback function
function Naruto ($cita, callable $jadi_uppercase):string{
    // $jadi_uppercase = "strtoupper";
    // $jadi_uppercase();
    // $hasilnya = $jadi_uppercase($cita);

    $hasilnya = call_user_func($jadi_uppercase, $cita);
    return "Saya akan menjadi " . $hasilnya;
}
// $var = "strtolower";
// if(is_callable($var)){
//     echo Naruto("HOKAGE",$var);
// }
// echo Naruto("hokage", function($name) { return strtoupper($name);});
// strtopper($cita);


// recursive function
function factorial($angka){
    if($angka == 0){
        return 1;
    }
    return $angka * factorial($angka-1);
}

// echo factorial(8);

// var_dump(is_float(142.34));

// variable scope 
// global
$nam3 = "Fandy"; // global

function Nam3(){
    // global $nam3;
    $nam3 = "Fandy"; // local
    echo $nam3;
}
// Nam3();

function inc(){
    static $i = 0;
    echo "$i\n";
    $i++;
}
// inc();
// inc();
// inc();
// inc();


function sayHai($nama){
    echo "Hai $nama\n";
}










// Konsep CRUD : Create, Read, Update, Delete
// Konsep MVC : Model, View, Controller

// Model : data yang akan diolah oleh controller
// View : data yang akan ditampilkan oleh controller
// Controller : fungsi yang akan dijalankan untuk memanipulasi suatu data


