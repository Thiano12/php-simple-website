<?php
class Mobil {
    // Properties
    public $merk;
    public $warna;
    private $kecepatan = 0;
    
    // Constructor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }
    
    // Method untuk mengakses property
    public function getInfo() {
        return "Mobil {$this->merk} berwarna {$this->warna}";
    }
    
    // Method untuk mengubah property
    public function setKecepatan($kecepatan) {
        $this->kecepatan = $kecepatan;
    }
    
    public function getKecepatan() {
        return $this->kecepatan;
    }
    
    // Method dengan logika
    public function percepat($tambahan) {
        $this->kecepatan += $tambahan;
        return "Kecepatan sekarang: {$this->kecepatan} km/jam";
    }
}

// Penggunaan class
$mobil1 = new Mobil("Toyota", "Merah");
echo $mobil1->getInfo(); // Output: Mobil Toyota berwarna Merah
echo "<br>";
$mobil1->setKecepatan(50);
echo $mobil1->percepat(20); // Output: Kecepatan sekarang: 70 km/jam
?>
#$this merujuk pada objek saat ini (current object)
#Digunakan untuk mengakses properties dan methods dalam class yang sama
#Constructor (__construct) dijalankan otomatis ketika objek dibuat
##Getter/Setter methods digunakan untuk mengakses dan mengubah nilai properties
#Public properties/methods bisa diakses dari luar class
#Private properties/methods hanya bisa diakses dari dalam clas
