
<?php
$array = [];
var_dump(rand(1, 100));

while (count($array) < 15){
    $int = rand(1, 100);
    if (!in_array($int, $array)){
        array_push($array, $int);
    }
}
var_dump($array)
?>

<!-- Creare un array con 15 numeri casuali, tenendo conto 
che l’array non dovrà contenere lo stesso numero più di una volta -->