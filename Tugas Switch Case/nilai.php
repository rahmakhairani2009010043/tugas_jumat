<?php

 function kategoriNilai($nilai) {
    $kategori="";
    switch (true){

	case ($nilai >= 90 && $nilai<=100) :
		 $kategori="A <br/>";
		break;
        case ($nilai >= 80 && $nilai<=90) :
            $kategori="B <br/>";
           break;
           case ($nilai >= 70 && $nilai<=80) :
            $kategori="C <br/>";
           break;
           case ($nilai >= 0 && $nilai<=70) :
            $kategori="D <br/>";
           break;
           default:
           $kategori = "Nilai tidak valid";
   }

   return $kategori;
}

echo"Nilai A (90 - 100)<br> Nilai B (80 -90) <br> Nilai C (70-80) <br> Nilai D (0 -70)<br>";

$nilai = 87; 
$hasilKategori = kategoriNilai($nilai);
echo "Kategori nilai: " . $hasilKategori;

?>