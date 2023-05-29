<?php

require_once "Krug.php";


/*$a = new Krug(10);   // $a->r = 10
echo $a->obimKruga() . "<br>";  // 2 * $a->r * 3.14
echo $a->povrsinaKruga() . "<br>";  // $a->r * $a->r * 3.14


$b = new Krug(4);    // b->r = 4
echo $b->obimKruga() . "<br>";  // 2 * $b->r * 3.14
echo $b->povrsinaKruga() . "<br>"; // $b->r * $b->r * 3.14

echo Krug::PI . "<br>";
*/
echo "<hr>";
//pristup statickom polju i metodama bez objekta klase
//Krug::$pi = 3.141; //polje je public
Krug::setPi(3.141); //polje je private
Krug::setBrojDecimala(20);
echo "<p>Promenljiva pi je (poziv bez objekta): " . Krug::getPi() . "</p>";
echo "<p>Broj decimala (poziv bez objekta): " . Krug::getBrojDecimala() . "</p>";

$krug = new Krug(2);
echo "<p>Promenljiva pi je (poziv preko objekta): " . $krug->getPi() . "</p>";
echo "<p>Promenljiva broj decimala je (poziv preko objekta): " . $krug->getBrojDecimala() . "</p>";
echo "<p>Obim kruga je: " . $krug->obimKruga() . "</p>";
echo "<p>Povrsina kruga je: " . $krug->povrsinaKruga() . "</p>";
$krug->setPi(3.14159);
echo "<p>Promenljiva pi je (poziv preko objekta): " . $krug->getPi() . "</p>";
echo "<p>Promenljiva pi je (poziv bez objekta): " . Krug::getPi() . "</p>";
echo "<p>Obim kruga je: " . $krug->obimKruga() . "</p>";
echo "<p>Povrsina kruga je: " . $krug->povrsinaKruga() . "</p>";
Krug::setBrojDecimala(4);
echo "<p>Obim kruga je: " . $krug->obimKruga() . "</p>";
echo "<p>Povrsina kruga je: " . $krug->povrsinaKruga() . "</p>";




?>