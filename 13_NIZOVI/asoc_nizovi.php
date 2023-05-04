<?php
    /*
    $godine = array(
        "Pera" => 28,
        "Lazar" => 26,
        "Violeta" => 35,
        "Marko" => 35
    );
    */

    $godine = array();
    $godine["Pera"] = 35;
    $godine["Lazar"] = 26;
    $godine["Violeta"] = 35;
    $godine["Marko"] = 35;

    //echo $godine["Pera"];
    $godine["x"] = 48;

    //echo $godine["Pera"];
    //var_dump($godine);

    foreach ($godine as $key => $value)
    {
        echo "<p>Osoba $key ima $value godina.</p>";
    }

    foreach ($godine as $g)
    {
        echo "<p>Osoba ima $g godina.</p>";
    }



    // foreach petlja moze da se koristi i za indeksne nizove
    $brojevi = array(5, -6, 3.3, 17.8, 0);
    $brojevi[100] = 50;
    $brojevi[2] = 4;

    foreach ($brojevi as $broj)
    {
        echo "$broj &nbsp;";
    }

    foreach ($brojevi as $indeks => $broj)
    {
        echo "<p>Element sa indeksom $indeks ima vrednost $broj</p>";
    }




    // Zadatak 1
    $automobili = array(
        "Audi A3" => 2004,
        "Opel Corsa" => 1998,
        "Opel Astra" => 2016,
        "Peugeot 208" => 2004,
        "Ford Focus" => 2015
    );

    // Ispisati sve automobile, kao i njihova godišta.
    foreach ($automobili as $marka => $godiste)
    {
        echo "<p>Automobil $marka proizveden $godiste. godine</p>";
    }

    // Ispisati automobile koji su stariji od 10 godina.
    $trenutnaGodina = date("Y");
    foreach ($automobili as $marka => $godiste)
    {
        if ($trenutnaGodina - $godiste > 10)
        {
            echo "<p>Automobil $marka je stariji od 10 godina.</p>";
        }
    }

    // Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine.
    foreach ($automobili as $marka => $godiste)
    {
        if (strpos($marka, "Opel") !== false && $godiste >= 2000)
        {
            echo "<p>Automobil $marka je proizveden posle 2000. godine.</p>";
        }
    }



    // Zadatak 2

    $osobe = array(
        "Pera" => 189,
        "Jelena" => 154,
        "Danica" => 173,
        "Lazar" => 172,
        "Dalibor" => 189,
        "Milena" => 154,
        "Vuk" => 154
    );

    // Ispisati sve natprosečno visoke osobe.
    $zbir = 0;
    foreach ($osobe as $visina)
    {
        $zbir += $visina;
    }
    $prosek = $zbir / count($osobe);
    echo "<p>Prosecna visina svih osoba u nizu je: $prosek</p>";
    foreach ($osobe as $ime => $visina)
    {
        if ($visina > $prosek)
        {
            echo "<p>Osoba $ime je natprosecno visoka.</p>";
        }
    }

    // Ispisati sve osobe koje imaju maksimalnu visinu.
    // $maks = 0;
    $maks = PHP_INT_MIN;
    foreach ($osobe as $visina)
    {
        if ($visina > $maks)
        {
            $maks = $visina;
        }
    }

    foreach ($osobe as $ime => $visina)
    {
        if ($visina == $maks)
        {
            echo "<p>Osoba $ime ima maksimalnu visinu.</p>";
        }
    }

    // Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'.
    foreach ($osobe as $ime => $visina)
    {
        if ($visina < $prosek && $ime[0] == "V")
        {
            echo "<p>Osoba $ime je visoka ispod proseka.</p>";
        }
    }



    /*
    

    $dete1 = array(
        "ime" => "Pera",
        "prezime" => "Peric",
        "ev_broj" => 165,
        "ocena" => 4.5
    );

    
    $dete2 = array(
        "ime" => "Pera",
        "prezime" => "Peric",
        "ev_broj" => 189,
        "ocena" => 3.6
    );

    $ucenici = array($dete1, $dete2);
    */

?>