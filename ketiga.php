<?php

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume($tinggi) : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $tinggi;
    }
}

// Membuat objek dari kelas Kerucut
$nasi_tumpeng = new Kerucut();

// Mengatur nilai jari-jari secara langsung
$nasi_tumpeng->jari_jari = 4;

// Menghitung volume dari nasi_tumpeng dengan tinggi 10 cm
$volume_nasi_tumpeng = $nasi_tumpeng->volume(10);

// Menampilkan hasilnya
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

// Membuat objek dari kelas Lingkaran
$lingkaran = new Lingkaran();

// Mengatur nilai jari-jari secara langsung
$lingkaran->jari_jari = 7;

// Menghitung luas dan keliling lingkaran
$luas_lingkaran = $lingkaran->luas();
$keliling_lingkaran = $lingkaran->keliling();

// Menampilkan hasilnya
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

// Membuat objek dari kelas Bola
$bola = new Bola();

// Mengatur nilai jari-jari secara langsung
$bola->jari_jari = 5;

// Menghitung volume dan luas permukaan bola
$volume_bola = $bola->volume();
$luas_permukaan_bola = $bola->luas_permukaan();

// Menampilkan hasilnya
echo "Volume bola adalah: {$volume_bola} \n";
echo "Luas permukaan bola adalah: {$luas_permukaan_bola}";
