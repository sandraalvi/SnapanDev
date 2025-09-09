<?php

$Nilai = 66;

if ($Nilai <= 100 && $Nilai >= 90) {
    echo "Nilai = A";
} elseif ($Nilai <= 89 && $Nilai >= 80) {
    echo "Nilai = B";
} elseif ($Nilai <= 79 && $Nilai >= 70) {
    echo "Nilai = C";
} elseif ($Nilai <= 69 && $Nilai >= 60) {
    echo "Nilai = D";
} elseif ($Nilai < 60) {
    echo "Nilai = E";
} else {
    echo "Nilai tidak valid";
}

?>