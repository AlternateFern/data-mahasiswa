
<?php
class mahasiswa {
  
   function tampilkan_biodata($nim,$nama,$jurusan) {
     return "Nim : $nim <br>Nama : $nama <br>Jurusan : $jurusan";
    }
}
  
$tampil_data = new mahasiswa();

// tampilkan method
echo $tampil_data->tampilkan_biodata("1840520","M. Daffa Azriel Fernanda","Teknik Informatika");
?>