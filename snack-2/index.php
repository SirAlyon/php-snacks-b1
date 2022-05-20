<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$intAge = (int) filter_var($age, FILTER_SANITIZE_NUMBER_INT);

var_dump($name, $mail, $age);
var_dump($intAge)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <?php if (strlen($name) > 3 && $intAge > 0 && stripos($mail, '.') && stripos($mail, '@')): ?>

    <h2>Access ok</h2>

    <?php else: ?>

    <h2>Access denied</h2>
    
    <?php endif ?>
</body>
</html>