<?php

class Company
{
    public $name;
    public $location;
    public $tot;

    public function __construct($str1, $str2, $int = 0)
    {
        $this->name = $str1;
        $this->location = $str2;
        $this->tot = $int;
    }

    public function checkTot()
    {
        if ($this->tot > 0) {
            echo "L'ufficio $this->name con sede in $this->location ha ben $this->tot dipendenti. \n";
        } else {
            echo "L’ufficio $this->name con sede in $this->location non ha dipendenti \n";
        }
    }
}

$company = new Company('Kronos', 'BA', 100);
$company1 = new Company('Apple', 'USA', 3);
$company2 = new Company('Barilla', 'ITA');
$company3 = new Company('Nintendo', 'JAP', 5);
$company4 = new Company('Nokia', 'FIN', 10);
$company5 = new Company('Xioami', 'CHI', 3);

// var_dump($company);
// var_dump($company1);
// var_dump($company2);
// var_dump($company3);
// var_dump($company4);
// var_dump($company5);

$company->checkTot();
$company1->checkTot();
$company2->checkTot();
$company3->checkTot();
$company4->checkTot();
$company5->checkTot();
