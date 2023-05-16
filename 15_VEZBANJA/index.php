<?php
$letovi = [
    'Barselona' => 280,
    'Budimpesta' => 120,
    'Rim' => 350,
    'Berlin' => 88,
    'Moskva' => 330,
    'Pariz' => 350,
];

/* 2. Napisati funkciju maxBrojPutnika($letovi) kojoj se prosleđuje niz letova, 
a funkcija vraća maksimalan broj putnika na nekom od letova.*/

function maxBrojPutnika($letovi){
    $max = 0;
    //foreach ($letovi as $destinacija => $brojPutnika) {
    foreach ($letovi as $brojPutnika) {
        if($max<$brojPutnika){
            $max=$brojPutnika;
        }
    }
    return $max;
}

echo "Maksimalan broj putnik je: ".maxBrojPutnika($letovi);
echo "<hr>";

/* 3. Napisati funkciju brojMax($letovi) kojoj se prosleđuje niz letova, 
a funkcija vraća broj letova na kojima je leteo maksimalan broj putnika.*/

function brojMax($letovi){
    $maxPutnika = maxBrojPutnika($letovi);
    $brojDestinacija = 0;
    foreach ($letovi as $brojPutnika) {
        if($brojPutnika==$maxPutnika){
        //if($brojPutnika==maxBrojPutnika($letovi)){
            $brojDestinacija++;
        }
    }
    return $brojDestinacija;
}

echo "Broj destinacija sa maksimalnim brojem putnika je: ".brojMax($letovi);
echo "<hr>";

/* 4.Napisati funkciju prosek($letovi) kojoj se prosleđuje niz letova, 
a funkcija vraća prosečan broj putnika po letu sa niškog aerodroma tog dana.*/ 
function prosek($letovi){
    $sum = 0;
    foreach ($letovi as $brojPutnika) {
        $sum += $brojPutnika; // $sum = $sum + $brojPutnika;
    }

    return round ($sum / count($letovi));
}

echo "Prosecan broj putnika na letovima je:".prosek($letovi);
echo "<hr>";

/* 5. Dan je bio isplativ za niški aerodrom ukoliko je u većini letova broj putnika bio veći od zadate granice. 
Napisati funkciju isplativ($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, 
a funkcija ispituje da li je dan bio isplativ (vraća true ako jeste i false ako nije).*/

function isplativ($letovi, $granica){
    $iznad = 0;
    $ispod = 0;
    foreach ($letovi as $brojPutnika) {
        if($brojPutnika>=$granica){
            $iznad++;
        }else{
            $ispod++;
        }
    }
    if($iznad>=$ispod){
        return true;
    }else {
        return false;
    }
}

//echo "Dan je bio isplativ za gradnicu 100: ".(isplativ($letovi, 100)?"JESTE":"NIJE");
echo "Dan je bio isplativ za gradnicu 340: ";
$isplativ=isplativ($letovi, 340);
if($isplativ){
    echo "JESTE";
}else{
    echo "NIJE";
}
echo "<hr>";

/* 6. Dan je alarmantan za niški aerodrom ukoliko postoji neki let u kojem je broj putnika bio manji od zadate granice. 
Napisati funkciju alarmantan($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, 
a funkcija ispituje da li je dan bio alarmantan (vraća true ukoliko je postojao let u kojem je broj putnika bio manji od granice, 
i false ako nije).*/

function alarmantan($letovi, $granica){
    foreach ($letovi as $brojPutnika) {
        if($brojPutnika<$granica){
            return true;
        }
    }
    return false;
}

echo "Dan je bio alarmantan za gradnicu 100: ".(alarmantan($letovi, 100)?"JESTE":"NIJE");
echo "<hr>";

/*7. Napisati funkciju dobreDestinacije($letovi) kojoj se prosleđuje niz letova, 
a funkcija ispisuje letove sa natprosečnim brojem putnika.*/ 

function dobreDestinacije($letovi){
    $prosek = prosek($letovi);
    foreach ($letovi as $destinacija => $brojPutnika) {
        if($brojPutnika >= $prosek){
            echo "<p>$destinacija</p>";
        }
    }
}

echo "Dobre destinacije su:";
dobreDestinacije($letovi);