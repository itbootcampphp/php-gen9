<?php
    //echo je funkcija koja služi za ispisivanje
    $a = "Zdravo svete"; //promenljiva $a dobija vrednost "Zdravo svete"
    echo $a; // ovo prikazuje string "Zdravo svete"
    echo "<br>";
    $a = 28; // integer
    echo $a;
    echo "<br>";
    $a = 28 + 2; 
    echo $a;
    echo "<br>";
    $a = 2.5 + 8.2; //float
    echo $a;
    echo "<br>";
    $a = 100; 
    echo $a;
    echo "<br>";
    $b = $a - 20; // sa desne strane je dozvoljeno koriscenje promenljiva
    echo "vrednost promenljive b je " . " osamdeset " . $b;
    echo "<br>";
    echo "vrednost promenljive b je $b";
    echo "<br>";
    echo 'ovo je proba';
    echo "<br>";
    echo 'vrednost promenljive b je $b'; // neophodno je da budu dupli navodnici da bi se $b zamenilo vrednoscu
    echo "<br>";
    $c = "1"; // vrednost je string
    $d = $c + 2; // ovo prolazi zato sto se string konvertuje u broj pa se uveca za 2
    echo $d;
    echo "<br>";
    $d = $d + 2; //$d += 2; - ovo je skraceni zapis koji se cesto koristi kada staru vednost uvecavamo += smanjujemo -= delimo /= mnozimo *=  
    echo $d; // nova vrednost promeljive $d je stara vredsnost promeljnive $d uvecana za 2
    echo "<br>";
    $d = $d - 5; //$d -= 5; - skraceni naziv
    echo $d;
    echo "<hr>";

    /* 1. zadatak: Date su dve promenljive $h i $m, čije su vrednosti sati i minuti u nekom vremenu. 
    Ispisati koliko minuta je prošlo od ponoći do ovog vremena. */
    $h = 20;
    $m = 35;

    $rez = $h * 60 + $m; //$rez = $m + $h * 60;

    echo "Rezultat zadatka je " . $rez . " minuta";
    echo "<hr>";
    /*end 1. zadatak*/

    /* 2. zadatak: uraditi prethodni zadatak korišćenjem date() f-je */
    date_default_timezone_set('Europe/Belgrade'); //postavljanje timezone OBAVEZNO KORISTII SET A NE GET
    $h = date('G'); //dobijamo vreme u formatu integer broja bez navođenja 0 ako je osam ujutru vrednost je 8 a ne 08
    $m = date('i'); //dobijamo minute u formatu integer broja 

    echo "Trenutno vreme je ". $h . " sati i " . $m . " minuta<br>";

    $rez = $h * 60 + $m; //$rez = $m + $h * 60; - ovo je isto, primenjuje se pravilo iz matematike

    //number_format služi za ispisivanje broja po našim standardima
    //number_format(BROJ, BROJ_DECIMALA, DECIMALNI ZAREZ, ZNAK ZA ODVAJANJE HILJADA) - nas format je 1.256,68
    echo "Rezultat zadatka 2. je " . number_format($rez, 0, ",", ".") . " minuta"; 
    echo "<hr>";
    /*end 2. zadatak*/
?>