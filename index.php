<?php


//ciaoMiChiamoFrancesco = camelCase
//ciao_mi_chiamo_francesco = snake_case

//Il nome deve essere in inglese
//Il nome deve avere una struttura camelCase 
//Il nome dele essere singolare

// $nome = 'Francesco';

// function salutaPersona($string)
// {
//     echo "Ciao $string";
// }

// salutaPersona($nome);


//Classe
//1) La classe va scritta sempre al Singolare
//2) Deve essere sempre in inglese
//3) La prima lettera semnpre maisucola

class Person
{
    //Attributi == Variabile
    public $nome;
    //Public, Protected e Private

    //Metodi == Funzione 
    public function salutaPersona()
    {
        echo "Ciao $this->nome \n";
    }

    //Costruttore 
    public function __construct($string)
    {
        $this->nome = $string;
    }
}

// $persona1 = new Person('Francesco'); //OBJECT
// $persona2 = new Person('Sara'); //OBJECT
// $persona3 = new Person('Alessandra'); //OBJECT
// $persona4 = new Person('Michele'); //OBJECT 
//echo $persona1['nome']; Array [] => 
//echo $persona1->nome; //No tonde = ATtributo



// $persona1->salutaPersona(); //Si tonde = metodo
// $persona2->salutaPersona(); //Si tonde = metodo
// $persona3->salutaPersona(); //Si tonde = metodo
// $persona4->salutaPersona();//Si tonde = metodo


$array = [new Person('Francesco'), new Person('Sara'), new Person('Alessandra'), new Person('Michele')];


foreach ($array as $persona) {
    $persona->salutaPersona();
}
