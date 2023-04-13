<?php
    $a = "Zdravo svete"; //promenljiva $a dobija vrednost "Zdravo svete"
    echo $a; // ovo prikazuje string "Zdravo svete"
    echo "<br>";
    $a = 28; 
    echo $a;
    echo "<br>";
    $a = 28 + 2; 
    echo $a;
    echo "<br>";
    $a = 2.5 + 8.2; 
    echo $a;
    echo "<br>";
    $a = 100; 
    echo $a;
    echo "<br>";
    $b = $a - 20;
    echo "vrednost promenljive b je " . " osamdeset " . $b;
    echo "<br>";
    echo "vrednost promenljive b je $b";
    echo "<br>";
    echo 'ovo je proba';
    echo "<br>";
    echo 'vrednost promenljive b je $b'; // OVO NE MOZE
    echo "<br>";
    $c = "1";
    $d = $c + 2;
    echo $d;
    echo "<br>";
    $d = $d + 2; //$d += 2;
    echo $d;
    echo "<br>";
    $d = $d - 5; //$d -= 5;
    echo $d;


    echo "<hr>";
    /* 1. zadatak  */
    $h = 20;
    $m = 35;

    $rez = $h * 60 + $m; //$rez = $m + $h * 60;

    echo "Rezultat zadatka je " . $rez . " minuta";
    echo "<hr>";
    /* 2. zadatak  */
    date_default_timezone_set('Europe/Belgrade');
    $h = date('G');
    $m = date('i');

    echo "Trenutno vreme je ". $h . " sati i " . $m . " minuta<br>";

    $rez = $h * 60 + $m;

    echo "Rezultat zadatka 2. je " . number_format($rez, 0, ",", ".") . " minuta";
    echo "<hr>";

?>