<?php

$jam = "15:30"; 

function keMenit($waktu) {
    list($h, $m) = explode(":", $waktu);
    return ($h * 60) + $m;
}

$input = keMenit($jam);


if ($input >= keMenit("03:00") && $input < keMenit("05:00")) {
    echo "Kakak lagi main HP.";

} elseif ($input >= keMenit("05:00") && $input < keMenit("06:00")) {
    echo "Kakak sedang bersiap-siap.";

} elseif ($input >= keMenit("06:00") && $input < keMenit("06:30")) {
    echo "Kakak sedang berangkat ke sekolah.";

} elseif ($input >= keMenit("06:30") && $input < keMenit("07:00")) {
    echo "Kakak baru sampai sekolah.";

} elseif ($input >= keMenit("07:00") && $input < keMenit("15:30")) {
    echo "Kakak sedang belajar di sekolah ).";

} elseif ($input >= keMenit("15:30") && $input < keMenit("15:45")) {
    echo "Kakak baru selesai KBM    , istirahat sebentar.";

} elseif ($input >= keMenit("15:45") && $input < keMenit("17:00")) {
    echo "Kakak mengikuti kegiatan voice.";

} elseif ($input >= keMenit("17:00") && $input < keMenit("17:30")) {
    echo "Kakak mampir ke fotokopi untuk print tugas.";

} elseif ($input >= keMenit("17:30") && $input < keMenit("18:30")) {
    echo "Kakak sampai rumah, lalu mengerjakan PR selama sejam.";

} elseif ($input >= keMenit("18:30") && $input < keMenit("19:00")) {
    echo "Kakak sedang makan bersama keluarga.";

} elseif ($input >= keMenit("19:00") && $input < keMenit("19:20")) {
    echo "Kakak sedang mengobrol dengan keluarga.";

} elseif ($input >= keMenit("19:20") && $input < keMenit("20:20")) {
    echo "Kakak sedang coding setelah PR.";

} elseif ($input >= keMenit("20:20") && $input < keMenit("21:50")) {
    echo "Kakak punya free time santai (main HP, rebahan,daily genshin).";

} elseif ($input >= keMenit("21:50") && $input < keMenit("22:50")) {
    echo "Kakak sedang coding sebelum tidur.";

} elseif ($input >= keMenit("22:50") && $input < keMenit("23:20")) {
    echo "Kakak sedang menyiapkan kebutuhan untuk besok.";

} elseif ($input >= keMenit("23:20") && $input <= keMenit("23:30")) {
    echo "Kakak bersiap untuk tidur.";

} else {
    echo "Kakak sedang tidur nyenyak.";
}
?>
