<?php

    // Bez nizova
    $car1 = "BMW";
    $car2 = "Volvo";
    $car3 = "Toyota";

    // Sa nizovima
    $cars = array("BMW", "Volvo", "Toyota"); // $cars = ["BMW", "Volvo", "Toyota"];
    // Elementi ovog nizu su: "BMW", "Volvo", "Toyota"
    // Indeksi elemenata ovog niza su: 0, 1, 2
    // Broj elemenata u ovom nizu je 3

    // Najdetaljnije ispisuje podatake
    var_dump($cars);
    var_dump($car1);
    echo "<hr>";

    // Najmanje detaljno ispisuje
    echo "$car1";
    echo "$cars";
    echo "<hr>";

    print_r($cars);
    echo "<hr>";

    // Pristupanje elementima
    $prviElement = $cars[0];
    $drugiElement = $cars[1];
    $treciElement = $cars[2];

    echo "$prviElement, $drugiElement, $treciElement";
    echo "<p>Prvi element u nizu je: $cars[0]</p>";
    echo "<p>Osmi element u nizu je: $cars[7]</p>"; // Undifined arrey key

    // Izmena elemenata se vrši ukoliko pod tim indeksom u nizu već postoji neki element
    $cars[1] = "Peugeot";
    print_r($cars);

    // Dodavanje elementa će se vršiti ukoliko pod navedenim indeksom ne postoji već element u nizu
    $cars[30] = "Audi";
    print_r($cars);

    //////////////////////////////////////

    // 1. ZADATAK
    // Ispisati sve elemente niza od 5 stringova.
    $polaznici = array(); // $polaznici = [];
    $polaznici[] = "Aleksandar";
    $polaznici[] = "Uroš";
    $polaznici[] = "Milijana";
    $polaznici[] = "Andreja";
    $polaznici[] = "Nikola";

    print_r($polaznici);

    $duzina = count($polaznici); // Prebrojava koliko polaznika ima tj. koliko ima elemenata u nizu
    echo "<p>U nizu ima $duzina polaznika.</p>";

    for($i=0; $i<$duzina; $i++) {
        echo "<p>$polaznici[$i]</p>";
    }

    /////////////////////////

    // 2. ZADATAK
    // Odrediti zbir elemenata celobrojnog niza.

    $brojevi = [5, 14, -4, 0, 11, -7, 9];
    $suma = 0;
    for($i = 0; $i < count($brojevi); $i++) {
        $suma += $brojevi[$i];
    }
    echo "<p>Suma elemenata je: $suma</p>";

    // Ugrađena funkcija 
    $zbir = array_sum($brojevi);
    echo "<p>Zbir elemenata niza je: $zbir</p>";

    /////////////////////////

    // 3. ZADATAK
    // Odrediti srednju vrednost elemenata celobrojnog niza.

    $brElemenata = count($brojevi);
    $arsr = $zbir / $brElemenata; // $arsr = array_sum($brojevi) / count($brojevi);
    echo "<p>Aritmetička sredina je: $arsr</p>";

    $brojevi = [];
    $brElemenata = count($brojevi);
    // Dopuna - 1. način
    if($brElemenata == 0) {
        echo "<p>Prazan niz - aritmetička sredina je 0</p>";
    }
    else {
        $arsr = $zbir / $brElemenata;
        echo "<p>Aritmetička sredina je: $arsr</p>";
    }

    // Dopuna - 2. način
    if(empty($brojevi)) {
        echo "<p>Prazan niz - aritmetička sredina je 0</p>";
    }
    else {
        $arsr = $zbir / $brElemenata;
        echo "<p>Aritmetička sredina je: $arsr</p>";
    }

    // Dopuna - 3. način
    if($brojevi == []) {
        echo "<p>Prazan niz - aritmetička sredina je 0</p>";
    }
    else {
        $arsr = $zbir / $brElemenata;
        echo "<p>Aritmetička sredina je: $arsr</p>";
    }

    // Dopuna - 4. način
    if($brojevi == array()) {
        echo "<p>Prazan niz - aritmetička sredina je 0</p>";
    }
    else {
        $arsr = $zbir / $brElemenata;
        echo "<p>Aritmetička sredina je: $arsr</p>";
    }

    // Dopuna - 5. način
    if(!$brojevi) {
        echo "<p>Prazan niz - aritmetička sredina je 0</p>";
    }
    else {
        $arsr = $zbir / $brElemenata;
        echo "<p>Aritmetička sredina je: $arsr</p>";
    }

    /////////////////////////

    // 4. ZADATAK
    // Odrediti maksimalnu vrednost u celobrojnom nizu.
    // Koji je najveći broj u celobrojnom nizu.

    $brojevi = [5, 14, -4, 0, 11, -7, 91];
    $maks = $brojevi[0]; 
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i]; // dokle smo stigli sa pregledavanjem niza
        if($trenutniElement > $maks) {    
            $maks = $trenutniElement;
        }
    }
    echo "<p>Najveći element ovog niza je $maks</p>";

    /////////////////////////

    // 5. ZADATAK
    // Odrediti minimalnu vrednost u celobrojnom nizu.

    ///////////////////////// 

    // 6. ZADATAK
    // Odrediti indeks najvećeg elementa celobrojnog niza.
    $brojevi = [5, 14, -4, 14, 11, -7, 14]; // indeksi: 1, 3, 6

    // 6.1. indeks prvog pojevljivanja max elementa

    // 1. način
    $maks = $brojevi[0];
    $indeksMaks = 0;
    for($i=0; $i<count($brojevi); $i++) {
        $treutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement;
        }
    }
    for($i=0; $i<count($brojevi); $i++) {
        $treutniElement = $brojevi[$i];
        if($treutniElement == $maks) {
            $indeksMaks = $i;
            break;
        }
    }

    // 2. način
    $brojevi = [5, 14, -4, 14, 11, -7, 14]; // indeksi: 1, 3, 6
    $maks = $brojevi[0];
    $indeksMaks = 0;
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement; // 14
            $indeksMaks = $i; // 1
        }
    }
    echo "<p>Najveći element ima vrednost $maks, a indeks njegovog prvog pojavljivanja je $indeksMaks</p>";

    // 6.1. indeks poslednjeg pojevljivanja max elementa
    // 1. način
    $brojevi = [5, 14, -4, 14, 11, -7, 14]; // indeksi: 1, 3, 6
    $maks = $brojevi[0];
    $indeksMaks = 0;
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement >= $maks) {
            $maks = $trenutniElement; // 14
            $indeksMaks = $i; // 6
        }
    }
    echo "<p>Najveći element ima vrednost $maks, a indeks njegovog poslednjeg pojavljivanja je $indeksMaks</p>";

    // 2. način
    $brojevi = [17, 17, 5, 14, -4, 14, 11, -7, 14, 5, 4]; // indeksi: 1, 3, 6
    $brElemenata = count($brojevi); // 7
    $indeksMaks = $brElemenata - 1;
    $maks = $brojevi[$indeksMaks];
    for($i=$indeksMaks; $i>=0; $i--) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement; 
            $indeksMaks = $i; 
        }
    }
    echo "<p>Najveći element ima vrednost $maks, a indeks njegovog poslednjeg pojavljivanja je $indeksMaks</p>";


    // Svi maksimumi

    // 1. način
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14]; // indeksi: 1, 3, 6
    $maks = $brojevi[0]; // 5
    // 1. prolazak određuje maksimum
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement; 
        }
    }
    echo "Najveći element ima vrednost $maks, a indeksi pojavljivanja ovog elementa su: ";

    // 2. prolazak traži sve elemente jednake maksimumu i beleži njihove indekse
    $sviIndeksiMaks = [];
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement == $maks) {
            $sviIndeksiMaks[] = $i;
            echo "$i; ";
        }
    }
    echo "<hr>";

    // 2. način
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14]; // indeksi: 2, 4, 7
    $maks = $brojevi[0];
    $sviIndeksiMaks = [];
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement; 
            $sviIndeksiMaks = [$i];
        }
        elseif($trenutniElement == $maks) {
            $sviIndeksiMaks[] = $i;
        }
    }

    echo "Najveći element ima vrednost $maks, a njegovi indeksi pojavljivanja su: ";
    // $sviIndeksiMaks = [2, 4, 7];
    for($i=0; $i<count($sviIndeksiMaks); $i++) {
        echo "$sviIndeksiMaks[$i]; ";
    }
    // Ispis niza može i sa implode

    ///////////////////////// 

    // 7. ZADATAK
    // Odrediti broj elemenata celobrojnog niza koji su veći od srednje vrednosti.

    ///////////////////////// 

    // 8. ZADATAK
    // Izračunati zbir pozitivnih elemenata celobrojnog niza.

    ///////////////////////// 

    // 9. ZADATAK
    // Odrediti broj parnih elemenata u celobrojnom nizu.

    ///////////////////////// 

    // 10. ZADATAK
    //  Izračunati sumu elemenata u nizu sa parnim indeksom.

    ///////////////////////// 

    // 11. ZADATAK
    // Promeniti znak svakom elementu celobrojnog niza.

    ///////////////////////// 

    // 12. ZADATAK
    // Promeniti znak svakom neparnom elementu celobrojnog niza sa parnim indeksom.

    /////////////////////////     

    // 13. ZADATAK
    // Odrediti broj parnih elemenata sa neparnim indeksom.

    /////////////////////////    

    // 14. ZADATAK
    // Ispisati dužinu svakog elementa u nizu stringova.
    
    /////////////////////////    
?>