<?php

// klasa
class Osoba
{
    public $ime;
    // funkcija u klasi je metoda
    public static function generirajIme()
    {
        $s='';
        for($i=0;$i<8;$i++){
            $s.=chr(rand(65,90));
        }
        return  $s;
    }
}
//objekt
$o = new Osoba();
// da bih mogao pozvati metodu generirajIme morao sam napraviti instancu klase
//$o->ime = $o->generirajIme(); // ovo nije dobra praksa
$o->ime = Osoba::generirajIme(); // bolje

echo $o->ime;

echo '<hr />';
// https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php
// :: na klasi poziva statičnu metodu
echo Osoba::generirajIme();