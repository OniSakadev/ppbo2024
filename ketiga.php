<?php
//Revisi pada Praktikum 4B
class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume($tinggi) : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $tinggi;
    }
}

$nasi_tumpeng = new Kerucut();

$nasi_tumpeng->jari_jari = 4;

$volume_nasi_tumpeng = $nasi_tumpeng->volume(10);

echo "Volume nasi tumpeng adalah: {$volume_nasi_tumpeng} \n";

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

$lingkaran = new Lingkaran();

$lingkaran->jari_jari = 7;

$luas_lingkaran = $lingkaran->luas();
$keliling_lingkaran = $lingkaran->keliling();

echo "Luas lingkaran adalah: {$luas_lingkaran} \n";
echo "Keliling lingkaran adalah: {$keliling_lingkaran}";

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }

    public function luas_permukaan() : float {
        return 4 * self::PHI * pow($this->jari_jari, 2);
    }
}

$bola = new Bola();

$bola->jari_jari = 5;

$volume_bola = $bola->volume();
$luas_permukaan_bola = $bola->luas_permukaan();

echo "Volume bola adalah: {$volume_bola} \n";
echo "Luas permukaan bola adalah: {$luas_permukaan_bola}";
