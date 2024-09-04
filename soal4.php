<?php

// Mulai loop pertama dari 1 sampai 2
for ($x = 1; $x <= 2; $x++) {
    // Tambahkan baris baru untuk memisahkan tabel kali
    echo "<br>";
    
    // Loop kedua dari 10 turun ke 1
    for ($j = 10; $j >= 1; $j--) {
        // Hitung hasil perkalian x dan j
        $ja = $x * $j;
        
        // Tampilkan hasilnya dalam format tabel kali
        echo $j . "x" . $x . "=" . $ja . "<br>";
    }
}
?>


