<?php


class Person
{
    private $name;

    public function sayHello()
    {
        return "Ciao $this->name";
    }

    public function __construct($str)
    {
        $this->name = $str;
    }
    protected function getName() //Lettura
    {
        return $this->name;
    }
    protected function setName($string) //Lettura
    {
        return $this->name = $string;
    }
}

class Student extends Person
{
    public $avg;

    public function __construct($str, $int)
    {
        //prendi il costruttore del parent, e importa tutto
        parent::__construct($str);
        $this->avg = $int;
    }

    public function sayHello()
    {
        return "Wei" . $this->getName();
    }
}



$studente1 = new Student('Francesco', 5);

//echo $studente1->name;
echo $studente1->sayHello();
//echo $studente1->sayHello();
