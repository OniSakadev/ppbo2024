<?php

namespace App\Model\Akademik;

class Pegawai {
    public $nip;
    public $nama;
    public $no_hp;
    public $alamat;

    public function cekIn(): bool {
        // Implementasi
        return true;
    }

    public function cekOut(): bool {
        // Implementasi
        return true;
    }

    public function getNoHp(): int {
        return $this->no_hp;
    }

    public function setNoHp(int $no_hp): void {
        $this->no_hp = $no_hp;
    }
}