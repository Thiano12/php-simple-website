<?php
// Interface untuk polimorfisme
interface SuaraHewan {
    public function bersuara();
    public function bergerak();
}

// Abstract class
abstract class Hewan implements SuaraHewan {
    protected $nama;
    protected $umur;
    
    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }
    
    public function getInfo() {
        return "Nama: {$this->nama}, Umur: {$this->umur} tahun";
    }
    
    // Abstract method - harus diimplementasikan oleh child class
    abstract public function makan();
}

// Class-class turunan dengan implementasi polimorfisme
class Kucing extends Hewan {
    public function bersuara() {
        return "{$this->nama} bersuara: Meong! Meong!";
    }
    
    public function bergerak() {
        return "{$this->nama} berjalan dengan lentur";
    }
    
    public function makan() {
        return "{$this->nama} sedang makan ikan";
    }
    
    // Method khusus Kucing
    public function mengeong() {
        return "{$this->nama} mengeong dengan manja";
    }
}

class Anjing extends Hewan {
    private $jenis;
    
    public function __construct($nama, $umur, $jenis = "Kampung") {
        parent::__construct($nama, $umur);
        $this->jenis = $jenis;
    }
    
    public function bersuara() {
        return "{$this->nama} bersuara: Guk! Guk! Woof!";
    }
    
    public function bergerak() {
        return "{$this->nama} berlari dengan lincah";
    }
    
    public function makan() {
        return "{$this->nama} sedang makan tulang";
    }
    
    // Method khusus Anjing
    public function menggonggong() {
        return "{$this->nama} menggonggong keras";
    }
    
    public function getInfo() {
        return parent::getInfo() . ", Jenis: {$this->jenis}";
    }
}

class Burung extends Hewan {
    private $warna_bulu;
    
    public function __construct($nama, $umur, $warna_bulu = "Campur") {
        parent::__construct($nama, $umur);
        $this->warna_bulu = $warna_bulu;
    }
    
    public function bersuara() {
        return "{$this->nama} bersuara: Cit! Cit! Kicau! Kicau!";
    }
    
    public function bergerak() {
        return "{$this->nama} terbang di udara";
    }
    
    public function makan() {
        return "{$this->nama} sedang makan biji-bijian";
    }
    
    // Method khusus Burung
    public function terbang() {
        return "{$this->nama} terbang tinggi dengan bulu {$this->warna_bulu}";
    }
}

// Class tambahan untuk demonstrasi polimorfisme
class Sapi extends Hewan {
    public function bersuara() {
        return "{$this->nama} bersuara: Moo! Moo!";
    }
    
    public function bergerak() {
        return "{$this->nama} berjalan dengan lambat";
    }
    
    public function makan() {
        return "{$this->nama} sedang makan rumput";
    }
    
    public function menghasilkanSusu() {
        return "{$this->nama} menghasilkan susu segar";
    }
}
