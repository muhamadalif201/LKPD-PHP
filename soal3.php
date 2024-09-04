<?php
// Mulai dari angka 1 sampai 11
for ($x = 1; $x <= 11; $x++) {
    // Cek apakah $x adalah angka ganjil
    if ($x % 2 == 1) {
        // Kalau $x ganjil, loop lagi dari 1 sampai 11
        for ($j = 1; $j <= 11; $j++){
            // Cek kalau $j adalah 5
            if ($j == 5) {
                // Tampilkan hasil perkalian $x dengan $j
                echo $x . "x" . $j . "=" . $x * $j . "<br>";     
            }
        }
    }
}
?>
