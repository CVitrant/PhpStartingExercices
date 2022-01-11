<?php 
/*Ecrire un algorithme qui demande un nombre compris entre 10 et 20, jusqu’à ce que la réponse convienne. 
En cas de réponse supérieure à 20, on fera apparaître un message : « Plus petit ! », et inversement, « Plus grand ! » si le nombre est inférieur à 10.*/

$a = (int)readline('Entrez un nombre compris entre 10 et 20 : ');

if($a >= 10 && $a <= 20 ) {
    echo ('Votre nombre est bien compris entre 10 et 20');
}
else {
    while($a < 10 || $a > 20) {

        if($a >= 10 && $a <= 20 ) {
            echo ('Votre nombre est bien compris entre 10 et 20');
            break;
        }elseif ($a < 10) {
            $a = (int)readline("Plus grand ! : ");
        }elseif ($a > 20) {
            $a = (int)readline("Plus petit ! : ");
        }
    }
}

?>