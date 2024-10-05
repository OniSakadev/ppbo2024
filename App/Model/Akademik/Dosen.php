<?php

namespace App\Model\Akademik;

class Dosen extends Pegawai {
    private $nidn;

    public function mengajar(): void {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
}