<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  style="background-color: <?=$_GET['boja'];?>"                           >
 <ol>
<li>
    <a href="?boja=yellow">žirafa</a>
</li>
<li>
    <a href="?boja=brown">medvjed</a>
</li>
<li>
    <a href="?boja=blue">morski pas</a>
</li>

 </ol>   
 <pre>
 <?php

print_r($_GET);
echo $_GET['boja'];
?>
</pre>
</body>
</html>