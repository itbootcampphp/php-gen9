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
    
    // 10. ZADATAK
    // Odrediti sumu kvadrata parnih i 
    // sumu kubova neparnih brojeva od n do m
    $p = 1;
    $n = $i = 1;
    $m = 10;
    $parni = $neparni = 0;
    while($i <= $m )
    {
        if($i % 2 ==0)
        {
            $parni =($i * $i) + $parni; //$i**2  to bi znacilo $i na kvadrat
        }
        else
        {
            $neparni = ($i * $i *$i) + $neparni; // $i na kub je $i**3
        }
    $i++;
    }
    echo "<p>Suma kvadrata parnih je $parni. <br/> Suma kubova neparnih je $neparni</p>";

    ////////////////////

    // 11. ZADATAK
    // Odrediti sa koliko brojeva je deljiv uneti broj k 
    $br = 0;
    $k = 15;
    $i = 1;
    while($i<=$k) {
        if($k % $i == 0) {
            $br++;
        }
        $i++;
    }
    echo "<p>Broj $k ima $br delilaca</p>";

    ////////////////////

    // 12. ZADATAK
    // Odrediti da li je dati prirodan broj n prost. 
    // Broj je prost ako je deljiv samo sa jedan i sa samim sobom.

    // 1. način
    $br = 0; // sa koliko brojeva je deljiv uneti broj $k
    $k = 13; // uneti broj
    $i = 1; // iterator koji pokušava da deli uneti broj $k
    while($i<=$k) {
        if($k % $i == 0) {
            $br++;
        }
        $i++;
    }
    if($br == 2) {
        echo "<p>Broj $k je prost</p>";
    }
    else {
        echo "<p>Broj $k nije prost</p>";
    }

    // 2. način
    $k = 10;
    $i = 2;
    $prost = true; // pretpostavka da je broj prost
    // while($i <= sqrt($k))
    while($i < $k) {
        if($k % $i == 0) {
            $prost = false;
            break;
        }
        $i++;
    }  
    if($prost) {
        echo "<p>Broj $k jeste prost</p>";
    }
    else {
        echo "<p>Broj $k nije prost</p>";
    }

    // 13. ZADATAK
    // Množiti sve brojeve od 20 ka 1, 
    // sve dok proizvod ne predje 10.000. 
    // Prikazati konacan rezultat crvenom bojom 
    // a poslednje pomnozeni broj - zelenom.
    
    // 1. način (Nikola Vemić)
    $k = 20;
    $n = 20;
    $i = 1;
    $proizvod = 1;
    while ( $i <= $k){
        $proizvod *= $n;
        if ( $proizvod > 10000){
            echo "<p style='color:red'>$proizvod</p>";
            echo "<p style='color:green'>$n</p>";
            break;
        }
        $n--;
        $i++;
    }

    // 2. način (Adam Dervišević)
    $i = 20;
    $pro = 1;
    while($i >= 1) {
        $pro = $pro * $i;
        if($pro > 10000){
            break;
        }
        $i--;
    }
    echo "<p>Poslednji broj koji je ucestovao je: <span style='color:red;'>$i</span></p>";
    echo "<p>Prozivod je: <span style='color:green;'>$pro</span></p>";

    // 3. način (Andreja Raičević)
    $n = 21;
    $p = 1;
    while ($p <= 10000 && $n >= 1) {
        $n--;
        $p *= $n;
    }
    echo "<p>Poslednji broj koji je ucestvovao u mnozenju je :<span  style='color: green;'>$n</span></p>";
    echo "<p>Krajnji rezultat je :<span style='color: red;'>$p</span></p>";

    // 13. ZADATAK
    // 1. način (Srđan Ćulibrk)
    $n = 8;
    $m= 132;
    if($n < $m){
        $rez = $n;
        while($rez <= $m){
            $rez *= $n;
        }
        echo $rez;
    } else {
        echo "<p>Greska</p>";
    }
?>