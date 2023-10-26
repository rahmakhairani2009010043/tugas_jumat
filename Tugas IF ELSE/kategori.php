<?php
$nama = "Rani";
$tinggi_badan = 1.55;
$berat_badan = 60;
$bmi= $berat_badan/($tinggi_badan*$tinggi_badan);
$kategori = kategoriBMI($bmi);

function kategoriBMI($bmi) {
if ($bmi < 17) {
    return "Kekurangan berat badan tingkat berat"; 
} elseif ($bmi >= 17 && $bmi < 18.5) {
    return "Kekurangan berat badan tingkat rendah";
} elseif ($bmi >= 18.5 && $bmi < 25) {
    return "Normal";
} elseif ($bmi >= 25 && $bmi < 27) {
    return "Kelebihan berat badan tingkat ringan ";
} else {
    return "Kelebihan berat badan tingkat berat";
}
}
echo"Tinggi Badan = $tinggi_badan <br> Berat Badan = $berat_badan<br>";
 echo"Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk $kategori";
?>