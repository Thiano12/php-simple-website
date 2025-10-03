<?php
echo "<h2>🏢 SISTEM MANAJEMEN KARYAWAN</h2>";

// Membuat objek karyawan dari berbagai divisi
echo "<h3>📊 Data Karyawan:</h3>";

// Karyawan Divisi IT
$karyawan1 = new Divisi(
    "Ahmad Rizki", 
    ["PHP", "JavaScript", "MySQL", "Laravel"], 
    "Jl. Merdeka No. 123, Jakarta", 
    "1990-05-15",
    "IT",
    12000000,
    3
);

// Karyawan Divisi Marketing
$karyawan2 = new Divisi(
    "Sari Dewi", 
    ["Public Speaking", "Negosiasi", "Digital Marketing"], 
    "Jl. Sudirman No. 45, Bandung", 
    "1992-08-20",
    "Marketing",
    8000000,
    2
);

// Karyawan Divisi HRD
$karyawan3 = new Divisi(
    "Budi Santoso", 
    ["Recruitment", "Training", "Conflict Resolution"], 
    "Jl. Gatot Subroto No. 78, Surabaya", 
    "1988-12-10",
    "HRD",
    9000000,
    5
);

// Menampilkan profil karyawan
$karyawan1->tampilkanProfil();
$karyawan2->tampilkanProfil();
$karyawan3->tampilkanProfil();

// Demonstrasi method khusus
echo "<h3>🔄 Demonstrasi Method:</h3>";

echo "<h4>Method dari Class Karyawan (Parent):</h4>";
echo $karyawan1->getNamaKaryawan() . "<br>";
echo $karyawan1->getSkillKaryawan() . "<br>";

echo "<h4>Method dari Class Divisi (Child):</h4>";
echo $karyawan2->getBagianKerjaKaryawan() . "<br>";
echo $karyawan2->getTugasKaryawan() . "<br>";
echo $karyawan2->getGajiDanBenefit() . "<br>";

echo "<h4>Operasi pada Karyawan:</h4>";
echo $karyawan3->promosiDivisi("Finance", 11000000) . "<br>";
echo $karyawan3->tambahMasaKerja() . "<br>";

// Menampilkan profil setelah perubahan
echo "<h4>Profil Setelah Perubahan:</h4>";
$karyawan3->tampilkanProfil();

// Menampilkan detail lengkap
echo "<h4>📋 Detail Lengkap Karyawan:</h4>";
$detail = $karyawan1->getDetailKaryawan();
echo "<pre>";
print_r($detail);
echo "</pre>";
?>
