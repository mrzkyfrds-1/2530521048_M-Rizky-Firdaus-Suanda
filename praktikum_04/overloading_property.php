<?php
declare(strict_types=1);
class MahasiswaDinamis {
    private array $atributTambahan = [];
    public function __construct(public string $nim, public string $nama) {}
    public function __set(string $key, mixed $value): void {
        $diizinkan = ["hobi", "asalSekolah", "agama"];
        if (!in_array($key, $diizinkan, true)) {
            throw new InvalidArgumentException("Atribut tidak diizinkan");
        }
        $this->atributTambahan[$key] = $value;
    }
    public function __get(string $key): mixed {
        if (!array_key_exists($key, $this->atributTambahan)) {
            throw new OutOfBoundsException("Atribut tidak ditemukan");
        }
        return $this->atributTambahan[$key];
    }
    public function __isset(string $key): bool {
        return isset($this->atributTambahan[$key]);
    }
    public function __unset(string $key): void {
        unset($this->atributTambahan[$key]);
    }
}
$mhs = new MahasiswaDinamis("2530521048", "M Rizky Firdaus Suanda");
$mhs->hobi = "Bermain Game";
echo "Nama: " . htmlspecialchars($mhs->nama, ENT_QUOTES, "UTF-8") . "<br>";
echo "Hobi: " . htmlspecialchars($mhs->hobi, ENT_QUOTES, "UTF-8") . "<br>";
echo "Hobi tersedia? " . (isset($mhs->hobi) ? "Ya" : "Tidak") . "<br>";
unset($mhs->hobi);
echo "Setelah unset, hobi tersedia? " . (isset($mhs->hobi) ? "Ya" : "Tidak");
?>
