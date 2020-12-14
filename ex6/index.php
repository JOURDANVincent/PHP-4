<?php
    // Déclaration des variables
    $lastName = 'JOURDAN';
    $firstName = 'Vincent';
    $age = 37;

    // déclaration de la fonction 3 para
    function sentence($lastName, $firstName, $age) {

        return "Bonjour {$lastName} {$firstName}, tu as {$age} ans.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - ex6</title>
</head>

<body>

    <h1>Partie 4 - ex6</h1>

    <p>
        Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :  
        Bonjour + nom + prénom + , tu as + age + ans.
    </p>

    <?= sentence($lastName, $firstName, $age); ?>

</body>

</html>