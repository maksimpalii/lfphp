<?php
class Simple {
    public $name; //Игорь
    protected $fname;
    private $birthday;

    public function __construct($smth)
    {
        $this->name = $smth; //Вот здесь
    }

    private function sayHi() {
        echo 'hi '.$this->name;
    }
    protected function sayHello() {
        echo 'hello '.$this->name;
    }

    public function sayPrivet()
    {
        echo 'Привет '.$this->name;
        $this->sayHello();
        $this->sayHi();
    }
}
$simple = new Simple('Игорь');
$simple->name = 'Петя';
$simple->sayPrivet();
die();

class extendedSimple extends Simple {
    protected $asd;

    public function __construct($smth, $fname)
    {
        parent::__construct($smth);
        $this->fname = $fname;
    }
    public function sayPrivet()
    {
        parent::sayPrivet();
        echo $this->name;
    }
}

$extented = new extendedSimple('Вася');
$extented->sayPrivet();