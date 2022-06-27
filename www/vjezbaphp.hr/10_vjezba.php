<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial Republic</title>
</head>
<body>
<?php include "header.php"; ?>
<?php include "menu.php"; ?>
    <h1>Welcome to Our Website!</h1>
    <p>Here you will find lots of useful information.</p>
<?php include "footer.php"; ?>

<?php
function multiplySelf($var){
    $var *= $var; // multiply variable by itself
    echo $var;
}
?>

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
?>

</body>
</html>