<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice6</title>
    </head>
    <body>
        <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
        <?php
        for ($number = 20; $number >=0; $number--){
           echo $number . ' C\'est presque bon.' . '<br />';
       }
        ?>
    </body>
</html>

