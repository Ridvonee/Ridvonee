<?php 
Class motor{
public $nama;
public $merk;
function __construct($a,$b){$this->nama=$a;
$this->merk=$b;
echo "Kelas telah dibuat<br/><br/>";
}
function cetak(){
echo $this->nama."<br/>".$this->nim."<br/><br/>";
}
function __destruct(){
echo "Kelas telah dihancurkan";
}
}
?>
