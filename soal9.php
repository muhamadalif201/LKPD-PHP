<?php
// Jumlah uang yang akan dipecah
$uang = 150000;

// Daftar pecahan uang yang tersedia
$pecahan = [100000, 50000, 20000, 500];

// Array untuk menyimpan hasil pecahan
$hasil = [];

// Loop untuk setiap nilai pecahan
foreach ($pecahan as $nilai) {
    // Hitung berapa banyak lembar dari pecahan ini yang bisa digunakan
    $hasil[$nilai] = intdiv($uang, $nilai);
    // Kurangi jumlah uang dengan total yang sudah dipakai
    $uang = $uang % $nilai;
}

// Tambahkan jarak kosong sebelum hasil
echo "<br>";
echo "<br>";

// Tampilkan header untuk hasil
echo "Lembar Rupiah";
echo "<br>";

// Loop untuk menampilkan hasil pecahan
foreach ($hasil as $nilai => $lembar) {
    // Tampilkan pecahan uang dalam format Rp [pecahan]: [jumlah lembar]
    echo "Rp " . number_format($nilai, 0, ',', '.') . ": " . $lembar . "<br>";
}

?>
