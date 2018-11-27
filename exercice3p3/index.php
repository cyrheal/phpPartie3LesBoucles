<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice3</title>
    </head>
    <body>
        <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
            Tant que la première variable n'est pas inférieure ou égale à 10 :

            multiplier la première variable avec la deuxième
            afficher le résultat
            décrémenter la première variable
        </p>
        <?php
        $number1 = 100;
        $number2 = 2;
        while ($number1 >= 10) {
            $result = $number1 * $number2;
            echo 'le résultat est ' . $result . '<br />';
            $number1--;
        }
        ?>
    </body>
</html>

