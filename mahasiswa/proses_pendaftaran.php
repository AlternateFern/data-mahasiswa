<?php

class mahasiswa{
    public $nim;
    public $nama;
    public $password;

    function __construct($nim,$nama,$password){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->password = $password;
    }


    function tampilBiodata(){
        echo "Nim : " . $this->nim . "<br />";
        echo "Nama : " . $this->nama . "<br />";
        echo "Password : " . $this->password . "<br />";
        
    }

    function validasi(){
        $this->nim;
        $this->nama;
        $this->password;
        if($this->nim === "" or $this->nama === "" or $this->password === "") {
            echo '<h3 style="color:red;">TOLONG ISI SELURUH DATA YANG DIBUTUHKAN</h3>';
            return false;
        }
        else{
            return true;
        }
    }
}

$mahasiswa = new mahasiswa($_POST['nim'],$_POST['nama'],$_POST['password']);
if($mahasiswa->validasi()) {
$mahasiswa->tampilBiodata();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses</title>
</head>
<body>
    <a href="form.php">Kembali</a>
</body>
</html>