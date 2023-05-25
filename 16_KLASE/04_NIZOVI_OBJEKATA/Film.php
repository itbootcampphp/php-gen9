<?php
class Film{
    private $naslov;
    private $reziser;
    private $godinaIzdanja;

    public function __construct($n, $g, $r){
        $this->setNaslov($n);
        $this->setReziser($r);
        $this->setGodinaIzdanja($g);
    }

    public function setNaslov($n){
        $this->naslov = $n;
    }

    public function getNaslov(){
        return $this->naslov;
    }

    public function setReziser($r){
        $this->reziser = $r;
    }

    public function getReziser(){
        return $this->reziser;
    }

    public function setGodinaIzdanja($g){
        $this->godinaIzdanja = $g;
    }

    public function getGodinaIzdanja(){
        return $this->godinaIzdanja;
    }


}