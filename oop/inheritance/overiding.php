<?php
// Inherited methods can be overiding by redefining the methods (i.e using the same name) in the child class


class Language {
    public $name;
    public $stack;

    public function __construct($name, $stack){
        $this->name = $name;
        $this->stack = $stack;
    }

    public function intro(){
        echo "<p>This {$this->name} programming language is meant for {$this->name}</p>";
    }
}

class Frontend extends Language {
    public $engineer;

    public function __construct($name, $stack, $engineer){
        $this->name = $name;
        $this-> stack = $stack;
        $this-> engineer = $engineer; 
    }

    public function intro(){
        echo "<p>Engineer {$this->engineer} uses {$this->name} language for {$this->stack} engineering.</p>";
    }
}

$proffuad = new Frontend("Python", "Backend", "Proffuad");
$proffuad-> intro();

?>