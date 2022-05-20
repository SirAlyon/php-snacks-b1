<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->

<?php
$class = [
    [
        "name" => "Alessio",
        "surname" => "Sada",
        "votes" => [10, 6, 5, 8, 6, 5, 4]
    ],
    [
        "name" => "Luca",
        "surname" => "Rossi",
        "votes" => [10, 3, 5, 6, 6, 5, 4]
    ],
    [
        "name" => "Fabio",
        "surname" => "Bianchi",
        "votes" => [4, 4, 5, 5.5, 6, 5, 4, 6, 8, 9]
    ],
    [
        "name" => "Maria",
        "surname" => "Ferrari",
        "votes" => [10, 10, 8, 8, 6, 7, 7, 7]
    ],
];
//$test = [2, 5, 10];

/* var_dump(array_sum($test));
var_dump(array_sum($class[0]['votes'])) */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>

<body>

<?php 

for ($i=0; $i < count($class); $i++){?>
    <h3><?php echo $class[$i]['name'] .' ' .$class[$i]['surname'] .' - ' .$average = (array_sum($class[$i]['votes']) / count($class[$i]['votes'])) ?></h3>
    <p><?php echo 'Media Approssimata: ' .round($average, 1) ?></p>
    <p><?php echo 'Numero Voti totali: ' .count($class[$i]['votes']) ?></p>
    <hr>
<?php }
?>

</body>

</html>