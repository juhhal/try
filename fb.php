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

$m = new MongoDB\Driver\Manager("mongodb+srv://learniversewebsite:032AZJHFD1OQWsPA@cluster0.biq1icd.mongodb.net/");

$filter = array();

$query = new MongoDB\Driver\Query($filter);
$cursor = $m->executeQuery('Learniverse.users', $query);

$myrows = $cursor->toArray();  
echo json_encode($myrows);
    
    
    
    ?>
</body>
</html>