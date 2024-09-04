<?php
// Definisikan dua array angka
$angka1 = [80, 77, 65, 89, 55, 12, 90, 86];
$angka2 = [77, 99, 55, 81, 45, 90, 91, 98];

// Tampilkan hasil angka yang ada di kedua array
echo "yang ada di kedua variabel : ";
echo "<br>";

// Temukan angka yang ada di kedua array
$membandingkan = array_intersect($angka1, $angka2);

// Tampilkan angka yang sama di kedua array
foreach($membandingkan as $membandingkan1){
    echo $membandingkan1 . ","; 
}

echo "<br>";

// Temukan angka yang hanya ada di array pertama tapi tidak ada di array kedua
$membandingkan2 = array_diff($angka1, $angka2);

// Tampilkan angka yang hanya ada di array pertama
echo "yang tidak ada di kedua variabel : ";
echo "<br>";

foreach($membandingkan2 as $membandingkan22){
    echo $membandingkan22 . ","; 
}

?>
