<?php


// Stranica prima 3 GET parametra koji su cjeli brojevi
// stranica ispisuje najveći primljeni broj

// ulaz: 3 8 92
// izlaz: 92


// ulaz: 3 3 2
// izlaz: 3

// ulaz: -1 0 -1
// izlaz: 0


$a = isset($_GET['a']) ? $_GET['a'] : 3;
$b = isset($_GET['b']) ? $_GET['b'] : 8;
$c = isset($_GET['c']) ? $_GET['c'] : 92;


if($a > $b && $a > $c){
    echo 'Najveći broj je ' . $a;
} else if ($b > $a && $b > $c) {
    echo 'Najveći broj je ' . $b;
} else {
    echo 'Najveći broj je ' . $c, '<hr />';
}

$a = isset($_GET['a']) ? $_GET['a'] : 3;
$b = isset($_GET['b']) ? $_GET['b'] : 3;
$c = isset($_GET['c']) ? $_GET['c'] : 2;


if($a > $b && $a > $c){
    echo 'Najveći broj je ' . $a;
} else if($b > $a && $b > $c){
    echo 'Najveći broj je ' . $b;
} else {
    echo 'Najveći broj je ' . $c, '<hr />';
}

$x = isset($_GET['x']) ? $_GET['x'] : -1;
$y = isset($_GET['y']) ? $_GET['y'] : 0;
$z = isset($_GET['z']) ? $_GET['z'] : -1;

if($x > $y && $x > $z){
    echo 'Najveći broj je ' . $x;
} else if($y > $x && $y > $z){
    echo 'Najveći broj je ' . $y;
} else {
    echo 'Najveći broj je ' . $z;
}


