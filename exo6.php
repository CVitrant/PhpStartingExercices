<?php 

/*Ecrivez un algorithme calculant la somme des valeurs d’un tableau (on suppose que le tableau a été préalablement saisi).*/
$tab = array(1, 2, 3, 4, 5, 6);
$tmp = 0;
for($i = 0; $i <= count($tab); $i++) {
    $tmp = $tmp + $tab[$i];
}

echo "La somme des valeurs du tableau est égale à : ".$tmp."\r\n";

?>