<?php

class Krug {
    protected $r;
    const PI = 3.14;

    public function __construct($r) {
        $this->setR($r);
    }

    public function getR() {
        return $this->r;
    }

    public function setR($r) {
        if($r >= 0) {
            $this->r = $r;
        } else {
            $this->r = 0;
        }
    }

    public function obimKruga() {
        return 2 * $this->r * self::PI;
    }
    
    public function povrsinaKruga() {
        return ($this->getR() ** 2) * self::PI;
    }
}

?>