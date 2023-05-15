<?php
// class Mahasiswa {
//   public $nim;
//   public $nama;
//   public $jurusan;

//   function tampil_biodata($nim, $nama, $jurusan) {
//     $this->nim = $nim;
//     $this->nama = $nama;
//     $this->jurusan = $jurusan;
//   }
// }
// $mahasiswa1 = new Mahasiswa();
// $mahasiswa1->tampil_biodata('1840520','M. Daffa Azriel Fernanda','Teknik Informatika');

// echo "Nim: " . $mahasiswa1->nim . "<br>";
// echo "Nama: " . $mahasiswa1->nama . "<br>";
// echo "Jurusan: " . $mahasiswa1->jurusan . "<br>"; 


// pake construct //

class Mahasiswa2 {
    public $nim;
    public $nama;
    public $jurusan;

    function __construct($nim, $nama, $jurusan) {
      $this->nim = $nim;
      $this->nama = $nama;
      $this->jurusan = $jurusan;
    }
    function tampil_biodata() {
      return $this->nim;
      return $this->nama;
    }
  }
  
  $mahasiswa2 = new Mahasiswa2("1840520", "M. Daffa Azriel Fernanda", "Teknik Informatika");
  echo "Nim: " . $mahasiswa2->nim . "<br>";
  echo "Nama: " . $mahasiswa2->nama . "<br>";
  echo "Jurusan: " . $mahasiswa2->jurusan; "<br>";
?>