<?php
$nilai = 67; 

// Mengecek nilai
if ($nilai > 100 || $nilai < 0) {
    echo "Nilai tidak valid.";
} elseif ($nilai >= 90 && $nilai <= 100) {
    echo "95: $nilai → A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    echo "85: $nilai → B";
} elseif ($nilai >= 70 && $nilai <= 79) {
    echo "73: $nilai → C";
} elseif ($nilai >= 60 && $nilai <= 69) {
    echo "62: $nilai → D";
} else {
    echo "50: $nilai → E";
}
?>

