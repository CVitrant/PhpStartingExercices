<?php

/*Ecrire un algorithme qui demande un nombre de départ, et qui ensuite écrit la table de multiplication de ce
nombre, présentée comme suit (cas où l'utilisateur entre le nombre 7) : Table de 7 : 7 x 1 = 7 7 x 2 = 14 7 x 3 = 21 ... 7 x 10 = 70*/
$a = (int)readline('Entrez votre nombre : ');
for($i = 1; $i <= 10; $i++) {
    $tmp = ($a*$i);
    echo $a.' x '.$i.' = '.$tmp."\r\n";
}

?>