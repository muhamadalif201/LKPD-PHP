<?php
// Daftar siswa dengan nama dan nilai-nilai mereka
$siswa = [
    [
        'nama' => 'andi',
        'nilai'=> [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai'=> [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai'=> [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai'=> [89, 85, 84, 86, 88],
    ],
];

// Loop untuk setiap siswa di daftar
foreach($siswa as $i => $student) {
    // Hitung jumlah total nilai siswa
    $menhitungnilai = array_sum($student['nilai']);
    // Hitung berapa banyak nilai yang ada
    $banyaknilai = count($student['nilai']);
    // Hitung rata-rata nilai
    $rataRata = $menhitungnilai / $banyaknilai;
    // Tambah 1 ke indeks untuk tampilan yang lebih friendly
    $i = $i + 1;
    // Tampilkan nama siswa dan rata-rata nilai mereka
    echo $i . ". " . $student['nama'] . " : " . $rataRata . "<br>";
}
?>
