<?php

// https://www.php.net/manual/en/language.oop5.magic.php

class Skola
{
    private $podaci;

    // u nastavi ćemo AKTIVNO koristiti __construct
    public function __construct()
    {
        echo 'Pozvan konstruktor<hr />';
        //$podaci = []; NE MOŽEŠ
        $this->podaci=[];
    }

    public function __set($svojstvo,$vrijednost)
    {
        $this->podaci[$svojstvo]=$vrijednost;
        echo 'Postavljam ' . $svojstvo . '=' . $vrijednost . '<hr />';
    }

    public function __get($svojstvo)
    {
        echo 'Dohvaćaš ' . $svojstvo . '<hr />';
        return isset($this->podaci[$svojstvo]) ? 
                $this->podaci[$svojstvo] : '';
    }

    public function imePrezime()
    {
        return (isset($this->podaci['ime']) ? 
        $this->podaci['ime'] : '') 
        . ' ' . 
        (isset($this->podaci['prezime']) ? 
        $this->podaci['prezime'] : '');
    }

    public function __toString()
    {
        return 'FIKSNO ispisano ali dođe ono što želim da mi predstavlja podatke objekta';
    }
}
// new je poziv konstruktora koji se implementira magičnom metodom __construct
$s = new Skola();
// nije bilo potrebe i NE RADI SE za $s->__construct(); kao niti Skola::__construct();

// poziv magične metode __set
$s->ime='Edunova';

// poziv magične metode __get
echo '&gt;' . $s->ime . '&lt;';

echo '<hr />';

$s->prezime='Škola';

echo $s->imePrezime();

echo '<hr />';

// poziv magične metode __toString
echo $s;