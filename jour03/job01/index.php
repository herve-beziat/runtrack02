<?php
// Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
// Parcourez ce tableau et affichez pour chaque nombre “X est paire<br />” ou “X est
// impaire<br />”, sur votre page index.php. X prenant tour à tour chacune des valeurs
// comprises dans ce tableau.
// Ex. : 200 est paire
// 204 est paire
// 173 est impaire
// 98 est paire
// 171 est impaire
// 404 est paire
// 459 est impaire


$tab =[
    "200",
    "204", 
    "173", 
    "98", 
    "171", 
    "404", 
    "459"];

// Impression du tableau
echo "<pre>";
print_r ($tab);
echo "<br />";
echo "</pre>";

// Vérification de la condition pour les chiffres paires
foreach ($tab as $valeur) {
    if ($valeur%2 === 0) {
        echo $valeur . " est paire <br />";
    }
    else {echo "$valeur est impaire <br />";}
}













?>