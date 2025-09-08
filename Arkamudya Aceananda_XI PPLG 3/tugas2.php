<?php
$jam = "";

if ($jam >= "03:00" && $jam < "04:20") {
    echo "Jam $jam: Kakak baru bangun dan sedang bermain HP";
} elseif ($jam >= "04:20" && $jam < "04:40") {
    echo "Jam $jam: Kakak sedang sholat Subuh";
} elseif ($jam >= "04:40" && $jam < "05:00") {
    echo "Jam $jam: Kakak lanjut bermain HP";
} elseif ($jam >= "05:00" && $jam < "05:30") {
    echo "Jam $jam: Kakak sedang mandi";
} elseif ($jam >= "05:30" && $jam < "05:45") {
    echo "Jam $jam: Kakak sedang sarapan";
} elseif ($jam >= "05:45" && $jam < "06:00") {
    echo "Jam $jam: Kakak sedang bersiap-siap";
} elseif ($jam >= "06:00" && $jam < "06:30") {
    echo "Jam $jam: Kakak berangkat sekolah";
} elseif ($jam >= "06:30" && $jam < "07:00") {
    echo "Jam $jam: Kakak sampai di sekolah";
} elseif ($jam >= "07:00" && $jam < "15:30") {
    echo "Jam $jam: Kakak sedang melaksanakan KBM di sekolah";
} elseif ($jam >= "15:30" && $jam < "15:45") {
    echo "Jam $jam: Kakak selesai KBM dan bersiap untuk ekstrakurikuler";
} elseif ($jam >= "15:45" && $jam < "17:00") {
    echo "Jam $jam: Kakak sedang mengikuti kegiatan Voice 8";
} elseif ($jam >= "17:00" && $jam < "17:15") {
    echo "Jam $jam: Kakak pulang dari kegiatan Voice dan perjalanan menuju rumah";
} elseif ($jam >= "17:15" && $jam < "17:20") {
    echo "Jam $jam: Kakak mampir ke tempat fotokopi untuk print tugasnya";
} elseif ($jam >= "17:20" && $jam < "17:30") {
    echo "Jam $jam: Kakak perjalanan menuju rumah dari fotokopi";
} elseif ($jam >= "17:30" && $jam < "17:35") {
    echo "Jam $jam: Kakak sampai di rumah dan bersiap mandi";
} elseif ($jam >= "17:35" && $jam < "18:00") {
    echo "Jam $jam: Kakak sedang mandi";
} elseif ($jam >= "18:00" && $jam < "18:15") {
    echo "Jam $jam: Kakak sedang sholat Maghrib";
} elseif ($jam >= "18:15" && $jam < "19:15") {
    echo "Jam $jam: Kakak sedang mengerjakan PR";
} elseif ($jam >= "19:15" && $jam < "19:30") {
    echo "Jam $jam: Kakak sedang sholat Isya";
} elseif ($jam >= "19:30" && $jam < "20:00") {
    echo "Jam $jam: Kakak makan malam bersama keluarga";
} elseif ($jam >= "20:00" && $jam < "20:20") {
    echo "Jam $jam: Kakak sedang mengobrol bersama keluarga";
} elseif ($jam >= "20:20" && $jam < "21:20") {
    echo "Jam $jam: Kakak sedang membuka laptop untuk coding";
} elseif ($jam >= "21:20" && $jam < "22:50") {
    echo "Jam $jam: Kakak sedang menikmati free time";
} elseif ($jam >= "22:50" && $jam < "23:00") {
    echo "Jam $jam: Kakak sedang mempersiapkan untuk besok";
} elseif ($jam >= "23:00" && $jam <= "23:30") {
    echo "Jam $jam: Kakak sedang istirahat ringan sebelum tidur";
} else {
    echo "Jam $jam: Kakak sedang tidur";
}
?>