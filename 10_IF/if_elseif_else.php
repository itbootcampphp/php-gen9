<?php
    $broj = 150;
    if ($broj <= 10)
    {
        echo "<p>Broj prve desetice</p>";
    }
    elseif ($broj <= 20)
    {
        echo "<p>Broj druge desetice</p>";
    }
    else
    {
        echo "<p>Broj veci od 20</p>";
    }

    // Alternativno:
    if ($broj > 20)
    {
        echo "<p>Broj veci od 20</p>";
    }
    elseif ($broj > 10)
    {
        echo "<p>Broj druge desetice</p>";
    }
    else
    {
        echo "<p>Broj prve desetice</p>";
    }


    // Zadatak 7
    $poeni = 43;
    if ($poeni <= 50)
    {
        echo "<p>Student je pao ispit</p>";
    }
    elseif ($poeni <= 60)
    {
        echo "<p>Ocena 6</p>";
    }
    elseif ($poeni <= 70)
    {
        echo "<p>Ocena 7</p>";
    }
    elseif ($poeni <= 80)
    {
        echo "<p>Ocena 8</p>";
    }
    elseif ($poeni <= 90)
    {
        echo "<p>Ocena 9</p>";
    }
    else
    {
        echo "<p>Ocena 10</p>";
    }

    // Zadatak 8
    $dan = date("w"); 
    echo "<p>$dan</p>";
    if ($dan == 0) // nedelja
    {
        echo "<p>Vikend</p>";
    }
    elseif ($dan == 6) // subota
    {
        echo "<p>Vikend</p>";
    }
    else 
    {
        echo "<p>Radni dan</p>";
    }

    // Zadatak 9
    date_default_timezone_set('Europe/Belgrade');
    $sati = date("H");
    if ($sati < 12)
    {
        echo "<p>Jutro</p>";
    }
    elseif ($sati < 18)
    {
        echo "<p>Podne</p>";
    }
    else
    {
        echo "<p>Vece</p>";
    }

    // Alternativno
    if ($sati >= 18)
    {
        echo "<p>Vece</p>";
    }
    elseif ($sati >= 12)
    {
        echo "<p>Podne</p>";
    }
    else
    {
        echo "<p>Jutro</p>";
    }

    // Zadatak 10
    // Prvi datum
    $d1 = 21;
    $m1 = 4;
    $g1 = 2023;

    // Drugi datum
    $d2 = 21;
    $m2 = 4;
    $g2 = 2023;

    if ($g1 < $g2)
    {
        echo "<p>Raniji datum je $d1.$m1.$g1.</p>";
    }
    elseif ($g2 < $g1)
    {
        echo "<p>Raniji datum je $d2.$m2.$g2.</p>";
    }
    elseif ($m1 < $m2)
    {
        echo "<p>Raniji datum je $d1.$m1.$g1.</p>";
    }
    elseif ($m2 < $m1)
    {
        echo "<p>Raniji datum je $d2.$m2.$g2.</p>";
    }
    elseif ($d1 < $d2)
    {
        echo "<p>Raniji datum je $d1.$m1.$g1.</p>";
    }
    elseif ($d2 < $d1)
    {
        echo "<p>Raniji datum je $d2.$m2.$g2.</p>";
    }
    else
    {
        echo "<p>Datumi su isti</p>";
    }

    // Zadatak 11
    // Koristimo promenljivu $sati iz Zadatka broj 9
    /*
    if ($sati < 9)
    {
        echo "<p>Firma ne radi</p>";
    }
    elseif ($sati >= 17)
    {
        echo "<p>Firma ne radi</p>";
    }
    else
    {
        echo "<p>Firma radi</p>";
    }
    */
    if ($sati < 9)
    {
        echo "<p>Firma ne radi</p>";
    }
    elseif ($sati <= 16)
    {
        echo "<p>Firma radi</p>";
    }
    else
    {
        echo "<p>Firma ne radi</p>";
    }

    // Zadatak 12
    // Prvi lekar
    $p1 = 9;
    $k1 = 17;

    // Drugi lekar
    $p2 = 1;
    $k2 = 3;

    if ($k1 < $p2)
    {
        echo "<p>Ne preklapaju se</p>";
    }
    elseif ($k2 < $p1)
    {
        echo "<p>Ne preklapaju se</p>";
    }
    else
    {
        echo "<p>Preklapaju se</p>";
    }

    // Zadatak 13
    $n = 14;
    if ($n % 2 == 0)
    {
        echo "<p>$n je paran</p>";
    }
    else
    {
        echo "<p>$n je neparan</p>";
    }
?>