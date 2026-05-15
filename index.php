<?php
class Company{
    // attributi
    public $name;
    public $location;
    public $totEmployees;
    public static $employSalary=2000;
    public static $totExpenses=0;
    // Contstruct
   public function __construct($_name,$_location,$_totEmployees=0){
    $this->name= $_name;
    $this->location= $_location;
    $this->totEmployees= $_totEmployees;
    

   }
//    Metodi
    public function countEmployees(){
    if ($this->totEmployees>0) {
        echo "L’ufficio $this->name con sede in $this->location ha ben $this->totEmployees dipendenti \n";
        
    }else{
        echo"L’ufficio $this->name con sede in $this->location non ha dipendenti";
    }    
    }
   
    public function expenses($month=12){
       $money= ($this->totEmployees*self::$employSalary)*$month;
        echo"Il costo dei dipendenti dell'azienda è di $money euro \n";
        return $money;
    
    }
    

    public function totCost($month=12){
       return self::$totExpenses += $this->expenses($month);
       
       
    }

    public static function printTotCost(){
        echo "L'azienda plant in totale spende ". self::$totExpenses ." euro \n";
    }
}


$pisa = new Company("Plant Pisa","Pisa",35);
$Torino = new Company("Plant Torino","Torino",22);
$Salerno = new Company("Plant Salerno","Salerno",18);
$Bologna = new Company("Plant Bologna","Bologna",40);
$Napoli = new Company("Plant Napoli","Napoli",0);

// print_r($pisa);

$pisa->countEmployees();
$Torino->countEmployees();
$Salerno->countEmployees();
$Bologna->countEmployees();
$Napoli->countEmployees();



// Costo totale
$pisa->totCost();
$Torino->totCost();
$Salerno->totCost();
$Bologna->totCost();
$Napoli->totCost();

Company::printTotCost();

