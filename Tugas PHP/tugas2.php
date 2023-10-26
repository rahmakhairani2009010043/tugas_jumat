<?php 
$n = 9; // Inisialisasi variabel $n dengan nilai 9.

for ($i = 1; $i < $n + 1; $i++) {
    // Perulangan pertama dimulai dengan $i = 1, dan berjalan hingga $i < 10.
    // Perulangan ini digunakan untuk mengatur baris pada pola bintang.

    for ($j = 0; $j <= $n - $i; $j++) {
        // Perulangan kedua dimulai dengan $j = 0, dan berjalan hingga $j kurang dari atau sama dengan (9 - $i).
        // Perulangan ini digunakan untuk mencetak karakter bintang (*) sebanyak $n - $i + 1 kali pada setiap baris.

        echo "*"; // Mencetak karakter bintang (*).
    }
    
    echo "<br>"; // Mencetak tag <br> untuk membuat baris baru setelah selesai mencetak bintang pada baris tersebut.
}
?>
