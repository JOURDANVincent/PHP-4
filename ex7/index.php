<?php
        
    // Déclaration des variables
    $age = rand(1, 130);
    $gender = 'Femme';

    // déclaration de la fonction 
    function compare($a, $g) {

        $response = '';

        if ($g === 'Homme'){
            if ($a >= 18){
                $response = 'Vous êtes un homme et vous êtes majeur';
            } else {
                $response = 'Vous êtes un homme et vous êtes mineur';
            }
        } else {
            if ($a >= 18){
                $response = 'Vous êtes une femme et vous êtes majeure';
            } else {
                $response = 'Vous êtes une femme et vous êtes mineure';
            }
        }

        return $response;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - ex7</title>
</head>

<body>

    <h1>Partie 4 - ex7</h1>

    <p>
        Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
            Homme
            Femme  
        
        La fonction doit renvoyer en fonction des paramètres :

        Vous êtes un homme et vous êtes majeur
        Vous êtes un homme et vous êtes mineur
        Vous êtes une femme et vous êtes majeure
        Vous êtes une femme et vous êtes mineure

        Gérer tous les cas. 
    </p>

    <!-- affichage du résultat -->
    <?= compare($age, $gender); ?>

    

</body>

</html>