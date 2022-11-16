<?php
// Créez une variable de type string nommée $str et affectez y le texte :
// “Dans l'espace, personne ne vous entend crier”.
// Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
// dans cette chaîne.

$str = "Dans l'espace, personne ne vous entend crier";
$compte = 0;

// Définition d'une variable $compte qui va compter le nombres de caractères présents
for ($i=0; isset($str[$i]); $i++){
    $compte++;
}
    echo $compte;


?>