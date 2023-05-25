<?php

// autor: Stefani Lakicevic


// 2. Napisati funkciju koja vraća prosečnu ocenu studenta.
function prosecnaOcena($ocene)
{
    $sum = 0;
    for($i = 0; $i < count($ocene); $i++)
    {
        $sum += $ocene[$i];
    }
    $as = $sum / count($ocene);
    return $as;
}
$prosecna = prosecnaOcena($ocene);
echo "Prosecna ocena: " . $prosecna . "<br>";


// 3. Napisati funkciju koja vraća maksimalnu ocenu koju je student dobio u toku studija.
function maksimalnaOcena($ocene)
{
    $maks = $ocene[0];
    for($i = 0; $i < count($ocene); $i++)
    {
        $trenutniElement = $ocene[$i];
        if ($trenutniElement > $maks)
        {
            $maks = $trenutniElement;
        }
    }
    return $maks;
}
$maksimalna = maksimalnaOcena($ocene);
echo "Maksimalna ocena: " . $maksimalna . "<br>";


// 4. Napisati funkciju koja vraća broj predmeta na kojima je dobio maksimalnu ocenu u toku studija.
function brojPredmetaSaMaxOcenom($ocene)
{
    $maxOcena = maksimalnaOcena($ocene);
    $brojac = 0;
    for($i = 0; $i < count($ocene); $i++)
    {
        if($ocene[$i] == $maxOcena)
        {
            $brojac++;
        }
    }
    return $brojac;
}
$brPredmetaSaMAxOcenom = brojPredmetaSaMaxOcenom($ocene);
echo "Broj predmeta sa maksimalnom ocenom je: " . $brPredmetaSaMAxOcenom . "<br>";


// 5. Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.
function studentGeneracije($ocene) // 10, 9, 9, 10, 10, 10, 8, 10, 10, 10, 10, 9, 9, 9
{
    $devetke = 0;
    $desetke = 0;
    for($i = 0; $i < count($ocene); $i++)
    {
        if($ocene[$i] == 9)
        {
            $devetke++;
        }
        elseif ($ocene[$i] == 10)
        {
            $desetke++;
        }
        else
        {
            return false;
        }
    }
    return !($desetke < $devetke); // $desetke >= $devetke
}
$studentGeneracije = studentGeneracije($ocene);
if($studentGeneracije)
{
    echo "Student je kandidat za studenta generacije<br>";
}
else
{
    echo "Student nije kandidat za studenta generacije<br>";
}


// 6. zadatak:
function maksimalnaDuzinaPodniza($ocene)
{
    $maxOcena = maksimalnaOcena($ocene);
    $duzina = 0;
    $maxDuzina = 0;
    for ($i = 0; $i < count($ocene); $i++)
    {
        if ($ocene[$i] == $maxOcena)
        {
            $duzina++;
            if ($duzina > $maxDuzina)
            {
                $maxDuzina = $duzina;
            }
        }
        else
        {
            $duzina = 0;
        }
    }
    return $maxDuzina;
}
$maxDuzinaPodniza = maksimalnaDuzinaPodniza($ocene);
echo "Maksimalna dužina podniza u kojem je student dobijao maksimalnu ocenu: " . $maxDuzinaPodniza;

?>