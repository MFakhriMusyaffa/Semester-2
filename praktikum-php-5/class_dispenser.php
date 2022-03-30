<?php

class Dispenser{
    public $volume;
    public $hargaSegelas;
    public $volumeGelas;
    public $namaMinuman;
    public const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari, $tinggi){
        $this -> jari_jari = $jari;
        $this -> tinggi = $tinggi;
        echo "<br/>Jari-jari : " . $jari . " cm";
        echo "<br/>Tinggi : " . $tinggi . " cm";
    }

    public function VolumeWadah(){
        return self::PHI * $this -> jari_jari * $this -> jari_jari * $this -> tinggi;
    }
}

class Harga extends Dispenser{

    public function __construct($hargaSegelas){
        $this -> hargaSegelas = $hargaSegelas;
        echo"<br>";
        echo "<br/> Diketahui : ";
        echo "<br/>Harga satu gelas : Rp." . $hargaSegelas;
    }
    public function Harga(){
        return $this -> hargaSegelas * 6 ;
    }
}
    
    echo "<br/>  PHI : " . Dispenser :: PHI;
    $volumeWadah = new Dispenser(30, 90);
    $harga = new Harga(2000);
    echo "<br/> Volume Wadah : " . $volumeWadah -> VolumeWadah() . " cm3";
    echo "<br/> Harga 6 Gelas :  Rp. " . $harga -> Harga();

?>
