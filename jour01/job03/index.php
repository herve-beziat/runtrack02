<!-- En PHP, il existe différents types de variables. Créez des variables de types primitifs
(boolean, entier, chaîne de caractères, nombre à virgule flottante) et affectez-y des
valeurs.
A l’aide de php, générer un tableau html qui contient dans son header trois colonnes
(type, nom, valeur) et dans son body, une ligne pour chacune des variables et de leurs
informations. -->


<?php

// Definition des variables de notre tableau
$type = ["Boolean","Entier","Str","Float"];
$nom = ["var0","var1","var2","var3"];
$valeur = ["True","12","abgherjy","10.5"];


// Mise en page du tableau
echo "
<table border=5>
    <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </tr>
    <tr>
        <td>$type[0]</td>
        <td>$nom[0]</td>
        <td>$valeur[0]</td>
    </tr>
    <tr>
        <td>$type[1]</td>
        <td>$nom[1]</td>
        <td>$valeur[1]</td>
    </tr>
    <tr>
        <td>$type[2]</td>
        <td>$nom[2]</td>
        <td>$valeur[2]</td>
    </tr>
    <tr>
        <td>$type[3]</td>
        <td>$nom[3]</td>
        <td>$valeur[3]</td>
    </tr>
</table>    
"
?>