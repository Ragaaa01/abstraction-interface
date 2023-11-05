<?php

include_once "Kendaraan.php";

class Mobil implements Kendaraan{
    public function melaju():void{
        echo "Mobil melaju dengan cepat";
    }

    public function mengerem(): void{
        echo "Mobil mengerem secara perlahan";
    }

    public function membawapenumpang(): void{
        echo "Mobil membawa banyak penumpang";
    }
}