<?php





// Stranica prima cijeli broj.
// ako je broj paran boja stranice treba biti zelena
// inač treba biti crvena

$a = isset($_GET['a']) ? $_GET['a'] : 0;

if (($a % 1)===0) {
    
    
    echo '<body style="background-color: green">';

} else {
     
    
    echo '<body style="background-color: red">';

}

?>