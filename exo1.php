<?php

//Ecrire un algorithme qui demande à l'utilisateur un nombre compris entre 1 et 3 jusqu'à ce que la réponse convienne.
$a = (int)readline('Entrez un nombre compris entre 1 et 3 : ');

if($a >= 1 && $a <= 3 ) {
    echo ('Votre nombre est bien compris entre 1 et 3');
}
else {
    while($a < 1 || $a > 3) {
        $a = (int)readline("Votre nombre n'est pas compris entre 1 et 3. Entrez un nombre compris entre 1 et 3 : ");
        if($a >= 1 && $a <= 3 ) {
            echo ('Votre nombre est bien compris entre 1 et 3');
            break;
        }
    }
}
?>