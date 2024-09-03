<?php

function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    $keliling = 2 * M_PI * $jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $volume = (4/3) * M_PI * pow($jari, 3);
    return $volume;
}

function volumeTabung($jari, $tinggi) : float {
    $volume = M_PI * pow($jari, 2) * $tinggi;
    return $volume;
}

function volumeKerucut($jari, $tinggi) : float {
    $volume = (1/3) * M_PI * pow($jari, 2) * $tinggi;
    return $volume;
}

$jari = 5;
$tinggi = 10;

echo "Keliling lingkaran adalah: " . kelilingLingkaran($jari) . "\n";
echo "Volume bola adalah: " . volumeBola($jari) . "\n";
echo "Volume tabung adalah: " . volumeTabung($jari, $tinggi) . "\n";
echo "Volume kerucut adalah: " . volumeKerucut($jari, $tinggi) . "\n";

$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}";

