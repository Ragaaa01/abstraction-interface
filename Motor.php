<?php

include_once "Kendaraan.php";

class Motor implements Kendaraan{
    public function melaju():void{
        echo "Motor melaju dengan lambat";
    }

    public function mengerem(): void{
        echo "Motor mengerem secara mendadak";
    }

    public function membawapenumpang(): void{
        echo "Motor hanya bisa membawa 2 penumpang";
    }
}