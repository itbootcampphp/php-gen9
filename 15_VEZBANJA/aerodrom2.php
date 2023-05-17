<?php

    $letovi = array(
        array("dest" => "Paris", "country" => "France", "time" => "07:10"),
        array("dest" => "Madrid", "country" => "Spain", "time" => "15:00"),
        array("dest" => "Madrid", "country" => "Spain", "time" => "23:30"),
        array("dest" => "Barcelona", "country" => "Spain", "time" => "06:30")
    );

    function ispisSvihLetova($letovi)
    {
        foreach ($letovi as $let)
        {
            $destinacija = $let["dest"];
            $zemlja = $let["country"];
            $vreme = $let["time"];
            echo "<p>Destinacija: $destinacija, Drzava: $zemlja, Vreme polaska: $vreme</p>";
        }
    }

    ispisSvihLetova($letovi);
    echo "<hr>";

    // Zadatak: Ispisi sve letove, ali plavom bojom ako lete pre podne,
    // odnosno ljubicastom bojom ako lete popodne
    function ispisSvihLetovaBoja($letovi)
    {
        foreach ($letovi as $let)
        {
            $destinacija = $let["dest"];
            $zemlja = $let["country"];
            $vreme = $let["time"];
            $vremeInt = (int) substr($vreme, 0, 2);    // broj (na primer, 12)
            if ($vremeInt < 12)
            {
                echo "<p style='color: blue'>";
            }
            else
            {
                echo "<p style='color: purple'>";
            }
            echo "Destinacija: $destinacija, Drzava: $zemlja, Vreme polaska: $vreme</p>";
        }
    }

    ispisSvihLetovaBoja($letovi);
    echo "<hr>";

    // Zadatak: Trazene destinacije
    function trazeneDestinacije($letovi)
    {
        // $polasci = array("Paris" => 1, "Madrid" => 2, "Barcelona" => 1);
        $polasci = array();
        foreach ($letovi as $let)
        {
            $destinacija = $let["dest"]; // $destinacija = "Madrid"
            $postojiLet = false;
            foreach ($polasci as $d => $br)
            {
                if ($d == $destinacija)
                {
                    $postojiLet = true;
                    $polasci[$destinacija]++;
                }
            }
            if ($postojiLet == false)
            {
                $polasci[$destinacija] = 1;
            }
            // $polasci = array ( "Paris" => 1, "Madrid" => 2, "Barcelona" => 1 )
        }

        foreach ($polasci as $d => $br)
        {
            if ($br > 1)
            {
                echo "<p>$d je trazena destinacija</p>";
            }
        }
    }

    echo trazeneDestinacije($letovi);
    echo "<hr>";
?>