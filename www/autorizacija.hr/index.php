<?php


session_start();
$email = isset($_GET['email']) ? $_GET['email'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="autoriziraj.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" 
        id="email" value="<?php echo $email; ?>" />
        <label for="lozinka">Lozinka</label>
        <input type="password" name="password" id="lozinka" />
        <input type="submit" value="Autoriziraj">
    </form>
    <?php 
    if(isset($_GET['neuspjelo'])){
        echo 'Neispravna kombinacija email i lozinka';
    }
    
    ?>
</body>
</html>