<?php
// Daftar angka yang kita punya
$data = [80, 90, 75, 100, 85, 100, 66];

// Angka yang kita cari jumlah kemunculannya
$cari = 100;

// Hitung berapa kali angka $cari muncul dalam array $data
$hitung = array_count_values($data)[$cari];

// Tampilkan jumlah kemunculan angka $cari
echo $hitung;

?>
