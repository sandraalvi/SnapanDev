<?php

$jam = "00.00"

if ($jam >= "03:00" && $jam < "05:00") {
    echo "Kakak sedang bermain HP\n";
} elseif ($jam >= "05:00" && $jam < "06:00") {
    echo "Kakak sedang siap-siap\n";
} elseif ($jam >= "06:00" && $jam < "06:30") {
    echo "Kakak sedang berangkat ke sekolah\n";
} elseif ($jam >= "06:30" && $jam < "07:00") {
    echo "Kakak sudah sampai di sekolah\n";
} elseif ($jam >= "07:00" && $jam < "15:30") {
    echo "Kakak sedang KBM\n";
} elseif ($jam >= "15:30" && $jam < "15:45") {
    echo "Kakak selesai KBM, bersiap untuk voice\n";
} elseif ($jam >= "15:45" && $jam < "17:00") {
    echo "Kakak mengikuti voice\n";
} elseif ($jam >= "17:00" && $jam < "17:15") {
    echo "Kakak pulang dan mampir ke tempat fotocopy untuk ngeprint tugas\n";
} elseif ($jam >= "17:15" && $jam < "17:30") {
    echo "Kakak dalam perjalanan pulang ke rumah\n";
} elseif ($jam >= "17:30" && $jam < "18:30") {
    echo "Kakak sedang mengerjakan tugas\n";
} elseif ($jam >= "18:30" && $jam < "19:00") {
    echo "Kakak sedang makan malam\n";
} elseif ($jam >= "19:00" && $jam < "19:20") {
    echo "Kakak sedang mengobrol santai bersama keluarga\n";
} elseif ($jam >= "19:20" && $jam < "20:20") {
    echo "Kakak sedang menikmati free time\n";
} elseif ($jam >= "20:20" && $jam < "21:50") {
    echo "Kakak sedang mengerjakan tugas\n";
} elseif ($jam >= "21:50" && $jam < "22:50") {
    echo "Kakak sedang coding\n";
} elseif ($jam >= "22:50" && $jam < "23:00") {
    echo "Kakak sedang melakukan persiapan untuk besok\n";}
else ($jam >= "23:00" && $jam < "03:00") {
    echo "Kakak sedang tidur\n";}
?>
