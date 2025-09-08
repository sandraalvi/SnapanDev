<?php
    $nilai = 0.20;

    if ($nilai >= 90 && $nilai <= 100) {
        echo "Nilai A";
    } elseif ($nilai >= 80 && $nilai <= 89) {
        echo "Nilai B";
    } elseif ($nilai >= 70 && $nilai <= 79) {
        echo "Nilai C";
    } elseif ($nilai >= 60 && $nilai <= 69) {
        echo "Nilai D";
    } elseif ($nilai >= 0 && $nilai <= 59) {
        echo "Nilai E";
    } else {
        echo "Nilai Anomali";
    }
?>