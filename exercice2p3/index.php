<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice2</title>
    </head>
    <body>
        <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
            Tant que la première variable n'est pas supérieure à 20 :

            multiplier la première variable avec la deuxième
            afficher le résultat
            incrementer la première variable
        </p>
        <?php
        $number1 = 0;
        $number2 = 50;
        while ($number1 <= 20) {
            $result = $number1 * $number2;
            echo 'Le résultat de ma variable est ' . $result . '<br />';
            $number1++;
        }
        ?>
    </body>
</html>

