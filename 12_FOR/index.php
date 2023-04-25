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

    // ////////////////////////////////
?>