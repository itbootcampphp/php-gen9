<?php

    class Auto
    {
        // polja
        private $marka;
        private $boja;
        private $imaKrov;

        // metode

        // KONTRUKTOR

        public function __construct($m, $b, $ik)
        {
            $this->setMarka($m);
            $this->setBoja($b);
            $this->setImaKrov($ik);
        }


        // GETERI: vracaju vrednosti polja

        public function getMarka()
        {
            return $this->marka;
        }

        public function getBoja()
        {
            return $this->boja;
        }

        public function getImaKrov()
        {
            return $this->imaKrov;
        }

        // SETERI: postavljaju vrednosti polja

        public function setMarka($m)
        {
            if ($m != "")
            {
                $this->marka = $m;
            }
            else
            {
                $this->marka = "Fiat";
            }
        }

        public function setBoja($b)
        {
            $this->boja = $b;
        }

        public function setImaKrov($ik)
        {
            if($ik === true || $ik === false)
            {
                $this->imaKrov = $ik;
            }
            else
            {
                $this->imaKrov = false;
            }
        }




        private function sviraj()
        {
            echo "<p>Beep! Beep!</p>";
        }

        public function ispis()
        {
            $this->sviraj();
            echo "<p>Automobil marke " . $this->marka . " boje " . $this->boja;
            if ($this->imaKrov)
            {
                echo " ima krov";
            }
            else
            {
                echo " nema krov";
            }
            echo "</p>";
        }
    }

    $marke = ["Opel", "Citroen", "BMW"];
    $boje = ["crna", "bela", "siva"];
    $imajuKrovove = [true, false, false];

    // 1) Kreiramo objekat

    if ("da li je poslata forma")
    {
        $marka = "sakupi polje marka sa forme";
        $boja = "sakupi polje boja sa forme";
        $imaKrov = "sakupi polje boja sa forme";

        $a = new Auto($marka, $boja, $imaKrov);

        // ubaci u bazu podataka novi automobil

        $a->ispis();
    }

    $a1 = new Auto("BMW", "plava", false);
    $a1 = new Auto("Citroen", "crna", true);

    // 2) Koristimo objekat
    $a1->ispis();

    //$a1->setMarka("Opel");
    //$a1->setBoja("bela");



?>