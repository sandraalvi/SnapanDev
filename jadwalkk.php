<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Harian Kakak Seeya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFF8DC;
            margin: 0;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #FFFFE0;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border: 3px solid #FFD700;
        }
        
        h1 {
            text-align: center;
            color: #B8860B;
            margin-bottom: 30px;
            font-size: 2.5em;
        }
        
        .form-group {
            margin-bottom: 20px;
            text-align: center;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #8B4513;
            font-size: 1.2em;
        }
        
        input[type="time"] {
            padding: 10px;
            font-size: 16px;
            border: 2px solid #FFD700;
            border-radius: 5px;
            background-color: #FFFACD;
        }
        
        button {
            background-color: #FFD700;
            color: #8B4513;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            margin-left: 10px;
        }
        
        button:hover {
            background-color: #FFA500;
        }
        
        .result {
            margin-top: 30px;
            padding: 20px;
            background-color: #FFFAF0;
            border: 2px solid #DAA520;
            border-radius: 8px;
            text-align: center;
        }
        
        .activity {
            font-size: 1.3em;
            color: #8B4513;
            font-weight: bold;
        }
        
        .time-display {
            font-size: 1.1em;
            color: #B8860B;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Jadwal Harian Kakak Seeya</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="jam">Masukkan Waktu:</label>
                <input type="time" id="jam" name="jam" value="<?php echo isset($_POST['jam']) ? $_POST['jam'] : '07:00'; ?>" required>
                <button type="submit">Cek Aktivitas</button>
            </div>
        </form>

        <?php
        if (isset($_POST['jam'])) {
            $jam = $_POST['jam'];
            
            // Konversi waktu ke menit 
            function waktuKeMenit($waktu) {
                list($jam, $menit) = explode(':', $waktu);
                return ($jam * 60) + $menit;
            }
            
            $waktuInput = waktuKeMenit($jam);
            $aktivitas = "";
            
            // Struktur kontrol percabangan untuk menentukan aktivitas
            if ($waktuInput >= waktuKeMenit('03:00') && $waktuInput < waktuKeMenit('04:45')) {
                $aktivitas = "Kakak sedang bermain HP";
            } elseif ($waktuInput >= waktuKeMenit('04:45') && $waktuInput < waktuKeMenit('05:00')) {
                $aktivitas = "Kakak sedang sholat Subuh";
            } elseif ($waktuInput >= waktuKeMenit('05:00') && $waktuInput < waktuKeMenit('05:40')) {
                $aktivitas = "Kakak sedang mandi dan siap-siap";
            } elseif ($waktuInput >= waktuKeMenit('05:40') && $waktuInput < waktuKeMenit('06:00')) {
                $aktivitas = "Kakak sedang sarapan pagi";
            } elseif ($waktuInput >= waktuKeMenit('06:00') && $waktuInput < waktuKeMenit('06:30')) {
                $aktivitas = "Kakak sedang dalam perjalanan ke sekolah";
            } elseif ($waktuInput >= waktuKeMenit('06:30') && $waktuInput < waktuKeMenit('07:00')) {
                $aktivitas = "Kakak sudah sampai di sekolah, sedang persiapan KBM";
            } elseif ($waktuInput >= waktuKeMenit('07:00') && $waktuInput < waktuKeMenit('09:00')) {
                $aktivitas = "Kakak sedang belajar di sekolah (KBM)";
            } elseif ($waktuInput >= waktuKeMenit('09:00') && $waktuInput < waktuKeMenit('09:15')) {
                $aktivitas = "Kakak sedang sholat Dhuha (istirahat 1)";
            } elseif ($waktuInput >= waktuKeMenit('09:15') && $waktuInput < waktuKeMenit('11:55')) {
                $aktivitas = "Kakak sedang belajar di sekolah (KBM)";
            } elseif ($waktuInput >= waktuKeMenit('11:55') && $waktuInput < waktuKeMenit('12:10')) {
                $aktivitas = "Kakak sedang sholat Dzuhur";
            } elseif ($waktuInput >= waktuKeMenit('12:10') && $waktuInput < waktuKeMenit('12:30')) {
                $aktivitas = "Kakak sedang istirahat kedua";
            } elseif ($waktuInput >= waktuKeMenit('12:30') && $waktuInput < waktuKeMenit('15:00')) {
                $aktivitas = "Kakak sedang belajar di sekolah (KBM)";
            } elseif ($waktuInput >= waktuKeMenit('15:00') && $waktuInput < waktuKeMenit('15:15')) {
                $aktivitas = "Kakak sedang sholat Ashar";
            } elseif ($waktuInput >= waktuKeMenit('15:15') && $waktuInput < waktuKeMenit('15:30')) {
                $aktivitas = "Kakak sedang belajar di sekolah (KBM terakhir)";
            } elseif ($waktuInput >= waktuKeMenit('15:30') && $waktuInput < waktuKeMenit('15:45')) {
                $aktivitas = "Kakak sedang bersiap untuk voice";
            } elseif ($waktuInput >= waktuKeMenit('15:45') && $waktuInput < waktuKeMenit('17:00')) {
                $aktivitas = "Kakak sedang melakukan kegiatan voice";
            } elseif ($waktuInput >= waktuKeMenit('17:00') && $waktuInput < waktuKeMenit('17:10')) {
                $aktivitas = "Kakak sedang mampir fotokopi";
            } elseif ($waktuInput >= waktuKeMenit('17:10') && $waktuInput < waktuKeMenit('17:30')) {
                $aktivitas = "Kakak sedang dalam perjalanan pulang";
            } elseif ($waktuInput >= waktuKeMenit('17:30') && $waktuInput < waktuKeMenit('17:45')) {
                $aktivitas = "Kakak sedang mandi sore";
            } elseif ($waktuInput >= waktuKeMenit('17:45') && $waktuInput < waktuKeMenit('18:00')) {
                $aktivitas = "Kakak sedang sholat Maghrib";
            } elseif ($waktuInput >= waktuKeMenit('18:00') && $waktuInput < waktuKeMenit('18:30')) {
                $aktivitas = "Kakak sedang makan malam bersama keluarga";
            } elseif ($waktuInput >= waktuKeMenit('18:30') && $waktuInput < waktuKeMenit('19:10')) {
                $aktivitas = "Kakak sedang free time";
            } elseif ($waktuInput >= waktuKeMenit('19:10') && $waktuInput < waktuKeMenit('19:25')) {
                $aktivitas = "Kakak sedang sholat Isya";
            } elseif ($waktuInput >= waktuKeMenit('19:25') && $waktuInput < waktuKeMenit('19:45')) {
                $aktivitas = "Kakak sedang mengobrol bersama keluarga";
            } elseif ($waktuInput >= waktuKeMenit('19:45') && $waktuInput < waktuKeMenit('20:45')) {
                $aktivitas = "Kakak sedang belajar PR";
            } elseif ($waktuInput >= waktuKeMenit('20:45') && $waktuInput < waktuKeMenit('21:45')) {
                $aktivitas = "Kakak sedang coding sebelum tidur";
            } elseif ($waktuInput >= waktuKeMenit('21:45') && $waktuInput < waktuKeMenit('21:55')) {
                $aktivitas = "Kakak sedang persiapan sekolah besok";
            } elseif ($waktuInput >= waktuKeMenit('21:55') && $waktuInput < waktuKeMenit('22:45')) {
                $aktivitas = "Kakak sedang free time";
            } else {
                // Kondisi untuk waktu tidur (22:45 - 03:00)
                $aktivitas = "Kakak sedang tidur";
            }
            
            echo '<div class="result">';
            echo '<div class="time-display">Waktu: ' . $jam . '</div>';
            echo '<div class="activity">' . $aktivitas . '</div>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>