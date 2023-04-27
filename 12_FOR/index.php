<?php

    // 1. ZADATAK
    // Ispisati brojeve od 1 do 20. 

    for($i=1; $i<=20; $i++){
        echo "$i ";
    }
    echo "<hr>";

    /////////////////////////

    // 2. ZADATAK
    // Ispisati brojeve od 20 do 1.
    for($i=20; $i>=1; $i--){
        echo "$i ";
    }
    echo "<hr>";

    ////////////////////////////
    
    // 3. ZADATAK
    // Ispisati parne brojeve od 1 do 20.
    // 1. način
    for($i=2; $i<=20; $i+=2) {
        echo "$i ";
    }
    echo "<hr>";

    // 2. način
    for ($i=1; $i <= 20 ; $i++) {
        if ($i % 2 == 0) {
            echo "$i ";
        }
    }
    
    ////////////////////////////////
    
    // 4. ZADATAK
    // Ispisati dvostruku vrednost brojeva od 5 do 15.
    for($i=5; $i<=15; $i++) {
        $pom= $i * 2;
        echo " $pom ";
        echo $i*2 . " ";
    }
    echo "<hr>";

    ////////////////////////////////

    // 5. ZADATAK
    // Odrediti sumu brojeva od 1 do 100.
    $suma = 0;
    for($i=1; $i<=100; $i++) {
        $suma += $i;
    }
    echo "<p>Suma brojeva od 1 do 100 je: $suma ";
    echo "<hr>";

    ////////////////////////////////

    // 6. ZADATAK
    // Odrediti sumu brojeva od 1 do $n.
    $sum = 0;
    $n = 20;
    for ($i=1; $i <= $n; $i++)
    {
        $sum += $i;
    }
    echo "Suma brojeva od 1 do $n je $sum";
    echo "<hr>";

    ////////////////////////////////

    // 7. ZADATAK
    // Odrediti sumu brojeva od $n do $m.
    $sum = 0;
    $n = $i = 5;
    $m = 10;
    for ($i = $n; $i <= $m; $i++)
    {
        $sum += $i;
    }
    echo "Suma brojeva od $n do $m je $sum";
    echo "<hr>";

    ////////////////////////////////

    // 8. Zadatak
    // Odrediti proizvod brojeva od $n do $m.
    $proiz = 1;
    $n = $i = 5;
    $m = 10;
    for ($i = $n; $i <= $m; $i++)
    {
        $sum *= $i;
    }
    echo "Proizvod brojeva od $n do $m je $sum";
    echo "<hr>";

    ////////////////////////////////

    // 9. ZADATAK
    // Odrediti sumu kvadrata brojeva od n do m

    $sum = 0;
    $n = $i = 5;
    $m = 10;
    for ($i = $n; $i <= $m; $i++)
    {
        $sum = ($i * $i) + $sum; // $sum += $i * $i // $sum += $i**2
    }
    echo "Suma kvadrata od $n do $m je $sum";
    echo "<hr>";

    //////////////////////////////////

    // 10. ZADATAK
    // Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3. 
    // For petljom prikazati naizmenično te tri slike $n puta 
    // (na ekranu treba biti ukupno $n sličica). 

    /*
    1 % 3 = 1 -> 1.jpg
    2 % 3 = 2 -> 2.jpg
    3 % 3 = 0 -> 3.jpg
    4 % 3 = 1 -> 1.jpg
    5 % 3 = 2 -> 2.jpg
    6 % 3 = 0 -> 3.jpg
    7 % 3 = 1 -> 1.jpg
    */

    // 1. način
    $n = 7;
    for($i=1; $i<=$n; $i++) {
        if($i%3 == 1) {
            echo "<img src='slike/1.jpg'>";
        }
        elseif($i%3 == 2) {
            echo "<img src='slike/2.jpg'>";
        }
        elseif($i%3 == 0) {
            echo "<img src='slike/3.jpg'>";
        }
    }

    echo "<hr>";

    // 2. način
    $n = 7;
    for($i=1; $i<=$n; $i++) {
        $ost = $i%3;
        if($ost == 0) {
            $ost = 3;
        }
        echo "<img src='slike/$ost.jpg'>";
    }

    // 3. način
    // probajte korišćenjem naredbe switch

    // ZADATAK
    // Da je zadatak glasio da treba da n puta ispišete slike 1.jpg, 2.jpg i 3.jpg
    echo "<hr>";
    $n = 4;
    for($i=1; $i<=$n; $i++) {
        for($j=1; $j<=3; $j++) {
            echo "<img src='slike/$j.jpg'>";
            //break; 
        }
        echo "<br>";
        // break;
    }

    // ZADATAK za razmišljanje
    // Koristeći for petlju/petlje na ekranu ispisati šahovsku tablu
    // 8 x 8 dimenzija, sa naizmeničnim crnim i belim poljima

    ////////////////////////////////

    // 11. ZADATAK
    // Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30. *
    // 1. način
    $sum=0;
    for($i=1;$i<=30;$i++){
        if($i%9 == 0){
            $sum += $i;
        }
    } 
    echo "$sum";

    // 2. način
    $sum=0;
    for($i=9;$i<=27;$i+=9){
        $sum += $i;
    } 
    echo "$sum";

    ////////////////////////////////

    //12. ZADATAK
    //Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100. *
    // 1. način
    $p = 1;
    for($i=20; $i<=100; $i++){
        if($i%11==0){
            $p *= $i;
        }
    } 
    echo "$p";

    // 2. način
    $p = 1;
    for($i=22; $i<=100; $i+=11){
        $p *= $i;
    } 
    echo "$p";

    ////////////////////////////////

    // 13. ZADATAK
    // Prebrojati koliko ima brojeva deljivih sa 13 u intervalu od 5 do 150. 
    // 1. način
    $brojac = 0;
    for($i=5;$i<=150;$i++){
        if($i%13 == 0){
            $brojac += 1;
        }
    } 
    echo "$brojac";

    // 2. način
    $brojac = 0;
    for($i=13; $i<=150; $i+=13){
        $brojac += 1; // $brojac++; //$brojac+=1;
    } 
    echo "$brojac";

    ////////////////////////////////

    // 14. ZADATAK
    // Ispisati aritmetičku sredinu brojeva od $n do $m.
    $n = 5;
    $m = 9;
    $zbir = 0;
    $br = 0;
    for($i=5; $i<=9; $i++) {
        $zbir += $i; // $zbir = $zbir + $i;
        $br++; // $br += 1; // $br = $br + 1;
    }
    echo "<p>Zbir brojeva od $n do $m je $zbir, dok je broj brojeva $br</p>";
    $arsr = $zbir / $br;
    echo "<p>Aritmetička sredina je $arsr</p>";

    ////////////////////////////////

    // 15. ZADATAK
    // Prebrojati koliko brojeva od $n do $m je pozitivno, a koliko njih je negativno. 

    $n = -15;
    $m = 25;
    $pozitivni = 0;
    $negativni = 0;
    for($i = $n; $i <= $m; $i++){
        if($i < 0){
            $negativni++;
        }
        else{
            $pozitivni++;
        }
    }
    echo "<p>od $n do $m pozitivnih ima $pozitivni, a negativnih $negativni</p>";
    echo "<hr>";

    ////////////////////////////////

    // 16. ZADATAK
    // Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5. 
    $brojac = 0;
    for($i = 5; $i <= 50; $i++){
        if($i%3 == 0 || $i % 5 == 0){
            $brojac++;
        }
    }
    echo "<p>Od 5 do 50 broj brojeva koji je deljiv sa 3/5 je: $brojac</p>";
    echo "<hr>";

    ////////////////////////////////

    // 17. ZADATAK
    // Prebrojati i izračunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su.

    $n = 2;
    $m = 25;
    $brojac = 0;
    $sum=0;
    for($i=$n; $i <=$m; $i++){
        if($i%10 == 4){
            $sum += $i;
            $brojac++;
        }
    }

    ////////////////////////////////

    // 18. ZADATAK
    // Ispisati brojeve od $n do $m, koji su deljivi sa $a.
    // 1. način
    $n = 14;
    $m = 32;
    $a = 5;
    for($i=$n; $i<=$m; $i++) {
        if($i % $a == 0) {
            echo "$i ";
        }
    }
    echo "<hr>";

    // 2. način
    $start = ceil($n/$a) * $a; // ceil(14/5)*5 = 3*5 = 15
    $end = floor($m/$a) * $a; // floor(32/5)*5 = 6*5 = 30 // $end = $m - $m % $a;    
    for($i=$start; $i<=$end; $i+=$a) {
        echo "$i ";
    }

    ////////////////////////////////

    // 19. ZADATAK
    // Ispisati brojeve od $n do $m koji nisu deljivi sa $a.

    $n = 14;
    $m = 32;
    $a = 5;
    for($i=$n; $i<=$m; $i++) {
        if($i % $a != 0) {
            echo "$i ";
        }
    }
    echo "<hr>";

    ////////////////////////////////

    // 20. ZADATAK
    // Odrediti sumu brojeva od $n do $m koji nisu deljivi brojem $a. 

    $n = 14;
    $m = 32;
    $a = 5;
    $suma = 0;
    for($i=$n; $i<=$m; $i++) {
        if($i % $a != 0) {
            $suma += $i;
        }
    }
    echo "$suma";
    echo "<hr>";

    ////////////////////////////////

    // 21. ZADATAK
    // Odrediti proizvod brojeva od $n do $m koji su deljivi brojem $a, a nisu brojem $b.
    // 1. način
    $n = 14;
    $m = 32;
    $a = 5;
    $b = 10;
    $p = 1;
    for($i = $n; $i <= $m; $i++) {
        if($i % $a == 0 && $i % $b != 0) { // if($i % $a == 0 && $i % $b > 0) // if($i % $a == 0 && !($i % $b == 0))
            $p *= $i; // $p = $p * $i;
        }
    } 
    echo "<p>$p</p>";

    // 2. način
    $n = 14;
    $m = 32;
    $a = 10;
    $b = 5;
    $p = 1;

    if($a % $b == 0) {
        echo "<p>1</p>";
    }
    else {
        $start = ceil($n/$a) * $a; 
        $end = floor($m/$a) * $a; 
        for($i = $start; $i <= $end; $i+=$a) {
            if($i % $b == 0) {
                continue; // Kada dođe do ove linije ne izvršava ono što je unutar petlje, već nastavlja naredni korak u petlji
            }
            $p *= $i; // $p = $p * $i;
        } 
        echo "<p>$p</p>";
    }

    ////////////////////////////////

?>