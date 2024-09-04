<?php
// Jam kerja normal biasanya 8 jam
$jamnormal = 8;
// Jam kerja yang sebenarnya (misalnya 14 jam)
$jamkerja = 14;
// Hitung berapa lama lembur
$lembur = $jamkerja - $jamnormal;
// Biaya kompensasi untuk jam lembur pertama
$jamPertama = 50000;
// Biaya kompensasi untuk jam lembur setelah jam pertama
$jamselanjutnya = 25000;
// Cek kalau jam kerja lebih dari 8 jam
if ($jamkerja > 8) {
    // Hitung total kompensasi: 
    // - $jamPertama untuk jam lembur pertama (8 jam pertama)
    // - ($jamselanjutnya * $lembur) untuk sisa jam lembur setelah 8 jam
    // - Kurangin 25000 (misalnya ini potongan atau biaya administrasi)
    $kompensasi = $jamPertama + ($jamselanjutnya * $lembur) - 25000;
    
    // Tampilkan info jam kerja total
    echo "Lama kerja = " . $jamkerja;
    echo "<br>";
    
    // Tampilkan jam lembur
    echo "jam lebih = " . $lembur;
    echo "<br>";
    
    // Tampilkan total kompensasi yang harus dibayar
    echo "Kompensasi = " . $kompensasi;

} else {
    // Kalau jam kerja 8 jam atau kurang, berarti enggak ada kompensasi
    echo "tidak ada kompensasi";
}

?>
