<?php

/*Ecrire un algorithme qui demande successivement 20 nombres à l’utilisateur, et qui lui dise ensuite quel était le plus grand parmi ces 20 nombres 
: Entrez le nombre numéro 1 : 12 Entrez le nombre numéro 2 : 14 etc. Entrez le nombre numéro 20 : 
6 Le plus grand de ces nombres est : 14 Modifiez ensuite l’algorithme pour que le programme 
affiche de surcroît en quelle position avait été saisie ce nombre : C’était le nombre numéro 2*/
$array = array();
$plusgrand = 0;
$position = 0;
foreach(range(0,19) as $i) {
    $array[] = readline("Nombre : ");
    if ($array[$i] > $plusgrand) {
        $plusgrand = $array[$i];
        $position = $i + 1;
    }
}
print_r ($array);
echo "Le plus grand nombre entré est : ".$plusgrand." et c'était le nombre n°".$position.".\r\n";
?>