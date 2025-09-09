<?php

$jam = 11.11;

if ($jam >= 00.00 && $jam < 03.00) {
    echo "Pada jam $jam, Kakak sedang tidur";
} elseif ($jam >= 03.00 && $jam < 04.30) {
    echo "Pada jam $jam, Kakak sedang bermain hp";
} elseif ($jam >= 04.30 && $jam < 04.45) {
    echo "Pada jam $jam, Kakak sedang sholat subuh";
} elseif ($jam >= 04.45 && $jam < 05.00) {
    echo "Pada jam $jam, Kakak sedang mandi";
} elseif ($jam >= 05.00 && $jam < 05.45) {
    echo "Pada jam $jam, Kakak sedang bersiap-siap";
} elseif ($jam >= 05.45 && $jam < 06.00) {
    echo "Pada jam $jam, Kakak sedang sarapan";
} elseif ($jam >= 06.00 && $jam < 06.30) {
    echo "Pada jam $jam, Kakak sedang berangkat sekolah";
} elseif ($jam >= 06.30 && $jam < 07.00) {
    echo "Pada jam $jam, Free time sembari menunggu pelajaran dimulai";
} elseif ($jam >= 07.00 && $jam < 12.00) {
    echo "Pada jam $jam, Kakak sedang melakukan kbm di sekolah";
} elseif ($jam >= 12.00 && $jam < 12.15) {
    echo "Pada jam $jam, Kakak sedang sholat dzuhur";
} elseif ($jam >= 12.15 && $jam < 12.30) {
    echo "Pada jam $jam, Free time sembari menunggu pelajaran dimulai";
} elseif ($jam >= 12.30 && $jam < 15.30) {
    echo "Pada jam $jam, Kakak sedang melakukan kbm di sekolah";
} elseif ($jam >= 15.30 && $jam < 15.45) {
    echo "Pada jam $jam, Kakak sedang sholat ashar";
} elseif ($jam >= 15.45 && $jam < 17.00) {
    echo "Pada jam $jam, Kakak sedang mengikuti ekskul voice";
} elseif ($jam >= 17.00 && $jam < 17.30) {
    echo "Pada jam $jam, Kakak berada di tempat foto copy dan dalam perjalanan pulang";
} elseif ($jam >= 17.30 && $jam < 17.45) {
    echo "Pada jam $jam, Kakak sedang mandi di rumah";
} elseif ($jam >= 17.45 && $jam < 18.00) {
    echo "Pada jam $jam, Kakak sedang sholat maghrib";
} elseif ($jam >= 18.00 && $jam < 18.45) {
    echo "Pada jam $jam, Free time";
} elseif ($jam >= 18.45 && $jam < 19.00) {
    echo "Pada jam $jam, Kakak sedang sholat isya";
} elseif ($jam >= 19.00 && $jam < 19.30) {
    echo "Pada jam $jam, Kakak sedanng makan bersama keluarga";
} elseif ($jam >= 19.30 && $jam < 19.50) {
    echo "Pada jam $jam, Kakak sedang mengobrol bersama keluarga";
} elseif ($jam >= 19.50 && $jam < 20.50) {
    echo "Pada jam $jam, Kakak sedang mengerjakan tugas";
} elseif ($jam >= 20.50 && $jam < 21.00) {
    echo "Pada jam $jam, Free time";
} elseif ($jam >= 21.00 && $jam < 22.00) {
    echo "Pada jam $jam, Kakak sedang coding";
} elseif ($jam >= 22.00 && $jam < 22.10) {
    echo "Pada jam $jam, Kakak sedang mempersiapkan keperluan hari esok";
} elseif ($jam >= 22.10 && $jam < 22.30) {
    echo "Pada jam $jam, Kakak sedang beramain hp";
} elseif ($jam >= 22.30 && $jam < 24.00) {
    echo "Pada jam $jam, Kakak sedang tidur";
} else {
    echo "Jam tidak valid";
}

?>