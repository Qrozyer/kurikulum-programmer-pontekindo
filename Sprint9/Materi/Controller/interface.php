<?php


interface Kendaraan{ //method yg di dalamnya otomatis abstract
    public function berjalan();
    public function gas();
}

class Mobil implements Kendaraan{
    public function berjalan(){
        echo "Berjalan";
    }
    public function gas(){
        echo "ngeGAS";
    }
    public function apa(){
        echo "apa";
    }
}

$mobil = new Mobil();
$mobil->apa();