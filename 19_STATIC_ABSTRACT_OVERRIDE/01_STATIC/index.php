<?php

require_once "Krug.php";


$a = new Krug(10);   // $a->r = 10
echo $a->obimKruga() . "<br>";  // 2 * $a->r * 3.14
echo $a->povrsinaKruga() . "<br>";  // $a->r * $a->r * 3.14

$b = new Krug(4);    // b->r = 4
echo $b->obimKruga() . "<br>";  // 2 * $b->r * 3.14
echo $b->povrsinaKruga() . "<br>"; // $b->r * $b->r * 3.14

echo Krug::PI . "<br>";

?>