<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
    

    $numbers = [1,7,7,2,6];
    $fruits = array('apple','orange','watermellon');

    print_r($numbers) ;
    var_dump($numbers);
    echo $fruits[1];

  $colors = [
    1=> 'red',
    2=> 'blue',
    3=> 'green'


  ];

  $hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f',

  ];

  echo $hex ['blue'];

  $person = [
    'first_name' => 'Brad',
    'last_name' => 'Kovačić',
    'email' => 'brad@gmail.com'

    ];
    
    echo $person ['first_name'];
  
    
$people = [
    [
    'first_name' => 'Brad',
    'last_name' => 'Kovačić',
    'email' => 'brad@gmail.com'
],
[
'first_name' => 'Ivan',
'last_name' => 'Novačić',
'email' => 'ivan@gmail.com'
]



];

echo $people[1]['email'];




    
    
    ?>
</body>
</html>