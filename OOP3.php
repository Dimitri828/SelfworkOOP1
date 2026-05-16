<?php
class Vertebrate{
    protected function iAmVertebrate(){
        echo"Sono un animale vertebrato \n";
    } 
}

class Warmblood extends Vertebrate{
    protected function iAmWarmblood(){
        $this->iAmVertebrate();
        echo"Sono un animale a Sangue caldo\n";
    } 
}

class Mammal extends Warmblood{
     protected function iAmMammal(){
     
     $this->iAmWarmblood();   
     echo"Sono un mammifero\n";
    } 
}
class Bird extends Warmblood{
     
    public function __construct(){
        $this->iAmBird();
    }
    protected function iAmBird(){
        
        $this->iAmWarmblood();
        echo"Sono un uccello\n";
    } 
}
class Coldblood extends Vertebrate{
     protected function iAmColdblood(){
        $this->iAmVertebrate();
        echo"Sono un animale a sangue freddo\n";
    } 
}

class Fish extends Coldblood{
    
    public function __construct(){
        $this->iAmFish();
    }

    protected function iAmFish(){
        
        
        $this->iAmColdblood();
        echo"Splash!\n";
    } 
}

class Reptile extends Coldblood{
     protected function iAmReptile(){
        $this->iAmVertebrate();
        $this->iAmColdblood();
        echo"Sono un rettile\n";
    } 
}

class amphibian extends Coldblood{
    
    

    protected function iAmAmphibian(){
        $this->iAmVertebrate();
        $this->iAmColdblood();
        echo"Sono un anfibio\n";
    } 
}

$magikarp=new Fish();

$pidgey=new Bird();

