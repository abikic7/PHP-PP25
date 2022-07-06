<?php

// Ispišite sve parne brojeve između
// dva primljena broja putem GET metode
// ulaz ?x=26&y=3
// ulaz ?x=3&y=26
// izlaz mora biti
/*
4
6
8
10
12
14
16
18
20
22
24
26
*/

<?php

$a = isset($_GET['a']) ? $_GET['a'] : 3;
$b = isset($_GET['b']) ? $_GET['b'] : 26;


for($a=3;$a<26;$a++){
    echo ++$a, '<br />';
}