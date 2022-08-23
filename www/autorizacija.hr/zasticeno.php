<?php

session_start();

// štićenje stranice
if(!isset($_SESSION['autoriziran'])){
    header('location: index.php');
    exit;
}

echo 'Prijavljeni ste kao: ' . $_SESSION['autoriziran'];
?>
<hr />
<a href="odjava.php">Odjavi se</a>