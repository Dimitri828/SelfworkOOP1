<?php
trait Calculator{
    public function sum($a, $b) {
  return $a + $b;
}

public function sub($a, $b) {
  return $a - $b;
}

public function mul($a, $b) {
  return $a * $b;
}

public function div($a, $b) {
  return $a / $b;
}

public function sqr($a){
  return sqrt($a);
}

}

class Rettangolo{
    public $base;
    public $altezza;
    use Calculator;
    public function __construct($b,$h){
        $this->base=$b;
        $this->altezza=$h;
    }

    public function perimetro(){
        $resultP=($this->sum($this->base,$this->altezza))*2;
        echo $resultP."\n";
    }

    public function area(){
        $resultA= $this->mul($this->base,$this->altezza);
        echo $resultA."\n";
    }
    
    public function diagonale(){
        $esp= ($this->base**2)+($this->altezza**2);
        $sqr= $this->sqr($esp);
        echo $sqr."\n";
    } 
}

$rettangolo1=new Rettangolo(2,3);

$rettangolo1->perimetro();
$rettangolo1->area();
$rettangolo1->diagonale();