<?php
declare(strict_types=1);

class Mahasiswa {
    public function __construct(
        public string $nim,
        public string $nama,
        public int $semester = 1
    ) {}

    public function profil(): string {
        return "$this->nim - $this->nama (Semester $this->semester)";
    }
}

$mhs = new Mahasiswa('2530521048', 'M Rizky Firdaus Suanda', 3);
echo $mhs->profil();
echo "<br>";

$mhs1 = new Mahasiswa('2530521162', 'Cacu');
echo $mhs1->profil();