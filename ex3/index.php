<?php
    // déclaration de variable
    $string1 = 'hello you';
    $string2 = 'how ar u today ???';

    // déclaration de la fonction
    function showConcate($text1, $text2){
        return "{$text1} !!! {$text2} ";
    }        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - ex3</title>
</head>

<body>

    <h1>Partie 4 - ex3</h1>

    <p>
    Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.
    </p>

    <?=  
        // affichage dan sle DOM
       showConcate($string1, $string2);
    ?>

    

</body>

</html>