<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->

<?php 
$p = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sint officia quisquam ea maxime, eum ipsam in illo, corporis vel velit sequi pariatur repudiandae eius at expedita quo vitae sapiente magnam illum deleniti laborum. Illo alias non neque, doloribus quae eveniet possimus fugiat accusamus dolores magni repellendus soluta cumque quo, voluptates labore ab. Porro at libero ex voluptatum ipsa modi, placeat blanditiis veniam quas eos dolore doloribus, minus, adipisci ipsam et incidunt eligendi! Ipsam autem cupiditate beatae quidem iure, necessitatibus mollitia dolorem modi in architecto doloribus, porro repudiandae blanditiis eaque tenetur impedit consequuntur deserunt ipsum incidunt deleniti non ex minima esse. Incidunt quos consequatur sapiente vitae reprehenderit numquam rerum odit esse ipsa, et culpa recusandae suscipit. Inventore ullam impedit aperiam expedita cum esse. Ipsum omnis molestiae consectetur nobis? Enim corrupti. reprehenderit in aliquam inventore eos nemo dolor incidunt vero. Vitae dolores eos incidunt eum ad sapiente impedit sit, soluta aspernatur quidem odit obcaecati quaerat cupiditate fugiat temporibus deserunt aut itaque tempora, saepe magnam illum molestiae reiciendis ducimus! Mollitia harum illo et omnis, incidunt reiciendis labore in suscipit officiis quaerat accusantium dolore dignissimos. Incidunt maxime magni, neque facilis rerum tempora iure repellendus in, nobis assumenda eligendi molestiae suscipit quos consequatur cupiditate.';
$newP = explode('.', $p);
var_dump($p);

/* foreach($newP as $p){
    var_dump($p);
} */
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
    <strong>Main Paragraph:</strong>
    <p><?= $p ?></p>
    <hr>
    <?php foreach($newP as $p) : ?>
        <p><?= $p ?></p>
    <?php endforeach; ?>
</body>
</html>