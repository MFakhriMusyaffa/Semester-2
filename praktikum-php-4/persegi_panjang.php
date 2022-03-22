<?php 
class persegiPanjang{
    public $panjang;
    public $lebar;

    function luas_pp(){
        return $this->panjang*$this->lebar;
    }
    function keliling_pp(){
        return 2*($this->panjang+$this->lebar);
    }

    function setLebar($lebar){
        return $this->lebar=$lebar;
    }
    function setPanjang($panjang){
        return $this->panjang=$panjang;
    }
}
$PersegiPanjang = new persegiPanjang();
echo "Luas dan Keliling Persegi Panjang";
echo "<br/>";
echo "<br/>panjang :".$PersegiPanjang -> setPanjang(30);
echo "<br/>lebar :".$PersegiPanjang -> setLebar(10);
echo "<br/>luas persegi panjang : ".$PersegiPanjang -> luas_pp();
echo "<br/>Keliling persegi panjang : ".$PersegiPanjang -> keliling_pp();
?>
