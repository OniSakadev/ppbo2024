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


class Tabung
{
    const PHI = 3.14;
    public function volume($jari_jari,$tinggi) : float {
        return self::PHI*pow($jari_jari,2)*$tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume($tinggi) : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$tinggi;
    }
}

$lingkaran = new Lingkaran(7);

$luas_lingkaran = $lingkaran->luas();
$keliling_lingkaran = $lingkaran->keliling();

echo "Luas lingkaran adalah: {$luas_lingkaran} \n";
echo "Keliling lingkaran adalah: {$keliling_lingkaran} \n";

$bola = new Bola(5);

$volume_bola = $bola->volume();
$luas_permukaan_bola = $bola->luas_permukaan();

echo "Volume bola adalah: {$volume_bola} \n";
echo "Luas permukaan bola adalah: {$luas_permukaan_bola} \n";

$nasi_tumpeng = new kerucut(4);
$volume_nasi_tumpeng = $nasi_tumpeng->volume(10);

echo "Volume kerucut nasi tumpeng adalah: {$volume_nasi_tumpeng} \n ";