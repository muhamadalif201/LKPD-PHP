<?php
// Definisikan dua nama
$nama1 = "Fema Flamelina Putri";
$nama2 = "Artasya Legina";

// Hitung panjang masing-masing nama
$jmlahnamaA = strlen($nama1); 
$jmlahnamaB = strlen($nama2); 
// Hitung selisih panjang nama
$jmlahtotal = $jmlahnamaA - $jmlahnamaB;

// Cek panjang nama dan tampilkan hasilnya
if($jmlahnamaA > $jmlahnamaB) {
    // Jika nama pertama lebih panjang
    echo "nama pertama : " . $nama1;
    echo "<br>";
    echo "nama kedua : " . $nama2;
    echo "<br>";
    echo $nama1 . " lebih panjang dari " . $nama2 . " dengan selisih " . $jmlahtotal;
} else if ($jmlahnamaA < $jmlahnamaB) {
    // Jika nama kedua lebih panjang
    echo "nama pertama : " . $nama2;
    echo "<br>";
    echo "nama kedua : " . $nama1;
    echo "<br>";
    echo $nama2 . " lebih panjang dari " . $nama1 . " dengan selisih " . $jmlahtotal;
} else {
    // Jika panjang nama sama
    echo "namanya sama panjang";
}

?>
