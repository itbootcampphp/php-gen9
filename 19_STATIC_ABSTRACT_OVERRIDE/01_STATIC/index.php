<?php

require_once "Krug.php";


/*$a = new Krug(10);   // $a->r = 10
echo $a->obimKruga() . "<br>";  // 2 * $a->r * 3.14
echo $a->povrsinaKruga() . "<br>";  // $a->r * $a->r * 3.14


$b = new Krug(4);    // b->r = 4
echo $b->obimKruga() . "<br>";  // 2 * $b->r * 3.14
echo $b->povrsinaKruga() . "<br>"; // $b->r * $b->r * 3.14

echo Krug::PI . "<br>";

$c = new Krug(2);
echo $a->obimKruga() . "<br>";
echo $a->povrsinaKruga() . "<br>";
//$a->pi = 3.14159; //ovako postavimo ako je public
$a->setPi(3.14159);
echo $a->obimKruga() . "<br>";
echo $a->povrsinaKruga() . "<br>";*/

echo Krug::getPi()."<br>";
Krug::setPi(3.14159);
echo Krug::getPi(). "<br>";

$d = new Krug(2.7);
echo $d->obimKruga() . "<br>";
echo $d->povrsinaKruga() . "<br>";
Krug::setBrojDecimala(4);
echo $d->obimKruga() . "<br>";
echo $d->povrsinaKruga() . "<br>";




?>