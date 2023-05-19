<?php

    class Film
    {
        var $naslov;
        var $reziser;
        var $godinaIzdanja;

        function stampaj()
        {
            echo 
            "
                <table>
                    <tr>
                        <td>Naslov filma: </td>
                        <td>$this->naslov</td>
                    </tr>
                    <tr>
                        <td>Ime rezisera: </td>
                        <td>" . $this->reziser . "</td>
                    </tr>
                    <tr>
                        <td>Godina izdanja: </td>
                        <td>$this->godinaIzdanja</td>
                    </tr>
                </table>
            ";
        }
    }

    $f1 = new Film();
    $f1->naslov = "Lord of the Rings";
    $f1->reziser = "Peter Jackon";
    $f1->godinaIzdanja = 2001;
    $f1->stampaj();

    $f2 = new Film();
    $f2->naslov = "Titanic";
    $f2->reziser = "James Cameron";
    $f2->godinaIzdanja = 1999;
    $f2->stampaj();

    $f3 = new Film();
    $f3->naslov = "21 jump street";
    $f3->reziser = "Phill Lord";
    $f3->godinaIzdanja = 2012;
    $f3->stampaj();

?>