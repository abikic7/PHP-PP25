<?php


// čitati https://github.com/tjakopec/OOP_JAVA_PHP_PYTHON_SWIFT


$ime='Pero';
$prezime='Kum';

$osoba = [
    'ime'=>'Pero',
    'prezime'=>'Kum'
];

// klasa je opisnik objekta
class Osoba
{
    // ovo nije princip dobre prakse
    // nije implementirano učahurivanje
    public $ime;
    public $prezime;
}

// objekt je instanca (pojavnost) klase
// nwe je konstruiranje objekta
$voditelj = new Osoba();
$voditelj->grad='Osijek';

$voditelj->ime='Pero';
echo '<pre>';
var_dump($voditelj);
echo '</pre>';
echo gettype($voditelj) . ': ' .  $voditelj->ime ;
$niz = (array) $voditelj;

echo '<pre>';
var_dump($niz);
echo '</pre>';
echo '<hr />';

// magične metode https://www.php.net/manual/en/language.oop5.magic.php
$voditelj = new stdClass();
$voditelj->ime='Pero';
$voditelj->grad='Osijek';
echo '<pre>';
var_dump($voditelj);
echo '</pre>';
echo gettype($voditelj) . ': ' .  $voditelj->ime ;
$niz = (array) $voditelj;

echo '<pre>';
var_dump($niz);
echo '</pre>';

$objekt = (object) $niz;
echo '<pre>';
var_dump($objekt);
echo '</pre>';