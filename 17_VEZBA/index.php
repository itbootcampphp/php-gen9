<?php
$brojSrana = [500, 200, 330, 400, 120];
$cena = [5000, 3500, 1200, 900, 600];

//PROLAZAK
/*for($i=0; $i<count($brojSrana); $i++)
foreach ($brojSrana as $brS)
$i = 0; while($i < count($brojSrana)){ ... $i++;}*/

//Uzimanje vrednosti elemenata
/*$brS = $brojSrana[0]; //ovo vraca 500
$brS2 = $brojSrana[2];*/

function maxProsek($brojSrana, $cena){
    //$max = $cena[0] / $brojSrana[0];
    $max = 0;
    for($i = 0; $i < count($brojSrana); $i++){
        $t = $cena[$i] / $brojSrana[$i];
        if($max < $t){
            $max = $t;
        }
    }

    return $max;
}

$brojSranaA = ['kljiga1' => 500, 'kljiga2' => 200, 'kljiga3' => 330, 'kljiga4' => 400, 'kljiga5' => 120];
$cenaA = ['kljiga1' => 5000, 'kljiga2' => 3500, 'kljiga3' => 1200, 'kljiga4' => 900, 'kljiga5' => 600];
//PROLAZAK
/*foreach($brojSranaA as $k => $v)
*/

function maxProsekA($brojSranaA, $cenaA){
    $max = 0;
    foreach($brojSranaA as $k => $v){
        $t = $cenaA[$k] / $v;
        if($max < $t){
            $max = $t;
        }
    }
    return $max;
}

$nizKnjiga = [
    ['brojStrana' => 500, 'cena' => 5000],
    ['brojStrana' => 200, 'cena' => 3500],
    ['brojStrana' => 330, 'cena' => 1200],
    ['brojStrana' => 400, 'cena' => 900],
    ['brojStrana' => 120, 'cena' => 600]
];

function maxProsekNizA($nizKnjiga){
    $max = 0;
    for($i = 0; $i < count($nizKnjiga); $i++){
        $t = $nizKnjiga[$i]['cena'] / $nizKnjiga[$i]['brojStrana'];
        if($max < $t){
            $max = $t;
        }
    }
   
    return $max;
}

$dan = ['temperatura' => [8, 5, 15, -2, 0]];
for($i = 0; $i < count($dan['temperatura']); $i++){
    $t = $dan['temperatura'][$i];
}

class Knjiga{
    public $brojSrana;
    public $cena;
}

$k1 = new Knjiga();
$k1->brojSrana = 500;
$k1->cena = 5000;

$k2 = new Knjiga();
$k2->brojSrana = 200;
$k2->cena = 3500;

$k3 = new Knjiga();
$k3->brojSrana = 330;
$k3->cena = 1200;

$k4 = new Knjiga();
$k4->brojSrana = 400;
$k4->cena = 900;

$k5 = new Knjiga();
$k5->brojSrana = 120;
$k5->cena = 600;

$knjige = array($k1, $k2, $k3, $k4, $k5);

function maxProsekNiz($knjige){
    $max = 0;
    foreach ($knjige as $knjiga) {
        $t = $knjiga->cena / $knjiga->brojSrana;
        if($max < $t){
            $max = $t;
        }
    }   
    return $max;
}

function maxProsekNiz2($knjige){
    $max = 0;
    for ($i=0; $i<count($knjige); $i++) {
        $knjiga = $knjige[$i];
        $t = $knjiga->cena / $knjiga->brojSrana;
        if($max < $t){
            $max = $t;
        }
    }   
    return $max;
}



