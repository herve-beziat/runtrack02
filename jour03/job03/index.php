<?php
// Créez une variable de type string nommée $str et affectez y le texte :
// “I'm sorry Dave I'm afraid I can't do that”.
// Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
// Ex. : IoyaeIaaiIaoa

$str = "I'm sorry Dave I'm afraid I can't do that";
// création d'un tableau qui regroupe toutes les voyelles
$lettre = ["a","e","i","o","u","y","I"];

$i=0;

// On vérifie que chaque lettre de $str appartiennent ou pas à $lettre
while (isset($str[$i]) == true) {
    foreach ($lettre as $valeur){
        if ($str[$i] == $valeur){
            echo $str[$i];
        }
    }
$i =$i+1;
}

?>