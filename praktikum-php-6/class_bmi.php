<?php
require_once 'class_BMIPasien.php';

class BMI extends BMIPasien{
    public $berat;
    public $tinggi;
    
    public function __construct($berat, $tinggi){
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    function nilaiBMI(){
        $this->hasilBMI = number_format((float)$this->berat / ($this->tinggi / 100) ** 2, 1, '.', '');
        return $this->hasilBMI;
    }

    public function statusBMI(){
        if ($this->hasilBMI < 18.5){
            return 'Kekurangan berat badan';
        }
        else if ($this->hasilBMI >= 18.5){
            return 'Normal';
        }
        else if ($this->hasilBMI >= 25){
            return 'Kelebihan berat badan';
        }
        else if ($this->hasilBMI >= 30){
            return 'Kegemukan(Obesitas)';
        }
    }
}
?>