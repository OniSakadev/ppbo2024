<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

$lingkaran = new Lingkaran(7);

$luas_lingkaran = $lingkaran->luas();
$keliling_lingkaran = $lingkaran->keliling();

echo "Luas lingkaran adalah: {$luas_lingkaran} \n";
echo "Keliling lingkaran adalah: {$keliling_lingkaran} \n";