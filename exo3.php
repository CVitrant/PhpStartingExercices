<?php
/*Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants. 
Par exemple, si l'utilisateur entre le nombre 17, le programme affichera les nombres de 18 à 27.*/

$a = (int)readline('Entrez votre nombre : ');
for($i = 1; $i <= 10; $i++) {
    echo ($a + $i);
}
?>