<?php

namespace App\Admin;

class Dosen extends Pegawai {
    private $nidn;

    public function mengajar(): void {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
}