<?php
echo"<h3>Volume Kubus</h3>";
$sisi = 15;
$volume = $sisi*$sisi*$sisi;
echo"SiSi = $sisi <br>";
echo"Volume Kubus = Sisi * Sisi * Sisi = ($sisi*$sisi*$sisi) = $volume cm3<br>";

echo"<h3>Volume Balok</h3>";
$panjang=10;
$lebar = 10;
$tinggi = 15;
$volume = $panjang * $lebar * $tinggi;
echo"Panjang = $panjang <br> Lebar = $lebar <br> Tinggi = $tinggi<br>";
echo"Volume Balok = Panjang * Lebar * Tinggi = ($panjang * $lebar * $tinggi) = $volume <br>";

echo"<h3>Volume Tabung</h3>";
$diameter=24;
$jari_jari=$diameter/2;
$tinggi=7;
$phi= 22/7;
$volume=$phi *$jari_jari* $tinggi;
echo"Konstanta Phi = $phi <br> Jari-Jari = $jari_jari <br> Tinggi = $tinggi<br>";
echo"Volume Balok = Konstanta Phi * Jari-Jari * Tinggi = ($phi * $jari_jari * $tinggi) = $volume <br>";
?>