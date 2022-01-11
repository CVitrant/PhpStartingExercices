<?php

/*Réécrire l’algorithme précédent, 
mais cette fois-ci on ne connaît pas d’avance combien l’utilisateur souhaite saisir de nombres. 
La saisie des nombres s’arrête lorsque l’utilisateur entre un zéro.*/

$array = array();
$nbr = 1;
$i = 0;
$plusgrand = 0;
$position = 0;
while($nbr != 0) {
    $nbr = readline("Nombre : ");
    $array[$i] = $nbr;
    if ($array[$i] > $plusgrand) {
        $plusgrand = $array[$i];
        $position = $i + 1;
    }
    $i++;
}
print_r ($array);
echo "Le plus grand nombre entré est : ".$plusgrand." et c'était le nombre n°".$position.".\r\n";

?>