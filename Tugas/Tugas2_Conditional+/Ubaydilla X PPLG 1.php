<?php
// jadwal_kakak_ibadah
// Program jadwal kakak pemalas
// yang buat aslinya pemalas juga

// helper validasi
function toSeconds($time) {
    if (!preg_match('/^\d{2}:\d{2}$/', $time)) return null;
    list($h, $m) = explode(':', $time);
    if ($h < 0 || $h > 23 || $m < 0 || $m > 59) return null;
    return ((int)$h * 3600) + ((int)$m * 60);
}

// default
$hasil = "";
$jam = isset($_POST['jam']) ? $_POST['jam'] : "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $detik = toSeconds($jam);

    if ($detik === null) {
        $hasil = "Format jam tidak valid. Gunakan format HH:MM ya Mas/Mbak(00–23:59).";
    } else {
        // jadwal penting
        $bangun_awal    = toSeconds("03:00");
        $siap2_awal     = toSeconds("05:00");
        $berangkat      = toSeconds("06:00");
        $sampai_sekolah = toSeconds("06:30");
        $kbm_awal       = toSeconds("07:00");
        $kbm_akhir      = toSeconds("15:30");
        $voice_awal     = toSeconds("15:45");
        $voice_akhir    = toSeconds("17:00");
        $sampai_rumah   = toSeconds("17:30");
        $makan_awal     = toSeconds("19:00");
        $makan_akhir    = toSeconds("19:30");
        $ngobrol_awal   = toSeconds("19:30");
        $ngobrol_akhir  = toSeconds("19:50");
        $coding_awal1   = toSeconds("19:50");
        $coding_akhir1  = toSeconds("20:50");
        $pr_awal        = toSeconds("20:50");
        $pr_akhir       = toSeconds("21:50");
        $coding_awal2   = toSeconds("21:50");
        $coding_akhir2  = toSeconds("22:50");
        $persiapan      = toSeconds("23:20");
        $tidur          = toSeconds("23:30");

        // ibadah wajib
        $subuh_awal   = toSeconds("04:30");
        $subuh_akhir  = toSeconds("05:00");
        $dzuhur_awal  = toSeconds("12:00");
        $dzuhur_akhir = toSeconds("12:15");
        $ashar_awal   = toSeconds("15:30");
        $ashar_akhir  = toSeconds("15:45");
        $maghrib_awal = toSeconds("18:00");
        $maghrib_akhir= toSeconds("18:15");
        $isya_awal    = toSeconds("19:30");
        $isya_akhir   = toSeconds("19:45");

        // cek ibadah dulu (prioritas buat masuk surga)
        if ($detik >= $subuh_awal && $detik < $subuh_akhir) {
            $hasil = "Kakak sedang sholat Subuh.";
        } elseif ($detik >= $dzuhur_awal && $detik < $dzuhur_akhir) {
            $hasil = "Kakak sedang sholat Dzuhur.";
        } elseif ($detik >= $ashar_awal && $detik < $ashar_akhir) {
            $hasil = "Kakak sedang sholat Ashar.";
        } elseif ($detik >= $maghrib_awal && $detik < $maghrib_akhir) {
            $hasil = "Kakak sedang sholat Maghrib.";
        } elseif ($detik >= $isya_awal && $detik < $isya_akhir) {
            $hasil = "Kakak sedang sholat Isya.";
        } 
        // lalu cek jadwal utama
        elseif ($detik >= $bangun_awal && $detik < $siap2_awal) {
            $hasil = "Kakak sedang main HP (bangun dini hari cuma buat nonton reels).";
        } elseif ($detik >= $siap2_awal && $detik < $berangkat) {
            $hasil = "Kakak sedang siap-siap: mandi, sarapan, ibadah.";
        } elseif ($detik >= $berangkat && $detik < $sampai_sekolah) {
            $hasil = "Kakak sedang perjalanan ke sekolah.";
        } elseif ($detik >= $sampai_sekolah && $detik < $kbm_awal) {
            $hasil = "Kakak baru sampai sekolah, santai sebentar.";
        } elseif ($detik >= $kbm_awal && $detik <= $kbm_akhir) {
            $hasil = "Kakak sedang KBM (belajar) di sekolah.";
        } elseif ($detik > $kbm_akhir && $detik < $voice_awal) {
            $hasil = "Kakak istirahat sebentar sebelum voice.";
        } elseif ($detik >= $voice_awal && $detik < $voice_akhir) {
            $hasil = "Kakak sedang mengikuti kegiatan voice.";
        } elseif ($detik >= $voice_akhir && $detik < $sampai_rumah) {
            $hasil = "Kakak mampir ke fotokopi.";
        } elseif ($detik >= $sampai_rumah && $detik < $makan_awal) {
            $hasil = "Kakak sampai rumah, free time.";
        } elseif ($detik >= $makan_awal && $detik < $makan_akhir) {
            $hasil = "Kakak makan malam bersama keluarga.";
        } elseif ($detik >= $ngobrol_awal && $detik < $ngobrol_akhir) {
            $hasil = "Kakak ngobrol bersama keluarga.";
        } elseif ($detik >= $coding_awal1 && $detik < $coding_akhir1) {
            $hasil = "Kakak coding (sesi 1).";
        } elseif ($detik >= $pr_awal && $detik < $pr_akhir) {
            $hasil = "Kakak mengerjakan PR.";
        } elseif ($detik >= $coding_awal2 && $detik < $coding_akhir2) {
            $hasil = "Kakak coding (sesi 2).";
        } elseif ($detik >= $persiapan && $detik < $tidur) {
            $hasil = "Kakak menyiapkan kebutuhan besok.";
        } elseif ($detik >= $tidur || $detik < $bangun_awal) {
            $hasil = "Kakak sedang tidur.";
        } else {
            $hasil = "Kakak sedang free time.";
        }
    }
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Jadwal Kakak</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            max-width: 720px;
            margin: 20px auto;
            padding: 16px;
        }
        label, input, button {
            font-size: 1rem;
            margin: 4px 0;
        }
        .hasil {
            margin-top: 16px;
            padding: 12px;
            background: #eef;
            border-radius: 6px;
        }
        .note {
            margin-top: 20px;
            padding: 10px;
            background: #fffae6;
            border-left: 4px solid #f90;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <!-- Nama yang buat ygy -->
    <h1>Tugas dari: Ubaydilla Alvaro Gibran Syahpalevi</h1>
    <h2>Jadwal Kakak Pemalas (Senin)</h2>

    <form method="post" action="">
        <label for="jam">Masukkan jam (24-jam):</label><br>
        <input type="time" id="jam" name="jam" value="<?php echo htmlspecialchars($jam ?? ''); ?>" required>
        <button type="submit">Cek</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <div class="hasil">
        <strong>Sekarang Jam:</strong> <?php echo htmlspecialchars($jam); ?><br>
        <strong>Aktivitas:</strong> <?php echo htmlspecialchars($hasil); ?>
    </div>
    <?php endif; ?>
    <hr>
    <p>Program ini menampilkan aktivitas kakak berdasarkan jam yang dimasukkan. Jadwal ini dibuat dengan mempertimbangkan waktu ibadah wajib bagi yang beragama Islam.</p>
    <p>Masukkan jamnya AM sama PM. 01:00 AM (Pagi) & 01:00 PM (Siang)</p>
    <div class="note">
        <strong>Note:</strong> Kalo gini salah nggak ya? Mff kalo salah kaka :3
    </div>

    <br><br>
    <div class="Yapping">
    <h3>Yapping</h3>
    <a>maaf ini cuma test aja (yapping) soalnya pengen nulis ini sekalian sama kodingannya. Juga biar nggak jenuh cuma nilai kodingannya hehe :3</a><br>
    <a href = https://youtu.be/dQw4w9WgXcQ target="_blank">Klik disini</a> kalo mau liat my yapping <br>
    <a href = https://www.instagram.com/reel/DOBKhKQE01c target="_blank">Bantu Like minat & bakat saya pls</a> pls yh, aq jg mw trknl ky orng orng :3 <br>
    <p>Aduh... kadung buatnya kayak gini. Males kalo buat lagi... <a href= https://www.youtube.com/KF8wlNegMasor target="_blank"> or will I?
    <h3>Kesimpulan</h3>
    <p> Kakaknya kena <a href = https://my.clevelandclinic.org/health/diseases/23970-sleep-deprivation target= "_blank"> sleep deprived</a> aduhai. Besoknya ngantuk tuh kakak :3</p>
    <p> Kata Chat GPT <a href = https://chatgpt.com/share/68bc9168-1fe8-8005-b7b5-9122be6022af target= "_blank"> ini katanya ya...</a> Jadi, kayanya emang bener kalau jadwal kakak padat (lagian jam 3 main HP apalah)... </p>
    </div>
</body>
</html>


<?php
echo "<br><br><hr>";
echo "<h2>Versi Manual (tanpa form)</h2>";
echo "Aslinya males sih. Tapi nanti salah lagi...<br><br><br>";

// ini sesuai ketentuan tugas :3
// ganti aja isinya sesuai keinginan 
$jam = "01:50";

if ($jam >= "03:00" && $jam < "05:00") {
    $aktivitas = "Kakak sedang main HP.";
} elseif ($jam >= "05:00" && $jam < "05:30") {
    $aktivitas = "Kakak sedang ibadah pagi.";
} elseif ($jam >= "05:30" && $jam < "06:00") {
    $aktivitas = "Kakak sedang mandi dan siap-siap.";
} elseif ($jam >= "06:00" && $jam < "06:15") {
    $aktivitas = "Kakak sedang sarapan.";
} elseif ($jam >= "06:15" && $jam < "06:30") {
    $aktivitas = "Kakak berangkat ke sekolah.";
} elseif ($jam >= "06:30" && $jam < "07:00") {
    $aktivitas = "Kakak baru sampai sekolah.";
} elseif ($jam >= "07:00" && $jam < "15:30") {
    $aktivitas = "Kakak sedang belajar (KBM).";
} elseif ($jam >= "15:30" && $jam < "15:45") {
    $aktivitas = "Kakak selesai KBM, bersiap untuk voice.";
} elseif ($jam >= "15:45" && $jam < "17:00") {
    $aktivitas = "Kakak mengikuti kegiatan voice.";
} elseif ($jam >= "17:00" && $jam < "17:20") {
    $aktivitas = "Kakak mampir ke fotokopi untuk print tugas.";
} elseif ($jam >= "17:20" && $jam < "17:30") {
    $aktivitas = "Kakak dalam perjalanan pulang.";
} elseif ($jam >= "17:30" && $jam < "18:30") {
    $aktivitas = "Kakak mengerjakan PR (1 jam tanpa putus).";
} elseif ($jam >= "18:30" && $jam < "19:00") {
    $aktivitas = "Kakak makan malam bersama keluarga (30 menit).";
} elseif ($jam >= "19:00" && $jam < "19:20") {
    $aktivitas = "Kakak mengobrol dengan keluarga.";
} elseif ($jam >= "19:20" && $jam < "20:20") {
    $aktivitas = "Kakak coding setelah PR.";
} elseif ($jam >= "20:20" && $jam < "21:50") {
    $aktivitas = "Kakak free time.";
} elseif ($jam >= "21:50" && $jam < "22:50") {
    $aktivitas = "Kakak coding sebelum tidur.";
} elseif ($jam >= "22:50" && $jam < "23:20") {
    $aktivitas = "Kakak free time tambahan.";
} elseif ($jam >= "23:20" && $jam < "23:30") {
    $aktivitas = "Kakak persiapan untuk besok.";
} elseif ($jam >= "23:30" && $jam < "24:00") {
    $aktivitas = "Kakak tidur.";
} elseif ($jam >= "00:00" && $jam < "03:00") {
    $aktivitas = "Kakak tidur.";
} else {
    $aktivitas = "Masukinnya yang bener dong :3";
}

echo "<h3>Pada jam $jam, $aktivitas</h3>";
if ($aktivitas == "Masukinnya yang bener dong :3") {
    echo "<br>Format jamnya salah. Gunakan format HH:MM ya Mas/Mbak(00–23:59). Sengaja amat salah...";
}
?>