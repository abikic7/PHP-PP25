<?php


// Stranica prima 4 GET parametara i ispisuje 
// umnožak zbroja prvi i drugi te treći u četvrti

// primjer ulaza
// ulaz: 2 2 1 3
// izlaz: 16


$p1 = isset($_GET['p1']) ? $_GET['p1'] : 2; 
$p2 = isset($_GET['p2']) ? $_GET['p2'] : 2; 
$p3 = isset($_GET['p3']) ? $_GET['p3'] : 1; 
$p4 = isset($_GET['p4']) ? $_GET['p4'] : 3; 

$rez1 = $p1 + $p2;
$rez2 = $p2 + $p3;
$rez = $rez1 * $rez2;

echo $rez, '<hr />';