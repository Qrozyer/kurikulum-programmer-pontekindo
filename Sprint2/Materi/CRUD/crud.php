<?php
// CRUD : Create, Read, Update, Delete

$array = [];

do{
    //create
    echo "Masukkan Data : ";
    $input = trim(fgets(STDIN));
    $index = count($array)+1;
    $array[$index] = $input;
    // $array[3] = "Syifa";
    //read
    foreach ($array as $key => $value) {
        echo "$key. $value \n";    
    }
    echo "Edit data (y/n) ? ";
    $e = trim(fgets(STDIN));
    if($e == "y"){
        //update
        echo "Pilih Data Yang Ingin Diedit : ";
        $edit = trim(fgets(STDIN));
        echo "Anda akan mengedit $array[$edit]\n";
        echo "Masukkan Data Baru : ";
        $update = trim(fgets(STDIN));
        $array[$edit] = $update;
    }
    echo "Hapus data (y/n) ? ";
    $h = trim(fgets(STDIN));
    if($h == "y"){
        //delete
        //menimpa data array terlebih dahulu 
        //barulah nanti akan dihapus data yang bagian akhir
        echo "Pilih Data Yang Ingin Dihapus : ";
        $delete = trim(fgets(STDIN));
        echo "Anda akan mengdelete $array[$delete]\n";
        for($i = $delete; $i < count($array); $i++){
            $array[$i] = $array[$i+1];           
        }
        unset($array[count($array)]);
    }
}while(true);