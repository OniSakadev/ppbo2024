<?php
require_once 'vendor/autoload.php';

use App\Admin\Dosen;

// Membuat objek $dian yang merupakan instance dari kelas Dosen
$dian = new Dosen();

// Mengisi nilai-nilai atribut
$dian->nama = "Dian Prawira";
$dian->nip = "198411132015041001";
$dian->setNoHp(62111111);
$dian->alamat = "Jln Purnama";
$dian->nidn = "0013118405";

// Menjalankan fungsi mengajar
$dian->mengajar();