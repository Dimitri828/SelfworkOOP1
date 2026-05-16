<?php
 require("OOP5.php");
abstract class Titolo{
    abstract public function title();
}

class Fantasy extends Titolo{
    function title(){
        echo"Chevalier \n";
    }
}

class Horror extends Titolo{
    function title(){
        echo"Paura eh? \n";
    }
}

abstract class Tag{
    abstract public function tag();
}

class Tag1 extends Tag{
    public function tag(){
        echo"Fantasy \n";
    }
}

class Tag2 extends Tag{
    public function tag(){
        echo"Horror \n";
    }
}



 class Post{
    public $titolo;
    public $categoria;
    public $tag;
   
    public function __construct(Titolo $_titolo,Tag $_tag, Categoria $_categoria){
        $this->titolo=$_titolo;
        $this->tag=$_tag;
        $this->categoria=$_categoria;
    }

    public function title(){
        $this->titolo->title();
    }
      public function tag(){
        $this->tag->tag();
    }
      public function getMyCategory(){
        $this->categoria->getMyCategory();
    }
 }

$articolo= new Post(new Fantasy,new Tag1,new Storia );
print_r($articolo);
$articolo->title();
$articolo->getMyCategory();
$articolo->tag();

