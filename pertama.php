<?php
// echo "hello world";

date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$jam = (int)date('H');
$waktu = date('H:i');

switch (true) {
    case ($jam >= 5 && $jam < 11);
        $sapa = "Selamat Pagi";
        break;
    case ($jam >= 11 && $jam < 15);
        $sapa = "Selamat Siang";
        break;
    case ($jam >= 15 && $jam < 19);
        $sapa = "Selamat Sore";
        break;
    default:
        $sapa = "Selamat Malam";
}

echo "{$sapa}, {$nama}, sekarang pukul {$waktu}\n";

