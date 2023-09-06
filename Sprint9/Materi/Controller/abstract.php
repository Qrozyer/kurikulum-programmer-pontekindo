<?php

abstract class Kendaraan{
    static public $string = "Kendaraan";
    abstract function berjalan();
    abstract function gas();

    function apa(){
        echo "apa";
    }
}


class Mobil extends Kendaraan{
    
    static public $string = "Mobil";
    public function gas(){
        echo parent::$string;
        echo self::$string;
    }

    public function berjalan(){
        echo "Berjalan";
    }

    static function showMobil(){
        echo "Mobil";
    }
}


class Motor extends Kendaraan{
    public function berjalan(){
        echo "Berjalan";
    }

    function gas(){

    }
}

$mobil = new Mobil();
$mobil->gas();
// Mobil::gas();
Mobil::showMobil(); //pemanggilan static
echo Mobil::$string; //pemanggilan yang static