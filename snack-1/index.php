<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
$matches = [
    [
        "s_ospite" => "Olimpia" ,
        "s_casa" => 'Cantù',
        "punti_ospite" => 55,
        "punti_casa" => 65,
    ],
    [
        "s_ospite" => "Bulls" ,
        "s_casa" => 'Leakers',
        "punti_ospite" => 45,
        "punti_casa" => 60,
    ],
    [
        "s_ospite" => "Milan" ,
        "s_casa" => 'inter',
        "punti_ospite" => 30,
        "punti_casa" => 34,
    ]
    ];

var_dump($matches[0]["s_ospite"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <?php
    for ($i = 0; $i < count($matches); $i++){
        echo $matches[$i]["s_ospite"] .' - ' .$matches[$i]["s_casa"] .' | ' .$matches[$i]["punti_ospite"] .' - ' .$matches[$i]["punti_casa"];
    }

    ?>
</body>
</html>