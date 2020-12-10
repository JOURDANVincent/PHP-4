<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - ex4</title>
</head>

<body>

    <h1>Partie 4 - ex4</h1>

    <p>
    Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
    Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    Les deux nombres sont identiques si les deux nombres sont égaux 
    </p>

    <?php
        
        // déclaration de variable
        $number1 = '1';
        $number2 = '1';
        

        // déclaration de la fonction
        
        function compare($n1, $n2){

            $answer = null;

            if ($n1 === $n2) {
                $answer = 'Les deux nombres sont identiques';
            } else if ($n1 > $n2){
                $answer = 'Le premier nombre est plus grand';
            } else {$answer = 'Le premier nombre est plus petit';}

            return $answer;
        }

        echo compare($number1, $number2);
        
    ?>

</body>

</html>