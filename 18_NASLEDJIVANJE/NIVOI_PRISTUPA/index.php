<?php

require_once "Vozilo.php";
require_once "Automobil.php";

$v = new Vozilo("a", "b", "c");

$v->ispis();

// echo $v->privatnoPolje; -- GRESKA: Van klase ne mozemo pristupiti privatnim poljima (i metodama)
// echo $v->zasticenoPolje;  -- GRESKA: Van klase ne mozemo pristupiti zasticenim poljima (i metodama)
echo $v->javnoPolje; // OK

$a = new Automobil("d", "e", "f", 5);
$a->ispis();
$a->ispisAuto();
?>