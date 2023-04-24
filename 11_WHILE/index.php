<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

<?php

    // WHILE PETLJA
    /*
        1. Postavite početnu vrednost - inicijalizacija
        2. while(uslov)
            2.a. TRUE - Blok naredbi koji se odvija ukoliko je 
            uslov u while petlji ispunjen
            2.b. FALSE - Ne izvršava se blok naredbi unutar while petlje
            već se prelazi na kod ispod bloka
    */

    // 1. ZADATAK
    // Ispisati brojeve od 1 do 20:
    // a) Sve u istom redu
    // b) Svaki u novom redu

    $i = 1;
    while($i <= 20) {
        // echo "$i "; // a)
        echo "$i <br/>"; // b)
        $i++;
    }
    // Vrednost $i nakon petlje je 21 

    // Ekvivalentni izrazi za povećavanje za jedan su:
    // $i++;
    // $i += 1;
    // $i = $i + 1;

    // Ekvivalentni izrazi za smanjivanje za jedan su:
    // $i--;
    // $i -= 1;
    // $i = $i - 1;

    ///////////////////////////////////////////

    // 2. ZADATAK
    // Ispisati brojeve od 20 do 1. 
    $i = 20;
    while($i >= 1) {
        echo "$i ";
        $i--;
    }
    // $i ima vrednost 0 nakon izvršenja ove while petlje

    ///////////////////////////////////////////

    // 3. ZADATAK
    // Ispisati parne brojeve od 1 do 20.
    $n = 1;
    while($n <= 20) {
        if($n%2 == 0) {
            echo "$n ";
        }
        $n++;
    }

    ///////////////////////////////////////////

    // 4. ZADATAK
    // Kreirati n paragrafa sa proizvoljnim tekstom 
    // i naizmenično ih obojiti u tri različite boje 
    // 1. način
    $n = 5;
    $i = 1;
    while($i <= $n) {
        if($i%3 == 0) {
            echo "<p style='color:red;'>Hello $i</p>";
        }
        elseif($i%3 == 1) {
            echo "<p style='color:blue;'>Hello $i</p>";
        }
        else {
            echo "<p style='color:orange;'>Hello $i</p>";
        }
        $i++;
    }

    // 2. način
    $n = 7;
    $i = 1;
    while($i <= $n) {
        if($i%3 == 0) {
            $boja = "purple";
        }
        elseif($i%3 == 1) {
            $boja = "lime";
        }
        else {
            $boja = "magenta";
        }
        echo "<p style='color:$boja;'>Hello $i</p>";
        $i++;
    }

    // 3. način
    $n = 7;
    $i = 1;
    while($i <= $n) {
        $boja = "magenta";
        if($i%3 == 0) {
            $boja = "purple";
        }
        elseif($i%3 == 1) {
            $boja = "lime";
        }
        echo "<p style='color:$boja;'>Hello $i</p>";
        $i++;
    }

    ///////////////////////////////////////////

    // 5. ZADATAK
    // Kreirati n proizvoljnih slika i staviti im naizmenično dva različita okvira
    // 1. način
    $n = 4;
    $k = 0;
    while($k < $n) {
        $klasa = "plaviOkvir";
        if($k % 2 == 0) {
            $klasa = "zeleniOkvir";                
        } 
        echo "<img src='cvet.png' class='$klasa'>";
        $k++;
    }
    echo "<hr>";

    // 2. način
    $n = 4;
    $k = 0;
    $border1 = "border: red 2px solid;";
    $border2 = "border: orange 2px solid;";
    while($k < $n) {
        if($k % 2 == 0) {
            echo "<img src='cvet.png' style='$border1'>";                
        } 
        else {
            echo "<img src='cvet.png' style='$border2'>";
        }
        $k++;
    }

    ///////////////////////////////

    // 6. ZADATAK
    // Odrediti sumu brojeva od 1 do 100
    $i = 1;
    $suma = 0;
    while($i <= 100) {
        $suma += $i;
        $i++;
    }
    echo "<p>Suma brojeva od 1 do 100 je: $suma</p>";

    ///////////////////////////////

    // Bonus zadatak
    $i = 1;
    $n = 50;
    while($i<$n) {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);

        $color = "rgb($r,$g,$b)";
        echo "<p style='color: $color;'>Hello</p>";

        $i++;
    }

    ////////////////////

    // 7. ZADATAK
    // Odrediti sumu brojeva od 1 do n
     $i = 1;
    $n = 45;
    $suma = 0;
    while($i <= $n){
        $suma += $i;
        $i++;
    }
    echo "<p>Suma brojeva od 1 do $n je : $suma</p>";

    ////////////////////

    // 8. ZADATAK
    // Odrediti sumu brojeva od n do m
    $n = $i = 10;
    $m = 22;
    $sum = 0;
    while($i <= $m){
        $sum += $i;
        $i++;
    }
    echo "<p>Suma brojeva od $n do $m je : $sum</p>";

    ////////////////////

    // 9. ZADATAK
    // Odrediti proizvod brojeva od n do m
    $p = 1;
    $n = $i = 5;
    $m = 7;
    while($i <= $m) {
        $p *= $i;
        $i++;
    }
    echo "Proizvod brojeva od $n do $m je $p";

    ////////////////////
    
?>