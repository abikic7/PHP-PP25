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

if ($a > $b && $a > $c){
  echo 'Najveći broj je' . $a ;
    } else if ($b > $a && $b > $c) {
     echo 'Najveći broj je' . $b; 
    } else {
        echo 'Najveći broj je' . $c,'<hr />' ;
    }


    $x = isset($_GET['x']) ? $_GET['x'] : 3;
    $b = isset($_GET['y']) ? $_GET['y'] : 3;
    $z = isset($_GET['z']) ? $_GET['z'] : 2;    

    if ($x > $y && $x > $z){
        echo 'Najveći broj je' . $x ;
          } else if ($y > $x && $y > $z) {
           echo 'Najveći broj je' . $y; 
          } else {
              echo 'Najveći broj je' . $z ,'<hr />' ;
          }



          $m = isset($_GET['m']) ? $_GET['m'] : -1;
          $n = isset($_GET['n']) ? $_GET['n'] :  0;
          $o = isset($_GET['o']) ? $_GET['o'] : -1;   

          if ($m > $n && $m > $o){
            echo 'Najveći broj je' . $m ;
              } else if ($n > $m && $n > $o) {
               echo 'Najveći broj je' . $n; 
              } else {
                  echo 'Najveći broj je' . $o ,'<hr />' ;
              }
          
          
          
                   