<?php


// Stranica prima 3 GET parametra koji su cjeli brojevi
// stranica ispisuje najveći primljeni broj

// ulaz: 3 8 92
// izlaz: 92


// ulaz: 3 3 2
// izlaz: 3

// ulaz: -1 0 -1
// izlaz: 0

$p1 = isset($_GET['p1']) ? $_GET['p1'] : 92; 
$p2 = isset($_GET['p2']) ? $_GET['p2'] : 3; 
$p3 = isset($_GET['p3']) ? $_GET['p3'] : 0;

if($p1>$p2)
echo $p1;


