<?php
// Including file
require "my_functions.php";
// Calling the function
multiplySelf(2); // Output: 4
echo "<br>";
 
// Including file once again
require "my_functions.php";
// Calling the function
multiplySelf(5); // Doesn't execute



// Including file
require_once "my_functions.php";
// Calling the function
multiplySelf(2); // Output: 4
echo "<br>";
 
// Including file once again
require_once "my_functions.php";
// Calling the function
multiplySelf(5); // Output: 25

?>