<?php

$i = 2; $j = 1;
$rez = $i + $j;
echo $rez, '<hr />';

// - * /

// modulo operator %
$rez = 9 % 2;
// 9 / 2 = 4
// 4 * 2 = 8
// 9 - 8 = 1
// 9 % 2 = 1


// brže varijante
$suma = 0;
$suma = $suma + 2;
echo $suma, '<hr />';
// skraćenije
$suma += 2;
echo $suma, '<hr />';
// isti princip vrijedi i za / * - %

//specifičnost kod operatora je uvećanje/umanjenje za 1
$i = 0;
echo $i, '<hr />'; //0
$i= $i + 1;
echo $i, '<hr />'; //1
$i += 1;
echo $i, '<hr />'; //2
$i++; //increment (- decrement)
echo $i, '<hr />'; // 3

// korištenje i uvećanje/umanjenje varijable
$i=1;
echo $i++, '<hr />'; //prvo koristi pa uveća  1
echo ++$i, '<hr />'; // prvo uveća pa koristi 3

// isto vrijedi i za umanjenje $i-- i --$i

// tipski zadaci za provjeru
$i = 0; $j = 1;
$k = $i + $j; // k=1, j=1, i=0
$j += ++$k; // k=2, j=3, i=0
echo $i + $j + $k,'<hr />'; // 5

// DZ: Prvo si nasumično zadati zadatak
// ručno izračunati i provjeriti u pregledniku

$g = 1; $m = 1; 
$l = $g + $m; // g=1, m=1 , l=2
$m += ++$g; // l=2 , g=2 , m=3
echo $g + $m + $l,'<hr />'; // 7

$z = 2; $q=2;
$b = $z + $q;  //z=2, q=2 , b=4
$q += ++$z;   // b=4 , z=3 , q=5
echo $z + $b +$q; //12