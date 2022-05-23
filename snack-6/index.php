<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in 
un rettangolo grigio e i PM in un rettangolo verde. -->


<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];


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
    
<?php foreach ($db as $key => $roles) : 
    foreach ($roles as $info) : 
    if ($key == 'teachers') : ?>
        <h2 style="background-color: gray"><?php echo $info['name'] .' ' .$info['lastname'] ?></h2>
    <?php else : ?>
        <h2 style="background-color: green"><?php echo $info['name'] .' ' .$info['lastname'] ?></h2>
    <?php endif; ?>

    <?php endforeach; ?>


<?php endforeach; ?>
</body>
</html>