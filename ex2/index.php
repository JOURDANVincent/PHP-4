<?php

    // déclaration d'une chaine
    $string = 'hello you !!!';

    // déclaration de la fonction
    function returnString($showString){
        return $showString;
        }

?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - ex2</title>
</head>

<body>

    <h1>Partie 4 - ex2</h1>

    <p>
        Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
    </p>

    <!-- affichage dan sle DOM -->
    <?= returnString($string); ?>

</body>

</html>