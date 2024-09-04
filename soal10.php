<?php

// Daftar usia yang akan dianalisis
$usia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

// Variabel untuk menghitung jumlah dewasa dan anak-anak
$dewasa = 0;
$AnakAnak = 0;

// Loop untuk memeriksa setiap usia dalam daftar
foreach ($usia as $umur) {
    // Jika usia 17 tahun atau lebih, hitung sebagai dewasa
    if ($umur >= 17) {
        $dewasa++;  // Tambah jumlah dewasa
    } else {
        $AnakAnak++;  // Tambah jumlah anak-anak
    }
}

// Tampilkan daftar usia
echo "list usia: ";
foreach ($usia as $umur2) {
    echo $umur2 . ", ";  // Tampilkan setiap usia dengan koma sebagai pemisah
}

// Tambahkan baris kosong untuk pemisah
echo "<br>";

// Tampilkan jumlah kategori dewasa
echo "Jumlah kategori Dewasa: " . $dewasa;
echo "<br>";

// Tampilkan jumlah kategori anak-anak
echo "Jumlah kategori Anak Anak: " . $AnakAnak;

?>
