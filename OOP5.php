<?php
abstract class Categoria{
    abstract public function getMyCategory();
}

class Attualità extends Categoria{
     public function getMyCategory(){
    echo"Questa sezione parla di Attualità \n";
}
}

class Sport extends Categoria{
     public function getMyCategory(){
        echo"Questa sezione parla di Sport\n";
     }

}
class Gossip extends Categoria{
     public function getMyCategory(){
        echo"Questa sezione parla di Gossip\n";
     }

}
class Storia extends Categoria{
     public function getMyCategory(){
        echo"questa sezione parla di Storia\n";
     }

}

$attualità= new Attualità();
$attualità->getMyCategory();
$sport= new Sport();
$sport->getMyCategory();
$gopssip= new Gossip();
$gopssip->getMyCategory();
$storia= new Storia();
$storia->getMyCategory();