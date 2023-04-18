<?php
    /* Zadatak 3. */
    $cena = 1400;
    $nov = 2000;
    $kusur = $nov - $cena;
    echo "<hr>";
    echo "Kusur je: " . $kusur;
    echo "<hr>";

    /* Zadatak 4. */
    $eur = 100;
    $kursEur = 117.5;
    $din = $eur * $kursEur;
    echo "<hr>";
    echo "Vrednost u dinarima nakon konverzije: " . $din;
    echo "<hr>";

    /* Zadatak 5. */
    $din = 10000;
    $eur = $din / $kursEur;
    echo "<hr>";
    echo "Vrednost u eurima nakon konverzije: " . $eur;
    echo "<hr>";

    /* Zadatak 6. */
    $eur = 100;
    $kursEurDin = 117.5;
    $kursDolDin = 106.7;
    //$din = $eur * $kursEurDin; // broj dinara koji imamo nakon konverzije eur -> din
    //$dol = $din / $kursDolDin; // broj dolara koji imamo nakon konverzije din -> dol
    $dol = $eur * $kursEurDin / $kursDolDin;
    echo "<hr>";
    echo "Vrednost u dolarima nakon konverzije: " . $dol;
    echo "<hr>";

    /* Zadatak 10. */
    // 100 : $cenaBezPopusta = (100 - $popust) : $cena
    // $cenaBezPopusta = 100 * $cena / (100 - $popust)
    $cena = 70;
    $popust = 20;
    $cenaBezPopusta = $cena * 100 / (100 - $popust);
    echo "<hr>";
    echo "Cena bez popusta: " . $cenaBezPopusta;
    echo "<hr>";

    // Drugi nacin:
    $udeo = (100 - $popust) / 100;
    $cenaBezPopusta = $cena / $udeo;
    echo "<hr>";
    echo "Cena bez popusta: " . $cenaBezPopusta;
    echo "<hr>";

    /* Zadatak 11. */
    // Boc: 3   ->  1 dan,    0 tableta neiskor.
    // Boc: 4   ->  1 dan,    1 tableta neiskor.
    // Boc: 5   ->  1 dan,    2 tablete neiskor.
    // Boc: 6   ->  2 dana,   0 tableta neiskor.
    // Boc: 7   ->  2 dana,   1 tableta neiskor.
    // Boc: 8   ->  2 dana,   2 tablete neiskor.
    // Boc: 9   ->  3 dana,   0 tableta neiskor.
    $n = 9;
    $brojDana = floor($n / 3);
    $brojNeiskorTableta = $n % 3;    // ostatak pri deljenju $n sa 3 (0, 1 ili 2)
    echo "<hr>";
    echo "Broj dana: " . $brojDana;
    echo "<br>";
    echo "Broj neiskoriscenih tableta: " . $brojNeiskorTableta;
    echo "<hr>";
?>