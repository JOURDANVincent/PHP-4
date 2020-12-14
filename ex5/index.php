<?php
        
    // déclaration de variable
    $number = 37;
    $string = 'ans';
    
    // déclaration de la fonction
    
    function concate($nn, $tt){
        return "{$nn} {$tt}";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - ex5</title>
</head>

<body>

    <h1>Partie 4 - ex5</h1>

    <p>
        Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit 
        la concaténation de ces deux paramètres.
    </p>

    <?= concate($number, $string); ?>
    

</body>

</html>