<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Function</title>
</head>
<body>

<?php
// Defining function
function KojiJeDanasDan(){
    echo "Today is " . date('l', mktime());
}
// Calling function
KojiJeDanasDan();
?>

</body>
</html>