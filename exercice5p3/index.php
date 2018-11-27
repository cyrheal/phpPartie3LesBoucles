<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
    </head>
    <body>
        <p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>
        <?php
        for ($number = 1; $number <= 15; $number++) {
            echo $number . ' On y arrive presque.' . '<br />';
        }
        ?>
    </body>
</html>
