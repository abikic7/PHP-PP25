<?php

// https://www.php.net/manual/en/language.oop5.magic.php

class Skola
{

    public function __construct()
    {
        echo 'Pozvan konstruktor<hr />';
    }

    public function __set($svojstvo,$vrijednost)
    {
        echo 'Postavljam ' . $svojstvo . '=' . $vrijednost . '<hr />';
    }

    public function __get($svojstvo)
    {
        echo 'Dohvaćaš ' . $svojstvo . '<hr />';
    }

}
// new je poziv konstruktora koji se implementira magičnom metodom __construct
$s = new Skola();
// nije bilo potrebe i NE RADI SE za $s->__construct(); kao niti Skola::__construct();

// poziv magične metode __set
$s->ime='Edunova';

// poziv magične metode __get
echo '&gt;' . $s->ime . '&lt;';