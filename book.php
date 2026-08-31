<?php

class Book {
    public $judul;
    public $penulis;
    public $tahun;

    public function __construct($judul, $penulis, $tahun) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }

    public function tampilkanInfo() {
        echo "Judul: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
        echo "Tahun Terbit: " . $this->tahun . "<br>";
    }
}


// Class Member
class Member {
    public $nama;
    public $idMember;

    public function __construct($nama, $idMember) {
        $this->nama = $nama;
        $this->idMember = $idMember;
    }

    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "ID Member: " . $this->idMember . "<br>";
    }
}


$buku1 = new Book("Laskar Pelangi", "Andrea Hirata", 2005);
$buku2 = new Book("Bumi", "Tere Liye", 2014);
$buku3 = new Book("Negeri 5 Menara", "Ahmad Fuadi", 2009);


$member1 = new Member("Caca", "M001");
$member2 = new Member("Nisa", "M002");


echo "<h2>Informasi Buku</h2>";

echo "<b>Buku 1</b><br>";
$buku1->tampilkanInfo();

echo "<br><b>Buku 2</b><br>";
$buku2->tampilkanInfo();

echo "<br><b>Buku 3</b><br>";
$buku3->tampilkanInfo();


echo "<h2>Informasi Member</h2>";

echo "<b>Member 1</b><br>";
$member1->tampilkanInfo();

echo "<br><b>Member 2</b><br>";
$member2->tampilkanInfo();


echo "<h2>Simulasi Peminjaman</h2>";

echo $member1->nama . " meminjam buku \"" . $buku1->judul . "\".";
?