<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice7</title>
    </head>
    <body>
        <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
        <?php
        for ($number = 1; $number <= 100; $number += 15) {
            echo $number . ' On tient le bon bout.' . '<br />';
        }
        ?>
    </body>
</html>

