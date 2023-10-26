<?php
echo "<h3>Luas Persegi</h3>";
$sisi = 14;
$luas_persegi = $sisi * $sisi; 
echo "Panjang sisi = $sisi <br>";
echo "Luas persegi = SiSi * SiSi = ($sisi x $sisi) = $luas_persegi <br>";


echo "<h3>Luas Persegi Panjang</h3>";
$panjang = 10;
$lebar = 13;
$luas_persegi_panjang = $panjang * $lebar;
echo "Panjang = $panjang <br> Lebar= $lebar <br>";
echo "Luas Persegi Panjang = Panjang * Lebar = ($panjang * $lebar) = $luas_persegi_panjang <br>"; 

echo "<h3>Luas Segitiga</h3>";
$alas = 7;
$tinggi = 10;
$luas_segitiga = 1/2 * $alas * $tinggi;
echo" Alas= $alas <br> Tinggi = $tinggi<br>";
echo"Luas Segitiga = 1/2 * Alas * Tinggi = 1/2*($alas*$tinggi) = $luas_segitiga<br>";

echo "<h3>Luas Lingkaran</h3>";
$jari_jari = 20;
$luas_lingkaran= 22/7 * $jari_jari * $jari_jari;
echo"Jari-Jari = $jari_jari<br>";
echo "Luas lingkaran = 22/7 * Jari Jari * Jari Jari = ". round($luas_lingkaran,2) ."<br>";

echo "<h3>Luas JaJar Genjang</h3>";
$alas = 12;
$tinggi = 15;
$luas_jajargenjang = $alas * $tinggi;
echo" Alas= $alas <br> Tinggi = $tinggi<br>";
echo"Luas JaJar Genjang = Alas * Tinggi = ($alas*$tinggi) = $luas_jajargenjang<br>";

?>