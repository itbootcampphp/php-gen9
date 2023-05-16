<?php

    $dan = array(
        "datum" => "2023/05/16",
        "kisa" => true,
        "sunce" => true,
        "oblacno" => false,
        "temperature" => array(5, 8, 13, 17, 12, 9, 6)
    );

    // 15. Napisati funkciju koja određuje i vraća prosečnu temperaturu izmerenu tog dana.
    function prosecnaTemp($dan)
    {
        $temperature = $dan["temperature"];
        // $temperature = array(5, 8, 13, 17, 12, 9, 6);
        // var_dump($temperature);
        $suma = 0;
        /*
        foreach ($temperature as $temp)
        {
            $suma += $temp;
        }
        */
        for ($i = 0; $i < count($temperature); $i++)
        {
            $suma += $temperature[$i];
        }
        $prosek = $suma / count($temperature);
        return $prosek;
    }

    echo "Prosecna temperatura za dan " . $dan["datum"] . " je: " . prosecnaTemp($dan);
    echo "<hr>";


    // 16. Napisati funkciju koja prebrojava i vraća koliko merenja je bilo sa natprosečnom temperaturom.
    function brojNatrposecnoMerenja($dan)
    {
        $prosecnaTemperatura = prosecnaTemp($dan);
        $broj = 0;
        $temperature = $dan["temperature"]; // array(5, 8, 13, 17, 12, 9, 6);
        foreach ($temperature as $temp)
        {
            if ($temp > $prosecnaTemperatura)
            {
                $broj++;
            }
        }
        return $broj;
    }

    echo "Broj merenja sa natprosecnom temperaturom za dan " . $dan["datum"] . " jednak je: "
            . brojNatrposecnoMerenja($dan);
    echo "<hr>";

    // 17. Napisati funkciju koja prebrojava i vraća koliko merenja je bilo sa maksimalnom temperaturom.

    // 18. Napisati funkciju koja prima tri parametra, dan i dva broja koji predstavljaju dve temperature. 
    // Potrebno je da metoda vrati broj merenja u toku dana čija je vrednost između ove dve 
    // zadate temperature (ne uključujući te dve vrednosti).

    function brojMerenjaIzmedju($dan, $min, $max)
    {
        $temperature = $dan["temperature"]; // array(5, 8, 13, 17, 12, 9, 6);
        $broj = 0;
        foreach ($temperature as $temp)
        {
            if ($temp > $min && $temp < $max)
            {
                $broj++;
            }
        }
        return $broj;
    }

    $v1 = 7;
    $v2 = 15;
    echo "Broj merenja na dan " . $dan["datum"] . " izmedju vrednosti $v1 i $v2 jednak je: "
            . brojMerenjaIzmedju($dan, $v1, $v2);
    echo "<hr>";

?>