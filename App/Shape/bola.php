<?php

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }

    public function luas_permukaan() : float {
        return 4 * self::PHI * pow($this->jari_jari, 2);
    }
}

$bola = new Bola(5);

$volume_bola = $bola->volume();
$luas_permukaan_bola = $bola->luas_permukaan();

echo "Volume bola adalah: {$volume_bola} \n";
echo "Luas permukaan bola adalah: {$luas_permukaan_bola} \n";