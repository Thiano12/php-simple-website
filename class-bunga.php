<?php
class Kalkulator {
    private $angka1;
    private $angka2;
    
    public function setAngka($a, $b) {
        $this->angka1 = $a;
        $this->angka2 = $b;
    }
    
    public function tambah() {
        return $this->angka1 + $this->angka2;
    }
    
    public function kurang() {
        return $this->angka1 - $this->angka2;
    }
    
    public function kali() {
        return $this->angka1 * $this->angka2;
    }
    
    public function bagi() {
        if ($this->angka2 != 0) {
            return $this->angka1 / $this->angka2;
        } else {
            return "Error: Pembagian dengan nol!";
        }
    }
    
    public function tampilkanHasil() {
        echo "Angka 1: " . $this->angka1 . "<br>";
        echo "Angka 2: " . $this->angka2 . "<br>";
        echo "Penjumlahan: " . $this->tambah() . "<br>";
        echo "Pengurangan: " . $this->kurang() . "<br>";
        echo "Perkalian: " . $this->kali() . "<br>";
        echo "Pembagian: " . $this->bagi() . "<br>";
    }
}

// Penggunaan class Kalkulator
$kalkulator = new Kalkulator();
$kalkulator->setAngka(10, 5);
$kalkulator->tampilkanHasil();

echo "<br>";

// Menggunakan angka berbeda
$kalkulator->setAngka(8, 2);
$kalkulator->tampilkanHasil();
?>
