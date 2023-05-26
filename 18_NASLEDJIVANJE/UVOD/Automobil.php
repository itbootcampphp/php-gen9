<?php

require_once "Vozilo.php";

class Automobil extends Vozilo
{
    // Klasa Automobil nasledjuje sva polja i metode iz klase Vozilo
    // ali moze direktno da pristupa samo public poljima i metodama iz klase Vozilo
    // a ona polja i metode iz klase Vozilo koja su private, ona se nasledjuju, ali ne moze
    // direktno da se pristupi (jer nismo u klasi Vozilo)
    public function voziAutomobil()
    {
        echo "<p>Automobil $this->tip ($this->boja) u pokretu</p>";
        // echo "<p>Automobil " . $this->getTip() . "(" . $this->getBoja() . ") u pokretu</p>";
    }
}

?>