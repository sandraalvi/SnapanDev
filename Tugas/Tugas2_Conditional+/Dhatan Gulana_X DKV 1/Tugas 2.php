<?php

$jam = 23.25;

if ($jam == 03.00) {
    echo "BANGUUNN!!!" ;
} 
elseif ($jam <= 03.15 && $jam >= 03.01) {
    echo "TAHAJUD!!!" ;
}
elseif ($jam <= 03.59 && $jam >= 03.15) {
    echo "bebas nak ngapain" ;
}
elseif ($jam <= 04.15 && $jam >= 04.00 ) {
    echo "SHOLAATT!!!" ;
}
elseif ($jam <= 04.59 && $jam >= 04.16 ) {
    echo "Santai dlu g si" ;
}
elseif ($jam <= 05.15 && $jam >= 05.00  ) {
    echo "Sarapan" ;
}
elseif ($jam <= 05.30 && $jam >= 05.16 ) {
    echo "Mandi" ;
}
elseif ($jam <= 05.59 && $jam >= 05.31 ) {
    echo "Scrol aja dlu" ;
}
elseif ($jam <= 06.30 && $jam >= 06.00) {
    echo "OTW Sekul" ;
}
elseif ($jam <= 06.59 && $jam >= 06.31 ) {
    echo "nganggur di sekolah" ;
}
elseif ($jam <= 11.59 && $jam >= 07.00 ) {
    echo "BELAJAARR!!!" ;
}
elseif ($jam <= 12.15 && $jam >= 12.00 ) {
    echo "SHOLLATT!!!" ;
}
elseif ($jam <= 12.30 && $jam >= 12.16 ) {
    echo "Makan la sikit, nanti saket" ;
}
elseif ($jam <= 12.59 && $jam >= 12.31 ) {
    echo "harusnya jam bucin tpi lu jomblo " ;
}
elseif ($jam <= 13.00 && $jam >= 14.59 ) {
    echo "BELAJAAR" ;
}
elseif ($jam <= 15.30 && $jam >= 15.00 ) {
    echo "SHOLAATT!!!" ;
}
elseif ($jam <= 15.44 && $jam >= 15.31 ) {
    echo "bebas sambil nunggu voice" ;
}
elseif ($jam <= 17.00 && $jam >= 15.45 ) {
    echo "voice" ;
}
elseif ($jam <= 17.20 && $jam >= 17.01 ) {
    echo "pulang, yeyeyyy" ;
}
elseif ($jam <= 17.30 && $jam >= 17.21 ) {
    echo "ke toko fotocopy" ;
}
elseif ($jam <= 17.44 && $jam >= 17.31 ) {
    echo "rehat, cape" ;
}
elseif ($jam <= 17.59 && $jam >= 17.45 ) {
    echo "mandi" ;
}
elseif ($jam <= 18.15 && $jam >= 18.00 ) {
    echo "SHOLAATT!!!" ;
}
elseif ($jam <= 18.59 && $jam >= 18.16 ) {
    echo "nanggur" ;
}
elseif ($jam <= 19.15 && $jam >= 19.00 ) {
    echo "SHOLAATT!!!" ;
}
elseif ($jam <= 19.45 && $jam >= 19.16 ) {
    echo "mabar (makan bareng)" ;
}
elseif ($jam <= 20.05 && $jam >= 19.46 ) {
    echo "talk talk" ;
}
elseif ($jam <= 21.05 && $jam >= 20.06 ) {
    echo "nugas" ;
}
elseif ($jam <= 22.05 && $jam >= 21.06 ) {
    echo "belajar jadi hengker" ;
}
elseif ($jam <=23.19 && $jam >= 22.06 ) {
    echo "nganggur" ;
}
elseif ($jam <= 23.30 && $jam >= 23.20 ) {
    echo "bikin jadwal buat besok" ;
}else{
    echo "bobok, ZZzzzzzz" ;
}
?>