<?php

include_once "Motor.php";
include_once "Mobil.php";

$Kendaraan = new Motor();
$Kendaraan = new Mobil();

echo $Kendaraan->melaju();
echo "<br/>";
echo $Kendaraan->mengerem();
echo "<br/>";
echo $Kendaraan->membawapenumpang();