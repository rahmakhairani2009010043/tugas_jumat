<?php 
$n = 9; // Inisialisasi variabel $n dengan nilai 9.

for ($i = 1; $i < $n + 1; $i++) {
    // Perulangan pertama dimulai dengan $i = 1, dan berjalan hingga $i < 10.
    // Perulangan ini digunakan untuk mengatur baris pada pola.

    for ($j = 0; $j < $i; $j++) {
        // Perulangan kedua dimulai dengan $j = 0, dan berjalan hingga $j < $i.
        // Perulangan ini digunakan untuk mencetak nilai $j pada setiap baris.

        echo "$j"; // Mencetak nilai $j.
    }
    
    echo "<br>"; // Mencetak tag <br> untuk membuat baris baru setelah selesai mencetak nilai $j pada baris tersebut.
}
?>
