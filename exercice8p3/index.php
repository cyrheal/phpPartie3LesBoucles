<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice1</title>
    </head>
    <body>
        <p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
        <?php
    for($number = 200; $number >=0; $number -= 12){
        echo  $number . ' Enfin !!!!.' . '<br />';
    }
        ?>
    </body>
</html>
