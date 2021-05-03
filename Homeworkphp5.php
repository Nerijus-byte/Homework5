<?php

////»Parašyti PHP klasę, kuri parašytų “Sveiki, mano vardas yra {vardas}”, kur {vardas} būtų metodo argumento vertė klasės viduje.(objektiškai)

class YourName {

    public $name;
    public function setName ($name)
    {
        $this->name = $name;
    }
}
$firstclass = new YourName();
$firstclass->setName("Nerijus");

var_dump($firstclass);
echo "Helo my name is $firstclass->name";


////»Sukurti klasę Person, kuri turėtų atributus vardas, pavarde, amzius ir sukurti tris skirtingus tos klasės objektus. .(objektiškai)

class Person{

    public $name;
    public $surname;
    public $age;

    public function set_name($name){
        $this->name = $name;
    }
    public function set_surname($surname){
        $this->surname = $surname;
    }
    public function set_age($age){
        $this->age = $age;
    }
}

$othername = new Person();
$othersurname = new Person();
$otherage = new Person();
$othername->set_name("Jhon");
$othersurname->set_surname("Jhonson");
$otherage->set_age(60);

echo $othername->name;
echo $othersurname->surname;
echo $otherage->age;



////»Parašyti PHP klasę, kuri paskaičiuotų faktorialą. .(objektiškai)

class factorial_of_a_number
{
    protected $_n;
    public function __construct($n)
    {
        if (!is_int($n))
        {
            throw new InvalidArgumentException('Not a number or missing argument');
        }
        $this->_n = $n;
    }
    public function result()
    {
        $factorial = 1;
        for ($i = 1; $i <= $this->_n; $i++)
        {
            $factorial *= $i;
        }
        return $factorial;
    }
}

$newfactorial = New factorial_of_a_number(9);
echo $newfactorial->result();

////»Parašyti PHP skriptą, kuris paskaičiuotų skirtumą tarp dviejų datų. .(objektiškai)

$origin = new DateTime('2009-10-11');
$target = new DateTime('2010-06-18');
$interval = $origin->diff($target);
echo $interval->format('%R%a days');


////»Sukurti abstrakčią klasę gyvūnas, kuri turi du private atributus gyvūno Rūšis bei kuo Minta, taip pat abstraktų metodą garsas().
//// Taip pat sukurti dvi pasirinktų gyvūnų klases, kurios paveldėtų klasę gyvūnas, panaudotų jos savybes bei implementuotų metodą garsas()

//abstract class Animals{
//    private $species;
//   private $eats;

//    public abstract function sound();



//}
//   class Dogs extends Animals {
//	public function sound() {
//        return ;
//    }
//}

//class Cats extends Animals {
//    public function sound() {
//        return ;
//    }
//}


//»Parašyti inteface‘ą Forma, kuris turi vieną metodą apskaiciuotiPlota(), ir tris klases staciakampis, trikampis ir apskritimas, kurios įgyvendina šį interface‘ą.

//interface Area{
//    public function getArea();
//}

