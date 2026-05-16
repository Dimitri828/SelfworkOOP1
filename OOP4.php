<?php

class Car{
    private $num_telaio;
    
    protected function __construct($_num_telaio){
        $this->num_telaio = $_num_telaio;
    }
    protected function getTelaio(){
        return $this->num_telaio ;

    }
}
class Fiat extends Car{
    
    protected $license;
    protected $name;

    public function __construct($_license,$_name,$_num_telaio) {
        parent::__construct($_num_telaio);
    
        $this->license= $_license;
        $this->name= $_name;
        $this->myCar();
    }
    protected function myCar(){
        echo"La mia macchina e' una ".$this->name.", con targa ".$this->license." e numero di Telaio " .$this->getTelaio(). "\n";
    }
}

$opel=new Fiat("ND 123 OJ","Opel", 1234);


