<?php
$kondisi_bunga = 'layu';
echo "<h2>1. Kondisi Positif (Bunga)</h2>";
if ($kondisi_bunga == 'layu') {
    echo "Jika bungaku layu, maka aku harus memberi pupuk agar bungaku sehat.<br>\n";
} else {
    echo "Bunga sehat, tidak perlu pupuk.<br>\n";
}
echo "<br>\n";
$pr = 'tidak dikerjakan';
echo "<h2>2. Kondisi Negatif (Pekerjaan Rumah)</h2>";
if ($pr == 'tidak dikerjakan') {
    echo "Jika aku tidak mengerjakan Pekerjaan Rumah, maka aku akan dimarahai Ibu guru.<br>\n";
} else {
    echo "PR dikerjakan, aman.<br>\n";
}
echo "<br>\n";

$kondisi_motor = 'resik';
echo "<h2>3. Kondisi (Motor)</h2>";
if ($kondisi_motor == 'kotor') {
    echo "Jika motorku kotor, maka aku cuci.<br>\n";
} else {
    echo "Motor bersih, tidak perlu cuci.<br>\n";
}
echo "<br>\n";

$kuota_mb = 50; 
echo "<h2>4.  Kondisi (Kuota Internet)</h2>";
echo "Kuota: {$kuota_mb} MB<br>\n";
if ($kuota_mb == 0) {
    echo "1. Jika kuota internet sudah habis, maka tidak bisa menggunakan internet.<br>\n";
} elseif ($kuota_mb < 100) {
    echo "2. Jika kuota internet kurang dari 100 MB, maka internet hanya digunakan untuk pesan penting.<br>\n";
} elseif ($kuota_mb <= 500) {
    echo "3. Jika kuota internet antara 100 MB sampai 500 MB, maka internet cukup untuk chatting dan browsing ringan.<br>\n";
} elseif ($kuota_mb <= 1000) {
    echo "4. Jika kuota internet antara 500 MB sampai 1 GB, maka internet bisa digunakan untuk media sosial.<br>\n";
} elseif ($kuota_mb <= 3000) {
    echo "5. Jika kuota internet antara 1 GB sampai 3 GB, maka internet bisa digunakan untuk menonton video sebentar.<br>\n";
} elseif ($kuota_mb > 3000) {
    echo "6. Jika kuota internet lebih dari 3 GB, maka internet bebas digunakan untuk berbagai aktivitas online.<br>\n";
} else {
    echo "7. Jika kondisi kuota internet tidak diketahui, maka perlu mengecek sisa kuota pada aplikasi provider. Selain itu, perlu cek secara manual.<br>\n";
}
echo "<br>\n";


$jenis_jaringan = 'cepat';
$kuota_nested = 2500;
echo "<h2>5. Kondisi Bersarang (Jaringan + Kuota)</h2>";
echo "Kuota: {$kuota_nested} MB, Jaringan: {$jenis_jaringan}<br>\n";
if ($jenis_jaringan == 'cepat') {
    if ($kuota_nested > 2000) {
        echo "1. Jika kuota lebih dari 2 GB, maka internet bisa digunakan untuk streaming atau download.<br>\n";
    } elseif ($kuota_nested >= 500 && $kuota_nested <= 2000) {
        echo "2. Jika kuota antara 500 MB sampai 2 GB, maka internet cukup untuk browsing dan media sosial.<br>\n";
    } elseif ($kuota_nested < 500) {
        echo "3. Jika kuota kurang dari 500 MB, maka internet sebaiknya dipakai untuk hal penting saja.<br>\n";
    } else {
        echo "4. Selain itu, kondisi kuota tidak dikenali.<br>\n";
    }
} else {
    echo "Jaringan lambat, batasi penggunaan.<br>\n";
}
echo "<br>\n";

$kuota_and = 1500; 
$waktu_luang = 'ada';
$tugas_sekolah = 'ada';
$wifi = 'ada';
echo "<h2>6. Kondisi DAN (Kuota + Waktu/Tugas/WiFi)</h2>";
echo "Kuota: {$kuota_and} MB, Waktu luang: {$waktu_luang}, Tugas: {$tugas_sekolah}, WiFi: {$wifi}<br>\n";

if ($kuota_and > 1000 && $waktu_luang == 'ada') {
    echo "1. Jika kuota internet lebih dari 1 GB DAN waktu luang ada, maka boleh menonton video atau streaming.<br>\n";
} elseif ($kuota_and > 1000 && $waktu_luang != 'ada') {
    echo "2. Jika kuota internet lebih dari 1 GB DAN waktu luang tidak ada, maka internet hanya dipakai untuk tugas penting.<br>\n";
} elseif ($kuota_and < 1000 && $tugas_sekolah == 'ada') {
    echo "3. Jika kuota internet kurang dari 1 GB DAN ada tugas sekolah, maka internet dipakai hanya untuk mencari materi tugas.<br>\n";
} elseif ($kuota_and < 1000 && $tugas_sekolah != 'ada') {
    echo "4. Jika kuota internet kurang dari 1 GB DAN tidak ada tugas, maka sebaiknya tidak menggunakan internet terlalu banyak.<br>\n";
} elseif ($kuota_and == 0 && $wifi != 'ada') {
    echo "5. Jika kuota internet habis DAN tidak ada WiFi, maka tidak bisa mengakses internet.<br>\n";
} elseif ($kuota_and == 0 && $wifi == 'ada') {
    echo "6. Jika kuota internet habis DAN ada WiFi, maka internet bisa digunakan melalui WiFi.<br>\n";
}
echo "<br>\n";

$kuota_or = 750;
$jaringan = 'sedang';
echo "<h2>7. Kondisi ATAU (Kuota + Jaringan)</h2>";
echo "Kuota: {$kuota_or} MB, Jaringan: {$jaringan}<br>\n";
if (($kuota_or >= 500 && $kuota_or <= 1000) || $jaringan == 'sedang') {
    echo "Jika kuota internet antara 500 MB sampai 1 GB ATAU jaringan sedang, maka internet bisa digunakan untuk media sosial.<br>\n";
} else {
    echo "Kondisi tidak terpenuhi.<br>\n";
}
?>

