<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice1</title>
    </head>
    <body>
        <p>Créer une variable et l'initialiser à 0.
            Tant que cette variable n'atteint pas 10, il faut :

            l'afficher
            l'incremente</p>
        <?php
        $compteur = 0;
        while ($compteur <= 10) {
            echo $compteur;
            $compteur ++;
        }
        ?>
    </body>
</html>