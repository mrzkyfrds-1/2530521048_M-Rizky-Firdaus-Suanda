<?php
class DemoSiklus {
    public function __construct() { echo "Object dibuat<br>"; }
    public function tampil(): void { echo "Method dipanggil<br>"; }
    public function __destruct() { echo "Destructor berjalan<br>"; }
}

$obj = new DemoSiklus();
$obj->tampil();
echo "Sebelum unset<br>";
unset($obj);
echo "Program dilanjutkan<br><br>";

echo "Percobaan dengan alias object:<br>";
$obj = new DemoSiklus();
$alias = $obj;
unset($obj);
echo "Objek masih memiliki alias<br>";
unset($alias);
echo "Alias dihapus<br>";