<?php

/*Lire la suite des prix (en euros entiers et terminée par zéro) des achats d’un client. 
Calculer la somme qu’il doit, lire la somme qu’il paye, et simuler la remise de la monnaie en affichant les textes "10 Euros", "5 Euros" 
et "1 Euro" autant de fois qu’il y a de coupures de chaque sorte à rendre.*/
$array = array();
$nbr = 1;
$i = 0;
$somme = 0;
$position = 0;
while($nbr != 0) {
    $nbr = readline("Nombre : ");
    $array[$i] = $nbr;
    $somme = $somme + $nbr;
    $i++;
}
print_r ($array);
echo "La somme a payer est de : ".$somme."€. \r\n";

$argentrecu = readline("Combien allez-vous payer ? ");
$argentarendre = $argentrecu - $somme;
$billet10 = intdiv($argentarendre, 10);
$billet5 = intdiv($argentarendre - ($billet10*10), 5);
$piece1 = $argentarendre - ($billet10*10) - ($billet5*5);

echo "Vous avez payé ".$argentrecu.". \r\n";
echo "Nous vous rendons donc ".$billet10." billets de 10€, ".$billet5." billets de 5€ et ".$piece1." pièces de 1€ .\r\n";

?>