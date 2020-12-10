<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - ex8</title>
</head>

<body>

    <h1>Partie 4 - ex8</h1>

    <p>
        Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
        Tous les paramètres doivent avoir une valeur par défaut.
    </p>

    <?php
        
        // Déclaration des variables
        $number1 = 10;
        $number2 = 18;
        $number3 = null;

        // déclaration de la fonction addition
        function sum($n1 = 2, $n2 = 4, $n3 = 5){

            return $n1 + $n2 + $n3;

        }
        
        // Appel de la fonction
        echo sum($number1, $number2, $number3);

    ?>

</body>

</html>