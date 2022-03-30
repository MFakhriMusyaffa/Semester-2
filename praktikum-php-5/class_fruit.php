<?php
class fruit{ //nama kelas
    public $nama; //obj
    public $color; //obj
    public function __construct($nama, $color ){ //method
        $this->nama = $nama;
        $this->color = $color;
    }
    public function intro(){
        echo "<br/>the fruit is {$this->nama} and the color is {$this->color}";
    }
}

class strawberry extends fruit{ //pewaris kelas
    public $weight; //obj baru
    public function __construct($nama , $color, $weight){ //function baru
        $this->nama = $nama;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro(){
        echo "<br/>Nama buahnya adalah {$this->nama} dengan warna {$this->color} dan beratnya {$this->weight}";
    }
}

$strawberry = new strawberry ("strawberry", "red", 90);
$strawberry -> intro();
?>