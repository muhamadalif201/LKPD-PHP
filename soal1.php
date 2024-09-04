<?php

    // Kita punya string ini, buat ucapin ulang tahun
    $habede = "Selamat Ulang Tahun yang ke-17";

    // Cek apakah ada angka di dalam string
    if(preg_match("/\d/", $habede)) {
        // Kalau ada, kita ambil semua angka dari string
        $pisah = preg_replace("/[^0-9]/", "", $habede);
        
        // Pisahin angka-angkanya biar kelihatan terpisah dengan koma
        $number = implode(",", str_split($pisah));
        
        // Tampilkan pesan selamat ulang tahun
        echo "Selamat ulang tahun yang ke 17" ;
        echo "<br>";
        
        // Tampilkan angka-angkanya yang udah dipisah-pisahin
        echo "text mengandung angka : " . $number ;
    } else {
        // Kalau enggak ada angka, kasih tahu pesan ini
        echo "Selamat ulang tahun bree" ;
        echo "text tidak mengandung angka";
    }

?>
